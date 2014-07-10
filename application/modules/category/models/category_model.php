<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
         
         //function to display all categories
         function getAllCategory($tbname){
             $query= $this->db->get($tbname);
             $res = $query->result_array();
             
             return $res;
         }
         
       
         
         public function insertCategory($tablename, $data){
             // function to insert category in table
             $this->db->insert($tablename, $data);
             return $this->db->insert_id();
         }
        
         public function getSingleCategory($id){
              if($_POST){
             $res=$this->db->get_where(category::table,array('cat_id'=>$id));
             return $res->row($id);
               $this->db->update(category::table,$data);
             
              }
         }
}
