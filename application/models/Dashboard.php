<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Model {

    function get_all()
    {
        return $this->db->query("SELECT * FROM orders")->result_array();
    }
    function get_single($id)
    {
        return $this->db->query("SELECT * FROM orders WHERE id = ?", array($id))->row_array();
    }
    function get_total()
    {
	    $query = "SELECT order_items.order_id, SUM(order_items.quantity) as totalQty, products.price * SUM(order_items.quantity) as totalAmt
				FROM order_items,orders,products 
				WHERE order_items.product_id = products.id
				AND order_items.order_id = orders.id
				AND products.deleted_at IS NULL
				GROUP BY order_items.order_id";
		return $this->db->query($query)->result_array();
	}
	function show_single_order()
	{
		$query = "SELECT order_items.order_id, order_items.quantity, products.id, products.price, products.name, products.price * SUM(order_items.quantity) as totalAmt
				FROM order_items,orders,products 
				WHERE order_items.product_id = products.id
				AND order_items.order_id = orders.id
				AND products.deleted_at IS NULL
				GROUP BY order_items.order_id, products.name";
		return $this->db->query($query)->result_array();
	}
	function get_total_quantity()
	{
		$query = "SELECT products.id, products.name, products.inv_count, SUM(order_items.quantity) as quantity
					FROM products, orders, order_items
					WHERE products.id = order_items.product_id
					AND order_items.order_id = orders.id
					AND products.deleted_at IS NULL
					GROUP BY products.id";

		return $this->db->query($query)->result_array();
	}

}
