<?php

class Techs_Controller extends Base_Controller {

	public $restful = true;
	
	
	public function get_index()
	{
		return View::make('techs.index');
	
	}

	public function get_copiers()
	{
		return View::make('techs.copiers');
	}
	
	
	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth')->only(array('add', 'edit', 'delete'));
	}
}