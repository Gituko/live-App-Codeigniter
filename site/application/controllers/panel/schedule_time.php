<?php class Schedule_time extends CI_Controller {

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
        
	
	if ($this->input->server('REQUEST_METHOD') === 'POST')
	      {
			
		 $date= $this->input->post('date');
		 $time= $this->input->post('time');
		
		 $duration= $this->input->post('duration');
		
   $intro_text= $this->input->post('intro_text');

	  $artist_id=$this->session->userdata('artist_id');
		
		for($i=0;$i<count($date);$i++){
	   $data=array('date'=>$date[$i],
				   'time'=>$time[$i],
				   'duration'=>$duration[$i],
				    'intro_text'=>$intro_text[$i],
			      
				 'artist_id'=>$artist_id
			  );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->insert_schedule_artist($data);
		}
		
		
		
		
		
		
		
		
		
		
		
		
	}
	
//        $this->load->view("schedule_time",$data);
        
                $this->templete->contenido = $this->load->view("panel/schedule_time/index",$data,true);
                $this->templete->render($data);
    }
}