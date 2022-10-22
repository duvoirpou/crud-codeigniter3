<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{

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

	public function addProduct()
	{
		$this->form_validation->set_rules('name', 'Product Name', 'trim|required');
		$this->form_validation->set_rules('price', 'Product Price', 'trim|required');
		$this->form_validation->set_rules('description', 'Product Description', 'trim|required');
		$this->form_validation->set_rules('category', 'Product Category', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data_error = [
				'error' => validation_errors()
			];

			$this->session->set_flashdata($data_error);
		} else {
			$this->crud_model->insertProduct([
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'description' => $this->input->post('description'),
				'category' => $this->input->post('category'),
			]);
		}

		redirect('crud');

		/* $data=array(
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'description' => $this->input->post('description'),
			'category' => $this->input->post('category'),
		);

		$this->data->insert_data('product_detail',$data);
		header('location'.base_url().'product'); */
	}
}
