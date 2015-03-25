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
     function add_product($product) 
     {
        $query = "INSERT INTO products (name, description, productscol, created_at, updated_at) VALUES (?,?,?,NOW(),NOW())";
        $values = array($product['name'], $product['description'], $product['productscol']); 
        $this->db->query($query, $values);
        return $this->db->insert_id();   
     }
     function update($id,$product)
     {
        $query = "UPDATE products SET name=?,description=?,productscol=?,updated_at=NOW() WHERE id=?";
        $values = array(
            $product['name'],
            $product['description'],
            $product['productscol'],
            $id
        );
        return $this->db->query($query,$values);
     }
     function delete($id) 
     {
        $query = "UPDATE products SET updated_at=NOW(), deleted_at=NOW() WHERE id=$id";
        return $this->db->query($query);
     }
     // public function get_category($id)
     // {
     //    $query = "SELECT * FROM products WHERE products.productscol = $id";
     //    return $this->db->query($query);
     // }
}

/* End of file user.php */
/* Location: ./application/models/user.php */