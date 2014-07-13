<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
    const Table = 'tb_product';
            function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
         public function getProduct($limit,$start,$where=""){
            if($where!="")
			$this->db->where($where);
		
		                             
             $this->db->limit($limit, $start);
            $query = $this->db->get('tb_product');
                if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                        $data[] = $row;
                    }
                        return $data;
                }
                return false;
         }
         //return product value according to input
         
         public function countProduct() {
                return $this->db->count_all("tb_product");
         }
         //return no of product
         
         public function addProduct($data){
                $this->db->insert(product_model::Table,$data);
		
         }
         // insert value in database
         
}
?>