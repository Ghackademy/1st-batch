<<<<<<< HEAD
=======
<<<<<<< HEAD
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
         public function getProduct($limit="",$start="",$where=""){
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
                 'slug'=>url_title($this->input->post('pname'),'dash',true)

            );
            $this->db->where('slug', $id);
            $this->db->update(Product_model::table,$data);
           // echo $this->db->last_query();
            
         }
         /*
          * @param integer id
          */
          public function deleteProduct($id){
        $this->db->delete(Product_model::table, array('slug' => $id)); 
    }
    
    public function getSingleProduct($id){
            
            $query = $this->db->get_where(Product_model::table, array('slug' =>$id));
            $res = $query->row_array($id);
            //echo $this->db->last_query();
            return $res;
        }
}
=======
>>>>>>> origin/forDesigners
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
                return $this->db->count_all(Product_model::Table);
         }
         //return single id of product
         public function getSingleProduct($id){
             if($_POST){
                 $res = $this->db->get_where(Product_model::Table,array('product_id'=>$id));
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
    public function delete_row($id) {
        $this->db->where('product_id', $id);
        $this->db->delete(product_model::Table);
    }

}
<<<<<<< HEAD
=======
>>>>>>> origin/forDesigners
>>>>>>> origin/forDesigners
?>