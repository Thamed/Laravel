@extends('default')

@section('content')
<form method="POST" action="/profile">
    @csrf

    ...
</form>
@stop