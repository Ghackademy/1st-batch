<?php

class cart_test extends MX_Controller {
    
    function __construct() {
        parent::__construct();
    }
    function add() {
        $data = array(
            'id' => '1',
            'name' => 'apple',
            'qty' => '2',
            'price' => '500',
                'options'=>array('size'=>'L')
        );

        $a = $this->cart->insert($data);
        if($a){
            echo"Add called";
        }
        else
            echo "error";
    
    }

   function show()
   {
     
       $a=$this->cart->contents();
       print_r($a);
   }

}

?>
