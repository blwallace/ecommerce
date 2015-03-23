<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function find_user($email)
	{
		$query = 'SELECT * FROM users WHERE email like ?';
		$values = $email;
		return $this->db->query($query,$values)->row();
	}

	public function add_user($form,$password)
	{
		$query= 'INSERT INTO users (first_name,last_name,email,password) VALUES (?,?,?,?)';
		$values= array($form['first_name'],$form['last_name'],$form['email'],$password);
		return $this->db->query($query,$values);
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */