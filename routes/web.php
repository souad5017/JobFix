<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
    
    // Route::get('/professionnels', [ClientController::class, 'listPros'])->name('client.pros.index');
    // Route::get('/professionnels/{id}', [ClientController::class, 'showPro'])->name('client.pros.show');
    
    // Route::post('/demande-service', [ClientController::class, 'sendRequest'])->name('client.request.send');
    // Route::get('/mes-demandes', [ClientController::class, 'history'])->name('client.requests.history');
    // Route::post('/favoris/{id}', [ClientController::class, 'toggleFavorite'])->name('client.favorite');
});

require __DIR__.'/auth.php';
