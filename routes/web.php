<?php

use App\Content\Bookmarks;
use App\Content\Home;
use App\Content\Tools;
use App\Data\BookmarkData;
use App\Data\SeoData;
use App\Data\ToolData;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'seo' => new SeoData(Home::$title, Home::$description,),
    ]);
})->name('home');

Route::get('/uses', function () {
    return view('uses', [
        'tools' => ToolData::collection(Tools::items()),
        'seo' => new SeoData(Tools::$title, Tools::$description),
    ]);
})->name('uses');

Route::get('/bookmarks', function () {
    return view('bookmarks', [
        'bookmarks' => BookmarkData::collection(Bookmarks::items()),
        'seo' => new SeoData(Bookmarks::$title, Bookmarks::$description),
    ]);
})->name('bookmarks');
