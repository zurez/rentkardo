{{-- header --}}
@extends("layouts.default")
@section('styling') 
	.col-centered{
	float: none;
margin: 0 auto;
	}
@stop
@section("content")
<div class="row">
	<div class="col-sm-3">
<h6>Welcome {{$name}} !</h6></div>
	<div class="col-sm-9 col-centered"><h3>My Books</h3></div>
</div>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col col-sm-9 col-centered">
	
		<table class="table">
			<thead>
				<tr>
					<td>
						Title
					</td>
					<td>Author</td>
					<td>Condition</td>
					<td>Expected Price</td>
					<td>Status</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
			@if ($value !== '')
    				<p>You don't have any books!</p>
    								@endif
	</div>
</div>
@stop

{{-- Footer --}}