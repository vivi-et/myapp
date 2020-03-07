@extends('layouts.app')

@section('content')

<div class="card">


    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="card-body">
        <a href="/posts/create" class="btn btn-primary">Create Post</a>
        <br>
        <br>
        <h3>Your Blog Posts</h3>
        @if(count($posts)>0)
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($posts->reverse() as $post)
                <tr>
                    <td><a href="/posts/{{$post->id}}"> {{$post->title}} </a></td>
                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                    <td>{!! Form::open(['action' =>['PostsController@destroy',
                        $post->id],'method'=>'POST',
                        'class'=>'float-right']) !!}

                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                        {!! Form::close() !!}</td>
                </tr>
                @endforeach
            </table>

            @else
            <p>You have no Posts</p>
            @endif
        </div>



    </div>
    @endsection