<?php 

class Config {
	public static function getEnv($envKey) 
	{
		return $_ENV[$envKey];
	}
}