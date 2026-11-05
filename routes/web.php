<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/categories', [PageController::class, 'categories'])->name('categories');
Route::get('/guidelines', [PageController::class, 'guidelines'])->name('guidelines');
Route::get('/judging', [PageController::class, 'judging'])->name('judging');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/robots.txt', fn () => response()->view('robots')->header('Content-Type', 'text/plain'))->name('robots');
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap', ['pages' => ['home', 'categories', 'guidelines', 'judging', 'about', 'contact']])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');
