@extends('layouts.app')

@section('content')
    <a class="btn btn-success mt-3" href="/posts">Go back</a>
    <h1 class="pt-3">{{$post->title}}</h1>
    <img class="pb-4" style="width:50%px"src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST' , 'class' => 'pull-right'])!!}
            {!! Form::hidden('_method','DELETE') !!}
            {!! Form::submit('Delete',['class'=>'btn btn-danger'])!!}
            {!! Form::close() !!}
        @endif
    @endif
@endsection
