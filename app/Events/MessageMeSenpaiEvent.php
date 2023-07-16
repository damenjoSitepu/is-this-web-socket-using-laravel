<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageMeSenpaiEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private string $senpaiMessage;

    /**
     * Create a new event instance.
     */
    public function __construct(string $senpaiMessage)
    {
        $this->senpaiMessage = $senpaiMessage;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('public.message-me-senpai.1'),
        ];
    }

    public function broadcastAs(): string 
    {
        return "message-me-senpai";
    }

    public function broadcastWith(): array 
    {
        return [
            "senpai-message" => $this->senpaiMessage
        ];
    }
}
