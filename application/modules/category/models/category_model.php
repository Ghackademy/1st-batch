<?php ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Category_model extends CI_Model {
   
    function __construct() {
                
                parent::__construct();
				//loading database
                $this->load->database();
               
         }
		 
		 /*
		 *takes tablename and data as input 
		 *inserts into database table
		 */
		 public function addCategory($tablename,$data){
		  $this->db->insert($tablename,$data);
		 }
		 
                 
                 
                 /*
                 * returns all category of database
                 */
		 public function displayCategory($tablename){
		  $query= $this->db->get($tablename);
                  $res = $query->result_array();
             
                  return $res;
		 }
		 
                 
                 /*
                 * gets a category from table
                 */
		 public function getSingleCategory($a='',$id)
		 {
			 $res=$this->db->get_where($a,array('cat_id'=>$id));
                 return $res->row_array($id);
		 }
		 
                 
                 /*
                 * updates a category
                 */
		 public function update($tablename,$data,$id){
		 $this->db->where('cat_id', $id);
                 $this->db->update($tablename,$data);
		 }
		 
		 
                  /*
                  * deletes a category
                  */
                  public function deleteCategory($tablename,$id){
                  $this->db->where('cat_id',$id);
                  $this->db->delete($tablename);
                  }
                 
                 
                 
                 }//end of class
                 
                 
		 ?>
