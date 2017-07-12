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

<!--Product Cards Bootstrap4 -->
<div class="card mb-3">
	<img class="card-img-top" src="/img/copa700x490.jpg" alt="Card image cap">
	<div class="card-block">
		<h4 class="card-title">Card title</h4>
		<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	</div>
</div>

<hr>

<div class="card">
	<div class="card-block">
		<h4 class="card-title">Card title</h4>
		<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	</div>
	<img class="card-img-bottom" src="/img/pesce700x490.jpg" alt="Card image cap">
</div>

<div class="card card-inverse">
  <img class="card-img" src="/img/copa700x490.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

<hr>

<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="/img/anatra256x180.jpg" alt="Card image cap" class="img-responsive">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/img/anatra256x180.jpg" alt="Card image cap" class="img-responsive">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="/img/anatra256x180.jpg" alt="Card image cap" class="img-responsive">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

@endsection


