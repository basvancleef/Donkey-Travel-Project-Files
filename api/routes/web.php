<?php

use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'weather' => Http::get('https://api.openweathermap.org/data/2.5/weather?q=Tiel&appid=c7c20096d659d7458bddefab9f51f475')->body(),
        ]);
    })->name('dashboard');
    Route::get('/overzicht', function () {
        return Inertia::render('Booking/Overzicht');
    })->name('overzicht');
    Route::get('/gebruikers', function () {
        return Inertia::render('Users/Gebruikers', [
            'users' => User::all(),
        ]);
    })->name('gebruikers');
    Route::get('/track-and-trace', function () {
        return Inertia::render('TrackAndTrace/Track-And-Trace');
    })->name('track-and-trace');
});
