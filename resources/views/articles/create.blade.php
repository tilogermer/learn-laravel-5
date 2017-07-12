@extends ('layouts.app')

@section('content')

	<h1>Create a new Article</h1>

	<hr>


{!! Form::open(['url' => 'articles']) !!}

	@include ('articles.form', ['submitButtonText' => 'Add Article'])

{!! Form::close() !!}

@include ('errors.list')

@endsection
