<?php
class Main extends CI_Controller  
{      
   /********************for paypal api**********************/
    public $api_user = "**********************";
	public $api_pass = "***********";
	public $api_sig = "**************************";
	public $app_id = "APP-80W284485P519543T";
	public $apiUrl = 'https://svcs.sandbox.paypal.com/AdaptivePayments/';
	public $paypalUrl="https://www.paypal.com/webscr?cmd=_ap-payment&paykey=";
	public $headers;      
	/****************end for paypal api*******************/                                   
	var $em;
        var $msg;
        var $templete;
        var $stream;
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('module');		
		/********************for paypal api**********************/
		$this->headers = array(
                "X-PAYPAL-SECURITY-USERID: ".$this->api_user,
                "X-PAYPAL-SECURITY-PASSWORD: ".$this->api_pass,
                "X-PAYPAL-SECURITY-SIGNATURE: ".$this->api_sig,
                "X-PAYPAL-REQUEST-DATA-FORMAT: JSON",
                "X-PAYPAL-RESPONSE-DATA-FORMAT: JSON",
                "X-PAYPAL-APPLICATION-ID: ".$this->app_id,
            );
                $this->stream = $this->doctrine->stream;
                $this->msg = new Mensaje();
                $this->templete = new Templete();
	}
	
	function index()
	{
		$this->load->model('module');
		$this->load->library('Pagination');			
                $config['per_page'] = 4;
                $config['base_url'] = site_base_url() . 'video_category';
		
		$config['prefix'] = '/'.$sub_cat_id.'/';
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
                $config['suffix'] = '/?' . http_build_query($_GET, '', "&");
	    $page = $this->uri->segment(2);                
		$limit_end = ($page * $config['per_page']) - $config['per_page'];
            if ($limit_end < 0) {
			$limit_end = 0;
		}	
	
		//$data['category']=$this->module->get_product($cat_id);
		//echo "<pre>";print_r($data['search_details']);die; 
                $config['video_list'] = count($this->module->get_search_list("", ""));
                $data['video_list'] = $this->module->get_search_list($config['per_page'], $limit_end);
		// echo "<pre>";print_r($data['category_list']);die;
                $config['total_rows'] = $config['video_list'];
                $this->pagination->initialize($config); 
            
            
		$data['top_video']=$this->module->get_top_video();
		$data['video_admin']=$this->module->get_video_admin();
		$this->load->view('index',$data);
               // $this->load->view("video_category_all",$data);
               
	}
	
function header()
	{
		
		
		$this->load->view('header',$data);
	}
	

	

function signup(){
		$this->load->model('module');
		$this->load->library('session');
		$this->load->library('email');
		$data=array();
		
            //form validation
			//$fname = $this->input->post('fname');
			//echo $fname;die;
			$user_name =$_GET['user_name'];
			$name = $_GET['name'];
			$email = $_GET['email'];
			$password = md5($_GET['password']);
			$role = $_GET['role'];
			$package = $_GET['package'];
			$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
			$reg_date= $date->format('Y-m-d H:i:s');
			$salted = md5($email.time());
		
			$customer_name=$name;
			//$get = $this->input->post('get');
			
			
			//$check_stream=$this->module->$check_email_strem($email);
			
			//$check_user=$this->module->$check_email_user($email);
			
		/*	if(($this->module->check_email_id($email)) && ($this->module->check_viewer_email_id($email)))
			{
				echo "present";
			}
			
			
			else{
			
			*/
				
			
			if($role=="Stremers"){
				
					$confirm_link = site_base_url()."confirmuser/artist_".$salted;
					if($this->module->check_viewer_email_id($email)){
						echo "present";
						
						}
			else if($this->module->check_email_id($email)){
			echo "invalid";
				
				}
           else{
    			$data = array(
									'user_name' => $user_name,
									'name' => $name,
									
									//'user_phone' => $this->input->post('phone'),
									'email' => $email,
									'password'=> $password,
									'activation_id'=>$salted,
									'register_date'=>$reg_date,
									 'status'=>'Pending',
									 'online_status'=>'Offline'
									);
				
				
				$this->module->add_users($data);
			
				$success="success";
			
				
		   }
		}
			if($role=="Viewers"){
					$confirm_link = site_base_url()."confirmuser/user_".$salted;
					
					if($this->module->check_email_id($email)){
						echo "present";
						
						}
					
					
			else if($this->module->check_viewer_email_id($email)==true){
			echo "invalid";
				
				}
           else{
    			$data = array(
									'user_name' => $user_name,
									'name' => $name,
									//'user_phone' => $this->input->post('phone'),
									'user_email' => $email,
									'user_password'=> $password,
									'activation_id'=>$salted,
									//'subscription'=>'Free',
									'register_date'=>$reg_date,
									 'user_status'=>'Pending'
									
									);
				
				
				$this->module->add_viewers_users($data);
				$viewer_id=$insert_id=$this->db->insert_id();
				$this->session->set_userdata('last_id',$viewer_id);
			
				$success="success";
				
		   }
		}
				
			/********************************email to user ****************************************/
				if($success=="success"){
			$emailto = $this->module->get_email_id();
		
			$emailto = $emailto[0]['setting_value'];
		//die;
			
			$body='<html><body style="background-color: #d3f3fc; height: 100%; margin: 0; padding: 0; width: 100%;">
  <center>
   <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" id="bodyTable" style="background-color: #d3f3fc; border-collapse: collapse; height: 100%; margin: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; width: 100%;" width="100%">
    <tr>
     <td align="center" id="bodyCell" style="border-top: 0; height: 100%; margin: 0; mso-line-height-rule: exactly; padding: 10px; width: 100%;" valign="top">
      <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
       <tr>
        <td align="center" style="mso-line-height-rule: exactly; width: 600px;" valign="top" width="600">
      
         <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="border: 0; border-collapse: collapse; max-width: 600px !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
          <tr>
           <td id="templatePreheader" style="background-color: #FAFAFA; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
           </td>
          </tr>
          <tr>
           <td id="templateHeader" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnImageBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnImageBlockOuter">
              <tr>
               <td class="mcnImageBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnImageContent" style="mso-line-height-rule: exactly; padding-bottom: 0; padding-left: 9px; padding-right: 9px; padding-top: 0; text-align: center;" valign="top"><img align="center" alt="" class="mcnImage" src="'.base_url().'img/logo.png" style="border: 0; display: inline !important; height: auto; max-width: 235px; outline: none; padding-bottom: 0; text-decoration: none; vertical-align: bottom;" width="235" /></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateBody" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: left; word-break: break-word;" valign="top">
                    <h1 style="color: #202020; display: block; font-family: Helvetica; font-size: 26px; font-style: normal; font-weight: bold; letter-spacing: normal; line-height: 125%; margin: 0; padding: 0; text-align: left;">&nbsp;</h1>
                    <p style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; margin: 10px 0; mso-line-height-rule: exactly; padding: 0; text-align: left;"><table width="80%" border="0">
			<tr>
			<td colspan="2">
			
			</td>
			</tr>
			<tr>
			<td colspan="2" style="height:10px;"></td>
			</tr>
			<tr>
			<td width="429" colspan="2">
			<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
			<tr>
			<td colspan="2">Dear '.$name.',</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Date & Time: </strong>'.$reg_date.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Full Name: </strong>'.$customer_name.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Email:</strong> '.$email.'</td>
			</tr>
			
			
			
			
			<tr>
			<td colspan="2" height="10px;"><strong>Please go to the link  to activate your streams_site Account:</strong> <a href="'.$confirm_link.'">'.$confirm_link.'</a> </td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><p>Thanks,</p>
			  <p>Streaming Team.</p>
			  <p><a href="'.site_base_url().'">'.site_base_url().'</a></p></td>
			</tr>
</table></p>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateColumns" style="mso-line-height-rule: exactly;" valign="top">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
             <tr>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
           
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
        
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
             </tr>
            </table>
   
           </td>
          </tr>
          <tr>
           <td id="templateFooter" style="background-color: #666666; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnFollowBlockOuter">
              <tr>
               <td align="center" class="mcnFollowBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px;">
                    <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContent" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                     <tbody>
                      <tr>
                       <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px; padding-top: 9px;" valign="top">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                          <tr>
                           <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                             <tr>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                               
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                         
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                           
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                         
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                            
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                             
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 0;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                        
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                             </tr>
                            </table>
                        
                           </td>
                          </tr>
                         </tbody>
                        </table>
                       </td>
                      </tr>
                     </tbody>
                    </table>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #cccccc; font-family: Helvetica; font-size: 12px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: center; word-break: break-word;" valign="top"><em>Copyright &copy; '.date('Y').' &nbsp;streams_site.com , All rights reserved.</em></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
      
     </td>
    </tr>
   </table>
  </center>
 </body>';
			
			
			//echo $body;
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
			
				
			//$this->email->initialize($config);
			$this->email->initialize($config);
			$this->email->from($emailto);
			//$this->email->from("tanay@webhawkstechnology.com", 'Where To Park Team');
			$this->email->to($email);
			//$this->email->to("ddn12525@gmail.com"); 
			$this->email->subject('streams_site.com Sign Up');
			
			$this->email->message($body);
			
			
			$this->email->send();
			// echo $this->email->print_debugger();
			//echo $this->email->print_debugger();
			if($role=="Viewers" && $package=="Feature")
			{
				//$url=site_base_url();
	            echo "feature";
			}else{
				echo "success";
				}
			
			
			
			
			
			//echo $this->email->print_debugger(); die;
				}
				
				
			
			
			
			//}
			
				
				
				
				/*******************************************end*************************************/
			
			
			
		
									
	
	}
	
	function confirmuser(){
		$this->load->model('module');
		$this->load->library('session');
		$salted=$this->uri->segment(2);
		$type = explode('_',$salted);
		$salt=$type[1];

		if($this->module->update_check_sign_user($salt) || $this->module->update_check_sign_artist($salt)){
		if($type[0]=='user'){
			
			
			 $val=$this->module->confirm_user($salt);
			}else{
				
				 $val=$this->module->confirm_artist($salt);
				
				}
		//echo $salted;die;
										//echo $val;die;
										if($val){
										//echo "bittu";die;
										//$url=site_base_url();
										//header('Location:'.$url);
										echo "<script type='text/javascript'>window.location='".site_base_url()."thankyou?message=activation'</script>";
										}
				 }else{
				 
				echo "<script type='text/javascript'>window.location='".site_base_url()."thankyou?message=signup'</script>";
				
				 
				 }
	
	}
	
	
	
	function login(){
		
		
			$this->load->model('module');
			
			
			
			$email =$_GET['email_id'];
			$password1 = $_GET['password1'];
			$password = md5($password1);
			//$role1 = $_GET['role1'];
			$remember_me = $_GET['remember_me'];
			
			if($this->module->check_email_strem($email,$password)==true)
				{
	
				$valid = $this->module->user_valid($email,$password);
				$valid1 = $this->module->user_not_valid($email,$password);
		
			if($valid){
				//$artist_id = $this->session->userdata('artist_id');
//				$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
//				$login_date= $date->format('Y-m-d H:i:s');
//				$data= array(
//							 'online_status'=>'Online',
//							 'login_date'=>$login_date
//							 );
//				 $this->module->update_edit_portfolio($artist_id,$data);
				 echo "Success";	
				
			}
			else if($valid1)
			{
				echo "Pending";
		
			}
			
			}
			
			else if($this->module->check_email_user($email,$password)==true){
		
			//echo "dipanjan";
			$valid = $this->module->user_valid_viewer($email,$password);
		             
			$valid1 = $this->module->user_not_valid_viewer($email,$password);
			if($valid){
				
				//$url=site_base_url()."myaccount"; 
				/*echo "<script>window.location='".$url."';</script>";*/
				echo "Success";		
				
			}
			else if($valid1)
			{
		
			echo "Pending";
			
			}
			
			}
			
			
			
			
			else{
				
				echo "not_succefull";
				
				}
			
			
			
			
			
			
			
			if($valid) 
			{
				
				if(isset($_GET['remember_me'])) 
				{
					//setcookie ("email_id",$email,time()+ (30 * 24 * 60 * 60));
					
						$cookie = array(
						'name'   => 'email_id',
						'value'  => $email,
						'expire' => time()+ (30 * 24 * 60 * 60)
						);
						
						$this->input->set_cookie($cookie);
					//setcookie ("password1",$password,time()+ (30 * 24 * 60 * 60));
						$cookie = array(
						'name'   => 'password1',
						'value'  => $password1,
						'expire' => time()+ (30 * 24 * 60 * 60)
						);
						
						$this->input->set_cookie($cookie);

				} 
				else 
				{
					if(isset($_COOKIE["email_id"])) 
					{
						//setcookie ("email_id","",time()-60);
						
						$cookie = array(
						'name'   => 'email_id',
						'value'  => '',
						'expire' => time()-60
						);
						
						$this->input->set_cookie($cookie);
					}
					if(isset($_COOKIE["password1"])) 
					{
						//setcookie ("password1","",time()-60);
						
						$cookie = array(
						'name'   => 'password1',
						'value'  => '',
						'expire' => time()-60
						);
						
						$this->input->set_cookie($cookie);

					}
				}
			  }
			 
		
	
	}
	/****************************from bittu 24.6***********************************/
	function category_listing()
	{
				
				$this->load->library('session');
				 $segement=$this->uri->segment(2);
				
				$category_id = explode('_',$segement);
				
				$id=$category_id[(count($category_id)-1)];
				
				 $artist_id=$this->session->userdata('artist_id');
				
				$data_to_store = array(
					//'user_id'=>$user_id,
					'category_id' =>$id,
					//'date'=>date("Y-m-d")
					
			        );
 
            // $this->module->insert_video_view($data_to_store);
				
				
				
				
				
				
				$data['furniture_detail']=$this->module->get_detail($furniture_id[(count($category_id)-1)]);
				//$data['relation_id'] = $this->module->get_relation_furniture($furniture_id[(count($category_id)-1)]);
				/*foreach($relation_id as $row){
					
					$data['sub_product_detail'] = $this->module->get_sub_product_detail($row['collection_id']);
					}*/
				$this->load->view('category_listing',$data);
				}
		
	
			
			function photos(){
				if($this->session->userdata("is_logged_in")=="TRUE")
	{
	$this->load->model('module');
	
			if($type=="User"){
				
					$url=site_base_url()."myprofile";
			 echo "<script>window.location='".$url."';</script>";
			exit;
				}else{
					
					$user_id = $this->session->userdata('artist_id');
			
			if(isset($_GET['search_photo']))
	{
		$search = $_GET['search_photo'];
		$data['image']= $this->module->get_image_data_by_search($search,$user_id);
		
	}
	
	else
	{
			
			$data['image']= $this->module->get_image_album_data($user_id);
			
			
	}
			
			$this->load->view('user_photo',$data);
	}
	
	
	
	
	
	
	}
			else
		{
			$url=site_base_url();
			 echo "<script>window.location='".$url."';</script>";
			exit;
		}
			
			
			}
		
		
		function add_photo(){
			$this->load->model('module');
			$type = $this->session->userdata('type');
			if($type=="User"){
				
				$user_id = $this->session->userdata('user_id');
				}else{
					
					$user_id = $this->session->userdata('artist_id');
					}
			if($_FILES['image_handicapper']['name']!='')
		{
			
	
		if(!is_dir('uploads/user_photo/'))
			{
			umask(0);
			mkdir('uploads/user_photo/',0777);
			}
			
		if(!is_dir('uploads/user_photo/thumb'))
			{
			umask(0);
			mkdir('uploads/user_photo/thumb',0777);
			}
			
		$config['upload_path'] = 'uploads/user_photo';
		$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
		$config['overwrite'] = TRUE;
		/*$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';*/
		$time=time();
	
		$image_name=$time."_".$_FILES['image_handicapper']['name'];
		$config['file_name'] = str_replace(" ","_",$image_name);
		
		$UploadFile=$config['file_name'];
		$data['img'] = "";
		
		$this->load->library('upload',$config);
		
		
		if (!$this->upload->do_upload('image_handicapper'))
			{
				$data['error'] = strip_tags($this->upload->display_errors());
				
			}
		else
			{
				
				$this->upload->initialize($config);
				$data['img'] = $config['file_name'];
				$source_image=realpath('uploads/user_photo/'.$config['file_name']);
				
				$config = array(
							'image_library' => 'gd2',
							'source_image' => $source_image,
							//'create_thumb' => TRUE,
							'maintain_ratio' => FALSE,
							'width' => 800,
							'height' =>550,
							'new_image' => 'uploads/user_photo/'.$config['file_name'],
							'thumb_marker' => ''
							);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
						
			$this->image_lib->clear();
     		  $this->image_lib->initialize($config);
      		 $this->image_lib->resize();
			 
			 
			 
		$this->load->library('image_lib');
					$source_image=realpath('uploads/user_photo/'.$UploadFile);
				$config1 = array(
							'image_library' => 'gd2',
							'source_image' => $source_image,
							//'create_thumb' => TRUE,
							'maintain_ratio' => FALSE,
							'width' => 400,
							'height' =>400,
							'new_image' => 'uploads/user_photo/thumb/'.$UploadFile,
							'thumb_marker' => ''
							);
				
			

			$this->image_lib->clear();
     		  $this->image_lib->initialize($config1);
      		 $this->image_lib->resize();
					
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}				
				
				
				
				  }
				  
				   $ount = explode('.', $_FILES['image_handicapper']['name']);
					$des=substr($ount[0],0,15);
							$length = strlen($ount[0]);
							
							if($length>15){
								$moss=$des."..";
								
								}else{
									$moss=$des;
									}
				   
	          $store_img = array(					
					'image' => $UploadFile,
					'artist_id' =>$user_id,
					'image_name' =>$ount[0]
					
								
					);
			  
			  
			
		 $id =  $this->module->store_usr_img($store_img);
		$i = $_GET['i'];
		
		?>
		       <img src="<?=site_base_url()?>uploads/user_photo/thumb/<?php echo $UploadFile; ?>" alt="" id="alu_img_<?=$i?>" height="100" width="150">
               <div class="userimagename" id="name_<?=$i?>">
               <div class="user_names"><p id="igname_<?=$i?>"><?=$moss?></p></div>
               <div class="edit"><a title="Edit Name" onClick="imagenamechange(<?=$i?>)" class="edita"><i class="fa fa-pencil-square"></i></a></div>
               </div>
               <div class="userimagename2" id="edit_<?=$i?>" style="display:none">
                <input type="text" class="editimagename" name="image_name" id="image_name_<?=$i?>"  value="<?=$ount[0]?>" placeholder="Re-enter Image name">
               <button class="tick" onClick="imagenamesave(<?=$id?>,<?=$i?>)"><i class="fa fa-check-square"></i></button>
              
               </div>
               <div class="edit_delet_btns">
                <form action="" class="newsize" method="post" enctype="multipart/form-data" id="mypic_<?=$i?>">
      			 <a title="Edit Image" onClick="document.getElementById('image_file_<?=$i?>').click(); return false;" class="edit_images" ><i class="fa fa-pencil"></i></a>
    								
        							<input type="file" name="image_file_<?=$i?>" onChange="edit_pi(<?=$id?>,<?=$i?>)" id="image_file_<?=$i?>" accept="image" style="visibility: hidden;"/ > 
                                    	<input type="hidden" name="image_name_<?=$i?>" id="image_name_<?=$i?>" value="<?=$UploadFile?>" /> 
 									 </form>
             
               	<a title="Delete Image" onClick="delete_image(<?=$id?>,<?=$i?>)" id="<?=$id?>" class="delete_item_image" ><i class="fa fa-times"></i></a>
               </div>
               <?php
			   $follow = $this->module->get_artist_followby_user($user_id);
			   foreach($follow as $row){
			    $store_img1 = array(
					'artist_id' =>$user_id,
					'user_id' =>$row['user_id'],
					'upload_id' => $id,
					'post_type'	=> 'Image'		
					);
				$this->module->insert_timeline($store_img1);
			
			   }
		}
		else
		{
			echo "empty";

		}
		
		
			
			}
			
			
			
			
			function delete_imagefile(){
				$id=$_GET['id'];
				$img_name = $this->module->get_image_name($id);
		
		if($img_name[0]['image'] != '')
		{
		if(file_exists(realpath('uploads/user_photo/'.$img_name[0]['image'])))
			{
			unlink(realpath('uploads/user_photo/'.$img_name[0]['image']));
		}
		
		if(file_exists(realpath('uploads/user_photo/thumb/'.$img_name[0]['image'])))
			{
			unlink(realpath('uploads/user_photo/thumb/'.$img_name[0]['image']));
		}

		
	} 
				
				$this->module->delete_image($id);
				
				}
		
			function add_user_img()
	{
		//echo "deba"; exit;
		$this->load->model('module');
		$this->load->library('session');
		$this->load->library('email');
		
	//	$data['user_id']=$this->session->userdata('user_id');
		//$user_id = $data['user_id'];
		
		if($this->input->server('REQUEST_METHOD') === 'POST')
		{
			
			//echo($_FILES['file']['name']);die;
			if($_FILES['file']['name']!='')
		{
			
	
		if(!is_dir('uploads/user_image/'))
			{
			umask(0);
			mkdir('uploads/user_image/',0777);
			}
			
		if(!is_dir('uploads/user_image/thumb'))
			{
			umask(0);
			mkdir('uploads/user_image/thumb',0777);
			}
			
	$img_name = $this->input->post("imag_name");
		
		if($img_name != '')
	{
	if(file_exists(realpath('uploads/user_image/'.$img_name)) || file_exists(realpath('uploads/user_image/thumb'.$img_name)))
	{
	unlink(realpath('uploads/user_image/'.$img_name));
	unlink(realpath('uploads/user_image/thumb/'.$img_name));
	}

	$img_name = '';
	
	} 
			
		$config['upload_path'] = 'uploads/user_image';
		$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
		$config['overwrite'] = TRUE;
		/*$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';*/
		$time=time();
	
		$image_name=$time."_".$_FILES['file']['name'];
		$config['file_name'] = str_replace(" ","_",$image_name);
		
		$UploadFile=$config['file_name'];
		$data['img'] = "";
		
		$this->load->library('upload',$config);
		
		
		if (!$this->upload->do_upload('file'))
			{
				$data['error'] = strip_tags($this->upload->display_errors());
				
			}
		else
			{
				
				$this->upload->initialize($config);
				$data['img'] = $config['file_name'];
				$source_image=realpath('uploads/user_image/'.$config['file_name']);
				$this->load->library('image_lib');

				$config = array(
							'image_library' => 'gd2',
							'source_image' => $source_image,
							//'create_thumb' => TRUE,
							'maintain_ratio' => FALSE,
							'width' => 400,
							'height' =>300,
							'new_image' => 'uploads/user_image/'.$config['file_name'],
							'thumb_marker' => ''
							);
				
				
					
				$this->load->library('image_lib',$config);
				
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}				
				
				
				
				
			$this->image_lib->clear();
     		  $this->image_lib->initialize($config);
      		 $this->image_lib->resize();
			 
			 
			 
		$this->load->library('image_lib');
					$source_image=realpath('uploads/user_image/'.$UploadFile);
				$config1 = array(
							'image_library' => 'gd2',
							'source_image' => $source_image,
							//'create_thumb' => TRUE,
							'maintain_ratio' => FALSE,
							'width' => 80,
							'height' =>80,
							'new_image' => 'uploads/user_image/thumb/'.$UploadFile,
							'thumb_marker' => ''
							);
				
			

			$this->image_lib->clear();
     		  $this->image_lib->initialize($config1);
      		 $this->image_lib->resize();
					
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}				
				
				
				
				  }
	          
			
		}
		else
		{
			$UploadFile = '';
		}
		
		$store_img1 = array(					
					'image' => $UploadFile
								
					);
		
		$type = $this->session->userdata('type');
			if($type=="User"){
				
				$user_id = $this->session->userdata('user_id');
				 $this->module->store_usr_pro_img($user_id,$store_img1);
				}else{
					
					$user_id = $this->session->userdata('artist_id');
					 $this->module->store_ars_pro_img($user_id,$store_img1);
					}
			//echo "<pre>"; print_r($store_img);	die;	
		
			}
		
		echo $UploadFile;
		
		
	}
	
	function myportfolio()
{ 

	if($this->session->userdata("is_logged_in")=="TRUE")
	{
	if($type=="User"){
				
					$url=site_base_url()."myprofile";
			 echo "<script>window.location='".$url."';</script>";
			exit;
				}else{
					
				$this->load->view("myportfolio");
	}
	
	
	}
			else
		{
			$url=site_base_url();
			header('Location:'.$url);
			exit;
		}
	
}
		
		
		
		function edit_portfolio(){
		
	
			if($this->session->userdata('is_logged_in')=='1')
			{
				$type = $this->session->userdata('type');
			if($type=="User"){
				
				$url=site_base_url()."myprofile";
			 echo "<script>window.location='".$url."';</script>";
			exit;
				}else{
					
					$user_id = $this->session->userdata('artist_id');
					$data['user_details']= $this->module->get_artist_detail($user_id);
						$this->load->view('edit_portfolio',$data);
					}
					
			//$user_id = $this->session->userdata('artist_id');
		    //$data['user_details']= $this->module->get_artist_detail($user_id);
			
			//print_r ($data);die;
		
			}else{
				
				$url=site_base_url();
			//header('Location:'.$url);
			echo "<script>window.location='".$url."';</script>";
			exit;
				
				}
				
			
			
		}
		 function artist_detail(){
		 	$segement=$this->uri->segment(2);
			$atrist_id = explode('_',$segement);
			$atrist_id= $atrist_id[(count($atrist_id)-1)];
			$atrist_details= $this->module->get_artist_detail($atrist_id); 
				$cat_id= $atrist_details[0]['category_type'];
		  $ip= $this->input->ip_address();
		  
	$user_id = $this->session->userdata('user_id');
	
	
	if(empty($this->module->checking_banned_user($user_id,$atrist_id)))
	{
	
	
	
	
	
	
	//$artist_id=$details[0]['artist_id'];
	
	$date = date("Y-m-d");
	$artist_view =  $this->module->get_artist_view($atrist_id,$ip,$date);
	
	if(empty($artist_view)){
	//echo "<pre>"; print_r($details); die;	
		$data1=array(
					'artist_id'=>$atrist_id,
					'ip_address'=>$ip,
					'date'=>date("Y-m-d")
					
			        );
 
$this->module->insert_artist_view($data1);
	}	
		$data['atrist_details']= $this->module->get_artist_detail($atrist_id); 
		$data['artist_album'] = $this->module->get_image_data($atrist_id); 
		$data['artist_video'] = $this->module->get_video_data($atrist_id); 
		$data['recorded_video'] = $this->module->get_recorded_video_data($atrist_id);
		$data['schedule_list_artist'] = $this->module->get_scheduled_time_artist($atrist_id);
	
		$data['related_perfromer'] = $this->module->get_related_performer();
			$data['online_perfromer'] = $this->module->get_online_performer();
			
			//print_r($data);die;
		
		$this->load->view("user_detail",$data);
		
		
	}
	
	else{
		
 echo "<script type='text/javascript'>window.location='".site_base_url()."banned'</script>";
		
	}
	
	
	
	
	
		 
		 }  
	   
		/****************************************************************************************/
		/******************************************22.6.17*************************************/
		function myprofile()
		{ 

	if($this->session->userdata("is_logged_in")=="TRUE")
	{
	$type = $this->session->userdata('type');
			if($type=="User"){
				
				$user_id = $this->session->userdata('user_id');
				$data['detail']= $this->module->get_user_detail($user_id);
				}else{
					
					$user_id = $this->session->userdata('artist_id');
					$data['detail']= $this->module->get_artist_detail($user_id);
					}
	$this->load->view("myprofile",$data);
	
	}
			else
		{
			$url=site_base_url();
			header('Location:'.$url);
			exit;
		}
	
}
		
	
		/***************************************************************************************/
