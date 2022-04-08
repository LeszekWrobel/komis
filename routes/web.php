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

Route::resource('/commissions', 'App\Http\Controllers\CommissionsController');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/commissions', 'CommissionsController@index');
//Route::get('/commissions', [CommissionsController::class, 'index']);
/*
Route::get('/commissions', 'App\Http\Controllers\CommissionsController@index');
*/

 /*
Route::get('/commissions',
function ()
   {
       return view(commissions.index);
   }
);*/

/*
Route::POST('/commissions', 'App\Http\Controllers\\CommissionsController@store');

Route::get('/commissions/create', 'App\Http\Controllers\\CommissionsController@create');
*/
