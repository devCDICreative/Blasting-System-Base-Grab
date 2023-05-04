<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loket_guest extends Model
{
    //
    protected $guarded = [];
    public function guest(){
        return $this->hasOne("App\Guest");
    }
}
