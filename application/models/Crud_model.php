<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function getAllProducts(){
		$query = $this->db->get('products');

		if ($query) {
			
			return $query->result();
		}
	}

	public function insertProduct($data){
		$this->db->insert('products',$data);
	}

	
}
