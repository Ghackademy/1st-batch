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

    /*
     * @return add view
     * @PARAM int id
     * @add cart
     */

    public function add($id) {
        $data = $this->product_model->getSingleProduct($id);
        $data = array(
            'id' => $data['product_id'],
            'name' => $data['product_name'],
            'qty' => 1,
            'price' => $data['price']
        );
        $this->cart->insert($data);
        redirect('cart/addToCart');
    }

    /*
     * @return cart view
     */

    public function addToCart() {
        $data['cartdata'] = $this->cart->contents();
         $this->load->view('base/header');
        $this->load->view('home/mycart', $data);
         $this->load->view('base/footer');
    }

    /*
     * return total of all the cart
     */

    public function total() {
        echo $this->cart->total();
    }

    /*
     * @insert cart to database
     */

    public function confirm() {
        if (!$this->ion_auth->logged_in()) {
            redirect('home/index');
        } else {
            foreach ($this->cart->contents() as $items):
                $data = array(
                    'product_id' => $items['id'],
                    'product_name' => $items['name'],
                    'product_quantity' => $items['qty'],
                    'product_price' => $items['price'],
                    'product_subtotal' => $items['subtotal'],
                    'user_id' => $this->session->userdata['user_id']
                );
                $this->cart_model->insert($data);
            endforeach;


            redirect('cart/destroy');
        }
    }

    /*
     * @return payment view if logged in
     * @return login view if not logged in
     */

    public function checkout() {
        if (!$this->ion_auth->logged_in()) {
            redirect('home/index');
        } else {
            $this->load->view('paymentDetailsForm');
        }
    }

    /*
     * @destroy cart
     */

    public function destroy() {
//        $id = $this->cart->contents('id');
        $this->cart->destroy();
        redirect('cart/addToCart');
    }

}

?>