<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DetectionTestController;

Route::get('/', function () {
    if (Auth::check()) {
        return Inertia::render('Home');
    }
    return Inertia::render('Welcome');
})->name('root');

Route::middleware(['auth'])->group(function () {
    
    // Rute POST untuk proses deteksi
    Route::post('/predict', [DetectionTestController::class, 'predict'])
        ->name('predict');

    // Rute untuk menampilkan halaman input deteksi
    Route::get('/deteksi-tanaman', function () {
        return Inertia::render('Deteksi');
    })->name('deteksi');
    
});