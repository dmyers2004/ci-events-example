<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Events</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<p>
			<a href="/welcome/basic">Basic Events Example</a>  /welcome/basic
		</p>
		<p>
			<a href="/welcome/priority">Priority Events Example</a> /welcome/priority
		</p>
		<p>
			<a href="/welcome/math">Math Boom Example</a> /welcome/math
		</p>
		<p>
			<a href="/welcome/orders">Order Example</a> /welcome/orders
		</p>
		<p>
			<a href="/welcome/new_example">New Example</a> /welcome/new_example
		</p>
		<p>
			<a href="/welcome/new_example_missing_args_no_error">New Example Missing Args No Error</a> /welcome/new_example_missing_args_no_error
		</p>
		<p>
			Files included:
			<ul>
				<li>Changes to: /application/controllers/Welcome.php (example to trigger events)</li>
				<li>Changes to: /application/views/welcome_message.php (this view)</li>
				<li>New: /application/libraries/Event.php (the events library)</li>
				<li>New: /application/libraries/Some_random_lib.php (a example library which registers some listeners)</li>
				<li>New: /application/views/input.php (show output from the controller changes)</li>
			</ul>
		</p>
		<p>
			Events can be registered and triggered any where after the events library is loaded.			
		</p>
	</body>
</html>