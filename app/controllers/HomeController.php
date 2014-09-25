<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	


	public function showWelcome()
	{	
		$data = Post::all();
		return View::make('hello')->with("data",$data);
	}

	public function create(){
		return View::make('create');
	}
	public function postcreate(){
		
		// dd(Input::all());

		$a = new Post();
		$a->data = Input::get('data');
		$a->name = Input::get('name');
		$a->save();


		return Redirect::to('/');
	}

	public function show($id){
		$data  = Post::find($id);
		return View::make('view_post')->with('data',$data->data)->with('name',$data->name);

	}

}
