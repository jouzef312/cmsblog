<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //


    protected $fillable = [
        'title',
    ];

      public function posts()
    {
        //
 return $this->morphedByMany('App\Post','tagtable');    
}  


  public function tutos()
    {
        //
 return $this->morphedByMany('App\Tuto','tagtable');    
}  

}
