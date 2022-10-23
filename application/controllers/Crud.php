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
		// Load pagination library 
		$this->load->library('Pagination_bootstrap');

		// Set number of rows per page
		$this->pagination_bootstrap->offset(10);

		// Customize links
		$links = array('next' => 'Next', 'prev' => 'Previous', 'last' => 'Last', 'first' => 'First');
		$this->pagination_bootstrap->set_links($links);

		// load data from db
		$sql = $this->db->get('products');

		// Get number of pages
		$data['product_details'] = $this->pagination_bootstrap->config("/crud/index", $sql);

		/* $data['product_details'] = $this->crud_model->getAllProducts(); */
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
			$result = $this->crud_model->insertProduct([
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'description' => $this->input->post('description'),
				'category' => $this->input->post('category'),
			]);
		}

		if ($result) {
			$this->session->set_flashdata('inserted', 'Your data has been successfully added!');
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

	public function editProduct($id){
		$data['singleProduct'] = $this->crud_model->getSingleProduct($id);

		$this->load->view('edit_view', $data);
	}

	public function update($id)
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
			$result = $this->crud_model->updateProduct([
				'name' => $this->input->post('name'),
				'price' => $this->input->post('price'),
				'description' => $this->input->post('description'),
				'category' => $this->input->post('category'),
			], $id);
		}

		if ($result) {
			$this->session->set_flashdata('updated', 'Your data has been successfully updated!');
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

	public function deleteProduct($id)
	{
		$result = $this->crud_model->deleteItem($id);

		if ($result == true) {
			$this->session->set_flashdata('deleted', 'Your data has been successfully deleted!');
		}

		redirect('crud');
	}
}
