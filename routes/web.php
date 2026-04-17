<?php

use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\ProfessionalController;
use App\Http\Controllers\Client\ServiceRequestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client/dashboard', [DashboardController::class, 'index'])
    ->name('client.dashboard');

Route::get('/professional/dashboard', function () {
    return view('professional.dashboard');
})->name('professional.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//client

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/professionals', [ProfessionalController::class, 'index'])
        ->name('client.professionals.index');

    Route::get('/professionals/{id}', [ProfessionalController::class, 'show'])
        ->name('client.professionals.show');

    Route::post('/professionals/{id}/request', [ServiceRequestController::class, 'store'])
        ->name('service.request.store')
        ->middleware('auth');
    Route::post('/service-request/{professionalId}', [ServiceRequestController::class, 'store'])
        ->name('service.request.store');
});





Route::prefix('client')->group(function () {});

require __DIR__ . '/auth.php';
