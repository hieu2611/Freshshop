<?php 
	class dashboard extends Dcontroller{

		public function __construct(){
			$data = array();
			$message = array();
			
			parent:: __construct();
		}
		public function index(){
		    $this -> dashboard();
		}

		public function dashboard(){
			//  Session::init();
			// if (Session::get("login_admin") == true) {
			// 	header("location:".BASE_URL."login/dashboard1");
			// }
			$this -> load -> view('admin/Frames/header');
			$this -> load -> view('admin/Frames/menu');
			$this -> load -> view('admin/admin');
			$this -> load -> view('admin/Frames/footer');
		}
	}
 ?>