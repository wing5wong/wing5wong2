<?php

class Quote_Controller extends Base_Controller {

	public $restful = true;
	
	
	
	
	
	public function get_index()
	{
		$quotes = Quote::all();
		
		return View::make('quote.list')
			->with('quotes',$quotes);
	
	}
	
		public function get_add()
	{
		return View::make('quote.add');
	}
	
		public function get_edit($id){
		$quote = Quote::find($id);
		
		return View::make('quote.edit')
			->with('quote',$quote);
	}
	
	
		public function get_view($id)
	{
		$quote = Quote::find($id);
		
		return View::make('quote.view')
			->with('quote',$quote);
	}
	
	
	
	public function post_edit()
	{
		$quote = Quote::find( Input::get('id') );
		
		$quote->author = Input::get('author');
		$quote->quote = Input::get('quote');
		
		$quote->save();
		
		return Redirect::to_action('quote@index');

}
	
	
	
	public function post_add()
	{
		$quote = array(
			'author'=>Input::get('author'),
			'quote'=>Input::get('quote')
		);
		
		$rules = array(
			'author' => 'required|min:2|max:255',
			'quote' => 'required|min:12'
		);
		
		$validation = Validator::make($quote,$rules);
		if ( $validation-> fails() )
		{
			return Redirect::to_action('quote@add')
				->with_errors($validation)
				->with_input();
				
				}
		
		$quote_new = new Quote($quote);
		$quote_new->save();
	
		return Redirect::to_action('quote@index');
	}
	
	
	
	public function get_delete($id){
		$quote = Quote::find($id);
		
		$quote->delete();
		
		return Redirect::to_action('quote@index');
	}
	
	
	
	public function __construct(){
		parent::__construct();
		$this->filter('before', 'auth')->only(array('add', 'edit', 'delete'));
	}
}