<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Service;
use App\CarType;
use App\SubService;
use App\Airport;
use App\Timeslot;
use App\Booking;
use App\Car;
use App\User;

//  &******************************** extra code
	// $services['car_types'] = CarType::all();
	// $services['services'] = Service::all();
	// $services['washing'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','washing')->get();
	// $services['gasoline'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','gasoline')->get();
	// $services['maintenance'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','maintenance')->get();
	// $services['washingmedium'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','washing medium')->get();
	// $services['washinglarge'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','washing large')->get();
    
// Route::get('/newhome', function () {
// 	$services['airports'] = Airport::all();
// 	$services['timeslots'] = Timeslot::all();
// 	$services['car_types'] = CarType::all();
// 	$services['services'] = Service::all();
// 	$services['washing'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','washing')->get();
// 	$services['gasoline'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','gasoline')->get();
// 	$services['maintenance'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','maintenance')->get();
// 	$services['washingmedium'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','washing medium')->get();
// 	$services['washinglarge'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','washing large')->get();
// 	// dd($services['washinglarge']);
//     return view('welcome')->with($services);
// });
// Route::get('/iframe_services', function () {
//     return view('iframe_services');
// });
// Route::get('thank-you', function(){
//       return view('thankyou');
// });
// Route::get('ur/{id}', function($id){
// 	\Auth::loginUsingId($id, true);
//     return redirect('/');
// });
// Route::post('paypal_payment_new','BookingController@paypalPaymentNew')->name('paypal_payment_new');
// Route::post('/cars', 'CarTypeController@getCarTypes')->name('cars');
// Route::get('/services', 'ServiceController@getServices')->name('services');
// Route::get('/sub/services', 'SubServiceController@getSubServices')->name('sub_services');
// Route::get('booking_form','BookingController@booking_from')->name('booking_form');

// Route::get('email_new_4', 'BookingController@email_new')->name('email_new');
//  &******************************** extra code

Route::get('/clear-cache', function () {
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
});

Route::get('/run-migrations', function () {
	\Artisan::call('migrate');
});
Route::get('/', 'BookingController@index');
Route::post('/book', 'BookingController@book');
Route::get('/book', 'BookingController@book');
Route::post('/book/details', 'BookingController@details');
Route::get('/book/details', 'BookingController@details');
Route::get('/set-service/{service}', 'BookingController@setService');
Route::get('/unset-service', 'BookingController@unsetService');
Route::post('/book/request-login', 'BookingController@requestLogin');

Route::post('/book/create-session-contact', 'BookingController@setSessionContact');
Route::post('/book/create-session-vehicle', 'BookingController@setSessionVehicle');
Route::post('/book/create-session-card', 'BookingController@setSessionCard');
Route::post('/create-session-contact', 'BookingController@setSessionContact');
Route::post('/create-session-vehicle', 'BookingController@setSessionVehicle');
Route::post('/create-session-card', 'BookingController@setSessionCard');

Route::post('/book/check-availibility', 'BookingController@checkAvailibility');

Route::post('/book/update', 'BookingController@updateBooking')->middleware('verified');
Route::get('/book/update-status/{id}', 'BookingController@updateBookingStatus')->middleware('verified');
Route::post('/book/upload-image/{id}', 'BookingController@uploadImage')->middleware('verified');
Route::get('/book/remove-image/{id}/{image_id}', 'BookingController@removeImage')->middleware('verified');

Route::post('/modify-booking-by-user', 'BookingController@modifyBookingByUser');

