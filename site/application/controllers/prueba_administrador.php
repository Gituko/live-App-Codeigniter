<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**

 * Posts Management class created by CodexWorld

 */

class Prueba_administrador extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('post');

        $this->load->library('Ajax_pagination');

        $this->perPage = 5;

    }
    function index(){
        echo "esto es una prueba";
    }
    
}
?>