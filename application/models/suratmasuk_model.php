<?php
	class suratmasuk_model extends CI_Model{
		function getAllData(){
			$query = $this->db->get("suratmasuk");
			return $query;
		}
	}
