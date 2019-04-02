@extends ('layouts.app')

@section ('content')
<h1 class="title">Create Tweet</h1>
<form class="form-group" action="/tweets" method="POST">
    @include('tweets._form')
</form>
@endsection
