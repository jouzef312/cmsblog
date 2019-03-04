<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuto extends Model
{
    //
    protected $fillable = [
        'title', 'body'
    ];


     public function comments()
    {
        //
        return $this->morphMany('App\Comment', 'commenttable');
    }
}