function general_information_edit()
	{
//echo "nnnnnn"; die;
		
    $this->load->model('module');
	//$this->load->library('session');
	//$this->session->all_userdata();
	$user_id=$this->session->userdata('artist_id');
	$profile=$this->session->userdata('profile');
	if($this->session->userdata('is_logged_in')=='1')
		{
		//	$user_id=$this->session->userdata('user_id');
			
			if ($this->input->server('REQUEST_METHOD') === 'POST')
	      {
			//echo "hhhh" ; die;
		
		//echo "<pre>"; print_r($_POST); die;birth_date
		$name= $this->input->post('name');
    // echo $fname ; die;
$birth_date= $this->input->post('birth_date');
$sex= $this->input->post('sex');
$interested_in= $this->input->post('interested_in');
				if($interested_in!=''){
                $inserted= implode(",",$interested_in);
				}

$location	= $this->input->post('location');
$last_broadcast= $this->input->post('last_broadcast');
$language_known= $this->input->post('language_known');
if($language_known!=''){
               $language=implode(",",$language_known);
				}
                
$body_type=$this->input->post('body_type');
$about_me= $this->input->post('about_me');
$orientation= $this->input->post('orientation');
 $haircolor=$this->input->post('haircolor');
$eyecolor=$this->input->post('eyecolor');
 $ethnicity=$this->input->post('ethnicity');
 $category=$this->input->post('category');
		
		
	   $data=array('name'=>$name,
				   'birth_date'=>$birth_date,
			      'sex'=>$sex,
			      'interested_in'=>$inserted ,
			      'location'=>$location,
			     'last_broadcast'=>$last_broadcast,
				 'language_known'=>$language,
				 'body_type'=>$body_type,
				 'about_me'=>$about_me,
				 'orientation'=>$orientation,
				 'haircolor'=>$haircolor,
				 'eyecolor'=>$eyecolor,
				 'ethnicity'=>$ethnicity,
				 'category_type'=>$category
			  );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->update_edit_portfolio($user_id,$data);
    
		echo "<script type='text/javascript'>window.location='".site_base_url()."myportfolio'</script>";
	
	       }
	
		 //$data['user_details']=$this->module->get_all_information($this->session->userdata('user_id'));

	//$this->load->view('my_favourite',$data);
	 }
	else
	{
		redirect(site_base_url()."login"); 
		}

	}
	
	function imagenamesave(){
		$id=$_GET['id'];
		$data = array(
					  'image_name'=>$_GET['name']
					  );
		
		$this->module->update_image_name($id,$data);
			$des=substr($_GET['name'],0,15);
							$length = strlen($_GET['name']);
							
							if($length>15){
								echo $moss=$des."..";
								
								}else{
									echo $moss=$des;
									}
		
		
		}
	function edit_photo(){
		
		$i =$_GET['i'];
		$id=$_GET['id'];
		
	    $img_name = $this->input->post("image_name_".$i);
		//echo $img_name;
		if($img_name != '')
	{
	if(file_exists(realpath('uploads/user_photo/'.$img_name)))
	{
	unlink(realpath('uploads/user_photo/'.$img_name));
	}
	if(file_exists(realpath('uploads/user_photo/thumb/'.$img_name)))
	{
	unlink(realpath('uploads/user_photo/thumb/'.$img_name));
	}

	$img_name = '';
	
	} 
		 
		 		if( $_FILES['image_file_'.$i]['name']!='')
		{
			
	
		if(!is_dir('uploads/user_photo/'))
			{
			umask(0);
			mkdir('uploads/user_photo/',0777);
			}
			
		$config['upload_path'] = 'uploads/user_photo';
		$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
		$config['overwrite'] = TRUE;
		/*$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';*/
		$time=time();
	
		$image_name=$time."_". $_FILES['image_file_'.$i]['name'];
		$config['file_name'] = str_replace(" ","_",$image_name);
		
		$UploadFile=$config['file_name'];
		$data['img'] = "";
		
		$this->load->library('upload',$config);
		
		
		if (!$this->upload->do_upload('image_file_'.$i))
			{
				$data['error'] = strip_tags($this->upload->display_errors());
				
			}
		else
			{
				
				$this->upload->initialize($config);
				$data['img'] = $config['file_name'];
				$source_image=realpath('uploads/user_photo/'.$config['file_name']);
				
				$config = array(
							'image_library' => 'gd2',
							'source_image' => $source_image,
							//'create_thumb' => TRUE,
							'maintain_ratio' => FALSE,
							'width' => 800,
							'height' =>600,
							'new_image' => 'uploads/user_photo/'.$config['file_name'],
							'thumb_marker' => ''
							);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}	
				
				$this->image_lib->clear();
     		  $this->image_lib->initialize($config);
      		 $this->image_lib->resize();
			 
			 
			 
		$this->load->library('image_lib');
					$source_image=realpath('uploads/user_photo/'.$UploadFile);
				$config1 = array(
							'image_library' => 'gd2',
							'source_image' => $source_image,
							//'create_thumb' => TRUE,
							'maintain_ratio' => FALSE,
							'width' => 400,
							'height' =>400,
							'new_image' => 'uploads/user_photo/thumb/'.$UploadFile,
							'thumb_marker' => ''
							);
				
			

			$this->image_lib->clear();
     		  $this->image_lib->initialize($config1);
      		 $this->image_lib->resize();
					
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}				
				
				
				  }
				  
				   $ount = explode('.', $_FILES['image_file_'.$i]['name']);
				
				   
	          $data = array(					
					'image' => $UploadFile,
					'image_name'=>$ount[0]
					);
			
		 $this->module->update_image_name($id,$data);
	
		echo $UploadFile;

		}else
		{
			echo "empty";
		}
		}
		
		function category_page(){
			
					
				if($this->uri->segment(1)!='search_page'){
				$segement=$this->uri->segment(2);
				$cat_id = explode('_',$segement);
				 $category_id= $cat_id[(count($cat_id)-1)];
				 
				}
				
		if($category_id !=''){		
		$config['per_page'] = 12;
        $config['base_url'] = site_base_url().'category_page/'.$segement;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
		$config['uri_segment'] = 3;
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
         $page = $this->uri->segment(3);
		}else{
			
			$config['per_page'] = 12;
        $config['base_url'] = site_base_url().'search_page';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
		$config['uri_segment'] = 2;
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
         $page = $this->uri->segment(2);
			}
			//echo $page;
		 $limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        } 
		
	
		$config['total_rows']=count($this->module->get_cat_detail_user($category_id,"",""));

		$data['category_detail']=$this->module->get_cat_detail_user($category_id,$config['per_page'],$limit_end);
	
		 $this->pagination->initialize($config);  
		 
		$data['limit_end'] = $limit_end;
				
			
			
			$this->load->view("category_page.php",$data);
			}
			
			
			
			function filtering_page(){
				$body_type= $_GET['body'];
				$intertest= $_GET['intertest'];
				$orientation= $_GET['orientation'];
				$hair_color= $_GET['hair_color'];
				$ethnicity= $_GET['ethnicity'];
				$eye_color= $_GET['eye_color'];
				$id = $_GET['cat_id'];
				$age = $_GET['age'];
				$from_date = $_GET['from_date'];
				$to_date = $_GET['to_date'];
				
				$item_per_page 	= 6;
				if(isset($_GET["page"])){
	$page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
	if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}

else{
	$page_number = 1; //if there's no page number, set it to 1
}
					
				$get_total_rows=count($this->module->get_filtering_list($body_type,$intertest,$orientation,$hair_color,$ethnicity,$eye_color,$id,$age,'',''));
				$total_pages = ceil($get_total_rows/$item_per_page);
$page_position = (($page_number-1) * $item_per_page);
				$result = $this->module->get_filtering_list($body_type,$intertest,$orientation,$hair_color,$ethnicity,$eye_color,$id,$age,$item_per_page,$page_position);
				
				  foreach($result as $row){ ?>
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                        <?php if($row['image']!=''){ ?>
                            <a href="<?=site_base_url();?>artist_detail/<?=urlencode(str_replace(" ","_",$row['name']))._.$row['artist_id']?>"><img src="<?php echo site_base_url(); ?>uploads/user_image/<?php echo $row['image']; ?>" alt=""></a>
                            <?php }else{ ?>
                                <a href="<?=site_base_url();?>artist_detail/<?=urlencode(str_replace(" ","_",$row['name']))._.$row['artist_id']?>"><img src="<?php echo base_url(); ?>img/myimage1.png" alt=""></a>
                            <?php } ?>
                            
                        </div>
                        <div class="f_video_bottom">
                        <h5><?php echo $row['name']; ?></h5>
                            <p><?php echo $row['total']; ?> viewer <?php if($row['online_status']=='Online'){?><i class="fa fa-circle online_status" ></i><?php }else{?>
                            <i class="fa fa-circle offline_status" ></i><?php } ?></p>
                        </div>
                	</div>
                </div>
                     <?php }
					 ?>
                      <div style="clear:both"></div>
							  <div class="page" id="results"><!------------------------------------></div>
                              
                               <div style="clear:both"></div>
                               <div id="results">
                             	 <?php
                               echo '<div id="abc">';
								echo $this->paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
								echo '</div>';
								?>
   								</div>
                     <?php
					
                             
							
				
				}
				public function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
		{
			$pagination = '';
			if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
				$pagination .= '<ul class="pagination">';
				
				$right_links    = $current_page + 3;
				if($current_page - 3<=0){
				$previous       = $current_page - 1;
				}
				else
				{
				$previous       = $current_page - 3;
				}//previous link 
				$next           = $current_page + 1; //next link
				$first_link     = true; //boolean var to decide our first link
				
				if($current_page > 1){
					
					$previous_link = ($previous==0)?1:$previous;
					$pagination .= '<li class="first"><a href="#" data-page="1" onClick="pagination(1)" title="First">&laquo;</a></li>'; //first link
					$pagination .= '<li><a href="#" data-page="'.$previous_link.'" onClick="pagination('.$previous_link.')" title="Previous">&lt;</a></li>'; //previous link
						for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
							if($i > 0){
								$pagination .= '<li><a href="#"  onClick="pagination('.$i.')" title="Page'.$i.'">'.$i.'</a></li>';
							}
						}   
					$first_link = false; //set first link to false
				}
				
				if($first_link){ //if current active page is first link
					$pagination .= '<li class="first active"><span>'.$current_page.'</span></li>';
				}elseif($current_page == $total_pages){ //if it's the last active link
					$pagination .= '<li class="last active"><span>'.$current_page.'</span></li>';
				}else{ //regular current link
					$pagination .= '<li class="active"><span>'.$current_page.'</span></li>';
				}
						
				for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
					if($i<=$total_pages){
						$pagination .= '<li><a href="#" onClick="pagination('.$i.')" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
					}
				}
				if($current_page < $total_pages){ 
						
						 $next_link = ($next > $total_pages)? $total_pages : $next;
						$pagination .= '<li><a href="#" onClick="pagination('.$next_link.')" data-page="'.$next_link.'" title="Next">&gt;</a></li>'; //next link
						$pagination .= '<li class="last"><a href="#" data-page="'.$total_pages.'" onClick="pagination('.$total_pages.')" title="Last">&raquo;</a></li>'; //last link
				}
				
				$pagination .= '</ul>'; 
			}
			return $pagination; //return pagination links
		}	
	 
		/*************************************************22.6.17*********************************************************/	
			function edit_profile(){
	
		
	
			if($this->session->userdata('is_logged_in')=='1')
			{
				$type = $this->session->userdata('type');
				
			if($type=="User"){
				$user_id = $this->session->userdata('user_id');
					$data['user_details']= $this->module->get_user_profile_detail($user_id);
				
			
				}else{
						$user_id = $this->session->userdata('artist_id');
				$data['user_details']= $this->module->get_artist_profile_detail($user_id);
					
					}
					
			//$user_id = $this->session->userdata('artist_id');
		    //$data['user_details']= $this->module->get_artist_detail($user_id);
			
			//print_r ($data);die;
			$this->load->view('edit_profile',$data);
			}else{
				
				$url=site_base_url();
			//header('Location:'.$url);
			echo "<script>window.location='".$url."';</script>";
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
   
	    
    
		echo "<script type='text/javascript'>window.location='".site_base_url()."myprofile'</script>";
	
	       }
	
		 //$data['user_details']=$this->module->get_all_information($this->session->userdata('user_id'));

	//$this->load->view('my_favourite',$data);
	 }
	else
	{
		redirect(site_base_url()); 
		}

	}
	
	function logout()
	{
		
		$type=$this->session->unset_userdata("type");
		if($type=='Artist'){
			
			$artist_id = $this->session->userdata('artist_id');
				$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
				$login_date= $date->format('Y-m-d H:i:s');
				$data= array(
							 'online_status'=>'Offline',
							 'last_login_time'=>$login_date
							 );
				 $this->module->update_edit_portfolio($artist_id,$data);
			}
		
	$this->session->unset_userdata("user_id");
	$this->session->unset_userdata("artist_id");
	$this->session->unset_userdata("type");
	$this->session->unset_userdata("is_logged_in");
	$url=site_base_url(); 
				echo "<script>window.location='".$url."home/index';</script>";
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
								
								echo "<script type='text/javascript'>window.location='".site_base_url()."myprofile'</script>";
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
						
						echo "<script type='text/javascript'>window.location='".site_base_url()."myprofile'</script>";
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
		echo "<script type='text/javascript'>window.location='".site_base_url()."password_change'</script>";
			
			}else{
				
				$url=site_base_url();
			//header('Location:'.$url);
			echo "<script>window.location='".$url."';</script>";
			exit;
				
				}
		
	
	
	}
	function password_change()
{ 

	if($this->session->userdata("is_logged_in")=="TRUE")
	{
	
	$this->load->view("changepassword");
	
	}
			else
		{
			$url=site_base_url();
			header('Location:'.$url);
			exit;
		}
	
}
	
	
/**************************************************************/	
	function aboutus()
	{
		$page_about=$this->module->get_pagecontent_details('About Us');
		$data['image']=$page_about[0]['image'];
		$data['about_us']=$page_about[0]['page_content'];
		
		$this->load->view('aboutus',$data);
	}
	
	function help()
	{
		$page_about=$this->module->get_pagecontent_details('Help');
		
		$data['image']=$page_about[0]['image'];
		
		$data['help']=$page_about[0]['page_content'];
		
		
		$this->load->view('help',$data);
	}
	
	function privacypolicy()
	{
		$page_about=$this->module->get_pagecontent_details('PrivacyPolicy');
		$data['image']=$page_about[0]['image'];
		$data['PrivacyPolicy']=$page_about[0]['page_content'];
		$this->load->view('privacypolicy',$data);
	}
	function termsandcondition()
	{
		$page_about=$this->module->get_pagecontent_details('Terms and Condition');
		$data['image']=$page_about[0]['image'];
		$data['terms']=$page_about[0]['page_content'];
		
		$this->load->view('termsandcondition',$data);
	}
	function ad_choice()
	{
		$page_about=$this->module->get_pagecontent_details('Ad choice');
		$data['image']=$page_about[0]['image'];
		$data['ad_choice']=$page_about[0]['page_content'];
		
		$this->load->view('ad_choice',$data);
	}
	
	  
	function artist_video(){
	
		if($this->session->userdata('is_logged_in')=='1')
			{
				$type = $this->session->userdata('type');
			if($type=="User"){
				
				$url=site_base_url()."myprofile";
			 echo "<script>window.location='".$url."';</script>";
			exit;
				}else{
					
					$artist_id=$this->session->userdata('artist_id');
					
			if(isset($_GET['search_video']))
	{
		$search = $_GET['search_video'];
		//echo $search;
		//echo $artist_id;
		//die;
		$this->load->model('module');
		$this->load->library('Pagination');
			
		$config['per_page'] =16;
		$config['base_url'] = site_base_url().'artist_video/';
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
$config['artist_video'] = count($this->module->get_artist_video_by_search($search,$artist_id,"",""));
$data['artist_video'] = $this->module->get_artist_video_by_search($search,$artist_id,$config['per_page'],$limit_end);
// echo "<pre>";print_r($data['category_list']);die;
$config['total_rows'] = $config['artist_video'];
$this->pagination->initialize($config); 
		
		
	}	
				
				
		else
		{
				
				
				
		$this->load->model('module');
		$this->load->library('Pagination');
			
		$config['per_page'] =9;
		$config['base_url'] = site_base_url().'artist_video/';
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
					
					
					
$config['artist_video'] = count($this->module->get_artist_video($artist_id,"",""));
$data['artist_video'] = $this->module->get_artist_video($artist_id,$config['per_page'],$limit_end);
// echo "<pre>";print_r($data['category_list']);die;
$config['total_rows'] = $config['artist_video'];
$this->pagination->initialize($config); 				
					
		}
			
		//$data['artist_video']=$this->module->get_artist_video($artist_id);
	//	echo "<pre>";
	//			var_dump($data);
	//			echo "<pre>";
	//			exit;
		
		$this->load->view("artist_video",$data);
					}
					
			//$user_id = $this->session->userdata('artist_id');
		    //$data['user_details']= $this->module->get_artist_detail($user_id);
			
			//print_r ($data);die;
	
			}else{
				
				$url=site_base_url();
			//header('Location:'.$url);
			echo "<script>window.location='".$url."';</script>";
			exit;
				
				}
		
		
		}  
		
		function ajax_multiplefiles_handler(){
			
				$this->load->view("ajax-multiplefiles-handler.php");
			}
			
			
			
	
	
	function image_view(){
		$this->load->model('module');
		$this->load->library('session');
 $image_id = $this->uri->segment(2);
  $ip= $this->input->ip_address();
	$details = $this->module->get_image_name($image_id);
	$artist_id=$details[0]['artist_id'];
	$image=$details[0]['image'];
	$date = date("Y-m-d");
	$image_view =  $this->module->get_image_view($image_id,$ip,$date);
	
	if(empty($image_view)){
	//echo "<pre>"; print_r($details); die;	
		$data=array(
					'artist_id'=>$artist_id,
					'image_id' =>$image_id,
					'ip_address'=>$ip,
					'date'=>date("Y-m-d")
					
			        );
 
$this->module->insert_photo_view($data);
 //echo "<img src="'.site_base_url().'/uploads/user_photo/">";
	}
 //$result = $row['image'];
echo '<img src="'.site_base_url().'/uploads/user_photo/'.$image.'">'; 

		}
		
		
		function artist_view(){
		$this->load->model('module');
		$this->load->library('session');
 $artist_id = $this->uri->segment(2);
  $ip= $this->input->ip_address();
	$details = $this->module->get_artist_name($artist_id);
	//$artist_id=$details[0]['artist_id'];
	$image=$details[0]['image'];
	$date = date("Y-m-d");
	$artist_view =  $this->module->get_artist_view($artist_id,$ip,$date);
	
	if(empty($artist_view)){
	//echo "<pre>"; print_r($details); die;	
		$data=array(
					'artist_id'=>$artist_id,
					'artist_id' =>$artist_id,
					'ip_address'=>$ip,
					'date'=>date("Y-m-d")
					
			        );
 
$this->module->insert_artist_view($data);
 //echo "<img src="'.site_base_url().'/uploads/user_photo/">";
	}
 //$result = $row['image'];
//echo '<img src="'.site_base_url().'/uploads/user_photo/'.$image.'">'; 
$this->load->view("user_detail",$data);
		}
		
		
		
		
	
		function forget_password()
	{
	//echo "fjhfdgjhfdgj"; die;
	//$this->load->library('email');
		$this->load->model('module');
		$this->load->library('session');
		$data=array();
        $cur_year = date('Y');
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
			     $member_email = addslashes($this->input->post('email'));
			   //die;
		/*********************************************************artist**********************************************************************************************/         
				if($this->module->artist_forget_password($member_email)==true)
				{
					//echo "hhdhdgh";die;
					
				 $time=time();
	 		  $forgot_password_id=md5($time);
			   //$noreply_email='noreply@webhawkstechnology.com';
			
			 $reset_link=site_base_url()."reset_password/".$forgot_password_id;
			 
			 $data_to_store = array(
			'forgot_password_id' => $forgot_password_id
			);
			 
			 if($this->module->update_forgot_password_link($member_email,$data_to_store)){
							$data['update_message'] = TRUE; 
						}
						else
						{
							$data['update_message'] = FALSE; 
						}
	 
			$this->db->select('name');
		     $this->db->select('user_name');
			$this->db->select('email');
			$this->db->where('email', $member_email);
			$this->db->from('stream_artist');
			$query = $this->db->get();
			
			$member_details=$query->result_array(); 
					
					
		    $name=stripslashes($member_details[0]['name']);
			$user_name=stripslashes($member_details[0]['user_name']);
			$email=stripslashes($member_details[0]['email']);
			
			$value = "success";
				}
				
			if($this->module->user_forget_password($member_email)==true)
				{
					//echo "hhdhdgh";die;
					
				 $time=time();
	 		  $forgot_password_id=md5($time);
			   //$noreply_email='noreply@webhawkstechnology.com';
			
			 $reset_link=site_base_url()."reset_password/".$forgot_password_id;
			
			 $data_to_store = array(
			'forgot_password_id' => $forgot_password_id
			);
			
			 if($this->module->update_forgot_password_link_user($member_email,$data_to_store)){
							$data['update_message'] = TRUE; 
						}
						else
						{
							$data['update_message'] = FALSE; 
						}
	 
	 
			$this->db->select('name');
		     $this->db->select('user_name');
			$this->db->select('user_email');
			$this->db->where('user_email', $member_email);
			$this->db->from('stream_user');
			$query = $this->db->get();
			
			$member_details=$query->result_array(); 
					
					
		    $name=stripslashes($member_details[0]['name']);
			$user_name=stripslashes($member_details[0]['user_name']);
			$email=stripslashes($member_details[0]['user_email']);
			$value = "success";
				}
				if($value == "success"){
			
			
			$email_to = $this->module->get_email_id();
		
			$emailto = $email_to[0]['setting_value'];
			//echo $admin_email;
			//die;
			$this->load->library('email');
			$date=date("y-m-d");
			$time_email=date("h:i A");
	$message='<html><body style="background-color: #d3f3fc; height: 100%; margin: 0; padding: 0; width: 100%;">
  <center>
   <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" id="bodyTable" style="background-color: #d3f3fc; border-collapse: collapse; height: 100%; margin: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; width: 100%;" width="100%">
    <tr>
     <td align="center" id="bodyCell" style="border-top: 0; height: 100%; margin: 0; mso-line-height-rule: exactly; padding: 10px; width: 100%;" valign="top">
      <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
       <tr>
        <td align="center" style="mso-line-height-rule: exactly; width: 600px;" valign="top" width="600">
      
         <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="border: 0; border-collapse: collapse; max-width: 600px !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
          <tr>
           <td id="templatePreheader" style="background-color: #FAFAFA; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
           </td>
          </tr>
          <tr>
           <td id="templateHeader" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnImageBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnImageBlockOuter">
              <tr>
               <td class="mcnImageBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnImageContent" style="mso-line-height-rule: exactly; padding-bottom: 0; padding-left: 9px; padding-right: 9px; padding-top: 0; text-align: center;" valign="top"><img align="center" alt="" class="mcnImage" src="'.base_url().'img/logo.png" style="border: 0; display: inline !important; height: auto; max-width: 235px; outline: none; padding-bottom: 0; text-decoration: none; vertical-align: bottom;" width="235" /></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateBody" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: left; word-break: break-word;" valign="top">
                    <h1 style="color: #202020; display: block; font-family: Helvetica; font-size: 26px; font-style: normal; font-weight: bold; letter-spacing: normal; line-height: 125%; margin: 0; padding: 0; text-align: left;">&nbsp;</h1>
                    <p style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; margin: 10px 0; mso-line-height-rule: exactly; padding: 0; text-align: left;"><table width="80%" border="0">
			<tr>
			<td colspan="2">
			
			</td>
			</tr>
			<tr>
			<td colspan="2" style="height:10px;"></td>
			</tr>
			<tr>
			<td width="429" colspan="2">
			<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
			<tr>
			<td colspan="2">Dear '.$name.',</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;">You are request for Change your Password.<br>So Please Click the given bellow Link.<br>And Create a New Password.</td>
			</tr>
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Date & Time: </strong>'.$date.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Full Name: </strong>'.$name.'  </td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Email:</strong> '.$email.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Password Reset Link:</strong> <a href="'.$reset_link.'">'.$reset_link.'</a> </td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><p>Thanks,</p>
			  <p>Kidsroom.</p>
			  <p><a href="'.site_base_url().'">'.site_base_url().'</a></p></td>
			</tr>
</table></p>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateColumns" style="mso-line-height-rule: exactly;" valign="top">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
             <tr>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
           
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
        
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
             </tr>
            </table>
   
           </td>
          </tr>
          <tr>
           <td id="templateFooter" style="background-color: #666666; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnFollowBlockOuter">
              <tr>
               <td align="center" class="mcnFollowBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px;">
                    <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContent" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                     <tbody>
                      <tr>
                       <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px; padding-top: 9px;" valign="top">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                          <tr>
                           <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                             <tr>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                               
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$twitter.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-twitter-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                           
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$facebook.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                            
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                             
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 0;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$google_plus.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-googleplus-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                             </tr>
                            </table>
                        
                           </td>
                          </tr>
                         </tbody>
                        </table>
                       </td>
                      </tr>
                     </tbody>
                    </table>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #cccccc; font-family: Helvetica; font-size: 12px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: center; word-break: break-word;" valign="top"><em>Copyright &copy; 2015 &nbsp;Streamsite , All rights reserved.</em></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
      
     </td>
    </tr>
   </table>
  </center>
 </body>';		
 
     // echo $message;die;
			
			    	$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
				
				$this->email->initialize($config);
				$this->email->from($emailto, 'streams_site');
				$this->email->to($email);
				//$this->email->cc($alternate_admin_email);
				$this->email->subject('streams_site:Forgot Password');
				$this->email->message($message);
				$this->email->send();
			
			
			
			$data['forgot_flash_message'] = TRUE;
				}
			
			
					
				
					
				}
	/******************************************user*******************************************************/			
				
			/********************************email end**************************************/		
		
		
		
		else {
			//echo "ggggggggggggggg";die;
					$data['forgot_message_error'] = FALSE;
				}
		
		
		
		
		
		
		
			$this->load->view('forget_password',$data);
	
	
		}
		
		function reset_password()
	{	
	
	
	//echo 'gggg';
	//die;
	$r_id=$this->uri->segment(2);
	
	if($this->module->update_check_user($r_id) || $this->module->update_check_artist($r_id)){
	
		$this->load->model('module');
		$this->load->library('session');
		
		
		
		$cur_year = date('Y');
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				//$id=$this->uri->segment(2);
				$password = md5($this->input->post('new_password'));
				$hid_id = $this->input->post('hid_id');
				
			
		// $id=$this->uri->segment(2);
		//print_r($data_to_store);
		//die;
		
		if($this->module->update_check_artist($hid_id))
		{
					

			$this->db->select('name');
			$this->db->select('user_name');
			$this->db->select('email');
			$this->db->where('forgot_password_id',$hid_id);
			$this->db->from('stream_artist');
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			$member_details=$query->result_array();
			//print_r($member_details);die;
			$name=stripslashes($member_details[0]['fname']);
			$user_name=stripslashes($member_details[0]['user_name']);
			$email=stripslashes($member_details[0]['email']);
				 $data_to_store = array(
				'password' => $password,
				'forgot_password_id' => ''
			);
				 //echo  $data_to_store;
			 $this->module->update_forgot_new_password($hid_id,$data_to_store);
			$data ='true';
			
			}
			
				
				
			 if($this->module->update_check_user($hid_id))
			{
					

			$this->db->select('name');
			$this->db->select('user_name');
			$this->db->select('user_email');
			$this->db->where('forgot_password_id',$hid_id);
			$this->db->from('stream_user');
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			$member_details=$query->result_array();
			//print_r($member_details);die;
			$name=stripslashes($member_details[0]['fname']);
			$user_name=stripslashes($member_details[0]['user_name']);
			$email=stripslashes($member_details[0]['user_email']);
				 $data_to_store = array(
			'user_password' => $password,
			'forgot_password_id' => ''
			);
				///print($data_to_store);
			 $this->module->update_forgot_new_password_user($hid_id,$data_to_store);
			$data ='true';
			
				}
			
				
				
			//$member_name=$member_fname." ".$member_lname;
				
				
				
				
				
				
		if($data=='true'){
		   $this->db->select('*');
		   	$this->db->from('stream_setting');
			$this->db->where("setting_key","admin_email");
			$p=$this->db->get();
			$data = $p->result_array();
			$admin_email=stripslashes($data[0]['setting_value']);
			
			
			
			
					
			$message ='<html><body style="background-color: #d3f3fc; height: 100%; margin: 0; padding: 0; width: 100%;">
  <center>
   <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" id="bodyTable" style="background-color: #d3f3fc; border-collapse: collapse; height: 100%; margin: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; width: 100%;" width="100%">
    <tr>
     <td align="center" id="bodyCell" style="border-top: 0; height: 100%; margin: 0; mso-line-height-rule: exactly; padding: 10px; width: 100%;" valign="top">
      <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
       <tr>
        <td align="center" style="mso-line-height-rule: exactly; width: 600px;" valign="top" width="600">
      
         <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="border: 0; border-collapse: collapse; max-width: 600px !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
          <tr>
           <td id="templatePreheader" style="background-color: #FAFAFA; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
           </td>
          </tr>
          <tr>
           <td id="templateHeader" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnImageBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnImageBlockOuter">
              <tr>
               <td class="mcnImageBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnImageContent" style="mso-line-height-rule: exactly; padding-bottom: 0; padding-left: 9px; padding-right: 9px; padding-top: 0; text-align: center;" valign="top"><img align="center" alt="" class="mcnImage" src="'.base_url().'img/logo.png" style="border: 0; display: inline !important; height: auto; max-width: 235px; outline: none; padding-bottom: 0; text-decoration: none; vertical-align: bottom;" width="235" /></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateBody" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: left; word-break: break-word;" valign="top">
                    <h1 style="color: #202020; display: block; font-family: Helvetica; font-size: 26px; font-style: normal; font-weight: bold; letter-spacing: normal; line-height: 125%; margin: 0; padding: 0; text-align: left;">&nbsp;</h1>
                    <p style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; margin: 10px 0; mso-line-height-rule: exactly; padding: 0; text-align: left;"><table width="80%" border="0">
			<tr>
			<td colspan="2">
			
			</td>
			</tr>
			<tr>
			<td colspan="2" style="height:10px;"></td>
			</tr>
			<tr>
			<td width="429" colspan="2">
			<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
			<tr>
			<td colspan="2">Dear '.$member_fname.',</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;">Your Password has been Changed Successfully.<br>Your Current User Email is given bellow.</td>
			</tr>
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Full Name: </strong>'.$name.' </td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Email:</strong> '.$member_email.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><p>Thanks,</p>
			  <p>Kidsroom.com Team.</p></td>
			</tr>
</table></p>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateColumns" style="mso-line-height-rule: exactly;" valign="top">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
             <tr>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
           
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
        
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
             </tr>
            </table>
   
           </td>
          </tr>
          <tr>
           <td id="templateFooter" style="background-color: #666666; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnFollowBlockOuter">
              <tr>
               <td align="center" class="mcnFollowBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px;">
                    <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContent" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                     <tbody>
                      <tr>
                       <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px; padding-top: 9px;" valign="top">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                          <tr>
                           <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                             <tr>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                               
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$twitter.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-twitter-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                           
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$facebook.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                            
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                             
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 0;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$google_plus.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-googleplus-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                             </tr>
                            </table>
                        
                           </td>
                          </tr>
                         </tbody>
                        </table>
                       </td>
                      </tr>
                     </tbody>
                    </table>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #cccccc; font-family: Helvetica; font-size: 12px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: center; word-break: break-word;" valign="top"><em>Copyright &copy; 2016 &nbsp;Kidsroom , All rights reserved.</em></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
      
     </td>
    </tr>
   </table>
  </center>
 </body></html>';
			
			
			//echo $message;die;
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
				
				
				$this->email->initialize($config);
				$this->email->from($admin_email, 'streams_site');
				$this->email->to($member_email);
				//$this->email->cc($alternate_admin_email);
				$this->email->subject('streams_site:Password Changed Successfully');
				$this->email->message($message);
				$this->email->send();
				

				
					
					$data['password_flash_message'] = "TRUE"; 
					$url=site_base_url();
				header('Location:'.$url);
				exit;
					
				}
				else // incorrect username or password
				{
					$data['password_message_error'] = "FALSE";
				}		
				
		
			
			}
			
			
	
			
			
			$this->load->view('reset_password');
			
			
	}else
			{
				/* window.location.href = '<?=site_base_url()?>thankyou?message=sign_up';*/
				 echo "<script type='text/javascript'>window.location='".site_base_url()."thankyou?message=forget_password'</script>";
			}
				
	}
	

		
