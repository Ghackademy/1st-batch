<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller { 
    Public function __construct(){
        parent::__construct();
        $this->load->model('category/category_model'); // load category model
           $this->load->model('product/product_model');
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
            $this->load->view('singleproduct',$data);
        }
}
    
    