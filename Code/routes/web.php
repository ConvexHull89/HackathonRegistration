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

Auth::routes();
Route::group(['middleware'=>'user','auth'] ,function(){
Route::get('/user/home', function(){
    return view('userdashboard');
})->name('userdashboard');
Route::patch('/home/uploadpayment', 'HomeController@payment')->name('payment');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/payment' , function(){
    return view('userpayment');
})->name('homepayment');
Route::get('/home/timeline' , function(){
    return view('usertimeline');
})->name('hometimeline');
Route::post('/home/store', 'HomeController@store')->name('store');
});
Route::get('/download', function (){
    $file = public_path(). "/Hackathon4.0GuideBook.pdf";
    $headers = [
        'Content-Type' => 'application/pdf',
    ];
    return response()->download($file, 'Hackthon 4.0 Guide Book.pdf', $headers);
});

Route::group(['middleware'=>'admin','auth'] ,function(){
Route::get('/admin/payment', 'AdminController@home')->name('admin');
Route::get('/admin/participant', 'AdminController@payment')->name('admin-payment');
Route::get('/admin/view/{id}', 'AdminController@view')->name('admin-view');
Route::delete('/admin/delete/{id}', 'AdminController@destroy')->name('admin-delete');
Route::get('/admin/edit/{id}', 'AdminController@edit')->name('admin-edit');
Route::patch('/admin/update/{id}', 'AdminController@store')->name('admin-update');
Route::patch('/admin/updatemember/{id}', 'AdminController@storemember')->name('admin-updatemember');
Route::patch('/admin/approve/{id}', 'AdminController@approve')->name('admin-approve');
Route::patch('/admin/reject/{id}', 'AdminController@reject')->name('admin-reject');
Route::get('/admin/home', function(){
    return view('admindashboard');
})->name('admindashboard');
});
Route::post('/sendemail/send', 'SendEmailController@send')->name('send');
