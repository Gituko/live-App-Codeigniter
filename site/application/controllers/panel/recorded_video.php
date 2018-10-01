<?php

class Recorded_video extends CI_Controller {

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

    function index() {


        if ($this->session->userdata('is_logged_in') == '1') {
            $type = $this->session->userdata('type');
            if ($type == "User") {

                $url = site_base_url() . "myprofile";
                echo "<script>window.location='" . $url . "';</script>";
                exit;
            } else {

                $artist_id = $this->session->userdata('artist_id');



                //if(isset($_GET['recorded_video']))
                //{
                $search = $_GET['recorded_video'];
                //echo $search;
                //echo $artist_id;
                //die;
                $this->load->model('module');
                $this->load->library('Pagination');

                $config['per_page'] = 6;
                $config['base_url'] = site_base_url() . 'panel/recorded_video/index/';
                //$config['prefix'] = '/'.$sub_cat_id.'/';
                $config['use_page_numbers'] = TRUE;
                $config['num_links'] = 9;
                $config['full_tag_open'] = '<ul>';
                $config['full_tag_close'] = '</ul>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active"><a>';
                $config['cur_tag_close'] = '</a></li>';
                $config['uri_segment'] = 4;
                if (count($_GET) > 0)
                    $config['suffix'] = '?' . http_build_query($_GET, '', "&");
                $page = $this->uri->segment(4);
                $limit_end = ($page * $config['per_page']) - $config['per_page'];
                if ($limit_end < 0) {
                    $limit_end = 0;
                }

////echo $this->db->last_query();
                //$data['category']=$this->module->get_product($cat_id);
                //echo "<pre>";print_r($data['search_details']);die;
                $config['artist_video'] = count($this->module->get_artist_recorded_video_by_search($search, $artist_id, "", ""));
                $data['artist_video'] = $this->module->get_artist_recorded_video_by_search($search, $artist_id, $config['per_page'], $limit_end);
//                echo "<pre>";
//                
//                var_dump($data);
//                echo "</pre>";
// echo "<pre>";print_r($data['category_list']);die;
                $config['total_rows'] = $config['artist_video'];
                $this->pagination->initialize($config);


                //}	
//	else
                //{
//					
//		$this->load->model('module');
//		$this->load->library('Pagination');
//			
//		$config['per_page'] =5;
//		$config['base_url'] = site_base_url().'panel/recorded_video/index/';
//		//$config['prefix'] = '/'.$sub_cat_id.'/';
//		$config['use_page_numbers'] = TRUE;
//		$config['num_links'] = 9;
//		$config['full_tag_open'] = '<ul>';
//		$config['full_tag_close'] = '</ul>';
//		$config['num_tag_open'] = '<li>';
//		$config['num_tag_close'] = '</li>';
//		$config['cur_tag_open'] = '<li class="active"><a>';
//		$config['cur_tag_close'] = '</a></li>';
//		$config['uri_segment'] = 2;
//		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
//	    $page = $this->uri->segment(2);
//		$limit_end = ($page * $config['per_page']) - $config['per_page'];
//		if ($limit_end < 0){
//			$limit_end = 0;
//		}
//					
//					
//					
//        $config['artist_video'] = count($this->module->get_artist_recorded_video($artist_id,"",""));
//        $data['artist_video'] = $this->module->get_artist_recorded_video($artist_id,$config['per_page'],$limit_end);
//        // echo "<pre>";print_r($data['category_list']);die;
//        $config['total_rows'] = $config['artist_video'];
//        $this->pagination->initialize($config); 				
                //}
                //$data['artist_video']=$this->module->get_artist_recorded_video($artist_id);


                $this->templete->contenido = $this->load->view("panel/index", $data, true);
//                $this->templete->contenido = $this->load->view("recorded_video",$data,true);
                $this->templete->render($data);
            }

            //$user_id = $this->session->userdata('artist_id');
            //$data['user_details']= $this->module->get_artist_detail($user_id);
            //print_r ($data);die;
        } else {

            $url = site_base_url();
            //header('Location:'.$url);
            echo "<script>window.location='" . $url . "';</script>";
            exit;
        }

//		        
//        
    }

    function artist_message_video() {


        if ($this->session->userdata('is_logged_in') == '1') {

            $type = $this->session->userdata('type');
            if ($type != "User") {

                $artist_id = $this->session->userdata('artist_id');


                $segement = $this->uri->segment(4);
                $category = explode('_', $segement);
                $v_id = $category[(count($category) - 1)];
                $v_id = $category[(count($category) - 1)];
               // echo $v_id;

                $video_artist = $this->module->get_artist_id_video($v_id);
                $data['custom_video'] = $video_artist;
                $data['messages_chat'] = $this->module->get_messages_chat($v_id);
                // $data['messages_chat']= $this->module->get_messages_chat($v_id);
                $data['messages'] = $this->module->get_messages($v_id);
                $this->templete->contenido = $this->load->view("panel/recorded_video/artist_message_video",$data,TRUE);
                $this->templete->render($data);

                //$this->load->view("artist_message", $data);
            }
        }
    }

}

?>