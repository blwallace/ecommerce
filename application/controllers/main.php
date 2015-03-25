<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('Product');
		$this->load->model('Dashboard');
	}

	public function index()
	{
		$data = array(
			'products' => $this->Product->get_all()
		);
		$this->load->view('index',$data);
	}
	public function show_single($id)
	{
		$data = array(
			'id'=>$id,
			'product'=>$this->Product->get_single($id)
		);
		$this->load->view('ShowPage',$data);
	}
	public function login()
	{
		$this->load->view('login_dash');
	}
	public function admin()
	{
		$this->load->view('login');
	}
	public function orders()
	{
		$data = array(
			'orders' => $this->Dashboard->get_all(),
			'total' => $this->Dashboard->get_total()
		);
		$this->load->view('orders',$data);
	}
	public function show_orders($id) 
	{
		$data = array(
			'show_orders' => $this->Dashboard->show_single_order(),
			'id' => $id,
			'billing' => $this->Dashboard->get_single($id)
		);

		$this->load->view('show_orders',$data);
	}
	public function products()
	{
		$data = array(
			'products'=>$this->Dashboard->get_total_quantity()
		);
		$this->load->view('products',$data);
	}
	public function edit_product($id)
	{
		$data = array(
			'id'=>$id,
			'product'=>$this->Product->get_single($id)
		);
		$this->load->view('edit_product',$data);
	}
	public function new_product()
	{
		$this->load->view('new_product');
	}

}

//end of main controller