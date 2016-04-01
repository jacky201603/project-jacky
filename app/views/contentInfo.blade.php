<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>



	<p>This is blog {{ $blog->title }} </p>

	<p>This is blog {{ $blog->content }} </p>
	<a href="{{URL::route('home.index')}}">return main page</a>

<!--
	<a href="{{URL::route('home.blog.edit')}}">添加blog</a>

	<form action="{{URL::route('home.blog.delete')}}">

  		<input type="hidden" name="id" value="{{$blog->id}}">
  		<input type="submit" value="Delete Me!">
	</form>

	<a href="{{URL::route('home.blog.delete' )}}">see content info</a>

	<a href="{{URL::route('home.blog.delete', array($blog->id) )}}">delte me !</a>

	<a href="{{URL::route('home.blog.delete') . '?id=' . $blog->id }}">delte me again!</a>

	<a href="{{URL::route('home.blog.delete')}}?id={{$blog->id}}">delte me again again!</a>


	<form action="{{URL::route('home.blog.delete')}}">
		<input type='text' name='tea_name'>
  		<input type="hidden" name="id" value="{{$blog->id}}">
  		<input type="submit" value="Delete Me!">
	</form>
-->


	</body>
</html>