/****************************************************************************************************************************/	



function reset_password_user()
	{	
	
	
	//echo 'gggg';
	//die;
	
	
	
	
		$this->load->model('module');
		$this->load->library('session');
		
		
		
		$cur_year = date('Y');
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				//$id=$this->uri->segment(2);
				$password = md5($this->input->post('new_password'));
				$hid_id = $this->input->post('hid_id');
				
				 $data_to_store = array(
			'password' => $password
			);
		// $id=$this->uri->segment(2);
		//print_r($data_to_store);
		//die;
				$this->module->update_forgot_new_password_user($hid_id,$data_to_store);
			    $data = 'true';
				
				
				$this->db->select('name');
			$this->db->select('user_name');
			$this->db->select('user_email');
			$this->db->where('forgot_password_id',$hid_id);
			$this->db->from('user');
			$query = $this->db->get();
			//echo $this->db->last_query();die;
			$user_details=$query->result_array();
			//print_r($member_details);die;
			$name=stripslashes($user_details[0]['name']);
			$user_name=stripslashes($user_details[0]['user_name']);
			$user_email=stripslashes($user_details[0]['user_email']);
			//$member_name=$member_fname." ".$member_lname;
				
				
				
				
				
				
		if($data=='true'){
		   $this->db->select('*');
		   	$this->db->from('stream_setting');
			$this->db->where("setting_key","admin_email");
			$p=$this->db->get();
			$data = $p->result_array();
			$admin_email=stripslashes($data[0]['setting_value']);
			
			
			
			
					
			$message ='<html><body style="background-color: #d3f3fc; height: 100%; margin: 0; padding: 0; width: 100%;">
  <center>
   <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" id="bodyTable" style="background-color: #d3f3fc; border-collapse: collapse; height: 100%; margin: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; width: 100%;" width="100%">
    <tr>
     <td align="center" id="bodyCell" style="border-top: 0; height: 100%; margin: 0; mso-line-height-rule: exactly; padding: 10px; width: 100%;" valign="top">
      <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
       <tr>
        <td align="center" style="mso-line-height-rule: exactly; width: 600px;" valign="top" width="600">
      
         <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="border: 0; border-collapse: collapse; max-width: 600px !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
          <tr>
           <td id="templatePreheader" style="background-color: #FAFAFA; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
           </td>
          </tr>
          <tr>
           <td id="templateHeader" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnImageBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnImageBlockOuter">
              <tr>
               <td class="mcnImageBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnImageContent" style="mso-line-height-rule: exactly; padding-bottom: 0; padding-left: 9px; padding-right: 9px; padding-top: 0; text-align: center;" valign="top"><img align="center" alt="" class="mcnImage" src="'.base_url().'img/logo.png" style="border: 0; display: inline !important; height: auto; max-width: 235px; outline: none; padding-bottom: 0; text-decoration: none; vertical-align: bottom;" width="235" /></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateBody" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: left; word-break: break-word;" valign="top">
                    <h1 style="color: #202020; display: block; font-family: Helvetica; font-size: 26px; font-style: normal; font-weight: bold; letter-spacing: normal; line-height: 125%; margin: 0; padding: 0; text-align: left;">&nbsp;</h1>
                    <p style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; margin: 10px 0; mso-line-height-rule: exactly; padding: 0; text-align: left;"><table width="80%" border="0">
			<tr>
			<td colspan="2">
			
			</td>
			</tr>
			<tr>
			<td colspan="2" style="height:10px;"></td>
			</tr>
			<tr>
			<td width="429" colspan="2">
			<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
			<tr>
			<td colspan="2">Dear '.$member_fname.',</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;">Your Password has been Changed Successfully.<br>Your Current User Email is given bellow.</td>
			</tr>
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Full Name: </strong>'.$name.' </td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Email:</strong> '.$user_email.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><p>Thanks,</p>
			  <p>Kidsroom.com Team.</p></td>
			</tr>
</table></p>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateColumns" style="mso-line-height-rule: exactly;" valign="top">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
             <tr>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
           
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
        
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
             </tr>
            </table>
   
           </td>
          </tr>
          <tr>
           <td id="templateFooter" style="background-color: #666666; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnFollowBlockOuter">
              <tr>
               <td align="center" class="mcnFollowBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px;">
                    <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContent" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                     <tbody>
                      <tr>
                       <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px; padding-top: 9px;" valign="top">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                          <tr>
                           <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                             <tr>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                               
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$twitter.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-twitter-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                           
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$facebook.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                            
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                             
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 0;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                          <td align="center" class="mcnFollowIconContent" style="mso-line-height-rule: exactly;" valign="middle" width="24"><a href="'.$google_plus.'" style="mso-line-height-rule: exactly;" target="_blank"><img class="" height="24" src="http://cdn-images.mailchimp.com/icons/social-block-v2/color-googleplus-48.png" style="border: 0; display: block; height: auto; outline: none; text-decoration: none;" width="24" /></a></td>
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                             </tr>
                            </table>
                        
                           </td>
                          </tr>
                         </tbody>
                        </table>
                       </td>
                      </tr>
                     </tbody>
                    </table>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #cccccc; font-family: Helvetica; font-size: 12px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: center; word-break: break-word;" valign="top"><em>Copyright &copy; 2016 &nbsp;Kidsroom , All rights reserved.</em></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
      
     </td>
    </tr>
   </table>
  </center>
 </body></html>';
			
			
			//echo $message;die;
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
				
				
				$this->email->initialize($config);
				$this->email->from($admin_email, 'streams_site');
				$this->email->to($member_email);
				//$this->email->cc($alternate_admin_email);
				$this->email->subject('streams_site:Password Changed Successfully');
				$this->email->message($message);
				$this->email->send();
				

				
					
					$data['password_flash_message'] = "TRUE"; 
					$url=site_base_url();
				header('Location:'.$url);
				exit;
					
				}
				else // incorrect username or password
				{
					$data['password_message_error'] = "FALSE";
				}		
				
		
			
			}
			
			
	
			
			$this->load->view('reset_password_user');
	}

	function video_view(){
		$this->load->model('module');
		$this->load->library('session');
 		$video_id = $this->uri->segment(2);
  		$ip= $this->input->ip_address();
		$details = $this->module->get_video_name($video_id);
		$artist_id=$details[0]['artist_id'];
		$video=$details[0]['video_name'];
		$date = date("Y-m-d");
		$video_view =  $this->module->get_video_view($video_id,$ip,$date);
	
		if(empty($video_view)){
	//echo "<pre>"; print_r($details); die;	
		$data=array(
					'artist_id'=>$artist_id,
					'video_id' =>$video_id,
					'ip_address'=>$ip,
					'date'=>date("Y-m-d")
					
			        );
 
$this->module->insert_video_view($data);
 //echo "<img src="'.site_base_url().'/uploads/user_photo/">";
	}
 //$result = $row['image'];
 
 
$video_title= $details[0]['video_title'];
$video_overview=$details[0]['video_overview'];
 echo ' <h4 style="color:#01aff7; text-transform:uppercase; margin-top:1px;">'.$video_title.'</h4>';
 echo ' <p style="color:#333; margin-top:1px; text-transform:capitalize;"><strong>Overview:</strong> '.$video_overview.'</p>';
 //echo $details[0]['video_overview'];
 
echo ' <video width="98%" height="97%" style="max-width:98%;" controls controlsList="nodownload">
                                     
                                        <source src="'.site_base_url().'uploads/arists_video/'.$video.'" type="video/mp4">
									
                                        <source src="'.site_base_url().'uploads/arists_video/'.$video.'" type="video/ogg">
                                   
                                        <source src="'.site_base_url().'uploads/arists_video/'.$video.'" type="video/webm">
                                        
                                 
                                    '; 

		
		}
		
		function update_logout_time(){
			
				$this->load->model('module');
				$this->load->library('session');
				if($this->session->userdata('is_logged_in')=='1')
				{
				$type = $this->session->userdata('type');
				if($type=='Artist'){
					
					$artist_id = $this->session->userdata('artist_id');
				$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
				$login_date= $date->format('Y-m-d H:i:s');
				$data= array(
							
							 'last_login_time'=>$login_date
							 );
				 $this->module->update_edit_portfolio($artist_id,$data);
					
					
					
					}
				
				
			}
				
			
			}


