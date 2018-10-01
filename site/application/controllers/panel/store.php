<?php

class Store extends CI_Controller {

    var $em;
    var $msg;
    var $templete;
    var $stream;
    var $paypal;

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('is_logged_in')) {
            
                redirect('http://www.streamact.com/home/index', 'refresh');
            
        }
            $this->stream = $this->doctrine->stream;
            $this->msg = new Mensaje();
            $this->templete = new Templete();
//        $this->paypal = new paypal_stream_act();
//        $this->paypal->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
        }

        function index() {
            $data['paquetes'] = $this->stream->getRepository("stream\stream_paquete_creditos")->findAll();
            $this->templete->contenido = $this->load->view("panel/store/index", $data, TRUE);
            $this->templete->render($data);
        }

        function buy($id) {
            $data['paquete'] = $this->stream->find("stream\stream_paquete_creditos", $id);
            $this->templete->contenido = $this->load->view("panel/store/buy", $data, TRUE);
            $this->templete->render($data);
        }

    }

?>