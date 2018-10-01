<?php
class User_following_streamer extends CI_Controller {

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

    function index() {
        if ($this->session->userdata('is_logged_in') == '1') {

            $type = $this->session->userdata('type');
            if ($type == "User") {

                $user_id = $this->session->userdata('user_id');

                $data['streamer_follow'] = $this->module->get_following_streamers_list($user_id);


                $this->templete->contenido =$this->load->view("panel/user_following_streamer/index", $data, TRUE);
                $this->templete->render($data);
                
                //$this->load->view("user_following_streamers", $data);
            }
        }
        
    }

}

?>