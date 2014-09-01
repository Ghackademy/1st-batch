<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends MX_Controller{
    
   
   public function __construct() {
        parent::__construct();
         $this->load->model('product_model');
          $this->load->library('pagination');
          $this->load->helper('url');
          $this->load->helper('date');
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
    
    public function wishlist($a)
    {
        {
        $id=$a;
         $a=$this->product_model->getsingle($id);
        
            $b=($a[0]);
         //  echo $b->description;
         
        $data = array(
            'user_id'=>1,
           'item_id' => $b->id,
           
          
       );
   }
        $this->product_model->wishlist($data);
    }
    
    public function showwishlist()
    {
        $a=1;
        $data=$this->product_model->showwish($a);
        $count=count($data);
       $da['number']=$count;
       for($i=0;$i<$count;$i++)
       {
           $b[$i]=$data[$i]->item_id; 
           
           $da['items'][$i]=$this->product_model->getsingle($b[$i]);
       
   
      $this->load->view('wishlist',$da);
       }
    //  print_r($da);
        
      
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
    
    public function addtocart($a)
    
        {
        $id=$a;
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

    
//     $res = $b->title." inserted to cart successfully";
//       echo $res;
   
   }
    
    
    function show()
   {
        //$a=$this->cart->contents();
       $a['val']=$this->cart->contents();
     // echo"<pre>";
       $this->load->view('slider/viewcart',$a);
       //print_r($a);
   }
    
   public function remove()
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
   
   public function checkout()
   {
       date_default_timezone_set('Asia/Kathmandu'); 
       $uid=1;
     //   $uid = $this->session->userdata('uid');
//        if(empty($uid))
//        {
//           //$this->session->set_flashdata('cart', 'yes');
//            redirect('user/userlogin');
//        }
        $format = 'DATE_RFC822';
        $time = time();

        standard_date($format, $time);
       
       $a=$this->cart->contents(); 
       foreach($a as $b):
            $id  = $b['id'];
            $qty=$b['qty'];
            $date= standard_date($format, $time);
            $vid=$this->product_model->getvendor($id);
     // echo $date.'<BR>'.$uid.'<BR>'.$id.'<BR>'.$qty.'<BR>'.$vid; 
            
            $this->product_model->checkout($date,$uid,$id,$qty,$vid);
       endforeach;
       $this->cart->destroy();
       redirect('slider/index');
      
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