/***********************************************souvik (4.7.2017)************************************************************************/


public function payment_setting()
{
	$artist_id = $this->session->userdata('artist_id');
	
	//die;
	if($this->session->userdata('is_logged_in')=='1')
		{
			//$user_id=$this->session->userdata('user_id');
			
			$type = $this->session->userdata('type');
			if($type=="User"){
				
				$url=site_base_url()."myprofile";
			 echo "<script>window.location='".$url."';</script>";
			exit;
				}else{
			
			$artist_id=$this->session->userdata('artist_id');
			
			if ($this->input->server('REQUEST_METHOD') === 'POST')
	      {
			$artist_id=$this->session->userdata('artist_id');
		$live_video= $this->input->post('live_video');
		$recorded_video= $this->input->post('recorded_video');
		$live_recorded_video= $this->input->post('live_recorded_video');
  		$paypal_id= $this->input->post('paypal_id');

		
		
	   $data=array('live_video'=>$live_video,
				   'recorded_video'=>$recorded_video,
			      'paypal_id'=>$paypal_id,
				 'live&recorded_video'=>$live_recorded_video
			  );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->update_edit_portfolio($artist_id,$data);
    
		echo "<script type='text/javascript'>window.location='".site_base_url()."payment_setting'</script>";
	
	       }
	
		 //$data['user_details']=$this->module->get_all_information($this->session->userdata('user_id'));

	$this->load->view('payment_setting');
	 }
	 
	 
		}
	else
	{
		redirect(site_base_url()."login"); 
		}
	

}

/************************************************************************************************************************************/
function recorded_video()
{
		
		if($this->session->userdata('is_logged_in')=='1')
			{
				$type = $this->session->userdata('type');
			if($type=="User"){
				
				$url=site_base_url()."myprofile";
			 echo "<script>window.location='".$url."';</script>";
			exit;
				}else{
					
		$artist_id=$this->session->userdata('artist_id');
		
		
		
	if(isset($_GET['recorded_video']))
	{
		$search = $_GET['recorded_video'];
		//echo $search;
		//echo $artist_id;
		//die;
		$this->load->model('module');
		$this->load->library('Pagination');
			
		$config['per_page'] =16;
		$config['base_url'] = site_base_url().'recorded_video/';
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
$config['artist_video'] = count($this->module->get_artist_recorded_video_by_search($search,$artist_id,"",""));
$data['artist_video'] = $this->module->get_artist_recorded_video_by_search($search,$artist_id,$config['per_page'],$limit_end);
// echo "<pre>";print_r($data['category_list']);die;
$config['total_rows'] = $config['artist_video'];
$this->pagination->initialize($config); 
		
		
	}	
		
	else
	{
					
		$this->load->model('module');
		$this->load->library('Pagination');
			
		$config['per_page'] =5;
		$config['base_url'] = site_base_url().'recorded_video/';
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
					
					
					
$config['artist_video'] = count($this->module->get_artist_recorded_video($artist_id,"",""));
$data['artist_video'] = $this->module->get_artist_recorded_video($artist_id,$config['per_page'],$limit_end);
// echo "<pre>";print_r($data['category_list']);die;
$config['total_rows'] = $config['artist_video'];
$this->pagination->initialize($config); 				
	}
					
					
					
					
		//$data['artist_video']=$this->module->get_artist_recorded_video($artist_id);
		
		$this->load->view("recorded_video",$data);
					}
					
			//$user_id = $this->session->userdata('artist_id');
		    //$data['user_details']= $this->module->get_artist_detail($user_id);
			//print_r ($data);die;
	
			}else{
				
				$url=site_base_url();
			//header('Location:'.$url);
			echo "<script>window.location='".$url."';</script>";
			exit;
				
				}
		
		
		} 
		
		
function edit_recorded_video()
{
	if ($this->input->server('REQUEST_METHOD') === 'POST')
	      {
			
		$recorded_v_title= $this->input->post('recorded_v_title');
		$recorded_v_overview= $this->input->post('recorded_v_overview');
		$video_tags= $this->input->post('video_tags');
		$category_type= $this->input->post('category_type');
		//$price= $this->input->post('price');
		$status= $this->input->post('status');
		
  $id= $this->input->post('recorded_id');

		//die;
		
	   $data=array('recorded_v_title'=>$recorded_v_title,
				   'recorded_v_overview'=>$recorded_v_overview,
				    'video_tags'=>$video_tags,
					 'category_type'=>$category_type,
				   //'price'=>$price,
			      
				 'recorded_v_status'=>$status
			  );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->update_recorded_video($id,$data);
    
		echo "<script type='text/javascript'>
		window.parent.location.reload();</script>";
	
	       }
	$this->load->view('edit_recorded_video');
}
	/*********************************************************************************************************************************************************/	
	function recorded_video_view()
	{
		
		
				
		$this->load->model('module');
		$this->load->library('session');
		
		if($this->session->userdata('is_logged_in')=='1')
			{
				
		
 		$record_video_id = $this->uri->segment(2);
	     $user_id=$this->session->userdata('user_id');
	
	$paid=$this->module->check_video_paid($record_video_id,$user_id);
	
	if(!empty($paid))
	{
	  		$ip= $this->input->ip_address();
		$details = $this->module->get_recorded_video_name($record_video_id);
		$artist_id=$details[0]['artist_id'];
		$video=$details[0]['recorded_video_name'];
		$date = date("Y-m-d");
		$video_view =  $this->module->get_video_recorded_view($record_video_id,$ip,$date);
	
		if(empty($video_view)){
	//echo "<pre>"; print_r($details); die;	
		$data=array(
					'artist_id'=>$artist_id,
					'recorded_v_id' =>$record_video_id,
					'ip_address'=>$ip,
					'date'=>date("Y-m-d")
					
			        );
 
$this->module->insert_video_recorded_view($data);
 //echo "<img src="'.site_base_url().'/uploads/user_photo/">";
	}
 //$result = $row['image'];
echo ' <video width="98%" height="97%" style="max-width:98%;" controls>
                                     
                                        <source src="'.site_base_url().'uploads/recorded_video/'.$video.'" type="video/mp4">
									
                                        <source src="'.site_base_url().'uploads/recorded_video/'.$video.'" type="video/ogg">
                                   
                                        <source src="'.site_base_url().'uploads/recorded_video/'.$video.'" type="video/webm">
                                        
                                 
                                    <object data="'.site_base_url().'uploads/recorded_video/'.$video.'" width="470" height="255">
                                    
                                        <embed src="'.site_base_url().'uploads/recorded_video/'.$video.'" width="470" height="255"></embed>
                                        </object> 
                                       
                                      
                                        </object> 
                                        </video>'; 

		
		}
		
		
		
else{
	
	
	$url=site_base_url()."payment_details/".$record_video_id;
			//header('Location:'.$url);
			echo "<script> window.parent.location.href ='".$url."';</script>";
			exit;	
	
}

			}
		
		
	else{
		
		$url=site_base_url();
			//header('Location:'.$url);
			echo "<script> window.parent.location.href ='".$url."';</script>";
			exit;
		
		
	}
	
	
	}
/***************************************************************************************************/	
	
	public function payment_details()
	{
		 $video_id=$this->uri->segment('2');
		 $u_id=$this->session->userdata('user_id');
		 $video_details=$this->module->get_recorded_video_payment($video_id);
		 $artist=$video_details[0]['artist_id'];
		 $artist_video_price=$this->module->get_artist_detail($artist);
		 
	 	$amount=$artist_video_price[0]['recorded_video'];
		
		$video_name=$video_details[0]['recorded_v_title'];
		
		$admin_comission=$this->module->setting_value('admin_commission_%');
		 $admin_com=$admin_comission[0]['setting_value'];
		 $admin_comission_price=($amount*$admin_com)/100;
		 
		$artist_price=$amount-$admin_comission_price;
		
		 $data['order_gen_id']="Stream_".time();
		$data['return_url']=site_base_url().'paypal?action=success';
		$data['cancel_return']=site_base_url().'paypal?action=ipn';
		$data['notify_url']=site_base_url().'paypal?action=ipn';
		$data['merchant_country']='US';
		
$data['recorded_v_id']=$video_id;
$data['artist_charge']=$artist_price;
$data['admin_charge']=$admin_comission_price;
$data['artist_id']=$artist;
$data['user_id']=$u_id;
$data['paypal_amount']=$amount;
$paypal_email=$this->module->setting_value('paypal_email');
$paypal_business_id=$this->module->setting_value('business_id');


$data['txtemail']=$paypal_email[0]['setting_value'];
$data['business_id']=$paypal_business_id[0]['setting_value'];



//$data['txtemail']='webhaw_1353494307_per@gmail.com';
//$data['business_id']='webhaw_1352881656_biz@gmail.com';
$data['item_name']=$video_name;		
	$this->load->view("paypal",$data);		
		
	}
public function video_details_page()
{
	
$user_id = $this->session->userdata('user_id');
 $user_type = $this->session->userdata('type');

$segement=$this->uri->segment(2);
$category = explode('_',$segement);
$v_id= $category[(count($category)-1)];

$video_artist=$this->module->get_artist_id_video($v_id);
//video_type

 $video_type=$video_artist[0]['video_type'];
	
	 $type_video=$video_type.' '.'Video';

$artist_id=$video_artist[0]['artist_id'];

 if(empty($this->module->checking_banned_user($user_id,$artist_id)))
	 {

$date = date("Y-m-d");
$ip= $this->input->ip_address();
$video_view =  $this->module->get_video_recorded_view($v_id,$ip,$date);
//if(empty($video_view)){
//echo 'ddd';
//die;
//echo "<pre>"; print_r($details); die;	recorded_v_id
$data=array(
	'artist_id'=>$artist_id,
	'recorded_v_id'=>$v_id,
	'ip_address'=>$ip,
	'date'=>date("Y-m-d")
	
	);

$this->module->insert_video_recorded_view($data);
//} 

$category_type=$video_artist[0]['category_type'];
$data['custom_video']=$video_artist;
$data['atrist_details']=$this->module->get_artist_details($artist_id);
$data['atrist_details']= $this->module->get_artist_detail($artist_id); 
$data['artist_album'] = $this->module->get_image_data($artist_id); 
$data['artist_video'] = $this->module->get_video_data($artist_id); 
$data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);


//  $data['related_artist']=$this->module->get_artist_details_category_wise($category_type);
// $data['related_video']=$this->module->get_video_details_category_wise($category_type);
$data['messages_chat']= $this->module->get_messages_chat($v_id);
$data['messages']= $this->module->get_messages($v_id);
// $data['artist_album'] = $this->module->get_image_data($artist_id);
// $data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);
//  $data['artist_video'] = $this->module->get_video_data($artist_id); 
$data['video_id']=$v_id;



$price_record_video=$this->module->get_artist_details($artist_id);
	  
	  $price=$price_record_video[0]['live_video'];
	 
	  
	




if(empty($this->module->checking_recorded_video_payment($v_id,$user_id)) && $price > '0') 
	{
		if($user_type!='User'){
			 echo "<script type='text/javascript'>window.location='".site_base_url()."thankyou?message=accessdenied'</script>";
		}else{
		//echo 'ddd';
		//die;
$price_recorded=$this->module->get_artist_details($artist_id);

 $recorded_video_cost=$price_recorded[0]['live_video'];
//die;
$comission=$this->module->setting_value('admin_commission_%');
$paypal=$this->module->setting_value('paypal_commission_%');

 $admin_comission=$comission[0]['setting_value'];
 $paypal_comission=$paypal[0]['setting_value'];

 $admin_price=($recorded_video_cost*$admin_comission)/100;
  $artist_amount=$recorded_video_cost- $admin_price;

 $total_pay=($recorded_video_cost*$paypal_comission)/100;

  $paypal_amount=$recorded_video_cost+$total_pay;
  
  $paypal_email=$this->module->setting_value('paypal_email');
  $paypal_business_id=$this->module->setting_value('business_id');

/*********************alam paypal code comment************************************/
 /*$data['order_gen_id']="Stream_".time();
$data['return_url']=site_base_url().'video_details_page?action=success';
$data['cancel_return']=site_base_url().'video_details_page?action=ipn';
$data['notify_url']=site_base_url().'video_details_page?action=ipn';
$data['merchant_country']='US';
		
$data['recorded_v_id']=$v_id;
$data['artist_charge']=$artist_amount;
$data['admin_charge']=$admin_price;
$data['artist_id']=$artist_id;
$data['user_id']=$user_id;
$data['paypal_amount']=$paypal_amount;
$data['video_type']=$type_video;

$data['txtemail']=$paypal_email[0]['setting_value'];
$data['business_id']=$paypal_business_id[0]['setting_value'];

//$data['txtemail']='webhaw_1353494307_per@gmail.com';
//$data['business_id']='webhaw_1352881656_biz@gmail.com';
$data['item_name']=$v_name;		
$this->load->view("paypal",$data);*/	
/*********************alam paypal code comment************************************/

/************************multi payment paypal*****************************************/
 
     $admin_email1 = $this->module->get_admin_email();
	 $admin_email = $admin_email1[0]['setting_value']; 
	 $artist_details = $this->module->get_artist_payment($artist_id);
	  $paypal_artist_email = $artist_details[0]['paypal_id'];
	 $artist_email = $artist_details[0]['email'];
	 
	 $order_gen_id="Stream_".time();
	 $video_id=$this->session->userdata('video_id');
	 
	 /**********************insert temp table**********************/
	 $data_store=array
                        (
                         'order_no'=>$order_gen_id,
                         'user_id'=>$user_id,
                         'artist_id'=>$artist_id,
                         'video_id'=>$v_id,
                         'admin_charge'=>$admin_price,
                         'artist_charge'=>$artist_amount,
                         'payment_type'=>$type_video,
                         'total_amount'=>$paypal_amount
                        );
					
		$this->module->table_payment_temporary($data_store);
	 /*********************end insert temp table******************/
	
    // create the pay request
    $createPacket = array(
        "actionType" =>"PAY",
        "currencyCode" => "USD",
        "receiverList" => array(
            "receiver" => array(
                 array(
                    "amount"=> $admin_price,
                    "email"=>$paypal_email[0]['setting_value']
                ),
                array(
                    "amount"=> $artist_amount,
                    "email"=>$paypal_artist_email
                ),
            ),
        ),
        "returnUrl" => "http://test.local/payments/confirm",
        "cancelUrl" => "http://test.local/payments/cancel",
        "requestEnvelope" => array(
            "errorLanguage" => "en_US",
            "detailLevel" => "ReturnAll",
        ),
    );

   //echo '<pre>';print_r($createPacket);die;
    //$response = $this->_paypalSend($createPacket,"Pay");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->apiUrl."Pay");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($createPacket));
    curl_setopt($ch, CURLOPT_HEADER, $this->headers);
    $response = json_decode(curl_exec($ch),true);
    return $response;

    /**********************insert payment order table***********************/	
	$payment_status="Paid";
	$order_status="Completed";
	
	$information=$this->module->retrieve_temp_data($order_gen_id);
	
	$user_id=$information[0]['user_id'];
	$artist_id=$information[0]['artist_id'];
	$video_id=$information[0]['video_id'];
	$admin_charge=$information[0]['admin_charge'];
	$artist_charge=$information[0]['artist_charge'];
	$total_amount=$information[0]['total_amount'];
	$payment_type=$information[0]['payment_type'];
	
	$data_ammount=array(
	'order_no'=>$order_gen_id,
	'user_id'=>$user_id,
	'artist_id'=>$artist_id,
	'video_id'=>$video_id,
	'admin_charge'=>$admin_charge,
	'artist_charge'=>$artist_charge,
	'payment'=>$total_amount,
	
	//'ipn_track_id'=>$ipn_track_id,
	'date'=>date("Y-m-d"),
	//'txn_id'=>$transaction_id,
	'user_type'=>'User',
	'payment_type'=>$payment_type,
	'payment_status'=>$payment_status
	);
	
	$this->module->amount_paid($data_ammount);
	$this->module->delete_payment_from_temp($order_gen_id);
	
	/**********************end insert payment order table***********************/
	
	$video_details=$this->module->get_artist_id_video($video_id);
	$video_name=$video_details[0]['recorded_v_title'];
	$video_type=$video_details[0]['video_type'];
	
	$link=urlencode(str_replace(" ","_",$video_name))._.$video_id;
	//die;
	
	if($video_type=='Recorded')
	{
	$url=site_base_url()."video_offline/".$link;
	}
	else
	{
	$url=site_base_url()."video_details_page/".$link;
	
	}
	//header('Location:'.$url);
	echo "<script> window.location.href ='".$url."';</script>";
   
 /*********************end multi payment paypal***************************************/	
	
	}
	
	}
	


else
{ 
//    echo "<pre>";
//        var_dump($data); echo "</pre>";
	$this->load->view("video_detail_page",$data);	
}

	 }

