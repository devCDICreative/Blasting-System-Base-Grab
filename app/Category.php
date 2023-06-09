<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = [];

    public function guests(){
        return $this->hasMany('App\Guest');
    }
}
