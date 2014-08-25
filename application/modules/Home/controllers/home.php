<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MX_Controller {

    Public function __construct() {
        parent::__construct();
        $this->load->model('category/category_model'); // load category model
        $this->load->model('product/product_model');
        $this->load->model('rating/rating_model');
        $this->load->library('session');
    }

    /*
     * @return index view
     */

    public function index() {
        $data['allcategory'] = $this->category_model->getAllCategory('tb_category');
        $data['allProductList'] = $this->product_model->get();

        $this->load->view('index', $data);
    }

    /*
     * @param int
     * @returns singleProduct
     * @returns singleproduct view
     */

    public function singleProduct($id) {
        $data['singleProduct'] = $this->product_model->getSingleProduct($id);
        // $data['allrating'] = $this->rating_model->insert($id);

        $this->load->view('singleproduct', $data);
    }
//
//    public function rating() {
//        echo $this->input->post('rating');
//        echo $this->input->post('product_id');
//        die();
//        $data['getpost'] = $this->category_model->getAllPostOfOneCategory($slug);
//        $data['allcategory'] = $this->category_model->getAllCategory();
//        // echo $slug;die();
//
//        $row = array(
//            'product_slug' => $slug,
//            'grade' => $this->input->post('star'),
//        );
//
//        // print_r($row);die();
//        $this->rating_model->insert($row);
//
//        $this->load->view('home/productlist', $data);
//    }

      public function allpost($id){
        $data['getpost']=$this->category_model->getAllPostOfOneCategory($id);
		  $data['allcategory']= $this->category_model->getAllCategory();
       $this->load->view('home/productlist',$data);
    }
    
    public function user_status($username, $password) {
        $data['username'] = $username;
        $data['password'] = $password;
        $data['user_id'] = 20;
        if ($username == "utsav" && $password == "root") {
            $data['msg'] = "LOGIN successfull";
        } else {
            $data['msg'] = "Invalid username or password";
        }
        echo json_encode($data);
    }

}

