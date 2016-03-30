<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>
@foreach ($users as $user)
    <p>This is user {{ $user->id }} {{$user->age}}</p>
	





	@if ($user->age>80)
		<p style="color: <?php echo $color; ?> ">{{$user->name}}</p>   
	
	@endif
 ---------------------------------------------
	<?php if($user->age>80) { 
		echo '<p style="color: red ">'. $user->name . '</p>';  
		dd($user->name);
	 } ?>

{{ dd($user) }}







@endforeach






	</body>
</html>
