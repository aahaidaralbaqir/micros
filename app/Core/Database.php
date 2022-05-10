<?php 

class Database 
{
	
	private static $_instance = NULL;

	public static function getInstance() 
	{
		if ( !isset(self::$_instance) )
		{
			$pdo = new PDO("mysql:host=127.0.0.1;dbname=ujian_online","root","password") or die('gagal koneksi');
			self::$_instance = new \Envms\FluentPDO\Query($pdo);
		}
		return self::$_instance;
	}


}