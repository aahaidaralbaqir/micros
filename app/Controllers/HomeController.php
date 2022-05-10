<?php 

class HomeController extends Controller {

	public function index()
	{
		return $this->view('home');
	}

	public function test($name, $id)
	{
		return $this->view('home', [ 'name' => $name ]);
	}

	public function getusers() 
	{
		$user = User::all();

		$this->view('users', ['users' => $user->index()]);
	}
}