<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'commenttable_id', 'commenttable_type','commenter'
    ];

     public function  commenttable()
    {
        //
        return $this->morphTo();
    }
   
}
