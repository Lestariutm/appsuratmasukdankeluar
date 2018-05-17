<?php 
 class Data_login extends CI_Model{
 	function cek_login($table,$where){
 		return $this->deb->get_where($table,$where);
 	}
 }
 ?>