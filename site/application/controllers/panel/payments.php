<?php class Payments extends CI_Controller {

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
    function index(){
	if($this->session->userdata("is_logged_in")=="TRUE")
	{
             $user_id=$_SESSION['type']=="User"?$_SESSION['user_id']:$_SESSION['artist_id'];
            $userType=$_SESSION['type']=="User"?"2":"1";
	
            
                $con = new mysqli("127.0.0.1", "root", "Observum@8102", "kpfiles_bdstreams");
                
                 $sql='SELECT COUNT(t1.video_id) total, t1.fecha, t1.tipo,t1.video_id from (SELECT t1.id gasto
                ,t1.fecha
                ,t1.artist_id
                ,t1.video_id
                ,t1.user_id_envio
                ,t1.user_id_envio_tipo
                ,t2.id detalle,
                t3.status,
                t2.id_notes,
                "ingress" tipo
                FROM stream_gastos_notes t1
                INNER JOIN stream_gastos_notes_detalle t2 ON t1.id=t2.id_gasto 
                INNER JOIN stream_notes t3 ON t3.id=t2.id_notes AND t3.`status`="transfer"
                WHERE t1.artist_id='.$user_id.' and t1.user_id_envio_tipo='.$userType.'
                UNION
                SELECT t1.id gasto
                ,t1.fecha
                ,t1.artist_id
                ,t1.video_id
                ,t1.user_id_envio
                ,t1.user_id_envio_tipo
                ,t2.id detalle,
                t3.status,
                t2.id_notes,
                "charge" as tipo
                FROM stream_gastos_notes t1
                INNER JOIN stream_gastos_notes_detalle t2 ON t1.id=t2.id_gasto 
                INNER JOIN stream_notes t3 ON t3.id=t2.id_notes 
                WHERE t1.user_id_envio='.$user_id.' and t1.user_id_envio_tipo='.$userType.' 
                UNION
                SELECT "" id_gasto
                , t1.fecha_hora fecha
                , "" artist_id
                , "" video_id
                , t1.id_usuario user_id_envio
                , t1.type_user user_id_envio_tipo
                , "" detalle
                , "" estatus
                , t2.id
                ,"transaction" tipo
                from stream_paypal_transactions t1
                INNER JOIN stream_notes t2 ON t1.id=t2.paypal_transaction_id and t1.estatus="Completed"                
                WHERE t1.id_usuario='.$user_id.' and t1.type_user='.$userType.'
                union
                SELECT
                "" id_gasto,
                t1.fecha,
                t1.id_artist artist_id,
                "" id_video,
                t1.id_artist user_id_envio,
                1 user_id_envio_tipo,
                "" detalle,
                 t3.`status`,
                 t3.id,
                "Request payment"
                FROM
                stream_request_payments t1
                INNER JOIN stream_request_payment_detalle t2 ON t1.id = t2.id_request_payment
                INNER JOIN stream_notes t3 ON t2.id_note=t3.id  AND t3.`status` = "process"
                ) t1
                GROUP BY t1.fecha
                ;';
//                 echo $sql;
                $query=$con->query($sql) or trigger_error($mysqli->error."[$sql]");
                $lista=array();
                while($row=$query->fetch_array())
                {
                    array_push($lista,array(
                        "total"=>$row['total'],
                        "fecha"=>$row['fecha'],
                        "tipo"=>$row['tipo'],
                        "video_id"=>$row['video_id']
                    ));
                }
                $data['lista']=$lista;
                
                $totalCoins = $this->stream->createQueryBuilder("t")
                            ->select("count(t.id)")
                            ->from("stream\\view_notes_by_user", "t")
                            ->where("t.id_user='" .$user_id. "' and "
                                      . "t.type_user=".$userType)
                            ->getQuery()->getResult();
                $data['total_notes']=$totalCoins[0][1];
//                var_dump($data['total_notes']);
                //var_dump($totalCoins);
                $this->templete->contenido = $this->load->view("panel/payments/index",$data,TRUE);
                $this->templete->render($data);
            
        }else{
           header('Location: http://www.observum.com');
        }
    }
    function request_payments(){       
        if($this->session->userdata("is_logged_in")=="TRUE")
	{
	$type = $this->session->userdata('type');
            if($type=="Artist"){
//               echo "<pre>";
               // var_dump($_SESSION);
                $user_id=$_SESSION['type']=="User"?$_SESSION['user_id']:$_SESSION['artist_id'];
            $userType=$_SESSION['type']=="User"?"2":"1";
            
//                $totalCoins = $this->stream->createQueryBuilder("t")
//                            ->select("count(t.id)")
//                            ->from("stream\\view_notes_by_user", "t")
//                            ->where("t.id_user='" .$user_id. "' and "
//                                      . "t.type_user=".$userType.$gasto)
//                            ->getQuery()->getResult();
            
            $data['total_notes'] = $this->stream->createQueryBuilder("t")
                            ->select("count(t.id)")
                            ->from("stream\\view_notes_by_user", "t")
                            ->where("t.id_user='" .$user_id. "' and "
                                      . "t.type_user=".$userType)
                            ->getQuery()->getResult();
//            $data['total_notes']=$this->stream->createQueryBuilder()
//                        ->select("count(t1) total_notes")
//                        ->from("stream\stream_gastos_notes", "t1")
//                        ->innerJoin("t1.detalle","t2")
//                        ->andWhere("t1.artist_id = '".$_SESSION['artist_id']."'")
//                        ->andWhere("t2.estatus = 'transfer'")
//                        ->groupBy("t1.artist_id")
//                        ->getQuery()
//                        ->getResult();
            $data['request_payments']= $this->stream->createQueryBuilder()
                    ->select("t1")
                    ->from("stream\\view_total_notes_total_usd_by_artist","t1")
                    ->where("t1.id_artist = ".$_SESSION['artist_id'])
                    ->getQuery()->getResult();
            
            $this->templete->contenido = $this->load->view("panel/payments/request_payments",$data,TRUE);
            $this->templete->render($data);
            }
        }else{
            header ("Location: http://www.streamact.com/");
        }
    }
    function solicitar_pago(){        
        if($_POST['action']=="json"){ 
            $this->stream->getConnection()->beginTransaction();  
            try {
//                $totalNotes=$this->stream->createQueryBuilder()
//                        ->select("count(t1.id) total_notes")
//                        ->from("stream\stream_gastos_notes", "t1")
//                        ->innerJoin("t1.detalle","t2")
//                        ->andWhere("t1.artist_id = '".$_SESSION['artist_id']."'")
//                        ->andWhere("t2.estatus = 'transfer'")
//                        ->groupBy("t1.artist_id")
//                       // ->setParameter("p1","50")
//                        ->getQuery()
//                        ->getResult();
            $user_id=$_SESSION['type']=="User"?$_SESSION['user_id']:$_SESSION['artist_id'];
            $userType=$_SESSION['type']=="User"?"2":"1";
            
            
                $totalNotes = $this->stream->createQueryBuilder("t")
                            ->select("count(t.id)")
                            ->from("stream\\view_notes_by_user", "t")
                            ->where("t.id_user='" .$user_id. "' and "
                                      . "t.type_user=".$userType)
                            ->getQuery()->getResult();
           // var_dump($totalNotes);
            //var_dump($totalNotes[0][1]);
           // var_dump($_POST);
            if(empty($totalNotes) || $_POST['cantidad']>$totalNotes[0][1])
            {
                $this->msg->mensaje="The amount is not valid";
                $this->msg->tipo="error";
                return $this->msg->crear();
            }
            
            
            
            $request_payment=new stream\stream_request_payments;
            $request_payment->fecha=date("Y-m-d H:i:s");            
            $request_payment->id_artist=$_SESSION['artist_id'];
            
            $this->stream->persist($request_payment);
            $this->stream->flush();
            $pagar_notes=$this->stream->createQueryBuilder()
                    ->select("t1")
                    ->from("stream\stream_notes","t1")
                    ->where("(t1.status='new' or t1.status='transfer') and t1.id_user='".$user_id."' and  t1.type_user=".$userType." ")
                    ->setMaxResults($_POST['cantidad'])
                    ->getQuery()
                    ->getResult()
                    ;
//                    var_dump($pagar_notes);
//                    $this->stream->rollback();
//                  
            foreach ($pagar_notes as $k){
                
                $detalle_request=new \stream\stream_request_payment_detalle();
                $detalle_request->id_note=$k->id;
                $detalle_request->id_request_payment=$request_payment->id;
                $this->stream->persist($detalle_request);
                $this->stream->flush();
                $k->status="process";
                $this->stream->persist($k);
                $this->stream->flush();
            }
            $this->msg->tipo="success";
            $this->msg->mensaje="the request has been sent";
            $this->stream->commit();
            return $this->msg->crear();
            } catch (Exception $ex) {
                echo $ex;
                $this->stream->rollback();
                $this->msg->tipo="error";
                $this->msg->mensaje="An error has ocurred";
                return $this->msg->crear();
            }
            
        }
        if($_POST['action']=="form"){
            
        }
    }
    function pago(){
        echo "asdfasdf";
    }
}
				