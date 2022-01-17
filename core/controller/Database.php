<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b0e6bbf7c4d912";$this->pass="abb193a7";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_7cb9153f00a5efb";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
