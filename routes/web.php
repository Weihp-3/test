<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $role = Auth::user()->role; // Cek role user yang sedang login
    if ($role == 'admin') {
        return view('dashboard.admin'); // Arahkan ke view admin
    }
    if ($role == 'kasir') {
        return view('dashboard.kasir'); // Arahkan ke view kasir
    }
    // Default untuk siswa
    return view('dashboard.siswa');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
