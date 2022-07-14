<?php 
	class sModel extends Dmodel{

		public function __construct(){
			parent:: __construct();
		}

		public function viewSlide($table){
			$sql = "SELECT * FROM $table ORDER BY $table.idSlide ";
			return $this -> db ->select($sql);
		}

		public function addSlide($table, $data){
			return $this -> db -> insert($table, $data);
		}

		public function delete($table , $cond){
			return $this -> db -> delete($table, $cond);
		}	

		public function edit($table, $data, $cond){
			return $this -> db -> update($table, $data, $cond);
		}
	}
 ?>