@extends('layouts.app')

@section('content')

    <div class="container">
    <h1>Forum:: {{$topic->title}}</h1>
    <p>{{$topic->content}}
        <br>
        <i>Autor:{{$topic->user->name}} </i>
    </p>
    <hr>

    <h3>Replies:: ({{count($topic->replies)}}) </h3>

    @foreach ($topic->replies as $reply)
        <p>
            {{$reply->content}}
            <br>
            <i>Autor:{{$reply->user->name}} </i>
        </p>
        <hr>
    @endforeach
    
    </div>

@endsection
