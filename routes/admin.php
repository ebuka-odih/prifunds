<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPaymentMethodController;
use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('user/details/{id}', [UserController::class, 'userDetails'])->name('userDetails');
    Route::get('users', [UserController::class, 'users'])->name('users');
    Route::delete('delete/user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('suspend/user/{id}', [UserController::class, 'suspend'])->name('suspend');
    Route::get('verify/user/{id}', [UserController::class, 'verifyUser'])->name('verifyUser');

    Route::get('deposits/', [DepositController::class, 'deposits'])->name('deposits');
    Route::get('view/deposits/{id}', [DepositController::class, 'viewDeposit'])->name('viewDeposit');
    Route::get('approve/deposits/{id}', [DepositController::class, 'approveDeposit'])->name('approveDeposit');
    Route::delete('delete/deposits/{id}', [DepositController::class, 'deleteDeposit'])->name('deleteDeposit');
    Route::post('admin/deposits', [DepositController::class, 'adminDeposit'])->name('adminDeposit');


    Route::resource('wallet', AdminPaymentMethodController::class);
});

