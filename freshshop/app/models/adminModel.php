<?php 
	class adminModel extends Dmodel{

		public function __construct(){
			parent:: __construct();
		}

		public function check_account_model($table_admin, $email,$password){
			$sql = "SELECT * FROM $table_admin WHERE email = ? AND password = ? AND dece = 0";
			return $this -> db ->affectedRows($sql, $email, $password);
		}
	}
	
 ?>