@extends('laravel1.template')

@section('title')
    Laravel1
@endsection

@section('route_name')
    Laravel1
@endsection

@section('content')
    <a href={{route('route1', ['Name' => $Name ?? ''])}}>Route1</a>
    <a href={{route('route_views')}}>Route views</a>
    <a href={{route('route1_post')}}>Route1 POST</a>
    <a href={{route('route2_post')}}>Route2 POST</a>
    <a href={{route('route3_post')}}>Route3 POST</a>
@endsection
