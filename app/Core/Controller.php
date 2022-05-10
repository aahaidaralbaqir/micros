<?php

class Controller 
{
	protected function view($file) 
	{
		require_once '../app/views/' . $file . '.php';
	}
}