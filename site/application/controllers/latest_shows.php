<?php class Latest_shows extends CI_Controller {

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
       $data['video_list']=$popular=$this->module->get_latest_recorded_video();
        $this->templete->contenido =  $this->load->view("latest_shows/index",$data,true); 
        $this->templete->render($data);
    }
}
?>