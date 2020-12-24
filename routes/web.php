<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/donate', 'HomeController@create');
Route::post('/donate/store', 'HomeController@store')->name('home.store');
Route::get('/donate/pic', 'HomeController@create_pic')->name('home.create_pic');
Route::post('/donate/pic/store', 'HomeController@store_pic')->name('home.store_pic');


Route::get('/admin/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
Route::get('/admin/index', 'HomeController@indexadmin');


Route::resources([
    'admin' => 'KucingController',
    'kucing-galleries' => 'KucingGalleryController'
]);
