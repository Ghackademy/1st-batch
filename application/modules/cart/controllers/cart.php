<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('product/product_model');
         $this->load->model('user/ion_auth_model');
          $this->load->model('cart/cart_model');
        $this->load->library('session');
         $this->load->library('ion_auth');
        
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
    public function confirm(){
    if (!$this->ion_auth->logged_in()){
                redirect('home/index');
    }
    else{
        foreach($this->cart->contents() as $items):
        $data=array(
            'product_id'=>$items['id'],
         'product_name'=>$items['name'],
         'product_quantity'=>$items['qty'],
         'product_price'=>$items['price'],
            'product_subtotal'=>$items['subtotal'],
             'user_id'=>$this->session->userdata['user_id']   
       );
        $this->cart_model->insert($data);
   endforeach;
        
    
    redirect('cart/destroy');
    }
    }
    
    public function checkout(){
        $this->load->view(paymentDetailsForm);
    }

    public function destroy(){
//        $id = $this->cart->contents('id');
        $this->cart->destroy();
        redirect('cart/addToCart');
    }

}

?>