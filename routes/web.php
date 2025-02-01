<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'HomePage']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'RudyRacing'], ['title' => 'AboutPage']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author','category'])->latest()->get();

    return view('posts', ['title' => 'BlogPage', 'posts' => Post::filter(request(['search','category','author']))->latest()->get()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {


    //$post= Post::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    // $posts = $user->posts->load('category','author');
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    // $posts = $category->posts->load('category','author');
    return view('posts', ['title' => ' Articles in : ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage']);
});
