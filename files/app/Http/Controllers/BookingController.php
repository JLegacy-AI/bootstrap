<?php

namespace App\Http\Controllers;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Http\Request;
use App\Booking;
use App\BookingTimeslot;
use App\bookingImage;
use App\Airport;
use App\Timeslot;
use App\Car;
use Stripe;
use Redirect;
use Mail;
use DB;
use Carbon\Carbon;
use PDF;
use DateTime;
use Session;

use DatePeriod;
use DateInterval;

class BookingController extends Controller
{
    public function addBookingById($id, $email){
        $bookingTransfer = Booking::where('id', $id)->where('email', $email)->first();
        if(\Auth::user()){
            // $bookingTransfer = Booking::where('id', $id)->where('email', $email)->first();
            $bookingTransfer->user_id = \Auth::user()->id;
            if($bookingTransfer->save()){
                return json_encode($bookingTransfer);
            }else{
                return json_encode(['error'=>true, 'message'=> 'Numéro de réservation ou e-mail incorrect.']);
            }
        }else{
            if($bookingTransfer){
                $bookingArray = array();
                $bookingArray[] = $bookingTransfer;            
                session()->put('my_bookings', json_encode($bookingArray));
                return json_encode($bookingArray);
            }
            else{
                return json_encode(['error'=>true, 'message'=> 'Numéro de réservation ou e-mail incorrect.']);
            }
        }
    }
    public function checkAvailibility(Request $request){
        $start_time = $request->start_time;
        $end_time = $request->end_time;

        $start_date = str_replace('/', '-', $request->start_date);
        $end_date = str_replace('/', '-', $request->end_date);
        $start_date = @date_format(@date_create($start_date), 'Y-m-d');
        $end_date = @date_format(@date_create($end_date), 'Y-m-d');            

        $total_allowed = 0;
        $start_date = strtotime($start_date);
        $end_date = strtotime($end_date);
        $dt = BookingTimeslot::all();
        foreach($dt as $d){
            $d->start_date = strtotime($d->start_date);
            $d->end_date = strtotime($d->end_date);
            if($d->start_date <= $start_date && $d->end_date >= $end_date){
                $total_allowed =$d->total_capacity;
            }
        }

        $start_date = str_replace('/', '-', $request->start_date);
        $end_date = str_replace('/', '-', $request->end_date);
        $start_date = @date_format(@date_create($start_date), 'Y-m-d');
        $end_date = @date_format(@date_create($end_date), 'Y-m-d');
        $begin = new DateTime($start_date);
        $end = new DateTime($end_date);
        $end->add(new DateInterval('P1D'));

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);
        $isFull = false;

        // SELECT * FROM `booking_details` WHERE (STR_TO_DATE(start_date, '%d/%m/%Y') BETWEEN '2021-08-14' AND '2021-08-21') OR (STR_TO_DATE(end_date, '%d/%m/%Y') BETWEEN '2021-08-14' AND '2021-08-21')
        $getBookingsBetweenPeriod = Booking::whereRaw("(STR_TO_DATE(start_date, '%d/%m/%Y') BETWEEN '$start_date' AND '$end_date') OR (STR_TO_DATE(end_date, '%d/%m/%Y') BETWEEN '$start_date' AND '$end_date')")
        ->get();

        foreach ($period as $dt) {
            $totalBookingsOnThisDate = 0;
            $data = $dt->format("d/m/Y");
            foreach($getBookingsBetweenPeriod as $bookingCrit){
                $b_start_date = str_replace('/', '-', $bookingCrit->start_date);
                $b_end_date = str_replace('/', '-', $bookingCrit->end_date);
                $b_start_date = @date_format(@date_create($b_start_date), 'Y-m-d');
                $b_end_date = @date_format(@date_create($b_end_date), 'Y-m-d');
                $b_begin = new DateTime($b_start_date);
                $b_end = new DateTime($b_end_date);
                $b_end->add(new DateInterval('P1D'));
                $b_interval = DateInterval::createFromDateString('1 day');
                $b_period = new DatePeriod($b_begin, $b_interval, $b_end);
                foreach ($b_period as $b_dt) {
                    $b_data = $b_dt->format("d/m/Y");
                    if($b_data == $data){
                        $totalBookingsOnThisDate += 1;
                    }
                }
                if($b_end_date == $start_date){
                    $bookingCrit->end_time = str_replace(':', '.', $bookingCrit->end_time);
                    $start_time = str_replace(':', '.', $start_time);
                    if($bookingCrit->end_time < $start_time){
                        $totalBookingsOnThisDate -= 1;
                    }
                }
            }
            if($totalBookingsOnThisDate >= $total_allowed){
                $isFull = true;
            }else{
                $totalBookingsOnThisDate = 0;
            }
        }
        if($isFull){
            return json_encode([ 'isAvailable' => false ]);
        }else{
            return json_encode([ 'isAvailable' => true ]);
        }

    }
    public function requestLogin(Request $request){
        if(\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return json_encode([ 'loggedIn' => true ]);
        }else{
            return json_encode(['loggedIn' => false ]);
        }
    }
    public function index(){
            \Artisan::call('cache:clear');
            \Artisan::call('config:clear');
            $bookings = Booking::where('status','!=', 3)
            ->where('status','!=', 4)
            ->get();
            $dateNow = @date_format(@date_create(), 'd-m-Y h:i A');
            foreach($bookings as $booking => $value){
                $dateBooking = str_replace('/', '-', $value->start_date).' '.str_replace(' ', '', str_replace('      ', ':', $value->start_time));
                $bookingYear = @date_format(@date_create($dateBooking), 'd-m-Y h:i A');
                if(strtotime($bookingYear) < strtotime($dateNow)){
                    $value->status = 3;
                    $value->save();
                }else{
                    $first_date = new DateTime($dateNow);
                    $second_date = new DateTime($dateBooking);
                    $difference = $first_date->diff($second_date);
                    $hours = ($difference->days * 24) + $difference->h; // convert days to hours and add hours from difference
                    $newDiff =  $hours.".".$difference->i;        
                    if($newDiff < 0){
                        $value->status = 3;
                        $value->save();
                    }
                    if($newDiff < 24){
                        $value->status = 2;
                        $value->save();			
                    }
                }
            }
            $services['airports'] = Airport::all();
            $services['timeslots'] = Timeslot::all();
            $services['myvechiles'] = array();

            session()->forget('airport');
            session()->forget('start_date');
            session()->forget('start_time');
            session()->forget('end_date');
            session()->forget('end_time');
            session()->forget('days_difference');
            session()->forget('parking_charges');
            session()->forget('service_type');
            session()->forget('services_charges');
            return view('pages/index')->with($services);
    }
    public function modifyBookingByUser(Request $request){
        $start_date = str_replace('/', '-', $request->start_date).' '.$request->start_time;
        $start_date = @date_format(@date_create($start_date), 'd-m-Y h:i A');
        $end_date = str_replace('/', '-', $request->end_date).' '.$request->end_time;
        $end_date = @date_format(@date_create($end_date), 'd-m-Y h:i A');
        $first_date = new DateTime($start_date);
        $second_date = new DateTime($end_date);
        $difference = $first_date->diff($second_date);
        $hours = ($difference->days * 24) + $difference->h;
        $newDiff = $hours.".".$difference->i;
        $parking_charges = 0;
        $days = 0;
        if($newDiff < 24){
            $parking_charges = 14.99;
        }else if($newDiff >= 24){
            $days = $difference->days + 1;
            $parking_charges = 9.99 + (5 * $days);
        }else if($newDiff > 168){
            $parking_charges = 0;
        }else{
            $parking_charges = 0;
        }
        $finalPrice = $parking_charges + $request->service_charges;
        if($finalPrice > $request->price){
            $extra = $finalPrice - (int)$request->price;
            return json_encode(array(
                'type' => 'to_pay',
                'extra' => number_format($extra,2)
            ));
        }elseif($finalPrice < $request->price){
            $extra = (int)$request->price - $finalPrice;
            return json_encode(array(
                'type' => 'to_refund',
                'extra' => number_format($extra,2)
            ));
        }else{
            return json_encode(array(
                'type' => 'no_action_required',
                'extra' => 0
            ));
        }
    }
    public function book(Request $request){
        $start_date = str_replace('/', '-', $request->start_date).' '.$request->start_time;
        $start_date = @date_format(@date_create($start_date), 'd-m-Y h:i A');
        $end_date = str_replace('/', '-', $request->end_date).' '.$request->end_time;
        $end_date = @date_format(@date_create($end_date), 'd-m-Y h:i A');
        $first_date = new DateTime($start_date);
        $second_date = new DateTime($end_date);
        $difference = $first_date->diff($second_date);
        $hours = ($difference->days * 24) + $difference->h;
        $newDiff = $hours.".".$difference->i;
        $parking_charges = 0;
        $days = 0;
        if($newDiff < 24){
            $parking_charges = 14.99;
        }else if($newDiff >= 24){
            $days = $difference->days + 1;
            $parking_charges = 9.99 + (5 * $days);
        }else if($newDiff > 168){
            $parking_charges = 0;
        }else{
            $parking_charges = 0;
        }
        if($request->start_date && $request->end_date){    
            $start_date = @date_format(@date_create($request->start_date), 'd/m/Y');
            $end_date = @date_format(@date_create($request->end_date), 'd/m/Y');            
            session()->put('days_difference', $days);
            session()->put('parking_charges', $parking_charges);
            session()->put('airport', $request->airport);
            session()->put('start_date', $start_date);
            session()->put('start_time', $request->start_time);
            session()->put('end_date', $end_date);
            session()->put('end_time', $request->end_time);
        }   
        if(!$request->session()->has('start_date')){
            return redirect('/');
        }
        return view('pages/book');
    }
    public function details(Request $request){
        $data['myvechiles'] = array();
        if(\Auth::user()){
            $data['myvechiles'] = Car::where('user_id', \Auth::user()->id)->get();
        }

        if(!$request->session()->has('start_date')){
            return redirect('/');
        }
        return view('pages/book-final')->with($data);
    }
    public function setSessionContact(Request $request){
        session()->put('checkout_name', $_POST['name']);
        session()->put('checkout_email', $_POST['email']);
        session()->put('checkout_phone', $_POST['phone']);
        return $_POST;
    }
    public function setSessionVehicle(Request $request){
        session()->put('checkout_vehicle', $_POST['vehicle']);
        session()->put('checkout_model', $_POST['model']);
        session()->put('checkout_number', $_POST['number']);
        return $_POST;
    }
    public function setSessionCard(Request $request){
        session()->put('checkout_cardholder', $_POST['cardholder']);
        session()->put('checkout_cardnumber', $_POST['cardnumber']);
        session()->put('checkout_cardexpirymonth', $_POST['cardexpirymonth']);
        session()->put('checkout_cardexpiryyear', $_POST['cardexpiryyear']);
        session()->put('checkout_cardsecurity', $_POST['cardsecurity']);
        return $_POST;
    }
    public function setService($service){
        $data = explode('-', $service);
        session()->put('service_type', $data[0]);
        session()->put('services_charges', $data[1]);
        $total = session()->get('parking_charges') + $data[1];
        return json_encode([
            'service_type' => $data[0],
            'services_charges' => $data[1],
            'total' => $total
        ]);
    }
    public function unsetService(){
        $total = session()->get('parking_charges');
        session()->forget('service_type');
        session()->forget('services_charges');
        return json_encode([
            'total' => $total
        ]);
    }
    public function updateBooking(Request $request){
        $booking = Booking::find($request->id);
        $booking->update(array(
            'name' => $request->contact_name,
            'email' => $request->contact_email,
            'phone' => $request->contact_telephone,
            'vehicle' => $request->vehicle,
            'vechiclefaculty' => $request->vehiclefaculty,
            'vehiclemodel' => $request->vehiclemodel
        ));
        if($booking){
            return json_encode($booking);
        }
    }
    public function updateBookingStatus($id, Request $request){
        $booking = Booking::find($id);
        if($booking->driver_status == 0){
            $booking->driver_status = 1;
        }
        elseif($booking->driver_status == 1){
            $booking->driver_status = 2;
        }
        elseif($booking->driver_status == 2){
            $booking->driver_status = 3;
        }
        else{
            
        }
        if($booking->save()){
            return json_encode($booking->driver_status);
        }
    }
    public function uploadImage($id, Request $request){
        if(isset($_FILES)){
            foreach($_FILES as $file => $value){
                    $file = $request->file($file);
                    //you also need to keep file extension as well
                    $name = $file->getClientOriginalName();
                    //using the array instead of object
                    $application_logo['application_logo'] = $name;
                    $file->move(public_path() . '/uploads/', $name);
                    $fileUpload = BookingImage::create(array(
                        'booking_id' => $id,
                        'path' => asset('public/uploads/'.$name)
                    ));
            }
        }
        $totalFiles = BookingImage::where('booking_id', $id)->get();
        $htmlFormat = "";
        foreach($totalFiles as $file => $value){
            $htmlFormat .= '<div class="position-relative"><img src="'.$value->path.'" class="driver__reserv_mdl__imgs" alt=""><a class="position-absolute remove_btn" onclick="removeImage('. $value->id .')">X</a></div>';
        }
        return $htmlFormat;
    }
    public function removeImage($id, $image_id, Request $request){
        $removeImage = BookingImage::find($image_id)->delete();
        if($removeImage){
            $totalFiles = BookingImage::where('booking_id', $id)->get();
            $htmlFormat = "";
            foreach($totalFiles as $file => $value){
                $htmlFormat .= '<div class="position-relative"><img src="'.$value->path.'" class="driver__reserv_mdl__imgs" alt=""><a class="position-absolute remove_btn" onclick="removeImage('. $value->id .')">X</a></div>';
            }
            return $htmlFormat;
        }
    }
    public function booking_from(Request $request)
    {
    	return view('booking.booking_form');
    }
    public function printPDF()
    {
        $data['booking'] = DB::table('booking_details')->latest('created_at')->first();


        $pdf = PDF::loadView('pdf_view', $data); 
        $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isRemoteEnabled' => true]);
  
        $pdf->stream();
        
        return $pdf->download(rand().'medium.pdf'); 
    }
    public function paypalPaymentNew(Request $request)
    {
        $booking_data = $request->except(['_token','card_holder','card_number','csv','expiry','booking_data']);
       $services = "";
        
        if(!isset($booking_data['service']))
        {
            $booking_data['parking_charges'] = $request->parking_charges;
            $booking_data['services_charges'] = $request->services_charges;
            $booking_data['price'] = $request->total;
            // $booking_data['days_difference'] = $request->total;
            unset($booking_data['service_type']);
            // dd($request->service_type[0]);
            // dd($booking_data['service_type']);
            $ins = Booking::create($booking_data);
            
            $data = [];
            $data['items'] = [ 
                [
                    'name' => 'Car booking',
                    'price' => $booking_data['price'],
                    'desc'  => 'Description for car booking',
                    'qty' => 1
                ]
            ];
        } 
        elseif(count($booking_data['service']) > 0){
            
            foreach($booking_data['service'] as $k => $service)
                $services .= explode('-',$service)[0];
 
            $booking_data['service'] = $services;
            // dd($request->service_type);
            //$booking_data['service_type'] = implode(',',$request->service_type);
         
         
            $booking_data['price'] = $request->total;
            $booking_data['parking_charges'] = $request->parking_charges;
            $booking_data['services_charges'] = $request->services_charges;
            $ins = Booking::create($booking_data);
            
            $data = [];
            $data['items'] = [
                [
                    'name' => 'Car booking',
                    'price' => $booking_data['price'],
                    'desc'  => 'Description for car booking',
                    'qty' => 1
                ]
            ];
        } 
        
  
        $data['invoice_id'] = $ins->id;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $booking_data['price'];
        $data['booking'] = DB::table('booking_details')->latest('created_at')->first();
        
        $data['booking']->invoice_id = $data['invoice_id'];
        $data['booking']->parking_ht = (float)$data['booking']->parking_charges / 1.2;
        
        $data['booking']->parking_ht = number_format((float)$data['booking']->parking_ht, 2, '.', '');
        
        $data['booking']->service_ht = (float)$data['booking']->services_charges / 1.2;
        
        $data['booking']->service_ht = number_format((float)$data['booking']->service_ht, 2, '.', '');
        
        $data['booking']->ht = (float)$data['booking']->parking_ht + (float)$data['booking']->service_ht;
        
        $data['booking']->tva = (float)$data['booking']->price - $data['booking']->ht;
        
    //   dd($data['booking']->tva);
        //PAYPAL INTEGRATION
        // $provider = new ExpressCheckout;
        // // $response = $provider->setExpressCheckout($data);
        // $response = $provider->setExpressCheckout($data, true);
        // $redirect_url = $response['paypal_link'];
        // return redirect($redirect_url);

   //STRIPE INTEGRATION
        try {
            
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $card_detail = array(
                'card' => [
                    'number' => $request->card_number,
                    'exp_month' => $request->exp_month,
                    'exp_year' => $request->exp_year,
                    'cvc' => $request->cvc,
                  ]
            );
            
            $token = Stripe\Token::create($card_detail);
            if(!$token->error){
                $detail = array(
                    "amount" => $booking_data['price'] * 100,
                    "currency" => 'EUR',
                    "source" => $token->id,
                    "description" => "ParkMe-".rand(0, 1000),
                    'transfer_group' =>$ins->id
                );
                
                $charge = Stripe\Charge::create($detail, [
                    'idempotency_key' => uniqid()
                ]);
                if(isset($charge->id) && !empty($charge->id)){
                    //Send Email Receipt
                    // $email = $data["booking"]->email;

                    $exitCode = \Artisan::call('cache:clear');
                    $exitCode = \Artisan::call('view:clear');
 
                    $pdf = PDF::loadView('pdf_view', $data); 
                    $pdf->setOptions(['dpi' => 150, 'isRemoteEnabled' => true, 'setPaper' => 'a4']);
                    $pdf->stream();
                      
                    Mail::send('emails/email_new_template', $data, function ($message) use ($data,$pdf) {
                    
                        // $message->to('parkmemat@gmail.com', 'User')
                        $message->to($data["booking"]->email, 'User')
                            ->subject('Votre réservation Parkme');
                        $message->cc('parkme@helloapp.be', 'Parkme');
                        $message->from('contact@parkme.fr', 'Parkme');
                        $message->attachData($pdf->output(), 'invoice.pdf');
                    });
                    // dd($data);
                    return redirect('thank-you'); 
                    // Redirect::to('/')->with('success_message', 'Charged has been made.');
                }else{
                    $this->_responseData['status'] = 0;
                    $this->_responseData['message'] = "Failed to charged";
                }
            }else{
                $this->_responseData['status'] = 0;
                $this->_responseData['message'] = $token->message;
            }

        }catch(Stripe\Exception\CardException $e) {
          $error1 = $e->getMessage();
          $this->_responseData['status'] = 0;
        //   $this->_responseData['message'] = $error1;
        return back()->withError($e->getMessage())->withInput();
          
        //   dd($error1);
        } catch (\Stripe\Exception\RateLimitException $e) {
          // Invalid parameters were supplied to Stripe's API
          $error2 = $e->getMessage();
          $this->_responseData['status'] = 0;
        //   $this->_responseData['message'] = $error2;
        //   dd($error2);
        return back()->withError($e->getMessage())->withInput();
        } catch (\Stripe\Exception\InvalidRequestException $e) {
          // Authentication with Stripe's API failed
          $error3 = $e->getMessage();
        //   $body = $e->getJsonBody();
        //   $err  = $body['error'];
          $this->_responseData['status'] = 0;
        //   $this->_responseData['message'] = $error3;
        //   dd($error3);
        return back()->withError($e->getMessage())->withInput();
        }catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            $body = $e->getJsonBody();
            $err  = $body['error'];
            $this->_responseData['status'] = 0;
            // $this->_responseData['message'] = $err['message'];
            return back()->withError($e->getMessage())->withInput();
        }
        // dd(88888);
        if($this->_responseData['status'] = 1)
        {
           return Redirect::to('/')->with('success_message', 'Charged has been made.');
        }
        else
        {
            return Redirect::to('/')->with('failed_message', 'Failed to charged.');
        }
        // echo $this->_responseData['message'];
    }

    public function paypalPayment(Request $request)
    {
        $booking_data = $request->except(['_token','card_holder','card_number','csv','expiry','booking_data']);
        $services = ",";
        
        if(!isset($booking_data['service']))
        {
            $booking_data['parking_charges'] = $request->parking_charges;
            $booking_data['services_charges'] = $request->services_charges;
            $booking_data['price'] = $request->total;
            // $booking_data['days_difference'] = $request->total;
            unset($booking_data['service_type']);
            // dd($request->service_type[0]);
            // dd($booking_data['service_type']);
            if(\Auth::user()){
                $booking_data['user_id'] = \Auth::user()->id;
            }

            
            $booking_data['vehicle'] = $request->vehicle;
            $booking_data['vehiclemodel'] = $request->vehiclemodel;
            $booking_data['vehiclefaculty'] = $request->vehiclefaculty;

            $ins = Booking::create($booking_data);
            
            $data = [];
            $data['items'] = [
                [
                    'name' => 'Car booking',
                    'price' => $booking_data['price'],
                    'desc'  => 'Description for car booking',
                    'qty' => 1
                ]
            ];
        }
        elseif(count($booking_data['service']) > 0){
            
            foreach($booking_data['service'] as $k => $service)
                $services .= explode('-',$service)[0];
 
            $booking_data['service'] = $services;
            // dd($request->service_type);
            if(is_array($request->service_type)){
            $booking_data['service_type'] = implode(',',$request->service_type);
            }
            else{

                $booking_data['service_type'] = $request->service_type;
            }
            if(\Auth::user()){
                $booking_data['user_id'] = \Auth::user()->id;
            }
            $booking_data['price'] = $request->total;
            $booking_data['parking_charges'] = $request->parking_charges;
            $booking_data['services_charges'] = $request->services_charges;

            $booking_data['vehicle'] = $request->vehicle;
            $booking_data['vehiclemodel'] = $request->vehiclemodel;
            $booking_data['vehiclefaculty'] = $request->vehiclefaculty;

            $ins = Booking::create($booking_data);
            
            $data = [];
            $data['items'] = [
                [
                    'name' => 'Car booking',
                    'price' => $booking_data['price'],
                    'desc'  => 'Description for car booking',
                    'qty' => 1
                ]
            ];
        } 
        
  
        $data['invoice_id'] = $ins->id;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $booking_data['price'];
        $data['booking'] = DB::table('booking_details')->latest('created_at')->first();
        
        $data['booking']->invoice_id = $data['invoice_id'];
        $data['booking']->parking_ht = (float)$data['booking']->parking_charges / 1.2;
        
        $data['booking']->parking_ht = number_format((float)$data['booking']->parking_ht, 2, '.', '');
        
        $data['booking']->service_ht = (float)$data['booking']->services_charges / 1.2;
        
        $data['booking']->service_ht = number_format((float)$data['booking']->service_ht, 2, '.', '');
        
        $data['booking']->ht = (float)$data['booking']->parking_ht + (float)$data['booking']->service_ht;
        
        $data['booking']->tva = (float)$data['booking']->price - $data['booking']->ht;
        
    //   dd($data['booking']->tva);
        //PAYPAL INTEGRATION
        // $provider = new ExpressCheckout;
        // // $response = $provider->setExpressCheckout($data);
        // $response = $provider->setExpressCheckout($data, true);
        // $redirect_url = $response['paypal_link'];
        // return redirect($redirect_url);


       //STRIPE INTEGRATION
        try {
            
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $card_detail = array(
                'card' => [
                    'number' => $request->card_number,
                    'exp_month' => $request->exp_month,
                    'exp_year' => $request->exp_year,
                    'cvc' => $request->cvc,
                  ]
            );
            
            $token = Stripe\Token::create($card_detail);
            if(!$token->error){
                // $booking_data['price'] = 1;
                $detail = array(
                    "amount" => $booking_data['price'] * 100,
                    "currency" => 'EUR',
                    "source" => $token->id,
                    "description" => "ParkMe-".rand(0, 1000),
                    'transfer_group' =>$ins->id
                );
                
                $charge = Stripe\Charge::create($detail, [
                    'idempotency_key' => uniqid()
                ]);
                if(isset($charge->id) && !empty($charge->id)){
                    //Send Email Receipt
                    // $email = $data["booking"]->email;

                    $exitCode = \Artisan::call('cache:clear');
                    $exitCode = \Artisan::call('view:clear');
 
                    $pdf = PDF::loadView('pdf_view', $data); 
                    $pdf->setOptions(['dpi' => 150, 'isRemoteEnabled' => true, 'setPaper' => 'a4']);
                    $pdf->stream();
                      
                    Mail::send('emails/email_new_template', $data, function ($message) use ($data,$pdf) {
                    
                        // $message->to('parkmemat@gmail.com', 'User')
                        $message->to($data["booking"]->email, 'User')
                            ->subject('Votre réservation Parkme');
                        $message->cc('parkme@helloapp.be', 'Parkme');
                        $message->from('contact@parkme.fr', 'Parkme');
                        $message->attachData($pdf->output(), 'invoice.pdf');
                    });
                    // dd($data);

                    $saveResponse = Booking::find($ins->id);
                    $saveResponse->response_data = json_encode($charge->getLastResponse());
                    $saveResponse->save();
        
                    
                    session()->forget('airport');
                    session()->forget('start_date');
                    session()->forget('start_time');
                    session()->forget('end_date');
                    session()->forget('end_time');
                    session()->forget('days_difference');
                    session()->forget('parking_charges');
                    session()->forget('service_type');
                    session()->forget('services_charges');   
                                
                    session()->forget('checkout_name');
                    session()->forget('checkout_email');
                    session()->forget('checkout_phone');
                    session()->forget('checkout_vehicle');
                    session()->forget('checkout_model');
                    session()->forget('checkout_number');
                    session()->forget('checkout_cardholder');
                    session()->forget('checkout_cardnumber');
                    session()->forget('checkout_cardexpirymonth');
                    session()->forget('checkout_cardexpiryyear');
                    session()->forget('checkout_cardsecurity');
        
                    $bookingTransfer = Booking::where('id', $ins->id)->first();
                    if(\Auth::user()){
                        // $bookingTransfer = Booking::where('id', $id)->where('email', $email)->first();
                        $bookingTransfer->user_id = \Auth::user()->id;
                        if($bookingTransfer->save()){
                        //     return json_encode($bookingTransfer);
                        }
                        // else{
                        //     return json_encode(['error'=>true, 'message'=> 'Numéro de réservation ou e-mail incorrect.']);
                        // }
                    }else{
                        if($bookingTransfer){
                            $bookingArray = array();
                            $bookingArray[] = $bookingTransfer;            
                            session()->put('my_bookings', json_encode($bookingArray));
                            // return json_encode($bookingArray);
                        }
                        // else{
                        //     return json_encode(['error'=>true, 'message'=> 'Numéro de réservation ou e-mail incorrect.']);
                        // }
                    }

                    return redirect('thank-you/'.$ins->id); 
                    // Redirect::to('/')->with('success_message', 'Charged has been made.');
                }else{
                    $removeBooking = Booking::find($ins->id)->delete();
                    $this->_responseData['status'] = 0;
                    $this->_responseData['message'] = "Failed to charged";
                    return redirect('book/details');

                }
            }else{
                $removeBooking = Booking::find($ins->id)->delete();
                $this->_responseData['status'] = 0;
                $this->_responseData['message'] = $token->message;
                return redirect('book/details');
            }

        }catch(Stripe\Exception\CardException $e) {
        $removeBooking = Booking::find($ins->id)->delete();
          $error1 = $e->getMessage();
          $this->_responseData['status'] = 0;
        //   $this->_responseData['message'] = $error1;
        return back()->withError($e->getMessage())->withInput();
          
        //   dd($error1);
        } catch (\Stripe\Exception\RateLimitException $e) {
        $removeBooking = Booking::find($ins->id)->delete();
            // Invalid parameters were supplied to Stripe's API
          $error2 = $e->getMessage();
          $this->_responseData['status'] = 0;
        //   $this->_responseData['message'] = $error2;
        //   dd($error2);
        return back()->withError($e->getMessage())->withInput();
        } catch (\Stripe\Exception\InvalidRequestException $e) {
        $removeBooking = Booking::find($ins->id)->delete();
            // Authentication with Stripe's API failed
          $error3 = $e->getMessage();
        //   $body = $e->getJsonBody();
        //   $err  = $body['error'];
          $this->_responseData['status'] = 0;
        //   $this->_responseData['message'] = $error3;
        //   dd($error3);
        return back()->withError($e->getMessage())->withInput();
        }catch (Exception $e) {
        $removeBooking = Booking::find($ins->id)->delete();
            // Something else happened, completely unrelated to Stripe
            $body = $e->getJsonBody();
            $err  = $body['error'];
            $this->_responseData['status'] = 0;
            // $this->_responseData['message'] = $err['message'];
            return back()->withError($e->getMessage())->withInput();
        }
        // dd(88888);
        if($this->_responseData['status'] = 1)
        {
        //    return Redirect::to('/')->with('success_message', 'Charged has been made.');
           return redirect('book/details');
        }
        else
        {
            $removeBooking = Booking::find($ins->id)->delete();
            // return Redirect::to('/')->with('failed_message', 'Failed to charged.');
            return redirect('book/details');
        }
        // echo $this->_responseData['message'];
    }
    public function admin_email_receipt(Request $request)
    {

        $booking_data = $request->except(['_token','card_holder','card_number','csv','expiry','booking_data']);
        $services = "";
      
        if(!isset($booking_data['service']))
        {
            $this->validate($request, [
            'start_date' => 'required',
            'start_time' => 'required',
            'end_date' => 'required',
            'end_time' => 'required',
            ]);
            $booking_data['parking_charges'] = $request->parking_charges;
            $booking_data['services_charges'] = $request->services_charges;
            $booking_data['price'] = $request->total;
            // $booking_data['days_difference'] = $request->total;
            //unset($booking_data['service_type']);
            // dd($request->service_type[0]);
            // dd($booking_data['service_type']);
            $ins = Booking::create($booking_data);
            
            $data = [];
            $data['items'] = [
                [
                    'name' => 'Car booking',
                    'price' => $booking_data['price'],
                    'desc'  => 'Description for car booking - Admin',
                    'qty' => 1
                ]
            ];
        }
        elseif(count($booking_data['service']) > 0){
            
            foreach($booking_data['service'] as $k => $service)
                $services .= explode('-',$service)[0];
 
            $booking_data['service'] = $services;
            // dd($request->service_type);
            // $booking_data['service_type'] = implode(',',$request->service_type);
            $booking_data['service_type'] = explode('-',$service)[0];
         
         
            $booking_data['price'] = $request->total;
            $booking_data['parking_charges'] = $request->parking_charges;
            $booking_data['services_charges'] = $request->services_charges;
            $ins = Booking::create($booking_data);
            
            $data = [];
            $data['items'] = [
                [
                    'name' => 'Car booking',
                    'price' => $booking_data['price'],
                    'desc'  => 'Description for car booking - Admin',
                    'qty' => 1
                ]
            ];
        } 
        
  
        $data['invoice_id'] = $ins->id;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $booking_data['price'];
        $data['booking'] = DB::table('booking_details')->latest('created_at')->first();
        
        $data['booking']->invoice_id = $data['invoice_id'];
        $data['booking']->parking_ht = (float)$data['booking']->parking_charges / 1.2;
        
        $data['booking']->parking_ht = number_format((float)$data['booking']->parking_ht, 2, '.', '');
        
        $data['booking']->service_ht = (float)$data['booking']->services_charges / 1.2;
        
        $data['booking']->service_ht = number_format((float)$data['booking']->service_ht, 2, '.', '');
        
        $data['booking']->ht = (float)$data['booking']->parking_ht + (float)$data['booking']->service_ht;
        
        $data['booking']->tva = (float)$data['booking']->price - $data['booking']->ht;
 
       
        $exitCode = \Artisan::call('cache:clear');
        $exitCode = \Artisan::call('view:clear');

        $pdf = PDF::loadView('pdf_view', $data); 
        $pdf->setOptions(['dpi' => 150, 'isRemoteEnabled' => true, 'setPaper' => 'a4']);
        $pdf->stream();
          
        Mail::send('emails/email_new_template', $data, function ($message) use ($data,$pdf) {
        
            // $message->to('parkmemat@gmail.com', 'User')
            $message->to($data["booking"]->email, 'User')
                ->subject('Votre réservation Parkme');
            $message->cc('parkme@helloapp.be', 'Parkme');
            $message->from('contact@parkme.fr', 'Parkme');
            $message->attachData($pdf->output(), 'invoice.pdf');
        });
        if($ins)
            return redirect()->back()->with('success', 'Votre réservation est créée!');
        else
            return redirect()->back()->with('failed_message', "'Désolé, votre réservation n'est pas créée!'");
    }
        /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $booking = Booking::find($response['INVNUM']);
            $booking->status = 2;
            $booking->save();
            // $url = route('payment.thankyou');
            // return redirect($url);
            return redirect()->back()->with('message', "Merci d'avoir réservé!");

        }
        return redirect()->back()->with('failed_message', "Désolé votre réservation n'est pas terminée!");
        // dd('Something is wrong.');
    }
    public function create_booking_details(Request $request)
    {
        $data = $request->except(['_token','card_holder','card_number','csv','expiry']);
        $data['service'] = explode('-',$request->service)[0];
        $data['price'] = explode('-',$request->service)[1];
    	$ins = Booking::insert($data);
		if($ins)
			return redirect()->back()->with('message', 'your appointment is completed!');
		else
			return redirect()->back()->with('failed_message', 'Sorry your appointment is not completed!');
    }
    public function send_email()
    {
        // $data = array('a'=>'abc','e'=>'abc','d'=>'abc','c'=>'abc','b'=>'abc');
            $data['booking'] = DB::table('booking_details')->latest('created_at')->first();
  
            Mail::send('emails/email', $data, function ($message) {
                        $message->to('amy13dec@gmail.com', 'User')
                            ->subject('Votre réservation Parkme');
                        $message->from('contact@parkme.fr', 'Parkme');
                    });
                            
    }    
    public function email_new()
    {
        $data['booking'] = DB::table('booking_details')->where('id',971)->first();
  
          return view('emails/email_new_template',$data);  

        // $pdf = PDF::loadView('pdf_test', $data); 
        // $pdf->setOptions(['dpi' => 150, 'isRemoteEnabled' => true, 'setPaper' => 'a4']);
        // return $pdf->download('invoice.pdf');
        // $pdf->stream();
        // use ($pdf) 
       
        Mail::send('emails/email_new_template', $data, function ($message)  {
            $message->to('tecdachi@gmail.com', 'User')
                ->subject('Votre réservation Parkme');
            $message->from('contact@parkme.fr', 'Parkme');
            //$message->attachData($pdf->output(), 'invoice.pdf');
        });
        return view('thankyou');
    }
    public function email_a()
    {
        $data['booking'] = DB::table('booking_details')->latest('created_at')->first();
        return view('emails/email',$data);
    }
    public function thankyouPage($orderid){
        $order = Booking::where('id',$orderid)->first();
        return view('pages/thankyou', compact('order'));
    }
}  