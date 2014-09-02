<?php
class Admin extends MX_Controller{
    public function __construct() {
        parent::__construct();
      // $this->load->slidermodel;
    }
    
    
    public function index()
    {
        $this->load->view('side.php');
    }
    
    public function editslider()
    {
        redirect('slider/edit');

    }
    public function addtoslider()
    {
      
       redirect('slider/addtoslider');
    }
}
?>