else{		
 echo "<script type='text/javascript'>window.location='".site_base_url()."banned'</script>";		
	}

}

/*****************************************************************************************************************************************/
public function send_chat()
{
	 date_default_timezone_set('Asia/Kolkata');
	$artist_id=$_GET['artist_id'];
	$message=$_GET['message'];
	$recorded_v_id=$_GET['recorded_v_id'];
	
	$user_id=$this->session->userdata('user_id');
	 $data_store=array(
					   'user_id'=>$user_id,
					    'artist_id'=>$artist_id,
						 'message'=>$message,
						 'video_id'=>$recorded_v_id,
						 'message_status'=>'Active',
						  'sender_type'=>'User',
						 'message_time'=>date("Y-m-d H:i:s"),
						 );
	// print_r($data_store);
	
	$chat=$this->module->insert_chat($data_store);
	$user_deatils=$this->module->get_user_chat($user_id);
	 $datetime=explode(' ',date("Y-m-d H:i:s"));
	
	echo $user_deatils[0]['name'].','.$user_deatils[0]['image'].','.$datetime[0].','.$datetime[1].','.$this->parseString($message);
	
	
}

/**********************************************************************************************************************/
public function payment_package()
{
	
	
	
	
	if($this->session->userdata('is_logged_in')=='1')
			{
				
	$type = $this->session->userdata('type');
		if($type=="User"){
				
//$user_id=$this->session->userdata('user_id');		
				
				// $data['streamer_follow']=$this->module->get_following_streamers_list($user_id);

$user_id=$this->session->userdata('user_id');
 $admin_featured=$this->module->setting_value('subscription_price_$');
  $amount=$admin_featured[0]['setting_value'];
 
 
        $data['order_gen_id']="Stream_".time();
		$data['return_url']=site_base_url().'paypal?action=success';
		$data['cancel_return']=site_base_url().'paypal?action=ipn';
		$data['notify_url']=site_base_url().'paypal?action=ipn';
		$data['merchant_country']='US';
		

$data['paypal_amount']=$amount;

$paypal_email=$this->module->setting_value('paypal_email');
$paypal_business_id=$this->module->setting_value('business_id');


$data['txtemail']=$paypal_email[0]['setting_value'];
$data['business_id']=$paypal_business_id[0]['setting_value'];


//$data['txtemail']='webhaw_1353494307_per@gmail.com';
//$data['business_id']='webhaw_1352881656_biz@gmail.com';
$data['item_name']='Subscription';
$data['last_id']=$user_id;
$this->load->view("paypal_subscription",$data);	
				
				
				
				
				
				
				
				
				
			
				}
	
	
	
	
}
	
	else{
		
		echo "<script type='text/javascript'>window.location='".site_base_url()."thankyou?message=accessdenied'</script>";
		
	}
	
	
	
	
	
	
 

}
/*********************************************************************************************************/
public function schedule_time()
{
	
	if ($this->input->server('REQUEST_METHOD') === 'POST')
	      {
			
		 $date= $this->input->post('date');
		 $time= $this->input->post('time');
		
		 $duration= $this->input->post('duration');
		
   $intro_text= $this->input->post('intro_text');

	  $artist_id=$this->session->userdata('artist_id');
		
		for($i=0;$i<count($date);$i++){
	   $data=array('date'=>$date[$i],
				   'time'=>$time[$i],
				   'duration'=>$duration[$i],
				    'intro_text'=>$intro_text[$i],
			      
				 'artist_id'=>$artist_id
			  );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->insert_schedule_artist($data);
		}
		
		
		
		
		
		
		
		
		
		
		
		
	}
	
$this->load->view("schedule_time",$data);	

	
}
	
	
	
function add_scheduled_time()

{
	
	
		$i= $_GET['id'];
		$date= $_GET['date'];
		$time=$_GET['time'];
		$intro_text= $_GET['intro_text'];
		$duration= $_GET['duration'];
		$artist_id=$this->session->userdata('artist_id');
		$time_24 =date("H:i", strtotime($time));
	 
	  $data=array('date'=>$date,
			'time'=>$time,
			'duration'=>$duration,
			'intro_text'=>$intro_text,
			'artist_id'=>$artist_id
	  );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->insert_schedule_artist($data);
		 
		 $emailto = $this->module->get_email_id();
		
			$emailto = $emailto[0]['setting_value'];
			
		 $followers=$this->module->get_followers_email_list($artist_id);
		 $artist_info=$this->module->get_artist_detail($artist_id);
		 $artist_name=$artist_info[0]['name'];
		 $artist_email=$artist_info[0]['email'];
		 
		 
		 
		 foreach($followers as $row)
		    $user_email.=$row['user_email'].',';
		 $user_email = substr($user_email,0,strlen($user_email)-1);
			//$user_name=$row['user_name'];
		 
		 
		 
		 $body='<html><body style="background-color: #d3f3fc; height: 100%; margin: 0; padding: 0; width: 100%;">
  <center>
   <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" id="bodyTable" style="background-color: #d3f3fc; border-collapse: collapse; height: 100%; margin: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; width: 100%;" width="100%">
    <tr>
     <td align="center" id="bodyCell" style="border-top: 0; height: 100%; margin: 0; mso-line-height-rule: exactly; padding: 10px; width: 100%;" valign="top">
      <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
       <tr>
        <td align="center" style="mso-line-height-rule: exactly; width: 600px;" valign="top" width="600">
      
         <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="border: 0; border-collapse: collapse; max-width: 600px !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
          <tr>
           <td id="templatePreheader" style="background-color: #FAFAFA; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
           </td>
          </tr>
          <tr>
           <td id="templateHeader" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnImageBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnImageBlockOuter">
              <tr>
               <td class="mcnImageBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnImageContent" style="mso-line-height-rule: exactly; padding-bottom: 0; padding-left: 9px; padding-right: 9px; padding-top: 0; text-align: center;" valign="top"><img align="center" alt="" class="mcnImage" src="'.base_url().'img/logo.png" style="border: 0; display: inline !important; height: auto; max-width: 235px; outline: none; padding-bottom: 0; text-decoration: none; vertical-align: bottom;" width="235" /></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateBody" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: left; word-break: break-word;" valign="top">
                    <h1 style="color: #202020; display: block; font-family: Helvetica; font-size: 26px; font-style: normal; font-weight: bold; letter-spacing: normal; line-height: 125%; margin: 0; padding: 0; text-align: left;">&nbsp;</h1>
                    <p style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; margin: 10px 0; mso-line-height-rule: exactly; padding: 0; text-align: left;"><table width="80%" border="0">
			<tr>
			<td colspan="2">
			
			</td>
			</tr>
			<tr>
			<td colspan="2" style="height:10px;"></td>
			</tr>
			<tr>
			<td width="429" colspan="2">
			<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
			<tr>
			<td colspan="2">Dear Follower,</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
            <tr>
			<td colspan="2" height="10px;"><strong>Streamer Name : </strong>'.$artist_name.' </td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong> Streaming Date : </strong>'.$date.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Streaming Time: </strong>'.$time.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Streaming Duration: </strong>'.$duration.'</td>
			</tr>
			
			
			
			
			
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><p>Thanks,</p>
			  <p>Streaming Team.</p>
			  <p><a href="'.site_base_url().'">'.site_base_url().'</a></p></td>
			</tr>
</table></p>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateColumns" style="mso-line-height-rule: exactly;" valign="top">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
             <tr>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
           
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
        
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
             </tr>
            </table>
   
           </td>
          </tr>
          <tr>
           <td id="templateFooter" style="background-color: #666666; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnFollowBlockOuter">
              <tr>
               <td align="center" class="mcnFollowBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px;">
                    <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContent" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                     <tbody>
                      <tr>
                       <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px; padding-top: 9px;" valign="top">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                          <tr>
                           <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                             <tr>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                               
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                         
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                           
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                         
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                            
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                             
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 0;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                        
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                             </tr>
                            </table>
                        
                           </td>
                          </tr>
                         </tbody>
                        </table>
                       </td>
                      </tr>
                     </tbody>
                    </table>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #cccccc; font-family: Helvetica; font-size: 12px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: center; word-break: break-word;" valign="top"><em>Copyright &copy; '.date('Y').' &nbsp;streams_site.com , All rights reserved.</em></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
      
     </td>
    </tr>
   </table>
  </center>
 </body>';
		 
		 
		 //echo $body;
		 
		 $config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
			
				
			//$this->email->initialize($config);
			$this->email->initialize($config);
			$this->email->from($emailto);
			//$this->email->from("tanay@webhawkstechnology.com", 'Where To Park Team');
			$this->email->to($artist_email);
			
			$this->email->bcc($user_email);
			//$this->email->to("ddn12525@gmail.com"); 
			$this->email->subject('streams_site.com Streaming Information');
			
			$this->email->message($body);
			
			
			$this->email->send();
		 
		
		// echo $this->email->print_debugger();
		 
		 
		 
		 
		 
		 
		 
		 ?>
          <div id="sch_<?=$i?>">
            <div class="row gn_row" id="shc_<?=$i?>">
                                      	<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div">
                                        <div id="date<?=$i?>">
                                        <?=$date;?>
                                        </div>
                                        <div id="edit_date<?=$i?>" style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="date" value="<?=$date;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div">
                                        <?=$time;?>
                                             <div style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="time" value="<?=$time;?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 new_div">
                                        <?=$duration;?>
                                             <div style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="duration" value="<?=$duration;?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 new_div">
                                        <?=$intro_text;?>
                                             <div style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="intro_text" value="<?=$intro_text;?>">
                                            </div>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div" id="button<?=$i?>">
                                        	
                                        	<button class="btn btn-success" onClick="edit_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Edit</button>
                                            <button class="btn btn-danger" onClick="delete_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Delete</button>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div" id="edit_buttion_<?=$i?>" style="display:none">
                                        	
                                        	
                                            <button class="btn btn-success" onClick="save_button('<?=$i?>','<?=$row['schedule_id']?>')">Save</button>
                                            <button class="btn btn-danger" onClick="delete_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Delete</button>
                                        </div>
                                        <div style="clear:both"></div>
                                      </div>
                                      </div>
		
	<?php
    
	
}
	
function delete_scheduled_artist()

{
	
	
	   $schedule= $_GET['schedule'];
	   $schdeule_info=$this->module->get_scheduled_inforamtion($schedule);
	   
	   $artist_id=$schdeule_info[0]['artist_id'];
	   $date=$schdeule_info[0]['date'];
	   $time=$schdeule_info[0]['time'];
	   
	    $emailto = $this->module->get_email_id();
		
			$emailto = $emailto[0]['setting_value'];
			
		 $followers=$this->module->get_followers_email_list($artist_id);
		 $artist_info=$this->module->get_artist_detail($artist_id);
		 $artist_name=$artist_info[0]['name'];
		  $artist_email=$artist_info[0]['email'];
		  
		  foreach($followers as $row)
		    $user_email.=$row['user_email'].',';
		 $user_email = substr($user_email,0,strlen($user_email)-1);
		 
		 
		 
		 $body='<html><body style="background-color: #d3f3fc; height: 100%; margin: 0; padding: 0; width: 100%;">
  <center>
   <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" id="bodyTable" style="background-color: #d3f3fc; border-collapse: collapse; height: 100%; margin: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0; width: 100%;" width="100%">
    <tr>
     <td align="center" id="bodyCell" style="border-top: 0; height: 100%; margin: 0; mso-line-height-rule: exactly; padding: 10px; width: 100%;" valign="top">
      <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
       <tr>
        <td align="center" style="mso-line-height-rule: exactly; width: 600px;" valign="top" width="600">
      
         <table border="0" cellpadding="0" cellspacing="0" class="templateContainer" style="border: 0; border-collapse: collapse; max-width: 600px !important; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
          <tr>
           <td id="templatePreheader" style="background-color: #FAFAFA; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
           </td>
          </tr>
          <tr>
           <td id="templateHeader" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnImageBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnImageBlockOuter">
              <tr>
               <td class="mcnImageBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnImageContent" style="mso-line-height-rule: exactly; padding-bottom: 0; padding-left: 9px; padding-right: 9px; padding-top: 0; text-align: center;" valign="top"><img align="center" alt="" class="mcnImage" src="'.base_url().'img/logo.png" style="border: 0; display: inline !important; height: auto; max-width: 235px; outline: none; padding-bottom: 0; text-decoration: none; vertical-align: bottom;" width="235" /></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateBody" style="background-color: #FFFFFF; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 0; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: left; word-break: break-word;" valign="top">
                    <h1 style="color: #202020; display: block; font-family: Helvetica; font-size: 26px; font-style: normal; font-weight: bold; letter-spacing: normal; line-height: 125%; margin: 0; padding: 0; text-align: left;">&nbsp;</h1>
                    <p style="color: #202020; font-family: Helvetica; font-size: 16px; line-height: 150%; margin: 10px 0; mso-line-height-rule: exactly; padding: 0; text-align: left;"><table width="80%" border="0">
			<tr>
			<td colspan="2">
			
			</td>
			</tr>
			<tr>
			<td colspan="2" style="height:10px;"></td>
			</tr>
			<tr>
			<td width="429" colspan="2">
			<table width="97%" border="0" style="margin:15px;font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#4a4a4a;font-weight:normal;margin-bottom:2px;">
			<tr>
			<td colspan="2">Dear Follower,</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
            <tr>
			<td colspan="2" height="10px;"><strong>Streamer Name  </strong>'.$artist_name.' have cancelled his streaming on '.$date.' at  '.$time.'</td>
			</tr>
			
			
			
			
			
			
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><p>Thanks,</p>
			  <p>Streaming Team.</p>
			  <p><a href="'.site_base_url().'">'.site_base_url().'</a></p></td>
			</tr>
</table></p>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
          <tr>
           <td id="templateColumns" style="mso-line-height-rule: exactly;" valign="top">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 600px;" width="600">
             <tr>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
           
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
              <td align="center" style="mso-line-height-rule: exactly; width: 300px;" valign="top" width="300">
        
               <table align="left" border="0" cellpadding="0" cellspacing="0" class="columnWrapper" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="300">
                <tr>
                 <td class="columnContainer" style="mso-line-height-rule: exactly;" valign="top">
                 </td>
                </tr>
               </table>
              </td>
             </tr>
            </table>
   
           </td>
          </tr>
          <tr>
           <td id="templateFooter" style="background-color: #666666; border-bottom: 0; border-top: 0; mso-line-height-rule: exactly; padding-bottom: 9px; padding-top: 9px;" valign="top">
            <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnFollowBlockOuter">
              <tr>
               <td align="center" class="mcnFollowBlockInner" style="mso-line-height-rule: exactly; padding: 9px;" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px;">
                    <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContent" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                     <tbody>
                      <tr>
                       <td align="center" style="mso-line-height-rule: exactly; padding-left: 9px; padding-right: 9px; padding-top: 9px;" valign="top">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                          <tr>
                           <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                             <tr>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                               
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                         
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                           
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 10px;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                         <tr>
                                         
                                         </tr>
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                            
                              <td align="center" style="mso-line-height-rule: exactly;" valign="top">
                             
                               <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; display: inline; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <tbody>
                                 <tr>
                                  <td class="mcnFollowContentItemContainer" style="mso-line-height-rule: exactly; padding-bottom: 9px; padding-right: 0;" valign="top">
                                   <table border="0" cellpadding="0" cellspacing="0" class="mcnFollowContentItem" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                    <tbody>
                                     <tr>
                                      <td align="left" style="mso-line-height-rule: exactly; padding-bottom: 5px; padding-left: 9px; padding-right: 10px; padding-top: 5px;" valign="middle">
                                       <table align="left" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="">
                                        <tbody>
                                        
                                        </tbody>
                                       </table>
                                      </td>
                                     </tr>
                                    </tbody>
                                   </table>
                                  </td>
                                 </tr>
                                </tbody>
                               </table>
                              </td>
                           
                             </tr>
                            </table>
                        
                           </td>
                          </tr>
                         </tbody>
                        </table>
                       </td>
                      </tr>
                     </tbody>
                    </table>
                   </td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" class="mcnTextBlock" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
             <tbody class="mcnTextBlockOuter">
              <tr>
               <td class="mcnTextBlockInner" style="mso-line-height-rule: exactly;" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="mcnTextContentContainer" style="border-collapse: collapse; min-width: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                 <tbody>
                  <tr>
                   <td class="mcnTextContent" style="color: #cccccc; font-family: Helvetica; font-size: 12px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: center; word-break: break-word;" valign="top"><em>Copyright &copy; '.date('Y').' &nbsp;streams_site.com , All rights reserved.</em></td>
                  </tr>
                 </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
           </td>
          </tr>
         </table>
        </td>
       </tr>
      </table>
      
     </td>
    </tr>
   </table>
  </center>
 </body>';
		 
		 
		 //echo $body;
		 
		 $config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
			
				
			//$this->email->initialize($config);
			$this->email->initialize($config);
			$this->email->from($emailto);
			//$this->email->from("tanay@webhawkstechnology.com", 'Where To Park Team');
			$this->email->to($artist_email);
			
			$this->email->bcc($user_email);
			//$this->email->to("ddn12525@gmail.com"); 
			$this->email->subject('streams_site.com Streaming Information');
			
			$this->email->message($body);
			
			
			$this->email->send();
		 
		
		// echo $this->email->print_debugger();
		 //}
		 
	
	
	 $this->module->delete_scheduled($schedule);
	 
}
	
	
	function edit_scheduled_time()

