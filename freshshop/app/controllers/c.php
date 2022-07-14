<?php 
	class c extends Dcontroller{

		public function __construct(){
			$data = array();
			$message = array();
			
			parent:: __construct();
		}
		public function index(){
			$this -> Category();
		}
		
		public function Category(){

			$tbl_category = "category";
			$c_model = $this -> load -> model('cModel');
			$data['data'] = $c_model -> viewCategory($tbl_category);

			$this -> load -> view('admin/Frames/header');
			$this -> load -> view('admin/Frames/menu');
			$this -> load -> view('admin/category', $data);
			$this -> load -> view('admin/Frames/footer');
		}

		public function add(){
			$category = $_POST['category'];

			$tbl_category = "category";
			$c_model = $this -> load -> model('cModel');
			if($category != ""){
			$data = array(
				'nameCategory' => $category
			);
			}else{

			}
			$result = $c_model -> addCategory($tbl_category , $data);

			if ($result == 1) {
	 			$message['msg'] = "Data added successfully";
	 			header('location:'.BASE_URL."c?msg=".urlencode(serialize($message)));
	 		}else{
	 			$message['msg'] = "More challenging data!";
	 			header('location:'.BASE_URL."c?msg=".urlencode(serialize($message)));
	 		}

		}
		public function delete($id){
			$tbl_category = "category";
			$cond = "$tbl_category.id = $id";
			$c_model = $this -> load -> model('cModel');

			$result = $c_model -> deleteCategory($tbl_category, $cond);

			if ($result == 1) {
	 			header('location:'.BASE_URL."c");
	 		}else{
	 			$message['msg'] = "Error!";
	 			header('location:'.BASE_URL."c?msg=".urlencode(serialize($message)));
	 		}
		}
		public function edit($id){
			$e_category = $_POST['EditCategory'];
			$tbl_category = "category";
			$cond = "$tbl_category.id = $id";
			$c_model = $this -> load -> model('cModel');
			if($e_category != ""){
				$data = array(
				'nameCategory' => $e_category
				);
			}
		
			$result = $c_model -> edit($tbl_category,$data, $cond);
			header('location:'.BASE_URL."c");
		}
	}
 ?>