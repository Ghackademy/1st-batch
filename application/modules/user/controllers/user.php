<?php
class User extends MX_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
    }
public function index()
{
    if($_POST)
    {
        
    }
    else
    $this->load->view('login.php');
}
}
?>
