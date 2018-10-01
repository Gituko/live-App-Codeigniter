<?php
// error_reporting(E_ALL);
//                        ini_set('display_errors', '1');
class Home extends CI_Controller  
{      
	var $em;
        var $msg;
        var $templete;
        var $stream;
	public function __construct() 
	{
            parent::__construct();
            $this->stream=  $this->doctrine->stream;            
            $this->msg = new Mensaje();
            $this->templete = new Templete();
//		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
//		$data["session_admin_id"]=$this->session->userdata('admin_id');
        }
        function index()
        {
            $this->load->model('module');            
            $data['video_admin']=$this->module->get_video_admin();
            $data['videos_recorded']=$this->module->get_search_list(0, 30); 
            $this->templete->templete="index";
            $this->templete->contenido=  $this->load->view("home/index",$data,true);
            $this->templete->render($data);
        }
        
}