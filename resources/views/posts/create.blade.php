@extends('layouts.app')

@section('content')





{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: '#textarea'
  });
</script> --}}





<h1>Create Post</h1>
{!! Form::open(['action'=> 'PostsController@store','POST','enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', '', ['class'=>'form-control','placeholer'=>'Title']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', '', ['id' => 'editor','class'=>'form-control','placeholer'=>'Body Text']) }}
    {{-- {{ Form::textarea('body', null, array('id'=>'editor','class'=>'form-control')) }} --}}

    @include('inc.CKeditor')

</div>
<div class="form-group">
{!! Form::file('cover_image') !!}

</div>
{!! Form::submit('Submit', ['id'=>'submit','class'=> 'btn btn-primary']) !!}
{!! Form::close() !!}



@endsection