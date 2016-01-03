@extends("layouts.default")
@section('content')
			@if ($errors->has())
        <div class="alert alert-success">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
<h4><a href="index" class="btn btn-primary">Click here to back to home page</a></h4>
@stop