<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


/*
	public function getShowWelcome()
	{

		$users = DB::table('database2016')->where('age', '>=' ,0)
									->get();

		return View::make('emails.auth.reminder')->with('token', 44)->with('users', $users)
												->with('color','red');
	}
*/

	/*获取blog信息*/
	public function getIndex()
	{

		$blogs = DB::table('blogs')->get();
	/*
		foreach ($blogs as $blog)
		{
    		var_dump($blog->title);
    		var_dump($blog->content);
		}   */
		/*程序跳转到blog.blade.php文件*/
		return View::make('blog')->with('blogs', $blogs);									
	}

	/*删除对应的blog*/
	public function getDeleteInfo()
	{

		echo Input::get('tea_name');

		$blog_id = Input::get('id');

		DB::table('blogs')->where('id', '=', $blog_id)->delete();
		// echo $blog_id;
	}
	/*跳转到添加blog内容的界面*/
	public function getBlogEdit()
	{
		return View::make('blogEdit');									

	}
	/*将浏览器输入的title和content存入数据库*/
	public function postBlogEdit()
	{
		$title = Input::get('title');
		$content = Input::get('content');

		DB::table('blogs')->insert(
    	array('title' => $title, 'content' => $content));
	}

	public function getBlogContent($blog_id)
	{
		//Input::get('id');
		$blog = DB::table('blogs')->where('id', '=', $blog_id)->first();

		/*程序跳转到blog.blade.php文件*/
		return View::make('contentInfo')->with('blog', $blog);							
	}

	public function getEditBlog($blog_id)
	{
		//Input::get('id');
		$blog = DB::table('blogs')->where('id', '=', $blog_id)->first();

		/*程序跳转到blog.blade.php文件*/
		return View::make('contentInfo')->with('blog', $blog);							
	}



}
