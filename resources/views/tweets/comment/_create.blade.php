<div>
        <hr />
    <h6>Comment</h6>
    <form method="post" action="{{ route('comment.add' ,  ['id' => $tweet->id]) }}">
        @csrf
    <div class="form-group">
        <input type="text" name="comment_body" class="form-control" />
        <div class="form-group">
            <input type="submit" class="btn btn-dark" value="Add Comment" />
            <giph-comment>
            </giph-comment>
            <input type="submit" class="btn btn-dark" />
        </div>
    </div>
</div>
