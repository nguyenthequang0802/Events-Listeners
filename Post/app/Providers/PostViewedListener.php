<?php

namespace App\Providers;

use App\Models\Notification;
use App\Providers\ViewedPosstEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use function Laravel\Prompts\alert;

class PostViewedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ViewedPosstEvent $event): void
    {
        $post = $event->post;
        $post->increment('num_view');
        $notification = new Notification();
        $notification['content'] = "Đã có người xem bài viết của bạn!";
        $notification->save();
        echo $notification->content;
    }
}
