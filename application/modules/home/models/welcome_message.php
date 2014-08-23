
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
    const table='tb_category';
    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
            public function getAllStars(){
		 
             $query= $this->db->get(category_model::table);
             $res = $query->result_array();
             
             return $res;
		
         }
}