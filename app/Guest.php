<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Guest extends Model
{
    use Sortable;
    public $sortable = ['id', 'name', 'category_id'];

    protected $guarded = [];
    public function getQrAttribute($value){
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('storage/' . $value);
    }
    public function logs(){
        return $this->hasMany('App\Log');
    }
    public function category(){
        return $this->belongsTo("App\Category");
    }
    public function loket_guest(){
        return $this->belongsTo("App\Loket_guest");
    }

}
