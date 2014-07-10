<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {

	public function __construct(){
            //call the constructor
            parent::__construct();
            $this->load->model('user_model');//loading user_model
           
            $this->load->library('image_lib');//to use image_moo class in ci loading this library
              
            
        }
	public function index()

	{
		$this->load->view('signUpForm');
          
          }
        
        function do_upload() {
            //to upload user images
        $config['upload_path'] = "./uploads/user/original/";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '4000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            /* PATH */
            $source = "./uploads/user/original/" . $data['file_name'];
            $destination_resized = "./uploads/user/resized/";
             $destination_thumb = "./uploads/user/thumb/";
            $size_resized_width = 200;
            $size_resized_height = 100;
            $size_thumb_width = 50;
            $size_thumb_height = 50;
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
        
        
        
                
                
                
}//end of class user

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
