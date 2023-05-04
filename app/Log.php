<?php

namespace App;

use App\Events\LogCreated;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
    protected $guarded = [];

    public function guest(){
        return $this->belongsTo("App\Guest");
    }
     /**
     * The event map for the model.
     *
     * Allows for object-based events for native Eloquent events.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created'=>LogCreated::class,
    ];
}
