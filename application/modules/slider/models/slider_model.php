<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slider_model extends CI_Model {
    const Table = 'tb_slider';
            function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
   public function addimage($data){
                $this->db->insert(Slider_model::Table,$data);
                return $this->db->insert_id();
		
         }
    public function getimage(){
            $query=$this->db->get(Slider_model::Table);
            $value= $query->result_array();
            return $value;
        }

}
?>