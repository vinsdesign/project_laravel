<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\team;

Route::get('/', function () {
    return view('home', ['name' => 'I Wayan Kelvin Widana Saputra']);
});

Route::get('/about', function () {
    return view('about', ['teams'=> team::all()]);
});
Route::get('/blog', [ArticleController::class, 'index']);

Route::get('/blog/{id}', [ArticleController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});