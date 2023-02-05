<?php

use Illuminate\Support\Facades\Route;
use App\Data\SeoData;

Route::get('/', function () {
    return view('home', [
        'seo' => new SeoData(
            'Home',
            'Software Developer based in Santa Cruz, CA'
        ),
    ]);
})->name('home');

Route::get('/uses', function () {
    return view('uses', [
        'seo' => new SeoData(
            'Uses',
            'A list of various tools and services that I use.'
        ),
    ]);
})->name('uses');
