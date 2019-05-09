@extends('layouts.app')
@section('content')
<h1 class="title">Who To Follow</h1>
@foreach($users as $user)
@include('profiles._followee')
@endforeach
@endsection
