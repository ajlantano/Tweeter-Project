<div class="card">
    <div class="card-body">
        <h5 class="card-tite">{{ $comment->user->name }}</h5>
        <div class="card-text">
            {{ $comment->body }}
        </div>
        <div class="card-text">
            @if(auth::id() == $tweet->user_id)
            <a href="/tweets/{{ $tweet->id }}/comments/{{ $comment->id }}/edit">Edit</a>
            @endif
            <a href="/likes/{{ $comment->id }}/comments">{{ ($comment->is_liked ? 'Unlike' : 'Like' ) }}</a>
        </div>
    </div>
</div>
