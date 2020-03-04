<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>{{config('app.name','myAPP')}}</title>

</head>

<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>


    <script>
   function MinHeightPlugin(editor) {
  this.editor = editor;
}

MinHeightPlugin.prototype.init = function() {
  this.editor.ui.view.editable.extendTemplate({
    attributes: {
      style: {
        minHeight: '300px'
      }
    }
  });
};

ClassicEditor.builtinPlugins.push(MinHeightPlugin);
ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
      // console.log( editor );
    })
    .catch( error => {
      console.error( error );
    });                                
    </script>

</body>

</html>