@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-default">Go Back</a>
<br>
<br>
<h1>
    {{$post->title}}
</h1>
@if($post->cover_image !== 'noimage.jpg')
<br><br>
<img style="width: 50%" src="/storage/cover_images/{{$post->cover_image}}">
<br><br>
@endif
<div>
    {!! $post->body !!}
</div>

<hr>
Written on {{$post->created_at}} by {{$post->user->name}}
</small>

<hr>

@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

{!! Form::open(['action' =>['PostsController@destroy', $post->id],'method'=>'POST', 'class'=>'float-right']) !!}

{!! Form::hidden('_method', 'DELETE') !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}
@endif
@endif
@endsection