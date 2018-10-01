<?php
class Admin extends CI_Controller  
{      
 
    var $em;
    var $msg;
    var $templete;
    var $stream;
        public function __construct() 
	{
           parent::__construct();
		
            //$this->em = $this->doctrine->em;
            
            $this->stream=  $this->doctrine->stream;
            
            $this->msg = new Mensaje();
            $this->templete = new Templete();
            $this->load->model('module');
		$this->load->library('get_database_info');
		$this->load->library('email');
		$this->load->helper('imageupload_with_crop');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
            
            //$this->mailer = new Mailer();
		
        }
        function index(){
           // $this->templete->templete="login";
//            $data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
//            $data["session_admin_id"]=$this->session->userdata('admin_id');
//            $this->templete->contenido=;
//            $this->templete->render();
        }
        function conversions_table(){
            $data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
            $data["session_admin_id"]=$this->session->userdata('admin_id');
            $this->templete->contenido="Usted no debe estar aqui <br> debe salir inmediatamente <br>o se cargara un software espia a su dispositivo";
            $this->templete->render();
        }
        function conversions_table_list(){
            $data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
            $data["session_admin_id"]=$this->session->userdata('admin_id');            
            $data['conversiones']=  $this->stream->getRepository("stream\stream_conversions_table")->findAll();            
            $this->templete->contenido=$this->load->view("admin/conversions_table_list",$data,TRUE);
            $this->templete->render();
        }
        function add_conversions_money(){
            //var_dump($this->stream);
            if($this->input->post("action")=="json"){
                $this->msg->tipo="success";
                $this->msg->mensaje="Datos guardados";                
                try {                   
                    
                    //  $config['upload_path'] = '../uploads/'.$path.'/';
                    $config['upload_path']          = '../uploads/'."coin_image".'/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 100;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 768;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('imagen'))
                    {
                            $error = array('error' => $this->upload->display_errors());
                            $erno=str_replace("<p>","", $error['error']);
                            $erno=str_replace("</p>","",$erno);
                            $this->msg->mensaje= $erno;                            
                            $this->msg->tipo="danger";
                            return $this->msg->crear();                            
                    }
                     $img = array('imagen' => $this->upload->data());
                     //var_dump();
                     $imagen=$img['imagen']['file_name'];
                     //var_dump($imagen);
                     
                    $conversion=new stream\stream_conversions_table();
                    $conversion->nombre_moneda=$this->input->post("nombre");
                    $conversion->valor=$this->input->post("valor");
                    $conversion->moneda_referencia=$this->input->post("referencia");
                    $conversion->imagen=$imagen; //$img['imagen']['file_name'];
                    $conversion->referencia=  $this->stream->find("stream\stream_conversions_table_coin",$this->input->post("referencia"));
                    $this->stream->persist($conversion);
                    $this->stream->flush();
                } catch (Exception $ex) {
                    $this->msg->mensaje="Ocurrio un error al guardar los datos";
                    $this->msg->tipo="danger";
                }
                
                return $this->msg->crear();
            }
            else{
            $data['moneda']=$this->stream->getRepository("stream\stream_conversions_table_coin")->findAll();
            $data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
            $data["session_admin_id"]=$this->session->userdata('admin_id');
            $this->templete->contenido=$this->load->view("admin/add_conversions_money",$data,TRUE);
            $this->templete->render();
            }
        }
        function edit_conversion_money($id_conversion){
            if($this->input->post("action")=="json"){
                
                $this->msg->mensaje="Datos guardados";
                $this->msg->tipo="success";
                try {
                    $conversion=$this->stream->find("stream\stream_conversions_table",$id_conversion);
                    if(!empty($_FILES['imagen']['name'])){
                    $config['upload_path']          = '../uploads/'."coin_image".'/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 100;
                    $config['max_width']            = 1024;
                    $config['max_height']           = 768;

                    $this->load->library('upload', $config);
                    
                    if ( ! $this->upload->do_upload('imagen'))
                    {
                            $error = array('error' => $this->upload->display_errors());
                            $erno=str_replace("<p>","", $error['error']);
                            $erno=str_replace("</p>","",$erno);
                            $this->msg->mensaje= $erno;                            
                            $this->msg->tipo="danger";
                            return $this->msg->crear();                            
                    }
                     $img = array('imagen' => $this->upload->data());
                     //var_dump();
                     $imagen=$img['imagen']['file_name'];
                     $conversion->imagen=$imagen;
                    }
                     //var_dump($_POST);
                    
                
                   $conversion->nombre_moneda=$this->input->post("nombre");
                    $conversion->valor=$this->input->post("valor");
                    $conversion->moneda_referencia=$this->input->post("referencia");
                    
                    $conversion->referencia=$this->stream->find("stream\stream_conversions_table_coin",$this->input->post("referencia"));
                    $this->stream->persist($conversion);
                    $this->stream->flush();
                } catch (Exception $ex) {
                    $this->msg->mensaje="Ocurrio un error";
                    $this->msg->tipo="danger";
                    return $this->msg->crear();
                }
                $this->msg->crear();
            }
            else{
            $data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
            $data['conversion']=  $this->stream->find("stream\stream_conversions_table",$id_conversion);
            $data['moneda']=$this->stream->getRepository("stream\stream_conversions_table_coin")->findAll();
            $data["session_admin_id"]=$this->session->userdata('admin_id');
            $data['id_conversion']=$id_conversion;
            $this->templete->contenido=$this->load->view("admin/edit_conversions_money",$data,TRUE);
            $this->templete->render(); 
            }
        }
        function delete_table_conversions_list(){
            $this->msg->mensaje="La moneda fue eliminada";
            $this->msg->tipo="success";
            try {
                
                $conversion=$this->stream->find("stream\stream_conversions_table",$this->input->post("id"));
                $this->stream->remove($conversion);
                $this->stream->flush();
                if(file_exists(site_base_url()."uploads/coin_image/".$conversion->imagen))
                {
                    @unlink(site_base_url()."uploads/coin_image/".$conversion->imagen);
                }
            } catch (Exception $ex) {
                $this->msg->mensaje="Error al eliminar la moneda";
                $this->msg->tipo="danger";
                return $this->msg->crear();
            }            
            return $this->msg->crear();
        }
}
?>