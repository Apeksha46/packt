<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $table = 'books';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title', 'author', 'genre', 'description', 'isbn', 'image', 'published', 'publisher',
    ];

     /**
     * Get the image of User.
     *
     * @return void
     */
    public function getImageAttribute() {
        return $this->attributes['image'] ? asset('public/storage/'.$this->attributes['image']) : "http://placeimg.com/480/640/any";
    }


}
