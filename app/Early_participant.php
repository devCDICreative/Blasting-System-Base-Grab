<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Early_participant extends Model
{
    protected $guarded = [];
    public function getQrAttribute($value){
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('storage/' . $value);
    }
}
