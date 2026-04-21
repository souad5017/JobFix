<?php

use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\ProfessionalController;
use App\Http\Controllers\Client\ServiceRequestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Professional\ProfileController as ProfessionalProfileController;
use App\Http\Controllers\Professional\ServiceController;

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//client

Route::middleware(['auth', 'role:client'])->group(function () {

    Route::get('/client/dashboard', [DashboardController::class, 'index'])
        ->name('client.dashboard');

    Route::get('/professionals', [ProfessionalController::class, 'index'])
        ->name('client.professionals.index');

    Route::get('/professionals/{id}', [ProfessionalController::class, 'show'])
        ->name('client.professionals.show');
 
    Route::post('/service-request/{professionalId}', [ServiceRequestController::class, 'store'])
        ->name('service.request.store');
});


//professional
Route::middleware(['auth', 'role:professional'])->group(function () {

    Route::get('/professional/dashboard', function () {
        return view('professional.dashboard');
    })->name('professional.dashboard');

    Route::get('/complete-profile', [ProfessionalProfileController::class, 'create'])
        ->name('profile.complete');
    Route::post('/complete-profile', [ProfessionalProfileController::class, 'store'])
        ->name('professional.profile.store');
        
    Route::get('/requests', [ServiceController::class, 'index'])
    ->name('professional.services');
    Route::get('/requests/{request}', [ServiceController::class, 'show'])
    ->name('requests.show');

    Route::post('/requests/{request}/status/{status}', [ServiceController::class, 'updateStatus']);
});

require __DIR__ . '/auth.php';
