
@extends('layouts.default')


{{-- Above Header --}}
{{-- Php Variable $wish --}}
@section('content')
	<h2>Your Wishlist</h2>
	<table class="table">
	<thead>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Language</th>

		</tr>

	</thead>
	<tbody>
		@foreach ($wish as $w)
		<tr>
			<td>
				{{$w->title}}
				</td>
				<td>
				{{$w->author}}
				</td>
				<td>
				{{$w->lang}}

			</td>
			<td>{{ link_to_route('delete', 'Delete',array($w->id), array('class' => 'btn btn-info')) }}</td>
		</tr>		
		@endforeach
	</tbody>
	</table>
@stop
{{-- Below Footer  --}}