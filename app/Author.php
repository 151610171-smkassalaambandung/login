<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['title', 'author_id', 'amount'];

    public function books()
    {
    	return $this->belongsTo('App\Book');
    }
}
