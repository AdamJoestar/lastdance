<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'post'; buat apa ya?

    protected $with = ['author', 'category'];
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) =>
            $query->whereHas('category', fn($query) => $query->where('slug', $category))
        );

        $query->when(
            $filters['author'] ?? false,
            fn($query, $author) =>
            $query->whereHas('author', fn($query) => $query->where('username', $author))
        );
    }
}

//di terminal ini     
//php artisan make:model Post -m buat apa ya?

// App\Models\Post::create(['title' => 'Judul Artikel 2' , 'author' => 'Gregory
// ','slug' => 'judul-artikel-2','body' => 'Build robust, full-stack applications
//  in PHP using Laravel and Livewire. Love JavaScript? Build a monolithic React 
// or Vue driven frontend by pairing Laravel with Inertia.']);