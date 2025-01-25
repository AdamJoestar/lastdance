<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'post'; buat apa ya?
    protected $fillable = ['title', 'author', 'slug','body'];
}

//di terminal ini     
//php artisan make:model Post -m buat apa ya?

// App\Models\Post::create(['title' => 'Judul Artikel 2' , 'author' => 'Gregory
// ','slug' => 'judul-artikel-2','body' => 'Build robust, full-stack applications
//  in PHP using Laravel and Livewire. Love JavaScript? Build a monolithic React 
// or Vue driven frontend by pairing Laravel with Inertia.']);






















