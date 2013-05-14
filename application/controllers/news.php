<?php

class News_Controller extends Base_Controller {

	public $restful = true;
	
	
	
	
	
	public function get_index()
	{
		$news = News::order_by('created_at','desc')->paginate(10);
		return View::make('news.list')
		->with('news',$news);
	}
	
	
	public function get_add()
	{
		return View::make('news.add');
	}
	
	
//	public function get_view($id)
	//{
	//	$news = News::find($id);
	
	//	return View::make('news.view')
	//		->with('news',$news);
	//}
	
	public function get_view($slug)
	{
		$news = News::find_by_slug($slug);
		if($news){
			return View::make('news.view')
			->with('news',$news);
		}
		else
		{
			return Response::error('404');
		}
	}
	
	
	public function post_edit()
	{
		$news = News::find( Input::get('id') );
		
		$news->title = Input::get('title');
		$news->author = Input::get('author');
		$news->body = Input::get('body');
		$news->important = Input::get('important');
		$news->show_students = Input::get('show_students');
		$news->show_staff = Input::get('show_staff');
		
		$news->save();
		
		return Redirect::to_action('news@index');
		
	}
	
	public function post_add()
	{
		$news = array(
			'title'=>Input::get('title'),
			'author'=>Input::get('author'),
			'body'=>Input::get('body'),
			'important'=> is_null(Input::get('important')) ? 0 : 1,
			'show_staff'=> is_null(Input::get('show_staff')) ? 0 : 1,
			'show_students'=> is_null(Input::get('show_students')) ? 0 : 1
			);
		
		$rules = array(
			'title' => 'required|min:2|max:255',
			'body' => 'required|min:12',
			'author' => 'required|min:2|max:255'
			);
		
		$validation = Validator::make($news,$rules);
		if ( $validation-> fails() )
		{
			return Redirect::to_action('news@add')
			->with_errors($validation)
			->with_input();
			
		}
		
		$new_news = new News($news);
		$new_news->save();
		
		return Redirect::to_action('news@index');
	}
	
	
	public function get_edit($id){
		$news = News::find($id);
		
		return View::make('news.edit')
		->with('news',$news);
	}
	
	
	public function get_delete($id){
		$news = News::find($id);
		
		$news->delete();
		
		return Redirect::to_action('news@index');
	}
	
	
	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth')->only(array('add', 'edit', 'delete'));
	}
	
	
}