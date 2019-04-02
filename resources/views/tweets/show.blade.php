@extends ('layouts.app')

@section('content')
@include('tweets._tweet')


    <h3>Comments</h3>
    @include('tweets.comment._index')
    @include('tweets.comment._create')


@endsection
