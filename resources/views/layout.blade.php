<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield("title","Home")</title>
</head>
<body>

	@section("header")
		<p>Parent Header</p>
	@show

	@section("navbar")
		<p>Parent Navbar</p>
	@show


	@section("body")
		<p>Parent Body</p>
	@show


	@section("footer")
		<p>Parent Footer</p>
	@show
</body>
</html>