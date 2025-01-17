<?php 

namespace App\Models;
use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return
            [
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
    }

    // public static function find($slug) {
    //      return Arr::first(static::all(), function($post) use ($slug) {
    //          return $post['id'] == $slug;
    //      });
    //     return Arr::first(static::all(), fn($post) => $post['id'] == $slug);
    // }

    
    public static function find($slug): array{
       $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }
        return $post;
        }
}

    

























