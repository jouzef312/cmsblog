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
        return $this->belongsToMany('App\Tag');
    }
}
