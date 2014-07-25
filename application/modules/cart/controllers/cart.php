<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cart extends MX_Controller {
   
	public function __construct(){
            parent::__construct();
            $this->load->model('product/product_model');
            $this->load->library('cart');
            $this->load->library('session');
            
        }
        public function index(){
            $config['base_url'] = base_url().'/cart/index';
            $config['total_rows'] = $this->product_model->countProduct();
            $config['per_page'] = 3;
            $config['uri_segment'] = 3;            
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
             $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
           //$data['allcategory'] = $this->category_model->display('tb_category');            
            $data['allProductList'] = $this->product_model->getProduct($config["per_page"],$page);
            $data['links'] = $this->pagination->create_links();
               //print_r($data);die();
         $this->load->view('shopping',$data);
        }
        
        public function add(){
            
            $product = $this->product_model->getSingleProduct($this->input->post('id'));
            $data = array(
                'id'=>$this->input->post('id'),
                'qty'=>1,
                'price'=>$product->price,
                'name'=>$product->product_name
            );
            $this->cart->insert($data);
            $this->load->view('cartDisplay');
            }
            
            public function remove($rowid){
                $this->cart->update(array(
                    'rowid' => $rowid,
                    'qty' => 0
                ));
               // print_r($this->cart->contents());
               $this->load->view('cartDisplay'); 
            }
}