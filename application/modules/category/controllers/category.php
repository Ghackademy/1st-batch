<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends MX_Controller {
const table = "tb_category";    
    Public function __construct(){
        parent::__construct();
        $this->load->model('category_model'); // load category model
        $this->load->library('session');
        
              
    }
    

    public function categorylist(){ // get all list of category form table
        
         $data['allcategory']= $this->category_model->getAllCategory(category::table);

        $this->load->view('categorylist',$data);
    }

    public function add(){  // add category in tb_category table 
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
	       
        
}

