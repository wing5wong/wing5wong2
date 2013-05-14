<?php

class Student_Controller extends Base_Controller {

	public $restful = true;
	
	
	public function get_index()
	{
		$news = News::order_by('updated_at','desc')->take(2)->get();
		
		$quote = Quote::all();
			$rand = rand(0,sizeof($quote)-1);
			$quote = $quote[$rand];
		
		$contentSections = ContentSection::where('display','=','1')->get();
		
		return View::make('home.index')
			->with('news',$news)
			->with('quote',$quote)
			->with('contentSections',$contentSections);
	
	}
	
	
	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth')->only(array('add', 'edit', 'delete'));
	}
}