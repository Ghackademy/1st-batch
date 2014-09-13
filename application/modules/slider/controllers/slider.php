<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Slider extends MX_Controller{
    
    public function __construct()
    {
        parent::__construct();
         $this->load->model('slidermodel');
    }
    public function header()
    {
        $this->load->view('header.php');
    }
    
     public function index(){
       
         $data['sliderdata']=$this->slidermodel->fetch();
         $data['featuredata']=$this->slidermodel->fetchfeature();
        // print_r($data);
    $this->load->view('index.php',$data);
    
     }
     
     public function slidercontrols()
     {
         if($this->input->post('add'))
         {
             $this->slidermodel->add();
         }
         else
         $this->load->view('editslider.php'); 
     }
       public function addtoslider()
     {
          if($this->input->post('add'))
         {
             $this->slidermodel->add();
             $this->index();
         }
         else
         $this->load->view('admin/addslider.php'); 
     }
     public function edit()
     {
         $data['sliderdata']=$this->slidermodel->fetch();
          $this->load->view('admin/editslider',$data);

     }
     
     public function updateslider($a)
     {
         $this->slidermodel->update($a);
         $this->index();
         
     }
     public function editimage($a)
     {
         $data['val']=$this->slidermodel->getsingle($a);
        $this->load->view('admin/editslide',$data);
     }
     public function removeimage($a)
     {
         $this->slidermodel->removesingle($a);
         $this->edit();
     }
     }

?>