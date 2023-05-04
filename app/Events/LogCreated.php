<?php

namespace App\Events;

use App\Log;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LogCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $log;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Log $log)
    {
        //
        $name=$log->guest->name;
        $object = new \stdClass();
        $object->log= $log;
        $object->name= $name;
        // broadcast(new LogCreated('refresh'));
        $this->log=$object;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('logs');
    }
}
