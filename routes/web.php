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

Route::get('/admin', function () {
    if (Auth::check()) {
        return view('admin.dashboard');
    }
    return view('login');
})->name('login');

Route::get('/', function () {
  
    return view('website.index');
});

Auth::routes();

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');
Route::get('/users_edit/{id}', 'UserController@edit')->middleware('auth');

Route::resource('permissions', 'PermissionController');
Route::get('dashboard', 'AdminController@index');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pictures','PictureController@index');
Route::get('/picture_create/{id}','PictureController@create');
Route::post('picture_insert','PictureController@store');
Route::put('picture_update/{id}','PictureController@update');
Route::delete('picture_delete/{id}','PictureController@destroy');


// video
Route::get('/videos','VideoController@index');
Route::get('/video_create/{id}','VideoController@create');
Route::post('video_insert','VideoController@store');
Route::put('video_update/{id}','VideoController@update');
Route::delete('video_delete/{id}','VideoController@destroy');



// tour

Route::get('/tours','TourController@index');
Route::get('/tour_create/{id}','TourController@create');
Route::post('tour_insert','TourController@store');
Route::put('tour_update/{id}','TourController@update');
Route::delete('tour_delete/{id}','TourController@destroy');


// faq
Route::get('/faq','FAQController@index');
Route::get('/faq_create/{id}','FAQController@create');
Route::post('faq_insert','FAQController@store');
Route::put('faq_update/{id}','FAQController@update');
Route::delete('faq_delete/{id}','FAQController@destroy');


//web route

Route::get('/single/{id}','WebsiteController@index');


Route::get('/w_tours', 'WebsiteController@tour');

Route::get('/wvideos', 'WebsiteController@video');

Route::get('/services', function () {
  
    return view('website.services');
});

Route::get('/about', function () {
  
    return view('website.about');
});
Route::get('/contact', function () {
  
    return view('website.contact');
});
Route::get('/wfaq', 'WebsiteController@faq');

Route::post('/submit','WebsiteController@store');