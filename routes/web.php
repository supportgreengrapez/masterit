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

Route::post('student/auth-pusher','chatController@auth');

Route::post('mentor/auth-pusher','chatController@auth');


Route::post('/send-admin-message','chatController@sendAdminMessage');

Route::post('/send-customer-message','chatController@sendCustomerMessage');

Route::get('admin/get-messages/{id}','chatController@getAdminMessages');

Route::get('student/get-messages/{id}','chatController@getClientMessages');

Route::get('/get-first-user','chatController@getFirstUser');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/','clientController@home_view');
Route::get('/about_us','clientController@about_us');
Route::get('/contact_us','clientController@contact_us');
Route::get('/FAQ','clientController@faq');
Route::get('/how_its_work','clientController@how_its_work');
Route::get('/mentor','clientController@mentor');
Route::get('/mentor/view/{id}','clientController@Mentor_profiles');

Route::get('/login','clientController@login');
Route::get('/logouts','clientController@logout');

Route::get('/mentor/dashboard','clientController@mentor_dashboard');
Route::get('/student/dashboard','clientController@student_dashboard');
Route::get('/studen','clientController@student_dashboards');
Route::get('/student/dashboard/{id}','clientController@show_skills_ajax');
Route::get('/select/mentor/{skill}','clientController@select_mentor');
Route::get('/select/mentor/view/{id}/{skill}','clientController@select_mentor_view');
Route::post('/student/hire/mentor/{id}/{skills}','clientController@mentor_hire');

Route::get('/student/skill','clientController@student_skill');

Route::get('/student/time/track/{id}/{skill}','clientController@time_track');
Route::post('/student/time/trackers/{id}/{skills}','clientController@time_tracks');

Route::post('/student/notes/{id}/{skills}','clientController@notes');

Route::get('/student/contact/{id}/{skills}','clientController@student_contact');

Route::get('/student/message/review/{id}/{skills}','clientController@student_message_review');
Route::post('/student/message/reviews/{id}/{skills}','clientController@student_message_reviews');
Route::get('/student/chat/review/{id}/{skills}','clientController@student_chat_review');

Route::get('/student/chat/{id}','clientController@chat_view');

Route::post('/mentor_login','clientController@mentor_login');
Route::post('/student_login','clientController@student_login');

Route::get('/signup','clientController@signup');
Route::post('/signin','clientController@signin');

Route::get('/signup2','clientController@signup2');
Route::post('/signin2','clientController@signin2');

Route::get('/education','clientController@education');
Route::post('/educations','clientController@educations');

Route::get('/student_signup','clientController@student_signup');
Route::post('/student_signin','clientController@student_signin');

Route::get('/student/profile/{id}','clientController@student_profile');
Route::get('/student/profile/edit/{id}','clientController@edit_student_profile');

Route::get('/student/add/education','clientController@student_add_education');
Route::post('/student/add/educations','clientController@student_add_educations');
Route::get('/delete_student_education/{id}','clientController@delete_student_education');

Route::get('/edit_student_education/{id}','clientController@edit_student_education');
Route::post('/edit_student_education/{id}','clientController@edit_students_education');
Route::post('/edit/student/{id}','clientController@edit_student');

Route::get('/student/password/{id}','clientController@change_student_password');
Route::post('/edit/student/password/{id}','clientController@edit_student_password');

Route::get('/mentor/password/{id}','clientController@change_mentor_password');
Route::post('/edit/mentor/password/{id}','clientController@edit_mentor_password');

Route::get('/mentor/chat','clientController@mentor_chat_view');

Route::get('/student/card/{id}','clientController@student_card_detail');
Route::get('/student/card/delete/{id}','clientController@delete_card');
Route::get('/student/add/card/{id}','clientController@student_card');
Route::get('/student/edit/card/{id}','clientController@edit_student_card');
Route::post('/student/card/form/{id}','clientController@student_card_form');
Route::post('/student/edit/card/form/{id}','clientController@edit_student_card_form');

Route::get('/student/payment/{id}','clientController@student_payment');

Route::get('/mentor_signup','clientController@mentor_signup');
Route::post('/mentor_signin','clientController@mentor_signin');

Route::get('/mentor_profile/{id}','clientController@mentor_profile');
Route::get('/edit_mentor_profile/{id}','clientController@edit_mentor_profile');
Route::post('/edit_mentors_profile/{id}','clientController@edit_mentors_profile');

Route::get('/mentor/add/education','clientController@mentor_add_education');
Route::post('/mentor/add/educations','clientController@mentor_add_educations');
Route::get('/delete_mentors_education/{id}','clientController@delete_mentors_education');

Route::get('/edit_mentor_education/{id}','clientController@edit_mentor_education');
Route::post('/edit_mentors_education/{id}','clientController@edit_mentors_education');

Route::get('/mentor/setting','clientController@mentor_setting');
Route::get('/mentor/card/{id}','clientController@mentor_card_detail');
Route::get('/mentor/card/delete/{id}','clientController@delete_mentor_card');
Route::get('/mentor/add/card/{id}','clientController@mentor_card');
Route::get('/mentor/edit/card/{id}','clientController@edit_mentor_card');
Route::post('/mentor/card/form/{id}','clientController@mentor_card_form');
Route::post('/mentor/edit/card/form/{id}','clientController@edit_mentor_card_form');

