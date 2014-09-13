<?php
class Vendor extends MX_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('vendormodel');
        $this->load->library('session');
    }
    
    public function index()
    {
        $this->load->view('vendorheader');
        
    }
    
    public function sales()
    {
        $id=$this->session->userdata('id');
       
        $data['values']=$this->vendormodel->getSalesDetails($id);
       // print_r($data); die();
       $this->load->view('sales',$data); 
    
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('slider/index');
    }
}
?>