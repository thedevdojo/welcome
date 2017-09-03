<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Welcome Package</title>
</head>
<body>

	@if(isset($name))
		<h1>Hello {{ ucfirst($name) }}</h1>
	@endif

	<h2>Welcome to Package Development</h2>

</body>
</html>