<?php 
	class p extends Dcontroller{

		public function __construct(){
			parent:: __construct();
		}
		public function index(){
			$this -> Product();
		}
		
		public function Product(){

			$tbl_product = "product";
			$p_model = $this -> load -> model('pModel');
			$data['product'] = $p_model -> viewProduct($tbl_product);

			$this -> load -> view('admin/Frames/header');
			$this -> load -> view('admin/Frames/menu');
			$this -> load -> view('admin/product', $data);
			$this -> load -> view('admin/Frames/footer');
		}

		public function add(){
			$this -> load -> view('admin/Frames/header');
			$this -> load -> view('admin/Frames/menu');
			$this -> load -> view('admin/Frames/addProduct');
			$this -> load -> view('admin/Frames/footer');
		}

		public function addproduct(){

			
		}
		public function delete($id){
			$tbl_product = "product";
			$cond = "$tbl_product.idProduct = $id";
			$p_model = $this -> load -> model('pModel');
			/* image processing */
			$data['byid'] = $p_model -> byid($tbl_product,$cond);
			foreach ($data['byid'] as $key => $value) {
				unlink("public/uploads/imageProductAdmin/".$value['imageProduct']);
				$result = $p_model -> deleteProduct($tbl_product, $cond);
			}
			if ($result == 1) {
	 			header('location:'.BASE_URL."p");
	 		}else{
	 			$message['msg'] = "Error!";
	 			header('location:'.BASE_URL."p?msg=".urlencode(serialize($message)));
	 		}
		}
	}
 ?>