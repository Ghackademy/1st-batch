<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
    const table = "tb_category"; 
    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
         
         //function to display all categories
         function getAllCategory(){
             $query= $this->db->get(category_model::table);
             $res = $query->result_array();
             
             return $res;
         }
         

         /*
          * 
          */
         public function insertCategory($data){
             $this->db->insert(category_model::table, $data);
             return $this->db->insert_id();
         }
         
}
