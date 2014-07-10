<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
         
         //function to display all categories
         function getallcategory($tbname){
             $query= $this->db->get($tbname);
             $res = $query->result_array();
             
             return $res;
         }
         
         
         public function insertcategory($tablename, $data){
             // function to insert category in table
             $this->db->insert($tablename, $data);
             return $this->db->insert_id();
         }
         
}
