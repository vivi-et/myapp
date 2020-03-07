@extends('layouts.app')

@section('content')


<div class="jumbotron text-center">

    <h1>안녕?</h1>
    <p>만들어봄</p>
    <p>야 오늘 너무 졸린데 못갈수도 있음 ㄹㅇ;</p>
    @if(!Auth::check())
    <p>


        <a href="/login" role="button" class="btn btn-primary btn-lg">Login</a>
        <a href="/register" role="button" class="btn btn-success btn-lg">Register</a>
    </p>

    @endif

</div>

@endsection