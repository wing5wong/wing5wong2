<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}
	
	public function __construct()
	{
		//Assets		
		Asset::add('normalize', 'css/normalize.css');

		Asset::add('bootstrap', 'css/bootstrap.min.css');
		Asset::add('font-awesome', 'css/font-awesome.min.css');    
		Asset::add('whs-theme', 'css/whs-theme.css');  
		Asset::add('sass', 'css/sass/sass.css'); 
		Asset::add('jquery.tooltip','css/jquery.tooltip.css');

		Asset::add('jquery', 'js/jquery.js');  
		Asset::add('bootstrap-js', 'js/bootstrap.min.js');  
		Asset::add('jquery-tooltip', 'js/jquery.tooltip.js','jquery');  
		
	
		//$links = Link::order_by('id','asc')->get();
		
		$links = Link::where('show_staff','=','1')
							->order_by( DB::raw('ISNULL(order_by)') ,'asc')
							->order_by('order_by','asc')
							->order_by('created_at','asc')
							->get();
		
		View::share('links', $links);
		
		parent::__construct();
	
	
	}

}