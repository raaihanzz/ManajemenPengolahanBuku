<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['title', 'author', 'category_id', 'published_at'];

    protected $hidden;

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
