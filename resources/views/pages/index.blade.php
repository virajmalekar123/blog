@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>One and only place to manage Posts</p>
        <p><a class="btn btn-primary btn-lg"   href="/login" role="'button">Login</a></p>
        <p><a class="btn btn-success btn-lg"   href="/register" role="'button">Register </a></p>
    </div>
@endsection
