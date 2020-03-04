@extends('layouts.app')

@section('content')

<h1>Edit Post</h1>
{!! Form::open(['action'=> ['PostsController@update', $post->id],'POST']) !!}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', $post->title, ['class'=>'form-control','placeholer'=>'Title']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', $post->body, ['id' => 'editor','class'=>'form-control','placeholer'=>'Body Text']) }}


    @include('inc.CKeditor')
    
</div>

{!! Form::hidden('_method', 'PUT') !!}
{!! Form::submit('Submit', ['class'=> 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection