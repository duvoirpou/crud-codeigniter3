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
		$query = $this->db->insert('products',$data);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function getSingleProduct($id){
		$this->db->where('id',$id);
		$query = $this->db->get('products');

		if ($query) {
			return $query->row();
		} 
		
	}

	public function updateProduct($data,$id){
		$this->db->where('id',$id);
		$query = $this->db->update('products',$data);
		

		if ($query) {
			return true;
		} else {
			return false;
		}
		
	}

	public function deleteItem($id){
		$this->db->where('id',$id);
		$query = $this->db->delete('products');

		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function search($keyword){
		$this->db->like('name',$keyword);
		$this->db->or_like('price',$keyword);
		$this->db->or_like('description',$keyword);
		$this->db->or_like('category',$keyword);
		return $this->db->get('products')->result_array();
	}
	
}
