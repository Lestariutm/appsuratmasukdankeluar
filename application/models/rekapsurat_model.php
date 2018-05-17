<?php 
	class rekapsurat_model extends CI_Model{
		public function suratmasuk(){
			return $this->db->get('suratmasuk')->result();
		}
		public function suratkeluar(){
			return $this->db->get('suratkeluar')->result();
		}
	}
 ?>