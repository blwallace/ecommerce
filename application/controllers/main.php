<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('Product');
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
}

//end of main controller