<?php class Myprofile extends CI_Controller {

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
	$type = $this->session->userdata('type');
			if($type=="User"){
				
				$user_id = $this->session->userdata('user_id');
				$data['detail']= $this->module->get_user_detail($user_id);
				}else{
					
					$user_id = $this->session->userdata('artist_id');
					$data['detail']= $this->module->get_artist_detail($user_id);
					}
//	$this->load->view("myprofile",$data);
         $this->templete->contenido = $this->load->view("panel/myprofile/index",$data,TRUE);
         $this->templete->render($data);
	
	}
			else
		{
			$url=site_base_url();
			header('Location:'.$url);
			exit;
		}
    }
}