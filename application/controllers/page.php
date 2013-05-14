<?php

class Page_Controller extends Base_Controller {

	public $restful = true;
	
	
	public function get_index()
	{
		$pages = Page::order_by('created_at','desc')->paginate(10);
		return View::make('page.list')
			->with('pages',$pages);
	}
	
	
	public function get_add()
	{
		return View::make('page.add');
	}
	
	
	public function get_view($id)
	{
		//$page = Page::find($id);
		$page = page::find_by_slug($id);
		if($page){
		return View::make('page.view')
			->with('page',$page);
			}
			else
			{
				return Response::error('404');
			}
	}
	
	
	public function post_edit()
	{
		$page = Page::find( Input::get('id') );
		
		$page->title = Input::get('title');
		$page->body = Input::get('body');
		
		$page->save();
		
		return Redirect::to_action('page@index');
	}
	
	public function post_add()
	{
		$page = array(
			'title'=>Input::get('title'),
			'body'=>Input::get('body')
		);
		
		$rules = array(
			'title' => 'required|min:2|max:255',
			'body' => 'required|min:12',
		);
		
		$validation = Validator::make($page,$rules);
		if ( $validation-> fails() )
		{
			return Redirect::to_action('page@add')
				->with_errors($validation)
				->with_input();
		}
		
		$new_page = new Page($page);
		$new_page->save();
	
		return Redirect::to_action('page@index');
	}
	
	
	public function get_edit($id){
		$page = Page::find($id);
		
		return View::make('page.edit')
			->with('page',$page);
	}
	
	
	public function get_delete($id){
		$page = Page::find($id);
		
		$page->delete();
		
		return Redirect::to_action('page@index');
	}
	
	
	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth')->only(array('add', 'edit', 'delete'));
	}
	
	
}