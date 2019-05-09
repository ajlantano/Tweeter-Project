<div class="card">
    <div class="card-body">
        <h5 class="card-tite">{{ $comment->user->name }}</h5>
        <div class="card-text">
            @if($comment->gif_comment)
            <img src="{{$comment->body}}" /> 
            @else
            {{$comment->body}}
            @endif
        </div>
        <div class="card-text">
            @if(auth::id() == $tweet->user_id)
            <a href="/tweets/{{ $tweet->id }}/comments/{{ $comment->id }}/edit">Edit</a>
            @endif
            <a href="/tweets/{{$comment->id}}">Comment</a>
            <like-button
                :id="{{$tweet->id}}"
                :liked="{{($tweet->liked_by_user ? 1 : 0)}}"
                :type="'tweet'"
                :count="{{$tweet->likes()->count()}}">
            </like-button>
        </div>
    </div>
</div>
