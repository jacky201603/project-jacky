<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// dd( DB::table('database2016')->get() );

	//dd( DB::table('database2016')->get() );

/*
	$users = DB::table('database2016')->get();

	foreach ($users as $user)
	{
    	var_dump($user->name);
	}
*/
	//更新数据库的内容
	DB::table('database2016')
            ->where('name', 'roy')
            ->update(array('name'=>'mina','age' => 99));

	$users = DB::table('database2016')->where('age', '>=' ,20)
									->orwhere('name', 'roy')
									->get();
	foreach ($users as $user)
	{
    	var_dump($user->name);
    	var_dump($user->age);

	}

	// var_dump($user->name);

	DB::table('database2016')->where('name', '=', 'aimee')->delete();


DB::table('database2016')->insert(
    array('name' => 'aimee', 'age' => 16)
);

	return "hello world";
});


Route::controller('home_welcome', 'HomeController',
[
		'getShowWelcome' => 'home.welcome',
		'getMath'=>'home.math'
]);