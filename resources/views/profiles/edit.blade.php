@extends('layouts.app')

@section('content')
<form class="" action="/profiles/{{$user->id}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('put')}}
    <div class="">
        <label>Location</label>
        <input type="text" name="location" value="{{$user->profile->location}}">
    </div>
    <div class="">
        <label>Birthday</label>
        <input type="date" name="birthday" value="{{$user->profile->birthday}}">
    </div>
    <div class="">
        <label>Website</label>
        <input type="text" name="website" value="{{$user->profile->website}}">
    </div>
    <div class="">
        <label>Bio</label>
        <textarea class="form-control" name="bio" rows="8" cols="80">{{$user->profile->bio}}</textarea>
    </div>
    <div class="">
        <label>Profile Photo</label>

        @if($user->profile->avatar)
        <img src="{{ Storage::disk('s3')->url('/avatars/' . $user->profile->user_id . '/' . $user->profile->avatar) }}">
        @endif

        <input type="file" name="avatar">

    </div>
    <div class="">
        <button type="submit" class="btn btn-dark">Save</button>
    </div>
</form>
@endsection
