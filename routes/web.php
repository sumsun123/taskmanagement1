<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



//Route::get('user-list', function (){
//   $user_list = 'user list';
//    return view('hello', compact('user_list'));
//});

Route::get('user-list',[UserController::class, 'user_list']);

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
