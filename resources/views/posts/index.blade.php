@extends('layouts.app')

@section('content')
    <h1 class="pt-3">Posts</h1>
    @if(count($posts)>0)

            @foreach($posts as $post)
             <div class="card">
                 <div class="col-md-4 col-sm-4  card-body">
                     <img style="width:50%"src="/storage/cover_images/{{$post->cover_image}}">
                 </div>
                 <div class="col-md-8 col-sm-8  card-body">
                     <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                     <small>Written at  {{$post->created_at}} by {{$post->user->name}}</small>
                 </div>

             </div>
            @endforeach
        {{$posts->links()}}
    @else
     <p>No Posts Found</p>
    @endif()

@endsection
