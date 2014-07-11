<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {
     const table = "tbl_user";
    const table_group = "tb_groups";
    const table_usergroup = "tb_usergroup";

	public function __construct(){
            //call the constructor
            parent::__construct();
            $this->load->model('user_model');//loading user_model
           
            $this->load->library('image_lib');//to use image_moo class in ci loading this library
              
            
        }
	public function index()
                {   
            //to load intial page
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
        
        
        public function signup()
                {
                 // to signup by new user 
            if($_POST){
                 $this->load->library('form_validation');//to use form_validation library in ci
                $this->form_validation->set_rules('fname', 'Name', 'required');
               $this->form_validation->set_rules('lname', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
            
           
              $this->form_validation->set_rules('country', 'Country', 'required');
                $this->form_validation->set_rules('city', 'City', 'required');
                  $this->form_validation->set_rules('zcode', 'Zipcode', 'required');
                    $this->form_validation->set_rules('postcode', 'Postbox', 'required');
                     $this->form_validation->set_rules('email', 'Email', 'required'); 
                      $this->form_validation->set_rules('phone', 'Phone', 'required');
                       $this->form_validation->set_rules('usertype', 'User Type', 'required');
                       
                        $this->form_validation->set_error_delimiters('<font color="red">','</font>');
            if ($this->form_validation->run() == FALSE) {
               
                $this->load->view('signUpForm');
                return false;
            } else{
                
              $image = $this->do_upload();
                
               $data= array(
                    'fname' => $this->input->post('fname'),
                   'lname' => $this->input->post('lname'),
                   'email' => $this->input->post('email'),
                   'country' => $this->input->post('country'),
                   'city' => $this->input->post('city'),
                   'zip_code' => $this->input->post('zcode'),
                   'post_box' => $this->input->post('postcode'),
                    'user_type' => $this->input->post('usertype'),
                   'phone' => $this->input->post('phone'),
                    'image' => $image,
                   'password' => $this->input->post('password'),
                   'gender' => $this->input->post('gender'), 
                    
                   
                   
               );
                $this->user_model->insertUser(user::table,$data);
                echo'sucessful';
                   
               }
                
            }
            else{
                $this->load->view('signUpForm');
            }
                }
                
                
                
                
}//end of class user

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
