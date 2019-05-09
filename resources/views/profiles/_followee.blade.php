<div class="card">
    <div class="card-body d-flex align-items justify-content">
        <div class="d-flex align-items-center">
            <a href="/profiles/{{$user->id}}"></a>
            <h5 class="card-title">{{$user->name}}</h5>

        </div>
        <div>
            @if($user->followed_by_user)
            <a href="/profiles/{{$user->id}}/unfollow" class="btn btn-warning">Unfollow</a>
            @else
            <a href="/profiles/{{$user->id}}/follow" class="btn btn-primary">Follow</a>
            @endif
        </div>

    </div>

</div>
