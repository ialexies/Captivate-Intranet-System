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



Route::get('/', 'PagesController@getHome');

Route::get('/home', 'PagesController@getHome');

Route::get('/people-calendar', 'PagesController@getPeopleCalendar');

Route::get('/contact', 'PagesController@getContact');

Route::get('/official-business-authorization', 'PagesController@getOBA');

Route::get('/time-keeping', 'PagesController@getTimeKeeping');

Route::get('/olm', 'PagesController@getOLM');
Route::get('/nfs', function(){
    return view ('inc/nfs-upload');
});

Route::get('/new-project', function(){
    return view ('inc/np-compliance');
});

Route::get('/new-project-trademark', function(){
    return view ('inc/np-trademark');
});

Route::get('/meeting-room', function(){
    return view ('inc/mrb');
});
Route::get('/sss', function(){
    return view ('inc/sss');
});

Route::get('/bir', function(){
    return view ('inc/bir');
});

Route::get('/log', function(){
    return view ('inc/com-log');
});

Route::get('/philhealth', function(){
    return view ('inc/philhealth');
});

Route::get('/pagIBIG', function(){
    return view ('inc/pagibig');
});

Route::get('/lgu', function(){
    return view ('inc/lgu-req');
});

Route::get('/status', function(){
    return view ('inc/trademark-status');
});

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');

Route::post('/reserve/submit', 'ReserveController@submit');



Auth::routes();

Route::get('/', 'HomeController@index')->name('mrb');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
