<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('product/product_model');
        $this->load->library('session');
        
    }

    public function add($id) {
        $data = $this->product_model->getSingleProduct($id);
        $data = array(
            'id' => $data['product_id'],
            'name' => $data['product_name'],
            'qty' => 1,
            'price' => $data['price']
        );
        $this->cart->insert($data);
//            echo "add($id) called";
        redirect('cart/addToCart');
       
    }
    public function addToCart(){
        $data['cartdata']=  $this->cart->contents();
       $this->load->view('home/mycart',$data);
    }

    public function total(){
     echo $this->cart->total();
      
       
    }
    public function checkout(){
    echo"You must login";
      
    }

    public function destroy(){
        $this->cart->destroy();
    }

}

?>