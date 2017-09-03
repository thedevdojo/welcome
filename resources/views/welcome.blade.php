<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Welcome Package</title>
	<link rel="stylesheet" type="text/css" href="/assets/welcome.css">
</head>
<body>

	@if(isset($name))
		<h1>Hello There {{ ucfirst($name) }}</h1>
	@endif

	<h2>Welcome to Package Development</h2>

</body>
</html>