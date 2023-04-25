@extends('layouts.app')

@section('content')
<h1>Media Preview</h1>
<a href="/media" class="btn btn-secondary " style="margin-bottom: 1%;">Go Back</a>
@if(Auth::user())
@if(Auth::user()->id==$media->user->id)
{!! Form::open(['action' => ['App\Http\Controllers\MediaController@destroy',$media->id],'method'=>'post','class'=>'d-inline float-right']) !!}


{{Form::hidden('_method','Delete')}}

<div class="form-group">
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
</div>
{!! Form::close() !!}
@endif
@endif
<hr>
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-4">
        <img src="/photos/{{$media->name}}" class="img-thumbnail" style="width: 100%; height: 100%;">
    </div>
    <small>Created at : {{$media->created_at}} By {{ optional($media->user)->name }}</small>
</div>

@endsection
