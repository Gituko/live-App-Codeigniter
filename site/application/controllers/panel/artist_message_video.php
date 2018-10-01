<?php class Artist_message_video extends CI_Controller {

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
    function index($id){
        
	if($this->session->userdata('is_logged_in')=='1')
			{
				
	$type = $this->session->userdata('type');
		if($type!="User"){
				
$artist_id=$this->session->userdata('artist_id');		
				
				
// $segement=$this->uri->segment(2);
//$category = explode('_',$segement);
//var_dump($segement);
 $v_id=$id; //$category[(count($category)-1)];	

				
	$video_artist=$this->module->get_artist_id_video($v_id);
        //var_dump($video_artist);
			$data['custom_video']=$video_artist;	
	 $data['messages_chat']= $this->module->get_messages_chat($v_id);
	// $data['messages_chat']= $this->module->get_messages_chat($v_id);
$data['messages']= $this->module->get_messages($v_id);
$data['v_id']=$id;
				
//				$this->load->view("artist_message",$data);
    $this->templete->contenido = $this->load->view("panel/artist_message_video/index",$data,TRUE);
        $this->templete->render($data);
				}
	
	
	
	
}


    }
    function get_messages(){
        $totalMensajes=  $this->stream->createQueryBuilder()
                ->select("count(t) as total")
                ->from("stream\stream_message_chat","t")
                ->where("t.video_id=".$_POST['id_video'])
                ->getQuery()->getResult();
            
        $msgs=  $this->stream->createQueryBuilder()
                ->select("t")
                ->from("stream\stream_message_chat","t")
                ->where("t.video_id=".$_POST['id_video'])
                ->orderBy("t.message_id","asc");
        $t_mensaes=$totalMensajes[0]['total'];
        $tt=$t_mensaes-50;
        if($tt>0){
            $msgs->setFirstResult($tt);
        }
          $msgs=$msgs->setMaxResults(50)->getQuery()
                  //->getSql();
                  ->getResult();
            $data['mensajes']=$msgs;
               // ->getSql();
                //->getResult();    
         $this->load->view("panel/artist_message_video/get_messages",$data);
     //   $this->templete->render($data);
    }
}
