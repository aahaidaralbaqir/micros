<?php 

class Database 
{
	
	private static $_instance = NULL;
	private $mysqli;

	public function __construct()
	{
		$this->mysqli = new PDO("mysql:host=127.0.0.1;dbname=ujian_online","root","password") or die('gagal koneksi');
	}

	public static function getInstance() 
	{
		if ( !isset(self::$_instance) )
		{
			self::$_instance = new Database();
		}
		return self::$_instance;
	}

	public function index($table)
	{
		$query = 'SELECT * FROM ' . $table;
		$result = $this->mysqli->prepare($query);
		$result->execute();
		$reply = [];
		while ($row = $result->FETCH(PDO::FETCH_ASSOC))
			$reply[] = $row;
		return $reply;
	}

}