<?php 
	class index extends DController{ // kế thừa 
		
		public function __construct(){
			$data = array();
			parent:: __construct();
		}
		public function index(){

		    $this -> home();
		}

		public function home(){
			$tbl_slide = "slide";
			$s_model = $this -> load -> model('sModel');
			$data['slide'] = $s_model -> viewSlide($tbl_slide);

			$this -> load -> view('user/fromUser/header');
			$this -> load -> view('user/fromUser/menu');
			$this -> load -> view('user/fromUser/slide', $data);
			$this -> load -> view('user/index');
			$this -> load -> view('user/fromUser/footer');
		}
	}
 ?>