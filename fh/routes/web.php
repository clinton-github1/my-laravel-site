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
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/our-services', function () {
    return view('services');
});

Route::get('/our-team', function () {
    return view('team');
});

Route::get('/contact-us', function () {
    return view('contactus');
});

Route::get('/our-projects', function () {
    return view('projects');
});

Route::get('/services/digital-experience', function () {
    return view('services/digital-experience');
});

Route::get('/services/business-transformation', function () {
    return view('services/business-transformation');
});

Route::get('/services/maintenance-and-optimization', function () {
    return view('services/maintenance-and-optimization');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::post('/contact-mail', function () {
    return view('contact-mail');
});




Route::get('/contact', 'ContactController@index');
Route::post('/sendemail/send', 'ContactController@send');


// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from Fair Havens',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('clintonwilliams801@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     dd("Email is Sent.");
// });