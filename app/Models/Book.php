<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 
        'author',
        'isbn',
        'description',
        'genre',
        'price',
        'stock',
        'photo'
    ];

    function reviews(){
        return $this->hasMany(Review::class);
    }
}
