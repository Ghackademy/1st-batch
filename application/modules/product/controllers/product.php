<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->library('session');
        $this->load->model('category/category_model');
     }
     
     public function index(){
         $this->load->view('productAction');
     }
     
             function do_upload() {
        $config['upload_path'] = "uploads/product/original/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            /* PATH */
            $source = "uploads/product/original/" . $data['file_name'];
            $destination_resized = "uploads/product/resized/";
             $destination_thumb = "uploads/product/thumb/";
            $size_resized_width = 200;
            $size_resized_height = 100;
            $size_thumb_width = 50;
            $size_thumb_height = 50;
            $this->load->library('image_moo');
            $this->image_moo
                    ->load($source)
                    /* RESIZING IMAGE TO BE MEDIUM SIZE */
                    ->resize_crop($size_resized_width, $size_resized_height)
                    ->save($destination_resized . $data['file_name'])
                    
                    ->resize_crop($size_thumb_width, $size_thumb_height)
                    ->save($destination_thumb . $data['file_name']);

            if ($this->image_moo->errors)
                print $this->image_moo->display_errors();
            else {
                return $data['file_name'];
            }
        } else {
            $error = strip_tags($this->upload->display_errors());
            echo "<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
        }
    }
    
    //return product image
    
    public function lists(){
             $config['base_url'] = base_url().'/product/lists/';
            $config['total_rows'] = $this->product_model->countProduct();
            $config['per_page'] = 3;
            $config['uri_segment'] = 3;            
            //$config['use_page_numbers'] = TRUE;
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
           //$data['allcategory'] = $this->category_model->getCategoriesFromDb('tbl_category');            
            $data['allProductList'] = $this->product_model->getProduct($config["per_page"],$page);
            $data['links'] = $this->pagination->create_links();
           // print_r($data);die();
         $this->load->view('viewProduct',$data);
        }
        //return all the value in database
        
        
public function add(){
    $res['allcategory'] = $this->category_model->getCategoriesAccToProduct('tb_category');
            //print_r($data);die();
             if($_POST){
                 $image=$this->do_upload(); 
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
                                         
                );
                $this->product_model->addProduct($data);
               redirect('product/index');
               
        }
        else{
                //$this->load->view('addProduct',$data);
                $this->load->view('addProduct',$res);
            }
        
        }
    //return new added value
	
}

?>
