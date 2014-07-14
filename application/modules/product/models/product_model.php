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
<<<<<<< HEAD
         public function getSingleProduct($id){
             if($_POST){
                 $res = $this->db->get_where(product::table,array('product_id'=>$id));
                 $value = $res->row($id);
                 return $res;
             }
         }
         public function updateproduct($id,$tablename,$image){
              $data=array(
             'product_name' => $this->input->post('pname'),
             'product_description' => $this->input->post('pdescription'),
             'product_image' => $this->input->post('pimage'),
             'shipping_detail' => $this->input->post('pdetails'),
             'price' => $this->input->post('pprice'),
             'rating' => $this->input->post('prating'),
             'featured' => $this->input->post('feature'),
             'publish' => $this->input->post('publish'),
              'stock_info' => $this->input->post('pquantity'),    
             'cat_id' => $this->input->post('email'),
            );
           	if ($_FILES){
		
		$config['upload_path'] = 'uploads/product/original';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '200';
		$config['remove_spaces'] = true;
		$config['overwrite'] = false;
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		$this->load->library('upload', $config);	
	
	    if (strlen($_FILES['userfile']['name'])){
			if(!$this->upload->do_upload('image')){
				$this->upload->display_errors();
				exit();
			}
			$image = $this->upload->data();
		
			if ($image['file_name']){
				$data['image'] = "uploads/product/original".$image['file_name'];
		
			}
		}
		
		
	}
 	$this->db->where('product_id', $_POST['id']);
	$this->db->update('products', $data);	
 
	
              }
=======
         //return no of product
         
         public function addProduct($data){
                $this->db->insert(product_model::Table,$data);
		
         }
         // insert value in database
>>>>>>> origin
         
}
?>