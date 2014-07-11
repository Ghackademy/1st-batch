<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Users extends MX_Controller {
     public function index() {
        //to load the index page
        $this->load->view('signUpForm');
   }
}

?>
