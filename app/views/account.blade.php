{{-- header --}}
@extends("layouts.default")

@section("content")
<h2>My Books</h2>
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
</table>
@stop

{{-- Footer --}}