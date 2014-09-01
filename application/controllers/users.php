<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        public function signup(){
            $this->load->view('signup_form');
        }
        
        public function do_signup(){
            $this->users_model->insert();
            echo "inserted successfully";
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */