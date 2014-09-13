<?php
class Vendormodel extends CI_Model{
    public function getSalesDetails($id)
    {
        
        $query=$this->db->get_where('tbl_purchase',array('vendor_id' => $id));
        $a=$query->result();
        return $a;
    }
}
?>