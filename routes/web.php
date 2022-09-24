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
// routing default itu pake tanda /
Route::get('/', function () {
    return view('welcome');
});


Route::get('/landing-page', function() {
    return view('landing-page');
} );

Route::get('/driver', function() {
    return view('driver.index');
} );

Route::get('/add-driver', function() {
    return view('driver.add');
} );