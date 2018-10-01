<?php
class User_private_message extends CI_Controller {

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
                $data['artist_messages'] = $this->module->get_private_messages_of_artist($user_id);
//                $this->load->view("user_message_private", $data);
                $this->templete->contenido = $this->load->view("panel/user_private_message/index", $data, TRUE);
                $this->templete->render($data);
            }
        }

        
    }

}

?>