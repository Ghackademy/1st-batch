<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
       

        //$this->load->library('session');
    }
    
    function index(){
        $this->load->view('test_form');
    }
    
    function insert(){
        $user =  $this->input->post('username'); 
        $pass = $this->input->post('password');
       $res = "Insertion successfull";
       echo $res;
    }
}

?>