<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\bookingImage;
use App\User;
use App\Car;
use App\Airport;
use App\BookingTimeslot;
use App\HelpCenterCategories;
use App\Settings;
use App\ServiceCharges;
use App\HelpCenterContent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Session;
use Carbon\Carbon;
use DateTime;
use Stripe;
use Mail;
use DatePeriod;
use DateInterval;
use App\Timeslot;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (\Auth::user()->role_id == 1) {
            $cars = Car::get();
            return view('admin/home', ['cars' => $cars]);
        } elseif (\Auth::user()->role_id == 2) {
            $cars = Car::where('user_id', \Auth::user()->id)->get();
            return view('admin/home', ['cars' => $cars]);
        } else {
            $bookings = Booking::where('airport', \Auth::user()->airport_id)->get();
            $bookingsToday = array();
            $bookingsTomorrow = array();
            $bookingsSevenDays = array();
            $bookingsFourteenDays = array();
            $dateNow = @date_format(@date_create(), 'd-m-Y');
            foreach($bookings as $booking => $value){
                $dateBooking = str_replace('/', '-', $value->start_date).' '.str_replace(' ', '', str_replace('      ', ':', $value->start_time));
                $dateBookingEnd = str_replace('/', '-', $value->end_date).' '.str_replace(' ', '', str_replace('      ', ':', $value->end_time));
                $bookingYear = @date_format(@date_create($dateBooking), 'd-m-Y');
                $bookingEndYear = @date_format(@date_create($dateBookingEnd), 'd-m-Y');
                    if($dateNow == $bookingYear || $dateNow == $bookingEndYear){ // for todays booking
                        if($dateNow == $bookingYear){
                            $value->type = "arrival";
                        }else{
                            if($value->driver_status < 2){
                                $value->driver_status = 2;
                                $value->save();
                            }
                            $value->type = "return";   
                        }
                        $value->dateRecord = $dateNow;
                        $bookingsToday[] = $value; 
                    }
                    $tomorrow = new DateTime($dateNow);
                    $tomorrow->modify('+1 day');
                    $dateTomorrow = $tomorrow->format('d-m-Y');
                    if($dateTomorrow == $bookingYear || $dateTomorrow == $bookingEndYear){ // for todays booking
                        if($dateTomorrow == $bookingYear){
                            $value->type = "arrival";
                        }else{
                            if($value->driver_status < 2){
                                $value->driver_status = 2;
                                $value->save();
                            }
                            $value->type = "return";   
                        }
                        $value->dateRecord = $dateTomorrow;
                        $bookingsTomorrow[] = $value;
                    }
                    $a_begin = new DateTime($dateNow);
                    $a_end = new DateTime($dateNow);
                    $dateSevenDays = $a_end->modify('+7 day');
                    $a_end->add(new DateInterval('P1D'));
                    $a_interval = DateInterval::createFromDateString('1 day');
                    $a_period = new DatePeriod($a_begin, $a_interval, $a_end);
                    foreach ($a_period as $a_dt) {
                        $a_data = $a_dt->format("d/m/Y");
                        if($a_data == $bookingYear || $a_data == $bookingEndYear ){
                            if($a_data == $bookingYear){
                                $value->type = "arrival";
                            }else{
                                if($value->driver_status < 2){
                                    $value->driver_status = 2;
                                    $value->save();
                                }
                                $value->type = "return";
                            }
                            $value->dateRecord = $a_data;
                            $bookingsSevenDays[] = $value;
                        }
                    }
                    $b_begin = new DateTime($dateNow);
                    $b_end = new DateTime($dateNow);
                    $dateFourteenDays = $b_end->modify('+14 day');
                    $b_end->add(new DateInterval('P1D'));
                    $b_interval = DateInterval::createFromDateString('1 day');
                    $b_period = new DatePeriod($b_begin, $b_interval, $b_end);
                    foreach ($b_period as $b_dt) {
                        $b_data = $b_dt->format("d/m/Y");
                        if($b_data == $bookingYear || $b_data == $bookingEndYear ){
                            if($b_data == $bookingYear){
                                $value->type = "arrival";
                            }else{
                                if($value->driver_status < 2){
                                    $value->driver_status = 2;
                                    $value->save();
                                }
                                $value->type = "return";
                            }
                            $value->dateRecord = $b_data;
                            $bookingsFourteenDays[] = $value;
                        }
                    }
            }
            return view('driver/home', compact('bookingsToday','bookingsTomorrow', 'bookingsSevenDays', 'bookingsFourteenDays'));
        }
    }
    public function postAddVehicle(Request $request)
    {
        $car = Car::create([
            'user_id' => $request->user_id,
            'car_brand' => $request->car_brand,
            'car_model' => $request->car_model,
            'car_number' => $request->car_number
        ]);
        return json_encode($car);
    }
    public function postEditVehicle(Request $request)
    {
        $car = Car::find($request->id);
        $car->car_brand = $request->car_brand;
        $car->car_model = $request->car_model;
        $car->car_number = $request->car_number;
        $car->save();
        return json_encode($car);
    }
    public function deleteVehicle(Request $request)
    {
        $delete = Car::find($_POST['id'])->delete();
        if ($delete) {
            return json_encode(['error' => false, 'message' => 'delete successfully']);
        } else {
            return json_encode(['error' => true, 'message' => 'cannot delete this vehicle']);
        }
    }
    public function reservations()
    {
        if (\Auth::user()) {
            $bookings = Booking::where('user_id', \Auth::user()->id)
                ->where('status','!=', 4)
                ->orderByDesc('id')
                ->paginate(5);
            $pendingbookings = Booking::where('user_id', \Auth::user()->id)
                ->where('status', 1)
                ->orderByDesc('id')
                ->paginate(5);
            $inprogressbookings = Booking::where('user_id', \Auth::user()->id)
                ->where('status', 2)
                ->orderByDesc('id')
                ->paginate(5);
            $completedbookings = Booking::where('user_id', \Auth::user()->id)
                ->where('status', 3)
                ->orderByDesc('id')
                ->paginate(5);
            $failedbookings = Booking::where('user_id', \Auth::user()->id)
                ->where('status', 4)
                ->orderByDesc('id')
                ->paginate(5);
        } else {
            $bookings = session()->get('my_bookings') ?? array();
            $pendingbookings = array();
            $inprogressbookings = array();
            $completedbookings = array();
            $failedbookings = array();
            if (!empty($bookings)) {
                $bookings = json_decode($bookings);
                foreach ($bookings as $book) {
                    if ($book->status == 0) {
                        $pendingbookings[] = $book;
                    } elseif ($book->status == 1) {
                        $inprogressbookings[] = $book;
                    } elseif ($book->status == 2) {
                        $completedbookings[] = $book;
                    } else {
                        $completedbookings[] = $book;
                    }
                }
            }
        }
        return view('admin/reservations-list', [
            'bookings' => $bookings,
            'pending_bookings' => $pendingbookings,
            'inprogress_bookings' => $inprogressbookings,
            'completed_bookings' => $completedbookings,
            'failed_bookings' => $failedbookings,
        ]);
    }
    public function reservationDetails($id){
        $order = Booking::find($id);
        $date = str_replace('/','-',$order->start_date);
        $date = @date_create($date);
        $formDate = @date_format($date, "Y-m-d");
        $date = @date_format($date, "d M");
        $date = str_replace(
            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
        $date
        );
        $order->start_date = $date;
        $order->price = str_replace('.',',',$order->price);
        $order->start_time = str_replace('      ', ':', $order->start_time);

        $edate = str_replace('/','-',$order->end_date);
        $edate = @date_create($edate);
        $formeDate = @date_format($edate, "Y-m-d");
        $edate = @date_format($edate, "d M");
        $edate = str_replace(
            array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
            array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'),
        $edate
        );
        $order->end_date = $edate;
        $order->end_time = str_replace('      ', ':', $order->end_time);
        
        $timeslots = Timeslot::all();
        $airport = Airport::where('code', $order->airport)->first();
        return view('admin.reservation-details', compact('order', 'airport', 'formDate', 'formeDate','timeslots'));
    }
    public function cancelBookingById($id)
    {
        $booking = Booking::find($id);
        $dateNow = @date_format(@date_create(), 'd-m-Y h:i A');
        $dateBooking = str_replace('/', '-', $booking->start_date) . ' ' . str_replace(' ', '', str_replace('      ', ':', $booking->start_time));
        $bookingYear = @date_format(@date_create($dateBooking), 'd-m-Y h:i A');
        $first_date = new DateTime($dateNow);
        $second_date = new DateTime($dateBooking);
        $difference = $first_date->diff($second_date);
        $hours = ($difference->days * 24) + $difference->h; // convert days to hours and add hours from difference
        $newDiff =  $hours . "." . $difference->i;
        if (strtotime($bookingYear) < strtotime($dateNow)) {
            return json_encode(['error' => true, 'message' => 'cannot cancel past orders']);
            die;
        } else {
            if ($newDiff < 0) {
                return json_encode(['error' => true, 'message' => 'cannot cancel order which is already finished']);
                die;
            }
            if ($newDiff < 24) {
                return json_encode(['error' => true, 'message' => 'cannot cancel this order with less then 24 hours time']);
                die;
            }
            $booking->status = 4;
            if ($booking->save()) {
                if ($booking->getResponse == 'yes') {
                    $stripe = new \Stripe\StripeClient(
                        env('STRIPE_SECRET')
                    );
                    if ($booking->response_data !== NULL) {
                        $response_data = json_decode($booking->response_data);
                        $response_data = json_decode($response_data->body);
                        $stripe_refund = $stripe->refunds->create([
                            'charge' => $response_data->id,
                        ]);
                        $booking->refund_response = json_encode($stripe_refund);
                        $booking->save();
                        Mail::send('emails/refund_email', [], function ($message) {
                            $message->to('03222847920sm@gmail.com', 'Admin')
                                ->subject('Park me order cancelled & amount refunded');
                            // $message->cc('parkme@helloapp.be', 'Parkme');
                            $message->from('no-reply@parkme.fr', 'Parkme');
                        });
                    } else {
                        Mail::send('emails/refund_email', [], function ($message) {
                            $message->to('03222847920sm@gmail.com', 'Admin')
                                ->subject('Park me order cancelled');
                            // $message->cc('parkme@helloapp.be', 'Parkme');
                            $message->from('no-reply@parkme.fr', 'Parkme');
                        });
                    }
                } else {
                    Mail::send('emails/refund_email', [], function ($message) {
                        $message->to('03222847920sm@gmail.com', 'Admin')
                            ->subject('Park me order cancelled');
                        // $message->cc('parkme@helloapp.be', 'Parkme');
                        $message->from('no-reply@parkme.fr', 'Parkme');
                    });
                }
                return json_encode($booking);
            }
        }
    }
    public function orders()
    {

        $pendingbookings = Booking::where('status', 1)
            ->orderByDesc('id')
            ->paginate(20);
        $inprogressbookings = Booking::where('status', 2)
            ->orderByDesc('id')
            ->paginate(20);
        $completedbookings = Booking::where('status', 3)
            ->orderByDesc('id')
            ->paginate(20);
        $failedbookings = Booking::where('status', 4)
            ->orderByDesc('id')
            ->paginate(20);

        $bookings = Booking::all();
        return view('admin/orders', [
            'bookings' => $bookings,
            'pending_bookings' => $pendingbookings,
            'inprogress_bookings' => $inprogressbookings,
            'completed_bookings' => $completedbookings,
            'failed_bookings' => $failedbookings,
        ]);
    }
    public function users()
    {
        $users['active'] = User::where('status', 1)->where('email_verified_at', '!=', null)->orderBy('id')->paginate(20);
        $users['blocked'] = User::where('status', 2)->where('email_verified_at', '!=', null)->orderBy('id')->paginate(20);
        $users['pending'] = User::where('email_verified_at', '==', null)->orderBy('id')->paginate(20);
        $users['users'] = User::all();
        return view('admin/users', $users);
    }
    public function generalSettings()
    {
        $settings = Settings::find(1);
        return view('admin/general-settings', compact('settings'));
    }
    public function postGeneralSettings(Request $request)
    {
        $settings = Settings::find(1);
        $settings->application_name = $request->application_name;
        $settings->description = $request->description;
        $settings->keywords = $request->keywords;
        $settings->admin_email = $request->admin_email;
        $settings->contact = $request->contact;
        // $settings->currency = $request->currency;
        $settings->copyright = $request->copyright;
        $settings->promo_text = $request->promo_text;
        $settings->og_title = $request->og_title;
        $settings->og_description = $request->og_description;
        $settings->fb_link = $request->fb_link;
        $settings->insta_link = $request->insta_link;

        if ($request->hasFile('application_logo')) {
            $file = $request->file('application_logo');
            //you also need to keep file extension as well
            $name = $file->getClientOriginalName();
            //using the array instead of object
            $application_logo['application_logo'] = $name;
            $file->move(public_path() . '/uploads/', $name);
            $settings->application_logo = url('public') . '/uploads/'.$name;
        }
        if ($request->hasFile('og_image')) {
            $file = $request->file('og_image');
            //you also need to keep file extension as well
            $name = $file->getClientOriginalName();
            //using the array instead of object
            $og_image['og_image'] = $name;
            $file->move(public_path() . '/uploads/', $name);
            $settings->og_image = url('public') . '/uploads/'. $name;
        }
        if ($settings->save()) {
            return redirect('general-settings')->with('success', 'updated successfull..');
        } else {
            return redirect('general-settings')->with('error', 'unable to save changes..');
        }
    }
    public function generalSettingsAirports()
    {
        $data['airports'] = Airport::all();
        return view('admin/airports', $data);
    }
    public function saveAirports(Request $request)
    {
        $insert = new Airport();
        $insert->code = $request->code;
        $insert->name = $request->name;
        if ($insert->save()) {
            return redirect('general-settings/airports')->with('success', 'added successfull..');
        } else {
            return redirect('general-settings/airports')->with('error', 'unable to add new airport..');
        }
    }
    public function deleteAirports($id)
    {
        $delete = Airport::find($id)->delete();
        if ($delete) {
            return redirect('general-settings/airports')->with('success', 'deleted successfull..');
        } else {
            return redirect('general-settings/airports')->with('error', 'unable to delete..');
        }
    }
    public function generalSettingsTimeslots()
    {
        $data['timeslots'] = BookingTimeslot::all();
        return view('admin/timeslots', $data);
    }
    public function saveTimeslots(Request $request)
    {
        $insert = new BookingTimeslot();
        $insert->start_date = $request->start_date;
        $insert->end_date = $request->end_date;
        $insert->total_capacity = $request->total_capacity;
        if ($insert->save()) {
            return redirect('general-settings/timeslots')->with('success', 'added successfull..');
        } else {
            return redirect('general-settings/timeslots')->with('error', 'unable to add new timeslot..');
        }
    }
    public function deleteTimeslots($id)
    {
        $delete = BookingTimeslot::find($id)->delete();
        if ($delete) {
            return redirect('general-settings/timeslots')->with('success', 'deleted successfull..');
        } else {
            return redirect('general-settings/timeslots')->with('error', 'unable to delete..');
        }
    }
    public function getDrivers()
    {
        $driversdata = User::all()->where('role_id', '3');
        foreach($driversdata as $driver){
            $driver->airport = Airport::where('id',3)->first();
        }
        $airports = Airport::all();
        return view('admin/drivers', compact('driversdata','airports'));
    }
    public function addDriver(Request $request)
    {
        $this->validate($request, [
            'email'          => 'unique:users',
        ]);
        $drivers = User::create([
            'role_id' => $request->role_id,
            'airport_id'=> $request->airport_id,
            'name' => $request->name,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'status' => $request->status
        ]);
        return json_encode($drivers);
    }
    public function editDriver(Request $request)
    {
        $driver = User::find($request->id);
        if ($driver->password) {
            $driver->password = Hash::make($request->password);
        }
        $driver->airport_id = $request->airport_id;
        $driver->name = $request->name;
        $driver->lname = $request->lname;
        $driver->phone = $request->phone;
        $driver->status = $request->status;
        $driver->save();
        return json_encode($driver);
    }
    public function deleteDriver($id)
    {
        $driversdata = User::find($id);
        $driversdata->delete();
        $driver['driversdata'] = User::all()->where('role_id', '3');
        return view('admin/drivers', $driver);
    }
    public function driverAccount()
    {
        return view('driver/account');
    }
    public function helpcenter()
    {
        $helpcenter['helpcentercategories'] = HelpCenterCategories::all();
        $helpcenter['helpcentercontent'] = HelpCenterContent::with('helpcentercategory')->get();
        return view('admin/helpcenter', $helpcenter);
    }
    public function addHelpCenterCategory(Request $request)
    {
        $helpcentercategories['helpcentercategories'] = HelpCenterCategories::all();
        $this->validate($request, [
            'category_name'          => 'unique:help_center_categories',
        ]);
        $helpcentercategories = HelpCenterCategories::create([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name, '-'),
            'status' => $request->status
        ]);
        if ($request->hasFile('category_icon')) {
            $file = $request->file('category_icon');

            //you also need to keep file extension as well
            $name = $file->getClientOriginalName();

            //using the array instead of object
            $category_icon['filePath'] = $name;
            $file->move(public_path() . '/uploads/', $name);
            $helpcentercategories->category_icon = $name;
            $helpcentercategories->save();
        }
        return json_encode($helpcentercategories);
    }
    public function editHelpCenterCategory(Request $request)
    {
        $helpcentercategories = HelpCenterCategories::find($request->category_id);
        $this->validate($request, [
            'category_name'          => Rule::unique('help_center_categories')->ignore($request->category_id, 'category_id'),
        ]);
        if ($request->hasFile('category_icon')) {
            $file = $request->file('category_icon');

            //you also need to keep file extension as well
            $name = $file->getClientOriginalName();

            //using the array instead of object
            $category_icon['filePath'] = $name;
            $file->move(public_path() . '/uploads/', $name);
            $helpcentercategories->category_icon = $name;
        }
        $helpcentercategories->category_name = $request->category_name;
        $helpcentercategories->category_slug = Str::slug($request->category_name, '-');
        $helpcentercategories->status = $request->status;
        $helpcentercategories->save();
        return json_encode($helpcentercategories);
    }
    public function deleteHelpCenterCategory($id)
    {
        $helpcentercategories = HelpCenterCategories::find($id);
        $helpcentercategories->delete();
        $helpcenter['helpcentercategories'] = HelpCenterCategories::all();
        $helpcenter['helpcentercontent'] = HelpCenterContent::with('helpcentercategory')->get();
        return view('admin/helpcenter', $helpcenter);
    }
    public function addHelpCenterContent(Request $request)
    {
        $helpcentercontent['helpcentercategories'] = HelpCenterCategories::all();
        $this->validate($request, [
            'title'          => 'unique:help_center_content',
        ]);
        $helpcentercontent = HelpCenterContent::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'status' => $request->status
        ]);
        return json_encode($helpcentercontent);
    }
    public function editHelpCenterContent(Request $request)
    {
        $helpcentercontent = HelpCenterContent::find($request->id);
        $this->validate($request, [
            'title'          => Rule::unique('help_center_content')->ignore($request->id),
        ]);
        $helpcentercontent->category_id = $request->category_id;
        $helpcentercontent->title = $request->title;
        $helpcentercontent->slug = Str::slug($request->title, '-');
        $helpcentercontent->content = $request->content;
        $helpcentercontent->status = $request->status;
        $helpcentercontent->save();
        return json_encode($helpcentercontent);
    }
    public function deleteHelpCenterContent($id)
    {
        $helpcentercontent = HelpCenterContent::find($id);
        $helpcentercontent->delete();
        $helpcenter['helpcentercategories'] = HelpCenterCategories::all();
        $helpcenter['helpcentercontent'] = HelpCenterContent::with('helpcentercategory')->get();
        return view('admin/helpcenter', $helpcenter);
    }
    public function facture()
    {
        return view('admin/facture');
    }

    // public function updateProfile(Request $request){
    //     $user = User::find(\Auth::user()->id);
    //     $user->name     = $request->post('name');
    //     $user->lname    = $request->post('lname');
    //     $user->phone    = $request->post('phone');
    //     $user->email    = $request->post('email');
    //     if(!empty($request->post('password'))){
    //         if($request->post('password') != $request->post('confirm')){
    //             return redirect('profile')->with('error', 'password is not identical');   
    //         }else{
    //             $user->password = Hash::make($request->post('password'));
    //         }
    //         die;
    //     }
    //     if($user->save()){
    //         return redirect('profile')->with('success', 'profile updated successfully');   
    //     }
    // }
    public function updateInfoPersonnelles(Request $request)
    {
        $user = User::find(\Auth::user()->id);
        $user->name     = $request->post('name');
        $user->lname    = $request->post('lname');
        $user->phone    = $request->post('phone');
        if ($user->save()) {
            return json_encode(array(
                "result" => true,
                "errormsg" => 'Information Personnelles updated successfuly'
            ));
        }
    }
    public function updateIdentifiantConnexion(Request $request)
    {
        $person = array(
            "result" => "Johny Carson"
        );
        $user = User::find(\Auth::user()->id);
        // $user->email    = $request->post('email');
        if (!empty($request->post('password'))) {
            if ($request->post('password') != $request->post('confirm')) {
                return json_encode(array(
                    "result" => false,
                    "errormsg" => 'password is not identical'
                ));
            } else {
                $user->password = Hash::make($request->post('password'));
            }
        }
        if ($user->save()) {
            return json_encode(array(
                "result" => true,
                "errormsg" => 'Identifiant Connexion updated successfully'
            ));
        }
    }
    public function stripePost(Request $request)
    {
        dd($request->all());
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
    public function serviceSettings(){
        $settings = ServiceCharges::find(1);
        return view('admin/services-settings', compact('settings'));
    }
    public function postServiceSettings(Request $request){
        $settings = ServiceCharges::find(1);
        $settings->parking_charges = $request->parking_charges;
        $settings->extra_day_charges = $request->extra_day_charges;
        if ($settings->save()) {
            return redirect('services-settings')->with('success', 'updated successfull..');
        } else {
            return redirect('services-settings')->with('error', 'unable to save changes..');
        }
    }
    public function carwashSettings(){
        $settings = ServiceCharges::find(1);
        return view('admin/car-wash-settings', compact('settings'));
    }
    public function postCarwashSettings(Request $request){
        $settings = ServiceCharges::find(1);
        $settings->car_wash_ext = $request->car_wash_ext;
        $settings->car_wash_int = $request->car_wash_int;
        $settings->car_wash_com = $request->car_wash_com;
        if ($settings->save()) {
            return redirect('services-settings/car-wash')->with('success', 'updated successfull..');
        } else {
            return redirect('services-settings/car-wash')->with('error', 'unable to save changes..');
        }
    }
}
