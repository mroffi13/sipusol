<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'bookshelf_id', 'title', 'slug', 'isbn', 'author', 'publisher', 'year', 'stock'];

    protected $with = ['category', 'bookshelf'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class, 'id');
    }
}
