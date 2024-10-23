<?php

use App\Models\team;
use App\Models\User;
use App\Models\article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Category;

Route::get('/', function () {
    return view('home', ['name' => 'I Wayan Kelvin Widana Saputra']);
});

Route::get('/about', function () {
    return view('about', ['teams'=> team::all()]);
});
Route::get('/blog', function(){
    return view('blog',['title'=>'From the blog','articles'=>article::all()]);
});

Route::get('/blog/{article:slug}', function(article $article) {
    return view('article-detail', ['title'=> 'Single Article', 'article'=> $article]);
});
Route::get('/author/{user:username}', function(User $user) {
    return view('blog', ['title'=> 'Article By '. $user->name , 'articles'=> $user->article]);
});

Route::get('/category/{category:slug}', function(Category $category) {
    return view('blog', ['title'=> 'Articles in category '. $category->name , 'articles'=> $category->article]);
});

Route::get('/contact', function () {
    return view('contact');
});