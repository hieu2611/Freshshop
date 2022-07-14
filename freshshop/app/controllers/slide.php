<?php 
	class slide extends Dcontroller{

		public function __construct(){
			parent:: __construct();
		}
		public function index(){
			$this -> ViewSlide();
		}
	
		public function ViewSlide(){
			$tbl_slide = "slide";
			$s_model = $this -> load -> model('sModel');
			$data['slide'] = $s_model -> viewSlide($tbl_slide);

			$this -> load -> view('admin/Frames/header');
			$this -> load -> view('admin/Frames/menu');
			$this -> load -> view('admin/slide', $data);
			$this -> load -> view('admin/Frames/footer');
		}

		public function editSlide(){

			// /*image processing*/
			// $image = $_FILES['image_product']['name'];
			// $tmp_image = $_FILES['image_product']['tmp_name'];
			// $div = explode('.', $image);
			// $file_ext = strtolower(end($div));
			// $uni_image = $div[0].time().'.'.$file_ext;
			// $image_uploads = "public/uploads/imageProductAdmin/".$uni_image;

			// if ($image) {
			// 	$data['byid'] = $p_model -> byid($tbl_product,$cond);
			// 	foreach ($data['byid'] as $key => $value) {
			// 	unlink("public/uploads/imageProductAdmin/".$value['imageProduct']);
			// 	}

			// 	$data = array(
	 	// 		'nameProduct' => $nameProduct,
			// 	'priceProduct' => $priceProduct,
			// 	'imageProduct' => $uni_image,
			// 	'quantity' => $quantity,
			// 	'description' => $desciptionProduct,
			// 	'information' => $informationProduct,
			// 	'idCategory' => $category
	 	// 		);
	 	// 		$image_uploads = "public/uploads/imageProductAdmin/".$uni_image;
			// 	move_uploaded_file($tmp_image, $image_uploads);
			// }else{
			// 	$data = array(
	 	// 		'nameProduct' => $nameProduct,
			// 	'priceProduct' => $priceProduct,
			// 	'quantity' => $quantity,
			// 	'description' => $desciptionProduct,
			// 	'information' => $informationProduct,
			// 	'idCategory' => $category
	 	// 		);
			// }
			// $result = $p_model -> edit($tbl_product , $data, $cond);
			// if ($result == 1) {
	 	// 		$message['msg'] = "Successfully updated";
	 	// 		header('location:'.BASE_URL."p?msg=".urlencode(serialize($message)));
	 	// 	}else{
	 	// 		$message['msg'] = "Update failed information !";
	 	// 		header('location:'.BASE_URL."p?msg=".urlencode(serialize($message)));
	 	// 	}	
		}
		public function delete()
		{
			$id = $_GET['id'];

			$tbl_slide = "slide";
			$cond = "$tbl_slide.idSlide = $id";
			$s_model = $this -> load -> model('sModel');
			$result = $s_model -> delete($tbl_slide, $cond);

			if ($result == 1) {
	 			header('location:'.BASE_URL."slide");
	 		}else{
	 			$message['msg'] = "Error!";
	 			header('location:'.BASE_URL."slide?msg=".urlencode(serialize($message)));
	 		}
		}
		public function addSlide()
		{
			$tbl_slide = "slide";
			$s_model = $this -> load -> model('sModel');

			$content = $_POST['content'];
			//image
			$image = $_FILES['imageSlide']['name'];
			$tmp_image = $_FILES['imageSlide']['tmp_name'];
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$uni_image = $div[0].time().'.'.$file_ext;
			$image_uploads = "public/uploads/imageSlideAdmin/".$uni_image;
			//data
			$data = array(
				"image" => $uni_image,
				"comment" => $content
			);

			$result = $s_model -> addSlide($tbl_slide, $data);

			if ($result == 1) {
				$image_uploads = "public/uploads/imageSlideAdmin/".$uni_image;
				move_uploaded_file($tmp_image, $image_uploads);
	 			$message['msg'] = "More successful slide information";
	 			header('location:'.BASE_URL."slide?msg=".urlencode(serialize($message)));
	 		}else{
	 			$message['msg'] = "More failed slide information!";
	 			header('location:'.BASE_URL."slide?msg=".urlencode(serialize($message)));
	 		}
		}
	}
 ?>