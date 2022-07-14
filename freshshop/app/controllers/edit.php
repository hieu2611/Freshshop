<?php 
	class edit extends Dcontroller{

		public function __construct(){
			parent:: __construct();
		}
		public function index(){
			$this -> ViewEdit();
		}
	
		public function ViewEdit(){
			$id = $_GET['id'];
			// data product
			$tbl_product = "product";
			$tbl_category = "category";

			$cond = "$tbl_product.idCategory = $tbl_category.id AND $tbl_product.idProduct = $id";
			$p_model = $this -> load -> model('pModel');
			$c_model = $this -> load -> model('cModel');
			$data['product'] = $p_model -> viewProductId($tbl_product,$tbl_category , $cond);
			$data['category'] = $c_model -> viewCategory($tbl_category);
			

			$this -> load -> view('admin/Frames/header');
			$this -> load -> view('admin/Frames/menu');
			$this -> load -> view('admin/Frames/editProduct', $data);
			$this -> load -> view('admin/Frames/footer');
		}

		public function editProduct($id){
			$tbl_product = "product";
			$cond = "$tbl_product.idProduct = $id";
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

			if ($image) {
				$data['byid'] = $p_model -> byid($tbl_product,$cond);
				foreach ($data['byid'] as $key => $value) {
				unlink("public/uploads/imageProductAdmin/".$value['imageProduct']);
				}

				$data = array(
	 			'nameProduct' => $nameProduct,
				'priceProduct' => $priceProduct,
				'imageProduct' => $uni_image,
				'quantity' => $quantity,
				'description' => $desciptionProduct,
				'information' => $informationProduct,
				'idCategory' => $category
	 			);
	 			$image_uploads = "public/uploads/imageProductAdmin/".$uni_image;
				move_uploaded_file($tmp_image, $image_uploads);
			}else{
				$data = array(
	 			'nameProduct' => $nameProduct,
				'priceProduct' => $priceProduct,
				'quantity' => $quantity,
				'description' => $desciptionProduct,
				'information' => $informationProduct,
				'idCategory' => $category
	 			);
			}
			$result = $p_model -> edit($tbl_product , $data, $cond);
			if ($result == 1) {
	 			$message['msg'] = "Successfully updated";
	 			header('location:'.BASE_URL."p?msg=".urlencode(serialize($message)));
	 		}else{
	 			$message['msg'] = "Update failed information !";
	 			header('location:'.BASE_URL."p?msg=".urlencode(serialize($message)));
	 		}	
		}
	}
 ?>