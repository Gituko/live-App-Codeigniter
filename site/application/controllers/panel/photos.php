<?php class Photos extends CI_Controller {

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
        
        
				if($this->session->userdata("is_logged_in")=="TRUE")
	{
	$this->load->model('module');
	
			if($type=="User"){
				
					$url=site_base_url()."myprofile";
			 echo "<script>window.location='".$url."';</script>";
			exit;
				}else{
					
					$user_id = $this->session->userdata('artist_id');
			
			if(isset($_GET['search_photo']))
	{
		$search = $_GET['search_photo'];
		$data['image']= $this->module->get_image_data_by_search($search,$user_id);
		
	}
	
	else
	{
			
			$data['image']= $this->module->get_image_album_data($user_id);
			
			
	}
			
			//$this->load->view('user_photo',$data);
        $this->templete->contenido = $this->load->view("panel/photos/index",$data,true);
        $this->templete->render($data);
	}
	
	
	
	
	
	
	}
			else
		{
			$url=site_base_url();
			 echo "<script>window.location='".$url."';</script>";
			exit;
		}
	
    }
}  
?>