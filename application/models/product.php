<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

   function get_all_filtered($search,$sort)
     {
     	$query = "SELECT * FROM products WHERE deleted_at IS NULL AND name like?".$sort;
     	$values = array($search);
         return $this->db->query($query,$values)->result_array();
     }

   function get_all()
     {
     	$query = "SELECT * FROM products WHERE deleted_at IS NULL LIMIT 10";
         return $this->db->query($query)->result_array();

     }     

   function get_single($id)
     {
         return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();
     }

    function get_popular()
     {
     	$query= 'SELECT products.id as id, products.name as name, products.price as price, SUM(order_items.quantity) as quantity,products.productscol as productscol
						FROM products, order_items,orders
						WHERE orders.deleted_at IS NULL
						and orders.submitted_at IS NOT NULL
						and orders.id = order_items.order_id
						AND order_items.deleted_at IS NULL
						and order_items.product_id = products.id
						GROUP BY products.id
						ORDER BY quantity desc';
		return $this->db->query($query)->result_array();						

     }
}

/* End of file user.php */
/* Location: ./application/models/user.php */