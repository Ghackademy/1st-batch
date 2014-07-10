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
         
         function insertUser($data){
             //insert $data into table tbl_user
             $this->db->insert(user_model::table,$data);
         }
         //functin to fetch data from table
         function getFromDb($where="",$array_type="",$limit="",$start=""){
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
                // get datas from table
                $tablename = "select * from  tbl_user as t1 
                    inner join
                    tb_usergroup as t2 
                    on
                    t1.id=t2.user_id
                    inner join
                    tb_groups as t3
                    on
                    t3.group_id = t1.group_id";
		$query=$this->db->get($tablename);
                //checking array type
                if($array_type=="row")
			return $query->row_array(); //returns the row from the table
		else
			return $query->result_array(); // returns all the data of the table
                
         }
 }

