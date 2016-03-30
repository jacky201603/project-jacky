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

	public function getShowWelcome()
	{

		$users = DB::table('database2016')->where('age', '>=' ,0)
									->get();

		return View::make('emails.auth.reminder')->with('token', 44)->with('users', $users)
												->with('color','red');
	}

		public function getMath()
	{
		return "2016";
	}


}
