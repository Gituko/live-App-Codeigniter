<?php
class paquete_credito extends CI_Controller {
    /*     * ******************for paypal api********************* */

//    public $api_user = "**********************";
//	public $api_pass = "***********";
//	public $api_sig = "**************************";
//	public $app_id = "APP-80W284485P519543T";
//	public $apiUrl = 'https://svcs.sandbox.paypal.com/AdaptivePayments/';
//	public $paypalUrl="https://www.paypal.com/webscr?cmd=_ap-payment&paykey=";
//	public $headers;      
    /*     * **************end for paypal api****************** */
    var $em;
    var $msg;
    var $templete;
    var $stream;

    public function __construct() {
        parent::__construct();
        //$this->em = $this->doctrine->em;
        $this->stream = $this->doctrine->stream;
        $this->msg = new Mensaje();
        $this->templete = new Templete();
        $this->load->model('module');
        $this->load->library('get_database_info');
        $this->load->library('email');
        $this->load->helper('imageupload_with_crop');
        $data["session_admin_user_name"] = $this->session->userdata('admin_user_name');
        $data["session_admin_id"] = $this->session->userdata('admin_id');
        //$this->mailer = new Mailer();
    }

    function index() {
        $data["session_admin_user_name"] = $this->session->userdata('admin_user_name');
        $data["session_admin_id"] = $this->session->userdata('admin_id');
        $data["paquete"]=$this->stream->getRepository("stream\stream_paquete_creditos")->findAll();        
//        echo "<pre>";
//        var_dump($data);
//        echo "<pre>";
        $this->templete->contenido = $this->load->view("paquete_credito/index", $data, TRUE);
        $this->templete->render();
    }

    function add() {
        if ($this->input->post("action") == "json") {

            $this->msg->tipo = "success";
            $this->msg->mensaje = "Paquete creado";
            try {

                $config['upload_path'] = '../uploads/' . "coin_image" . '/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;

                $this->load->library('upload', $config);
                //var_dump($_POST);
                //var_dump($_FILES);
                if (!$this->upload->do_upload('icon')) {
                    $error = array('error' => $this->upload->display_errors());
                    $erno = str_replace("<p>", "", $error['error']);
                    $erno = str_replace("</p>", "", $erno);
                    $this->msg->mensaje = $erno;
                    $this->msg->tipo = "danger";
                    return $this->msg->crear();
                }
                $img = array('icon' => $this->upload->data());
                //var_dump();
                $imagen = $img['icon']['file_name'];

                $paquete_creditos = new \stream\stream_paquete_creditos();
                $paquete_creditos->icon = $imagen;
                $paquete_creditos->name = $this->input->post("name");
                $paquete_creditos->equals_note = $this->input->post("equals_note");
                $paquete_creditos->sale_price = $this->input->post("sale_price");
                $this->stream->persist($paquete_creditos);
                $this->stream->flush();
            } catch (Exception $ex) {
                $this->msg->tipo = "error";
                $this->msg->mensaje = "Ha ocurrido un error";
                return $this->msg->crear();
            }
            return $this->msg->crear();
        } else {
            $data["session_admin_user_name"] = $this->session->userdata('admin_user_name');
            $data["session_admin_id"] = $this->session->userdata('admin_id');
            $this->templete->contenido = $this->load->view("paquete_credito/add", $data, TRUE);
            $this->templete->render();
        }
    }
    function delete(){
        try {
            $id=  $this->input->post("id");
            $paquete=$this->stream->find("stream\stream_paquete_creditos",$id);        
            $this->stream->remove($paquete);
            $this->stream->flush();
            $this->msg->tipo="success";
            $this->msg->mensaje="El paquete ha sido eliminado";
            
        } catch (Exception $ex) {
            $this->msg->tipo="error";
            $this->msg->mensaje="An error has ocurred";
        }
        return $this->msg->crear();
    }
    function edit($id){
        if($this->input->post("action")=="json"){
            try {
                $config['upload_path'] = '../uploads/' . "coin_image" . '/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;

                $this->load->library('upload', $config);
                //var_dump($_POST);
                //var_dump($_FILES);
                $paquete=$this->stream->find("stream\stream_paquete_creditos",$id);        
                if ($this->upload->do_upload('icon')) {
//                    $error = array('error' => $this->upload->display_errors());
//                    $erno = str_replace("<p>", "", $error['error']);
//                    $erno = str_replace("</p>", "", $erno);
//                    $this->msg->mensaje = $erno;
//                    $this->msg->tipo = "danger";
//                    return $this->msg->crear();
                    $img = array('icon' => $this->upload->data());
                    $imagen = $img['icon']['file_name'];
                    $paquete->icon=$imagen;
                }
                
            
            
            
            
            $paquete->name=$this->input->post("name");
            $paquete->equals_note=  $this->input->post("equals_note");
            $paquete->sale_price=$this->input->post("sale_price");
            $this->stream->persist($paquete);
            $this->stream->flush();
                $this->msg->tipo="success";
                $this->msg->mensaje="The data has been saved";
            } catch (Exception $ex) {
                $this->msg->tipo="error";
                $this->msg->mensaje="An error has ocurred";
            }
            return $this->msg->crear();
            
        }else{
            $data['paquete']=$this->stream->find("stream\stream_paquete_creditos",$id);            
            $this->templete->contenido = $this->load->view("paquete_credito/edit", $data, TRUE);
            $this->templete->render();
        }
    }

}

?>