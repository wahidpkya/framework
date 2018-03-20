<?php 
class Database {
	private static $instance = null;
	private $mysqli;

	public function __construct() {
		$this->mysqli = new mysqli('localhost', 'root', '', 'db_penjualan');
	}

	public function konek() {
		if(!isset(self::$instance)) {
			self::$instance = new Database;
		}
		return self::$instance;
	}
}




 ?>