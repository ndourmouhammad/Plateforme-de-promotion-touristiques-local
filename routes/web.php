<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Accueil
Route::get('/', [HomeController::class, 'accueil'])->name('accueil');
