<?php 
	class add extends Dcontroller{

		public function __construct(){
			parent:: __construct();
		}
		public function index(){
			$this -> Viewadd();
		}
	
		public function Viewadd(){
			$tbl_category = "category";
			$c_model = $this -> load -> model('cModel');
			$data['category'] = $c_model -> viewCategory($tbl_category);


			$this -> load -> view('admin/Frames/header');
			$this -> load -> view('admin/Frames/menu');
			$this -> load -> view('admin/Frames/addProduct',$data);
			$this -> load -> view('admin/Frames/footer');
		}

		public function addproduct(){
			/*sql*/
			$tbl_product = "product";
			$p_model = $this -> load -> model('pModel');
			/*data*/
			$nameProduct = $_POST['nameProduct'];
			$priceProduct = $_POST['priceProduct'];
			$desciptionProduct = $_POST['desctiptionProduct'];
			$informationProduct = $_POST['infomation']; 
			$category = $_POST['category']; 
			$quantity = $_POST['quantity']; 
			/*image processing*/
			$image = $_FILES['image_product']['name'];
			$tmp_image = $_FILES['image_product']['tmp_name'];
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$uni_image = $div[0].time().'.'.$file_ext;
			$image_uploads = "public/uploads/imageProductAdmin/".$uni_image;
			/*data sql*/
			$data = array(
	 			'nameProduct' => $nameProduct,
				'priceProduct' => $priceProduct,
				'imageProduct' => $uni_image,
				'quantity' => $quantity,
				'description' => $desciptionProduct,
				'information' => $informationProduct,
				'idCategory' => $category
	 		);
			$result = $p_model -> addProduct($tbl_product, $data);

			if ($result == 1) {
				$image_uploads = "public/uploads/imageProductAdmin/".$uni_image;
				move_uploaded_file($tmp_image, $image_uploads);
	 			$message['msg'] = "More successful product information";
	 			header('location:'.BASE_URL."p?msg=".urlencode(serialize($message)));
	 		}else{
	 			$message['msg'] = "More failed product information!";
	 			header('location:'.BASE_URL."p?msg=".urlencode(serialize($message)));
	 		}
		}
	}
 ?>