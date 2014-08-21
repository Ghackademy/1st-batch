<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller { 
    Public function __construct(){
        parent::__construct();
        $this->load->model('category/category_model'); // load category model
           $this->load->model('product/product_model');
             $this->load->model('rating/rating_model');
        $this->load->library('session');
     
     
        
              
    }
    
     /*
      * @return index view
      */
	public function index(){
            $data['allcategory']=$this->category_model->getAllCategory('tb_category');
             $data['allProductList'] = $this->product_model->get();
                 
	  	$this->load->view('index',$data);
        }
        /*
         * @param int
         * @returns singleProduct
         * @returns singleproduct view
         */
            public function singleProduct($id){
            $data['singleProduct']=$this->product_model->getSingleProduct($id);
           // $data['allrating'] = $this->rating_model->insert($id);
           
            $this->load->view('singleproduct',$data);
        }
      public function rating($slug){
          $data = array(
              'product_slug'=>$slug,
              'grade'=>$this->input->post('rating'),
          );
            $this->rating_model->insert($data);
            print_r($data);die();
            $this->load->view('index',$data);
      }
 
       
}
    
    