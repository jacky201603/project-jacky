<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>




<form action="{{URL::route('home.blog.post')}}" method="POST">
	title:<br>
	<input type='text' name='title'><br>
	content:<br>
	<input type='text' name='content'><br>

	<input type="submit" value="commit!">
</form>



	</body>
</html>
