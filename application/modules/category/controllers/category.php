<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends MX_Controller {
const table = "tb_category";    
    Public function __construct(){
        parent::__construct();
        $this->load->model('category_model'); // load category model
        $this->load->library('session');
        
              
    }
    
     /*
      * returns template
      */
    public function categorylist(){ 
        
         $data['allcategory']= $this->category_model->getAllCategory(category::table);

        $this->load->view('categorylist',$data);
    }
    
    /*
     * returns data insert
     */
    public function add(){  
        if ($_POST){
            $data= array(
                'cat_title'=>  $this->input->post('cat_title'),
                'cat_description'=>  $this->input->post('cat_desc')
            );
        
        $this->category_model->insertCategory(category::table,$data);
        redirect('category/categorylist');
        
        }
        else{
            $this->load->view('addcategory');
        }
        
    }
	      //return data updated value 
      public function edit($id){
         
          $data['category']=$this->category_model->getSingleCategory($id);
          $this->load->view('edit',$data);
        
      }
}

