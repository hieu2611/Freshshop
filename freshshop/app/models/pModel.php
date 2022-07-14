<?php 
	class pModel extends Dmodel{

		public function __construct(){
			parent:: __construct();
		}

		public function viewProduct($table){
			$sql = "SELECT * FROM $table ORDER BY $table.idProduct ";
			return $this -> db ->select($sql);
		}
		public function viewProductId($table,$table1, $cond){
			$sql = "SELECT * FROM $table , $table1 WHERE $cond";
			return $this -> db -> select($sql);
		}

		public function addProduct($tbl_product, $data){
			return $this -> db -> insert($tbl_product, $data);
		}

		public function deleteProduct($table , $cond){
			return $this -> db -> delete($table, $cond);
		}	

		public function edit($table, $data, $cond){
			return $this -> db -> update($table, $data, $cond);
		}

		public function byid($table,$cond){
			$sql = "SELECT * FROM $table WHERE $cond";
			return $this -> db -> select($sql);
		}
	}
 ?>