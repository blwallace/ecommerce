<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

   function get_all()
     {
         return $this->db->query("SELECT * FROM products")->result_array();
     }
     function get_single($id)
     {
         return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();
     }
     
}

/* End of file user.php */
/* Location: ./application/models/user.php */