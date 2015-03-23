<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
		$this->load->view('product_dash');
	}

	public function login()
	{
		$this->load->view('index');
		$this->load->view('login_dash');
	}
}

//end of main controller