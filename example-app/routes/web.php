<?php

use App\Http\Controllers\BidsController;
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

Route::get('/Vendor', 'BidsController@index');
Route::get('/Info/{bid}', 'InfoController@index');
Route::get('/User', 'UserController@index');

Route::get('/bids/GetInfo/{bid}', 'InfoController@index');
Route::get('/bids/Delete/{bid}', 'BidsController@delete');

Route::post('/User/Create', 'UserController@create')->name('user.create');