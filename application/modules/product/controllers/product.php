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
        
        $uid=$this->session->userdata('id');
        $id=$a;
         $a=$this->product_model->getsingle($id);
        
           
        
        
        $data = array(
            'user_id'=> $uid,
           'item_id' => $a->id,
            'title'=>$a->title,
            'image'=>$a->image,  
            'price'=>$a->price,
       );
   
     
        $this->product_model->wishlist($data);
    }
    
    public function showwishlist()
    {
        $a=0;
        $data['items']=$this->product_model->showwish($a);
       // print_r($data['items']);
        $this->load->view('wishlist.php',$data);

      
    }
    
    public function showdetails($a)
    {
        $da=array();
        $da['items']=array();
        $da['items']=$this->product_model->getsingle($a);
       // print_r($da['items']);
       $this->load->view('wishlist',$da);
        
    }
    public function index()
    {
            
//            $data['userdata']=$this->product_model->getdata();
//            $this->load->view('products',$data);
        $this->load->view('header');
            
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
        
        
            //$b=($a[0]);
            
         //  echo $b->description;
         
        $data = array(
           'id' => $a->id,
           'name' => $a->title,
           'qty' => '1',
            'price' => $a->price,        
       );

        $a = $this->cart->insert($data);

    
//     $res = $b->title." inserted to cart successfully";
//       echo $res;
   
   }
    
     public function tocart($a,$c)
    
        {
         
         $b=$this->product_model->getsingle($a);
         
        
        $data = array(
           'id' => $b->id,
           'name' => $b->title,
           'qty' => '1',
            'price' => $b->price,        
       );

        $this->cart->insert($data);
        $this->product_model->removewish($c);
        $this->showwishlist();

   
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
     
        $uid = $this->session->userdata('id');
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
