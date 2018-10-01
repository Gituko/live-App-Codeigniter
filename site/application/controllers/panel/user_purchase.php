<?php

class User_purchase extends CI_Controller {

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
        
        //var_dump($_SESSION);
  
        if ($this->session->userdata('is_logged_in') == '1') {
            //$user_id=$this->session->userdata('user_id');

            $type = $this->session->userdata('type');
            if ($type == "User") {

                $user_id = $this->session->userdata('user_id');

                $this->load->model('module');
                $this->load->library('Pagination');

                $config['per_page'] = 12;
                $config['base_url'] = site_base_url() . 'user_purchase/';
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
                    $config['suffix'] = '?' . http_build_query($_GET, '', "&");
                $page = $this->uri->segment(2);
                $limit_end = ($page * $config['per_page']) - $config['per_page'];
                if ($limit_end < 0) {
                    $limit_end = 0;
                }

                //$data['category']=$this->module->get_product($cat_id);
                //echo "<pre>";print_r($data['search_details']);die;
                $config['purchase_list'] = count($this->module->get_user_purchase_list($user_id, "", ""));
                $data['purchase_list'] = $this->module->get_user_purchase_list($user_id, $config['per_page'], $limit_end);
// echo "<pre>";print_r($data['category_list']);die;
                $config['total_rows'] = $config['purchase_list'];
                $this->pagination->initialize($config);

                //$this->load->view("user_payment", $data);

                $this->templete->contenido = $this->load->view("panel/user_purchase/index", $data, TRUE);
                $this->templete->render($data);
            }
        }
    }

}