Route::get('/mentor/chat','clientController@mentor_chat_view');

Route::get('/mentor/student/details','clientController@student_detailed');

Route::get('/mentor/student/text/message','clientController@student_text_message');
Route::post('/new/answered/{pk_id}','clientController@mentor_new_answered');
Route::post('/more/answered/{question_id}','clientController@mentor_more_answered');

Route::get('/mentor/student/new','clientController@new_student_list');
Route::get('/mentor/student/new/detail/{id}','clientController@student_new_view');

Route::get('/mentor/student/approved','clientController@approved_student_list');
Route::get('/mentor/student/approved/detail/{id}','clientController@student_approved_view');

Route::get('/mentor/student/payemt','clientController@payment_list');
Route::get('/mentor/student/payment/detail/{id}','clientController@payment_view');

Route::get('/mentor/earning','clientController@mentor_earning');

Route::get('/mentor/student/rejected','clientController@rejected_student_list');
Route::get('/mentor/student/rejected/detail/{id}','clientController@student_rejected_view');

Route::post('/mentor/student/status','clientController@update_student_status');

Route::get('/verify/{username}/{verfication_code}','clientController@verify_code');
Route::get('/password/reset','clientController@reset_password_view');

Route::post('/password/reset','clientController@reset_password');


Route::post('/password/change/{username}','clientController@password_change');


Route::get('/admin','adminController@login');
Route::get('/logout','adminController@logout');
Route::post('/admin/login','adminController@admin_login');

Route::get('/admin/list','adminController@admin_list');

Route::get('/create/admin','adminController@create_admin_view');
Route::post('/create/admin/form','adminController@create_admin');

Route::get('/edit/admin/{id}','adminController@edit_admin_view');
Route::post('/edit/admin/form/{id}','adminController@edit_admin');
Route::get('/admin/delete/{id}','adminController@admin_delete');
Route::get('/admin/view/{id}','adminController@admin_view');

Route::get('/admin/student/list','adminController@student_list');
Route::get('/admin/student/view/{id}','adminController@student_view');

Route::get('/admin/mentor/pending/list','adminController@mentor_pending_list');
Route::get('/admin/pending/mentor/{id}','adminController@mentor_pending_view');
Route::get('/admin/mentor/approved/list','adminController@mentor_approved_list');
Route::get('/admin/approved/mentor/{id}','adminController@mentor_approved_view');
Route::get('/admin/mentor/unapproved/list','adminController@mentor_unapproved_list');
Route::get('/admin/unapproved/mentor/{id}','adminController@mentor_unapproved_view');
Route::get('/admin/mentor/suspended/list','adminController@mentor_suspended_list');
Route::get('/admin/suspended/mentor/{id}','adminController@mentor_suspended_view');

Route::post('/admin/mentor/status','adminController@update_mentor_status');

Route::get('/admin/skill/list','adminController@skill_list');
Route::get('/admin/create/skill','adminController@create_skill');
Route::post('/admin/create/skill/form','adminController@create_skill_form');

Route::get('/admin/edit/skill/{id}','adminController@edit_skill');
Route::post('/admin/edit/skill/form/{id}','adminController@edit_skill_form');
Route::get('/admin/delete/skill/{id}','adminController@skill_delete');

Route::get('/admin/mentor/earning/list','adminController@mentor_earning');
Route::get('/admin/mentor/payout','adminController@mentor_payout');
Route::get('/admin/masterit/earning','adminController@masterit_earning');


Route::get('/admin/review/detail/{id}','adminController@review_detail');


//chat//


Route::get('/admin/chat/view','adminController@chat_view');


Route::post('auth-pusher','chatController@auth');

Route::post('/send-admin-message','chatController@sendAdminMessage');

Route::post('/send-customer-message','chatController@sendCustomerMessage');

Route::get('admin/get-messages/{id}','chatController@getAdminMessages');

Route::get('get-messages/{id}','chatController@getClientMessages');

Route::get('/get-first-user','chatController@getFirstUser');



//paypal //
Route::get('client/project/pay/escrow/{id}/{skill}/{review}','clientController@intialize_payment');
Route::get('pay',function()
{
return view('test');
});
Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PayPalController@postPayment',
));
// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PayPalController@getPaymentStatus',
));
Route::get('paypal/get/sale','PayPalController@getSale');
Route::get('paypal/get/payment','PayPalController@getPaymentDetails');
Route::post('paypal/refund/sale/{sale_id}/{total}/{milestone_id}','PayPalController@refundSale');
Route::post('/sendmail','PayPalController@webhook');
Route::get('paypal/t','PayPalController@create_plan');
Route::get('/paypal/execute/agreement/{type}','PayPalController@execute_plan');
Route::get('/paypal/cancel/agreement/{id}','PayPalController@cancel_agreement');
Route::get('/paypal/get/agreement/','PayPalController@getAgreement');



////mail
Route::get('/ssendmail',function(Request $request)
{
Log::info("asd");
//$json = $request->input('id');
//DB::insert("insert into pwebhook (wid,status,text) values('1','2','$json')");


 $data = array(
     'name' => "Nouman Shoaib",
     'firstname'=> "nice",
);
Mail::send('test', $data, function ($message) {

$message->from('info@masterit.world', 'test');

$message->to('sumrariaz@yahoo.com')->subject('Learning Laravel test email');

    
});

return "asd";
});

