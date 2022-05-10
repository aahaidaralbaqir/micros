<?php

class Controller 
{
	protected function view($file) 
	{
		require_once '../app/views/' . $file . '.php';
	}

	protected function model($file) 
	{
		require_once '../app/models/' . $file . '.php';
		return new $file();
	}
}