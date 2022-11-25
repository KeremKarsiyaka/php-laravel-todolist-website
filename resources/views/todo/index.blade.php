<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://bootswatch.com/5/quartz/bootstrap.min.css">
	<title>TODO - Home</title>
</head>
<body>
	<h1>All your Todo's</h1>
	<h3>
		<a href="/create">Create</a>
	</h3>
	<h3>
		<x-alert/>
	</h3>
	@foreach($todos as $todo)
		<li>
			@if($todo->completed)
				<span style="text-decoration: line-through;">
					{{$todo->title}}
				</span>
				<a href="{{asset('/' . $todo->id . '/completed')}}">Unmark</a>
			@else
				{{$todo->title}}
				<a href="{{asset('/' . $todo->id . '/completed')}}">Completed</a>
			@endif
			<a href="{{asset('/' . $todo->id . '/edit')}}">Edit</a>
			<a href="{{asset('/' . $todo->id . '/delete')}}">Delete</a>
		</li>
	@endforeach
</body>
</html>