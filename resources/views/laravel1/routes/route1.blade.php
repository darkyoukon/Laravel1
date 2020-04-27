@extends('laravel1.template')

@section('title')
    Route1
@endsection

@section('route_name')
    Hello,
    @if($Name == NULL)
        <form action="{{ route('route1') }}" method="get" target="_self">
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
