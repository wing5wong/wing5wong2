<?php

class Login_Controller extends Base_Controller {

	public $restful = true;
	
	
	public function get_index()
	{
		
		return View::make('login.login')->with('title','Login Form Page')
		->with('prev_page', URL::current() );
	
	}
	
	public function post_index()
	{
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			'remember' => Input::get('remember'),
			);
			
			
		if ( Auth::attempt($userdata) ){
			
			// If user attempted to access specific URL before logging in
			if ( Session::has('pre_login_url') )
			{
				$url = Session::get('pre_login_url');
				Session::forget('pre_login_url');
				return Redirect::to($url);
			}
			else{
				return Redirect::back();
				//return Redirect::to_action('home@index');
			}
		}
		else{
			return Redirect::to_action('login@index')->with('login_errors',true);
		}
	}
	

	
}