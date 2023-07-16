<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SenpaiEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        echo "I Feeling Lonely";
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('public.senpai.1'),
        ];
    }

    /**
     * Custom Broadcast
     *
     * @return void
     */
    public function broadcastAs() {
        return "senpai-ah";
    }

    /**
     * Broadcast with returned data
     */
    public function broadcastWith()
    {
        return [
            'user' => 'Damenjo Sitepu'
        ];
    }
}
