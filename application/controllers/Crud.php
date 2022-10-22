<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	/* public function __construct()
	{
		parent::__construct();
		$this->load->model->model('data_model','data');
	} */

	public function index()
	{
		$data['product_details'] = $this->crud_model->getAllProducts();
		$this->load->view('crud_view', $data);
	}

	/* public function add_product()
	{
		$data=array(
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'description' => $this->input->post('description'),
			'category' => $this->input->post('category'),
		);

		$this->data->insert_data('product_detail',$data);
		header('location'.base_url().'product');
	} */
}
