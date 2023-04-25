@extends('layouts.app')
@section('content')
<h1>Edit Post</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$post->id],'method'=>'post']) !!}
<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title,['class'=>'form-control'])}}
</div>

<div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::text('body',$post->title,['class'=>'form-control','rows'=>'10'])}}
</div>

{{Form::hidden('_method','PUT ')}}

<div class="form-group">
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection
