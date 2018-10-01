<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Model{
 function getRows($params = array(),$id){
		
		
		//print_r($id);die;
		$this->load->library('session');
		
        $this->db->select("*");
		$this->db->from('mainlink_ratings');
		$this->db->where('furniture_id',$id);
		$this->db->where('status',$id);
        //$this->db->order_by('id','desc');
        
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
		
        $query = $this->db->get();
		//echo '<pre>';
        //echo print_r($query->result_array());
		//echo $this->db->last_query();
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }
	
/********************************************************************************/	
		function get_furniture_detail($furniture_id){
						$this->db->select('*');
						$this->db->from('mainlink_furniture');
						$this->db->where('furniture_id',$furniture_id);
						$query=$this->db->get();
						return $query->result_array();
				
				
				}
	
	
function get_relation_furniture($furniture_id){
						$this->db->select('collection_id');
						$this->db->from('mainlink_collection_relation');
						$this->db->where('furniture_id',$furniture_id);
						$query=$this->db->get();
						return $query->result_array();
				
				
				}		
	
	
	function reviews_product($id){
	//$current_date = date("Y-m-d");
	
	//$end_date = date("Y-m-d", strtotime("-90 days"));
	
	 $this->db->select('*');
	$this->db->from('mainlink_ratings');
	$this->db->where('furniture_id',$id);
	$this->db->where('status','Active');
	$this->db->limit(10);
	$this->db->order_by('date','ASC');
		$query=$this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();	

	}

function reviews_product_count($product_id){
	//$current_date = date("Y-m-d");
	
	//$end_date = date("Y-m-d", strtotime("-90 days"));
	
	 $this->db->select('*');
	$this->db->from('mainlink_ratings');
	$this->db->where('furniture_id',$product_id);
	
		$query=$this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();	

	}
	
	
	
	
	
	
    }
	
	  

}