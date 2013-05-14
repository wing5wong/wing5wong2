<?php
class Page extends Eloquent{


	static function find_by_slug($slug)
	{
		return static::where_slug($slug)->first();
	}	
	
	public function set_title($title){
		$this->set_attribute('title', ($title));
		$this->set_attribute('slug', Str::slug($title));
	}
}