{
	  $schedule_id= $_GET['schedule_id'];
	 $date= $_GET['date'];
	   $time=$_GET['time'];
	
	 $intro_text= $_GET['intro_text'];
	 $duration= $_GET['duration'];
	 $i = $_GET['id'];
	
	$time_24 =date("H:i", strtotime($time));
	
	  $data=array('date'=>$date,
				   'time'=> $time,
				   'duration'=>$duration,
				    'intro_text'=>$intro_text
			      
				
			  );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->update_edit_schedule($schedule_id,$data);
		 ?>
		  <div class="row gn_row" id="shc_<?=$i?>">
		 	<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div">
                                        <div id="date<?=$i?>">
                                        <?=$date;?>
                                        </div>
                                        <div id="edit_date<?=$i?>" style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="date" value="<?=$date;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div">
                                        <?=$time;?>
                                             <div style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="time" value="<?=$time;?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 new_div">
                                        <?=$duration;?>
                                             <div style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="duration" value="<?=$duration;?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 new_div">
                                        <?=$intro_text;?>
                                             <div style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="intro_text" value="<?=$intro_text;?>">
                                            </div>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div" id="button<?=$i?>">
                                        	
                                        	<button class="btn btn-success" onClick="edit_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Edit</button>
                                            <button class="btn btn-danger" onClick="delete_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Delete</button>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div" id="edit_buttion_<?=$i?>" style="display:none">
                                        	
                                        	
                                            <button class="btn btn-success" onClick="save_button('<?=$i?>','<?=$row['schedule_id']?>')">Save</button>
                                            <button class="btn btn-danger" onClick="delete_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Delete</button>
                                        </div>
                                        <div style="clear:both"></div>
                                        </div>
                                        <?php
	 
}

/***************************************************************edit artist video********************************************************/
	public function edit_video_artist()
	{
	if ($this->input->server('REQUEST_METHOD') === 'POST')
	      {
			
		$video_title= $this->input->post('video_title');
		$video_status= $this->input->post('video_status');
		$category_type= $this->input->post('category_type');
		$video_tags= $this->input->post('video_tags');
		$video_overview= $this->input->post('video_overview');
		
		
		
		//$price= $this->input->post('price');
		/*$status= $this->input->post('status');*/
		
  $id= $this->input->post('video_id');

		//die;
		
	   $data=array('video_title'=>$video_title,
				   'video_overview'=>$video_overview,
				   'category_type'=>$category_type,
				   'video_tags'=>$video_tags,
				   
				   'video_status'=>$video_status
				   //'price'=>$price,
			      
				
			  );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->update_artist_video_album($id,$data);
    
		echo "<script type='text/javascript'>
		window.parent.location.reload();</script>";
	
	       }
	$this->load->view('edit_artist_video');	
		
	}
	
	
	
	function delete_artist_video()

{
	
	
	 echo   $v_id= $_GET['v_id'];
	
	
	 $this->module->delete_video_album_artist($v_id);
	 
}
	
	
	
function delete_artist_recorded_video()

{
	
	
	    $v_id= $_GET['v_id'];
	
	
	 $this->module->delete_artist_record_video($v_id);
	 
}
	
/***********************************************************************************************************************************/	
	public function payment_scheduled_live()
{
	
 $u_id=$this->session->userdata('user_id');
 $scheduled_id=$this->uri->segment('2');
 $scheduled_details=$this->module->schedule_details_payment($scheduled_id);
  $artist=$scheduled_details[0]['artist_id'];
 $artist_video_price=$this->module->get_artist_detail($artist);
  $amount=$artist_video_price[0]['live_video'];
 
 $admin_featured=$this->module->setting_value('admin_commission_%');
  $admin_com=$admin_featured[0]['setting_value'];
  $admin_comission_price=($amount*$admin_com)/100;
		 
	$artist_price=$amount-$admin_comission_price;

        $data['order_gen_id']="Stream_".time();
		$data['return_url']=site_base_url().'paypal?action=success';
		$data['cancel_return']=site_base_url().'paypal?action=ipn';
		$data['notify_url']=site_base_url().'paypal?action=ipn';
		$data['merchant_country']='US';
		

$data['paypal_amount']=$amount;
$data['artist_price']=$artist_price;
$data['admin_charge']=$admin_comission_price;
$data['schedule_id']=$scheduled_id;
$data['artist_id']=$artist;
$data['user_id']=$u_id;

$paypal_email=$this->module->setting_value('paypal_email');
$paypal_business_id=$this->module->setting_value('business_id');


$data['txtemail']=$paypal_email[0]['setting_value'];
$data['business_id']=$paypal_business_id[0]['setting_value'];

//$data['txtemail']='webhaw_1353494307_per@gmail.com';
//$data['business_id']='webhaw_1352881656_biz@gmail.com';
$data['item_name']='Live Video';

$this->load->view("paypal_scheduled",$data);	

}

function parsetext(){
	$str = stripslashes( $_POST["str"]);
echo '<strong>me: </strong> '.$this->parseString($str).'<br>';
	
	}
	
 function parseString($string ) {
	 $main_array = array(); //Your array that you want to push the value into

         $emoji_details=$this->module->geting_emoji();
	 foreach($emoji_details as $row){ 	
	 $key=$row['emoji_text'];
	 $my_smilies[$key]='<img src="'.site_base_url().'uploads/emoji_image/thumb/thumb_'.$row['emoji_image'].'" alt="" />';
			 }
	
	
	return str_replace( array_keys($my_smilies), array_values($my_smilies), $string);
}
   
/***************************************************************************************************************************************************/	

public function video_category()
{


if(isset($_GET['search']) || isset($_GET['type']) || isset($_GET['tag']))
	{
    //entra video type=""
   // echo "entra aqui?";
     
		//$search = $_GET['search'];
		
		$this->load->model('module');
		$this->load->library('Pagination');
			
        $config['per_page'] = 5;
        $config['base_url'] = site_base_url() . 'video_category';
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
		$config['uri_segment'] = 2;
            if (count($_GET) > 0)
                $config['suffix'] = '/?' . http_build_query($_GET, '', "&");
	    $page = $this->uri->segment(2);
                
		$limit_end = ($page * $config['per_page']) - $config['per_page'];
            if ($limit_end < 0) {
			$limit_end = 0;
		}
	
	
		//$data['category']=$this->module->get_product($cat_id);
		//echo "<pre>";print_r($data['search_details']);die;
            $config['video_list'] = count($this->module->get_search_list("", ""));
//            echo "<pre>";
//            var_dump($config);
//            echo "<pre>";
            $data['video_list'] = $this->module->get_search_list($config['per_page'], $limit_end);
		// echo "<pre>";print_r($data['category_list']);die;
            $config['total_rows'] = $config['video_list'];
            $this->pagination->initialize($config); 
        } else {
            // esta es una categoria;
			
            $segement = $this->uri->segment(2);
//            echo "<pre>"; var_dump($segement); echo "--</pre>";   
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
	
	
	
	
	


$this->load->view("video_category_page",$data);
	
	
	
	
}

/*******************************************************************************************************************************************************/

public function video_offline()

{
	$user_id = $this->session->userdata('user_id');
	
	 $segement=$this->uri->segment(2);
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
	// $video_view =  $this->module->get_video_recorded_view($v_id,$ip,$date);
	//if(empty($video_view)){
		//echo 'ddd';
		//die;
	//echo "<pre>"; print_r($details); die;	recorded_v_id
		$data=array(
					'artist_id'=>$artist_id,
					'recorded_v_id'=>$v_id,
					'ip_address'=>$ip,
					'date'=>date("Y-m-d")					
			        );
 
$this->module->insert_video_recorded_view($data);
	//} 
	 
	 
	 
	 
	 
	 
	 
	 
	 $v_name=$video_artist[0]['recorded_v_title'];
	  $category_type=$video_artist[0]['category_type'];
	  $data['custom_video']=$video_artist;
	  $data['artist_details']=$this->module->get_artist_details($artist_id);
	  $data['atrist_details']= $this->module->get_artist_detail($artist_id); 
	  $data['related_artist']=$this->module->get_artist_details_category_wise($category_type);
	  $data['related_video']=$this->module->get_video_details_category_wise($category_type);
	  $data['messages_chat']= $this->module->get_messages_chat($v_id);
	  $data['artist_album'] = $this->module->get_image_data($artist_id); 
          $data['artist_video'] = $this->module->get_video_data($artist_id); 
          $data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);
	 // $data['artist_album'] = $this->module->get_image_data($artist_id);
	 // $data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);
	//  $data['artist_video'] = $this->module->get_video_data($artist_id); 
	  //$data['video_id']=$v_id;
	 $price_record_video=$this->module->get_artist_details($artist_id);
	  
	  $price=0;//$price_record_video[0]['recorded_video'];
//	  var_dump($price);
//          echo "entra aqui?";
          $quepasa=$this->module->checking_recorded_video_payment($v_id,$user_id);
          var_dump($quepasa);
                  
		  
if(1==1) 
	
	{
	//	echo "entra;"; 
               /// var_dump($user_type);
			if($_SESSION['type']!='User'){
			// echo "<script type='text/javascript'>window.location='".site_base_url()."thankyou?message=accessdenied'</script>";
		}else{
                    echo "<script>alert('si entra aqui no hay nada');</script>";
		$price_recorded=$this->module->get_artist_details($artist_id);
		
		$recorded_video_cost=$price_recorded[0]['recorded_video'];
		
		$comission=$this->module->setting_value('admin_commission_%');
		$paypal=$this->module->setting_value('paypal_commission_%');
		
		$paypal_comission=$paypal[0]['setting_value'];
		
		 $admin_comission=$comission[0]['setting_value'];
		
		 $admin_price=($recorded_video_cost*$admin_comission)/100;
		 $artist_amount=$recorded_video_cost- $admin_price;
		
		$total_pay=($recorded_video_cost*$paypal_comission)/100;

        $paypal_amount=$recorded_video_cost+$total_pay;
		
		
		$paypal_email=$this->module->setting_value('paypal_email');
		$paypal_business_id=$this->module->setting_value('business_id');
		
		/*********************alam paypal code comment************************************/
		/*$data['order_gen_id']="Stream_".time();
		$data['return_url']=site_base_url().'video_offline?action=success';
		$data['cancel_return']=site_base_url().'video_offline?action=ipn';
		$data['notify_url']=site_base_url().'video_offline?action=ipn';
		$data['merchant_country']='US';
		
		$data['recorded_v_id']=$v_id;
		$data['artist_charge']=$artist_amount;
		$data['admin_charge']=$admin_price;
		$data['artist_id']=$artist_id;
		$data['user_id']=$user_id;
		$data['paypal_amount']=$paypal_amount;
		$data['video_type']=$type_video;
		
		
		$data['txtemail']=$paypal_email[0]['setting_value'];
		$data['business_id']=$paypal_business_id[0]['setting_value'];
		$data['item_name']=$v_name;		
		$this->load->view("paypal",$data);	
*/		

        /*********************alam paypal code comment************************************/
 
 /************************multi payment paypal*****************************************/
 
     $admin_email1 = $this->module->get_admin_email();
	 $admin_email = $admin_email1[0]['setting_value']; 
	 $artist_details = $this->module->get_artist_payment($artist_id);
	  $paypal_artist_email = $artist_details[0]['paypal_id'];
	 $artist_email = $artist_details[0]['email'];
	 
	 $order_gen_id="Stream_".time();
	 $video_id=$this->session->userdata('video_id');
	 
	 /**********************insert temp table**********************/
	 $data_store=array
					(
					 'order_no'=>$order_gen_id,
					 'user_id'=>$user_id,
					 'artist_id'=>$artist_id,
					 'video_id'=>$v_id,
					 'admin_charge'=>$admin_price,
					 'artist_charge'=>$artist_amount,
					 'payment_type'=>$type_video,
					 'total_amount'=>$paypal_amount
					);
					
		$this->module->table_payment_temporary($data_store);
	 /*********************end insert temp table******************/
	
    // create the pay request
    $createPacket = array(
        "actionType" =>"PAY",
        "currencyCode" => "USD",
        "receiverList" => array(
            "receiver" => array(
               array(
                    "amount"=> $admin_price,
                    "email"=>$paypal_email[0]['setting_value']
                ),
                array(
                    "amount"=> $artist_amount,
                    "email"=>$paypal_artist_email
                ),
            ),
        ),
        "returnUrl" => "http://test.local/payments/confirm",
        "cancelUrl" => "http://test.local/payments/cancel",
        "requestEnvelope" => array(
            "errorLanguage" => "en_US",
            "detailLevel" => "ReturnAll",
        ),
    );

   //echo '<pre>';print_r($createPacket);die;
    //$response = $this->_paypalSend($createPacket,"Pay");
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->apiUrl."Pay");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($createPacket));
    curl_setopt($ch, CURLOPT_HEADER, $this->headers);
    $response = json_decode(curl_exec($ch),true);
    return $response;

    /**********************insert payment order table***********************/	
	$payment_status="Paid";
	$order_status="Completed";
	
	$information=$this->module->retrieve_temp_data($order_gen_id);
	
	$user_id=$information[0]['user_id'];
	$artist_id=$information[0]['artist_id'];
	$video_id=$information[0]['video_id'];
	$admin_charge=$information[0]['admin_charge'];
	$artist_charge=$information[0]['artist_charge'];
	$total_amount=$information[0]['total_amount'];
	$payment_type=$information[0]['payment_type'];
	
	$data_ammount=array(
	'order_no'=>$order_gen_id,
	'user_id'=>$user_id,
	'artist_id'=>$artist_id,
	'video_id'=>$video_id,
	'admin_charge'=>$admin_charge,
	'artist_charge'=>$artist_charge,
	'payment'=>$total_amount,
	
	//'ipn_track_id'=>$ipn_track_id,
	'date'=>date("Y-m-d"),
	//'txn_id'=>$transaction_id,
	'user_type'=>'User',
	'payment_type'=>$payment_type,
	'payment_status'=>$payment_status
	);
	
	$this->module->amount_paid($data_ammount);
	$this->module->delete_payment_from_temp($order_gen_id);
	
	/**********************end insert payment order table***********************/
	
	$video_details=$this->module->get_artist_id_video($video_id);
	$video_name=$video_details[0]['recorded_v_title'];
	$video_type=$video_details[0]['video_type'];
	
	$link=urlencode(str_replace(" ","_",$video_name))._.$video_id;
	//die;
	
	if($video_type=='Recorded')
	{
	$url=site_base_url()."video_offline/".$link;
	}
	else
	{
	$url=site_base_url()."video_details_page/".$link;
	
	}
	//header('Location:'.$url);
	echo "<script> window.location.href ='".$url."';</script>";
   
 /*********************end multi payment paypal***************************************/
		
		
		

	  }
	  
	}
	else
	{


	$this->load->view("video_detail_page_after_search",$data);
	
	}
	
	 }
	 
	 
	else{
		
         echo "<script type='text/javascript'>window.location='".site_base_url()."banned'</script>";
		
	}
	
}


public function message_chat()
{
	 date_default_timezone_set('Asia/Kolkata');
	//$artist_id=$_GET['artist_id'];
	$message=$_GET['message'];
	$recorded_v_id=$_GET['recorded_v_id'];
	$user_id=$this->session->userdata('user_id');
	$artist_id=$this->session->userdata('artist_id');
	$data_store=array(
                            'user_id'=>$user_id,
                             'artist_id'=>$artist_id,
                                  'message'=>$message,
                                  'video_id'=>$recorded_v_id,
                                  'message_status'=>'Active',
                                  'sender_type'=>$_SESSION['type'],
                                  'message_time'=>date("Y-m-d H:i:s"),
						 );
	// print_r($data_store);
	
	$chat=$this->module->insert_message_chat($data_store);
        $datetime=explode(' ',date("Y-m-d H:i:s"));
        if($_SESSION['type']=="User"){
	$user_deatils=$this->module->get_user_chat($user_id);
        echo $user_deatils[0]['name'].','.$user_deatils[0]['image'].','.$datetime[1].','.$datetime[0].','.$message;
        }
        if($_SESSION['type']=="Artist"){
            //var_dump($_SESSION);
            $artista=$this->stream->find("stream\stream_artist",$_SESSION['artist_id']);
            //var_dump($artista);
	 echo $artista->name.','.$artista->image.','.$datetime[1].','.$datetime[0].','.$message;
        }
	
	
	
	
}

/*********************************************************************************************/

public function overview()
{
	
	$this->load->view("overview",$data);
}

function follow_artist(){
	
	$artist_id=$_GET['artist_id'];
	$user_id=$this->session->userdata('user_id');
	 $data_store=array(
					   'user_id'=>$user_id,
					    'artist_id'=>$artist_id,
						 'following_date'=>date("Y-m-d H:i:s"),
						 );
	 
	 
	$this->module->insert_artist_follow($data_store);
	
	
	}
	
	function unfollow_artist(){
		$artist_id=$_GET['artist_id'];
	$user_id=$this->session->userdata('user_id');
	$this->module->artist_unfollow($artist_id,$user_id);
		
		}
/******************************************28.7.2017*************************************/

function user_purchase()
{
	
	
if($this->session->userdata('is_logged_in')=='1')
		{
			//$user_id=$this->session->userdata('user_id');
			
$type = $this->session->userdata('type');
if($type=="User")
{

 $user_id=$this->session->userdata('user_id');
		
	$this->load->model('module');
		$this->load->library('Pagination');
			
		$config['per_page'] =12;
		$config['base_url'] = site_base_url().'user_purchase/';
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
$config['purchase_list'] = count($this->module->get_user_purchase_list($user_id,"",""));
$data['purchase_list'] = $this->module->get_user_purchase_list($user_id,$config['per_page'],$limit_end);
// echo "<pre>";print_r($data['category_list']);die;
$config['total_rows'] = $config['purchase_list'];
$this->pagination->initialize($config); 
	
	

		
	$this->load->view("user_payment",$data);			
	}

}



}
/**********************************************************************/

function artist_income()
{
	
	
if($this->session->userdata('is_logged_in')=='1')
		{
			//$user_id=$this->session->userdata('user_id');
			
$type = $this->session->userdata('type');
if($type!="User")
{

 $artist_id=$this->session->userdata('artist_id');
	
	
	$this->load->model('module');
		$this->load->library('Pagination');
			
		$config['per_page'] =12;
		$config['base_url'] = site_base_url().'artist_income/';
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
$config['artist_income'] = count($this->module->get_artist_income($artist_id,"",""));
$data['artist_income'] = $this->module->get_artist_income($artist_id,$config['per_page'],$limit_end);
// echo "<pre>";print_r($data['category_list']);die;
$config['total_rows'] = $config['artist_income'];
$this->pagination->initialize($config); 
	
	

		
	$this->load->view("artist_income",$data);			
	}

}



}




/****************************************************************************************************************************************************/


function get_chats(){
	
    
                     $messages1= $this->module->get_messages($_GET['v_id']);  
					 	
					 	$messages= $this->module->get_messages_lmt($_GET['v_id'],count($messages1));
							  
							 if($messages!='')
							 {
								 foreach($messages as $row)
								 {
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									  if($row['sender_type']=='User'){
										 $detail = $this->module->get_detail_user_img($row['user_id']);
										 $class = 'chat_details';
										 
										 }else{
												 $detail = $this->module->get_detail_artist_img($row['artist_id']); 
												 
											 $class = 'chat_details_artist';
											 }
									 
							 ?>
                             
                            
                             
                            <div class="chat_col">
                            <?php if($detail[0]['image']!=''){
								?>
                            	<div class="chat_img"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" alt=""></div>
                                
                                <?php
							}else{
							?>
                            <div class="chat_img"><img src="<?php echo base_url(); ?>img/myimage2.png" alt=""></div>
                            
                            <?php
							}
							?>
                                <div class="chat_body">
                                	<div class="chat_top"><span class="chat_name"><?=$detail[0]['name'];?></span><span class="chattime"><?=$time;?></span><span class="chatddmmyy"><?=$date;?></span></div>
                                    <div class="<?=$class?>">
                                    	<p class="mess_img"><?=$this->parseString($row['message'])?></p>
                                    </div>
                                </div>
                            </div>
                            
                  
                            
               
               <?php
								 }
							 }
								
	
	 $limit=count($messages1)-30;
					if($limit<0){
						$limit=0;
						
						}
							 echo "&&".$limit.'&&'.$messages[0]['message_id'];
	
	}
	
	
	
