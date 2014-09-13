<?php
class User extends MX_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->library('session');
    }
public function userlogin()
{
    if($_POST)
    {
       $a = $this->usermodel->login();
       if($this->session->userdata('utype')=='user')
           redirect('slider/index');
        
       elseif($this->session->userdata('utype')=='admin')
           redirect('admin/index');
       
       elseif($this->session->userdata('utype')=='vendor')
           redirect('vendor/index');
       else {
           redirect('slider/index');
       }
    }
    
  
}
}
?>
