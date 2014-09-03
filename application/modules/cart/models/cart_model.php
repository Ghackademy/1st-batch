<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model {
    const Table = 'tb_cart';
            function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
   public function insert($data){
                $this->db->insert(Cart_model::Table,$data);
		
         }
    public function delete($id){
        $this->db->delete(Cart_model::Table);
        header("location:{$_SERVER['HTTP_REFERER']}");
        
    }

}
?>