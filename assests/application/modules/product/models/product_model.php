<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
    const Table = 'tb_product';
            function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }

         /*
          * 
          */
         public function getProduct($limit,$start,$where=""){
            if($where!="")
			$this->db->where($where);
		
		                             
             $this->db->limit($limit, $start);
             $this->db->select('*');
             $this->db->from(product_model::Table);
             $this->db->join('users', 'users.id = Table.product_id');
            $query = $this->db->get();
                if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                        $data[] = $row;
                    }
                        return $data;
                }
                return false;
         }
         /*
          * @return product value according to input
          */
         
  
         public function countProduct() {
                return $this->db->count_all(Product_model::Table);
         }
         //return single id of product
         public function getSingleProduct($id){
             
                 $res = $this->db->get_where(Product_model::Table,array('product_slug'=>$id));
                 $value = $res->row_array($id);
                 //echo $this->db->last_query();die();
                 return $value;
            
         }
         
         public function updateproduct($id,$tablename,$image){
              $pname = $this->input->post('pname');
              $data=array(
             'product_name' => $this->input->post('pname'),
             'product_description' => $this->input->post('pdescription'),
             'product_image' => $image,
             'shipping_detail' => $this->input->post('pdetails'),
             'price' => $this->input->post('pprice'),
             'featured' => $this->input->post('feature'),
             'publish' => $this->input->post('publish'),
             'slug'=>url_title($pname,'dash',true),
              'stock_info' => $this->input->post('pquantity'), 
             'cat_id' => $this->input->post('cat_title'),
            );
 	$this->db->where('product_id', $id);
	$this->db->update($tablename, $data);	
 
	
              }
                 public function getAllStars(){
		 $this->input->post('data');
             $query= $this->db->get('tb_product');
             $res = $query->result_array();
             
             return $res;
		
         }

         //return no of product
         
         public function addProduct($data){
                $this->db->insert(product_model::Table,$data);
		
         }
         // insert value in database
    public function delete_row($id) {
        $this->db->where('product_id', $id);
        $this->db->delete(product_model::Table);
    }
          public function get(){
            $query = $this->db->get(product_model::Table);
            $res = $query->result_array();
            return $res;
        }


}
?>