<?php
class Category extends CI_Controller {

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
    function index($sub_cat_id) {
            $segement = $this->uri->segment(3);
//            echo "<pre>"; var_dump($segement); echo "--</pre>";   
            $cat_id = explode('_', $segement);
            $category_id = $cat_id[(count($cat_id) - 1)];
            $this->load->model('module');
            $this->load->library('Pagination');
            $config['per_page'] = 12;
            $config['base_url'] = site_base_url() . 'video_category/?' . $segement;
            //$config['prefix'] = '/'.$sub_cat_id.'/';
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = 9;
            $config['full_tag_open'] = '<ul>';
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a>';
            $config['cur_tag_close'] = '</a></li>';
            $config['uri_segment'] = 2;
            if (count($_GET) > 0)
                $config['suffix'] = '&' . http_build_query($_GET, '', "&");
            $page = $this->uri->segment(2);

            $limit_end = ($page * $config['per_page']) - $config['per_page'];
            if ($limit_end < 0) {
                $limit_end = 0;
            }


            //$data['category']=$this->module->get_product($cat_id);
            //echo "<pre>";print_r($data['search_details']);die;
            $config['video_list'] = count($this->module->get_video_list_search($category_id, "", ""));
            $data['video_list'] = $this->module->get_video_list_search($category_id, $config['per_page'], $limit_end);
            // echo "<pre>";print_r($data['category_list']);die;
            $config['total_rows'] = $config['video_list'];
            $this->pagination->initialize($config);
            //$sub_cat_id= explode($sub_cat_id, "_");
            //var_dump($sub_cat_id);
          $sub_cat_id=  str_replace("%20"," ",$sub_cat_id);
            $sub_cat_id= explode("_",$sub_cat_id);
            $data['category']=$sub_cat_id[0];
            //var_dump($data);
        $this->load->model('module');
        $this->templete->contenido = $this->load->view("category/index", $data, true);
        $this->templete->render($data);
    }
    function video_offline()
    {
     
        
	$user_id = $this->session->userdata('user_id');
	//var_dump($_SESSION);
	 $segement=$this->uri->segment(3);
	$category = explode('_',$segement);
	$v_id= $category[(count($category)-1)];
        
	if($v_id!=''){
	 $this->session->set_userdata('video_id', $v_id);
	}
	//die;
	$video_artist=$this->module->get_artist_id_video($v_id);
       // var_dump($video_artist);
	//video_type
	$video_type=$video_artist[0]['video_type'];
	
	 $type_video=$video_type.' '.'Video';
	//die;
	 $artist_id=$video_artist[0]['artist_id'];	 
	
	 if(empty($this->module->checking_banned_user($user_id,$artist_id)))
	 {
	 
	 $date = date("Y-m-d");
	 $ip= $this->input->ip_address();
            $data=array(
                                    'artist_id'=>$artist_id,
                                    'recorded_v_id'=>$v_id,
                                    'ip_address'=>$ip,
                                    'date'=>date("Y-m-d")					
                            );
 
        $this->module->insert_video_recorded_view($data);
	 
	 
         
	 $v_name=$video_artist[0]['recorded_v_title'];
	  $category_type=$video_artist[0]['category_type'];
	  $data['custom_video']=$video_artist;
          $data['v_id']=$v_id;
	  $data['artist_details']=$this->module->get_artist_details($artist_id);
	  $data['atrist_details']= $this->module->get_artist_detail($artist_id); 
	  $data['related_artist']=$this->module->get_artist_details_category_wise($category_type);
	  $data['related_video']=$this->module->get_video_details_category_wise($category_type);
	  $data['messages_chat']= $this->module->get_messages_chat($v_id);
	  $data['artist_album'] = $this->module->get_image_data($artist_id); 
          $data['artist_video'] = $this->module->get_video_data($artist_id); 
          $data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);
//          echo "<pre>";
//          var_dump($data['recorded_video']);
//          echo "</pre>";
	 // $data['artist_album'] = $this->module->get_image_data($artist_id);
	 // $data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);
	//  $data['artist_video'] = $this->module->get_video_data($artist_id); 
	  //$data['video_id']=$v_id;
	 $price_record_video=$this->module->get_artist_details($artist_id);
	  
	  $price=$price_record_video[0]['recorded_video'];
	  
	
		  

		


//	$this->load->view("video_detail_page_after_search",$data);
	//$this->load->view("category/video_offline",$data);
            
        //var_dump($data);
            $this->templete->contenido = $this->load->view("category/video_offline", $data, true);
            $this->templete->render($data);
	
	
	 }
	 
	 
	else{
		header('Location: http://www.streamact.com/');
        // echo "<script type='text/javascript'>window.location='".site_base_url()."banned'</script>";
		
	}
    }
    function video(){
        

    if(isset($_GET['search']) || isset($_GET['type']) || isset($_GET['tag']))
	{
    //entra video type=""
//    echo "entra a type";
   // echo "entra aqui?";
     
		//$search = $_GET['search'];
		
		$this->load->model('module');
		$this->load->library('Pagination');
			
                $config['per_page'] = 1000;
                $config['base_url'] = site_base_url() . 'category/video';
        //echo $config['base_url'];
		
		$config['prefix'] = '/'.$sub_cat_id.'/';
                
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 9;
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['uri_segment'] = 5;
            if (count($_GET) > 0){
                $config['suffix'] = '/?' . http_build_query($_GET, '', "&");
            }

                
	    $page = $this->uri->segment(3);
                
		$limit_end = ($page * $config['per_page']) - $config['per_page'];
            if ($limit_end < 0) {
			$limit_end = 0;
		}
	
             $config['video_list'] = count($this->module->get_search_list("", ""));
            $data['video_list'] = $this->module->get_search_list($config['per_page'], $limit_end);
		// echo "<pre>";print_r($data['category_list']);die;
            $config['total_rows'] = $config['video_list'];
            $this->pagination->initialize($config); 
        } else {
            // esta es una categoria;
			
            $segement = $this->uri->segment(2);
         //   echo "<pre>"; var_dump($segement); echo "--</pre>";   
            $cat_id = explode('_', $segement);
            $category_id = $cat_id[(count($cat_id) - 1)];
	
            $this->load->model('module');
            $this->load->library('Pagination');
			
            $config['per_page'] = 12;
            $config['base_url'] = site_base_url() . 'video_category/?'. $segement;
		//$config['prefix'] = '/'.$sub_cat_id.'/';
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 9;
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['uri_segment'] = 2;
            if (count($_GET) > 0)
               $config['suffix'] = '&' . http_build_query($_GET, '', "&");
	    $page = $this->uri->segment(2);
		
		$limit_end = ($page * $config['per_page']) - $config['per_page'];
            if ($limit_end < 0) {
			$limit_end = 0;
		}
	
	
		//$data['category']=$this->module->get_product($cat_id);
			//echo "<pre>";print_r($data['search_details']);die;
                $config['video_list'] = count($this->module->get_video_list_search($category_id,"",""));
                $data['video_list'] = $this->module->get_video_list_search($category_id,$config['per_page'],$limit_end);
			 // echo "<pre>";print_r($data['category_list']);die;
			  $config['total_rows'] = $config['video_list'];
		$this->pagination->initialize($config); 
				
	}	
	
	$this->templete->contenido = $this->load->view("category/video", $data, true);
        $this->templete->render($data);
        
    }
    function video_online(){
        
	$user_id = $this->session->userdata('user_id');
	
	 $segement=$this->uri->segment(3);
	$category = explode('_',$segement);
	$v_id= $category[(count($category)-1)];
        
	if($v_id!=''){
	 $this->session->set_userdata('video_id', $v_id);
	}
	//die;
	$video_artist=$this->module->get_artist_id_video($v_id);
	//video_type
	$video_type=$video_artist[0]['video_type'];
	
	 $type_video=$video_type.' '.'Video';
	//die;
	 $artist_id=$video_artist[0]['artist_id'];	 
	
	 if(empty($this->module->checking_banned_user($user_id,$artist_id)))
	 {
	 
	 $date = date("Y-m-d");
	 $ip= $this->input->ip_address();
            $data=array(
                                    'artist_id'=>$artist_id,
                                    'recorded_v_id'=>$v_id,
                                    'ip_address'=>$ip,
                                    'date'=>date("Y-m-d")					
                            );
 
        $this->module->insert_video_recorded_view($data);
	 
	 
	 $v_name=$video_artist[0]['recorded_v_title'];
	  $category_type=$video_artist[0]['category_type'];
	  $data['custom_video']=$video_artist;
          $data['v_id']=$v_id;
	  $data['artist_details']=$this->module->get_artist_details($artist_id);
	  $data['atrist_details']= $this->module->get_artist_detail($artist_id); 
	  $data['related_artist']=$this->module->get_artist_details_category_wise($category_type);
	  $data['related_video']=$this->module->get_video_details_category_wise($category_type);
	  $data['messages_chat']= $this->module->get_messages_chat($v_id);
	  $data['artist_album'] = $this->module->get_image_data($artist_id); 
          $data['artist_video'] = $this->module->get_video_data($artist_id); 
          $data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);
//          echo "<pre>";
//          var_dump($data['recorded_video']);
//          echo "</pre>";
	 // $data['artist_album'] = $this->module->get_image_data($artist_id);
	 // $data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);
	//  $data['artist_video'] = $this->module->get_video_data($artist_id); 
	  //$data['video_id']=$v_id;
	 $price_record_video=$this->module->get_artist_details($artist_id);
	  
	  $price=$price_record_video[0]['recorded_video'];
	  
	
		  
//if(empty($this->module->checking_recorded_video_payment($v_id,$user_id)) && $price>'0') 
//	
//	{
		
//                if($user_type!='User'){
//			 echo "<script type='text/javascript'>window.location='".site_base_url()."thankyou?message=accessdenied'</script>";
//		}else{
//		$price_recorded=$this->module->get_artist_details($artist_id);
//		
//		$recorded_video_cost=$price_recorded[0]['recorded_video'];
//		
//		$comission=$this->module->setting_value('admin_commission_%');
//		$paypal=$this->module->setting_value('paypal_commission_%');
//		
//		$paypal_comission=$paypal[0]['setting_value'];
//		
//		 $admin_comission=$comission[0]['setting_value'];
//		
//		 $admin_price=($recorded_video_cost*$admin_comission)/100;
//		 $artist_amount=$recorded_video_cost- $admin_price;
//		
//		$total_pay=($recorded_video_cost*$paypal_comission)/100;
//
//        $paypal_amount=$recorded_video_cost+$total_pay;
//		
//		
//		$paypal_email=$this->module->setting_value('paypal_email');
//		$paypal_business_id=$this->module->setting_value('business_id');
//		
//		/*********************alam paypal code comment************************************/
//		/*$data['order_gen_id']="Stream_".time();
//		$data['return_url']=site_base_url().'video_offline?action=success';
//		$data['cancel_return']=site_base_url().'video_offline?action=ipn';
//		$data['notify_url']=site_base_url().'video_offline?action=ipn';
//		$data['merchant_country']='US';
//		
//		$data['recorded_v_id']=$v_id;
//		$data['artist_charge']=$artist_amount;
//		$data['admin_charge']=$admin_price;
//		$data['artist_id']=$artist_id;
//		$data['user_id']=$user_id;
//		$data['paypal_amount']=$paypal_amount;
//		$data['video_type']=$type_video;
//		
//		
//		$data['txtemail']=$paypal_email[0]['setting_value'];
//		$data['business_id']=$paypal_business_id[0]['setting_value'];
//		$data['item_name']=$v_name;		
//		$this->load->view("paypal",$data);	
//*/		
//
//        /*********************alam paypal code comment************************************/
// 
// /************************multi payment paypal*****************************************/
// 
//     $admin_email1 = $this->module->get_admin_email();
//	 $admin_email = $admin_email1[0]['setting_value']; 
//	 $artist_details = $this->module->get_artist_payment($artist_id);
//	  $paypal_artist_email = $artist_details[0]['paypal_id'];
//	 $artist_email = $artist_details[0]['email'];
//	 
//	 $order_gen_id="Stream_".time();
//	 $video_id=$this->session->userdata('video_id');
//	 
//	 /**********************insert temp table**********************/
//	 $data_store=array
//					(
//					 'order_no'=>$order_gen_id,
//					 'user_id'=>$user_id,
//					 'artist_id'=>$artist_id,
//					 'video_id'=>$v_id,
//					 'admin_charge'=>$admin_price,
//					 'artist_charge'=>$artist_amount,
//					 'payment_type'=>$type_video,
//					 'total_amount'=>$paypal_amount
//					);
//					
//		$this->module->table_payment_temporary($data_store);
//	 /*********************end insert temp table******************/
//	
//    // create the pay request
//    $createPacket = array(
//        "actionType" =>"PAY",
//        "currencyCode" => "USD",
//        "receiverList" => array(
//            "receiver" => array(
//               array(
//                    "amount"=> $admin_price,
//                    "email"=>$paypal_email[0]['setting_value']
//                ),
//                array(
//                    "amount"=> $artist_amount,
//                    "email"=>$paypal_artist_email
//                ),
//            ),
//        ),
//        "returnUrl" => "http://test.local/payments/confirm",
//        "cancelUrl" => "http://test.local/payments/cancel",
//        "requestEnvelope" => array(
//            "errorLanguage" => "en_US",
//            "detailLevel" => "ReturnAll",
//        ),
//    );
//
//   //echo '<pre>';print_r($createPacket);die;
//    //$response = $this->_paypalSend($createPacket,"Pay");
//	$ch = curl_init();
//    curl_setopt($ch, CURLOPT_URL, $this->apiUrl."Pay");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($createPacket));
//    curl_setopt($ch, CURLOPT_HEADER, $this->headers);
//    $response = json_decode(curl_exec($ch),true);
//    return $response;
//
//    /**********************insert payment order table***********************/	
//	$payment_status="Paid";
//	$order_status="Completed";
//	
//	$information=$this->module->retrieve_temp_data($order_gen_id);
//	
//	$user_id=$information[0]['user_id'];
//	$artist_id=$information[0]['artist_id'];
//	$video_id=$information[0]['video_id'];
//	$admin_charge=$information[0]['admin_charge'];
//	$artist_charge=$information[0]['artist_charge'];
//	$total_amount=$information[0]['total_amount'];
//	$payment_type=$information[0]['payment_type'];
//	
//	$data_ammount=array(
//	'order_no'=>$order_gen_id,
//	'user_id'=>$user_id,
//	'artist_id'=>$artist_id,
//	'video_id'=>$video_id,
//	'admin_charge'=>$admin_charge,
//	'artist_charge'=>$artist_charge,
//	'payment'=>$total_amount,
//	
//	//'ipn_track_id'=>$ipn_track_id,
//	'date'=>date("Y-m-d"),
//	//'txn_id'=>$transaction_id,
//	'user_type'=>'User',
//	'payment_type'=>$payment_type,
//	'payment_status'=>$payment_status
//	);
//	
//	$this->module->amount_paid($data_ammount);
//	$this->module->delete_payment_from_temp($order_gen_id);
//	
//	/**********************end insert payment order table***********************/
//	
//	$video_details=$this->module->get_artist_id_video($video_id);
//	$video_name=$video_details[0]['recorded_v_title'];
//	$video_type=$video_details[0]['video_type'];
//	
//	$link=urlencode(str_replace(" ","_",$video_name))._.$video_id;
//	//die;
//	
//	if($video_type=='Recorded')
//	{
//	$url=site_base_url()."video_offline/".$link;
//	}
//	else
//	{
//	$url=site_base_url()."video_details_page/".$link;
//	
//	}
//	//header('Location:'.$url);
//	echo "<script> window.location.href ='".$url."';</script>";
//   
// /*********************end multi payment paypal***************************************/
//		
//		
//		
//
//	  }
	  
//	}
//	else
//	{


//	$this->load->view("video_detail_page_after_search",$data);
	//$this->load->view("category/video_offline",$data);
            
          
            $this->templete->contenido = $this->load->view("category/video_online", $data, true);
            $this->templete->render($data);
	
//	}
	
	 }
	 
	 
	else{
		
         echo "<script type='text/javascript'>window.location='".site_base_url()."banned'</script>";
		
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
         $this->load->view("category/get_messages",$data);
     //   $this->templete->render($data);
    }

}
