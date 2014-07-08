<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
//defining constant for table tbl_user
    const table = "tbl_user";
    
    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
         
         function addToDb($data){
             //insert $data into table tbl_user
             $this->db->insert(user_model::table,$data);
         }
 }

