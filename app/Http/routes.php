<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function(){
//     return "Hello Truong!";
// });
Route::get('/hello/{name}','Hello@show');
Route::get('hello','Hello@index');

Route::get('test', function() {
   $customer = App\customer::find(1);
   echo $customer->username;
});