function get_old_message(){
	
    
                     $messages1= $this->module->get_messages($_GET['v_id']);  
					 	
					 	$messages= $this->module->get_messages_lmt_old($_GET['v_id'],$_GET['limit']);
							  
							 if($messages!='')
							 {
								 foreach($messages as $row)
								 {
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									  if($row['sender_type']=='User'){
										 $detail = $this->module->get_detail_user_img($row['user_id']);
										  $class = 'chat_details';
										 
										 
										 }else{
												 $detail = $this->module->get_detail_artist_img($row['artist_id']); 
												   $class = 'chat_details_artist';
											 
											 }
									 
							 ?>
                             
                            
                             
                            <div class="chat_col">
                            <?php if($detail[0]['image']!=''){
								?>
                            	<div class="chat_img"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" alt=""></div>
                                
                                <?php
							}else{
							?>
                            <div class="chat_img"><img src="<?php echo base_url(); ?>img/myimage2.png" alt=""></div>
                            
                            <?php
							}
							?>
                                <div class="chat_body">
                                	<div class="chat_top"><span class="chat_name"><?=$detail[0]['name'];?></span><span class="chattime"><?=$time;?></span><span class="chatddmmyy"><?=$date;?></span></div>
                                    <div class="<?=$class?>">
                                    	<p class="mess_img"><?=$this->parseString($row['message'])?></p>
                                    </div>
                                </div>
                            </div>
                            
                  
                            
               
               <?php
								 }
							 }
							  $limit=$_GET['limit']-30;
					if($limit<0){
						$limit=0;
						
						}
							 echo "&&".$limit;
								
	
	
	
	}
	
	
function get_messsage_chat(){
	
	
    
                  
					 	
					 	$messages= $this->module->get_messages_chat_lmt($_GET['v_id'],$_GET['limit']);
							  
						 if($messages!='')
							 {
								 foreach($messages as $row)
								 {
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									 
									 if($row['sender_type']=='User'){
										 $detail = $this->module->get_detail_user_img($row['user_id']);
										 
										 
										 }else{
												 $detail = $this->module->get_detail_artist_img($row['artist_id']);
												
											 
											 }
									 
							 ?>
                             
                            
                             
                           
                                <div class="message_col">
                                	<div class="msg_thumb">
                            <?php if($detail[0]['image']!=''){
								?>
                            	<img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" alt="">
                                
                                <?php
							}else{
							?>
                           <img src="<?php echo base_url(); ?>img/myimage2.png" alt="">
                            
                            <?php
							}
							?>
                             </div>
                             <div class="message_top">
                                    	<span class="msg_username"><?=$detail[0]['name'];?></span><span class="sendtime"><?=$time;?></span><span class="sendddmmyy"><?=$date;?></span>
                                    </div>
                                    <div class="msg_body">
                                    	<p><?=$row['message'];?></p>
                                    </div>
                              
                  
                            </div>
               
               <?php
								 }
							 }
							  $limit=$_GET['limit']-50;
					if($limit<0){
						$limit=0;
						
						}
							 echo "&&".$limit;
								
	
	
	
	
	
								
	}



function get_chats_new(){
	
    
                     $messages1= $this->module->get_messages($_GET['v_id']);  
					 	
					 	$messages= $this->module->get_messages_chat_greater($_GET['v_id'],$_GET['limit']);
							  
							 if($messages!='')
							 {
								 foreach($messages as $row)
								 {
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									  if($row['sender_type']=='User'){
										 $detail = $this->module->get_detail_user_img($row['user_id']);
										 
										  $class = 'chat_details';
										 }else{
												 $detail = $this->module->get_detail_artist_img($row['artist_id']); 
											  $class = 'chat_details_artist';
											 }
									 
							 ?>
                             
                            
                             
                            <div class="chat_col">
                            <?php if($detail[0]['image']!=''){
								?>
                            	<div class="chat_img"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" alt=""></div>
                                
                                <?php
							}else{
							?>
                            <div class="chat_img"><img src="<?php echo base_url(); ?>img/myimage2.png" alt=""></div>
                            
                            <?php
							}
							?>
                                <div class="chat_body">
                                	<div class="chat_top"><span class="chat_name"><?=$detail[0]['name'];?></span><span class="chattime"><?=$time;?></span><span class="chatddmmyy"><?=$date;?></span></div>
                                    <div class="<?=$class?>">
                                    	<p class="mess_img"><?=$this->parseString($row['message'])?></p>
                                    </div>
                                </div>
                            </div>
                            
                  
                            
               
               <?php
								 }
							 }
								
	
	 $limit=count($_GET['limit'])-30;
					if($limit<0){
						$limit=0;
						
						}
							 echo "&&".$limit;
	
	}


public function artist_message_video()
{
	if($this->session->userdata('is_logged_in')=='1')
			{
				
	$type = $this->session->userdata('type');
		if($type!="User"){
				
$artist_id=$this->session->userdata('artist_id');		
				
				
 $segement=$this->uri->segment(2);
$category = explode('_',$segement);
 $v_id= $category[(count($category)-1)];	

				
	$video_artist=$this->module->get_artist_id_video($v_id);			
			$data['custom_video']=$video_artist;	
	 $data['messages_chat']= $this->module->get_messages_chat($v_id);
	// $data['messages_chat']= $this->module->get_messages_chat($v_id);
$data['messages']= $this->module->get_messages($v_id);

				
				$this->load->view("artist_message",$data);
				}
	
	
	
	
}



}




public function delete_message()
{
		$message_id = $_GET['message_id'];
		$this->module->delete_message($message_id);
}




public function message_chat_artist()
{
	 date_default_timezone_set('Asia/Kolkata');
	//$artist_id=$_GET['artist_id'];
	$message=$_GET['message'];
	$recorded_v_id=$_GET['recorded_v_id'];
	$artist_id=$this->session->userdata('artist_id');
	
	 $data_store=array(
					   'user_id'=>'0',
					    'artist_id'=>$artist_id,
						 'message'=>$message,
						 'video_id'=>$recorded_v_id,
						 'message_status'=>'Active',
						 'message_time'=>date("Y-m-d H:i:s"),
						'sender_type'=>'Artist',
						 );
	// print_r($data_store);
	
	$chat=$this->module->insert_message_chat_artist($data_store);
	$user_deatils=$this->module->get_artist_chat($artist_id);
	 $datetime=explode(' ',date("Y-m-d H:i:s"));
	
	echo $user_deatils[0]['name'].','.$user_deatils[0]['image'].','.$datetime[0].','.$datetime[1].','.$message;
	
	
}

//////////////////////////////////////////////////////////////2.8.2017////////////////////////////////////////////////////////////////////////////////////////////

public function comment_message_video()
{
	 date_default_timezone_set('Asia/Kolkata');
	//$artist_id=$_GET['artist_id'];
	$message=$_GET['message'];
	$recorded_v_id=$_GET['recorded_v_id'];
	$artist_id=$this->session->userdata('artist_id');
	
	 $data_store=array(
					   'user_id'=>'0',
					    'artist_id'=>$artist_id,
						 'message'=>$message,
						 'video_id'=>$recorded_v_id,
						 'message_status'=>'Active',
						 'message_time'=>date("Y-m-d H:i:s"),
						'sender_type'=>'Artist',
						 );
	// print_r($data_store);
	
	$chat=$this->module->insert_comment_message($data_store);
	$user_deatils=$this->module->get_artist_chat($artist_id);
	 $datetime=explode(' ',date("Y-m-d H:i:s"));
	
	echo $user_deatils[0]['name'].','.$user_deatils[0]['image'].','.$datetime[1].','.$datetime[0].','.$message;
	
	
}


	public function go_live()
	{
		$artist_id = $this->session->userdata('artist_id');
		$get_stream_recorded_video=$this->module->get_stream_recorded_video($artist_id);
		 $video_type=$get_stream_recorded_video[0]['video_type'];
		 $video_key=$get_stream_recorded_video[0]['video_key'];
			 $recorded_v_id=$get_stream_recorded_video[0]['recorded_v_id'];
                         
                        
                        if(empty($video_type) || $video_type=="Recorded")	// if(empty($video_type)) //if ( $video_type!='Recorded')
                        {
                            $this->load->view("streaming",$data);
                        }
                        else  {
                               $data['insert_id']= $recorded_v_id;
                               $data['video_key']= $video_key;
                                $this->load->view("video_key",$data);
                               }
				 
	}

function add_live_form()
{
//    echo "<pre>";
//    var_dump($_POST);
//    echo "<pre>";
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
        
            $time = time();
            if ($_FILES['image']['name'] != '') {
                if (!is_dir('uploads/recorded_video/')) {
                    umask(0);
                    mkdir('uploads/recorded_video/', 0777);
                }

                $config['upload_path'] = 'uploads/recorded_video/';
                $config['file_name'] = $time . "_" . $_FILES['image']['name'];
                $config['allowed_types'] = "png|jpg|jpeg|bmp|gif";
                /* $config['max_size'] = '100';
                  $config['max_width']  = '1024';
                  $config['max_height']  = '768'; */
                $config['overwrite'] = FALSE;
                $config['encrypt_name'] = FALSE;
                $config['remove_spaces'] = TRUE;
                //echo $config['upload_path'];
                $image = $config['file_name'];
                if (!is_dir($config['upload_path']))
                    die("THE UPLOAD DIRECTORY DOES NOT EXIST");
                $this->load->library('upload', $config);
                $upload_img=$this->upload->do_upload('image');
                
                if (!$upload_img) {
                    echo 'error';
                } else {

                    $this->upload->initialize($config);
                    $data['img'] = $config['file_name'];
                    $source_image = realpath('uploads/recorded_video/' . '$' . "_" . $_FILES['image']['name']);


                    $config = array(
                        'image_library' => 'gd2',
                        'source_image' => $source_image,
                        'create_thumb' => TRUE,
                        'maintain_ratio' => FALSE,
                        'width' => 400,
                        'height' => 300,
                        'new_image' => 'uploads/recorded_video/' . $config['file_name'],
                        'thumb_marker' => ''
                    );

                    $this->load->library('image_lib', $config);
                    if (!$this->image_lib->resize()) {
                        $data['error'] = strip_tags($this->image_lib->display_errors());
                    }

                    $this->image_lib->clear();
                }
            }
//            echo "<pre>";
//            var_dump($image);
//            echo "</pre>";
            $recorded_v_title = $this->input->post('recorded_v_title');
            $recorded_v_overview = $this->input->post('recorded_v_overview');
            $video_tags = $this->input->post('video_tags');
            $category_type = $this->input->post('category_type');
            //$price= $this->input->post('price');
            $status = $this->input->post('status');
            $artist_id = $this->session->userdata('artist_id');
            // $id= $this->input->post('recorded_id');
            //die;

            $data = array('recorded_v_title' => $recorded_v_title,
                'recorded_v_overview' => $recorded_v_overview,
                'video_tags' => $video_tags,
                'category_type' => $category_type,
                'artist_id' => $artist_id,
                'image' => empty($image)?"":$image,
                'video_type' => 'Streaming',
                'video_date' => date('Y-m-d')
            );
           // var_dump($data);
            //echo "<pre>";print_r($data); die;

            if ($this->module->insert_streaming_video($data)) {

                $insert_id = $this->db->insert_id();

                $cur_date = date('Ymd');
                //$time=time();
                $video_key = "" . time();
                $data1['insert_id'] = $insert_id;
                $data1['video_key'] = $video_key;
                $data = array('video_key' => $video_key);

                $this->module->update_video_key($insert_id, $data);
                $this->load->view("video_key", $data1);
            }
        }
    }
function update_add_live_form()
{
	$id= $_GET['id'];
	
	//$id=$this->uri->segment(2);
	$update_data=array('video_type'=>'Recorded');
	$this->module->update_add_live_form($id,$update_data);
	
	
}

/************************************************2.9.2017*************************************************************************************/

public function ban_user()
{    
		$message_id = $_GET['message_id'];
		$ban=$this->module->get_messages_ban($message_id);
		 $user_id=$ban[0]['user_id'];
		 $artist_id=$ban[0]['artist_id'];
		  $v_id=$ban[0]['video_id'];
		
		 $data=array(
					 'user_id'=>$user_id,
					 'v_id'=>$v_id,
				   'artist_id'=>$artist_id
				   
				
			  );
		 
		 
		 $add=$this->module->insert_ban_users($data);
		
}





/**************************************************************************************************************************************/

public function like_video()
{
	
	$video_id = $_GET['video_id'];
	$artist_id = $_GET['artist_id'];
	$user_id = $this->session->userdata('user_id');
	
	 $data=array(
					 'user_id'=>$user_id,
					 'artist_id'=>$artist_id,
				   'video_id'=>$video_id
				   
				
			  );
		 
		 
		 $add=$this->module->insert_like_video($data);
	
	
}


public function unlike_video()
{
	//echo 'ee';
	 $like_id = $_GET['like_id'];
	
	
		 $delete=$this->module->delete_like_video($like_id);
	
	
}


public function un_banned()
{
	//echo 'ee';
	echo $id = $_GET['id'];
	
	
		 $delete=$this->module->delete_unbanned_users($id);
	
	
}
/************************************************************************************************************************/


function thankyou(){
	//echo "lllllllllllll";die;
			    $this->load->view("thankyou");
			 }

function banned(){
	//echo "lllllllllllll";die;
			    $this->load->view("bannned");
			 }







public function tip_form()
{
	$this->load->view("tip_form");
}


public function tips_payment()
{
	
	
	if($this->input->server('REQUEST_METHOD') === 'POST')
		{
			
		$artist_id= $this->input->post('artist_id');
		 $user_id= $this->input->post('user_id');
	 	$tip_amount= $this->input->post('amount');
		
		//die;


		$comission=$this->module->setting_value('admin_commission_%');
		$paypal=$this->module->setting_value('paypal_commission_%');

	  $paypal_comission=$paypal[0]['setting_value'];
		
		 $admin_comission=$comission[0]['setting_value'];
		 
	     $admin_price=($tip_amount*$admin_comission)/100;
		 $artist_amount=$tip_amount- $admin_price;
	
	$total_pay=($tip_amount*$paypal_comission)/100;

         $paypal_amount=$tip_amount+$total_pay;
		//die;
		
		$paypal_email=$this->module->setting_value('paypal_email');
		$paypal_business_id=$this->module->setting_value('business_id');
		
		/*******************alam paypal code comment********************/
		 /*$data['order_gen_id']="Stream_".time();
		$data['return_url']=site_base_url().'tips_payment?action=success';
		$data['cancel_return']=site_base_url().'tips_payment?action=ipn';
		$data['notify_url']=site_base_url().'tips_payment?action=ipn';
		$data['merchant_country']='US';
		
		
		
		$data['artist_charge']=$artist_amount;
		$data['admin_charge']=$admin_price;
		$data['artist_id']=$artist_id;
		$data['user_id']=$user_id;
		$data['paypal_amount']=$paypal_amount;
		//$data['video_type']=$type_video;
		
		
		 $data['txtemail']=$paypal_email[0]['setting_value'];
		 $data['business_id']=$paypal_business_id[0]['setting_value'];*/
 
 /*********************alam paypal code comment************************************/
 
 /************************multi payment paypal*****************************************/
 
     $admin_email1 = $this->module->get_admin_email();
	 $admin_email = $admin_email1[0]['setting_value']; 
	 $artist_details = $this->module->get_artist_payment($artist_id);
	  $paypal_artist_email = $artist_details[0]['paypal_id'];
	 $artist_email = $artist_details[0]['email'];
	 $paypal_artist_email = $artist_details[0]['paypal_id'];
	// print_r( $artist_details);
	 
	 $order_gen_id="Stream_".time();
	 $video_id=$this->session->userdata('video_id');
	 
	 /**********************insert temp table**********************/
	 $data_store=array
					(
					 'order_no'=>$order_gen_id,
					 'user_id'=>$user_id,
					 'artist_id'=>$artist_id,
					 'video_id'=>$video_id,
					 'admin_charge'=>$admin_price,
					 'artist_charge'=>$artist_amount,
					 'payment_type'=>'tips',
					 'total_amount'=>$paypal_amount
					);
					
		$this->module->table_payment_temporary($data_store);
	 /*********************end insert temp table******************/
	 
    // create the pay request
    $createPacket = array(
        "actionType" =>"PAY",
        "currencyCode" => "USD",
        "receiverList" => array(
            "receiver" => array(
                array(
                    "amount"=> $admin_price,
                    "email"=>$paypal_email[0]['setting_value']
                ),
                array(
                    "amount"=> $artist_amount,
                    "email"=>$paypal_artist_email
                ),
            ),
        ),
        "returnUrl" => "http://test.local/payments/confirm",
        "cancelUrl" => "http://test.local/payments/cancel",
        "requestEnvelope" => array(
            "errorLanguage" => "en_US",
            "detailLevel" => "ReturnAll",
        ),
    );

 //  echo '<pre>';print_r($createPacket);die;
    //$response = $this->_paypalSend($createPacket,"Pay");
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->apiUrl."Pay");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($createPacket));
    curl_setopt($ch, CURLOPT_HEADER, $this->headers);
    $response = json_decode(curl_exec($ch),true);
    return $response;

    /**********************insert payment order table***********************/	
	$payment_status="Paid";
	$order_status="Completed";
	
	$information=$this->module->retrieve_temp_data($order_gen_id);
	
	$user_id=$information[0]['user_id'];
	$artist_id=$information[0]['artist_id'];
	$video_id=$information[0]['video_id'];
	$admin_charge=$information[0]['admin_charge'];
	$artist_charge=$information[0]['artist_charge'];
	$total_amount=$information[0]['total_amount'];
	$payment_type=$information[0]['payment_type'];
	
	$data_ammount=array(
	'order_no'=>$order_gen_id,
	'user_id'=>$user_id,
	'artist_id'=>$artist_id,
	'video_id'=>$video_id,
	'admin_charge'=>$admin_charge,
	'artist_charge'=>$artist_charge,
	'payment'=>$total_amount,
	
	//'ipn_track_id'=>$ipn_track_id,
	'date'=>date("Y-m-d"),
	//'txn_id'=>$transaction_id,
	'user_type'=>'User',
	'payment_type'=>$payment_type,
	'payment_status'=>$payment_status
	);
	
	$this->module->amount_paid($data_ammount);
	$this->module->delete_payment_from_temp($order_gen_id);
	
	/**********************end insert payment order table***********************/
	
	$video_details=$this->module->get_artist_id_video($video_id);
	$video_name=$video_details[0]['recorded_v_title'];
	$video_type=$video_details[0]['video_type'];
	
	$link=urlencode(str_replace(" ","_",$video_name))._.$video_id;
	//die;
	
	if($video_type=='Recorded')
	{
	$url=site_base_url()."video_offline/".$link;
	}
	else
	{
	$url=site_base_url()."video_details_page/".$link;
	
	}
	//header('Location:'.$url);
	echo "<script> window.location.href ='".$url."';</script>";
   
 /*********************end multi payment paypal***************************************/
 
	//$this->load->view("paypal_tips",$data);	
		}
	
}
/*********************************************************************************/
function user_following_streamer()
{
	
	
	
	
	if($this->session->userdata('is_logged_in')=='1')
			{
				
	$type = $this->session->userdata('type');
		if($type=="User"){
				
$user_id=$this->session->userdata('user_id');		
				
				 $data['streamer_follow']=$this->module->get_following_streamers_list($user_id);


				
				$this->load->view("user_following_streamers",$data);
				}
	
	
	
	
}

}
/***************************8.9.2017*******************************/
public function normal_video_view()
{
	
	 $user_id = $this->session->userdata('user_id');
	
	 $segement=$this->uri->segment(2);
	$category = explode('_',$segement);
	$normal_v_id= $category[(count($category)-1)];
	 
	
	$video_artist=$this->module->get_artist_id_normal_video($normal_v_id);
	
	   $artist_id=$video_artist[0]['artist_id'];
	
	$date = date("Y-m-d");
		$video_view =  $this->module->get_video_view($normal_v_id,$ip,$date);
	
		if(empty($video_view)){
	//echo "<pre>"; print_r($details); die;	
		$data=array(
					'artist_id'=>$artist_id,
					'video_id' =>$normal_v_id,
					'ip_address'=>$ip,
					'date'=>date("Y-m-d")
					
			        );
 
$this->module->insert_video_view($data);
 //echo "<img src="'.site_base_url().'/uploads/user_photo/">";
	}
	
	  $category_type=$video_artist[0]['category_type'];
	 $data['custom_video']=$video_artist;
	  $data['artist_details']=$this->module->get_artist_details($artist_id);
	  $data['atrist_details']= $this->module->get_artist_detail($artist_id); 
	  $data['related_artist']=$this->module->get_artist_details_category_wise();
	  $data['related_video']=$this->module->get_normal_video_details_category_wise($category_type);
	  $data['messages_chat']= $this->module->get_comments($normal_v_id);
	 $data['artist_album'] = $this->module->get_image_data($artist_id); 
		$data['artist_video'] = $this->module->get_video_data($artist_id); 
	$data['recorded_video'] = $this->module->get_recorded_video_data($artist_id);
	
	$this->load->view("normal_video_view",$data);
	
}

