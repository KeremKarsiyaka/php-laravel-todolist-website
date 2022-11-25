<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todo App - Create</title>
</head>
<body style="text-align: center;">
	<h1>Create Your Todo List</h1>
	<h3>
		<x-alert />
	</h3>
	<form action="/upload" method="post">
		@csrf
		<input type="text" name="title">
		<input type="submit" value="Create">
	</form>
	<br>
	<a href="/index">Back</a>
</body>
</html>