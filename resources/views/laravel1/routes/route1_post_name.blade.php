@extends('laravel1.template')

@section('title')
    Route1 POST Name
@endsection

@section('route_name')
    Hello, {{$Name}}!
@endsection

@section('content')
    <a href="../">Back</a>
@endsection
