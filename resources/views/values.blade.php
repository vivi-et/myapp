@if(auth()->user()->id)
{{auth()->user()->name}}
@else
false
@endif

