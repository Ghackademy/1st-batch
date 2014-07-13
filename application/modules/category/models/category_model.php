
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model {
    const table='tb_category';
    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
         
         //function to display all categories
         function getAllCategory(){
             $query= $this->db->get(category_model::table);
             $res = $query->result_array();
             
             return $res;
         }
         
       
         
         public function insertCategory($tablename, $data){
             // function to insert category in table
             $this->db->insert($tablename, $data);
             return $this->db->insert_id();
         }
        //function to edit category
         public function getSingleCategory($id){
              if($_POST){
             $res=$this->db->get_where(category_model::table,array('cat_id'=>$id));
             $value = $res->row($id);
              return $value;
             
              }
         }
            public function update($id,$tablename,$data){
			
		$this->db->where('cat_id', $id);
		$this->db->update($tablename, $data); 
		return $this->db->affected_rows();
			
	}
        public function delete_row($id){
            $this->db->where('cat_id',$id);
            $this->db->delete(category_model::table);
        }
}
