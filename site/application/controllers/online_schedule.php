<?php class Online_schedule extends CI_Controller {

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
        
	
	
	
                $this->load->model('module');
		$this->load->library('Pagination');
			
		$config['per_page'] =6;
		$config['base_url'] = site_base_url().'online_schedule/';
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
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
	    $page = $this->uri->segment(2);
		$limit_end = ($page * $config['per_page']) - $config['per_page'];
		if ($limit_end < 0){
			$limit_end = 0;
		}
	
	
		//$data['category']=$this->module->get_product($cat_id);
		//echo "<pre>";print_r($data['search_details']);die;
                $config['schedule_stremers'] = count($this->module->get_online_schedule_stremers("",""));
                $data['schedule_stremers'] = $this->module->get_online_schedule_stremers($config['per_page'],$limit_end);
                // echo "<pre>";print_r($data['category_list']);die;
                $config['total_rows'] = $config['schedule_stremers'];
                $this->pagination->initialize($config); 
	
	
	
	// $data['schedule_stremers']=$this->module->get_online_schedule_stremers();
	 
	
	//$this->load->view("online_schedule",$data);         
        $this->templete->contenido = $this->load->view("online_schedule/index",$data,TRUE);
        $this->templete->render($data);
    }
}  
?>