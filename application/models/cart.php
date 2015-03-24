<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Model {

	public function get_active_cart()  //Gets contents of the active cart
	{
		$query = 'SELECT products.id,products.name, products.price, SUM(order_items.quantity) AS quantity,products.description
					FROM order_items,orders,products 
					WHERE order_items.product_id = products.id
					AND order_items.order_id = orders.id
					AND orders.submitted_at IS NULL
					AND orders.deleted_at IS NULL
					AND order_items.deleted_at IS NULL
					GROUP BY products.id';
		return $this->db->query($query)->result_array();
	}

	public function get_total() //Gets the total amount for the active cart
	{
		$query = 'SELECT order_items.quantity, products.price
					FROM order_items,orders,products 
					WHERE order_items.product_id = products.id
					AND order_items.order_id = orders.id
					AND orders.submitted_at IS NULL
					AND orders.deleted_at IS NULL
					AND order_items.deleted_at IS NULL';
		return $this->db->query($query)->result_array();
	}	

	public function get_active_cart_item($id) //Gets the item and quantity in the active cart based on the product id
	{
		$query = 'SELECT products.id,products.name, products.price, SUM(order_items.quantity) AS quantity,products.description,order_items.order_id
					FROM order_items,orders,products 
					WHERE order_items.product_id = products.id
					AND order_items.order_id = orders.id
					AND orders.submitted_at IS NULL
					AND orders.deleted_at IS NULL
					and products.id = ?
					AND order_items.deleted_at IS NULL
					GROUP BY products.id';
		$value = $id;
		return $this->db->query($query,$id)->row();		
	}

	public function remove_items($id)  //Removes an item from the cart by deleting
	{
		$query = 'UPDATE order_items SET deleted_at=Now() WHERE product_id =?';
		$value=$id;
		return $this->db->query($query,$value);
	}

	public function add_cart_item($prod_id,$order_id,$quantity)  //Adds an item into the cart
	{
		$query = 'INSERT INTO order_items (product_id,order_id,quantity,created_at) 
					VALUES (?,?,?,Now())';
		$values=array($prod_id,$order_id,$quantity);
		return $this->db->query($query,$values);
	}

	public function checkout_cart($form)  //
	{
		$query='UPDATE orders 
				SET shipping_first_name=?,shipping_last_name=?,shipping_address=?,shipping_address2=?,shipping_city=?,shipping_state=?,shipping_zip=?,billing_first_name=?,billing_last_name=?,billing_address=?,billing_address2=?,billing_city=?,billing_state=?,billing_zip=?,card_num=?,security_code=?,expiration_date=?,submitted_at=Now()
				WHERE submitted_at IS NULL';
		$values = array($form['shipping_first_name'],$form['shipping_last_name'],$form['shipping_address'],$form['shipping_address2'],$form['shipping_city'],$form['shipping_state'],$form['shipping_zip'],$form['billing_first_name'],$form['billing_last_name'],$form['billing_address'],$form['billing_address2'],$form['billing_city'],$form['billing_state'],$form['billing_zip'],$form['card'],$form['security'],$form['expiration']);
		$this->db->query($query,$values);
	}

	public function create_cart()
	{
		$query='INSERT INTO orders (created_at)
					VALUES (Now())';
		return $this->db->query($query);
	}

	public function get_all_products()
	{
		$query = 'SELECT * FROM products';
		return $this->db->query($query)->result_array();
	}

	public function get_active_cart_id()
	{
		$query='SELECT * FROM orders WHERE submitted_at IS NULL and deleted_at IS NULL';
		return $this->db->query($query)->row();
	}

}

/* End of file cart.php */
/* Location: ./application/cart.php */