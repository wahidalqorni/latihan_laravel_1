<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// routing default itu pake tanda /
Route::get('/', function () {
    return view('landing-page');
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

// routing menggunakan controller
Route::get('register', [FormController::class, 'register'] );
Route::post('register-post', [FormController::class, 'postData'] );

Route::get('luas-persegi-panjang', [FormController::class, 'formLuas'] );
Route::post('luas-persegi-panjang', [FormController::class, 'hitungLuas'] );