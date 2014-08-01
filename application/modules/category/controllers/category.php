<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
     //define tablename as constant table
     const table = "tb_category"; 
	 
	function __construct()
	{
		parent::__construct();
		// load category model
		$this->load->model('category_model'); 
                
      }
	  
          /*
          * adds new category
          */
	  public function add(){
	  if ($_POST)
	  {
               $this->load->library('form_validation');
	  $data= array(
                'cat_title'=>  $this->input->post('cat_title'),
                'cat_description'=>  $this->input->post('cat_desc'),
              'slug'=>url_title($this->input->post('cat_title'),'dash',true)
            );
	  $this->form_validation->set_rules('cat_title', 'cat_title', 'required');
	  $this->category_model->addCategory(category::table,$data);
			 
	  $this->display();
	  
	  }
	  else
	  {
	  $this->load->view('categoryadd');
	  }
	  
	  }
	  
	  
	  
          
          /*
          * returns all category
          */
	  public function display(){
	  $data['allcategory']=$this->category_model->displayCategory(category::table);
	  $this->load->view('categorylist',$data);
	  
	  }
	  
	  
          
          /*
          * returns all category with edited category
          */
	  public function edit($id){
	  if($_POST){
	  $data=array(
                'cat_title' =>$this->input->post('cat_title'),
              'cat_description' =>  $this->input->post('cat_desc'),
               'slug' => url_title($this->input->post('cat_title'),'dash',true)
              );
	  $this->category_model->update(category::table,$data,$id);
          $data['allcategory']=$this->category_model->displayCategory(category::table);
	  $this->load->view('categorylist',$data);
	  }
	  else{
	   $datas['category']=$this->category_model->getSingleCategory(category::table,$id);
//	   print_r($datas);die();
	    $this->load->view('editcategory',$datas);
	  }
	  }

          
          /*
          * deletes a category
          */
          public function delete($id){
          $this->category_model->deleteCategory(category::table,$id);
          redirect('category/display');
          }
          
          public function product($id){

              $datas['pdt']=$this->category_model->productAccCategory($id);
              //print_r($datas); die();       
          }
}
	  ?>
