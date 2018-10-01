<?php
class Module extends CI_Model 
{
    function __construct()
    {
		$this->load->database();
        parent::__construct();
    }
	
	function user_signup($data)
	{
		$insert = $this->db->insert('stream_admin_login', $data);
		return $this->db->insert_id();
	}
	
	
function user_login_profile()
	{
		$admin_user_name = $this->input->post('admin_user_name');
		$admin_password = base64_encode($this->input->post('admin_password'));
		$this->load->helper('cookie');
		
		$admin_user_name = $this->input->post('admin_user_name');
		$admin_password = base64_encode($this->input->post('admin_password'));
		
		if ($this->input->post('remember_me')=='1') {
			
			$this->input->set_cookie("admin_user_name", $user_name,time()+60*60*60*7);
            $this->input->set_cookie("admin_password", $user_password,time()+60*60*60*7);
			
		}
		else
		{
			$this->input->set_cookie("admin_user_name", '',0);
            $this->input->set_cookie("admin_password", '',0);
		}
		
		$this->db->select('*');
		$this->db->where('admin_user_name', $admin_user_name);
		$this->db->where('admin_password', $admin_password);
		$this->db->from('stream_admin_login');
		$query = $this->db->get();
		$result = $query->num_rows();
			
		if($result==0)
		{
			 return false;
		}
		else
		{
		
			$data = $query->result_array();
		    $admin_user_name=stripslashes($data[0]['admin_user_name']);
			$admin_id=$data[0]['admin_id'];
			
		
			$this->session->set_userdata('admin_user_name', $admin_user_name);
			$this->session->set_userdata('admin_id', $admin_id);
			
			
			
			$this->session->set_userdata('is_logged_in', TRUE);
			return true;
		}
		
	}
	
	
	 function check_old_password($seller_id,$old_password)
	 {
		$this->db->select('admin_password');
		$this->db->where('admin_password', $old_password);
		$this->db->where('admin_id', $seller_id);
		$this->db->from('stream_admin_login');
		$query = $this->db->get();
		return $query->num_rows();
	 }
	 
	 
	 function update_user_password($seller_id,$new_password)
	  {
		$data = array(
				'admin_password'=>base64_encode($new_password)
				);
		$this->db->where('admin_id', $seller_id);
		$this->db->update('stream_admin_login', $data);
		return true;
	  }
	
	function get_admin($admin_email){
		$this->db->select('admin_user_name');
		$this->db->from('stream_admin_login');
		$this->db->where('admin_email',$admin_email);
		$query = $this->db->get();
		return $admin_user_name=$query->row()->admin_user_name;
	}
	
