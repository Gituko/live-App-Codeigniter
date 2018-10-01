<?php

class Templete {

    var $header = "header";
    var $content = "content";
    var $footer = "footer";
    var $templete = "default";
    var $contenido = "";
    var $contenido_header = "";
    var $ci;

    function __construct() {
        $this->ci = & get_instance();
    }

    function render($data = array()) {
        
        $this->ci->load->view("themes/" . $this->templete . "/header", $data);
        $data['contenido'] = $this->contenido;
        $this->ci->load->view("themes/" . $this->templete . "/content", $data);
        $this->ci->load->view("themes/" . $this->templete . "/footer");
    }

}

?>