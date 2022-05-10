<?php 

class HomeController extends Controller {

	public function test($name, $id)
	{
		return $this->view('home', [ 'name' => $name ]);
	}

}