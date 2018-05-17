<?php
	class Dashboard extends CI_Controller{
		public function index(){
			
			$data['content']='Dashboard_view';
			$data['active']="active";
			$this->load->view("template",$data);
			
		}
	}
?>