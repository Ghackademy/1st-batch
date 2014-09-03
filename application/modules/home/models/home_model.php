<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends CI_Model {

    Public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
     public function searchproduct($keyword)
     {
         $this->db->like('product_name',$keyword);
         $query = $this->db->get('tb_product');
             $row = $query->result_array();
            return $row;
    }

}

