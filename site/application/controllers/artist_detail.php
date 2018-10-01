<?php class artist_detail extends CI_Controller {

    var $em;
    var $msg;
    var $templete;
    var $stream;

    public function __construct() {
        parent::__construct();
        $this->stream = $this->doctrine->stream;
        $this->msg = new Mensaje();
        $this->templete = new Templete();
    }
    function index(){
        
		 	$segement=$this->uri->segment(3);
			$atrist_id = explode('_',$segement);
			$atrist_id= $atrist_id[(count($atrist_id)-1)];			
			$atrist_details= $this->module->get_artist_detail($atrist_id); 
				$cat_id= $atrist_details[0]['category_type'];
		  $ip= $this->input->ip_address();
		  
	$user_id = $this->session->userdata('user_id');
	
	
	if(empty($this->module->checking_banned_user($user_id,$atrist_id)))
	{
	
	
	
	
	
	
	//$artist_id=$details[0]['artist_id'];
	
	$date = date("Y-m-d");
	$artist_view =  $this->module->get_artist_view($atrist_id,$ip,$date);
	
	if(empty($artist_view)){
	//echo "<pre>"; print_r($details); die;	
		$data1=array(
					'artist_id'=>$atrist_id,
					'ip_address'=>$ip,
					'date'=>date("Y-m-d")
					
			        );
 
$this->module->insert_artist_view($data1);
	}	
		$data['atrist_details']= $this->module->get_artist_detail($atrist_id); 
		$data['artist_album'] = $this->module->get_image_data($atrist_id); 
		$data['artist_video'] = $this->module->get_video_data($atrist_id); 
		$data['recorded_video'] = $this->module->get_recorded_video_data($atrist_id);
		$data['schedule_list_artist'] = $this->module->get_scheduled_time_artist($atrist_id);
	
		$data['related_perfromer'] = $this->module->get_related_performer();
			$data['online_perfromer'] = $this->module->get_online_performer();
			
			//print_r($data);die;
		
		//$this->load->view("user_detail",$data);
		
		$this->templete->contenido = $this->load->view("artist_detail/index",$data,TRUE);
                $this->templete->render($data);
	}
	
	else{
		
 echo "<script type='text/javascript'>window.location='".site_base_url()."banned'</script>";
		
	}
	
	
	
	
	
		        
        
    }
}  
?>