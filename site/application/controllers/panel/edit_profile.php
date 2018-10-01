<?php

class Edit_profile extends CI_Controller {

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
                $user_id = $this->session->userdata('user_id');
                $data['user_details'] = $this->module->get_user_profile_detail($user_id);
            } else {
                $user_id = $this->session->userdata('artist_id');
                $data['user_details'] = $this->module->get_artist_profile_detail($user_id);
            }
//            $this->load->view('edit_profile', $data);
            $this->templete->contenido = $this->load->view("panel/edit_profile/index",$data,TRUE);
            $this->templete->render($data);
        } else {

            $url = site_base_url();
            //header('Location:'.$url);
            echo "<script>window.location='" . $url . "';</script>";
            exit;
        }
    }
    function general_profile_information_edit()
	{
//echo "nnnnnn"; die;
		
    $this->load->model('module');
	//$this->load->library('session');
	//$this->session->all_userdata();
	
	
	if($this->session->userdata('is_logged_in')=='1')
		{
		//	$user_id=$this->session->userdata('user_id');
			
			if ($this->input->server('REQUEST_METHOD') === 'POST')
	      {
			//echo "hhhh" ; die;
		
		//echo "<pre>"; print_r($_POST); die;
		$name= $this->input->post('name');
    // echo $name ; die;
$birth_date= $this->input->post('birth_date');
$location	= $this->input->post('location');
$city= $this->input->post('city');
$state= $this->input->post('state');
                
$zipcode=$this->input->post('zipcode');
$mobileno= $this->input->post('mobileno');
$email= $this->input->post('email');

$about_me= $this->input->post('about_me');
$sex= $this->input->post('sex');
 
  $type = $this->session->userdata('type');
	if($type=="User"){ 
	$user_id=$this->session->userdata('user_id');
	
	   $data=array('name'=>$name,
				   'birth_date'=>$birth_date,
			      'location'=>$location,
			      'city'=>$city ,
			      'state'=>$state,
			     'zipcode'=>$zipcode,
				 'mobileno'=>$mobileno,
				 'user_email'=>$email,
				
			  );
	   
	    $this->module->update_edit_user_profile($user_id,$data);
	}else{
		$user_id=$this->session->userdata('artist_id');
		  $data=array('name'=>$name,
				   'birth_date'=>$birth_date,
			      'location'=>$location,
			      'city'=>$city ,
			      'state'=>$state,
			     'zipcode'=>$zipcode,
				 'mobileno'=>$mobileno,
				'sex'=>$sex,
				'about_me'=>$about_me,
				 'email'=>$email,
				
			  );
		 $this->module->update_edit_profile($user_id,$data);
		}
	   
	//echo "<pre>";print_r($data); die;
   
	    
    
		echo "<script type='text/javascript'>window.location='".site_base_url()."panel/myprofile'</script>";
	
	       }
	
		 //$data['user_details']=$this->module->get_all_information($this->session->userdata('user_id'));

	//$this->load->view('my_favourite',$data);
	 }
	else
	{
		redirect(site_base_url()); 
		}

	}

}
