<?php

class Controller 
{
	protected function view($file, $data = []) 
	{
		foreach ($data as $key => $value) 
			${$key} = $value;
		require_once '../app/views/' . $file . '.php';
	}

	protected function model($file) 
	{
		require_once '../app/models/' . $file . '.php';
		return new $file();
	}
}