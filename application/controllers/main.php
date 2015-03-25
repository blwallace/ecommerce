<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('Product');
		$this->load->model('Dashboard');
	}

	public function index($start)
	{

		if(!$this->input->post('sort'))
			{	$sort = 'ORDER BY id ASC';}	
		else
			{	$sort = 'ORDER BY price ASC';}				
		
		if(!$this->input->post('search'))
			{	$search = '%';}
		else{$search = $this->input->post('search');
			$search = "%" .$search."%";}

		$all_products = $this->Product->get_all_filtered($search,$sort);
		//count all items
		if($this->input->post('sort') == 'popular')
			{$all_products = $this->Product->get_popular();}	

		$total = $this->product_counter($all_products);

		$filtered_list = $this->product_index($all_products,$total,$start);
		//set indexes
		//put in array

		$data = array(
			'products' => $filtered_list,
			'start' =>$start,
			'total' => $total
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

	public function product_counter($products)
	{
		$ticker = 0;
		foreach($products as $item)
		{
			$ticker++;
		}

		return $ticker;
	}

	public function product_index($list,$total,$start)
	{
		if($total < 13)
			{
				return $list;
			}

			if($start + 12 > $total || $total < $start)
			{
				$start = $total - 12;
			}

		$arr = array();

		for($i=$start;$i<$start + 12;$i++)
		{
			$arr[] = $list[$i];
		}

		return $arr;
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