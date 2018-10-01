 <?
 class Get_database_info{
	 
	 public $CI;
	 public $database_info=array();
	 public $array_select=array();
	 public $array_where=array();
	public $table;
	public $insert_array=array();
	public $update_array=array();
	public $value;
	 
	 public function __construct()
	 {
		 
		 $this->CI =& get_instance();
		 $this->CI->load->database();
		 $this->CI->load->library('session');
		 }
	public function get_database_information($array_select,$array_where,$table)
	 {
		
		
		$this->array_where=$array_where;
		$this->array_select=$array_select;
		$this->table=$table;
		$this->CI->db->select($array_select);
		$this->CI->db->from($table);
		$this->CI->db->where($array_where);
		$query=$this->CI->db->get();
		return $query->result_array();
		 
		 }
		 
		 
		 public function get_database_update($table,$values_id,$values_array)
		 {
			 
			$this->CI->db->where('user_id',$values_id);
			$this->CI->db->update($table, $data_to_store);
			return true;
			 }
			 
			 
			  public function get_database_insert($table,$values_array)
		 {
			 
			 $insert = $this->db->insert($table,$values_array);
			return $this->db->insert_id();
			 
			 
			 }
			 
			public function user_login($data_to_check,$data_to_session='null',$table) 
			{
				
				$this->CI->db->select('*');
				$this->CI->db->from($table);
				$this->CI->db->where($data_to_check);
				$query=$this->CI->db->get();
				if($query->result_array())
				{
					return $this->user_login_to_session($data_to_check,$data_to_session,$table);
					}
				
				}
				
				
				public function user_login_to_session($data_to_check,$data_to_session,$table)
				{
					
					$query=$this->CI->db->query("SHOW KEYS FROM $table WHERE Key_name = 'PRIMARY'");
					$result_array= $query->result_array();
					$primary_key_from_table=$result_array[0]['Column_name'];
					
					
					
					$this->CI->db->select($primary_key_from_table,$data_to_session);
					$this->CI->db->from($table);
					$this->CI->db->where($data_to_check);
					$query=$this->CI->db->get();
					$query->row()->$primary_key_from_table;
					$this->CI->session->set_userdata($primary_key_from_table,$query->row()->$primary_key_from_table);
					$this->CI->session->set_userdata('login_status','OK');
						return $query->row()->$primary_key_from_table;
					}
		
		
			 
			 
			 
			 
	 
	 }
 ?>