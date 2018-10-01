<?php
class Module extends CI_Model 
{
    function __construct()
    {
		
        parent::__construct();
		$this->load->database();
    }
	
/****************************************************************************/	
	function check_email_id($email){
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where("email",$email);
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
	function add_users($data){	
	
		$insert = $this->db->insert('stream_artist',$data);
	
			//echo $insert ; die;
	    return $insert;	
		
			
		}
		function get_email_id(){
				$this->db->select('setting_value');
				$this->db->from('stream_setting');
				$this->db->where('setting_key','form_email');
				$query=$this->db->get();
				return $query->result_array();	
		}
		function check_viewer_email_id($email){
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where("user_email",$email);
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
		
		function add_viewers_users($data){	
	
		$insert = $this->db->insert('stream_user',$data);
	
			//echo $insert ; die;
	    return $insert;	
		
			
		}
/************************************************************************/		
	function user_valid($email,$password){
		 $this->db->select('*');
		 $this->db->from('stream_artist');
		 $this->db->where('email',$email);
		 $this->db->where('password',$password);
		$this->db->where('status','Active');
		
		$query = $this->db->get();
		$result = $query->num_rows();
		if($result==0)
		{
			return false;
		}
		else
		{
			$data = $query->result_array();
			$id=$data[0]['artist_id'];
			$this->session->set_userdata('artist_id', $id);
			$this->session->set_userdata('type', 'Artist');
			$this->session->set_userdata('is_logged_in', TRUE);
			return true;
		}
	}
		
		
		
		
		
		
		function user_not_valid($email,$password)
	{
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('status','Pending');
		
		$query = $this->db->get();
	
		
		$result = $query->num_rows();
		if($result==0)
		{
			
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
		function user_valid_viewer($email,$password){
		 $this->db->select('*');
		 $this->db->from('stream_user');
		 $this->db->where('user_email',$email);
		 $this->db->where('user_password',$password);
		$this->db->where('user_status','Active');
		
		$query = $this->db->get();
		$result = $query->num_rows();
		if($result==0)
		{
			return false;
		}
		else
		{
			$data = $query->result_array();
			$id=$data[0]['user_id'];
			$this->session->set_userdata('user_id', $id);
			$this->session->set_userdata('type', 'User');
			$this->session->set_userdata('is_logged_in', TRUE);
			return true;
		}
	}
		
		
		
		
		
		
		function user_not_valid_viewer($email,$password)
	{
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);
		$this->db->where('user_status','Pending');
		
		$query = $this->db->get();
		
		$result = $query->num_rows();
		if($result==0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
/*****************************************************************************************************************/
	function get_cat_name($cat_id){
						$this->db->select('*');
						$this->db->from('stream_category');
						$this->db->where('category_id',$cat_id);
						$query=$this->db->get();
						return $query->result_array();
			
			
			}
	
	function get_sub_cat_list_parent($cat_id,$per_page='',$limit_end=''){
		$this->db->select('*');
		$this->db->from('stream_category');
		$this->db->where('parent_id',$cat_id);
		$this->db->where('status','Active');
		
		if(isset($_GET['sort_by_ddl']))
			{
			

if($_GET['sort_by_ddl']=='a_z')
{

$this->db->order_by('category_name','ASC');


}
if($_GET['sort_by_ddl']=='z_a')
{

$this->db->order_by('category_name','desc');


}




}
		
		
		
			if($per_page){
					$this->db->limit($per_page,$limit_end);
				}
		$query=$this->db->get();
		//echo $this->db->last_query();die;
		return $query->result_array();
		
		
		}	
		
		
	function get_detail($category_id){
						$this->db->select('*');
						$this->db->from('stream_category');
						$this->db->where('category_id',$category_id);
						$query=$this->db->get();
						return $query->result_array();
				
				
				}
	function get_artist_detail($user_id){
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('artist_id', $user_id);
		$query=$this->db->get();
	
		return $query->result_array();	
		
		}
		
			function get_user_detail($user_id){
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where('user_id', $user_id);
		$query=$this->db->get();
		return $query->result_array();	
		
		}
		
		
		
		
		
public function update_edit_portfolio($user_id,$data)
	{
	$this->db->where('artist_id',$user_id);
	$this->db->update('stream_artist',$data);
	//echo $this->db->last_query(); die;
	
	return true;
	}
	function setting_value($id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_setting');
		$this->db->where('setting_key',$id);
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array(); 	
    }
    
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
		
			function store_usr_img($data){
		$insert = $this->db->insert('stream_artist_image_album',$data);
		//$this->
			//echo $insert ; die;
		return $this->db->insert_id();;	
			
			
			}
			
			function get_image_data($user_id){
				$query = $this->db->query("SELECT *, COUNT(IFNULL(stream_photo_view.image_id, 1))as total  FROM (`stream_artist_image_album`) Left JOIN `stream_photo_view` ON `stream_artist_image_album`.`image_id` = `stream_photo_view`.`image_id` WHERE `stream_artist_image_album`.`artist_id` = '$user_id' GROUP BY `stream_artist_image_album`.`image_id`  ORDER BY `total` desc");
				

						$data = array();
						if($query !== FALSE && $query->num_rows() > 0){
							$data = $query->result_array();
						}

						return $data;
				}
		function get_video_data($user_id){
				
						$query = $this->db->query("SELECT stream_artist_video_album.video_id,stream_artist_video_album.artist_id,stream_artist_video_album.video_name,stream_artist_video_album.video_title, COUNT(IFNULL(stream_video_view.video_id, 1))as total  FROM (`stream_artist_video_album`) Left JOIN `stream_video_view` ON `stream_artist_video_album`.`video_id` = `stream_video_view`.`video_id` WHERE `stream_artist_video_album`.`artist_id` = '$user_id' GROUP BY `stream_artist_video_album`.`video_id`  ORDER BY `total` desc");

			return $query->result_array();	
					
						
				}
				function get_image_name($image_id){
				
				$this->db->select('*');
						$this->db->from('stream_artist_image_album');
						$this->db->where('image_id',$image_id);
						$query=$this->db->get();
						return $query->result_array();
				}
				
				function delete_image($id){
					$this->db->where('image_id', $id);
      				$this->db->delete('stream_artist_image_album');
		
					}
					
	/************************************from bittu 24.6.17*****************************************************/				
		function store_usr_pro_img($user_id,$data){
		$this->db->where('user_id',$user_id);
		$this->db->update('stream_user',$data);
	
		return true;	
			
			
			
			}
			
			
		function update_edit_user_profile($user_id,$data){
		$this->db->where('user_id',$user_id);
		$this->db->update('stream_user',$data);
	
		return true;	
			
			
			
			}
			
		function store_ars_pro_img($user_id,$data){
		$this->db->where('artist_id',$user_id);
		$this->db->update('stream_artist',$data);
	
		return true;	
			
			
			
			}
	function update_image_name($id,$data){
		$this->db->where('image_id',$id);
		$this->db->update('stream_artist_image_album',$data);
		
		
		
		}
		
		function get_cat_detail_user($category_id,$per_page='',$limit_end=''){
			$this->db->select('*,stream_artist.artist_id,count(stream_artist_view.artist_id) as total');
			$this->db->from('stream_artist');
			$this->db->join('stream_artist_view','stream_artist.artist_id = stream_artist_view.artist_id','left');
			if($category_id!=''){
			$this->db->where('category_type',$category_id);
			}
			if($_GET['search']!=''){
				$this->db->like('stream_artist.name',$_GET['search']);
				$this->db->or_like('stream_artist.about_me',$_GET['search']);
				$this->db->or_like('stream_artist.artist_tag',$_GET['search']);
				
				
				
				}
			$this->db->where('status','Active');
			$this->db->group_by('stream_artist.artist_id');
			$this->db->order_by('total',desc);
			if($per_page){
					$this->db->limit($per_page,$limit_end);
				}
			$query=$this->db->get();
	
	
			return $query->result_array();	
			
			}

		function get_filtering_list($body_type,$intertest,$orientation,$hair_color,$ethnicity,$eye_color,$id,$age,$pagination_length='',$pagination_start=''){
				
			
				$body_type=explode(",",$body_type);
				
				$age=explode(",",$age);
			
				$intertest=explode(",",$intertest);
				
				$orientation=explode(",",$orientation);
				
				$hair_color=explode(",",$hair_color);
				
				$ethnicity=explode(",",$ethnicity);
			
				$eye_color=explode(",",$eye_color);
			
				$num_intertest = count($intertest);
				$num_age = count($age);
				$this->db->select('*,count(stream_artist_view.artist_id) as total');
				$this->db->from('stream_artist');
				$this->db->join('stream_artist_view','stream_artist.artist_id = stream_artist_view.artist_id','left');
				$this->db->join('stream_schedule','stream_artist.artist_id = stream_schedule.artist_id','left');
				if($id!='' && $id!='undefined'){
				$this->db->where('category_type',$id);
				}
				if($_GET['search_name']!=''){
					$search=$_GET['search_name'];
				 $where = "(`name` LIKE '%$search%' OR `about_me` LIKE '%$search%' OR `artist_tag` LIKE '%$search%')";
					$this->db->where($where);
					}
				
				
		/*		if($_GET['intertest']!=''){
					
					 $intertest=array_filter($intertest);
					 foreach($intertest as $key){
						$aNew[] = '%'.$key.'%';
					}
					
				
					$this->db->where_in('interested_in',$aNew);
			
				}
				*/
				if($_GET['intertest']!=''){
					
				 $where = "(`interested_in` LIKE '%$intertest[0]%'";
				for($i=1;$i<$num_intertest;$i++)
				{
					
				if($intertest[$i]!=''){	//echo  $eye_color[$i];
				$where.= " OR `interested_in` LIKE '%$intertest[$i]%'";
				}
				}
				$where.=")";
				 
				 $this->db->where($where);
				}
				
				
				if($_GET['age']!=''){
					
					$age_arr = explode("-",$age[0]);
			 $age_first=date('Y-m-d', strtotime("- $age_arr[0] year"));
					
			$age_last=date('Y-m-d', strtotime("- $age_arr[1] year"));
			 $where = "( (`birth_date` <= '$age_first' AND  `birth_date` >= '$age_last') ";
			
				for($i=1;$i<$num_age;$i++)
				{
					if($age[$i]!=''){	
						$age_arr = explode("-",$age[$i]);
			 $age_first=date('Y-m-d', strtotime("- $age_arr[0] year"));
					
			$age_last=date('Y-m-d', strtotime("- $age_arr[1] year"));
			
			 $where.= "OR (`birth_date` <= '$age_first' AND  `birth_date` >= '$age_last') ";
				
					//echo  $eye_color[$i];
					
				
					}
				}
					
				$where.=")";	
			 	 $this->db->where($where);
				}
				if($_GET['eye_color']!=''){
	              $eye_color=array_filter($eye_color);
				  	$this->db->where_in('eyecolor',$eye_color);	
				}
				if($_GET['from_date']!=''){
	            $date_time=explode(' ',$_GET['from_date']);
				$date=$date_time[0];
				$time=$date_time[1];
				$from_date=date("Y-m-d",strtotime($date));
				$from_time=date('g:i a', strtotime($time));
				
				//date("Y-m-d",strtotime($_GET['from_date']));
				
				  	$this->db->where('stream_schedule.date >=',$from_date);	
					//$this->db->or_where('stream_schedule.time >=',$from_time);	
				}
					if($_GET['to_date']!=''){
						
				$date_time_to=explode(' ',$_GET['to_date']);
				$date_to=$date_time_to[0];
				$time_to=$date_time_to[1];
				$to_date=date("Y-m-d",strtotime($date_to));
				$to_time=date('g:i a', strtotime($time_to));
						
			
	            
				  	$this->db->where('stream_schedule.date <=',$to_date);
					//$this->db->or_where('stream_schedule.time <=',$to_time);	
				}
				if($_GET['ethnicity']!=''){
				   $ethnicity=array_filter($ethnicity);
					$this->db->where_in('ethnicity',$ethnicity);
				}
					
				if($_GET['body']!=''){
					$body_type=array_filter($body_type);
					$this->db->where_in('body_type',$body_type);
				
				}
				
				if($_GET['hair_color']!=''){
					$hair_color=array_filter($hair_color);
				$this->db->where_in('haircolor',$hair_color);
				
				}
					
				if($_GET['orientation']!=''){
					$orientation=array_filter($orientation);
				$this->db->where_in('orientation',$orientation);
				
				}
					
				if($_GET['online_status']=='Online'){
					
				$this->db->where('online_status',$_GET['online_status']);
				
				}
				
				if($pagination_length!='')
		{
		$this->db->limit($pagination_length,$pagination_start);
		}
				$this->db->group_by('stream_artist.artist_id');
				$this->db->order_by('total',desc);
				$this->db->where('status','Active');
				
				$query=$this->db->get();
				
	//echo $this->db->last_query();
				return $query->result_array();	
				}
		
		/*******************************************22.6.17*********************************/
		
		function get_user_portfolio($user_id){
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('artist_id',$user_id);
		$query=$this->db->get();
		return $query->result_array();	
		
	
	}
/*********************************************/
public function update_edit_profile($user_id,$data)
	{
	$this->db->where('artist_id',$user_id);
	$this->db->update('stream_artist',$data);
	//echo $this->db->last_query(); die;
	
	return true;
	}
	function get_artist_profile_detail($user_id){
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('artist_id', $user_id);
		$query=$this->db->get();
	//echo $this->db->last_query(); die;
		return $query->result_array();	
		
		}
		
			function get_user_profile_detail($user_id){
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where('user_id', $user_id);
		$query=$this->db->get();
		//echo $this->db->last_query(); die;
		return $query->result_array();	
		
		}
		
		
		function get_user_profile($user_id){
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('artist_id',$user_id);
		$query=$this->db->get();
		return $query->result_array();	
		
	
	}
		
			
					function get_cat_list(){
						$this->db->select('*');
						$this->db->from('stream_category');
                                                $this->db->order_by("category_name asc");
						$query=$this->db->get();
						return $query->result_array();
			
			
			}
	function check_password($current_password,$user_id){
		$this->db->select('password');
		$this->db->where('password', $current_password);
		$this->db->where('artist_id', $user_id);
		$this->db->from('stream_artist');
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	function user_check_password($current_password,$user_id){
		$this->db->select('user_password');
		$this->db->where('user_password', $current_password);
		$this->db->where('user_id', $user_id);
		$this->db->from('stream_user');
		$query = $this->db->get();
		return $query->num_rows();
	}
	function update_password_details($data,$user_id){
		$this->db->where('artist_id',$user_id);
		$this->db->update('stream_artist', $data); 
		return true;
		}
		
		
		function update_password_user_detail($data,$user_id){
		$this->db->where('user_id',$user_id);
		$this->db->update('stream_user', $data); 
		return true;
		}
/**********************************************************************/
function page_content($id)
{
$this->db->select('*');
$this->db->from('stream_pagecontent');
//$this->db->limit(6);
$this->db->where('name',$id); 
$query=$this->db->get();

//return $query->row()->setting_value;
return $query->result_array();
}
function page_all_page_content()
{
    $this->db->select('page_id,page_title,status');
    $this->db->from('stream_pagecontent');
    $this->db->where('status',"active");
    $query=$this->db->get();
    return $query->result_array();    
}
		
		
		
	function insert_video($data){
			$insert = $this->db->insert('stream_artist_video_album',$data);
		//$this->
			//echo $insert ; die;
		return $this->db->insert_id();
		
		}
		
		
		function get_artist_video($artist_id,$limit_start,$limit_end){
			$this->db->select('*');
			$this->db->from('stream_artist_video_album');
			$this->db->where('artist_id',$artist_id);
		 if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}
			
			
			
			
			function insert_photo_view($data)
	{
		$insert = $this->db->insert('stream_photo_view', $data);
	//	echo $this->db->last_query();
		//return $this->db->insert_id();
	}
	
	function get_image_view($image_id,$ip_address,$date){
			$this->db->select('*');
			$this->db->from('stream_photo_view');
			$this->db->where('image_id',$image_id);
			$this->db->where('ip_address',$ip_address);
			$this->db->where('date',$date);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}
			
			
			
			
	function artist_forget_password($member_email)
	{
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where("email",$member_email);
		$this->db->where('status', 'Active');
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
	
	
		function user_forget_password($member_email)
	{
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where("user_email",$member_email);
		$this->db->where('user_status', 'Active');
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
	 
	 
	function update_forgot_password_link($member_email,$data)
	{
		$this->db->where('email', $member_email);
		$this->db->update('stream_artist', $data); 
		return true;
	}
	function update_forgot_password_link_user($user_email,$data)
	{
		$this->db->where('user_email', $user_email);
		$this->db->update('stream_user', $data); 
		return true;
	}
	function get_admin_email()
    {
		$this->db->select('*');
		$this->db->where("setting_key","admin_email");
		$this->db->from('stream_setting');
		$query = $this->db->get();
		//$admin_email=$query->row()->setting_value;
		return $query->result_array();
	}
	
	 function user_forget_password_user($user_email)
	{
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where("user_email",$user_email);
		
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
	 
	 
function update_forgot_new_password($hid_id,$data_to_store)
	{
		$this->db->where('forgot_password_id',$hid_id);
		$this->db->update('stream_artist',$data_to_store); 
		//echo $this->db->last_query();die;
		return true;
	}
function update_forgot_new_password_user($hid_id,$data_to_store)
	{
		$this->db->where('forgot_password_id',$hid_id);
		$this->db->update('stream_user',$data_to_store); 
		//echo $this->db->last_query();die;
		return true;
	}
	
		
	function update_check_artist($hid){
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where("forgot_password_id",$hid);
		$this->db->where('status', 'Active');
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
		
			
	function update_check_user($hid){
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where("forgot_password_id",$hid);
		$this->db->where('user_status', 'Active');
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
	
function get_related_performer(){
			 $query = $this->db->query("SELECT stream_artist.artist_id,stream_artist.name,stream_artist.image,count(IFNULL(stream_artist_view.artist_id, 1)) as total FROM (`stream_artist`) left JOIN `stream_artist_view` ON `stream_artist`.`artist_id` = `stream_artist_view`.`artist_id` WHERE  `status` = 'Active' group by stream_artist.artist_id ORDER BY total DESC Limit 12");

			return $query->result_array();	
	}
	
	function get_online_performer(){
		 $query = $this->db->query("SELECT stream_artist.artist_id,stream_artist.name,stream_artist.birth_date,stream_artist.image,count(IFNULL(stream_artist_view.artist_id, 1)) as total FROM (`stream_artist`) left JOIN `stream_artist_view` ON `stream_artist`.`artist_id` = `stream_artist_view`.`artist_id` WHERE `online_status` = 'Online' AND `status` = 'Active' group by stream_artist.artist_id ORDER BY total DESC");

			return $query->result_array();	
		
		}
	
	function get_artist_view($artist_id,$ip_address,$date){
			$this->db->select('*');
			$this->db->from('stream_artist_view');
			$this->db->where('artist_id',$artist_id);
			$this->db->where('ip_address',$ip_address);
			$this->db->where('date',$date);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}
			
	function insert_artist_view($data)
	{
		$insert = $this->db->insert('stream_artist_view', $data);
	
		//return $this->db->insert_id();
	}
	
	function insert_video_view($data)
	{
		$insert = $this->db->insert('stream_video_view', $data);
	//	echo $this->db->last_query();
		//return $this->db->insert_id();
	}
	
	function get_video_view($video_id,$ip_address,$date){
			$this->db->select('*');
			$this->db->from('stream_video_view');
			$this->db->where('video_id',$video_id);
			$this->db->where('ip_address',$ip_address);
			$this->db->where('date',$date);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}
			
			
	function get_video_name($video_id){
		$this->db->select('*');
			$this->db->from('stream_artist_video_album');
			$this->db->where('video_id',$video_id);
			$query=$this->db->get();
	
			return $query->result_array();	
		
		}
		
		function get_top_video(){
		//	echo "prueba de que se subio el video";
			 $this->db->select('stream_artist_video_album.video_id,stream_artist_video_album.artist_id,stream_artist_video_album.video_name,stream_artist_video_album.video_title, COUNT(stream_video_view.video_id) as total,
			 stream_recorded_video.image');
					$this->db->from('stream_artist_video_album');
					$this->db->join("stream_recorded_video","stream_recorded_video.artist_id=stream_artist_video_album.artist_id");
					$this->db->join('stream_video_view', 'stream_artist_video_album.video_id = stream_video_view.video_id', 'inner');
				
					 $this->db->group_by('stream_video_view.video_id'); 
					 
					 $this->db->limit(8);
 					$this->db->order_by('total', 'desc'); 
					
					$query=$this->db->get();
				//	echo $this->db->last_query();
					return $query->result_array();	
			
			}
			
			
			
			
			
		function confirm_user($salted){
			$data = array(
						  'activation_id' =>'',
						  'user_status'=>'Active'
						  );
			$this->db->where('activation_id',$salted);
			$this->db->update('stream_user',$data);
				//echo $this->db->last_query();
			return true;
			
			
			}
			
			function confirm_artist($salted){
			$data = array(
						  'activation_id' =>'',
						  'status'=>'Active'
						  );
			$this->db->where('activation_id',$salted);
			$this->db->update('stream_artist',$data);
			//	echo $this->db->last_query();
			return true;
			
			
			}
/*********************************----------------------------------------souvik(4/7/2017)***/
function get_artist_payment($id){
		$this->db->select('*');
			$this->db->from('stream_artist');
			$this->db->where('artist_id',$id);
			$query=$this->db->get();
	
			return $query->result_array();	
		
		}

function get_artist_recorded_video($artist_id,$limit_start,$limit_end){
			$this->db->select('*');
			$this->db->from('stream_recorded_video');
			$this->db->where('artist_id',$artist_id);
		 if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}

function get_recorded_video_id($id){
			$this->db->select('*');
			$this->db->from('stream_recorded_video');
			$this->db->where('recorded_v_id',$id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}


public function update_recorded_video($recorded_v_id,$data)
	{
	$this->db->where('recorded_v_id',$recorded_v_id);
	$this->db->update('stream_recorded_video',$data);
	//echo $this->db->last_query(); die;
	
	return true;
	}
/**********************************************************************************************************************************/
function get_recorded_video_data($user_id) {
        //echo "SELECT stream_recorded_video.recorded_v_id,stream_recorded_video.artist_id,stream_recorded_video.recorded_video_name,stream_recorded_video.recorded_v_overview,stream_recorded_video.recorded_v_title,stream_recorded_video.video_tags, COUNT(IFNULL(stream_recorded_video_view.recorded_v_id, 1))as total,stream_recorded_video.image  FROM (`stream_recorded_video`) Left JOIN `stream_recorded_video_view` ON `stream_recorded_video`.`recorded_v_id` = `stream_recorded_video_view`.`recorded_v_id` WHERE `stream_recorded_video`.`artist_id` = '$user_id'  AND `stream_recorded_video`.`video_type` = 'Recorded'   GROUP BY `stream_recorded_video`.`recorded_v_id`  ORDER BY `total` desc";
        $query = $this->db->query("SELECT stream_recorded_video.recorded_v_id,stream_recorded_video.artist_id,stream_recorded_video.recorded_video_name,stream_recorded_video.recorded_v_overview,stream_recorded_video.recorded_v_title,stream_recorded_video.video_tags, COUNT(IFNULL(stream_recorded_video_view.recorded_v_id, 1))as total,stream_recorded_video.image  FROM (`stream_recorded_video`) Left JOIN `stream_recorded_video_view` ON `stream_recorded_video`.`recorded_v_id` = `stream_recorded_video_view`.`recorded_v_id` WHERE `stream_recorded_video`.`artist_id` = '$user_id'  AND `stream_recorded_video`.`video_type` = 'Recorded'   GROUP BY `stream_recorded_video`.`recorded_v_id`  ORDER BY `total` desc");

        return $query->result_array();
    }

    function get_recorded_video_name($recorded_v_id){
		$this->db->select('*');
			$this->db->from('stream_recorded_video');
			$this->db->where('recorded_v_id',$recorded_v_id);
			$query=$this->db->get();
	
			return $query->result_array();	
		
		}


function insert_video_recorded_view($data)
	{
		$insert = $this->db->insert('stream_recorded_video_view', $data);
	//	echo $this->db->last_query();
		//return $this->db->insert_id();
	}

function get_video_recorded_view($video_id,$ip_address,$date){
			$this->db->select('*');
			$this->db->from('stream_recorded_video_view');
			$this->db->where('recorded_v_id',$video_id);
			$this->db->where('ip_address',$ip_address);
			$this->db->where('date',$date);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}
			
/***************************************************/

		
function get_add_user_details($page,$place)
	{
		
		$this->db->select('*');
		$this->db->from('stream_advertisement2');
		$where = "(`page` = '".$page."' AND `ad_place` = '".$place."')";
        $this->db->where($where);
		//$this->db->where('page',$page);
	//$this->db->where('page',$page);
		$this->db->where('advertisement_start_date <= curdate()');
		$this->db->where('advertisement_end_date >= curdate()');
		$this->db->where('advertisement_status','Active');
		$this->db->limit(2);
		$this->db->order_by('advertisement_id','DESC');
		$query=$this->db->get();
				//echo $this->db->last_query(); 

		return $query->result_array();
		
		
		}		
/**********************************************************6.7.2017****************************************************************************************************/
function get_pagecontent_details($id)
{
$this->db->select('*');
$this->db->from('stream_pagecontent');
//$this->db->limit(6);
$this->db->where('page_id',$id); 
$this->db->where('status','Active'); 
$query=$this->db->get();

//return $query->row()->setting_value;
return $query->result_array();
}

/**************************************************************************/


function check_video_paid($v_id,$u_id)
{
$this->db->select('*');
$this->db->from('stream_payment_details');
//$this->db->limit(6);
$this->db->where('video_id',$v_id); 
$this->db->where('user_id',$u_id); 
$query=$this->db->get();

//return $query->row()->setting_value;
return $query->result_array();
}	


function get_recorded_video_payment($id)
{
$this->db->select('*');
$this->db->from('stream_recorded_video');
//$this->db->limit(6);
$this->db->where('recorded_v_id',$id); 
//$this->db->where('status','Active'); 
$query=$this->db->get();

//return $query->row()->setting_value;
return $query->result_array();
}	



function table_payment_temporary($data_store)
	
	{
		$insert = $this->db->insert('stream_temp_payment',$data_store);
		return $this->db->insert_id();
	
	}
	
function delete_payment_from_temp($order_gen_id)
		{
			
			$this->db->where('order_no',$order_gen_id);
			$this->db->delete('stream_temp_payment');
			
			//echo $this->db->last_query(); die;
			
			return true;
			}
	
	
	
	function retrieve_temp_data($order_gen_id)
	{
	
		
					$this->db->select('*');
					$this->db->from('stream_temp_payment');
					$this->db->where('order_no',$order_gen_id);
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
		
		}
			

function amount_paid($data_store)
	
	{
		$insert = $this->db->insert('stream_payment_details',$data_store);
		//echo $this->db->last_query();die;
		return $this->db->insert_id();
	
	}
	
	
//-----------------------------------------slider image--------------------------------------
function slide_image()
    {
		
		$this->db->select('*');
		$this->db->from('stream_slider');
		$this->db->where('slider_status','Active');
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
/*****************************************************************************************************/
	function insert_chat($data_store)
	
	{
		$insert = $this->db->insert('stream_chat',$data_store);
		
		return $this->db->insert_id();
	
	}
	
	
	function get_messages($video_id)
	{
	
		
					$this->db->select('*');
					$this->db->from('stream_chat');
					
				
					$this->db->where('video_id',$video_id);
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
		
		}
	
	
	function get_user_chat($user_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	/****************************************************************************************/
	function check_expiry_user($user_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_payment_details');
		$this->db->where('user_id',$user_id);
		$this->db->where('user_type','User ');
		$this->db->where('payment_type','Feature');
		
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	
	public function update_the_order($order_no,$data)
	{
	$this->db->where('order_no',$user_id);
	$this->db->update('stream_payment_details',$data);
	//echo $this->db->last_query(); die;
	
	return true;
	}
	
	public function update_user($user_id,$data)
	{
	$this->db->where('user_id',$user_id);
	$this->db->update('stream_user',$data);
	//echo $this->db->last_query(); die;
	
	return true;
	}
	
/**-*************************************************************schedule time****************************************************************************************/	
function insert_schedule_artist($data_store)
	
	{
		$insert = $this->db->insert('stream_schedule',$data_store);
		
		return $this->db->insert_id();
	
	}	
function get_schedule_details($artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_schedule');
		$this->db->where('artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }	
	
function delete_scheduled($schedule_id)
		{
			
			$this->db->where('schedule_id',$schedule_id);
			$this->db->delete('stream_schedule');
			
			//echo $this->db->last_query(); die;
			
			return true;
			}
			
			
public function update_edit_schedule($schedule_id,$data)
	{
	$this->db->where('schedule_id',$schedule_id);
	$this->db->update('stream_schedule',$data);
	
	
	return true;
	}
/********************************************************************************************************************************/
	function get_category_name($category)
    {
		
		$this->db->select('*');
		$this->db->from('stream_category');
		$this->db->where('category_id',$category);
		$query = $this->db->get();
		return $query->result_array(); 	
    }	
	


function get_artist_video_album($video_id){
			$this->db->select('*');
			$this->db->from('stream_artist_video_album');
			$this->db->where('video_id',$video_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}
	
	
	
public function update_artist_video_album($video_id,$data)
	{
	$this->db->where('video_id',$video_id);
	$this->db->update('stream_artist_video_album',$data);
	
	
	return true;
	}
	

function delete_video_album_artist($v_id)
		{
			
			$this->db->where('video_id',$v_id);
			$this->db->delete('stream_artist_video_album');
			
			//echo $this->db->last_query(); die;
			
			return true;
			}
			
function delete_artist_record_video($v_id)
		{
			
			$this->db->where('recorded_v_id',$v_id);
			$this->db->delete('stream_recorded_video');
			
			//echo $this->db->last_query(); die;
			
			return true;
			}


function get_artist_video_by_search($search,$artist_id,$limit_start,$limit_end){
			$this->db->select('*');
			$this->db->from('stream_artist_video_album');
			$this->db->like('video_title',$search);
			$this->db->where('artist_id',$artist_id);
		 if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}

function get_artist_recorded_video_by_search($search,$artist_id,$limit_start,$limit_end){
			$this->db->select('*');
			$this->db->from('stream_recorded_video');
                        $this->db->join('view_total_views_video_recorded_by_artist','view_total_views_video_recorded_by_artist.artist_id = stream_recorded_video.artist_id and  view_total_views_video_recorded_by_artist.recorded_v_id = stream_recorded_video.recorded_v_id');
			$this->db->like('recorded_v_title',$search);
			$this->db->where('stream_recorded_video.artist_id',$artist_id);
		 if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
                        //echo $limit_start.",".$limit_end;
                     //   echo $this->db->last_query();
			

			$data = array();
			if($query !== FALSE && $query->num_rows() > 0){
				$data = $query->result_array();
			}

			return $data;	
			
			}
                        
 

function get_image_data_by_search($search,$artist_id){
			$this->db->select('*');
			$this->db->from('stream_artist_image_album');
			$this->db->like('image_name',$search);
			$this->db->where('artist_id',$artist_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}

function user_information_get($user_id){
			$this->db->select('*');
			$this->db->from('stream_user');
			$this->db->where('user_id',$user_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}	
			
function get_scheduled_time_artist($artist_id){
			$this->db->select('*');
			$this->db->from('stream_schedule');
			$this->db->where('artist_id',$artist_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}	
			
function schedule_details_payment($schedule_id){
			$this->db->select('*');
			$this->db->from('stream_schedule');
			$this->db->where('schedule_id',$schedule_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}		
			
function check_paid_not($schedule_id,$user_id){
			$this->db->select('*');
			$this->db->from('stream_payment_details');
			$this->db->where('video_id',$schedule_id);
			$this->db->where('user_id',$schedule_id);
			$this->db->where('payment_type','Stream Video');
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}		

/*********************************************************************************************************************************/	

function get_video_list_search($category_id,$limit_start,$limit_end){
//    var_dump($category_id);
//    var_dump($limit_start);
//    var_dump($limit_end);
			$this->db->select('*,stream_recorded_video.recorded_v_id,count(stream_recorded_video_view.recorded_v_id) as total, stream_recorded_video.image');
			$this->db->from('stream_recorded_video');
			$this->db->join('stream_recorded_video_view','stream_recorded_video.recorded_v_id = stream_recorded_video_view.recorded_v_id','left');
			$this->db->join('stream_artist','stream_artist.artist_id = stream_recorded_video.artist_id','left');
			
			$this->db->where('stream_recorded_video.category_type',$category_id);
			
			
			$this->db->where('recorded_v_status','Show');
			$this->db->group_by('stream_recorded_video.recorded_v_id');
			if($_GET['order_by']=='atoz'){
				$this->db->order_by('stream_recorded_video.recorded_v_title',asc);
				}
			if($_GET['order_by']=='ztoa'){
				$this->db->order_by('stream_recorded_video.recorded_v_title',desc);
				}
				
				if($_GET['order_by']=='newtoold'){
				$this->db->order_by('stream_recorded_video.video_date',desc);
				}
			if($_GET['order_by']=='oldtonew'){
				$this->db->order_by('stream_recorded_video.video_date',asc);
				}
			$this->db->order_by('total',desc);
			if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
			//echo $this->db->last_query();
			$data = array();
			if($query !== FALSE && $query->num_rows() > 0){
				$data = $query->result_array();
			}

			return $data;
			
			}


/*function get_search_list($category_id,$limit_start,$limit_end){
			$this->db->select('*,stream_recorded_video.recorded_v_id,count(stream_recorded_video_view.recorded_v_id) as total');
			$this->db->from('stream_recorded_video');
			$this->db->join('stream_recorded_video_view','stream_recorded_video.recorded_v_id = stream_recorded_video_view.recorded_v_id','left');
			
			$this->db->like('stream_recorded_video.recorded_v_title',$category_id);
			$this->db->or_like('stream_recorded_video.video_tags',$category_id);
			$this->db->or_like('stream_recorded_video.recorded_v_overview',$category_id);
			
			
			$this->db->where('recorded_v_status','Show');
			$this->db->group_by('stream_recorded_video.recorded_v_id');
			$this->db->order_by('total',desc);
			if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
			//echo $this->db->last_query();
			return $query->result_array();
			
			}*/

function get_search_list($limit_start,$limit_end){
  
			$this->db->select('*,stream_recorded_video.recorded_v_id,count(stream_recorded_video_view.recorded_v_id) as total, stream_recorded_video.image');
			$this->db->from('stream_recorded_video');
			$this->db->join('stream_recorded_video_view','stream_recorded_video.recorded_v_id = stream_recorded_video_view.recorded_v_id','left');
			$this->db->join('stream_artist','stream_recorded_video.artist_id = stream_artist.artist_id','inner');
			if(isset($_GET['search'])){
				$search=$_GET['search'];
				 $where = "(`stream_recorded_video`.`recorded_v_title` LIKE '%$search%' OR `stream_recorded_video`.`video_tags` LIKE '%$search%' OR `stream_recorded_video`.`recorded_v_overview` LIKE '%$search%' OR `stream_artist`.`name` LIKE '%$search%')";
					$this->db->where($where);
		/*	$this->db->like('stream_recorded_video.recorded_v_title',$category_id);
			$this->db->or_like('stream_recorded_video.video_tags',$category_id);
			$this->db->or_like('stream_recorded_video.recorded_v_overview',$category_id);
			$this->db->or_like('stream_artist.name',$category_id);*/
			
			}
			if(isset($_GET['type'])){
				if($_GET['type']!='All'){
				$this->db->where('video_type',$_GET['type']);
				}
				
			}
				if(isset($_GET['tag'])){
				if($_GET['tag']!=''){
				$this->db->like('stream_recorded_video.video_tags',$_GET['tag']);
				}
				
			}
			if($_GET['order_by']=='atoz'){
				$this->db->order_by('stream_recorded_video.recorded_v_title',asc);
				}
			if($_GET['order_by']=='ztoa'){
				$this->db->order_by('stream_recorded_video.recorded_v_title',desc);
				}
				
					if($_GET['order_by']=='newtoold'){
				$this->db->order_by('stream_recorded_video.video_date',desc);
				}
			if($_GET['order_by']=='oldtonew'){
				$this->db->order_by('stream_recorded_video.video_date',asc);
				}
			$this->db->where('recorded_v_status','Show');
			$this->db->group_by('stream_recorded_video.recorded_v_id');
			$this->db->order_by('total',desc);
			if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
//                        echo "aqui va el query";
			//echo $this->db->last_query(); echo "<br>";
			
			
			$data = array();
			if($query !== FALSE && $query->num_rows() > 0){
				$data = $query->result_array();
			}

			return $data;
			
			}

/*****************************************************************************************************************************/

function get_artist_id_video($v_id){
			$this->db->select('*');
			$this->db->from('stream_recorded_video');
			$this->db->where('recorded_v_id',$v_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}		

function get_artist_details($artist_id){
			$this->db->select('*');
			$this->db->from('stream_artist');
			$this->db->where('artist_id',$artist_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}		

function get_artist_details_category_wise(){
			$this->db->select('*');
			$this->db->from('stream_artist');
			$this->db->where('status','Active');
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}

function get_video_details_category_wise($category_type){
			$this->db->select('*');
			$this->db->from('stream_recorded_video');
			$this->db->join('stream_artist','stream_recorded_video.artist_id = stream_artist.artist_id','inner');
			$this->db->where('stream_recorded_video.category_type',$category_type);
			$this->db->where('stream_recorded_video.video_type','Recorded');
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}



function insert_message_chat($data_store)
	
	{
		$insert = $this->db->insert('stream_message_chat',$data_store);
		
		return $this->db->insert_id();
	
	}
	
	
	
	
	function insert_message_chat_artist($data_store)
	
	{
		$insert = $this->db->insert('stream_chat',$data_store);
		
		return $this->db->insert_id();
	
	}
	
	

function get_messages_chat($video_id)
	{
	
		
					$this->db->select('*');
					$this->db->from('stream_message_chat');
					$this->db->where('video_id',$video_id);
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
		
		}
		
		
/*************************************************************25.7.2017******************************************************************************************/		
		
	function checking_recorded_video_payment($video_id,$user_id){
			$this->db->select('*');
			$this->db->from('stream_payment_details');
			$this->db->where('video_id',$video_id);
			$this->db->where('user_id',$user_id);
			//$this->db->where('payment_type',$user_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}	
		
/***********************************************************************************/		
		
	function geting_meta_tags($page_name){
			$this->db->select('*');
			$this->db->from('stream_meta_tag');
			$this->db->where('page_name',$page_name);
			$this->db->where('meta_status','Active');
			//$this->db->where('payment_type',$user_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}	
			
	function insert_artist_follow($data){
		 $this->db->insert('stream_artist_follow',$data);
		
		}
		
	function get_artist_follow($artist_id,$user_id){
		
		$this->db->select('*');
			$this->db->from('stream_artist_follow');
			$this->db->where('artist_id',$artist_id);
			$this->db->where('user_id',$user_id);
			//$this->db->where('payment_type',$user_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
		
		}
		
		function artist_unfollow($artist_id,$user_id){
			
				$this->db->where('artist_id',$artist_id);
			$this->db->where('user_id',$user_id);
      		$this->db->delete('stream_artist_follow');
			}
			
		function get_image_album_data($artist_id){
			$this->db->select('*');
			$this->db->from('stream_artist_image_album');
			$this->db->where('artist_id',$artist_id);
			//$this->db->where('user_id',$user_id);
			//$this->db->where('payment_type',$user_id);
		
			$query=$this->db->get();
	
			return $query->result_array();	
			
			}
			
		function get_artist_followby_user($artist_id){
			
				$this->db->select('user_id');
			$this->db->from('stream_artist_follow');
			$this->db->where('artist_id',$artist_id);
			$query=$this->db->get();
			return $query->result_array();	
			
			}
			function insert_timeline($data){
				$this->db->insert('stream_timeline',$data);
				
				}

		function get_popular_recorded_video_old(){
			
			 $this->db->select('stream_recorded_video.recorded_v_id,stream_recorded_video.artist_id,stream_recorded_video.recorded_video_name,stream_recorded_video.recorded_v_overview,stream_recorded_video.recorded_v_title, COUNT(stream_recorded_video_view.recorded_v_id) as total');
					$this->db->from('stream_recorded_video');
					$this->db->join('stream_recorded_video_view', 'stream_recorded_video.recorded_v_id = stream_recorded_video_view.recorded_v_id', 'inner');
					 $this->db->group_by('stream_recorded_video_view.recorded_v_id'); 
					 $this->db->where('stream_recorded_video.video_type','Recorded');
					 $this->db->limit(8);
 					$this->db->order_by('total', 'desc'); 
					
					$query=$this->db->get();
					//echo $this->db->last_query();
					//die;
					return $query->result_array();	
			
			}
		
			
			function get_latest_recorded_video(){
			
			 $this->db->select('*,stream_recorded_video.recorded_v_id,stream_recorded_video.artist_id,stream_recorded_video.recorded_video_name,stream_recorded_video.recorded_v_overview,stream_recorded_video.recorded_v_title,stream_recorded_video.video_tags, COUNT(stream_recorded_video_view.recorded_v_id) as total,stream_recorded_video.image');
					$this->db->from('stream_recorded_video');
					$this->db->join('stream_recorded_video_view', 'stream_recorded_video.recorded_v_id = stream_recorded_video_view.recorded_v_id', 'inner');
					$this->db->join('stream_artist','stream_recorded_video.artist_id = stream_artist.artist_id','inner');
					 $this->db->group_by('stream_recorded_video_view.recorded_v_id'); 
					 $this->db->where('stream_recorded_video.video_type','Recorded');
					 $this->db->limit(8);
 					$this->db->order_by('stream_recorded_video.recorded_v_id', 'desc'); 
					
					$query=$this->db->get();
					//echo $this->db->last_query();
					//die;
					$data = array();
					if($query !== FALSE && $query->num_rows() > 0){
						$data = $query->result_array();
					}

					return $data;	
			
			}


function get_popular_recorded_video(){
			$this->db->select('*,stream_recorded_video.recorded_v_id,count(stream_recorded_video_view.recorded_v_id) as total,stream_recorded_video.image');
			$this->db->from('stream_recorded_video');
			$this->db->join('stream_recorded_video_view','stream_recorded_video.recorded_v_id = stream_recorded_video_view.recorded_v_id','left');
			$this->db->join('stream_artist','stream_recorded_video.artist_id = stream_artist.artist_id','inner');
			$this->db->where('stream_recorded_video.recorded_v_status','Show');
		        $this->db->group_by('stream_recorded_video_view.recorded_v_id'); 
					 $this->db->where('stream_recorded_video.video_type','Recorded');
					 $this->db->where('stream_recorded_video.recorded_v_status','Show');
					 $this->db->limit(8);
 					$this->db->order_by('total', 'desc'); 
					
					$query=$this->db->get();
					//echo $this->db->last_query();
					//die;
					$data = array();
					if($query !== FALSE && $query->num_rows() > 0){
						$data = $query->result_array();
					}

					return $data;
			}







function get_artist_top_performer(){
			
			 $this->db->select('stream_artist.artist_id,stream_artist.image,stream_artist.name, COUNT(stream_recorded_video_view.artist_id) as total');
					$this->db->from('stream_artist');
					$this->db->join('stream_recorded_video_view', 'stream_artist.artist_id = stream_recorded_video_view.artist_id', 'inner');
					 $this->db->group_by('stream_recorded_video_view.artist_id'); 
					 
					 $this->db->limit(8);
 					$this->db->order_by('total', 'desc'); 
					
					$query=$this->db->get();
					//echo $this->db->last_query();
					return $query->result_array();	
			
			}


/**********************************************************************************************/
function get_user_purchase_list($user_id,$limit_start,$limit_end){
	//$current_date = date("Y-m-d");
	
	//$end_date = date("Y-m-d", strtotime("-90 days"));
	
	$this->db->select('*');
	$this->db->from('stream_payment_details');
	$this->db->join('stream_recorded_video', 'stream_payment_details.video_id = stream_recorded_video.recorded_v_id', 'inner');
	$this->db->join('stream_artist', 'stream_payment_details.artist_id = stream_artist.artist_id', 'inner');
	$this->db->where('stream_payment_details.user_id',$user_id);
	//$this->db->where('payment_type','');
	//$this->db->group_by('order_no');
	
	
	 if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
			//echo $this->db->last_query();
			return $query->result_array();
}
	


/*****************************************************************************************************************************************************/

function get_artist_income($artist_id,$limit_start,$limit_end){
	//$current_date = date("Y-m-d");
	
	//$end_date = date("Y-m-d", strtotime("-90 days"));
	
	$this->db->select('*');
	$this->db->from('stream_payment_details');
	$this->db->join('stream_recorded_video', 'stream_payment_details.video_id = stream_recorded_video.recorded_v_id' ,'inner');
	$this->db->join('stream_user', 'stream_payment_details.user_id = stream_user.user_id', 'left');
//	$this->db->join('stream_artist', 'stream_artist.artist_id = stream_payment_details.artist_id', 'left');
	
	$this->db->where('stream_payment_details.artist_id',$artist_id);
	//$this->db->where('payment_type','');
	//$this->db->group_by('order_no');
	if(isset($_GET['from_date']) && isset($_GET['to_date'])){
		
		$from_date=$_GET['from_date'];
		$to_date=$_GET['to_date'];
		
		$this->db->where('stream_payment_details.date >=',$from_date);
                $this->db->where('stream_payment_details.date <=',$to_date);
	}
        if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
//			echo $this->db->last_query();
			return $query->result_array();
}

function get_messages_chat_lmt($video_id,$start_limit)
{
        //	echo $start_limit;
                $this->db->select('*');
                $this->db->from('stream_message_chat');
                $this->db->where('video_id',$video_id);
                if($start_limit<50){
                $this->db->limit($start_limit);

                        }else{
                $start_limit= $start_limit-50;		
                $this->db->limit(50,$start_limit);
                        }
                $query=$this->db->get();
//        echo $this->db->last_query();
                return $query->result_array();	
}
		
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
	
	function get_messages_lmt($video_id,$start_limit)
	{
				
				
	
		
					$this->db->select('*');
					$this->db->from('stream_chat');
					
				
					$this->db->where('video_id',$video_id);
					if($start_limit<30){
					$this->db->limit($start_limit);
						
						}else{
					$start_limit= $start_limit-30;		
					$this->db->limit(30,$start_limit);
						}
					//$this->db->order_by('message_id','desc');
						//$this->db->limit(20,$limit);
					
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
		
		}

function get_messages_lmt_old($video_id,$start_limit)
	{
				//echo $start_limit;
					
	
		
					$this->db->select('*');
					$this->db->from('stream_chat');
					
				
					$this->db->where('video_id',$video_id);
					//$this->db->order_by('message_id','desc');
					if($start_limit<30){
					$this->db->limit($start_limit);
						
						}else{
					$start_limit= $start_limit-30;		
					$this->db->limit(30,$start_limit);
						}
						
					
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
		
		}
		
			function get_messages_chat_greater($video_id,$start_limit)
	{
		
					$this->db->select('*');
					$this->db->from('stream_chat');
					
				
					$this->db->where('video_id',$video_id);
					$this->db->where('message_id >=',$start_limit);
					//$this->db->order_by('message_id','desc');
						
					
					$query=$this->db->get();
					//echo $this->db->last_query();die;
					return $query->result_array();	
		
		
		}



function delete_message($message_id){
					$this->db->where('message_id', $message_id);
      				$this->db->delete('stream_message_chat');
		
					}

function get_artist_chat($artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where('artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }

/********************************************************2.8.2017***********************************************/
function insert_streaming_video($data){	
	
		$insert = $this->db->insert('stream_recorded_video',$data);
	
			//echo $insert ; die;
	   return $this->db->insert_id();
		
			
		}

function insert_comment_message($data_store)
	
	{
		$insert = $this->db->insert('stream_message_chat',$data_store);
		
		return $this->db->insert_id();
	
	}
	

/*************************************************************************************************************************************/

function get_video_admin()
    {
		
		$this->db->select('*');
		$this->db->from('stream_video_admin');
		$this->db->where('status','Active');
		$query = $this->db->get();
		return $query->result_array(); 	
    }


/**************************************************************************************************************************/
function get_messages_ban($id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_message_chat');
		$this->db->where('message_id',$id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }


function insert_ban_users($data_store)
	
	{
		$insert = $this->db->insert('stream_ban_user',$data_store);
		
		return $this->db->insert_id();
	
	}



function checking_banned_user($user_id,$artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_ban_user');
		$this->db->where('user_id',$user_id);
		$this->db->where('artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }

/************************************************************************************************************/

function insert_like_video($data_store)
	
	{
		$insert = $this->db->insert('stream_like',$data_store);
		
		//return $this->db->insert_id();
	//echo $this->db->last_query();
	}

function check_like_video($user_id,$video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_like');
		$this->db->where('user_id',$user_id);
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array(); 	
    }
	
	function count_view_videos($video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_recorded_video_view');
		
		$this->db->where('recorded_v_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
/***********************************************************************************/

function delete_like_video($id){
					$this->db->where('id', $id);
      				$this->db->delete('stream_like');
		
					}


function count_like_videos($video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_like');
		
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }

function delete_unbanned_users($id){
					$this->db->where('ban_id', $id);
      				$this->db->delete('stream_ban_user');
		
					}

/*********************************************************************/
function get_following_streamers_list($user_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_artist_follow');
		$this->db->join('stream_artist','stream_artist_follow.artist_id = stream_artist.artist_id','inner');
		$this->db->where('stream_artist_follow.user_id',$user_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
/***************************************shreya 6.8.17****************************/
function update_check_sign_user($hid){
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where("activation_id",$hid);
		//$this->db->where('user_status', 'Active');
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
function update_check_sign_artist($hid){
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where("activation_id",$hid);
		//$this->db->where('status', 'Active');
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
		/****************************************************8.9.2017souvik*********************************************/

function get_artist_id_normal_video($video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_artist_video_album');
		
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }



function get_normal_video_details_category_wise($category_type)
    {
		
		$this->db->select('*');
		$this->db->from('stream_artist_video_album');
		
		$this->db->where('category_type',$category_type);
		$query = $this->db->get();
		return $query->result_array(); 	
    }




function count_view_videos_normal($video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_video_view');
		
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }



function insert_comment($data_store)
	
	{
		$insert = $this->db->insert('stream_comment',$data_store);
		
		return $this->db->insert_id();
	
	}


function get_comments($video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_comment');
		
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }

function count_like_videos_normal($video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_like_video');
		
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }


function check_like_video_normal($user_id,$video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_like_video');
		$this->db->where('user_id',$user_id);
		$this->db->where('video_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }



function insert_like_video_normal($data_store)
	
	{
		$insert = $this->db->insert('stream_like_video',$data_store);
		
		return $this->db->insert_id();
	
	}

function delete_like_video_normal($id){
					$this->db->where('id', $id);
      				$this->db->delete('stream_like_video');
		
					}


/*****************************************/	
function geting_emoji(){
			$this->db->select('*');
			$this->db->from('stream_emoji');
			//$this->db->where('page_name',$page_name);
			$this->db->where('emoji_status','Active');
			//$this->db->where('payment_type',$user_id);
		
			$query=$this->db->get();
	//echo $this->db->last_query();die;
			return $query->result_array();	
			
			}	
			
/*********************************************************ad********************************/
function get_advertisement_home1($page)
	{
		
		$this->db->select('*');
		$this->db->from('stream_advertisement2');
		//$where = "(`page` = '".$page."' AND `ad_place` = '".$place."')";

		//$this->db->where('page',$page);
	$this->db->where('page',$page);
	//$this->db->where('ad_place',$ad_place);
		$this->db->where('advertisement_start_date <= curdate()');
		$this->db->where('advertisement_end_date >= curdate()');
		$this->db->where('advertisement_status','Active');
		//$this->db->limit(1);
		$this->db->order_by('advertisement_id','DESC');
		$query=$this->db->get();
				//echo $this->db->last_query(); die;

		return $query->result_array();
		
		
		}

function get_advertisement_videodetail($page)
	{
		
		$this->db->select('*');
		$this->db->from('stream_advertisement2');
	    $this->db->where('page',$page);
	   // $this->db->where('ad_place',$ad_place);
		$this->db->where('advertisement_start_date <= curdate()');
		$this->db->where('advertisement_end_date >= curdate()');
		$this->db->where('advertisement_status','Active');
	//	$this->db->limit(1);
		$this->db->order_by('advertisement_id','DESC');
		$query=$this->db->get();
				//echo $this->db->last_query();die; 

		return $query->result_array();
		
		
		}
function get_advertisement_artistdetail($page)
	{
		
		$this->db->select('*');
		$this->db->from('stream_advertisement2');
	    $this->db->where('page',$page);
	    //$this->db->where('ad_place',$ad_place);
		$this->db->where('advertisement_start_date <= curdate()');
		$this->db->where('advertisement_end_date >= curdate()');
		$this->db->where('advertisement_status','Active');
	//	$this->db->limit(1);
		$this->db->order_by('advertisement_id','DESC');
		$query=$this->db->get();
				//echo $this->db->last_query();die; 

		return $query->result_array();
		
		
		}
		
	function get_advertisement_category($page)
	{
		
		$this->db->select('*');
		$this->db->from('stream_advertisement2');
	    $this->db->where('page',$page);
	    //$this->db->where('ad_place',$ad_place);
		$this->db->where('advertisement_start_date <= curdate()');
		$this->db->where('advertisement_end_date >= curdate()');
		$this->db->where('advertisement_status','Active');
	//	$this->db->limit(1);
		$this->db->order_by('advertisement_id','DESC');
		$query=$this->db->get();
				//echo $this->db->last_query();die; 

		return $query->result_array();
		
		
		}	
		/***************************19.9.2017*****************************************************************/
		function get_online_schedule_stremers($limit_start, $limit_end)
	{
		
		$date=date('Y-m-d H:i:s');
	
		$this->db->select("*,CONCAT(stream_schedule.date,'  ',stream_schedule.time) AS column3", FALSE);
		$this->db->from('stream_schedule');
	  $this->db->join('stream_artist','stream_schedule.artist_id = stream_artist.artist_id','inner');
	 
	$this->db->where("CONCAT(stream_schedule.date,'  ',stream_schedule.time) >= ",$date);
	
		
	//	$this->db->limit(1);
		$this->db->order_by('column3','ASC');
		if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
		$query=$this->db->get();
			//	echo $this->db->last_query();die; 

		return $query->result_array();
		
		
		}	
		
		
		
/********************************************************************************************************/		
		
	function get_viewers_message($artist_id,$limit_start,$limit_end){
	//$current_date = date("Y-m-d");
	
	//$end_date = date("Y-m-d", strtotime("-90 days"));
	
	$this->db->select('*,stream_user.image as user_image');
	$this->db->from('stream_message_chat');
	$this->db->join('stream_recorded_video', 'stream_recorded_video.recorded_v_id = stream_message_chat.video_id', 'inner');
	$this->db->join('stream_user', 'stream_user.user_id = stream_message_chat.user_id', 'inner');
	$this->db->where('stream_message_chat.artist_id',$artist_id);
	$this->db->where('stream_message_chat.sender_type','User');
	$this->db->order_by('stream_message_chat.message_time','desc');
	//$this->db->where('payment_type','');
	//$this->db->group_by('order_no');
	
	
	 if($limit_start!=""){
		    $this->db->limit($limit_start, $limit_end);
					 }
			$query=$this->db->get();
			//echo $this->db->last_query();
			return $query->result_array();
}
	
	
	/***********************************************************************************************************/	
		
		function get_video_sort($user_id,$sort_by){
			
	$this->db->select('stream_artist_video_album.video_id,stream_artist_video_album.artist_id,stream_artist_video_album.video_name,stream_artist_video_album.video_title, COUNT(IFNULL(stream_video_view.video_id, 1))as total',FALSE);
	$this->db->from('stream_artist_video_album');
	$this->db->join('stream_video_view', 'stream_video_view.video_id = stream_artist_video_album.video_id', 'Left');

	$this->db->where('stream_artist_video_album.artist_id',$user_id);
	$this->db->group_by('stream_artist_video_album.video_id');
	
	if($sort_by=='atoz')
{

$this->db->order_by('stream_artist_video_album.video_title','ASC');


}


if($sort_by=='ztoa')
{

$this->db->order_by('stream_artist_video_album.video_title','desc');


}



if($sort_by=='newtoold')
{

$this->db->order_by('stream_artist_video_album.video_id','desc');


}




if($sort_by=='oldtonew')
{

$this->db->order_by('stream_artist_video_album.video_id','ASC');


}

	
	
	
	$this->db->order_by('total','desc');
	$query=$this->db->get();
	//echo $this->db->last_query();
			return $query->result_array();	
					
						
				}
	/********************************************************************************************/	
		function get_photo_sort($user_id,$sort_by){
			
			$this->db->select('*, COUNT(IFNULL(stream_photo_view.image_id, 1))as total',FALSE);
	$this->db->from('stream_artist_image_album');
	$this->db->join('stream_photo_view', 'stream_photo_view.image_id = stream_artist_image_album.image_id', 'Left');

	$this->db->where('stream_artist_image_album.artist_id',$user_id);
	$this->db->group_by('stream_artist_image_album.image_id');
			
	if($sort_by=='atoz')
{

$this->db->order_by('stream_artist_image_album.image_name','ASC');


}


if($sort_by=='ztoa')
{

$this->db->order_by('stream_artist_image_album.image_name','desc');


}



if($sort_by=='newtoold')
{

$this->db->order_by('stream_artist_image_album.image_id','desc');


}




if($sort_by=='oldtonew')
{

$this->db->order_by('stream_artist_image_album.image_id','ASC');


}
	
		
		$this->db->order_by('total','desc');
	$query=$this->db->get();
//	echo $this->db->last_query();
			return $query->result_array();	
				}
		
		
/************************************************************************************************************************/		
		function get_recordvideo_sort($user_id,$sort_by){
			
	$this->db->select('stream_recorded_video.recorded_v_id,stream_recorded_video.artist_id,stream_recorded_video.recorded_video_name,stream_recorded_video.recorded_v_overview,stream_recorded_video.recorded_v_title,stream_recorded_video.video_tags, COUNT(IFNULL(stream_recorded_video_view.recorded_v_id, 1))as total',FALSE);
	
	$this->db->from('stream_recorded_video');
	$this->db->join('stream_recorded_video_view', 'stream_recorded_video_view.recorded_v_id = stream_recorded_video.recorded_v_id', 'Left');

	$this->db->where('stream_recorded_video.artist_id',$user_id);
	$this->db->where('stream_recorded_video.video_type','Recorded');
	$this->db->group_by('stream_recorded_video.recorded_v_id');
	
	if($sort_by=='atoz')
{

$this->db->order_by('stream_recorded_video.recorded_v_title','ASC');


}


if($sort_by=='ztoa')
{

$this->db->order_by('stream_recorded_video.recorded_v_title','desc');


}



if($sort_by=='newtoold')
{

$this->db->order_by('stream_recorded_video.recorded_v_id','desc');


}




if($sort_by=='oldtonew')
{

$this->db->order_by('stream_recorded_video.recorded_v_id','ASC');


}

	
	
	
	$this->db->order_by('total','desc');
	$query=$this->db->get();
	//echo $this->db->last_query();
	//echo $this->db->last_query();
			return $query->result_array();	
					
						
				}
		
		
/**************************************************************************************/
		
		
		function check_email_strem($member_email,$password)
	{
		$this->db->select('*');
		$this->db->from('stream_artist');
		$this->db->where("email",$member_email);
		$this->db->where('password', $password);
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
	 
	 
	 
	 
	 function check_email_user($member_email,$password)
	{
		$this->db->select('*');
		$this->db->from('stream_user');
		$this->db->where("user_email",$member_email);
		$this->db->where('user_password', $password);
		$k=$this->db->get();
		//echo $this->db->last_query();die;
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
		
		
		
	/*/************************************************************/	
		
	public function update_video_key($recorded_v_id,$data)
	{
	$this->db->where('recorded_v_id',$recorded_v_id);
	$this->db->update('stream_recorded_video',$data);
	//echo $this->db->last_query(); die;
	
	return true;
	}	
		
		public function update_add_live_form($recorded_v_id,$data)
	{
	$this->db->where('recorded_v_id',$recorded_v_id);
	$this->db->update('stream_recorded_video',$data);
	//echo $this->db->last_query(); die;
	
	return true;
	}	
		
		
		function get_stream_recorded_video($artist_id)
   		 {
		
		$this->db->select('*');
		$this->db->from('stream_recorded_video');
		$this->db->where('artist_id',$artist_id);
		$this->db->order_by('recorded_v_id','desc');
		$this->db->limit(1);
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		return $query->result_array(); 	
   		 }
		
		
		
		
		
		function get_video_key($video_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_recorded_video');
		
		$this->db->where('recorded_v_id',$video_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
	
	/*********************************14.10.2017**********************************************/
	
	function get_followers_email_list($artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_artist_follow');
		$this->db->join('stream_user','stream_artist_follow.user_id = stream_user.user_id','left');
		$this->db->where('stream_artist_follow.artist_id',$artist_id);
		$query = $this->db->get();
		return $query->result_array(); 	
    }
/******************************************************************************************************/	
	
		function insert_private_message($data)
	{
		$insert = $this->db->insert('stream_private_message', $data);
	//	echo $this->db->last_query();
		//return $this->db->insert_id();
	}
		
		
function get_private_messages_of_users($artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_private_message');
		$this->db->join('stream_user','stream_private_message.user_id = stream_user.user_id','left');
		$this->db->where('stream_private_message.artist_id',$artist_id);
		 $this->db->group_by('stream_private_message.user_id'); 
	     $this->db->order_by('stream_private_message.message_id', 'desc'); 
		
		
		$query = $this->db->get();

		$data = array();
		if($query !== FALSE && $query->num_rows() > 0){
			$data = $query->result_array();
		}

		return $data; 	
    }		
		
		
		
	function get_private_chats_of_artist($user_id,$artist_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_private_message');
		//$this->db->join('stream_user','stream_private_message.user_id = stream_user.user_id','left');
		$this->db->where('stream_private_message.user_id',$user_id);
		$this->db->where('stream_private_message.artist_id',$artist_id);
		
		$query = $this->db->get();
	
		return $query->result_array(); 	
    }			
		
	/**************************************************************************************/	
		function get_private_messages_of_artist($user_id)
    {
		
		$this->db->select('*');
		$this->db->from('stream_private_message');
		$this->db->join('stream_artist','stream_private_message.artist_id = stream_artist.artist_id','left');
		$this->db->where('stream_private_message.user_id',$user_id);
		 $this->db->group_by('stream_private_message.artist_id'); 
	     $this->db->order_by('stream_private_message.message_id', 'desc'); 
		
		$query = $this->db->get();
		$data = array();
		if($query !== FALSE && $query->num_rows() > 0){
			$data = $query->result_array();
		}

		return $data; 	
    }	
		
		
		
		
		
		
/*****************************************************************************************************/
}
?>