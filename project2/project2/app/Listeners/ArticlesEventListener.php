<?php

namespace App\Listeners;

use App\Events\ArticlesEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ArticlesEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArticlesEvent  $event
     * @return void
     */
    public function handle(ArticlesEvent $event)
    {
        //
        \Log::info(sprintf(
            '새로운 포럼 글이 등록되었습니다.: %s',
            $event->article->title
        ));
    }
}
