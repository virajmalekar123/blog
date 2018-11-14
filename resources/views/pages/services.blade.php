@extends('layouts.app')

@section('content')
    <h1>Services Pages</h1>
    <p>This is the sample laravel posts page for services</p>

    @if(count($services)>0)
        <ul class="list-group">
                @foreach($services as $service)
                        <li class="list-group-item">{{$service}}</li>
                @endforeach
        </ul>
    @endif
@endsection()
