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
	  $data= array(
                'cat_title'=>  $this->input->post('cat_title'),
                'cat_description'=>  $this->input->post('cat_desc')
            );
			
			$this->category_model->addCategory(category::table,$data);
			 
			$this->display();
	  
	  }
	  else
	  {
	  $this->load->view('categoryadd');
	  }
	  
	  }
	  
	  
	  
	  public function display(){
	  $data['allcategory']=$this->category_model->displayCategory(category::table);
	  $this->load->view('categorylist',$data);
	  
	  }
	  
	  
	  public function edit($id){
	  if($_POST){
	  $data=array(
                'cat_title' =>$this->input->post('cat_title'),
              'cat_description' =>  $this->input->post('cat_desc')
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
	  
	  }
	  ?>