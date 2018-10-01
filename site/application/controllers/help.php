<?php class Help extends CI_Controller {

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
        
        $page_about=$this->module->get_pagecontent_details('Help');
	$data['image']=$page_about[0]['image'];
	$data['help']=$page_about[0]['page_content'];
        $this->templete->contenido = $this->load->view("help/index",$data,TRUE);
        $this->templete->render($data);
    }
}  
?>