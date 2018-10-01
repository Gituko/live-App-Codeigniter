<?php
class Artist_private_message extends CI_Controller {

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
            if ($type != "User") {

                $artist_id = $this->session->userdata('artist_id');

                $data['user_messages'] = $this->module->get_private_messages_of_users($artist_id);



//                $this->load->view("artist_private_message", $data);
                $this->templete->contenido = $this->load->view("panel/artist_private_message/index",$data,TRUE);
                $this->templete->render($data);
            }
        }
    }

}
