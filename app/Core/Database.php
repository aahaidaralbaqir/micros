<?php 

class Database 
{
	
	private static $_instance = NULL;

	public static function getInstance() 
	{
		if ( !isset(self::$_instance) )
		{
			$pdo = new PDO("mysql:host=".Config::getEnv("DB_HOST").";dbname=".Config::getEnv("DB_NAME"),Config::getEnv("DB_USERNAME"),Config::getEnv("DB_PASSWORD")) or die('gagal koneksi');
			self::$_instance = new \Envms\FluentPDO\Query($pdo);
		}
		return self::$_instance;
	}


}