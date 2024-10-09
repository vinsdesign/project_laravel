<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    public function index(){
        // Contoh data artikel dalam bentuk array
        $articles = [
            [
                'title' => 'Boost your conversion rate',
                'category' => 'Marketing',
                'date' => '2020-03-16',
                'description' => 'Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.',
                'author' => 'Michael Foster',
                'role' => 'Co-Founder / CTO',
                'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            ],
            [
                'title' => 'How to use social media effectively',
                'category' => 'Social Media',
                'date' => '2021-05-20',
                'description' => 'Learn how to maximize your social media reach...',
                'author' => 'Jane Doe',
                'role' => 'Social Media Strategist',
                'image' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            ],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ];

        // Mengirimkan data articles ke view blog.blade.php
        return view('blog', ['articles'=> $articles]);
    }
}
