@extends ('layouts.app')

@section ('content')
<h1 class="title">Edit Tweet</h1>
<form action="/tweets/{{$tweet->id}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    @include('tweets._form')
</form>
<form action="/tweets/{{$tweet->id}}" method="POST">
    @csrf
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection
