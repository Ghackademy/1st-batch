
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {

    //defining constants
    const table = "tbl_user";
    const table_group = "tb_groups";
    const table_usergroup = "tb_usergroup";
    
	public function __construct(){
            //call the constructor
            parent::__construct();
            $this->load->model('user_model');//loading user_model
           $this->load->library('session');//loading session
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
    
        
   function signup(){
       //returns the group_type from table
        $grp['groups'] = $this->user_model->getFromDb(user::table_group,'','result');
       if($_POST){
            //checking the form validation    
            $this->load->library('form_validation');//loading form validation library
            $this->form_validation->set_rules('fname','firstname','required');
            $this->form_validation->set_rules('lname','lastname','required');
            $this->form_validation->set_rules('password','password','required|min_length[5]|matches[passconf]');
            $this->form_validation->set_rules('passconf','password confirmation','required|min_length[5]');
            $this->form_validation->set_rules('phone','phone','required|numeric');
            $this->form_validation->set_rules('zcode','zip code','required|numeric');
            $this->form_validation->set_rules('email','email','required|is_unique[tbl_user.email]');
            $this->form_validation->set_error_delimiters('<font color="red">','</font>');
            if($this->form_validation->run()== FALSE)
            {
               
                $this->load->view('signUpForm',$grp); 
                return false;
            }
                //call doupload function to upload image
                $image=$this->do_upload(); 
              //creating an array of data
                $data = array(
                'fname'=>$this->input->post('fname'),
                'lname'=>$this->input->post('lname'),
                'country'=>$this->input->post('country'),
                'city'=>$this->input->post('city'),
                'zip_code'=>$this->input->post('zcode'),
                'post_box'=>$this->input->post('postbox'),
                'email'=>$this->input->post('email'),
                'phone'=>$this->input->post('phone'),
                'gender'=>$this->input->post('gender'),
                'image'=>$image,
                'password'=>$this->input->post('password'),
                'confirm_password'=>$this->input->post('passconf'),
                'group_id'=>$this->input->post('usertype')
            );
                //inserts the above dta into table
                $this->user_model->insertUser(user::table,$data);
                $data1 = array(
                    'user_id'=>$this->db->insert_id(),
                    'group_id'=>$this->input->post('usertype')
                );
                $this->user_model->insertUser(user::table_usergroup,$data1);
                
               redirect('user/login');
            }
            else {
                $this->load->view('signUpForm',$grp);
            }
   }     
        
   function login(){
            if($_POST){
                $result = $this->user_model->validateLogin();
                if(! $result){
                   $msg = '<font color="red">Username or password invalid </font>';
                   $this->session->set_flashdata('msg',$msg);
                    redirect('user/login');
                }
                else{
                    if($result->group_id == 2){
                        echo "user";
                        //redirect('user/dashboard');
                    }
                    else if($result->group_id == 3){
                        echo "vendor";
                        //redirect('user/dashboard');
                    }
                    else{
                    echo "admin";
                    //redirect('user/dashboard');
                    }
                }
            }
            else{
                $this->load->view('login');
            }
   }
                
                
}//end of class user

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
