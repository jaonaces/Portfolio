<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes — Jared Naces Portfolio
| NOTE: /contact POST route is no longer needed since EmailJS
|       handles sending entirely from the browser.
|       Keeping it is harmless but it won't be called.
|--------------------------------------------------------------------------
*/

// Portfolio Homepage
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');


/*
Route::get('/about','about');
*/