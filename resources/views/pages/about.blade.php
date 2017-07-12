@extends ('layouts.app')
		
@section ('content')
	
	<h1>About Me!</h1>
	
	@if (count($people))
	<h2>People I like</h2>
	
	<ul>
	@foreach ($people as $person)
		<li>{{ $person }}</li>
	@endforeach	
	</ul>
	@endif
	

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur sequi quo odio recusandae minus harum quia minima illo aperiam iure praesentium, eos delectus laudantium laboriosam nihil, deserunt vitae. Repellendus, ullam.	
	</p>

	<img src="/img/hpi_at_night.png" alt="HPI">

@endsection


