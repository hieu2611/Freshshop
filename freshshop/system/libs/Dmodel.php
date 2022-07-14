<?php 
class DModel{

	protected $db = array();

	public function __construct(){
		$connect = 'mysql:dbname=freshshop; host=localhost; charset=utf8';
		$user = 'trunghieu';
		$pass = '';
		$this -> db = new Database($connect , $user,$pass);
	}

}
?>