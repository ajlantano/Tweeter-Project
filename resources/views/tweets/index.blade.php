@extends ('layouts.app')

@section ('content')
@foreach ($tweets as $tweet)
@include('tweets._tweet')
@endforeach
{{ $tweets->links() }}
@endsection
