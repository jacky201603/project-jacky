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

// Route::get('/', function()
// {
	
// 	DB::table('blogs')->insert(
//     array('title' => 'abc', 'content' => 'abbdfsdf'));

//     	DB::table('blogs')->insert(
//     array('title' => 'ffff', 'content' => 'abbdfdfgsdf'));

//     		DB::table('blogs')->insert(
//     array('title' => 'ddd', 'content' => 'abbdfsdfgdf'));

//     			DB::table('blogs')->insert(
//     array('title' => 'abcdef', 'content' => 'abbdfsdfggdf'));
	
// 	return View::make('login');

// });

	
Route::controller('/', 'HomeController',
[
		'getIndex' => 'home.index',
		'getShowWelcome' => 'home.welcome',
		'getDeleteInfo' =>'home.blog.delete',
		'getBlogEdit' => 'home.blog.edit',
		'postBlogEdit' => 'home.blog.post',
		'getBlogContent' => 'blog.content',
		'getEditBlog'=> 'edit.blog'
]);




	// dd( DB::table('database2016')->get() );

	//dd( DB::table('database2016')->get() );


/*

	$users = DB::table('database2016')->get();

	foreach ($users as $user)
	{
    	var_dump($user->name);
	}



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

	
});


*/

