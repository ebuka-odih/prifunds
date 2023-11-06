<?php


use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::patch('updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::post('storePassword', [UserController::class, 'storePassword'])->name('storePassword');

});

