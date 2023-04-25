@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 style="font-size: 3.5rem; padding-top: 5%;">{{$title}}</h1>
    <p class="lead">Lorem30</p>
    <a href="/login" class="btn btn-success">login</a>
    <a href="/register" class="btn btn-primary">register</a>
</div>
@endsection
