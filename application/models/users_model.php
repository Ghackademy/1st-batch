<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model {

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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */