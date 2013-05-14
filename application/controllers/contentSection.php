<?php

class ContentSection_Controller extends Base_Controller {

	public $restful = true;
	
	
	public function get_index()
	{
		$contentSections = ContentSection::order_by( DB::raw('ISNULL(order_by)') ,'asc')
		->order_by('order_by','asc')
		->get();
		
		return View::make('contentsection.list')
		->with('contentSections',$contentSections);
		
	}
	
	public function get_add()
	{
		return View::make('contentsection.add');
	}

	public function post_add()
	{
		$contentSection = array(
			'header'=>Input::get('header'),
			'content'=>Input::get('content'),
			'show_staff'=> is_null(Input::get('show_staff')) ? 0 : 1,
			'show_students'=> is_null(Input::get('show_students')) ? 0 : 1,
			'side' => Input::get('side')
			);
		
		$contentSection_new = new ContentSection($contentSection);
		$contentSection_new->save();
		
		return Redirect::to_action('contentSection@index');
	}
	
	
	public function get_edit($id){
		$contentSection = ContentSection::find($id);
		
		return View::make('contentsection.edit')
		->with('contentSection',$contentSection);
	}
	
	public function post_edit()
	{
		$contentSection = ContentSection::find( Input::get('id') );
		
		$contentSection->header = Input::get('header');
		$contentSection->content = Input::get('content');
		$contentSection->show_students = Input::get('show_students');
		$contentSection->show_staff = Input::get('show_staff');
		$contentSection->order_by = Input::get('order_by');
		$contentSection->side = Input::get('side');
		
		$contentSection->save();
		
		return Redirect::to_action('contentSection@index');

	}


	public function get_delete($id){
		$contentSection = ContentSection::find($id);
		
		$contentSection->delete();
		
		return Redirect::to_action('contentSection@index');
	}
	
	
	
	
	
	
	
	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth')->only(array('add', 'edit', 'delete'));
	}
}