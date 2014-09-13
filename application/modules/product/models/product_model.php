<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends CI_Model
{
    var $gallery_path; 
     public function __construct() {
        parent::__construct();
       
    }
    
    //adds product details in the product table
    //adds additional options in the option table
    //adds featured image in the slider table
    public function add()
    {
        $image = $this->do_upload();
        $title=$this->input->post('name');
        $category=$this->input->post('category');
        $description=$this->input->post('description');
        
         //to add product details in the product table
        $data=array(
            'title' => $title,
        'description' =>$description,
        'category'=> $category,
       'image'=> $image,
            'price'=>$this->input->post('price'),
        );
        $this->db->insert('product_details', $data);
        
       //to insert the attitional product descriptions
         $no=$this->input->post('itemno');
         $id=$this->product_model->getid($title,$description,$category);//to get id of the product from database
       for($i=1;$i<=$no;$i++)
        {
           
            $data=array(
            'option_name' => $this->input->post('optnname'.$i),
            'option_value' => $this->input->post('optnval'.$i),
            'product_id'=>$id,
             
            );
            $this->db->insert('option_details', $data);
           
        }
      
        //to insert the featured image in slider
         $a=$this->input->post('featured');
        if($a==1)
        {    
        $image1 = $this->do_uploads();
        
             $data=array(
            'title' => $this->input->post('name'),
             'image'=> $image1,
           
        );
             $this->db->insert('slider', $data);
             
        
        }
        echo"data inserted";
    }
    public function showwish($a)
    {
     
        $query=$this->db->get_where('tbl_wishlist',array('user_id'=>$a));
         $res=$query->result();
           // print_r($res);die();
         return $res;
        
        
    }
    
    public function removewish($a)
    {
        
        $query="DELETE FROM `tbl_wishlist` where `id`=$a";
        $this->db->query($query);
    }
    
    public function wishlist($data)
    {
        $query=$this->db->insert('tbl_wishlist',$data);
        redirect('slider/index');
    }
    //to get id of the product whose id, description and category are given
    public function getid($a,$b,$c)
    {
         $query=$this->db->get_where('product_details',array('title'=>$a,'description'=>$b,'category'=>$c));
        $a=$query->result();
        $b=($a[0]);
      return $b->id;
        
    }
    
public function getdata()
    {
      $query = $this->db->get('product_details');        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
    
    public function getsingle($id)
    {
        
        $query=$this->db->get_where('product_details',array('id'=>$id));
        $a=$query->row();
        
        return $a;
        
    }

public function do_uploads() {
        $config['upload_path'] = './uploads/slider/original';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '2024';
        $config['max_height'] = '1000';
       //print_r( $config);die();

         $this->load->library('upload');
            $this->upload->initialize($config);
            
         if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            /* PATH */
            $source = "./uploads/slider/original/" . $data['file_name'];
            $destination_resized = "./uploads/slider/resized/";
             $destination_thumb = "./uploads/slider/thumb/";
            $size_resized_width = 720;
            $size_resized_height = 300;
            $size_thumb_width = 100;
            $size_thumb_height = 100;
            $this->load->library('image_moo');
            $this->image_moo
                    ->load($source)
                    /* RESIZING IMAGE TO BE MEDIUM SIZE */
                     ->make_watermark_text("stha-ruby", "./assets/fonts/DANUBE__.TTF",10, "#00CDFF")
                    ->resize(720,300)
                    ->watermark(2)
                  
                    ->save($destination_resized . $data['file_name'])
                    
                    ->resize_crop($size_thumb_width, $size_thumb_height)
                    ->save($destination_thumb . $data['file_name']);

            if ($this->image_moo->errors)
                print $this->image_moo->display_errors();
            else {
                return $data['file_name'];
            }
        } else {
            $error = strip_tags($this->upload->display_errors());
            echo "<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
        }
}

public function do_upload() {
        $config['upload_path'] = './uploads/product/original';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '2024';
        $config['max_height'] = '1000';
       //print_r( $config);die();
        $this->load->library('upload', $config);
         if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            /* PATH */
            $source = "./uploads/product/original/" . $data['file_name'];
            $destination_resized = "./uploads/product/resized/";
             $destination_thumb = "./uploads/product/thumb/";
            $size_resized_width = 720;
            $size_resized_height = 300;
            $size_thumb_width = 100;
            $size_thumb_height = 100;
            $this->load->library('image_moo');
            $this->image_moo
                    ->load($source)
                    /* RESIZING IMAGE TO BE MEDIUM SIZE */
                    ->resize(720,300)
                    ->save($destination_resized . $data['file_name'])
                    
                    ->resize_crop($size_thumb_width, $size_thumb_height)
                    ->save($destination_thumb . $data['file_name']);

            if ($this->image_moo->errors)
                print $this->image_moo->display_errors();
            else {
                return $data['file_name'];
            }
        } else {
            $error = strip_tags($this->upload->display_errors());
            echo "<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
        }
}

public function getvendor($a)
{
     $query=$this->db->get_where('product_details',array('id'=>$a));
        $results=$query->result();
        $b=($results[0]);
      return $b->vendor_id;
    
}

public function checkout($date,$uid,$id,$qty,$vid)
{
    $data=array(
            'date' => $date,
            'product_id'=>$id,
            'product_qty'=>$qty,
            'user_id'=>$uid,
            'vendor_id'=>$vid
            );
     $this->db->insert('tbl_purchase', $data);
    
}
}


?>