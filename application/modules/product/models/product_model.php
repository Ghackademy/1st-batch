<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
const Table = 'tbl_product';
class Product_model extends CI_Model {
    const table = "tb_product";

    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();
               
         }
         
       /*
        * @param varchar data
        */
         public function addProduct($data){
                $this->db->insert(Product_model::table,$data);
		
         }
         /*
          * @param integer limit
          * @param integer start
          * @param varchar condition
          * return data 
          */
         public function getProduct($limit,$start,$where=""){
            if($where!="")
			$this->db->where($where);
		
		                             
             $this->db->limit($limit, $start);
            $query = $this->db->get(Product_model::table);
                if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                        $data[] = $row;
                    }
                        return $data;
                }
                return false;
         }
         /*
          * return number of rows
          */
         public function countProduct() {
                return $this->db->count_all(Product_model::table);
         }
         /*
          * return res
          * @param integer pid
          */
          public function getProductWithCategory($pid){
            
            //$query = $this->db->get_where('tbl_product', array('product_id' =>$id));
            $query = $this->db->query("select tb_product.*,tb_category.cat_title from tb_product inner join tb_category on tb_category.cat_id=tb_product.cat_id where tb_product.product_id='$pid'");
            $res = $query->row_array($pid);
            return $res;
        }
         
         /*
          * @param integer id
          * @param varchar data
          * return data
          */
         public function updateProduct($id,$image){
            $pname = $this->input->post('pname');
            $data = array(
                'Product_name'=>$this->input->post('pname'),
                'product_description'=>$this->input->post('pdescription'),
                'price'=>$this->input->post('pprice'),
                'featured'=>$this->input->post('feature'),
                'publish'=>$this->input->post('publish'),
                'stock_info'=>$this->input->post('pquantity'),
                'rating'=>$this->input->post('prating'),
                'shipping_detail'=>$this->input->post('pdetails'),
                'product_image'=>$image,
                 'cat_id'=>$this->input->post('category'),
                 'user_id'=>$this->session->userdata('userid'),
                  'slug'=>url_title($pname,'dash',true)

            );
            $this->db->where('product_id', $id);
            $this->db->update(Product_model::table,$data);
            
         }
         /*
          * @param integer id
          */
          public function deleteProduct($id){
        $this->db->delete(Product_model::table, array('product_id' => $id)); 
    }
    
    public function getSingleProduct($id){
       
                
             
                 $res = $this->db->get_where(Product_model::table,array('product_id'=>$id));
                 $value = $res->row($id);
                 return $value;
         
    }
}