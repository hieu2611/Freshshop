<?php 
	class admin extends Dcontroller{

		public function __construct(){
			$data = array();
			$message = array();
			
			parent:: __construct();
		}
		public function index(){
		    $this -> login();
		}

		public function login(){
			//  Session::init();
			// if (Session::get("login_admin") == true) {
			// 	header("location:".BASE_URL."login/dashboard1");
			// }
			$this -> load -> view('admin/login');
		}

		public function check_account(){
			$email = $_POST['email'];
			$password = md5($_POST['password']);

			$tbl_Login = "login";
			$login_model = $this -> load -> model('adminModel');

			$count = $login_model-> check_account_model($tbl_Login, $email,$password);

			if($count == 0){

			}else{
				header("location:".BASE_URL."dashboard");
			}
		}
	}
 ?>