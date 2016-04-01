<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>

	<a href="{{URL::route('home.blog.edit')}}">添加blog</a>

	@foreach ($blogs as $blog)
	<p>This is blog {{ $blog->title }} </p>

	<form action="{{URL::route('home.blog.delete')}}">

  		<input type="hidden" name="id" value="{{$blog->id}}">
  		<input type="submit" value="Delete Me!">
	</form>

	<a href="{{URL::route('blog.content', array($blog->id) )}}">see content info</a>
	<a href="{{URL::route('blog.content', array($blog->id) )}}">edit the title </a>



<!--
	<a href="{{URL::route('home.blog.delete', array($blog->id) )}}">delte me !</a>

	<a href="{{URL::route('home.blog.delete') . '?id=' . $blog->id }}">delte me again!</a>

	<a href="{{URL::route('home.blog.delete')}}?id={{$blog->id}}">delte me again again!</a>


	<form action="{{URL::route('home.blog.delete')}}">
		<input type='text' name='tea_name'>
  		<input type="hidden" name="id" value="{{$blog->id}}">
  		<input type="submit" value="Delete Me!">
	</form>
-->

	@endforeach


	</body>
</html>
