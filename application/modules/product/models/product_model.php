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
                return $this->db->count_all('tb_product');
         }
         
         public function getSingleProduct($id){
             if($_POST){
                 $res = $this->db->get_where('tb_product',array('product_id'=>$id));
                 $value = $res->row($id);
                 return $value;
             }
         }
         public function updateproduct($id,$tablename,$image){
             
              $data=array(
             'product_name' => $this->input->post('pname'),
             'product_description' => $this->input->post('pdescription'),
             'product_image' => $image,
             'shipping_detail' => $this->input->post('pdetails'),
             'price' => $this->input->post('pprice'),
             'rating' => $this->input->post('prating'),
             'featured' => $this->input->post('feature'),
             'publish' => $this->input->post('publish'),
              'stock_info' => $this->input->post('pquantity'),    
             'cat_id' => $this->input->post('cat_title'),
            );
 	$this->db->where('product_id', $id);
	$this->db->update($tablename, $data);	
 
	
              }

         //return no of product
         
         public function addProduct($data){
                $this->db->insert(product_model::Table,$data);
		
         }
         // insert value in database
         
}
?>