<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HomePage']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'RudyRacing'], ['title' => 'AboutPage']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'BlogPage', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'RudyRacing',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolorum similique, architecto distinctio velit facilis itaque dolorem non. Architecto quo dicta quaerat dolorum error, nulla exercitationem suscipit voluptatem consequuntur unde.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'JunaidiRacing',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolorum similique, architecto distinctio velit facilis itaque dolorem non. Architecto quo dicta quaerat dolorum error, nulla exercitationem suscipit voluptatem consequuntur unde.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'RudyRacing',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolorum similique, architecto distinctio velit facilis itaque dolorem non. Architecto quo dicta quaerat dolorum error, nulla exercitationem suscipit voluptatem consequuntur unde.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'JunaidiRacing',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolorum similique, architecto distinctio velit facilis itaque dolorem non. Architecto quo dicta quaerat dolorum error, nulla exercitationem suscipit voluptatem consequuntur unde.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    
    return view('post' , ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage']);
});
