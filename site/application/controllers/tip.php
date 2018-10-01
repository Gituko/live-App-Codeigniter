<?php

class Tip extends CI_Controller {

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

    function index($id_artist, $id_video) {
       
        $data['details'] = $this->module->get_artist_detail($id_artist);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['id_video'] = $id_video;
        $this->load->view("tip/index", $data);
    }
    function pago_notes() {
        $this->stream->getConnection()->beginTransaction();
        try {
            // $rs->andWhere("t.codigo_barras = '" . $this->input->post("nombre") . "'");
//            var_dump($_SESSION);
            //artist_id
            $user_id=$_SESSION['type']=="User"?$_SESSION['user_id']:$_SESSION['artist_id'];
            $userType=$_SESSION['type']=="User"?"2":"1";
            $totalCoins = $this->stream->createQueryBuilder("t")
                            ->select("count(t.id)")
                            ->from("stream\\view_notes_by_user", "t")
                            ->where("t.id_user='" .$user_id. "' and "
                                    . "t.type_user=".$userType)
                            ->getQuery()->getResult();
            //var_dump($totalCoins);
               
            if ($totalCoins[0][1] < $_POST['amount']) {
                $this->msg->mensaje = "There is not enough Notes";
                $this->msg->tipo = "error";
                return $this->msg->crear();
            }

           // $id_user=($_SESSION['type']=="User")?"2":"1";
            $pago = new \stream\stream_gastos_notes();
            $pago->fecha = date("Y-m-d H:i:s");
            $pago->video_id = $_POST['id_video'];
            $pago->artist_id = $_POST['artist_id'];
            $pago->user_id_envio = $user_id;
            $pago->user_id_envio_tipo=$userType;
            $this->stream->persist($pago);                    
            $this->stream->flush();
            //$newIdPago=$pago->id;    
            //var_dump($newIdPago);
            
            $notes=$this->stream->createQueryBuilder("t")
                        ->select("t")
                        ->from("stream\stream_notes", "t")
                        ->andWhere("t.id_user=".$user_id)
                        ->andWhere("t.status='new' or t.status='transfer'")
                        ->andWhere("t.type_user=".$userType)->getQuery()->setMaxResults($_POST['amount'])->getResult();
            
//        var_dump($notes);
            foreach($notes as $k)
            {
                $k->type_user=$userType;
                $k->id_user=$_POST['artist_id'];
                $k->status="transfer";
                
                $gastos_detalle=new \stream\stream_gastos_notes_detalle();
                $gastos_detalle->id_gasto_notes=$pago->id;
                $gastos_detalle->id_notes=$k->id;
                $gastos_detalle->gasto=$pago;
                $this->stream->persist($gastos_detalle);                
                $this->stream->flush();
                $this->stream->persist($k);                
                $this->stream->flush();
                
            }

            $this->stream->getConnection()->commit();

            $artist = $this->module->get_artist_detail($_POST['artist_id']);
            $artist = $artist[0];
            $this->msg->mensaje = $artist['name'] . " says: Thanks for your tip";
            $this->msg->tipo = "success";
            $this->msg->crear();
        } catch (Exception $ex) {
            echo $ex;
            $this->stream->getConnection()->rollback();
            $this->mensaje = "An error has ocurred";
            $this->msg->tipo = "error";
            $this->msg->crear();
        }
    }

}

?>