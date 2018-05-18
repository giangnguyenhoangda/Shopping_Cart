<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('shopping_model');
		$data=$this->shopping_model->getAllProduct();
		$data = array('arraydata'=>$data);
		$this->load->view('shopping_view',$data,FALSE);
	}

	public function getProductDetailByID()
	{
		$id = $this->input->post('id');
		$this->load->model('shopping_model');
		$data =$this->shopping_model->getProductByID($id);
		$data=array('arraydata'=>$data);
		// $this->load->view('shopping_view', $data, FALSE);
		return $data;
	}

	public function viewShoppingCart()
	{
		$this->load->view('cart_view');
	}


}

/* End of file shopping.php */
/* Location: ./application/controllers/shopping.php */