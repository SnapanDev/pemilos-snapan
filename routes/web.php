<?php

use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VoteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VoterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', [VoterController::class, 'home'])->name('home');

    Route::get('/vote', [VoterController::class, 'vote'])->name('vote');

    Route::post('/vote', [VoterController::class, 'submit'])->name('submit');

    Route::get('/logout', [VoterController::class, 'logout'])->name('logout');

    Route::delete('/logout', [AuthController::class, 'logout'])->name('destroy');

    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/', [HomeController::class, 'index'])
            ->name('dashboard');

        Route::resource('/settings', SettingController::class)->except('show');

        Route::resource('/users', UserController::class)->except('show');

        Route::get('/users/create-csv', [UserController::class, 'csv'])->name('users.csv');
        Route::post('/users/create-csv', [UserController::class, 'store_csv'])->name('users.csv-store');

        Route::resource('/candidates', CandidateController::class)->except('show');

        Route::get('/votes', [VoteController::class, 'index'])
            ->name('votes.index');
    });
});
