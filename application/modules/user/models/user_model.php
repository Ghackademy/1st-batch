<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
//defining constant for table tbl_user
    const table = "tbl_user";
    const table_group = "tb_groups";
    const table_usergroup = "tb_usergroup";
    
    function __construct() {
                // Call the Model constructor
                parent::__construct();
                $this->load->database();//loading database
               
         }
         //returns data insert and insert_id
         function insertUser($tablename,$data){
            
             $this->db->insert($tablename,$data);
             return $this->db->insert_id();
         }
         
         //validating login form
        public function validateLogin(){
            //taking input from the form
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            //prepare query to check above form data with database data
            $this->db->where('email',$email);
            $this->db->where('password',$password);
            
            //running the query
            $query = $this->db->get('tbl_user');
            $res = $query->row();
            if(count($res)==1)
            {
                    //if there is user then create sessin data
                    $row = $query->row();
                    $data = array(
                        'userid'=>$row->id,
                        'fname'=>$row->fname,
                      
                        'validate'=>true
                    );
                    $this->session->set_userdata($data);
                    return $res;
            }
                return false;
        }
         
         //functin to fetch data from table ie returns templete @ param tablename-required table name ,where - condition ,array type - row or result , limit and start for the start and limi tpoint of pagination
         function getFromDb($tablename,$where="",$array_type="",$limit="",$start=""){
             //checking where condition to get required conditioned data from table
             if($where!="")
			$this->db->where($where);
             //$limit and $start for pagination 
             if($limit!="" || $start!=""){
			if($start!="")
				$this->db->limit($start,$limit);
			else
				$this->db->limit($limit);
		}
                
		$query=$this->db->get($tablename);
                //checking array type
                if($array_type=="row")
			return $query->row_array(); //returns the row from the table
		else
			return $query->result_array(); // returns all the data ie result of the table
                
         }
         
          public function getSingleUser($id) {
        $query = $this->db->get_where('tbl_user', array('user_id' => $id));
        return $query->row($id);
    }
    
    
    public function editUser(){
    } }

