<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Slider extends MX_Controller {
   const Table = 'tb_slider';

    public function __construct() {
        parent::__construct();
        $this->load->model('slider_model');
       $this->load->library('session');
        
   }
      
        
        public function addMedia(){
            $data['frontend_image'] = $this->slider_model->getimage();
        if ($_POST) {
            $this->load->module('product');
            $image = $this->product->do_upload();

            $data = array('frontend_image' => $image
            );
            $this->slider_model->addimage($data);

            redirect('home/index', $data);
        } else {
            $this->load->view('user/adminsidebar');
            $this->load->view('user/media', $data);
        }
    }

}
?>