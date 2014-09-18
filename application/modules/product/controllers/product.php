<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends MX_Controller {

    const table = 'tb_product';

    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->library('session');
        $this->load->model('category/category_model');
        $this->load->model('user/ion_auth_model');
		$this->load->library('ion_auth') ;
           $this->lang->load('auth');

    }

    /*
     * upload image
     */

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
            $size_resized_width = 270;
            $size_resized_height = 120;
            $size_thumb_width = 870;
            $size_thumb_height = 400;
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


    public function lists() {
        $config['base_url'] = base_url() . '/product/lists/';
        $config['total_rows'] = $this->product_model->countProduct();
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['allProductList'] = $this->product_model->getProduct($config["per_page"], $page);
        $data['links'] = $this->pagination->create_links();
        $id = $this->session->userdata('user_id');
        $row['group'] = $this->ion_auth->user($id)->row();
//             print_r($row);die();
        if ($row['group']->group_id == 1) { 
          $this->load->view('user/adminsidebar');
            $this->load->view('allproductlist', $data);
         
        } else {
            $this->load->view('user/userdashboard_header');
            $this->load->view('user/usersidebar');
            $this->load->view('allproduct', $data);
            $this->load->view('base/footer');
        }
    }

    /*
     * add product
     * return add view
     */

    public function add() {
        
        $res['allcategory'] = $this->category_model->getallCategory('tb_category');
        if ($_POST) {
            $p_name = $this->input->post('pname');

            $image = $this->do_upload();

            $data = array(
                'Product_name' => $this->input->post('pname'),
                'product_description' => $this->input->post('pdescription'),
                'price' => $this->input->post('pprice'),
                'featured' => $this->input->post('feature'),
                'publish' => $this->input->post('publish'),
                'stock_info' => $this->input->post('pquantity'),
                'product_slug' => url_title($p_name, 'dash', true),
                'shipping_detail' => $this->input->post('sdetails'),
                'product_image' => $image,
                'cat_id' => $this->input->post('category'),
                'user_id' => $this->session->userdata('user_id')
            );
            $this->product_model->addProduct($data);
            redirect('product/userproduct');
        }
        else {
                   $id = $this->session->userdata('user_id');
             $row['group'] = $this->ion_auth->user($id)->row();
//             print_r($row);die();
       if($row['group']->group_id == 1){
           $this->load->view('user/adminsidebar'); 
        $this->load->view('addproduct', $res);
        }else{
             $this->load->view('user/userdashboard_header');
               $this->load->view('user/vendorsidebar');
          $this->load->view('user/vendor_addproduct', $res); 
             $this->load->view('base/footer');
        }
    }   
            
                  
            }
    
          
   

    /*
     * user product
     * return user product view
     */

    public function userproduct() {
        $config['base_url'] = base_url() . '/product/myproduct/';
        $config['total_rows'] = $this->product_model->countProduct();
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $uid = $this->session->userdata('user_id');
        $where = array('user_id' => $uid);

        // echo"hi";die();
        $data['myproductList'] = $this->product_model->getProduct($config["per_page"], $page, $where);

        $data['links'] = $this->pagination->create_links();
         $this->load->view('user/userdashboard_header');
               $this->load->view('user/vendorsidebar');
        $this->load->view('myproduct', $data);
         $this->load->view('base/footer');
    }

    /*
     * edit product
     * @PARAM INT id
     * @return edit view
     */

    public function edit($id) {
        $data['allcategory'] = $this->category_model->getallCategory('tb_category');
        if ($_POST) {
            if (!empty($_FILES['userfile']['name'])) {
                $image = $this->do_upload();
                $this->product_model->updateproduct($id, product::table, $image);

                redirect('product/lists');
            } else {
                $pimage = $this->product_model->getSingleProduct($id);
                $image = $pimage->product_image;
                $this->product_model->updateproduct($id, product::table, $image);
                redirect('product/lists');
            }
        } else {
            $data['product'] = $this->product_model->getSingleProduct($id);


            $this->load->view('editproduct', $data);
        }
    }
/*
 * @delete product
 * @param int id
 */
    public function delete($id) {
        $this->product_model->delete_row($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

}

?>