	function get_admin_image($admin_id){
		$this->db->select('admin_image');
		$this->db->from('stream_admin_login');
		$this->db->where('admin_id',$admin_id);
		$query = $this->db->get();
		return $admin_image=$query->row()->admin_image;
	}
/**************************************category************************/

function get_cat()
    {
		
		$this->db->select('*');
		$this->db->from('stream_category');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	
	function insert_category($data)
	{
		$insert = $this->db->insert('stream_category', $data);
		return $this->db->insert_id();
	}


public function get_all_detail($id)
	{
		
		$this->db->select('*');
		$this->db->from('stream_category');
		$this->db->where('category_id',$id);
		//$this->db->where('status' ,'Active');
		$category_name = $this->db->get();
		return $category_name->result_array();
		}
//function update_cat($id,$data)
//	{
//		
//		$this->db->where('category_id', $id);
//		$this->db->update('stream_category', $data);
//		echo $this->db->last_query(); die;
//		return $category_id;
//	}
	function update_cat($id,$data)
	{
		
		$this->db->where('category_id', $id);
		$this->db->update('stream_category', $data);
		return $id;
	}
	function delete_cat($id)
	{
		$this->db->where('category_id', $id);
        $this->db->delete('stream_category');
		return true;
	}
/*************************************************************************************************************************/
/************************************************setting*******************************************************************/
function get_setting()
    {		
	
		$this->db->select('*');
		$this->db->from('stream_setting');
		
		
		$query = $this->db->get();
		return $query->result_array(); 	
    }
function get_setting_detail($setting_id)
	{
		$this->db->select('*');
		$this->db->where('setting_id', $setting_id);
		$this->db->from('stream_setting');
		$query_customer = $this->db->get();
		return $query_customer->result_array(); 
		
	}
	function update_setting($setting_id,$data)
	{
		$this->db->where('setting_id', $setting_id);
		$this->db->update('stream_setting', $data);
		return $setting_id;
	}
/************************************************end setting***********************************************************/
/*********************************************************user member************************************************/	
	function get_artist()
    {
		
		$this->db->select('*');
		$this->db->from('stream_artist');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	public function get_artist_detail($id)
	{
		
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('artist_id',$id);
		//$this->db->where('status' ,'Active');
		$name = $this->db->get();
		return $name->result_array();
		}
	
	
	function update_artist($id,$data)
	{
		
		$this->db->where('artist_id', $id);
		$this->db->update('stream_artist', $data);
		return $id;
	}
	
	function insert_artist($data)
	{
		$insert = $this->db->insert('stream_artist', $data);
		return $this->db->insert_id();
	}
	function delete_artist($id)
	{
		$this->db->where('artist_id', $id);
        $this->db->delete('stream_artist');
		return true;
	}
	
	function get_user()
    {
		
		$this->db->select('*');
		$this->db->from('stream_user');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	public function get_user_detail($id)
	{
		
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where('user_id',$id);
		//$this->db->where('status' ,'Active');
		$name = $this->db->get();
		return $name->result_array();
		}
		function update_user($id,$data)
	{
		
		$this->db->where('user_id', $id);
		$this->db->update('stream_user', $data);
		return $id;
	}
	function insert_user($data)
	{
		$insert = $this->db->insert('stream_user', $data);
		return $this->db->insert_id();
	}
	function delete_user($id)
	{
		$this->db->where('user_id', $id);
        $this->db->delete('stream_user');
		return true;
	}
	//--------------------------------------------advertisement--------------------------------------------------------
	function get_all_advertisement()
    {
		
		$this->db->select('*');
		$this->db->from('stream_advertisement2');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function update_advertisement($advertisement_id,$data)
	{
		
		$this->db->where('advertisement_id', $advertisement_id);
		$this->db->update('stream_advertisement2', $data);
		
	}
	function add_advertisement($data)
				{
						$insert = $this->db->insert('stream_advertisement2', $data);
						return $this->db->insert_id();
					}
	
	function get_advertisement_detail($advertisement_id)
    {
		$this->db->select('*');
		$this->db->from('stream_advertisement2');
		$this->db->where('advertisement_id', $advertisement_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	function delete_advertisement($id)
	{
		
		$this->db->where('advertisement_id', $id);
        $this->db->delete('stream_advertisement2');
		
		}
	
/**************************************************************************************************************************/
function get_interestin()
    {
		
		$this->db->select('*');
		$this->db->from('stream_setting');
		$this->db->where('setting_key','interested_in');
		$query = $this->db->get();
		return $query->result_array(); 	
    }	
	
function get_language()
    {
		
		$this->db->select('*');
		$this->db->from('stream_setting');
		$this->db->where('setting_key','language_known');
		$query = $this->db->get();
		return $query->result_array(); 	
    }	
function get_body()
    {
		
		$this->db->select('*');
		$this->db->from('stream_setting');
		$this->db->where('setting_key','body_type');
		$query = $this->db->get();
		return $query->result_array(); 	
    }	
	function get_orientation()
    {
		
		$this->db->select('*');
		$this->db->from('stream_setting');
		$this->db->where('setting_key','orientation');
		$query = $this->db->get();
		return $query->result_array(); 	
    }	
	
	function get_hair()
    {
		
		$this->db->select('*');
		$this->db->from('stream_setting');
		$this->db->where('setting_key','haircolor');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function get_ethnicity()
    {
		
		$this->db->select('*');
		$this->db->from('stream_setting');
		$this->db->where('setting_key','ethnicity');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function get_eye()
    {
		
		$this->db->select('*');
		$this->db->from('stream_setting');
		$this->db->where('setting_key','eyecolor');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
		
	function get_slider()
    {
		$this->db->select('*');
		$this->db->from('stream_slider');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function add_slider($data)
	{
		$insert = $this->db->insert('stream_slider', $data);
		return $this->db->insert_id();
	}
	  function update_slider($slider_id,$data)
	{
		
		
		$this->db->where('slider_id', $slider_id);
		$this->db->update('stream_slider', $data);
		
		return $slider_id;
		
	}	
	  function get_slider_detail($slider_id)
    {
		$this->db->select('*');
		$this->db->from('stream_slider');
		$this->db->where('slider_id', $slider_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	 function delete_slider($slider_id)
	{
		
		$this->db->where('slider_id', $slider_id);
        $this->db->delete('stream_slider');
		
		}
/************************************************end user member***********************************************************/

/********************************************************souvik start***********************************************************************************/


/************************************pagecontent******************************************/	
	function get_pagecontent()
    {
		
		$this->db->select('*');
		$this->db->from('stream_pagecontent');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	function get_pagecontent_detail($page_id)
    {
		
		$this->db->select('*');
		
		$this->db->from('stream_pagecontent');
	
		$this->db->where('page_id', $page_id);
	
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	
	
	function insert_pagecontent($data)
	{
		$insert = $this->db->insert('stream_pagecontent', $data);
		return $this->db->insert_id();
	}
	
	function update_pagecontent($page_id,$data)
	{
		$this->db->where('page_id', $page_id);
		$this->db->update('stream_pagecontent', $data);
		return $page_id;
	}	
		
	function delete_pagecontent($page_id)
	{
		$this->db->where('page_id', $page_id);
        $this->db->delete('stream_pagecontent');
		return $page_id;
	}	
	
	/******************************************************************************************************************************************************************/

function get_all_recorded_payment_list()
{
	
	$this->db->select('*,count(payment_details.video_id)as total,SUM(payment_details.payment) as total_price');
		$this->db->from('stream_payment_details');
		$this->db->join('stream_recorded_video','stream_recorded_video.recorded_v_id=payment_details.video_id');
		$this->db->join('artist','artist.artist_id=payment_details.artist_id');
		$this->db->group_by('video_id');
		$query = $this->db->get();
		return $query->result_array(); 	
	
	
}


function recorded_video_view($video_id)
{
	
	    $this->db->select('*');
		$this->db->from('stream_payment_details');
		$this->db->join('user','user.user_id=payment_details.user_id');
	    $this->db->where('video_id', $video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
	
	
}



function sum_total_price($video_id)
	
	{
		$this->db->select('SUM(stream_payment_details.payment)as total');
		$this->db->where('video_id',$video_id);
		$this->db->from('stream_payment_details');
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		return $query->result_array(); 	
	   	
	}
	

function get_all_meta_tag()
    {
		
		$this->db->select('*');
		$this->db->from('stream_meta_tag');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function get_meta_tag_detail($meta_id)
    {
		$this->db->select('*');
		$this->db->from('stream_meta_tag');
		$this->db->where('meta_id',$meta_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function add_meta_tag($data)
				{
		$insert = $this->db->insert('stream_meta_tag', $data);
		//echo $this->db->last_query(); die;
	    return $this->db->insert_id();
					}
	function update_meta_tag($meta_id,$data)
	{
		
		$this->db->where('meta_id', $meta_id);
		$this->db->update('stream_meta_tag', $data);
		return $id;
	}
	function delete_meta_tag($meta_id)
	{
		
		$this->db->where('meta_id',$meta_id);
        $this->db->delete('stream_meta_tag');
		
		}
//-----------------------------------end meta tag-----------------------------------------------------------------		
	//-----------------------------artist---------------------------------------------------------------------
	function get_artist_all_video($artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_artist_video_album');
		$this->db->where('artist_id',$artist_id);
		/*if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }*/
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function get_artist_name($artist_id)
	{
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array();
	}
	function artist_upload_video($data)
		{
			$insert = $this->db->insert('stream_artist_video_album', $data);
						return $this->db->insert_id();
		}
		
		function delete_artist_video($artist_id,$video_id)
	{
		
		$this->db->where('artist_id',$artist_id);
		$this->db->where('video_id',$video_id);
        $this->db->delete('stream_artist_video_album');
		
		}
		
		
		
		//-------------image--------------------------------------------------------------
		function get_artist_all_image($artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_artist_image_album');
		$this->db->where('artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
		function artist_upload_image($data)
		{
			$insert = $this->db->insert('stream_artist_image_album', $data);
						return $this->db->insert_id();
		}
		function delete_artist_image($artist_id,$image_id)
	{
		
		$this->db->where('artist_id',$artist_id);
		$this->db->where('image_id',$image_id);
        $this->db->delete('stream_artist_image_album');
		
		}
		//---------------------recorded video----------------------------------------------------------------
		function get_artist_all_r_video($artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_recorded_video');
		$this->db->where('artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function artist_upload_r_video($data)
		{
			$insert = $this->db->insert('stream_recorded_video', $data);
						return $this->db->insert_id();
		}
		function delete_artist_r_video($artist_id,$recorded_v_id)
	{
		
		$this->db->where('artist_id',$artist_id);
		$this->db->where('recorded_v_id',$recorded_v_id);
        $this->db->delete('stream_recorded_video');
		
		}
		
		
		
	//----------------------------artist End------------------------------------------------------------------
	//-----------------------------Dashboard start------------------------------------------------------------
	function get_user_for_list()
	       {
			$this->db->select('*');
			$this->db->from('stream_user');
			
			
			$query = $this->db->get();
			return $query->result_array(); 	
		}
		function get_category()
	       {
			$this->db->select('*');
			$this->db->from('stream_category');
			
			
			$query = $this->db->get();
			return $query->result_array(); 	
		}
		function get_all_artist()
	       {
			$this->db->select('*');
			$this->db->from('stream_artist');
			
			
			$query = $this->db->get();
			return $query->result_array(); 	
		}
		
/************************************************************souvik end****************************************************************************/
//---------------------------------------------------------santanu start---------------------------------------------------------------------------
/*----------------------------------------------------Schedule------------------------------------------------------------------------------*/		
		function get_artist_all_schedule($artist_id)
		{
			$this->db->select('*');
			$this->db->from('stream_schedule');
			$this->db->where('artist_id',$artist_id);
			$query=$this->db->get();
			return $query->result_array();
		}
		
		
/*------------------------------------------------------end schedule--------------------------------------------------------------------------*/		
/*------------------------------------------------------payment details------------------------------------------------------------------------*/

function get_all_payment_list()
{
	$this->db->select('*');
	$this->db->from('stream_payment_details');
	$this->db->join('stream_artist','stream_artist.artist_id=stream_payment_details.artist_id');
	$query=$this->db->get();
	
	return $query->result_array();
}


function search_all_payment_list_by_date($from_date,$to_date)
{
	$this->db->select('*');
	$this->db->from('stream_payment_details');
	$this->db->join('stream_artist','stream_artist.artist_id=stream_payment_details.artist_id');
	$this->db->where('date >=',$from_date);
	$this->db->where('date <=',$to_date);
	$query=$this->db->get();
	return $query->result_array();
	
}
function search_all_payment_list_by_type($payment_type)
{
	$this->db->select('*');
	$this->db->from('stream_payment_details');
	$this->db->join('stream_artist','stream_artist.artist_id=stream_payment_details.artist_id');
	$this->db->where('payment_type',$payment_type);
	
	$query=$this->db->get();
	return $query->result_array();
	
}
function search_all_payment_list_by_all($from_date,$to_date,$payment_type)
{
	$this->db->select('*');
	$this->db->from('stream_payment_details');
	$this->db->join('stream_artist','stream_artist.artist_id=stream_payment_details.artist_id');
	$this->db->where('date >=',$from_date);
	$this->db->where('date <=',$to_date);
	$this->db->where('payment_type',$payment_type);
	$query=$this->db->get();
	return $query->result_array();
	
}


/*-------------------------------------------------------end payment details-------------------------------------------------------------------*/
//-------------------------------------------------------fetch meta_tag-------------------------------------------------------------------------
function page_title($page_name)
    {
		$this->db->select('*');
		$this->db->from('stream_meta_tag');
		$this->db->where('page_name',$page_name);
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		return $query->result_array(); 	
    }
//--------------------------------------------------------end fetch meta_tag---------------------------------------------------------------------
function create_account($data)
		{
			$insert = $this->db->insert('stream_admin_login', $data);
						return $this->db->insert_id();
		}
//---------------------------------------------------------end santanu-----------------------------------------------------------------------------

//----------------------------------------------------------forgot password------------------------------------------------------------------------------
function check_admin($admin_email)
{
	$this->db->select('*');
	$this->db->from('stream_admin_login');
	$this->db->where('admin_email',$admin_email);
	//$this->db->where('admin_user_name',$admin_user_name);
	//$this->db->where('admin_contactno',$admin_contactno);
	$query=$this->db->get();
	return $query->result_array();
	
}

/****************************************************************************************************************/
function get_category_for_artist()
    {
		
		$this->db->select('*');
		$this->db->from('stream_category');
		$this->db->where('status','Active');
		$query = $this->db->get();
		return $query->result_array(); 	
    }





//---------------------------------------------------------end forgot password---------------------------------------------------------------------------


//---------------------------------------------overview-------------------------------------------------------------------------------------------------
function get_overview_normal_video($video_id)
		{
			$this->db->select('*');
		$this->db->from('stream_artist_video_album');
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
		}
function get_overview_r_video($recorded_v_id)
		{
			$this->db->select('*');
		$this->db->from('stream_recorded_video');
		$this->db->where('recorded_v_id',$recorded_v_id);
		$query = $this->db->get();
		return $query->result_array(); 	
		}

//----------------------------------------------category_name---------------------------------------------------------------------------------------------
function get_category_name($category_id)
{
	$this->db->select('*');
		$this->db->from('stream_category');
		$this->db->where('category_id',$category_id);
		$query = $this->db->get();
		return $query->result_array();
}
//------------------------------------------------------edit aritist video----------------------------------------------------------------------------
function get_details_normal_video($video_id)
{
	$this->db->select('*');
		$this->db->from('stream_artist_video_album');
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 
}

function update_normal_video($video_id,$data)
{
	
	$this->db->where('video_id', $video_id);
		$this->db->update('stream_artist_video_album',$data);
		//echo $this->db->last_query();die;
	
}
//-----------------------------------------------------edit rcorded video--------------------------------------------------------------------------------
function get_details_r_video($video_id)
{
	$this->db->select('*');
		$this->db->from('stream_recorded_video');
		$this->db->where('recorded_v_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 
}

function update_r_video($video_id,$data)
{
	
	$this->db->where('recorded_v_id', $video_id);
		$this->db->update('stream_recorded_video',$data);
		//echo $this->db->last_query();die;
	
}

/***************************************************************************************************************************************************************************/
function get_artist_income($artist_id){
	//$current_date = date("Y-m-d");
	
	//$end_date = date("Y-m-d", strtotime("-90 days"));
	
	$this->db->select('*');
	$this->db->from('stream_payment_details');
	$this->db->join('stream_recorded_video', 'stream_payment_details.video_id = stream_recorded_video.recorded_v_id' ,'inner');
	$this->db->join('stream_user', 'stream_payment_details.user_id = stream_user.user_id', 'inner');
	
	$this->db->where('stream_payment_details.artist_id',$artist_id);
	//$this->db->where('payment_type','');
	//$this->db->group_by('order_no');
	if(isset($_GET['from_date']) && isset($_GET['to_date'])){
		
		$from_date= date("Y-m-d",strtotime($_GET['from_date']));
	 $to_date=date("Y-m-d",strtotime($_GET['to_date']));
		
		
		
		$this->db->where('stream_payment_details.date >=',$from_date);
	$this->db->where('stream_payment_details.date <=',$to_date);
		
		
		
		
	}

$query=$this->db->get();
			//echo $this->db->last_query();
			
			return $query->result_array();


}


function total_amount($artist_id)
{
	$this->db->select('SUM(stream_payment_details.artist_charge)as total');
		$this->db->from('stream_payment_details');
		$this->db->where('stream_payment_details.artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array(); 
}


function total_amount_recorded($artist_id)
{
	$this->db->select('SUM(stream_payment_details.artist_charge)as total');
		$this->db->from('stream_payment_details');
		$this->db->where('stream_payment_details.artist_id',$artist_id);
		$this->db->where('stream_payment_details.payment_type','Recorded Video');
		$query = $this->db->get();
		return $query->result_array(); 
}


function total_amount_streaming($artist_id)
{
	$this->db->select('SUM(stream_payment_details.artist_charge)as total');
		$this->db->from('stream_payment_details');
		$this->db->where('stream_payment_details.artist_id',$artist_id);
		$this->db->where('stream_payment_details.payment_type','Streaming Video');
		$query = $this->db->get();
		return $query->result_array(); 
}




function artist_name($artist_id)
{
	$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array(); 
}


/*************************************************************************************************************************************************************************/
function get_user_purchase_list($user_id){
	//$current_date = date("Y-m-d");
	
	//$end_date = date("Y-m-d", strtotime("-90 days"));
	
	$this->db->select('*');
	$this->db->from('stream_payment_details');
	$this->db->join('stream_recorded_video', 'stream_payment_details.video_id = stream_recorded_video.recorded_v_id', 'inner');
	$this->db->join('stream_artist', 'stream_payment_details.artist_id = stream_artist.artist_id', 'inner');
	$this->db->where('stream_payment_details.user_id',$user_id);
	//$this->db->where('payment_type','');
	//$this->db->group_by('order_no');
	
			$query=$this->db->get();
			//echo $this->db->last_query();
			return $query->result_array();
}

/***********************************************************************************************************************************/

function get_message_list($video_id)
{
	$this->db->select('*');
		$this->db->from('stream_message_chat');
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 
}

/********************************************************************************************************************************/

function get_detail_user_img($user_id){
	
	
					$this->db->select('image,name');
					$this->db->from('stream_user');
					$this->db->where('user_id',$user_id);
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}
	
	function get_detail_artist_img($artist_id){
	
	
					$this->db->select('image,name');
					$this->db->from('stream_artist');
					$this->db->where('artist_id',$artist_id);
				
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}


function delete_message_video($message_id)
	{
		$this->db->where('message_id', $message_id);
        $this->db->delete('stream_message_chat');
		return true;
	}

function get_message_by_id($message_id){
	
	
					$this->db->select('*');
					$this->db->from('stream_message_chat');
					$this->db->where('message_id',$message_id);
				
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}

function update_message($id,$data)
	{
		
		$this->db->where('message_id', $id);
		$this->db->update('stream_message_chat', $data);
		return $id;
	}


function insert_admin_video($data)
	{
		$insert = $this->db->insert('stream_video_admin', $data);
		return $this->db->insert_id();
	}


function get_admin_video_list(){
	
	
					$this->db->select('*');
					$this->db->from('stream_video_admin');
					
				
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}

function delete_admin_video($id)
{
		$this->db->where('id', $id);
        $this->db->delete('stream_video_admin');
		return true;
}
/****************************************************************************************************************/

function get_video_details_by_id($id){
	
	
					$this->db->select('*');
					$this->db->from('stream_video_admin');
					$this->db->where('id',$id);
				
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}

function update_video($id,$data)
	{
		
		$this->db->where('id', $id);
		$this->db->update('stream_video_admin', $data);
		return $id;
	}

/***************************************************************************************************************************************************************************/

function get_all_artist_followers($artist_id){
	
	
					$this->db->select('*');
					$this->db->from('stream_artist_follow');
				    $this->db->join('stream_user','stream_user.user_id=stream_artist_follow.user_id');
					$this->db->where('stream_artist_follow.artist_id',$artist_id);
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}


function total_followers($artist_id){
	
	
					$this->db->select('*');
					$this->db->from('stream_artist_follow');
				  
					$this->db->where('artist_id',$artist_id);
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}


function get_all_user_following($user_id){
	
	
					$this->db->select('*');
					$this->db->from('stream_artist_follow');
				    $this->db->join('stream_artist','stream_artist.artist_id=stream_artist_follow.artist_id');
					$this->db->where('stream_artist_follow.user_id',$user_id);
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}



function total_following($user_id){
	
	
					$this->db->select('*');
					$this->db->from('stream_artist_follow');
				  
					$this->db->where('user_id',$user_id);
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
	
	}

/********************************************04.09.17**************************************/
function get_category_type()
    {
		$this->db->select('*');
		$this->db->from('stream_category');
		$this->db->where('status','Active');
		$query = $this->db->get();
	//	echo $this->db->last_query(); die;
		return $query->result_array(); 	
    }
/*******************************dashboard**************************************/
function get_all_images()
	       {
			$this->db->select('*');
			$this->db->from('stream_artist_image_album');
			
			
			$query = $this->db->get();
			return $query->result_array(); 	
		}
		
		
function get_all_normal_videos()
	       {
			$this->db->select('*');
			$this->db->from('stream_artist_video_album');
			
			
			$query = $this->db->get();
			return $query->result_array(); 	
		}
function get_all_recorded_videos()
	       {
			$this->db->select('*');
			$this->db->from('stream_recorded_video');
			
			$this->db->where('video_type', 'Recorded');
			$query = $this->db->get();
			return $query->result_array(); 	
		}
/***************************************************************05.09.17********************************************************/
function get_all_account_list()
    {
		
		$this->db->select('*');
		$this->db->from('stream_admin_login');
		$query = $this->db->get();
		//echo $this->db->last_query(); die;
		return $query->result_array(); 	
    }
function update_account($admin_id,$data)
	{
		
		
		$this->db->where('admin_id', $admin_id);
		$this->db->update('stream_admin_login', $data);
		
		return $admin_id;
		
	}	
function get_admin_detail($admin_id)
    {
		$this->db->select('*');
		$this->db->from('stream_admin_login');
		$this->db->where('admin_id', $admin_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
function delete_account($id)
	{
		$this->db->where('admin_id', $id);
        $this->db->delete('stream_admin_login');
		return true;
	}
	
/***************************************emoji***********************************************************/	
	function get_emoji()
    {
		$this->db->select('*');
		$this->db->from('stream_emoji');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	function add_emoji($data)
	{
		$insert = $this->db->insert('stream_emoji', $data);
		return $this->db->insert_id();
	}
	  function update_emoji($emoji_id,$data)
	{
		
		
		$this->db->where('emoji_id', $emoji_id);
		$this->db->update('stream_emoji', $data);
		
		return $slider_id;
		
	}	
	  function get_emoji_detail($emoji_id)
    {
		$this->db->select('*');
		$this->db->from('stream_emoji');
		$this->db->where('emoji_id', $emoji_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	 function delete_emoji($emoji_id)
	{
		
		$this->db->where('emoji_id', $emoji_id);
        $this->db->delete('stream_emoji');
		
		}
	
/**************************************************************************************************/	
	
	function view_all_photos()
    {
		$this->db->select('*,stream_artist_image_album.image as photo_image');
		$this->db->from('stream_artist_image_album');
		$this->db->join('stream_artist','stream_artist.artist_id=stream_artist_image_album.artist_id');
		
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	
	
	 function delete_photo_album($image_id)
	{
		
		$this->db->where('image_id', $image_id);
        $this->db->delete('stream_artist_image_album');
		
		}
	
	function view_all_normal_videos()
    {
		$this->db->select('*');
		$this->db->from('stream_artist_video_album');
		$this->db->join('stream_artist','stream_artist.artist_id=stream_artist_video_album.artist_id');
		
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	
	
	 function delete_video_album($video_id)
	{
		
		$this->db->where('video_id', $video_id);
        $this->db->delete('stream_artist_video_album');
		
		}
		
		
		
		function view_all_recorded_videos()
    {
		$this->db->select('*');
		$this->db->from('stream_recorded_video');
		$this->db->join('stream_artist','stream_artist.artist_id=stream_recorded_video.artist_id');
		$this->db->join('stream_category','stream_category.category_id=stream_recorded_video.category_type');
		$this->db->where('stream_recorded_video.video_type','Recorded');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	
	
	 function delete_recorded_video_album($recorded_v_id)
	{
		
		$this->db->where('recorded_v_id', $recorded_v_id);
        $this->db->delete('stream_recorded_video');
		
		}
		
/*****************************************************08.09.17************************/
function check_email_id($email_id){
						$this->db->select('*');
						$this->db->from('stream_admin_login');
						$this->db->where("admin_email",$email_id);
						$k=$this->db->get();
						$result = $k->num_rows();
						if($result==0)
						{
							return false;
						}
						else
						{
							return true;
							
						}	
						}
						
	
function get_email_id(){
				$this->db->select('setting_value');
				$this->db->from('stream_setting');
				$this->db->where('setting_key','form_email');
				$query=$this->db->get();
				return $query->result_array();	
		}	
	
	
	
	/*************************************************************************************************************/
	
	function get_add_price_setting()
    {		
	
		$this->db->select('*');
		$this->db->from('stream_add_setting');
		
		
		$query = $this->db->get();
		return $query->result_array(); 	
    }
function get_add_price_detail($add_id)
	{
		$this->db->select('*');
		$this->db->where('add_id', $add_id);
		$this->db->from('stream_add_setting');
		$query_customer = $this->db->get();
		return $query_customer->result_array(); 
		
	}
	function update_add_price_detail($add_id,$data)
	{
		$this->db->where('add_id', $add_id);
		$this->db->update('stream_add_setting', $data);
		return $setting_id;
	}
	
public function get_price($page_postion)
	{
		$this->db->select('*');
		$this->db->from('stream_add_setting');
		$this->db->where('page_postion',$page_postion);
		$query = $this->db->get();
		return $query->result_array(); 		
	}		
	
	
	
	
	
	
	
}
?>