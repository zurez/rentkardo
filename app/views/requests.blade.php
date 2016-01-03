@extends("layouts.default")
@section('styling') 
	.col-centered{
	float: none;
margin: 0 auto;
	}
@stop
@section("content")
<div class="row">
	<div class="col-sm-9 col-centered"><h3>My Requests</h3></div>
</div>
<div class="row">

<div class="col-sm-9 col-centered">
<table class="table">
	<thead>
		<tr>
			<th>Book Id</th>
			<th>Title</th>
			<th>Author</th>
			<th>Language</th>
		</tr>
	</thead>

	<tbody>
		@foreach($req as $r)	
			<tr>
				<td>{{$r->bookid}}</td>
				<td>{{$r->title}}</td>
				<td>{{$r->author}}</td>
				<td>{{$r->language}}</td>
			</tr>
		@endforeach
	</tbody>
</table>
	@if ($req!== '')
    				<p>You don't have any requests!</p>
    								@endif
</div>
</div>
@stop