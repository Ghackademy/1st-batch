<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
const Table = 'tbl_product';
class Product_model extends CI_Model {
    
            function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();
               
         }
         
       /*
        * @param varchar
        */
         public function addProduct($data){
                $this->db->insert('tbl_product',$data);
		
         }
         /*
          * @param integer
          * @param integer
          * @param condition ie varchar
          * return data
          */
         public function getProduct($limit,$start,$where=""){
            if($where!="")
			$this->db->where($where);
		
		                             
             $this->db->limit($limit, $start);
            $query = $this->db->get('tbl_product');
                if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                        $data[] = $row;
                    }
                        return $data;
                }
                return false;
         }
         /*
          * 
          */
         public function countProduct() {
                return $this->db->count_all("tbl_product");
         }
         /*
          * return res
          * @param integer
          */
          public function getProductWithCategory($pid){
            
            //$query = $this->db->get_where('tbl_product', array('product_id' =>$id));
            $query = $this->db->query("select tbl_product.*,tbl_category.* from tbl_product inner join tbl_category on tbl_category.cat_id=tbl_product.cat_id where tbl_product.product_id='$pid'");
            $res = $query->row_array($pid);
            return $res;
        }
         
         /*
          * @param integer
          * @param varchar
          * return data
          */
         public function updateProduct($id,$data){
            
            $this->db->where('product_id', $id);
            $this->db->update('tbl_product',$data);
            
         }
         /*
          * @param integer
          */
          public function deleteProduct($id){
        $this->db->delete('tbl_product', array('product_id' => $id)); 
    }
                 
}