<div class="card">
    <div class="card-body">
        <h5 class="card-tite">{{ $tweet->user->name }} </h5>
        <div class="card-text">
            {{ $tweet->body }}
        </div>
        <div class="card-body">
            <a href="/tweets/{{$tweet->id}}">Comment</a>
            <a href="/likes/{{ $tweet->id}}/tweet">
                {{ ($tweet->is_liked ? 'Unlike' : 'Like' ) }}
                ({{ $tweet->likes->count() }})
            </a>
            @if(auth::id() == $tweet->user_id)
            <a href="/tweets/{{$tweet->id}}/edit">Edit</a>
            @endif
        </div>
    </div>
</div>
