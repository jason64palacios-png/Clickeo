<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/packages', function () {
    return view('pages.packages');
})->name('packages');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
