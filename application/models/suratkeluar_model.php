<?php
	class suratkeluar_model extends CI_Model{
		function getAllData(){
			$query = $this->db->get("suratkeluar");
			return $query;
		}
	}
