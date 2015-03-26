<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->output->enable_profiler();
			$this->load->model('cart');
		}

	public function add_item()  //This function is temporary to allow us to initially add items to our cart. We'll need to combine it with the functionality in the product dashboard
	{
		$form = $this->input->post(null,TRUE);
		if($form['quantity'] == '')
		{
			redirect('/carts');
		}

		else
		{
			$cart = $this->cart->get_active_cart_id();

			$input = $this->input->post('quantity');
			$order_id = $cart->id;

			if($input < 1)
			{
				$this->cart->remove_items($form['id']);
			}

			else {$this->cart->add_cart_item($form['id'],$order_id,$input);}
			redirect('/carts');
		}
	}

	public function index()  //Homepage.  Runs query to display all items on the homepage
	{
		$cash_bundled=$this->cart->get_total();

		$cash_counter = 0;

		foreach($cash_bundled as $cash_row)
		{
			$cash_counter += $cash_row['quantity']*$cash_row['price'];
		}

		$shopping_cart = array(
			'cart'=>$this->cart->get_active_cart(),
			'total'=>$cash_counter,
			'products'=>$this->cart->get_all_products());

		$this->load->view('Carts',$shopping_cart);
	}

	public function modify()  //Allows us to update the quantity of items in our cart
	{
		$form = $this->input->post(null,TRUE);

		if($form['quantity'] == '')
		{
			redirect('/carts');
		}

		else
		{
			$cart = $this->cart->get_active_cart_item($form['id']);
			$input = $this->input->post('quantity');
			$old_quantity = $cart->quantity;
			$new_quantity = $input - $old_quantity;
			$order_id = $cart->order_id;

			if($input < 1)
			{
				$this->cart->remove_items($form['id']);
			}

			else {$this->cart->add_cart_item($form['id'],$order_id,$new_quantity);}
			redirect('/carts');
		}
	}

	public function pay()  //Allows us to checkout. Sends form and submits cart
	{
		$form = $this->input->post(null,TRUE);
		$this->cart->checkout_cart($form);
		$this->new_cart();
		redirect('/carts');
	}

	public function new_cart()  //Creates a new cart once old cart is checked out
	{
		$this->cart->create_cart();
	}

	public function add_image()
	{
		
	}



}

/* End of file carts.php */
/* Location: ./application/controllers/carts.php */