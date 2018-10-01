<?php

class password_change extends CI_Controller {

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


        if ($this->session->userdata("is_logged_in") == "TRUE") {

//            $this->load->view("panel/changepassword");
            $this->templete->contenido = $this->load->view("panel/password_change/index",$data,TRUE);
            $this->templete->render($data);
        } else {
            $url = site_base_url();
            header('Location:' . $url);
            exit;
        }
    }
    function changepassword()
	{
		
	
			$this->load->model('module');
			$this->load->library('session');
			$data =array();
			if($this->session->userdata('is_logged_in')=='1')
			{
			//$user_id=$this->session->userdata('artist_id');
			if ($this->input->server('REQUEST_METHOD') === 'POST'){
				 $current_password =  md5($this->input->post('current_psw'));
				 
				 
				 $password =  md5($this->input->post('new_psw'));
				 
				 $type = $this->session->userdata('type');
				if($type=="User"){ 
				$user_id=$this->session->userdata('user_id');
				$check = $this->module->user_check_password($current_password,$user_id);
				}else{
					$artist_id=$this->session->userdata('artist_id');
						$check = $this->module->check_password($current_password,$artist_id);
					}
				if($check)
				{
					
					
				
				//echo "<pre>"; print_r($data_to_store);die;
				if($type=="User"){ 
				$data_to_store = array(
					'user_password' =>$password
					);
				
						if($this->module->update_password_user_detail($data_to_store,$user_id)==true){
								echo '<script>alert("Your password is successfully changed!!!");</script>';
								
								echo "<script type='text/javascript'>window.location='".site_base_url()."panel/myprofile'</script>";
							}else{
								echo '<script>alert("Oh snap! change a few things up and try submitting again.");</script>';
								$data['update_message'] = FALSE; 
								//$this->load->view('change_password');
								}
				
				
				}else{
					$data_to_store = array(
					'password' =>$password
					);
				
					if($this->module->update_password_details($data_to_store,$artist_id)==true){
						echo '<script>alert("Your password is successfully changed!!!");</script>';
						
						echo "<script type='text/javascript'>window.location='".site_base_url()."panel/myprofile'</script>";
					}else{
						echo '<script>alert("Oh snap! change a few things up and try submitting again.");</script>';
						$data['update_message'] = FALSE; 
						//$this->load->view('change_password');
						}
				}
				}else{
			$data['exist_message'] = TRUE; 
		echo '<script>alert("Your current password doesnot match, PLEASE TRY AGAIN!!!");</script>';
			}
			}
		echo "<script type='text/javascript'>window.location='".site_base_url()."panel/password_change'</script>";
			
			}else{
				
				$url=site_base_url();
			//header('Location:'.$url);
			echo "<script>window.location='".$url."';</script>";
			exit;
				
				}
		
	
	
	}

}
