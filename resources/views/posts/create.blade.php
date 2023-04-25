@extends('layouts.app')
@section('content')
<h1>Create Post</h1>
{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method'=>'post','files'=>true]) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title','',['class'=>'form-control'])}}
</div>

<div class="form-group " style="margin-top: 1%;">
    {{Form::label('body','Body')}}
    {{Form::textarea('body','',['class'=>'form-control','rows'=>'5'])}}
</div>
<div class="form-group" style="margin-top: 1%;">
    {{Form::file('cover_image')}}
</div>
<div class="form-group" style="margin-top: 2%;">
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection
