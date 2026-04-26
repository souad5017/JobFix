<?php

use App\Http\Controllers\Client\ClientProfil;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\ProfessionalController;
use App\Http\Controllers\Client\ServiceRequestController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Professional\ProfileController as ProfessionalProfileController;
use App\Http\Controllers\Professional\ServiceController;
use App\Http\Controllers\Professional\ProDashboardController;


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

    // Route::post('/service-request/{professionalId}', [ServiceRequestController::class, 'store'])
    //     ->name('service.request.store');

    Route::get('/my-requests', [ServiceRequestController::class, 'myRequests'])
        ->name('client.requests');
    Route::get('/client/requests/{serviceRequest}', [ServiceRequestController::class, 'show'])
        ->name('client.requests.show');


    Route::post(
        '/service-request/{professionalId}',
        [ServiceRequestController::class, 'store']
    )->name('service.store');

    Route::put(
        '/service-request/{id}',
        [ServiceRequestController::class, 'update']
    )->name('service.update');

    Route::delete('/services/{service}', [ServiceRequestController::class, 'destroy'])->name('services.destroy');

    Route::get('/client', [ClientProfil::class, 'index'])
        ->name('client.profil');
    Route::post('/profile/image', [ClientProfil::class, 'updatePhoto'])
        ->name('profile.update.photo');
        
});


//professional
Route::middleware(['auth', 'role:professional'])->group(function () {


    Route::get('/professional/dashboard', [ProDashboardController::class, 'index'])
        ->name('professional.dashboard');

    Route::get('/complete-profile', [ProfessionalProfileController::class, 'create'])
        ->name('professional.profile.complete');
    Route::post('/complete-profile', [ProfessionalProfileController::class, 'store'])
        ->name('professional.profile.store');

    Route::get('/requests', [ServiceController::class, 'index'])
        ->name('professional.services');
    Route::get('/requests/{serviceRequest}', [ServiceController::class, 'show'])
        ->name('requests.show');

    Route::post('/requests/{serviceRequest}/status/{status}', [ServiceController::class, 'updateStatus'])
        ->name('requests.update');

    Route::post(
        '/requests/{serviceRequest}/price',
        [PaymentController::class, 'store']
    )->name('payment.store');

    Route::post(
        '/requests/{serviceRequest}/price/update',
        [PaymentController::class, 'update']
    )->name('payment.update');
});

require __DIR__ . '/auth.php';
