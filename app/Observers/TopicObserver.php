<?php

namespace App\Observers;

use App\Models\Topic;
//use App\Handlers\SlugTranslateHandler;
use App\Jobs\TranslateSlug;
// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class TopicObserver
{
    public function creating(Topic $topic)
    {
        //
    }

    public function updating(Topic $topic)
    {
        //
    }

    public function saving(Topic $topic)
    {
        // filter XSS
        $topic->body = clean($topic->body, 'user_topic_body');

        //extract the topic body
        $topic->excerpt = make_excerpt($topic->body);
    }

    public function saved(Topic $topic)
    {
        //translate the title if there is no slug
        //$topic->slug = app(SlugTranslateHandler::class)->translate($topic->title);
        if ( !$topic->slug) {
            dispatch(new TranslateSlug($topic));
        }
    }
}