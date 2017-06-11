<?php defined('BASEPATH') OR exit('No direct script access allowed');
class My_lib {
	protected $CI;

	function __construct()
	{		
		$this->CI=& get_instance();
		$this->CI->load->database();
	}

	function noTable(){
		die('Gunakan nama table terlebih dahulu pada parameter');
	}

	function row_count($table,$where=array()){
		if(empty($table)){
			$this->noTable();
		}else{
			if(!empty($where)){
				$this->CI->db->where($where);
			}
			$sql = $this->CI->db->get($table);
			$count=$sql->num_rows();
			return $count;
		}
	}

	function get_data($table,$where=array(),$order='',$group='',$limit=null,$start=null){


		if(!empty($table))	{
			if(!empty($where)){
				$this->CI->db->where($where);
			}

			if(!empty($order)){
				$this->CI->db->order_by($order);
			}

			if(!empty($group)){
				$this->CI->db->group_by($group);
			}

			if(!empty($limit)){
				$this->CI->db->limit($limit,$start);
			}

			$result=$this->CI->db->get($table);
			if($result->num_rows() > 0){
				return $result->result();
			}else{
				return null;
			}
		}else{
			$this->noTable();
		}
	}

}