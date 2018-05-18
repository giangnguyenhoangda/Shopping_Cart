<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shopping1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $_SESSION["cart"]=array();
	}

	// $_SESSION["cart"]=array();


	public function index()
	{
		session_start();

		if(!isset($_SESSION['cart'])){
			$_SESSION['cart']=array();
		}
		// $_SESSION["cart"]=array();
		// session_register('cart');
		// $_SESSION["cart"]=array();
		// echo 'index';
		// var_dump($_SESSION["cart"]);
		$cart=array();
		$this->load->model('shopping_model1');
		$data=$this->shopping_model1->getAllProduct();
		$data = array('arraydata'=>$data);
		$this->load->view('choose_product_view',$data,FALSE);
		// $this->load->view('add_product_success');
	}

	public function getProductDetailByID()
	{
		$id = $this->input->post('id');
		$this->load->model('shopping_model1');
		$data =$this->shopping_model1->getProductByID($id);
		$data=array('arraydata'=>$data);
		// $this->load->view('shopping_view', $data, FALSE);
		return $data;
	}

	public function viewShoppingCart()
	{
		
		$cart=array();
		$this->load->model('shopping_model1');
		session_start();
		// echo '<pre>';
		// var_dump($_SESSION["cart"]);
		foreach ($_SESSION["cart"] as $key=>$value) {
			$data = $this->shopping_model1->getProductByID($key);
			// echo '<pre>';
			// var_dump($cart);
			$cart[$key]=$data['0'];
		}
		$cart = array('list'=>$cart);
		// echo '<pre>';
		// var_dump($cart);
		// echo '<hr>';
		// $t=$cart['list']['1'];
		//var_dump( $cart['list']['1']);
		// var_dump($t);
		// echo $t['logo'];
		$this->load->view('cart_view1',$cart,FALSE);

	}

	public function getProductDetail()
	{
		$id = $this->input->post('productchoose');
		//echo 'id:'.$id;
		$this->load->model('shopping_model1');
		$data =$this->shopping_model1->getProductByID($id);
		$data=array('arraydata'=>$data);
		// var_dump($data);
		$this->load->view('product_detail_view', $data, FALSE);
		
	}

	public function addProduct()
	{
		$id= $this->input->post('productid');
		session_start();
		// echo 'add';
		// var_dump($_SESSION['cart']);
		if(array_key_exists($id, $_SESSION['cart'])){
			$value=$_SESSION['cart'][$id];
			$_SESSION['cart'][$id]=$value+1;
		}
		else{
			$_SESSION['cart'][$id]=1;
		}
		// var_dump($_SESSION['cart']);
		// viewShoppingCart();
		// $cart=array();
		// $this->load->model('shopping_model1');
		// // session_start();
		// // echo '<pre>';
		// // var_dump($_SESSION["cart"]);
		// foreach ($_SESSION["cart"] as $key=>$value) {
		// 	$data = $this->shopping_model1->getProductByID($key);
		// 	// echo '<pre>';
		// 	// var_dump($cart);
		// 	$cart[$key]=$data['0'];
		// }
		// $cart = array('list'=>$cart);
		// // echo '<pre>';
		// // var_dump($cart);
		// // echo '<hr>';
		// // $t=$cart['list']['1'];
		// //var_dump( $cart['list']['1']);
		// // var_dump($t);
		// // echo $t['logo'];
		// $this->load->view('cart_view1',$cart,FALSE);
		$this->load->view('add_product_success');
	}

	public function removeproduct($id)
	{
		session_start();
		unset($_SESSION['cart'][$id]);
		// var_dump($_SESSION['cart']);
		// load view cart_view
		// $cart=array();
		// $this->load->model('shopping_model1');
		// // session_start();
		// // echo '<pre>';
		// // var_dump($_SESSION["cart"]);
		// foreach ($_SESSION["cart"] as $key=>$value) {
		// 	$data = $this->shopping_model1->getProductByID($key);
		// 	// echo '<pre>';
		// 	// var_dump($cart);
		// 	$cart[$key]=$data['0'];
		// }
		// $cart = array('list'=>$cart);
		// // echo '<pre>';
		// // var_dump($cart);
		// // echo '<hr>';
		// // $t=$cart['list']['1'];
		// //var_dump( $cart['list']['1']);
		// // var_dump($t);
		// // echo $t['logo'];
		// $this->load->view('cart_view1',$cart,FALSE);
		$this->load->view('add_product_success');
	}

	public function checkout()
	{
		session_start();
		foreach ($_SESSION['cart'] as $key=>$value) {
			unset($_SESSION['cart'][$key]);
		}
		// echo 'Check Out Done.';
		// echo '<pre>';
		// var_dump($_SESSION["cart"]);
		$cart=array();
		$this->load->model('shopping_model1');
		// session_start();
		// echo '<pre>';
		// var_dump($_SESSION["cart"]);
		foreach ($_SESSION["cart"] as $key=>$value) {
			$data = $this->shopping_model1->getProductByID($key);
			// echo '<pre>';
			// var_dump($cart);
			$cart[$key]=$data['0'];
		}
		$cart = array('list'=>$cart);
		// echo '<pre>';
		// var_dump($cart);
		// echo '<hr>';
		// $t=$cart['list']['1'];
		//var_dump( $cart['list']['1']);
		// var_dump($t);
		// echo $t['logo'];
		$this->load->view('cart_view1',$cart,FALSE);
	}

	public function editproduct($id)
	{
		session_start();
		$this->load->model('shopping_model1');
		$data=$this->shopping_model1->getProductByID($id);
		$data[0]['s']=$_SESSION['cart'][$id];
		$data = array('product'=>$data);
		// echo '<pre>';
		// var_dump($data);
		$this->load->view('product_edit', $data, FALSE);
	}

	public function saveProduct()
	{
		$s = $this->input->post('s');
		$id = $this->input->post('productid');
		// echo "id:$id , s:$s";
		session_start();
		$_SESSION['cart'][$id]=$s;
		// var_dump($_SESSION['cart']);

		// $cart=array();
		// $this->load->model('shopping_model1');
		// // session_start();
		// // echo '<pre>';
		// // var_dump($_SESSION["cart"]);
		// foreach ($_SESSION["cart"] as $key=>$value) {
		// 	$data = $this->shopping_model1->getProductByID($key);
		// 	// echo '<pre>';
		// 	// var_dump($cart);
		// 	$cart[$key]=$data['0'];
		// }
		// $cart = array('list'=>$cart);
		// // echo '<pre>';
		// // var_dump($cart);
		// // echo '<hr>';
		// // $t=$cart['list']['1'];
		// //var_dump( $cart['list']['1']);
		// // var_dump($t);
		// // echo $t['logo'];
		// $this->load->view('cart_view1',$cart,FALSE);

		$this->load->view('add_product_success');

	}

}

/* End of file shopping.php */
/* Location: ./application/controllers/shopping.php */