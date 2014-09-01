<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class login_control extends CI_Controller {
    
   public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }
 public function login(){
            $this->load->view('loginform');
        }
        
        public function add(){
            
            $this->login_model->insert();
           
        }
}
?>
