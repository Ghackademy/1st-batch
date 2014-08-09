<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {




	function __construct()
	{
            
		parent::__construct();
		$this->load->library('ion_auth');
                $this->load->model('category/category_model');
                   $this->load->model('product/product_model');
                   $this->load->model('user/user_model');
		$this->load->library('form_validation');
		$this->load->helper('url','form');

		
		$this->load->helper('language');
                
               
	}
	
	
	function index(){
            $data['allcategory']=$this->category_model->displayCategory('tb_category');
             $data['allProductList'] = $this->product_model->get();

	  	$this->load->view('index',$data);
	}

        public function dashboard(){
            $row['allcategory']=$this->category_model->displayCategory('tb_category');
            $row['allProductList'] = $this->product_model->get();
            $row['alluser'] = $this->load->user_model->getFromDb('users','','result');
//              $id = $this->session->userdata('user_id');
//             $row['group'] = $this->ion_auth->user($id)->row();
//              if($row['group']->group_id == 3){
                $this->load->view('admin_dashboard',$row);
                  
//            }
//            else{
//                $this->load->view('auth/user_dashboard',$row);
//            }
        }
        
        function product(){
            $config['base_url'] = base_url().'/home/product/';
            $config['total_rows'] = $this->product_model->countProduct();
            $config['per_page'] = 6;
            $config['uri_segment'] = 3;            
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
             $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
           $data['allcategory'] = $this->category_model->displayCategory('tb_category');            
            $data['allProductList'] = $this->product_model->getProduct($config["per_page"],$page);
            $data['links'] = $this->pagination->create_links();
           // print_r($data);die();
          $this->load->view('product_list',$data);
           
        }
       
        function lists($id){
            $data['allcategory']=$this->category_model->displayCategory('tb_category');
            $data['pdt']=$this->category_model->productAccCategory($id);
            $this->load->view('productList',$data);
        }
        function addproduct(){
            $this->load->module('product/product');
            $this->product->add();
        }
        
        function login(){
            $this->load->module('user/user');
            $this->user->login();
        }
        
}
