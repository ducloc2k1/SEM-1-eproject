<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Blog;
use Illuminate\Session\Store;

class ViewBlogHandler
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    private $session;

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function handle(Blog $blog)
    {

	    if (!$this->isBlogViewed($blog))
	    {
            $blog->increment('view');

            $this->storeBlog($blog);

	    }
    }

    private function isBlogViewed($blog)
	{
	    $viewed = $this->session->get('viewed_blogs', []);

	    return array_key_exists($blog->id, $viewed);
	}

	private function storeBlog($blog)
	{
	    $key = 'viewed_blogs.' . $blog->id;

	    $this->session->put($key, time());
    }

}
