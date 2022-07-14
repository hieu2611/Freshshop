<?php 
	class cModel extends Dmodel{

		public function __construct(){
			parent:: __construct();
		}

		public function viewCategory($tbl_category){
			$sql = "SELECT * FROM $tbl_category ORDER BY $tbl_category.id ";
			return $this -> db ->select($sql);
		}

		public function addCategory($tbl_category, $data){
			return $this -> db -> insert($tbl_category, $data);
		}

		public function deleteCategory($table , $cond){
			return $this -> db -> delete($table, $cond);
		}	

		public function edit($table, $data, $cond){
			return $this -> db -> update($table, $data, $cond);
		}
	}
 ?>