<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
		$this->load->model('user');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$user = $this->user->find_user($email);

		if($user)
		{
		  $enc_password = crypt($password,$user->password); //If you 'crypt' a non-encrypted password with an encrypted password, the successful result will be the encrypted password

            if($enc_password == $user->password) //do the encrypted passwords match? if yes, then log in
            {
                $user = array(
                   'user_id' => $user->id,
                   'user_email' => $user->email,
                   'user_name' => $user->first_name.' '.$user->last_name,
                   'first_name' => $user->first_name,
                   'last_name' => $user->last_name,
                   'is_logged_in' => true
                );
                $this->session->set_userdata($user);
                redirect('');
            }
            else
            {
                $this->session->set_flashdata("login_error", "Invalid email or password!");
                redirect('');
            }
        }

        else
        {
                $this->session->set_flashdata("login_error", "Invalid email or password!");
                redirect('');
        }
    }

    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[2]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[1]');
        $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|');

        $this->form_validation->set_message('is_unique', '%s is already taken');  //custom error messages
        $this->form_validation->set_message('required', '%s is required');  //custom error messages

        if($this->form_validation->run() === FALSE) //displays error message if form validation rules were violated
        {
            $this->view_data["errors"] = validation_errors();
            $error_log = validation_errors();
            $this->session->set_flashdata("registration_error", $error_log);
            redirect(base_url());

        } 

        else
        {
            $form=$this->input->post(null,true); //pull in post data

            $salt = bin2hex(openssl_random_pseudo_bytes(22));

            $password = crypt($form['password'],$salt);


            $this->user->add_user($form,$password);
            redirect(base_url());
        }
    }

    public function logout()
    {
    	$this->session->sess_destroy();
    	redirect('');

    }


}

/* End of file users.php */
/* Location: .//Users/brianwallace/Desktop/users.php */