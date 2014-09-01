<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends MX_Controller{
    
   public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
          $this->load->library('pagination');
          $this->load->helper('url');
          $this->load->library('encrypt');
          $this->load->library('session');
          $this->load->helper('captcha');
    }
    public function index()
    {
        if($this->input->post('btnSubmit'))
        {         
            $res=$this->user_model->login();
            if($res=="user")
            {
                redirect(product);
               
            }
            else if($res=="vendor")
            {
              $id=$this->user_model->getid();
            }
            else if($res=="admin")
            {
               $id=$this->user_model->getid();
            }
            
            }
        
        else {
               
//            $vals = array(
// 
//    'img_path'	=> './uploads/captcha/',
//    'img_url'	=> base_url().'uploads/captcha/',
//    'font_path'	=> './assets/fonts/DANUBE__.TTF',
//    'img_width'	=> '150',
//    'img_height' => 30,
//    'expiration' => 7200
//                
//    );
//
//$cap = create_captcha($vals);
//$val['datas']= $cap['image'];
////print_r($val);  die();           
//            
//       $this->load->view("login_form",$val);
            $this->load->view("login_form");
    }
    }
    
    public function userlogin()
    {
            if($_POST)
            {
                $id=$this->user_model->getuserid();
                $this->user_model->addtocart($id);
                
            }
            else 
            {
              $this->load->view("loginform");
            }
    }
    public function user_signup()
    {
       
        if($this->input->post("submit"))
        {
            $this->user_model->insert();
            echo"data inserted";
        }
         $this->load->view('signup_form');
    }
    
     public function login()
    {
         if($_POST)
         {
             $num=$this->user_model->check();
             if($num==1)
             {
                 $data['users'] = $this->user_model->check1();
                 $this->load->view('user_list',$data);  
             }
             else
                  $this->load->view('login_form');
                 
         }
        
        else
             $this->load->view('login_form');
    }
    
    public function display()
    {
         $newdata = array(
                   'username'  => 'asd',
               'id' => '1'
                 
               );

            $this->session->set_userdata($newdata);
        echo $this->session->userdata('id');
    }
    }
    


?>
