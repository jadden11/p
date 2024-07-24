<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\FormController;



// FORM
Route::get('/', [FormController::class, 'register']);
Route::post('/register/user', [FormController::class, 'registeruser']);
Route::get('/login', [FormController::class, 'login']);
Route::post('/login/user', [FormController::class, 'loginuser']);


// MIDDLEWARE
Route::middleware(['auth'])->group(function () {
    Route::post('/contact/send', [NavController::class, 'contactsend']);
    Route::get('/contact', [NavController::class, 'contact']);
    Route::get('/logout', [FormController::class, 'logout']);
    Route::get('/home', [NavController::class, 'home']);
});
