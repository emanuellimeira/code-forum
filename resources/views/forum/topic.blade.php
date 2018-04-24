@extends('layouts.app')

@section('content')

    <div class="container">
    <h1>{{$topic->title}} <small>Fórum</small></h1>
    <p>{{$topic->content}}
        <br>
        <i>Autor:{{$topic->user->name}} </i>
    </p>
    <hr>

    <h3>({{count($topic->replies)}}) <small>Replies</small></h3>

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
