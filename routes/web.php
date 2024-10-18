<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\article;
use App\Models\team;

Route::get('/', function () {
    return view('home', ['name' => 'I Wayan Kelvin Widana Saputra']);
});

Route::get('/about', function () {
    return view('about', ['teams'=> team::all()]);
});
Route::get('/blog', function(){
    return view('blog',['articles'=>article::all()]);
});

Route::get('/blog/{article:slug}', function(article $article) {
    return view('article-detail', ['title'=> 'Single Article', 'article'=> $article]);
});

Route::get('/contact', function () {
    return view('contact');
});