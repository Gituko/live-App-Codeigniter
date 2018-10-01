<?php class top_performer extends CI_Controller {

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
       $data['video_list']=$this->module->get_artist_top_performer(); 
       //var_dump($data);
       //echo "<pre>";
       //var_dump($data);
//       echo "</pre>";
        $this->templete->contenido =  $this->load->view("top_performer/index",$data,true);  //$this->load->view("top_video/index",$data,TRUE);
        $this->templete->render($data);
    }
}
?>