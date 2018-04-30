@if (count($replies))
    @foreach ($replies as $reply)
        <li class="list-group-item">
            <a href="{{ $reply->topic->link(['#reply'.$reply->id])}}">
                {{ $reply->topic->title }}
            </a>
            <div class="reply-content" style="margin: 6px 0;">
                {!! $reply->content !!}
            </div>
            <div class="meta">
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                Replied by {{ $reply->created_at->diffForHumans() }}
            </div>
        </li>
    @endforeach
@else

    <div class="empty-block">No data ~_~</div>

@endif

{{--  Pagination --}}
{!! $replies->appends(Request::except('page'))->render() !!}