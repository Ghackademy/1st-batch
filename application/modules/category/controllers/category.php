<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends MX_Controller { 
    Public function __construct(){
        parent::__construct();
        $this->load->model('category_model'); // load category model
        $this->load->library('session');
     
        
              
    }
    
     /*
      * returns template
      */
    public function categorylist(){ 
        
         $data['allcategory']= $this->category_model->getAllCategory();
		 	if (empty($data['allcategory']))
	{
		show_404();
	}

	

        $this->load->view('categorylist',$data);
    }
    
    /*
     * returns data insert
     */
    public function add(){  
        $this->load->library('form_validation');
        if ($_POST){
		$title = $this->input->post('cat_title');
            $data= array(
                'cat_title'=>  $this->input->post('cat_title'),
                'cat_description'=>  $this->input->post('cat_desc'),
				'slug'=>url_title($title,'dash',true)
            );
          $this->form_validation->set_rules('cat_title', 'cat_title', 'required');
        $this->category_model->insertCategory($data);
        redirect('category/categorylist');
        
        }
        else{
            $this->load->view('addcategory');
        }
        
    }
    public function view(){
      $data['allcategory']= $this->category_model->getAllCategory();
       $this->load->view('user/view',$data);
    }
 
    public function allpost($id){
        $data['getpost']=$this->category_model->getAllPostOfOneCategory($id);
        //print_r($data);die();
       $this->load->view('categorypost',$data);
    }
    
    
    //edit category
      public function edit($id){
          if ($_POST){
		  	$title = $this->input->post('cat_title');
              $data=array(
                'cat_title' =>$this->input->post('cat_title'),
              'cat_description' =>  $this->input->post('cat_description'),
			  'slug' => url_title($title,'dash',true)
              );
              
          $this->category_model->update($id,'tb_category',$data);
          redirect('category/categorylist');
          }
              else{
          $data['category']=$this->category_model->getSingleCategory($id);
          $this->load->view('edit',$data);
          }
      }
      
      public function delete($id){
          $this->category_model->delete_row($id);
          redirect($_SERVER['HTTP_REFERER']);
      }
          
}

