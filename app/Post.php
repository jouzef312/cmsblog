<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
      protected $fillable = [
        'title', 'body','file','catigorey-id'
    ];


   public function Categorss()
    {
        //
        return $this->belongsTo('App\Categors');
    }


     public function tags()
    {
        //
        return $this->morphToMany('App\Tag','tagtable');
    }
   public function comments()
    {
        //
        return $this->morphMany('App\Comment', 'commenttable');
    }
}
