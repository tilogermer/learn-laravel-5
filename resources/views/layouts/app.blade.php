<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<title>Laravel 5</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	</head>
	<body>
		<div class="container">
			@yield ('content')
		</div>

		@yield ('footer');
		
	</body>
</html>