/*******************************************************************************************************************/
public function message_chat_normal_video()
{
	 date_default_timezone_set('Asia/Kolkata');
	$artist_id=$_GET['artist_id'];
	$message=$_GET['message'];
	$recorded_v_id=$_GET['recorded_v_id'];
	$user_id=$this->session->userdata('user_id');
	
	 $data_store=array(
					   'user_id'=>$user_id,
					    'artist_id'=>$artist_id,
						 'message'=>$message,
						 'video_id'=>$recorded_v_id,
						 'message_status'=>'Active',
						 'sender_type'=>'User',
						 'message_time'=>date("Y-m-d H:i:s"),
						 );
	// print_r($data_store);
	
	$chat=$this->module->insert_comment($data_store);
	$user_deatils=$this->module->get_user_chat($user_id);
	 $datetime=explode(' ',date("Y-m-d H:i:s"));
	
	echo $user_deatils[0]['name'].','.$user_deatils[0]['image'].','.$datetime[1].','.$datetime[0].','.$message;
	
	
}
function top_video()
{
    $data['top_video']=$this->module->get_top_video();
		//$data['video_admin']=$this->module->get_video_admin();
    $this->load->view('top_video',$data);
}
function top_performer(){
    $data['top_video']=$this->module->get_top_video();
    //$data['video_admin']=$this->module->get_video_admin();
    $this->load->view('top_performer',$data);
}
function latest_shows(){
    $data['top_video']=$this->module->get_top_video();
	//	$data['video_admin']=$this->module->get_video_admin();
    $this->load->view('latest_shows',$data);
}

public function like_video_normal()
{
	
	$video_id = $_GET['video_id'];
	$artist_id = $_GET['artist_id'];
	$user_id = $this->session->userdata('user_id');
	
	 $data=array(
					 'user_id'=>$user_id,
					 'artist_id'=>$artist_id,
				   'video_id'=>$video_id
				   
				
			  );
		 
		 
		 $add=$this->module->insert_like_video_normal($data);
	
	
}


public function unlike_video_normal()
{
	//echo 'ee';
	 $like_id = $_GET['like_id'];
	
	
		 $delete=$this->module->delete_like_video_normal($like_id);
	
	
}

/*************************************************************************************************/
/****************************************************online Schedule*******************************************/


public function online_schedule()
{
	
	
	
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
	 
	
	$this->load->view("online_schedule",$data);
	
	
}


/***********************************************************************************************/

function stremer_message()
{
	
	
if($this->session->userdata('is_logged_in')=='1')
		{
			//$user_id=$this->session->userdata('user_id');
			
$type = $this->session->userdata('type');
if($type!="User")
{

 $artist_id=$this->session->userdata('artist_id');
	
	
	$this->load->model('module');
		$this->load->library('Pagination');
			
		$config['per_page'] =16;
		$config['base_url'] = site_base_url().'stremer_message/';
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
$config['messages'] = count($this->module->get_viewers_message($artist_id,"",""));
$data['messages'] = $this->module->get_viewers_message($artist_id,$config['per_page'],$limit_end);
// echo "<pre>";print_r($data['category_list']);die;
$config['total_rows'] = $config['messages'];
$this->pagination->initialize($config); 
	
	

		
	$this->load->view("viewers_message",$data);			
	}

}



}

/****************************************************************************************************/
function sorting_videos()
{
	//echo "dddd";
	 $id = $_GET['sort_id'];
	$sort_id=explode('_',$id);
	 $sort_by=$sort_id[0];
	 $artist_id=$sort_id[1];
		$artist_video = $this->module->get_video_sort($artist_id,$sort_by);
	
	?>
	
	<div class="userareas">
                                
                                  <?php
								 
			$j = 1;
			
			foreach($artist_video as $row){
				
				$des1=substr($row['video_title'],0,30);
							$length1 = strlen($row['video_title']);
							
							$ovr1=substr($row['video_overview'],0,30);
							$ovrlength = strlen($row['video_overview']);
							
							
							if($length1>20){
								$moss1=$des1."..";
								
								}else{
									$moss1=$des1." ";
									}
									
								if($ovrlength>30){
								$overview_vie=$ovr1."..";
								
								}else{
									$overview_vie=$ovr1." ";
									}	
									
									
									
									
									
									
									
				?>
                            
                            <div class="col-lg-4 col-md-4 col-xs-4 col-xs-4 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                  
                                       
                                      <a href="<?=site_base_url();?>normal_video_view/<?=urlencode(str_replace(" ","_",$row['video_title']))._.$row['video_id']?>"><img src="<?php echo base_url(); ?>img/img22.png" width="100%" height="100%" style="max-width:100%;" alt=""></a>         
                                          
                                          
                                      
                                       
                                    </div>
                                    <div class="f_video_bottom vdodetel">
                                        <h5><?php echo $moss1 ;?></h5>
                                        <?php
										if($row['video_overview']!="")
										{
										?>
                                         <p title="Over View">Overview-<?=$overview_vie?></p>
                                         <?php
										}else{
										?>
                                         <p title="Over View">Overview-No Overview Given</p>
                                        	<?php
										}
										?>
                                        
                                        <p><?=$row['total']?> viewer</p>
                                    </div>
                                </div>
                            </div>

<script>
							function myFunction<?=$j?>(){
								
								 document.getElementById("myVideo<?=$j?>").controls = true;
								 
								}
								
								
							
							</script>
                            
                            <?php
							$j++;
							
							}
?>
</div>
	
	<?php
	
	
	
}

/******************************************************************************/
function sorting_photos()
{
	$id = $_GET['sort_id'];
	$sort_id=explode('_',$id);
	 $sort_by=$sort_id[0];
	  $artist_id=$sort_id[1];
	
	$artist_album = $this->module->get_photo_sort($artist_id,$sort_by);
	?>
   
   
  <div class="userareas">
                                 

                        		
                                       <?php foreach($artist_album as $row){ ?>	
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-xs-3 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                       <?php if($row['image']!=''){ 
									   
									   
									   
									   ?>
                                       
                                    
                        <a  class="fancybox fancybox.iframe" data-fancybox-group="gallery" href="<?php echo site_base_url();?>image_view/<?php echo $row['image_id'];?>" ><img src="<?php echo site_base_url(); ?>uploads/user_photo/<?php echo $row['image']; ?>" width="100%" height="100%" style="max-width:100%;" alt=""></a>
                            <?php }else{ ?>
                                <img src="<?php echo base_url(); ?>img/myimage1.png" alt="">
                            <?php }
							
							$des2=substr($row['video_title'],0,20);
							$length2 = strlen($row['image_name']);
							
							
							if($length2>20){
								$moss2=$des2."..";
								
								}else{
									$moss2=$des2." ";
									}
							
							
							
							
							
							
							
							?>
                                    
                                    </div>
                                    <div class="f_video_bottom vdodetel">
                                        <h5><?=$moss2?></h5>
                                        
                                        <p><?=$row['total']?> viewer</p>
                                    </div>
                                </div>
                            </div>
                            
                            <?php } ?>
                            </div> 
   
   
   
   
   
   
   
   
   
   
   
   
    
    
    
    <?php
	
	
	
}
/************************************************************************************************/

function sorting_recorded()
{
	$id = $_GET['sort_id'];
	$sort_id=explode('_',$id);
	 $sort_by=$sort_id[0];
	  $artist_id=$sort_id[1];
	
	$recorded_video = $this->module->get_recordvideo_sort($artist_id,$sort_by);
	
	?>
	
	 <div class="strm_holder" >
                                <?php foreach($recorded_video as $row1){ 
								
								
								{
								
								$des=substr($row1['recorded_v_title'],0,20);
								 $ovr=substr($row1['recorded_v_overview'],0,20);
							$length = strlen($row1['recorded_v_title']);
							$length_ovr = strlen($row1['recorded_v_overview']);
							
							if($length>20){
								$moss=$des."..";
								
								}else{
									$moss=$des." ";
									}
									
									
									if($length_ovr>20){
								$overview=$ovr."..";
								
								}else{
									$overview=$ovr." ";
									}
									
									
									
									
								?>
                                 <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                    
                                    <video   poster="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row1['image']; ?>" width="100%" height="100%" style="max-width:100%;">
                                        <source src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row1['recorded_video_name'];?>" type="video/mp4">
                                        <source src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row1['recorded_video_name'];?>" type="video/ogg">
                                        <source src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row1['recorded_video_name'];?>" type="video/webm">
                                    <object data="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row1['recorded_video_name'];?>" width="470" height="255">
                                        <embed src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row1['recorded_video_name'];?>" width="470" height="255"></embed>
                                        </object> 
                                        </video>
                                      
                                        </video>
                                    </div>
                                    <div class="f_video_bottom vdodetel">
                                        <h5 title="Title here"><?=$moss?></h5>
                                        <p title="Over View">Overview-<?=$overview?></p>
                                          <?php $tag = explode(',',$row1['video_tags']); 
										 		
										 
										 ?>
                                         
<style>
.tag {
    font-family: "Lato";
    font-size: 12px;
    text-transform: capitalize;
	float: none !important;
}
</style>
                                      <p title="Over View">Tags-
                                       <?php 
							  $i=1;
							 foreach($tag as $row2){ 
							
							 ?>
							 <a href="<?=site_base_url()?>video_category?tag=<?=$row2?>" class="tag" title="<?=$row2?>">
							 <?=$row2?><?php if($i<count($tag)){ echo " , "; } ?>
                             </a>
                            <?php
							 $i=$i+1;
							} ?> 
                                      </p>
                                        <div class="vdodetel_bottom">
                                        	<span class="vdodetel_vew"><p><?=$row1['total']?> viewer</p></span>
                                        	<span class="vdodetel_vew_link"><a  href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$row1['recorded_v_title']))._.$row1['recorded_v_id']?>">View</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php 
								}} ?>
                            
                            </div>
	
	
	
	<?php
	
	
	
}

/****************************************************************/
function user_upgrade()
{
	
	
	if($this->session->userdata('is_logged_in')=='1')
			{
				
	$type = $this->session->userdata('type');
		if($type=="User"){
				
//$user_id=$this->session->userdata('user_id');		
				
				// $data['streamer_follow']=$this->module->get_following_streamers_list($user_id);


				
				$this->load->view("upgrade_user",$data);
				}
	
	
	
	
}
	

	
	
}
/******************************************************************/
function private_message()
{
	$this->load->view("private_messages",$data);
}



function add_private_message()
{
	
	
			
	$artist_id = $_GET['artist_id'];
	  $user_id=$this->session->userdata('user_id');
	$message = $_GET['message'];
	     
		
		
 		
	 $data_store=array(
					   'user_id'=>$user_id,
					    'artist_id'=>$artist_id,
						 'message'=>$message,
						
						 'message_status'=>'Active',
						 'sender_type'=>'User',
						 'message_time'=>date("Y-m-d H:i:s"),
						 );
	   
	//echo "<pre>";print_r($data); die;
   
	     $this->module->insert_private_message($data_store);
		
	
	      
	
}






/******************************************************************************/


function artist_private_message()
{
	
	
	if($this->session->userdata('is_logged_in')=='1')
			{
				
	$type = $this->session->userdata('type');
		if($type!="User"){
				
 $artist_id=$this->session->userdata('artist_id');		
				
				 $data['user_messages']=$this->module->get_private_messages_of_users($artist_id);


				
				$this->load->view("artist_private_message",$data);
				}
	
	
	
	
}
	
	
	
	
	
	
	
	
	
}


function select_private_message_of_artist()
{
	  $user_id123 = $_GET['id'];
	  $artist_id=$this->session->userdata('artist_id');
	
	
	$messages_chat=$this->module->get_private_chats_of_artist($user_id123,$artist_id);
        $this->load->helper("Emoji");
        $emoji=new Emoji();
	//print_r($messages_chat);
	//die;
	
	?>
	
                      		
                                <div id="chat_sms">
                                
                                 <?php
								 //print_r($messages_chat);
								// die;
							 if($messages_chat!='')
							 {
								 foreach($messages_chat as $row)
								 {
									 
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									 
									  if($row['sender_type']=='User'){
										 $detail = $this->module->get_detail_user_img($row['user_id']);
										 
										 
										 }else{
												 $detail = $this->module->get_detail_artist_img($row['artist_id']); 
											 
											 }
									 
									 
									 
							 ?>
                             
                            
                             
                           
                                <div class="message_col">
                                	
                                    
                                  <div class="msg_thumb">
                            <?php if($detail[0]['image']!=''){
								?>
                            	<img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo  $detail[0]['image']; ?>" alt="">
                                
                                <?php
							}else{
							?>
                           <img src="<?php echo base_url(); ?>img/myimage2.png" alt="">
                            
                            <?php
							}
							?>
                             </div>  
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                             <div class="message_top">
                                    <span class="msg_username"><?=$detail[0]['name'];?></span><span class="sendtime"><?=$time;?></span><span class="sendddmmyy"><?=$date;?></span>
                                    <input type="hidden" name="user_id123" id="user_id123" value="<?=$user_id123?>" />
                                    </div>
                                    <div class="msg_body">
                                        <p><?=$emoji->parseString($row['message']);?></p>
                                    </div>
                              
                  
                            </div>
               
               <?php
								 }
							 }
								 ?>
                            
                                
                                 </div>
                                
                                
                                
    
    
    
	
	<?php
	
	
}

/******************************************************************************/


public function message_chat_private()
{
	 date_default_timezone_set('Asia/Kolkata');
	//$artist_id=$_GET['artist_id'];
	$message=$_GET['message'];
	 $user_id=$_GET['user_id123'];
	 $artist_id=$this->session->userdata('artist_id');
	
	 $data_store=array(
					   'user_id'=>$user_id,
					    'artist_id'=>$artist_id,
						 'message'=>$message,
						 
						 'message_status'=>'Active',
						 'message_time'=>date("Y-m-d H:i:s"),
						'sender_type'=>'Artist',
						 );
	
	$chat=$this->module->insert_private_message($data_store);
	$user_deatils=$this->module->get_artist_chat($artist_id);
	 $datetime=explode(' ',date("Y-m-d H:i:s"));
	
	echo $user_deatils[0]['name'].','.$user_deatils[0]['image'].','.$datetime[1].','.$datetime[0].','.$message;
	
	
}
/**********************************************************************************/
function user_private_message()
{
	if($this->session->userdata('is_logged_in')=='1')
			{
				
	$type = $this->session->userdata('type');
		if($type=="User"){
				
 $user_id=$this->session->userdata('user_id');		
				
				 $data['artist_messages']=$this->module->get_private_messages_of_artist($user_id);
				
				$this->load->view("user_message_private",$data);
				}
	
	
}
	
	
	
}



function select_private_message_of_users()
{
	  $artist_id123 = $_GET['id'];
	  $user_id=$this->session->userdata('user_id');
	
	
	$messages_chat=$this->module->get_private_chats_of_artist($user_id,$artist_id123);
	//print_r($messages_chat);
	//die;
        $this->load->helper("Emoji");
        $emoji=new Emoji();
	?>
	
   
                                
                             
                        		
                                <div id="chat_sms">
                                
                                 <?php
								 //print_r($messages_chat);
								// die;
							 if($messages_chat!='')
							 {
								 foreach($messages_chat as $row)
								 {
									 
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									 
									  if($row['sender_type']=='User'){
										 $detail = $this->module->get_detail_user_img($row['user_id']);
										 
										 
										 }else{
												 $detail = $this->module->get_detail_artist_img($row['artist_id']); 
											 
											 }
									 
									 
									 
							 ?>
                             
                            
                             
                           
                                <div class="message_col">
                                	
                                    
                                  <div class="msg_thumb">
                            <?php if($detail[0]['image']!=''){
								?>
                            	<img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo  $detail[0]['image']; ?>" alt="">
                                
                                <?php
							}else{
							?>
                           <img src="<?php echo base_url(); ?>img/myimage2.png" alt="">
                            
                            <?php
							}
							?>
                             </div>  
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                             <div class="message_top">
                                    <span class="msg_username"><?=$detail[0]['name'];?></span><span class="sendtime"><?=$time;?></span><span class="sendddmmyy"><?=$date;?></span>
                                    <input type="hidden" name="artist_id123" id="artist_id123" value="<?=$artist_id123?>" />
                                    </div>
                                    <div class="msg_body">
                                        <p><?=$emoji->parseString($row['message']);?></p>
                                    </div>
                              
                  
                            </div>
               
               <?php
								 }
							 }
								 ?>
                            
                                
                                 </div>
                                
                                
                               
                              
                           
                            
                           
                          
    
    
    
    
  
    
    
	
	<?php
	
	
}



/********************************************************************************************/

public function message_chat_private_user()
{
	 date_default_timezone_set('Asia/Kolkata');
	//$artist_id=$_GET['artist_id'];
	$message=$_GET['message'];
	 $artist_id=$_GET['artist_id123'];
	 $user_id=$this->session->userdata('user_id');
	
	 $data_store=array(
					   'user_id'=>$user_id,
					    'artist_id'=>$artist_id,
						 'message'=>$message,
						 
						 'message_status'=>'Active',
						 'message_time'=>date("Y-m-d H:i:s"),
						'sender_type'=>'User',
						 );
	
	$chat=$this->module->insert_private_message($data_store);
	$user_deatils=$this->module->get_user_chat($user_id);
	 $datetime=explode(' ',date("Y-m-d H:i:s"));
	
	echo $user_deatils[0]['name'].','.$user_deatils[0]['image'].','.$datetime[1].','.$datetime[0].','.$message;
	
	
}




/***************************************************************************/

function select_private_message_of_users_online()
{
	  $artist_id123 = $_GET['id'];
	  $user_id=$this->session->userdata('user_id');
	
	
	$messages_chat=$this->module->get_private_chats_of_artist($user_id,$artist_id123);
	//print_r($messages_chat);
	//die;
        $this->load->helper("Emoji");
        $emoji=new Emoji();
	
	?>
	
    <div class="messagearea">
                           		
                                
                             
                        		
                                <div id="chat_sms_private">
                                
                                 <?php
								 //print_r($messages_chat);
								// die;
							 if($messages_chat!='')
							 {
								 foreach($messages_chat as $row)
								 {
									 
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									 
									  if($row['sender_type']=='User'){
										 $detail = $this->module->get_detail_user_img($row['user_id']);
										 
										 
										 }else{
												 $detail = $this->module->get_detail_artist_img($row['artist_id']); 
											 
											 }
									 
									 
									 
							 ?>
                             
                            
                             
                           
                                <div class="message_col">
                                	
                                    
                                  <div class="msg_thumb">
                            <?php if($detail[0]['image']!=''){
								?>
                            	<img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo  $detail[0]['image']; ?>" alt="">
                                
                                <?php
							}else{
							?>
                           <img src="<?php echo base_url(); ?>img/myimage2.png" alt="">
                            
                            <?php
							}
							?>
                             </div>  
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                             <div class="message_top">
                                    <span class="msg_username"><?=$detail[0]['name'];?></span><span class="sendtime"><?=$time;?></span><span class="sendddmmyy"><?=$date;?></span>
                                    <input type="hidden" name="artist_id123" id="artist_id123" value="<?=$artist_id123?>" />
                                    </div>
                                    <div class="msg_body">
                                        <p><?=$emoji->parseString($row['message']);?></p>
                                    </div>
                              
                  
                            </div>
               
               <?php
								 }
							 }
								 ?>
                            
                                
                                 </div>
                                
                                
                                
                              
                            </div>
                            
                           
                         
    
    
    
    
  
    
    
	
	<?php
	
	
}







/********************************************************************************************/

   }
?>