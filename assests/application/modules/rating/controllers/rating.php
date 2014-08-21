<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rating extends MX_Controller {

    const table = 'tb_rating';

    public function __construct() {
        parent::__construct();
       // $this->load->model('rating_model');
        $this->load->library('session');
        $this->load->model('product/product_model');
    }
//    public function add(){
//        $this->load->model('rating_model');
//    }

}