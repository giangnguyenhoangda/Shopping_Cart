<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopping_model1 extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllProduct()
	{
		$this->db->select('*');
		$data=$this->db->get('product');
		$data=$data->result_array();
		return $data;
	}

	public function getProductByID($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$data=$this->db->get('product');
		$data=$data->result_array();
		return $data;
	}

}

/* End of file shopping_model.php */
/* Location: ./application/models/shopping_model.php */