<?php class Page_content extends CI_Controller {

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
    function index($nombre,$id){
        
        $page_about=$this->module->get_pagecontent_details($id);
		$data['image']=$page_about[0]['image'];
		$data['about_us']=$page_about[0]['page_content'];		
		//$this->load->view('aboutus',$data);                
        $this->templete->contenido = $this->load->view("about_us/index",$data,TRUE);
        $this->templete->render($data);
    }
}  
?>