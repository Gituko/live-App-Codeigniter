<?php class Advertisement extends CI_Controller {

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
       
        $count=$this->stream->createQueryBuilder()                    
                        ->addSelect("count(t.advertisement_id)")
                        ->from("stream\stream_advertisement2","t")                       
//                        ->where("t.page = 'video_detail_right'")
                        ->where("t.advertisement_status = 'active'")
                        ->andWhere(" '".date("Y-m-d")."'>= t.advertisement_start_date ")
                        ->andWhere(" '".date("Y-m-d")."' <= t.advertisement_end_date");
         if($this->input->post("position")=="top")
        {
            $count->andWhere("t.page='video_detail_right_top'");
        }
         if($this->input->post("position")=="bottom")
        {
            $count->andWhere("t.page='video_detail_right_bottom'");
        }
        $count=$count->getQuery()
                ->getResult();
        //var_dump($count);
                //->getResult();        
       // var_dump($count);
        
        $publicidad=$this->stream->createQueryBuilder()                    
                        ->select("t")
                        ->from("stream\stream_advertisement2","t");                       
//                        ->where("t.page = 'video_detail_right'")
         if($this->input->post("position")=="top")
        {
            $publicidad=$publicidad->andWhere("t.page='video_detail_right_top'");
        }
         if($this->input->post("position")=="bottom")
        {
            $publicidad=$publicidad->andWhere("t.page='video_detail_right_bottom'");
        }
                        $publicidad=$publicidad->andWhere("t.advertisement_status = 'active'")
                        ->andWhere(" '".date("Y-m-d")."'>= t.advertisement_start_date ")
                        ->andWhere(" '".date("Y-m-d")."' <= t.advertisement_end_date")
                        ->setMaxResults(1)
                        ->setFirstResult(rand(0, $count[0][1]-1))
                        //->orderBy("rand()")
                ->getQuery()->getResult();
                $view=new stream\stream_advertisement2_views();
                $view->fecha_hora=  date("Y-m-d");
                $view->id_advertisement2=$publicidad[0]->advertisement_id;
                $view->ip_remote=$_SERVER['REMOTE_ADDR'];
                $this->stream->persist($view);
                $this->stream->flush();
                header("content-type: application/json");
                print_r(json_encode($publicidad[0])); 
    }
    function video_detail(){
        
        $video= new \stream\stream_advertisement_video();
        $count=$this->stream->createQueryBuilder()
                //->select("t")
                ->addSelect("count(t.video_id)")
                ->from("stream\stream_advertisement_video","t")
                ->where("t.video_status = 'active'")
                ->andWhere(" '".date("Y-m-d")."'>= t.start_date ")
                ->andWhere(" '".date("Y-m-d")."' <= t.end_date")
                ->getQuery()
                ->getResult()
                ;
        $videoAdd=$this->stream->createQueryBuilder()
                ->select("t")
                //->addSelect("count(t.video_id)")
                ->from("stream\stream_advertisement_video","t")
                ->where("t.video_status = 'active'")
                ->andWhere(" '".date("Y-m-d")."'>= t.start_date ")
                ->andWhere(" '".date("Y-m-d")."' <= t.end_date")
                ->setMaxResults(1)
                ->setFirstResult(rand(0, $count[0][1]-1))
                ->getQuery()
                ->getResult()
                ;
//                var_dump($videoAdd[0]);
        $data['videoAd']=$videoAdd[0];
//        var_dump($videosAd);
        
        $this->load->view("advertisement/video_detail",$data);
//        $this->templete->contenido = $this->load->view("about_us/index",$data,TRUE);
//        $this->templete->render($data);
    }
}  
?>