@extends('laravel1.template')

@section('title')
    Route3
@endsection

@section('route_name')
    Hello,
    @if(!isset($Name))
        <form action="{{ route('route3_post') }}" method="POST" target="_self">
            @csrf
            <label for="Name"></label>
            <input type="text" id="Name" name="Name" placeholder="world!">
        </form>
    @else
        {{$Name}}!
    @endif
@endsection

@section('content')
    <a href="../">Back</a>
@endsection
