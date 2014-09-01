<?php
 class Trial extends CI_Controller
 {
     
     public function first($a=10)
     {
         echo'I am first and my value is'.$a;
     }
     public function index()
     {
         $prefix='USER';
          $uniqid =  uniqid('USER',TRUE);
         echo $uniqid;
        // echo 'a';
     }
 }

?>