Auth::routes(['register'=>true,'verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::post('/post-add-vehicle', 'HomeController@postAddVehicle')->middleware('verified');
Route::post('/post-edit-vehicle', 'HomeController@postEditVehicle')->middleware('verified');
Route::post('/delete-vehicle', 'HomeController@deleteVehicle')->middleware('verified');
Route::get('/reservations', 'HomeController@reservations');
Route::get('/profile', function (){
	return view('admin/edit_profile');
})->middleware('verified');
// Route::post('/post-profile', 'HomeController@updateProfile');
Route::post('/update-info-personnelles', 'HomeController@updateInfoPersonnelles');
Route::post('/update-identifiant-connexion', 'HomeController@updateIdentifiantConnexion');
Route::get('/users', 'HomeController@users')->middleware('verified');
Route::get('/orders', 'HomeController@orders')->middleware('verified');
Route::get('/admin/helpcenter', 'HomeController@helpcenter')->middleware('verified');
Route::post('/admin/add-helpcenter-category', 'HomeController@addHelpCenterCategory')->middleware('verified');
Route::post('/admin/edit-helpcenter-category', 'HomeController@editHelpCenterCategory')->middleware('verified');
Route::get('/admin/delete-helpcenter-category/{id}', 'HomeController@deleteHelpCenterCategory')->middleware('verified');
Route::post('/admin/add-helpcenter-content', 'HomeController@addHelpCenterContent')->middleware('verified');
Route::post('/admin/edit-helpcenter-content', 'HomeController@editHelpCenterContent')->middleware('verified');
Route::get('/admin/delete-helpcenter-content/{id}', 'HomeController@deleteHelpCenterContent')->middleware('verified');
Route::get('/support-tickets', function (){
	return view('admin/support-tickets');
})->middleware('verified');
Route::get('/services-settings', 'HomeController@serviceSettings')->middleware('verified');
Route::post('post-services-settings', 'HomeController@postServiceSettings')->middleware('verified');
Route::get('/services-settings/car-wash', 'HomeController@carwashSettings')->middleware('verified');
Route::post('post-car-wash', 'HomeController@postCarwashSettings')->middleware('verified');

Route::get('/general-settings', 'HomeController@generalSettings')->middleware('verified');
Route::post('/general-settings', 'HomeController@postGeneralSettings')->middleware('verified');
Route::get('/general-settings/airports', 'HomeController@generalSettingsAirports')->middleware('verified');
Route::post('/general-settings/airports', 'HomeController@saveAirports')->middleware('verified');
Route::get('/general-settings/airports/delete/{id}', 'HomeController@deleteAirports')->middleware('verified');
Route::get('/general-settings/timeslots', 'HomeController@generalSettingsTimeslots')->middleware('verified');
Route::post('/general-settings/timeslots', 'HomeController@saveTimeslots')->middleware('verified');
Route::get('/general-settings/timeslots/delete/{id}', 'HomeController@deleteTimeslots')->middleware('verified');
Route::get('/reservation-details/{id}', 'HomeController@reservationDetails')->middleware('verified');

Route::get('/cancel-booking-by-id/{id}', 'HomeController@cancelBookingById')->middleware('verified');
Route::get('/add-booking-by-id/{id}/{email}', 'BookingController@addBookingById');
Route::get('/check-if-email-exists/{email}', function($email){
	$getUser = User::where('email', $email)->get();
	if(count($getUser) >0 ){
		return json_encode([
			'exists' => true
		]);
	}else{
		return json_encode([
			'exists' => false
		]);
	}
});
Route::get('/help-center', 'HelpCenterController@helpcenterfrontview');
// Route::get('/help-center', function (){
// 	return view('pages/help-center');
// });
// Route::get('/help-center/query/{id}', 'HelpCenterController@helpcenterfrontviewsingle');
Route::get('/help-center/{category_slug}/{slug}', 'HelpCenterController@helpcenterfrontviewsingle');

// Route::get('/help-center/query/{id}', function (){
// 	return view('pages/help-center-single');
// });
Route::get('/faq', function (){
	return view('pages/faq');
});
Route::get('/contact', function (){
	return view('pages/contact');
});
Route::get('/prix', function (){
	return view('pages/prix');
});
Route::get('/mes-reservations', function (){
	if(\Auth::user()){
		return redirect('reservations');
	}else{
		return view('admin/my_reservations');
	}
});
Route::get('/mon-compte', function (){
	if(\Auth::user()){
		return redirect('home');
	}
	return view('admin/my_account');
});
Route::get('/password-changed', function() {
	return view('admin/password-changed');
});
Route::get('thank-you/{id}', 'BookingController@thankyouPage');

Route::get('/printPDF6', 'BookingController@printPDF');
Route::get('/facture', 'HomeController@facture')->name('facture');
Route::post('/admin_email_receipt', 'BookingController@admin_email_receipt')->name('admin_email_receipt');
Route::post('paypal_payment','BookingController@paypalPayment')->name('paypal_payment');
Route::get('payment/success', 'BookingController@success')->name('payment.success');
Route::get('send_email', 'BookingController@send_email')->name('send_email');
Route::get('email_a', 'BookingController@email_a')->name('email_a');
Route::get('thankyou', function(){
    return redirect()->back()->with('message', 'your appointment is completed!');
// 	echo "<h1>Thank you so much for booking</h1>";
})->name('payment.thankyou');
Route::get('paypal', function () {
    return view('payment');
});
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::post('stripe', 'HomeController@stripePost')->name('stripe.post');


// Driver Panel
Route::get('/admin/drivers', 'HomeController@getDrivers')->middleware('verified');
Route::get('/admin/driver/delete-driver/{id}', 'HomeController@deleteDriver')->middleware('verified');
Route::get('/driver/account', 'HomeController@driverAccount')->middleware('verified');
Route::post('/admin/driver/add-driver', 'HomeController@addDriver')->middleware('verified');
Route::post('/admin/driver/edit-driver', 'HomeController@editDriver')->middleware('verified');

// STATIC PAGES
Route::view('/screen1', 'static_booking_designs.screen1');
Route::view('/screen2', 'static_booking_designs.screen2');
Route::view('/screen3', 'static_booking_designs.screen3');
Route::view('/screen4', 'static_booking_designs.screen4');
Route::view('/screen5', 'static_booking_designs.screen5');
Route::view('/screen6', 'static_booking_designs.screen6');
Route::view('/screen7', 'static_booking_designs.screen7');

Route::view('/screen_1', 'static_booking_designs.screen_1');
Route::view('/screen_2', 'static_booking_designs.screen_2');
Route::view('/screen_3', 'static_booking_designs.screen_3');
Route::view('/screen_4', 'static_booking_designs.screen_4');
Route::view('/screen_4v2', 'static_booking_designs.screen_4v2');
Route::view('/screen_forgotpass', 'static_booking_designs.screen_forgotpass');
Route::view('/screen_resetpass', 'static_booking_designs.screen_resetpass');
Route::view('/screen_helpcenter', 'static_booking_designs.screen_helpcenter');
Route::view('/screen_helpcenter_single', 'static_booking_designs.screen_helpcenter_single');
Route::view('/email_template_1', 'static_booking_designs.email_template_1');
Route::view('/email_template_2', 'static_booking_designs.email_template_2');
Route::view('/email_template_3', 'static_booking_designs.email_template_3');
Route::view('/email_template_4', 'static_booking_designs.email_template_4');
Route::view('/new_home_template', 'static_booking_designs.new_home_template');
Route::view('/new_reservation_details', 'static_booking_designs.new_reservation_details');
Route::view('/new_booking_step', 'static_booking_designs.new_booking_step');