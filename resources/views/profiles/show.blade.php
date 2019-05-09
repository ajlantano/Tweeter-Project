@extends('layouts.app')

@section ('content')
@if(Auth::id() == $user->id )
<div class="">
    <a class = "btn btn-dark" href="/profiles/{{$user->id}}/edit">Edit Profile</a>
</div>
<div class="">
    <a href="/profiles/{{$user->id}}/followers">
        <h3>{{$user->followers->count()}}</h3>
        <span>Followers</span>
    </a>
    <a href="/profiles/{{$user->id}}/following">
        <h3>{{$user->following->count()}}</h3>
        <span>Following</span>
        
    </a>
</div>
@endif
<h1>{{ $user->name}}</h1>
<ul class="list-group list-group-flush">
  <li class="list-group-item">{{ $user->profile->bio }}</li>
  <li class="list-group-item">{{ $user->profile->location }}</li>
  <li class="list-group-item">{{$user->profile->birthday}}</li>
  <li class="list-group-item">{{$user->profile->website}}</li>
</ul>
@endsection
