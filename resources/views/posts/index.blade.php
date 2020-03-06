@extends('layouts.app')

@section('content')
<h1>
    Posts
</h1>


@if(count($posts)>0)
@foreach($posts as $post)
<div class="card card-body bg-grey">
    <div class="row">
        <div class="col-md4- col-sm-4">
            <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
        </div>
        <div class="col-md4- col-sm-4">
            <h3>
                <a href="/posts/{{$post->id}}">{{$post->title}} </a>
            </h3>
            <h6 class="card-subtitle mb-2 text-muted">
                Written on {{$post->created_at}} by {{$post->user->name}}
            </h6>
        </div>
    </div>

</div>

@endforeach

{{$posts->links()}}

@else
<p>No posts</p>

@endif

@endsection