@extends('layouts.app')

@section('content')
<a style="margin: 15px 0;" href="/posts" class="btn btn-outline-secondary">Go Back</a>
<h1 style="padding: 15px 0;">{{$post->title}}</h1>
<img style="width: 100%;max-height:400px ;" src="/covers/{{$post->cover_image}}" alt="{{$post->cover_image}}">
<br>
<br>
<p>{!!$post->body!!}</p>
<hr>
<small>Created at : {{$post->created_at}} By {{ optional($post->user)->name }}</small>
<hr>
@if(Auth::user())
@if(Auth::user()->id==$post->user->id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary" style="margin-bottom: 1%;">Edit</a>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id],'method'=>'post','class'=>'d-inline float-right']) !!}


{{Form::hidden('_method','Delete')}}

<div class="form-group">
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
</div>
{!! Form::close() !!}
@endif
@endif
@endsection
