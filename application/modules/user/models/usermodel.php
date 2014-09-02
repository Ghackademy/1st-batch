<?php
class Usermodel extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function login()
    {
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $query=$this->db->get_where('tbl_users',array('username'=>$email,'password'=>$password));
        $res=$query->row();
        if(empty($res))
        {
           //
        }
        else
           
        $newdata = array(
                    'id'=>$res->id,
                   'username'  => $res->username,
                  );

                $this->session->set_userdata($newdata);
        return $res;
    }
}

?>
