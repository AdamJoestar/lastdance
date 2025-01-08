<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HomePage' ]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'RudyRacing'], ['title' => 'AboutPage' ]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'BlogPage' ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage' ]);
});