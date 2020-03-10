@extends('layouts.app')

@section('content')
<h1>
    Posts
</h1>

<style>
    .fit-image{
width: 100%;
object-fit: cover;
height: 100px; 
/* only if you want fixed height */
}
</style>


@if(count($posts)>0)
@foreach($posts as $post)
<div class="card card-body bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md2- col-sm-2">
                <img class="img-responsive fit-image" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
            <div class="col-md8- col-sm-8">
                <h3>
                    <a href="/posts/{{$post->id}}">{{$post->title}} </a>
                </h3>
                <h6 class="card-subtitle mb-2 text-muted">
                    Written on {{$post->created_at}} by {{$post->user->name}}
                </h6>
            </div>
        </div>
    </div>

</div>

@endforeach

{{$posts->links()}}

@else
<p>No posts</p>

@endif

@endsection