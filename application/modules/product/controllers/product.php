<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends MX_Controller{
    
   
   public function __construct() {
        parent::__construct();
         $this->load->model('product_model');
          $this->load->library('pagination');
          $this->load->helper('url');
          $this->load->library('encrypt');
          $this->load->library('session');
          
    }
    public function index1()
    {
        if($this->input->post('upload')) 
        {
            $this->product_model->do_upload();  
        }
        $this->load->view('view1');
    }
    
    public function index()
    {
            
            $data['userdata']=$this->product_model->getdata();
            $this->load->view('products',$data);
            
            
            
    }
     public function show1()
    {
             if($this->input->post('view'))
            {
        
            $data['userdata']=$this->product_model->getdata();
            $this->load->view('products',$data);
            }
            
    }
    
    public function additem()
    {
        if($this->input->post('add'))
        {
           
            
            $this->product_model->add();
                      redirect('product/index');
            
        }
        else
       $this->load->view('products1');  
    }
    
    public function addtocart()
    
        {
        $id=$this->input->post('id');
         $a=$this->product_model->getsingle($id);
        
            $b=($a[0]);
         //  echo $b->description;
         
        $data = array(
           'id' => $b->id,
           'name' => $b->title,
           'qty' => '1',
            'price' => $b->price,        
       );

        $a = $this->cart->insert($data);
//      if($a)
//          {
//           echo"Add called";
//           redirect('product');
//            }
//       else
//           echo "error";
    
     $res = $b->title." inserted to cart successfully";
       echo $res;
    //redirect('product');
   }
    
    
    function show()
   {
        //$a=$this->cart->contents();
       $a['val']=$this->cart->contents();
     // echo"<pre>";
       $this->load->view('viewcart',$a);
       //print_r($a);
   }
    
    function remove()
   {
       $row=$this->input->post('rowid');
       //echo $row;
       $data = array(
               'rowid' => $row,
               'qty'   => 0
            );

        $this->cart->update($data); 
        redirect('product/show');
   }

    function update()
   {
       $row=$this->input->post('rowid');
        $qty=$this->input->post('qty');
       
       //echo $row;
       $data = array(
               'rowid' => $row,
               'qty'   => $qty,
            );

        $this->cart->update($data); 
        redirect('product/show');
   }

    function decrement()
   {
       $row=$this->input->post('rowid');
        $qty=$this->input->post('qty');
        $qty=$qty-1;
       //echo $row;
       $data = array(
               'rowid' => $row,
               'qty'   => $qty,
            );

        $this->cart->update($data); 
        redirect('product/show');
   }

}
?>
