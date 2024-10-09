<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home', ['name' => 'I Wayan Kelvin Widana Saputra']);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', [ArticleController::class, 'index']);
Route::get('/contact', function () {
    return view('contact');
});