@extends('laravel1.template')

@section('title')
    Route views
@endsection

@section('route_name')
    {{$views_count[0]->count}} views
@endsection

@section('nicknames')
    <span>Featured users:</span>
    @foreach($usernames as $username)
        <span>{{$username['nickname']}}</span>
    @endforeach
@endsection

@section('content')
    <a href="../">Back</a>
@endsection

