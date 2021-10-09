<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\PemilihanController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.home'));
    });

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });

Route::get('/about', [FrontendController::class, 'about'])
    ->name('about');
    // ->breadcrumbs(function (Trail $trail) {
    //     $trail->parent('frontend.index')
    //         ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    // });
Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/pemilihan', [PemilihanController::class, 'index'])
    ->name('pemilihan');
    // ->breadcrumbs(function (Trail $trail) {
    //     $trail->push(__('Home'), route('frontend.home'));
    // });

Route::get('/contact', function () {
    return view('frontend.contact');
});
