<?php
 class Login extends CI_Controller{
 	function __construct(){
 		parent:: __construct();
 		$this->load->model('data_login');
 	}
 	function index(){
 		$this->load->view('login');
 	}
 	function cek_login(){
 		$username=$this->input->post('username');
 		$password=$this->input->post('password');
 		$where= array(
 			'username' => $username,
 			'password' => $password
 			);
 		$cek = $this->data_login->cek_login("admin",$where)->num_rows();
 		if ($cek > 0){

 			$data_session=array(
 				'nama' => $username,
 				'status' => "dashboard"
 				);

 			$this->session->set_userdata($data_session);
 			redirect(base_url("dashboard"));
 		}else{
 			echo "<script type='text/javascript'>
 					alert('Maaf Username dan Password Anda Salah!');
 					document.write('<center><h1>Harap masukan Username dan Password Dengan Benar !</h1></center>');
 				</script>";
 		}
 		}
 		function logout(){
 			$this->session->sess_destroy();
 			redirect(base_url('login'));
 		}
 	}
 ?>