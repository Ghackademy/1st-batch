<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {

	public function __construct(){
            //call the constructor
            parent::__construct();
            $this->load->model('user_model');//loading user_model
            
              
            
        }
	public function index()
	{
		//$this->load->view('signUpForm');
            echo "hio";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */