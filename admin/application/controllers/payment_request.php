<?php
class Payment_request extends CI_Controller  
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
                $this->stream = $this->doctrine->stream;
                $this->msg = new Mensaje();
                $this->templete = new Templete();
                $this->load->model('module');
                $this->load->library('get_database_info');
                $this->load->library('email');
                $this->load->helper('imageupload_with_crop');
                $data["session_admin_user_name"] = $this->session->userdata('admin_user_name');
                $data["session_admin_id"] = $this->session->userdata('admin_id');
        }
        function index(){
            
            $data['requests']=  $this->stream->createQueryBuilder()
                    ->select("t")
                    ->from("stream\\view_total_notes_total_usd_by_artist","t")
                    ->getQuery()->getResult();
  //  $this->load->view("payment_request/test");
    //var_dump($requests);
                    
//                    $this->stream->getRepository("stream\view_total_notes_total_usd_by_artist")->findAll(
//                    
//                    );
            
            $this->templete->contenido = $this->load->view("payment_request/index", $data, TRUE);
            $this->templete->render();
        }
        function pay_streamers(){
            foreach($_POST['pay_stremer']as $k=>$val){
                $total_notes=  $this->stream->find("stream\\view_total_notes_total_usd_by_artist",$val);
                echo $total_notes->id."---".  number_format($total_notes->total_usd,2)."--".$total_notes->artist->paypal_id."<br>";                 
            }
        }
}
