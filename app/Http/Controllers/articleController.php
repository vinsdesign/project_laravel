<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class articleController extends Controller
{
    public function index(){
        // Contoh data artikel dalam bentuk array
        $articles = [
            [
                'id' => '1',
                'title' => 'Boost your conversion rate',
                'category' => 'Marketing',
                'date' => '2020-03-16',
                'description' => 'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.',
                'author' => 'Michael Foster',
                'role' => 'Co-Founder / CTO',
                'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            ],
            [
                'id' => '2',
                'title' => 'How to use social media effectively',
                'category' => 'Social Media',
                'date' => '2021-05-20',
                'description' => 'Now that you have created your Laravel application, you probably want to store some data in a database. By default, your applications .env configuration file specifies that Laravel will be interacting with a SQLite database. During the creation of the application, Laravel created a database/database.sqlite file for you, and ran the necessary migrations to create the applications database tables.',
                'author' => 'Jane Doe',
                'role' => 'Social Media Strategist',
                'image' => 'https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
            [
                'id' => '3',
                'title' => 'How to learn Laravel 11',
                'category' => 'Programmer',
                'date' => '2024-10-11',
                'description' => 'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details. Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.',
                'author' => 'Cristiano Agus',
                'role' => 'Programmers',
                'image' => 'https://plus.unsplash.com/premium_photo-1664536392779-049ba8fde933?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
        ];

        // Mengirimkan data articles ke view blog.blade.php
        return view('blog', ['articles'=> $articles]);
    }
    public function show($id){
        $articles = [
            [
                'id' => '1',
                'title' => 'Boost your conversion rate',
                'category' => 'Marketing',
                'date' => '2020-03-16',
                'description' => 'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.',
                'author' => 'Michael Foster',
                'role' => 'Co-Founder / CTO',
                'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            ],
            [
                'id' => '2',
                'title' => 'How to use social media effectively',
                'category' => 'Social Media',
                'date' => '2021-05-20',
                'description' => 'Now that you have created your Laravel application, you probably want to store some data in a database. By default, your applications .env configuration file specifies that Laravel will be interacting with a SQLite database. During the creation of the application, Laravel created a database/database.sqlite file for you, and ran the necessary migrations to create the applications database tables.',
                'author' => 'Jane Doe',
                'role' => 'Social Media Strategist',
                'image' => 'https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
            [
                'id' => '3',
                'title' => 'How to learn Laravel 11',
                'category' => 'Programmer',
                'date' => '2024-10-11',
                'description' => 'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details. Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.',
                'author' => 'Cristiano Agus',
                'role' => 'Social Media Strategist',
                'image' => 'https://plus.unsplash.com/premium_photo-1664536392779-049ba8fde933?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            ],
        ];
        $article = Arr::first($articles, function($article) use ($id){
            return $article['id'] == $id;
        });
        // Mengirimkan data articles ke view blog-article.blade.php
        return view('article-detail', ['title'=> 'Single Article', 'article'=> $article]);
    }
}
