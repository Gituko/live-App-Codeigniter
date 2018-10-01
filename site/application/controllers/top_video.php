<?php class Top_video extends CI_Controller {

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
        //$video_list
       $data['video_list']=$this->module->get_popular_recorded_video(); 
       //var_dump($data);
        $this->templete->contenido =  $this->load->view("top_video/index",$data,true);  //$this->load->view("top_video/index",$data,TRUE);
        $this->templete->render($data);
    }
}
?>