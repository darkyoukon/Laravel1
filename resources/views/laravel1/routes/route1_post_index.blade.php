@extends('laravel1.template')

@section('title')
    Route1 POST
@endsection

@section('route_name')
    Hello,
    <form action="{{ route('route1_post') }}" method="POST" target="_self">
        @csrf
        <label for="Name"></label>
        <input type="text" id="Name" name="Name" placeholder="world!">
    </form>
@endsection

@section('content')
    <a href="../">Back</a>
@endsection
