<?php
class Error extends CI_Controller  
{      
   /********************for paypal api**********************/
    public $api_user = "**********************";
	public $api_pass = "***********";
	public $api_sig = "**************************";
	public $app_id = "APP-80W284485P519543T";
	public $apiUrl = 'https://svcs.sandbox.paypal.com/AdaptivePayments/';
	public $paypalUrl="https://www.paypal.com/webscr?cmd=_ap-payment&paykey=";
	public $headers;      
	/****************end for paypal api*******************/                       
        public function __construct() 
	{
		parent::__construct();
        }
        function index(){
            echo "Controlador no encontrado --";
           // $this->load->view("admin/home",$data);
        }
}
