<div class="list-group">
    @foreach ($tweet->comments as $comment)
        @include('tweets.comment._comment')
    @endforeach

</div>
