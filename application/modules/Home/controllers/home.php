<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller { 
    Public function __construct(){
        parent::__construct();
        $this->load->model('category/category_model'); // load category model
           $this->load->model('product/product_model');
        $this->load->library('session');
     
        
              
    }
    
     /*
      * returns template
      */
	public function index(){
            $data['allcategory']=$this->category_model->getAllCategory('tb_category');
             $data['allProductList'] = $this->product_model->get();

	  	$this->load->view('index',$data);
	}
            public function singleProduct($id){
            $data['singleProduct']=$this->product_model->getSingleProduct($id);
           //print_r($data);die();
            $this->load->view('singleProduct',$data);
        }
}
    
    