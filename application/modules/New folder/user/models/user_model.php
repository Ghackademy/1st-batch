<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model{

public function __construct() {
    parent::__construct();
    $this->load->database();
}
    public function insert() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'password' => $password
        );
        $this->db->insert('tbl_users', $data);
    }
  
   
public function check1() {
    
       $sql1="SELECT * FROM tbl_users";
       $query1=$this->db->query($sql1);
          $a=$query1->result();
          return $a;
       }

       public function login()
       {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = array(
            'username' => $username,
            'password' => $password
             );
            $sql = "SELECT * FROM tbl_users WHERE username = ? AND password = ?"; 
            $query=$this->db->query($sql,$data);
            $rows = $query->num_rows();
            if($rows>0)
            {
                 $res=$query->row();
                $newdata = array(
                   'id'  => $res->id,
                   'name'  => $res->username,
                   'type'  => $res->type,
                   
               );

            $this->session->set_userdata($newdata);
               
               // print_r($res);
               
                return $res->type;
            }
       }
            
            public function getid()
            {
                $id=$this->session->userdata('id');
               $query = $this->db->get_where('tbl_purchase',array('vendor_id'=>$id));
               $result=$query->result();
               print_r($result);
                
            }
            
            public function getuserid()
            {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $query=$this->db->get_where('tbl_users',array('username'=>$username,'password'=>$password));
                $a=$query->row();
                return $a->id;
            }
            
            //echo $rows;die();
           //return $rows;
       
       
       
       public function getsingle($a)
       {
         $query=$this->db->get_where('product_details',array('id'=>$a));
         $a=$query->result();
         print_r($a);
           
       }
   public function do_upload() {
        $config['upload_path'] = './uploads/orginal';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
       //print_r( $config);die();
        $this->load->library('upload', $config);
         if ($this->upload->do_upload("userfile")) {
            $data = $this->upload->data();
            /* PATH */
            $source = "uploads/original/" . $data['file_name'];
            $destination_resized = "uploads/resized/";
             $destination_thumb = "uploads/thumb/";
            $size_resized_width = 200;
            $size_resized_height = 100;
            $size_thumb_width = 50;
            $size_thumb_height = 50;
            $this->load->library('image_moo');
            $this->image_moo
                    ->load($source)
                    /* RESIZING IMAGE TO BE MEDIUM SIZE */
                    ->resize_crop($size_resized_width, $size_resized_height)
                    ->save($destination_resized . $data['file_name'])
                    
                    ->resize_crop($size_thumb_width, $size_thumb_height)
                    ->save($destination_thumb . $data['file_name']);

            if ($this->image_moo->errors)
                print $this->image_moo->display_errors();
            else {
                return $data['file_name'];
            }
        } 
        else
            {
            $error = strip_tags($this->upload->display_errors());
            echo "<script type='text/javascript'>alert('.$error.');history.back(-1);</script>";
            die();
        }
}
}
    
    


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>
