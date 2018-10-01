<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Posts extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('post');
        $this->load->library('Ajax_pagination');
        $this->perPage = 5;
    }
    
    public function category_detail()
    {
		//echo 'gg';
	//	die;
		$data = array();
		
	
		$this->load->library('session');
      
	
$segement=$this->uri->segment(2);
$furniture_id = explode('_',$segement);
$data['furniture_detail']=$this->module->get_furniture_detail($furniture_id[(count($furniture_id)-1)]);
$data['relation_id'] = $this->module->get_relation_furniture($furniture_id[(count($furniture_id)-1)]);


  $product_id=$furniture_detail[0]['furniture_id'];
	$data['reviews']=$this->module->reviews_product($product_id);
	//print_r()
	$data['counting']=$this->module->reviews_product_count($product_id);
	 //$data[more_review=count($counting);
	 
	 $data['review'] = $this->module->get_avg_review($product_id);

/*foreach($relation_id as $row){

$data['sub_product_detail'] = $this->module->get_sub_product_detail($row['collection_id']);
}*/
$this->load->view('category_detail',$data);

		 
    }
    
    function ajaxPaginationData()
    {
		
		 $this->load->library('session');
       
	
	
	
	$segement=$this->uri->segment(2);
$furniture_id = explode('_',$segement);
$data['furniture_detail']=$this->module->get_furniture_detail($furniture_id[(count($furniture_id)-1)]);
$data['relation_id'] = $this->module->get_relation_furniture($furniture_id[(count($furniture_id)-1)]);
	
	
	
	$product_id=$furniture_detail[0]['furniture_id'];
	$data['reviews']=$this->module->reviews_product($product_id);
	//print_r()
	$data['counting']=$this->module->reviews_product_count($product_id);
	 //$data[more_review=count($counting);
	 
	 //$data['review'] = $this->module->get_avg_review($product_id);
	
	
	
	
	    if(!empty($reviews)){
	     $id = $reviews[0]['furniture_id'];
	    }else{
		
			$id = '';
	     }
		
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //total rows count
        $totalRec = count($this->post->getRows(array(),$id));
        
        //pagination configuration
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
		
		$this->ajax_pagination->link_func  = "getData";
		//$this->ajax_pagination->base_url  ="http://www.webhawkstechnology.com/helper2go/php/posts/ajaxPaginationData/";
	     $this->ajax_pagination->base_url  ="http://localhost/centralqualityfurniture/posts/ajaxPaginationData/";
		
		$this->ajax_pagination->target  = '#resultsel1';		
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['reviews'] = $this->post->getRows(array('start'=>$offset,'limit'=>$this->perPage),$id);
       
        //load the view
        $this->load->view('posts/ajax-pagination-data', $data, false);
    }
	
	
	
   
	
}