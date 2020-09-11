<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/fairfex-landing', function () {
    return view('fairfex-landing');
});
Route::get('/home_purchase', function () {
    return view('home_purchase');
});
Route::get('/home_refinance', function () {
    return view('home_refinance');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('/loan_program', function () {
    return view('loan_program');
});
Route::get('/va_loan_process', function () {
    return view('va_loan_process');
});
Route::get('/online_form_docs', function () {
    return view('online_form_docs');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/legal', function () {
    return view('legal');
});
Route::get('/sitemap', function () {
    return view('sitemap');
});
Route::get('/refinance-landing', function () {
    return view('refinance-landing');
});
Route::get('/purchase-landing', function () {
    return view('purchase-landing');
});

Route::post('/store_customer_data' ,'customerController@store');
Route::post('/store_home_purchase_data' ,'customerController@homePurchase');
Route::post('/store_home_refinance_data' ,'customerController@homeRefinance');
Route::post('/store_get_quote_data' ,'customerController@getQuote');
Route::post('/store_refinance_landing_data' ,'customerController@refinanceLanding');

Route::post('/submit_contact', 'customerController@contactQuery');

Route::get('/va-eligibility', function () {
    return view('va_eligibility');
});

Route::get('/va_loan_rate', function () {
    return view('va_loan_rate');
});

Route::get('/your_quote', function () {
     return view('your_quote');
});

Route::get('/va_loan_benifit', function () {
    return view('va_loan_benifit');
});

Route::get('/first_time_buyer', function () {
    return view('first_time_buyer');
});

Route::get('/fairfex-landing', function () {
    return view('fairfex-landing');
});

Route::get('/refinance_landing', function () {
    return view('refinance-landing');
});

Route::get('/purchase_landing', function () {
    return view('purchase-landing');
});


