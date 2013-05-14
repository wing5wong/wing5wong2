<?php

class Link_Controller extends Base_Controller {

	public $restful = true;
	
	
	
	public function get_index()
	{
		//$link_list = Link::order_by('updated_at','desc')->paginate();
		
		
		//SELECT * FROM people ORDER BY ISNULL(nickname), nickname ASC
		
		$link_list = Link::order_by( DB::raw('ISNULL(order_by)') ,'asc')
						->order_by('order_by','asc')
						->order_by('created_at','asc')
						->paginate(15);
		return View::make('link.list')
			->with('link_list',$link_list);
	}
	
	
	public function get_add()
	{
		return View::make('link.add');
	}
	
	
	public function post_add()
	{
		$link = array(
		'src'=>Input::get('src'),
		'text'=>Input::get('text'),
		'title'=>Input::get('title')
		);
	
		$rules = array(
			'src' => 'required|min:2|max:255',
			'text' => 'required|min:2|max:255',
			'title' => 'required|min:2|max:255'
		);
	
		$validation = Validator::make($link,$rules);
		if ( $validation-> fails() )
		{
			return Redirect::to_action('link@index')
				->with_errors($validation)
				->with_input();
				}
		
		$new_link = new Link($link);
		$new_link->save();
	
		return Redirect::to_action("link@index");
	}
	
	
	public function get_edit($id){
		$link = Link::find($id);
		
		return View::make('link/edit')
			->with('link',$link);
	}
	
	public function post_edit(){
	
		$link = Link::find( Input::get('id') );
		
		$link->src = Input::get('src');
		$link->text = Input::get('text');
		$link->title = Input::get('title');
		$link->order_by = Input::get('order_by');
		$link->show_students = Input::get('show_students');
		$link->show_staff = Input::get('show_staff');
		
		$link->save();
	
		return Redirect::to_action('link@index');
	}
	
	
	public function get_delete($id){
		$link = Link::find($id);
		
		$link->delete();
		
		return Redirect::to_action('link@index');
	}
	
	
	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth')->only(array('add', 'edit', 'delete'));
	}
	
	
}