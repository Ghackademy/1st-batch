<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rating_model extends CI_Model {
    const Table = 'tb_rating';
            function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }

        public function insert($data){
            $this->db->insert(Rating_model::Table,$data);
            
        }
 

}
?>