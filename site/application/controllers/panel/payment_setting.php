<?php class Payment_setting extends CI_Controller {

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
	$artist_id = $this->session->userdata('artist_id');
	if($this->session->userdata('is_logged_in')=='1')
		{
			$type = $this->session->userdata('type');
			if($type=="User"){
				
				$url=site_base_url()."myprofile";
			 echo "<script>window.location='".$url."';</script>";
			exit;
				}else{
			
			$artist_id=$this->session->userdata('artist_id');
			
			if ($this->input->server('REQUEST_METHOD') === 'POST')
	      {
			$artist_id=$this->session->userdata('artist_id');
		$live_video= $this->input->post('live_video');
		$recorded_video= $this->input->post('recorded_video');
		$live_recorded_video= $this->input->post('live_recorded_video');
  		$paypal_id= $this->input->post('paypal_id');
                $subscription=  $this->input->post("subscription");

		
		
	   $data=array('live_video'=>$live_video,
				   'recorded_video'=>$recorded_video,
			      'paypal_id'=>$paypal_id,
				 'live&recorded_video'=>$live_recorded_video,
               "subscription"=>$subscription
                   
			  );
//                          var_dump($data);
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->update_edit_portfolio($artist_id,$data);
    
		echo "<script type='text/javascript'>window.location='".site_base_url()."panel/payment_setting'</script>";
	
	       }
	
		 //$data['user_details']=$this->module->get_all_information($this->session->userdata('user_id'));

	
        
                $this->templete->contenido = $this->load->view("panel/payment_setting/index",$data,true);
                ////$this->load->view('payment_setting',$data,TRUE);
//                $this->templete->contenido = $this->load->view("recorded_video",$data,true);
        $this->templete->render($data);
	 }
	 
	 
		}
	else
	{
		redirect(site_base_url()."login"); 
		}
	

    }
}  
?>