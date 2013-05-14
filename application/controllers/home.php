<?php

class Home_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_index()
	{
		$news = News::where('show_staff','=','1')->order_by('created_at','desc')->take(2)->get();
		
		$quote = Quote::all();
		$rand = rand(0,sizeof($quote)-1);
		$quote = $quote[$rand];
		
		$contentSections = ContentSection::where('show_staff','=','1')
		->where_side('left')
		->order_by( DB::raw('ISNULL(order_by)') ,'asc')
		->order_by('order_by','asc')
		->get();
		
		$contentSectionsRight = ContentSection::where('show_staff','=','1')
		->where_side('right')
		->order_by( DB::raw('ISNULL(order_by)') ,'asc')
		->order_by('order_by','asc')
		->get();


		return View::make('home.index')
		->with('news',$news)
		->with('quote',$quote)
		->with('contentSections',$contentSections)
		->with('contentSectionsRight',$contentSectionsRight);
	}
	
	
	public function __construct(){
		parent::__construct();

	}

}