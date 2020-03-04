@extends('layouts.app')

@section('content')
<h1>
    Posts
</h1>

@if(count($posts)>0)
@foreach($posts as $post)
<div class="card card-body bg-dark">

    <h3>
        <a href="/posts/{{$post->id}}">{{$post->title}} </a>

    </h3>
    <h6 class="card-subtitle mb-2 text-muted">
        Written on {{$post->created_at}}
    </h6>
</div>

@endforeach

{{$posts->links()}}

@else
<p>No posts</p>

@endif

@endsection