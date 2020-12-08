@extends('app')

@section('content')
    <h1 class="text-center">Hello @auth(){{auth()->user()->name}} @else Guest @endauth!</h1>
@endsection
