<?php


class Slidermodel extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function fetch()
    {
        $query = $this->db->get('slider');   
        $a=$query->result();
        return($a);
    }
    
     public function add()
    {
      
        $image = $this->do_upload();
        $data=array(
            'title' => $this->input->post('title'),
        
            'image'=> $image,
           
        );
        $this->db->insert('slider', $data);
        echo"data inserted";
    
    }
    
    public function replace()
    {
         $image = $this->do_upload();
         $a=$this->input->post('id');
          $query = $this->db->query("UPDATE  `slider` set `image`='$image' WHERE `id`=$a");
    }
    public function removesingle()
    {
        $a=$this->input->post('id');
        echo $a;

        $query = $this->db->query("DELETE  from `slider` where `id`=$a");
      
    }
    
   public function do_upload() {
        $config['upload_path'] = './uploads/slider/original';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
       //print_r( $config);die();
        $this->load->library('upload', $config);
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

        }
    

?>