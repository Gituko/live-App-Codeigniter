<?php

class User_upgrade extends CI_Controller {

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
        $this->templete->contenido = $this->load->view("panel/user_upgrade/index",$data,TRUE);
        $this->templete->render($data);
    }

}
