<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home', ['name' => 'I Wayan Kelvin Widana Saputra']);
});

Route::get('/about', function () {
    return view('about', ['teams' => [
            [
                'name' => 'Kelvin Saputra',
                'division' => 'Project Manager',
                'image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            ],
            [
                'name' => 'Arika Subawa',
                'division' => 'Programmer Specialist',
                'image' => 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXZhdGFyfGVufDB8fDB8fHww',
            ],
            [
                'name' => 'Lionel Dode',
                'division' => 'Data Analytic',
                'image' => 'https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
            [
                'name' => 'Cristiano Agus',
                'division' => 'Asisten Manager',
                'image' => 'https://plus.unsplash.com/premium_photo-1664536392779-049ba8fde933?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
        ]
    ]);
});
Route::get('/blog', [ArticleController::class, 'index']);

Route::get('/blog/{id}', [ArticleController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});