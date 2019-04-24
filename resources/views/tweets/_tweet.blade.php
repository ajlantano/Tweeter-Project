<div class="card">
    <div class="card-body">
        <a href ="/profiles/{{$tweet->user->id}}">
        <h5 class="card-tite">{{ $tweet->user->name }} </h5>
        <a/>
        <div class="card-text">
            {{ $tweet->body }}
        </div>
        <div class="card-body">
            <a href="/tweets/{{$tweet->id}}">Comment</a>
            <like-button
                :id="{{$tweet->id}}"
                :liked="{{($tweet->liked_by_user ? 1 : 0)}}"
                :type="'tweet'"
                :count="{{$tweet->likes()->count()}}">
            </like-button>
            @if(auth::id() == $tweet->user_id)
            <a href="/tweets/{{$tweet->id}}/edit">Edit</a>
            @endif
        </div>
    </div>
</div>
