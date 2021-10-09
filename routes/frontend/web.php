<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/pricing', function () {
    return view('frontend.pricing');
});

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// })->middleware('auth');

