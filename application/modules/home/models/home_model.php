<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {
//defining constant for table tbl_user
    const table = "tbl_user";
    const table_group = "tb_groups";
    const table_usergroup = "tb_usergroup";
    
    function __construct() {
                parent::__construct();
                $this->load->database();
               
         }
       /*
        * @param STRING table name
        * @param ARRAY data
        * return user id
        */
         function insertUser($tablename,$data){
            
             $this->db->insert($tablename,$data);
             return $this->db->insert_id();
         }
         
        /*
         * returns form validation
         */
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
         
         /*
          * @param STRING table name
          * @param STRING where condition
          * @param ARRAY 
          * @param INT limit
          * @param INT start
          * return data
          */
         function getFromDb($tablename,$where="",$array_type="",$limit="",$start=""){
             
             if($where!="")
			$this->db->where($where);
             
             if($limit!="" || $start!=""){
			if($start!="")
				$this->db->limit($start,$limit);
			else
				$this->db->limit($limit);
		}
                
		$query=$this->db->get($tablename);
                
                if($array_type=="row")
			return $query->row_array();
		else
			return $query->result_array(); 
                
         }
         
          public function getSingleUser($id) {
        $query = $this->db->get_where('tbl_user', array('user_id' => $id));
        return $query->row($id);
    }
    
    
    public function editUser(){
    } }

