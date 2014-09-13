<?php
class Admin extends MX_Controller{
    public function __construct() {
        parent::__construct();
      // $this->load->slidermodel;
        $this->load->library('session');
    }
    
    
    public function index()
    {
        if($this->session->userdata('utype')=='admin')
            $this->load->view('side.php');
        else {
            redirect('slider/index');
        }
    }
    
    public function editslider()
    {
         if($this->session->userdata('utype')=='admin')
            redirect('slider/edit');
           else
             redirect('slider/index');  

    }
    public function addtoslider()
    {
       if($this->session->userdata('utype')=='admin')
       redirect('slider/addtoslider');
        else
             redirect('slider/index');
    }
}
?>