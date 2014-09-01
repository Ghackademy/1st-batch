<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Login_model extends CI_Model {
     public function __construct() 
             {
                 parent::__construct();
                $this->load->database();
             }
     
                 
 public function insert() {
        $name = $this->input->post('name');
        $pass = $this->input->post('password');
        $data = array(
            'Name' => $name,
            'Password' => $pass
     );
         echo("Inserted successfully");
        $this->db->insert('tbl_login', $data);
}
}
?>
