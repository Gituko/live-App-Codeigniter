<?php
class  Main extends CI_Controller 
{
	
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('module');
		$this->load->library('get_database_info');
		$this->load->library('email');
		$this->load->helper('imageupload_with_crop');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
	}
	
	public  function index()
	{
		$this->load->model('module');
		$this->load->library('session');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
	if($data["session_admin_user_name"]!='' && $data["session_admin_id"]!='')
	{
		redirect('main/home');
	}
	else
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$admin_user_name = $this->input->post('admin_user_name');
				$admin_password = $this->input->post('admin_password');
		
		
		
				$is_valid = $this->module->user_login_profile();
				
				if($is_valid)
				{
				
					redirect('main/home');
					
				}
				else // incorrect username or password
				{
					$data['message_error'] = TRUE;
					
				}
				
			}
			$data['check'] = '';
			$this->load->view("login",$data);

	}
		
		
	}
	
	
	
	public  function home() 
	{
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		
		if($data["session_admin_user_name"]!='' && $data["session_admin_id"]!='')
		{
			$this->load->view("home",$data);
		}
		else
		{
			 redirect('main/login');
		}
			
	
	}
	
	public function signup($check='')
	{	

		
		
		$this->load->library('session');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		
		$data['check'] = $check;

		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$admin_user_email = $this->input->post('admin_user_email');
				$admin_user_name = $this->input->post('admin_user_name');
				$admin_password = base64_encode($this->input->post('admin_password'));
		
			    $data = array(
								'admin_user_name' => $admin_user_name,
								'admin_email' => $admin_user_email,
								'admin_password' => $admin_password
							  );
		
				$this->module->user_signup($data);
				
					$url=base_url()."main/login?signup=true";
					echo "<script>window.location='".$url."'</script>";
					die;
					 //redirect('main/home');
				
			}
			$this->load->view("signup",$data);
			
		
	}
	
	public function login($check='')
	{	

		
		
		$this->load->library('session');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		
		$data['check'] = $check;

		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
				$admin_user_name = $this->input->post('admin_user_name');
				$admin_password = $this->input->post('admin_password');
		
			
		
				$is_valid = $this->module->user_login_profile();
				
				if($is_valid)
				{
					$url=base_url()."main/home";
					echo "<script>window.location='".$url."'</script>";
					die;
					 //redirect('main/home');
					
				}
				else // incorrect username or password
				{
					$url = base_url().'main/login/wrong';
					echo "<script>window.location='".$url."'</script>";
					//die;
					// redirect('main/login/wrong');
				}
				
			}
			$this->load->view("login",$data);
			
		
	}
	
	public function forgot_password()
	{
		$admin_pass['details']=' ';
		if($this->input->server('REQUEST_METHOD') === 'POST')
		{
		
		//$admin_user_name=$this->input->post('admin_user_name');
		$admin_email=$this->input->post('admin_email');
		//$admin_contactno=$this->input->post('admin_contactno');
		
		
		$check=$this->module->check_admin($admin_email);
		
		//echo "<pre>";print_r($check);die;
		
		if($check[0]['admin_password']!='' && $check[0]['admin_user_name']!='' && $check[0]['admin_email']!='')
		{
	
	        $admin_pass['details']='User name and Password send to your email id.';
		
		
		}
		else
		{
			$admin_pass['details']='Please Enter valid Input';
		}
		
		$admin_email = $check[0]['admin_email'];
		$user_name = $check[0]['admin_user_name'];
		
		/********************************email to user ****************************************/
				
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
                   <td class="mcnImageContent" style="mso-line-height-rule: exactly; padding-bottom: 0; padding-left: 9px; padding-right: 9px; padding-top: 0; text-align: center;" valign="top"><img align="center" alt="" class="mcnImage" src="'.base_url().'img/streams.png" style="border: 0; display: inline !important; height: auto; max-width: 235px; outline: none; padding-bottom: 0; text-decoration: none; vertical-align: bottom;" width="235" /></td>
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
			<td colspan="2">Dear Admin,</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Here is your backend login credential:</strong></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>User Name: </strong>'.$user_name.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Password:</strong> '.base64_decode($check[0]['admin_password']).'</td>
			</tr>
			
	
			<tr>
			<td colspan="2" height="10px;"></td>
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
                   <td class="mcnTextContent" style="color: #cccccc; font-family: Helvetica; font-size: 12px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: center; word-break: break-word;" valign="top"><em>Copyright &copy; '.date('Y').' &nbsp;streams , All rights reserved.</em></td>
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
			
			
			//echo $body;die;
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
			
				
			//$this->email->initialize($config);
			$this->email->initialize($config);
			$this->email->from($admin_email);
			//$this->email->from("tanay@webhawkstechnology.com", 'Where To Park Team');
			$this->email->to($admin_email);
			//$this->email->to("ddn12525@gmail.com"); 
			$this->email->subject('Streams Site Forgot Password');
			
			$this->email->message($body);
			
			
			$this->email->send();
			//echo $this->email->print_debugger(); die;

				
				/*******************************************end*************************************/
		
		}
		$this->load->view("forgot_password",$admin_pass);
	
	}
	
	public function logout() 
	{
		$this->session->set_userdata('admin_user_name', '');
		$this->session->set_userdata('admin_id', '');
		$this->session->sess_destroy();  
		$url = base_url().'main/login';
		echo "<script>window.location='".$url."'</script>";
	   // die;
	
	}
	
	
	public function change_password()
	{	
		$this->load->model('module');
		$this->load->library('session');
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$user_id=$data["session_admin_id"];
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{			
			 $password=addslashes($this->input->post('old_password'));			
			 $admin_new_password=addslashes($this->input->post('new_password'));			
			 $confirm_password=addslashes($this->input->post('confirm_password'));						
			 $old_password=base64_encode($password);			
			if($this->module->check_old_password($user_id,$old_password))
			{	
				if($this->module->update_user_password($user_id,$admin_new_password))
				{
					$data['update_message'] = TRUE; 
				}
				else
				{
					$data['update_message'] = FALSE;
				}     
           	} 				
			else
			{			
				$data['exist_message'] = TRUE;
			}
		}
		$this->load->view('change_password',$data);
	}
	
	/*******************************************************category portion**********************************************************/
	
public function category_list()
	{

		$this->load->model('module');
		$this->load->library('session');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->get_cat();
		
		
		
		//echo "<pre>"; print_r($data['details']); die;
		
		$this->load->view("category_list",$data);
		
	}
	
public function add_category()
	{

	
	$this->load->model('module');
		$this->load->library('session');
	
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
		/**************************************************category_image****************************************************************************/		
		$time=time();
		            if($_FILES['cat_image']['name']!='')
					{
						if(!is_dir('../uploads/cat_image/'))
							{
								umask(0);
								mkdir('../uploads/cat_image/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/cat_image/';
							$config['file_name'] = $time."_".$_FILES['cat_image']['name'];
							$config['allowed_types'] =  "png|jpg|jpeg|bmp|gif";
							/*$config['max_size'] = '100';
							$config['max_width']  = '1024';
							$config['max_height']  = '768';*/
							$config['overwrite'] = FALSE;
							$config['encrypt_name'] = FALSE;
							$config['remove_spaces'] = TRUE;
							//echo $config['upload_path'];
							$cat_image=$config['file_name'];
							if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
							$this->load->library('upload', $config);
							if ( ! $this->upload->do_upload('cat_image'))
							{
								echo 'error';
							}
							else
							{

								$this->upload->initialize($config);
								$data['img'] = $config['file_name'];
								$source_image=realpath('../uploads/cat_image/'.'$'."_".$_FILES['cat_image']['name']);	
								
													
						$config = array(
									'image_library' => 'gd2',
									'source_image' => $source_image,
									'create_thumb' => TRUE,
									'maintain_ratio' => FALSE,
									'width' => 75,
									'height' =>100,
									'new_image' => '../uploads/cat_image/'.$config['file_name'],
									'thumb_marker' => ''
									);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
				
				$this->image_lib->clear();
								
						       }
				   
					}
					else
					{
						$cat_image="";
					}
		
		
		
		
	/*******************************************************************************************************/	
		
		
		
				
				
				
		//echo "<pre>"; print_r($_POST); die;
					
					$category_name=$this->input->post('category_name');
					$overview=$this->input->post('overview');
					$meta_title=$this->input->post('meta_title');
					$meta_tag	=$this->input->post('meta_tag');
					$status=$this->input->post('status');
					
				  
							
					$data_to_store = array(
					
					'category_name' => $category_name,
				   'overview' => $overview,
				    //'meta_title' => $meta_title,
					//'meta_tag' => $meta_tag,
				  // 'cat_image' => $cat_image,
				  
				   'status' => $status
			        );
					
					//echo "<pre>"; print_r($data_to_store); die;
			
				
				
				$this->module->insert_category($data_to_store);
				
			redirect('main/category_list');
			/*echo "<script type='text/javascript'>window.location='".site_base_url()."admin/main/review/".$giver_id."'</script>";*/
			}
			
			
			$this->load->view("edit_category",$data);
	
	
	}
	
	
	public function edit_category()
	{
//echo $id;
//die;
$this->load->model('module');
$this->load->library('session');
$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
$data["session_admin_id"]=$this->session->userdata('admin_id');
$id = $this->uri->segment('3');

$data['details'] = $this->module->get_all_detail($id);
//print_r($details);
//die;
if ($this->input->server('REQUEST_METHOD') === 'POST')
	{	
	
/***********************************************************************************/	
	$time=time();
				$hid_cat_banner = $this->input->post('hid_cat_banner', TRUE);
				if($hid_cat_banner != '')
				$cat_image_banner = $hid_cat_banner;
				else $cat_image_banner = '';
				
				
					
			if( $_FILES['cat_image']['name']!='')
				{
			
					//echo $_FILES['Img_link']['name'];exit;
					if(!is_dir('../uploads/cat_image/'))
						{
						umask(0);
						
						}
					
					$config['upload_path'] = '../uploads/cat_image';
					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
					$config['overwrite'] = TRUE;
					
					$image_name=$time."_".$_FILES['cat_image']['name'];
					$config['file_name'] = str_replace(" ","_",$image_name);
					
					$UploadFile_banner=$config['file_name'];
					$data['img'] = "";
					
					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('cat_image'))
					{
					$data['error'] = strip_tags($this->upload->display_errors());
					
					}
					$data['img'] = $config['file_name'];
							
					
							$this->upload->initialize($config);
							$data['img'] = $config['file_name'];
							$source_image=realpath('../uploads/cat_image/'.$config['file_name']);
																				
						$config = array(
									'image_library' => 'gd2',
									'source_image' => $source_image,
									'create_thumb' => TRUE,
									'maintain_ratio' => FALSE,
									'width' => 265,
									'height' =>100,
									'new_image' => '../uploads/cat_image/'.$config['file_name'],
									'thumb_marker' => ''
									);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
				
				$this->image_lib->clear();
											
							
														
							}
							else
							{
								$data['img'] = $cat_image_banner;
								$UploadFile_banner=$cat_image_banner;
								
							}	
	
	
	
	
	
	
	
	
	
/***********************************************************************************************************/	
	
					$category_name=$this->input->post('category_name');
					$overview=$this->input->post('overview');
					$meta_title=$this->input->post('meta_title');
					$meta_tag=$this->input->post('meta_tag');
					$status=$this->input->post('status');
					
				  
							
					$data_to_store = array(
					
					'category_name' => $category_name,
				     'overview' => $overview,
				  // 'meta_title' => $meta_title,
				   //'meta_tag' => $meta_tag,
				   //'cat_image' => $UploadFile_banner,
				   
				   'status' => $status
			        );
	
	if($id!='')
				{
					
				   $this->module->update_cat($id,$data_to_store);
				}
				else
				{
					$this->module->insert_category($data_to_store);
				}
		
		echo "<script type='text/javascript'>window.location='".site_base_url()."admin/main/category_list'</script>";
			}
		
		$this->load->view("edit_category",$data);
	
	
	
		
	}
	


public function delete_category() 
	{
	$id = $this->uri->segment('3');
	 //echo $id;die;
		
		$this->module->delete_cat($id);
		//redirect('main/category_list');
		echo "<script type='text/javascript'>window.location='".site_base_url()."admin/main/category_list'</script>";
		
    }
/*====================================== SETTING PART =====================================================	*/
	public function setting()
	{
		$this->load->model('module');
		$this->load->library('session');
		
		$admin_id=$this->session->userdata('admin_id');
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		$page_name=$this->uri->segment(2);
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name);
		
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->get_setting();
		$this->load->view("setting",$data);
	}
	public function edit_setting($setting_id='')
	{
		
		$admin_id=$this->session->userdata('admin_id');
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		$page_name=explode("_",$this->uri->segment(2));
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name[1]);
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		$data['details'] = $this->module->get_setting_detail($setting_id);
		
		
		$data['setting_id']=$setting_id;
		$this->load->view("edit_setting",$data);
	}
	public function update_setting($setting_id)
	{
		
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$setting_key=$this->input->post('setting_key');
				$setting_value=$this->input->post('setting_value');
			
		
			
				
			
				
			
				$data_to_store = array(
					'setting_value' => $setting_value
					);
				
			
			
			
			
				$this->module->update_setting($setting_id,$data_to_store);
				
			//	$this->module->update_admin_email($setting_id,$data_store);	
					
				}
			
		 $data['details'] = $this->module->get_setting_detail($setting_id);
		
		 $data['setting_id']=$setting_id;
		 
		 	redirect("main/setting");
			
		$this->load->view("edit_setting",$data);
	}
	
	
	/******************************* END SETTING  ***********************/
	
	
	
	/***************************************************user member****************************************************/
	public function artist_list()
	{

		$this->load->model('module');
		$this->load->library('session');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->get_artist();
		
		
		
		//echo "<pre>"; print_r($data['details']); die;
		
		$this->load->view("artist_list",$data);
		
	}
	
	
	
	
	
	
	public function edit_artist()
	{
//echo $id;
//die;
$this->load->model('module');
$this->load->library('session');
$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
$data["session_admin_id"]=$this->session->userdata('admin_id');
$id = $this->uri->segment('3');

$data['details'] = $this->module->get_artist_detail($id);
//print_r($details);
//die;
if ($this->input->server('REQUEST_METHOD') === 'POST')
	{	
	
/***********************************************************************************/	
	$time=time();
	$image=$this->input->post('image');
				$hid_artist_banner = $this->input->post('hid_artist_banner', TRUE);
				if($hid_artist_banner != '')
				$artist_image_banner = $hid_artist_banner;
				else $artist_image_banner = '';
				
				
					
			if( $_FILES['image']['name']!='')
				{
			
					//echo $_FILES['Img_link']['name'];exit;
					if(!is_dir('../uploads/user_image/'))
						{
						umask(0);
						
						}
					
					$config['upload_path'] = '../uploads/user_image';
					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
					$config['overwrite'] = TRUE;
					
					$image_name=$time."_".$_FILES['image']['name'];
					$config['file_name'] = str_replace(" ","_",$image_name);
					
					$UploadFile_banner=$config['file_name'];
					$data['img'] = "";
					
					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('image'))
					{
					$data['error'] = strip_tags($this->upload->display_errors());
					
					}
					$data['img'] = $config['file_name'];
							
					
							$this->upload->initialize($config);
							$data['img'] = $config['file_name'];
							$source_image=realpath('../uploads/user_image/'.$config['file_name']);
																				
						$config = array(
									'image_library' => 'gd2',
									'source_image' => $source_image,
									'create_thumb' => TRUE,
									'maintain_ratio' => FALSE,
									'width' => 400,
									'height' =>300,
									'new_image' => '../uploads/user_image/'.$config['file_name'],
									'thumb_marker' => ''
									);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
				
				$this->image_lib->clear();
											
							
														
							}
							else
							{
								$data['img'] = $artist_image_banner;
								$UploadFile_banner=$artist_image_banner;
								
							}	
	
	
	
	
	
	
	
	
	
/***********************************************************************************************************/	
	
					$name=$this->input->post('name');
					$user_name=$this->input->post('user_name');
					$email=$this->input->post('email');
					$city=$this->input->post('city');
					$state=$this->input->post('state');
					$zipcode=$this->input->post('zipcode');
					$mobileno=$this->input->post('mobileno');
					//date("Y-m-d",strtotime($this->input->post('birth_date'));
					$birth_date=date("Y-m-d",strtotime($this->input->post('birth_date')));
					$status=$this->input->post('status');
					$sex=$this->input->post('sex');
					$artist_tag=$this->input->post('artist_tag');
					$interested_in=$this->input->post('interested_in');  $inserted= implode(",",$interested_in);
					$location=$this->input->post('location');
					$language_known=$this->input->post('language_known');  $language=implode(",",$language_known);
					$body_type=$this->input->post('body_type');
					$about_me=$this->input->post('about_me');
					$orientation=$this->input->post('orientation');
					$haircolor=$this->input->post('haircolor');
					$ethnicity=$this->input->post('ethnicity');
					$eyecolor=$this->input->post('eyecolor');
					$password=md5($this->input->post('password'));
					
					$live_video=$this->input->post('live_video');
					$recorded_video=$this->input->post('recorded_video');
					$live_recorded_video=$this->input->post('live_recorded_video');
					$category_type=$this->input->post('category_type');
					$paypal_id=$this->input->post('paypal_id');
				  
							
					$data_to_store = array(
					
					'name' => $name,
				     'user_name' => $user_name,
				   'email' => $email,
				   'city' => $city,
				   'state' => $state,
				   'zipcode' => $zipcode,
				   'mobileno' => $mobileno,
				   'birth_date' => $birth_date,
				   'status' => $status,
				  /* 'sex' => $sex,
				   'interested_in' => $inserted,
				   'location' => $location,
				   'language_known' => $language,
				   'body_type' => $body_type,
				   'about_me' => $about_me,
				    'image' => $UploadFile_banner,
				   'orientation' => $orientation,
				   'haircolor' => $haircolor,
				   'ethnicity' => $ethnicity,
				   'eyecolor' => $eyecolor,*/
				    'about_me' => $about_me,
				    'image' => $UploadFile_banner,
				   'artist_tag' => $artist_tag,
				    
					 'paypal_id' => $paypal_id,
				   
				   'live_video' => $live_video,
				   'recorded_video' => $recorded_video,
				   'live&recorded_video' => $live_recorded_video,
				   'password' => $password
			        );
	
	if($id!='')
				{
					
				   $this->module->update_artist($id,$data_to_store);
				}
				else
				{
					$this->module->insert_artist($data_to_store);
				}
		
		redirect("main/artist_list");
			}
		
		$this->load->view("edit_artist",$data);
	
	
	
		
	}

public function add_artist()
	{

	
	$this->load->model('module');
		$this->load->library('session');
	
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$image=$this->input->post('image');
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
		/**************************************************category_image****************************************************************************/		
		$time=time();
		            if($_FILES['image']['name']!='')
					{
						if(!is_dir('../uploads/user_image/'))
							{
								umask(0);
								mkdir('../uploads/user_image/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/user_image/';
							$config['file_name'] = $time."_".$_FILES['image']['name'];
							$config['allowed_types'] =  "png|jpg|jpeg|bmp|gif";
							/*$config['max_size'] = '100';
							$config['max_width']  = '1024';
							$config['max_height']  = '768';*/
							$config['overwrite'] = FALSE;
							$config['encrypt_name'] = FALSE;
							$config['remove_spaces'] = TRUE;
							//echo $config['upload_path'];
							$UploadFile_banner=$config['file_name'];
							if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
							$this->load->library('upload', $config);
							if ( ! $this->upload->do_upload('image'))
							{
								echo 'error';
							}
							else
							{

								$this->upload->initialize($config);
								$data['img'] = $config['file_name'];
								$source_image=realpath('../uploads/user_image/'.'$'."_".$_FILES['image']['name']);	
								
													
						$config = array(
									'image_library' => 'gd2',
									'source_image' => $source_image,
									'create_thumb' => TRUE,
									'maintain_ratio' => FALSE,
									'width' => 400,
									'height' =>300,
									'new_image' => '../uploads/user_image/'.$config['file_name'],
									'thumb_marker' => ''
									);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
				
				$this->image_lib->clear();
								
						       }
				   
					}
					else
					{
						$UploadFile_banner="";
					}
		
		
		
		
	/*******************************************************************************************************/	
		
		
		
				
				
				
		//echo "<pre>"; print_r($_POST); die;
					
					$name=$this->input->post('name');
					$user_name=$this->input->post('user_name');
					$email=$this->input->post('email');
					$city=$this->input->post('city');
					$state=$this->input->post('state');
					$zipcode=$this->input->post('zipcode');
					$mobileno=$this->input->post('mobileno');
					$birth_date=date("Y-m-d",strtotime($this->input->post('birth_date')));
					$status=$this->input->post('status');
					$sex=$this->input->post('sex');
					$artist_tag=$this->input->post('artist_tag');
					//$interested_in=$this->input->post('interested_in');   $inserted= implode(",",$interested_in);
					$location=$this->input->post('location');
					//$language_known=$this->input->post('language_known');   $language=implode(",",$language_known);
					$body_type=$this->input->post('body_type');
					$about_me=$this->input->post('about_me');
					$orientation=$this->input->post('orientation');
					$haircolor=$this->input->post('haircolor');
					$ethnicity=$this->input->post('ethnicity');
					$eyecolor=$this->input->post('eyecolor');
					
					
					
					
					$live_video=$this->input->post('live_video');
					$recorded_video=$this->input->post('recorded_video');
					$live_recorded_video=$this->input->post('live_recorded_video');
					$password=md5($this->input->post('password'));
					$paypal_id=$this->input->post('paypal_id');
					
					//category_type				  
							
					$data_to_store = array(
					
					'name' => $name,
				     'user_name' => $user_name,
				   'email' => $email,
				   'city' => $city,
				   'state' => $state,
				   'zipcode' => $zipcode,
				   'mobileno' => $mobileno,
				   'birth_date' => $birth_date,
				   'status' => $status,
				   'sex' => $sex,
				   'artist_tag' => $artist_tag,
				  // 'interested_in' => $inserted,
//				   'location' => $location,
//				   'language_known' => $language,
//				   'body_type' => $body_type,
//				   'about_me' => $about_me,
			    'image' => $UploadFile_banner,
//				   'orientation' => $orientation,
//				   'haircolor' => $haircolor,
//				   'ethnicity' => $ethnicity,
//				   'eyecolor' => $eyecolor,
                     'about_me' => $about_me,
				    
				   'live_video' => $live_video,
				   'recorded_video' => $recorded_video,
				   'live&recorded_video' => $live_recorded_video,
				 'paypal_id' => $paypal_id,
				   'password' => $password
				   
				   
			        );
					//echo "<pre>"; print_r($data_to_store); die;
			
				
				
				$this->module->insert_artist($data_to_store);
				
			
		redirect("main/artist_list");
			/*echo "<script type='text/javascript'>window.location='".site_base_url()."admin/main/review/".$giver_id."'</script>";*/
			}
			
			
			$this->load->view("edit_artist",$data);
	
	
	}
	
	
	public function delete_artist($id='')
	{
		$delete=$this->module->delete_artist($id);
	
	redirect('main/artist_list');
		
		}
	
	
	
	
	
	
	public function user_list()
	{

		$this->load->model('module');
		$this->load->library('session');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->get_user();
		
		
		
		//echo "<pre>"; print_r($data['details']); die;
		
		$this->load->view("user_list",$data);
		
	}
	public function edit_user()
	{
//echo $id;
//die;
$this->load->model('module');
$this->load->library('session');
$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
$data["session_admin_id"]=$this->session->userdata('admin_id');
$id = $this->uri->segment('3');

$data['details'] = $this->module->get_user_detail($id);
//print_r($details);
//die;
if ($this->input->server('REQUEST_METHOD') === 'POST')
	{	
	
/***********************************************************************************/	
	$time=time();
				$hid_user_banner = $this->input->post('hid_user_banner', TRUE);
				if($hid_user_banner != '')
				$user_image_banner = $hid_user_banner;
				else $user_image_banner = '';
				
				
					
			if( $_FILES['image']['name']!='')
				{
			
					//echo $_FILES['Img_link']['name'];exit;
					if(!is_dir('../uploads/user_image/'))
						{
						umask(0);
						
						}
					
					$config['upload_path'] = '../uploads/user_image';
					$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
					$config['overwrite'] = TRUE;
					
					$image_name=$time."_".$_FILES['image']['name'];
					$config['file_name'] = str_replace(" ","_",$image_name);
					
					$UploadFile_banner=$config['file_name'];
					$data['img'] = "";
					
					$this->load->library('upload',$config);
					if (!$this->upload->do_upload('image'))
					{
					$data['error'] = strip_tags($this->upload->display_errors());
					
					}
					$data['img'] = $config['file_name'];
							
					
							$this->upload->initialize($config);
							$data['img'] = $config['file_name'];
							$source_image=realpath('../uploads/user_image/'.$config['file_name']);
																				
						$config = array(
									'image_library' => 'gd2',
									'source_image' => $source_image,
									'create_thumb' => TRUE,
									'maintain_ratio' => FALSE,
									'width' => 265,
									'height' =>100,
									'new_image' => '../uploads/user_image/'.$config['file_name'],
									'thumb_marker' => ''
									);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
				
				$this->image_lib->clear();
											
							
														
							}
							else
							{
								$data['img'] = $user_image_banner;
								$UploadFile_banner=$user_image_banner;
								
							}	
	
	
	
	
	
	
	
	
	
/***********************************************************************************************************/	
	
					$name=$this->input->post('name');
					$user_name=$this->input->post('user_name');
					$user_email=$this->input->post('user_email');
					$city=$this->input->post('city');
					$state=$this->input->post('state');
					$zipcode=$this->input->post('zipcode');
					$mobileno=$this->input->post('mobileno');
					
							$password=md5($this->input->post('password'));
					$birth_date=$this->input->post('birth_date');
					$user_status=$this->input->post('user_status');
					$location=$this->input->post('location');
					
					
				  
							
					$data_to_store = array(
					
					'name' => $name,
				     'user_name' => $user_name,
				   'user_email' => $user_email,
				   'user_password' => $password,
				   'city' => $city,
				   'state' => $state,
				   'zipcode' => $zipcode,
				   'mobileno' => $mobileno,
				   'birth_date' => $birth_date,
				    'location' => $location,
				   'user_status' => $user_status,
				   
				    'image' => $UploadFile_banner
				   
			        );
	
	if($id!='')
				{
					
				   $this->module->update_user($id,$data_to_store);
				}
				else
				{
					$this->module->insert_user($data_to_store);
				}
		
		redirect("main/user_list");
			}
		
		$this->load->view("edit_user",$data);
	
	
	
		
	}

public function add_user()
	{

	
	$this->load->model('module');
		$this->load->library('session');
	
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
		/**************************************************category_image****************************************************************************/		
		$time=time();
		            if($_FILES['image']['name']!='')
					{
						if(!is_dir('../uploads/user_image/'))
							{
								umask(0);
								mkdir('../uploads/user_image/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/user_image/';
							$config['file_name'] = $time."_".$_FILES['image']['name'];
							$config['allowed_types'] =  "png|jpg|jpeg|bmp|gif";
							/*$config['max_size'] = '100';
							$config['max_width']  = '1024';
							$config['max_height']  = '768';*/
							$config['overwrite'] = FALSE;
							$config['encrypt_name'] = FALSE;
							$config['remove_spaces'] = TRUE;
							//echo $config['upload_path'];
							$UploadFile_banner=$config['file_name'];
							if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
							$this->load->library('upload', $config);
							if ( ! $this->upload->do_upload('image'))
							{
								echo 'error';
							}
							else
							{

								$this->upload->initialize($config);
								$data['img'] = $config['file_name'];
								$source_image=realpath('../uploads/user_image/'.'$'."_".$_FILES['image']['name']);	
								
													
						$config = array(
									'image_library' => 'gd2',
									'source_image' => $source_image,
									'create_thumb' => TRUE,
									'maintain_ratio' => FALSE,
									'width' => 75,
									'height' =>100,
									'new_image' => '../uploads/user_image/'.$config['file_name'],
									'thumb_marker' => ''
									);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
				
				$this->image_lib->clear();
								
						       }
				   
					}
					else
					{
						$UploadFile_banner="";
					}
		
		
		
		
	/*******************************************************************************************************/	
		
			$name=$this->input->post('name');
					$user_name=$this->input->post('user_name');
					$user_email=$this->input->post('user_email');
					$city=$this->input->post('city');
					$state=$this->input->post('state');
					$zipcode=$this->input->post('zipcode');
					$mobileno=$this->input->post('mobileno');
					$birth_date=$this->input->post('birth_date');
					$user_status=$this->input->post('user_status');
					$location=$this->input->post('location');
					
					
					$password=md5($this->input->post('password'));
							
					$data_to_store = array(
					
					'name' => $name,
				     'user_name' => $user_name,
					  'user_password' => $password,
				   'user_email' => $user_email,
				   'city' => $city,
				   'state' => $state,
				   'zipcode' => $zipcode,
				   'mobileno' => $mobileno,
				   'birth_date' => $birth_date,
				   'location' =>$location,
				   'user_status' => $user_status,
				   
				    'image' => $UploadFile_banner
				   
			        );
					//echo "<pre>"; print_r($data_to_store); die;
			
				
				
				$this->module->insert_user($data_to_store);
				
		redirect("main/user_list");
			/*echo "<script type='text/javascript'>window.location='".site_base_url()."admin/main/review/".$giver_id."'</script>";*/
			}
			
			
			$this->load->view("edit_user",$data);
	
	
	
	}
	
	
public function delete_user($id='')
	{
		$delete=$this->module->delete_user($id);
	
	redirect('main/user_list');
		
		}	
	
	
	
	
	
	
	
	
	/****************************************************************/
	public function slider()
	{
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->get_slider();
		
		$this->load->view("slider",$data);
	
	
	}
	
	public function add_slider()
	{
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		
	   if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$slider_name=$this->input->post('slider_name');
				$slider_image=$this->input->post('thumb_image');
				$slider_overview=$this->input->post('slider_overview');
				$slider_link=$this->input->post('slider_link');
				$slider_status=$this->input->post('slider_status');
				
			
			
			/*/-----start image upload--------*/
			
	if($_FILES['slider_image']['name']!='')
	{
		$image_name='slider_image';
		$path='slider_image';
		
		
		
 //$slider_image=imageupload_with_crop($image_name,$path,800,356);
	$slider_image=imageupload_with_crop($image_name,$path,800,356);
	
		}
		
		else{
			$slider_image=$this->input->post('hid_slider_image');
			
			}
			
				$data=array(	 	
									'slider_name'=>$slider_name,
									'slider_image'=>$slider_image,
									'slider_overview'=>$slider_overview,
									'slider_link'=>$slider_link,
									'slider_status'=>$slider_status
						);
				
				
				$this->module->add_slider($data);
				redirect('main/slider');
				}	
		
	
		
		$this->load->view("edit_slider",$data);
		
	}	
	public function edit_slider($slider_id="")
	  {	
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
			
			
		
				$slider_name=$this->input->post('slider_name');
				$slider_image=$this->input->post('slider_image');
				$slider_overview=$this->input->post('slider_overview');
				$slider_link=$this->input->post('slider_link');
				$slider_status=$this->input->post('slider_status');
				
			
		
		
			/*/-----start image upload--------*/
			
			
	if($_FILES['slider_image']['name']!='')
	{
		
		$image_name='slider_image';
		$path='slider_image';
 	//$slider_image=imageupload_with_crop($image_name,$path,800,356);
	$slider_image=imageupload_with_crop($image_name,$path,800,356);
	//$thumb_image='thumb_'.$slider_image;
	
	
	
	/*$thumb_image=imageupload_with_crop($slider_image,$thumb_path,72,72);*/
	$hid_slider_image=$this->input->post('hid_slider_image');
			unlink('../uploads/slider_image/'.$hid_slider_image);
		}
		
		else{
			$slider_image=$this->input->post('hid_slider_image');
			//$thumb_image='thumb'.$this->input->post('hid_slider_image');
			
			
			}
			
				$data=array(		
									'slider_name'=>$slider_name,
									'slider_image'=>$slider_image,
									'slider_overview'=>$slider_overview,
									'slider_link'=>$slider_link,
									'slider_status'=>$slider_status
						);
				
				
			
				$this->module->update_slider($slider_id,$data);
				redirect('main/slider');
				
				
				}
		
		
		$data['details'] = $this->module->get_slider_detail($slider_id);
		$data['slider_id']=$slider_id;
		
		$this->load->view("edit_slider",$data);
	}
	
	public function delete_slider($slider_id="")
	{
		$data['details'] = $this->module->delete_slider($slider_id);
	
		redirect("main/slider");
		
	}
	
	/*---------------------------------------------------------advertisement(souvik)--------------------------------------------------------------------------------------*/
 public function advertisement()
	{
		
		$this->load->model('module');
		$this->load->library('session');
		
		$data['details'] = $this->module->get_all_advertisement();
		$this->load->view("advertisement",$data);
	}
	
	public function edit_advertisement($advertisement_id="")
	{
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->get_advertisement_detail($advertisement_id);
		$data['advertisement_id']=$advertisement_id;
	
	   if ($this->input->server('REQUEST_METHOD') === 'POST')
			{

				
				
				$advertisement_name=$this->input->post('advertisement_name');
				$advertisement_image=$this->input->post('advertisement_image');
				$advertisement_link=$this->input->post('advertisement_link');
				$advertisement_start_date=$this->input->post('advertisement_start_date');
				$advertisement_end_date1=$this->input->post('advertisement_end_date1');
				$page=$this->input->post('page');
				
				$days=$this->input->post('advertisement_end_date');
				$total_price=$this->input->post('total_price');
				$advertisement_code=addslashes($this->input->post('advertisement_code'));
				$advertisment_type=addslashes($this->input->post('advertisment_type'));
				$advertisement_status=$this->input->post('advertisement_status');
				//advertiser_name=$this->input->post('advertiser_name');
			
			
			/*/-----start image upload--------*/
		
		$time=time();
				
				
				if($_FILES['advertisement_image']['name']!='')
					{
						if(!is_dir('../uploads/advertisement_image/'))
							{
								umask(0);
								mkdir('../uploads/advertisement_image/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/advertisement_image/';
							$config['file_name'] = $time."_".$_FILES['advertisement_image']['name'];
							$config['allowed_types'] =  "png|jpg|jpeg|bmp|gif";
							/*$config['max_size'] = '100';
							$config['max_width']  = '1024';
							$config['max_height']  = '768';*/
							$config['overwrite'] = FALSE;
							$config['encrypt_name'] = FALSE;
							$config['remove_spaces'] = TRUE;
							//echo $config['upload_path'];
							$advertisement_image=$config['file_name'];
							if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
							$this->load->library('upload', $config);
							if ( ! $this->upload->do_upload('advertisement_image'))
							{
								echo 'error';
							}
							else
							{

								$this->upload->initialize($config);
								$data['img'] = $config['file_name'];
								$source_image=realpath('../uploads/advertisement_image/'.'$'."_".$_FILES['advertisement_image']['name']);	
								
													
						$config = array(
									'image_library' => 'gd2',
									'source_image' => $source_image,
									'create_thumb' => TRUE,
									'maintain_ratio' => FALSE,
									'width' => '',
									'height' =>'',
									'new_image' => '../uploads/advertisement_image/'.$config['file_name'],
									'thumb_marker' => ''
									);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
				
				$this->image_lib->clear();
								
						       }
				   
					}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		else{
			$advertisement_image=$this->input->post('hid_advertisement_image');
			}
		
				
				$data=array(	 
							 		'advertisement_name'=>$advertisement_name,
									'advertisement_image'=>$advertisement_image,
									'advertisement_link'=>$advertisement_link,
									'advertisement_start_date'=>$advertisement_start_date,
									'advertisement_end_date'=>$advertisement_end_date1,
									'advertisement_date'=>date('Y-m-d',time()),
									'page'=>$page,
									'days'=>$days,
				                    'total_price'=>$total_price,
									'advertisment_type'=>$advertisment_type,
									'advertisement_code'=>$advertisement_code,
									'advertisement_status'=>$advertisement_status,
									//'advertiser_name'=>$advertiser_name
						
							);
							
				
				
				
				$data['details']=$this->module->update_advertisement($advertisement_id,$data);
				
				//	redirect("main/advertisement");
			echo "<script>window.location='".base_url()."main/advertisement'</script>";;
				}	
		
	
		
		$this->load->view("edit_advertisement",$data);
		
	}
	
	public function add_advertisement()
	{
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		
		
		
	   if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
				
				
				
				
				$advertisement_name=$this->input->post('advertisement_name');
				$advertisement_image=$this->input->post('advertisement_image');
				$advertisement_link=$this->input->post('advertisement_link');
				$advertisement_start_date=$this->input->post('advertisement_start_date');
				$advertisement_end_date1=$this->input->post('advertisement_end_date1');
				$advertisement_status=$this->input->post('advertisement_status');
				$page=$this->input->post('page');
					
				$advertisement_end_date=$this->input->post('advertisement_end_date');
				$total_price=$this->input->post('total_price');
				$advertisement_code=addslashes($this->input->post('advertisement_code'));
				$advertisment_type=addslashes($this->input->post('advertisment_type'));
				
				//$advertiser_name=addslashes($this->input->post('advertiser_name'));
			
			
			
	/*/-----start image upload--------*/
		
	
				
				
				$time=time();
				
				
				if($_FILES['advertisement_image']['name']!='')
					{
						if(!is_dir('../uploads/advertisement_image/'))
							{
								umask(0);
								mkdir('../uploads/advertisement_image/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/advertisement_image/';
							$config['file_name'] = $time."_".$_FILES['advertisement_image']['name'];
							$config['allowed_types'] =  "png|jpg|jpeg|bmp|gif";
							/*$config['max_size'] = '100';
							$config['max_width']  = '1024';
							$config['max_height']  = '768';*/
							$config['overwrite'] = FALSE;
							$config['encrypt_name'] = FALSE;
							$config['remove_spaces'] = TRUE;
							//echo $config['upload_path'];
							$advertisement_image=$config['file_name'];
							if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
							$this->load->library('upload', $config);
							if ( ! $this->upload->do_upload('advertisement_image'))
							{
								echo 'error';
							}
							else
							{

								$this->upload->initialize($config);
								$data['img'] = $config['file_name'];
								$source_image=realpath('../uploads/advertisement_image/'.'$'."_".$_FILES['advertisement_image']['name']);	
								
													
						$config = array(
									'image_library' => 'gd2',
									'source_image' => $source_image,
									'create_thumb' => TRUE,
									'maintain_ratio' => FALSE,
									'width' => '',
									'height' =>'',
									'new_image' => '../uploads/advertisement_image/'.$config['file_name'],
									'thumb_marker' => ''
									);
				
				$this->load->library('image_lib',$config);
				if ( ! $this->image_lib->resize())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
				
				$this->image_lib->clear();
								
						       }
				   
					}
					else
					{
						$advertisement_image="";
					}
		
				
				
				
				
				
				
				
				$data=array(	 
							 		'advertisement_name'=>$advertisement_name,
									'advertisement_image'=>$advertisement_image,
									'advertisement_link'=>$advertisement_link,
									'advertisement_start_date'=>$advertisement_start_date,
									'advertisement_end_date'=>$advertisement_end_date1,
									'advertisement_date'=>date('Y-m-d',time()),
									'page'=>$page,
									'days'=>$advertisement_end_date,
				                    'total_price'=>$total_price,
									'advertisment_type'=>$advertisment_type,
									'advertisement_code'=>$advertisement_code,
									'advertisement_status'=>$advertisement_status,
									//'advertiser_name'=>$advertiser_name
						);
				
				
			
			//print_r($data);
			//die;
				
				/*** update ad page **/
				/*$data_place=array(		
									'ad_place'=>$advertisement_place,
						);
				
				$this->module->update_advertisement_by_page($page,$data);*/
				/*** end  update ad page **/
				
				
				$data['details']=$this->module->add_advertisement($data);
				redirect("main/advertisement");
				}	
		
		$this->load->view("edit_advertisement",$data);
		
	}
	
	public function delete_advertisement()
	{
		$id=$this->uri->segment('3');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$delete=$this->module->delete_advertisement($id);
		$data['details'] = $this->module->get_all_advertisement();
		$this->load->view("advertisement",$data);
		redirect('main/advertisement');
	}
	

/*----------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/********************************************pagecontent***************************************************************/

public function pagecontent($check="")
	{
		$this->load->model('module');
		$this->load->library('session');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		$admin_id=$this->session->userdata('admin_id');
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		$page_name=$this->uri->segment(2);
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name);
		
		$data['details'] = $this->module->get_pagecontent();
		$data['check']=$check;
		
		
		$this->load->view("pagecontent",$data);
	}
public function add_pagecontent($check="")
	{
		$this->load->model('module');
		$this->load->library('session');
		$admin_id=$this->session->userdata('admin_id');
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		$page_name=explode("_",$this->uri->segment(2));
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name[1]);
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
				
				
		if($_FILES['image']['name']!='')
	{
		   $image_name='image';
		   $path='pagecontent_image';
		 
		 
		 		
	$page_image=imageupload_with_crop($image_name,$path,330,186);
	
		
		
	}
	
		else{
			$page_image=$this->input->post('hid_image');
			}		
				
				
				
				
				
				
				
				
				
				
				
				
				
				 	
			    $page_title=$this->input->post('page_title');
				$page_content=$this->input->post('page_content');
				$status=$this->input->post('status');
			$data_to_store = array(
					'page_title' => $page_title,
					'page_content' => $page_content,
					'image' => $page_image,
					
					'status' => $status
			        );
				
				$page_id=$this->module->insert_pagecontent($data_to_store);
				
				
				redirect("main/pagecontent");
			
		   /* else
			{
				redirect("main/edit_pagecontent/exist");
			}*/
		
	}	
		
		
		
		$data['check']=$check;
		
		$this->load->view("edit_pagecontent",$data);
	}
	
	
   public function update_pagecontent($page_id)
	{
		
	//echo "dddd"; die;
		$this->load->model('module');
		$this->load->library('session');
		//echo "dddd"; die;
		$admin_id=$this->session->userdata('admin_id');
		//echo $admin_id; die;
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		//$page_name=explode("_",$this->uri->segment(2));
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name[1]);
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		//echo "dddd"; die;
			
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				//echo "fff"; die;
				
			
			
		if($_FILES['image']['name']!='')
	{
		   $image_name='image';
		   $path='pagecontent_image';
		 
		 
		 		
	$page_image=imageupload_with_crop($image_name,$path,330,186);
	
		
		
	}
	
		else{
			$page_image=$this->input->post('hid_image');
			}			
			
			
			
			
			
			
			
			
			
			
			    $page_title=$this->input->post('page_title');
				//echo $page_title; die;
				$page_content=$this->input->post('page_content');
				$status=$this->input->post('status');
				
				$data_to_store = array(
					'page_title' => $page_title,
					'page_content' => $page_content,
					'image' => $page_image,
					'status' => $status
			        );
				
				//echo "<pre>"; print_r($data_to_store);die;
				
				if($page_id!='')
				{
				   $page_id=$this->module->update_pagecontent($page_id,$data_to_store);
				   redirect("main/pagecontent");
				}
				else
				{
					$page_id=$this->module->insert_pagecontent($data_to_store);
				}
				
			}
		
		
		$data['details'] = $this->module->get_pagecontent_detail($page_id);
		
		//echo "<pre>"; print_r($data['details']);die;
	
		
		$data['page_id']=$page_id;
		
	
		
		$this->load->view("edit_pagecontent",$data);
	}
	
	public function delete_pagecontent($id='')
	{
		$delete=$this->module->delete_pagecontent($id);
	
	redirect('main/pagecontent/'.$id);
		
		}
	
/***************************************************end******************************************/
public function recorded_video_payment_list()
{

$this->load->model('module');
		$this->load->library('session');
		
		$data['details'] = $this->module->get_all_recorded_payment_list();
		$this->load->view("recorded_payment",$data);


}


public function recorded_video_view($video_id)
{

  $video_id=$this->uri->segment('3');
 ///die;
$this->load->model('module');
		$this->load->library('session');
		
		$data['details'] = $this->module->recorded_video_view($video_id);
		
		
		$this->load->view("recorded_payment_view",$data);


}



/************************************************souvik(end)***********************************************************************************/

	
	//---------------------------------------meta tag -----------------------------------------------------------------
	public function meta_tag()
	{
		
		$this->load->model('module');
		$this->load->library('session');
		
		$data['details'] = $this->module->get_all_meta_tag();
		$this->load->view("meta_tag",$data);
	}
	
	
	public function edit_meta_tag($meta_id="")
	{
			$meta_id=$this->uri->segment('3');
		$data['details'] = $this->module->get_meta_tag_detail($meta_id);
		$data['meta_id']=$meta_id;
	
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
			
		$meta_title=$this->input->post('meta_title');
		$page_name=$this->input->post('page_name');
		$meta_tag=$this->input->post('meta_tag');
		$meta_status=$this->input->post('meta_status');
		
		$data=array(	 
							 		'meta_title'=>$meta_title,
									'page_name'=>$page_name,
									'meta_tag'=>$meta_tag,
									'meta_status'=>$meta_status	
					);
		$data['details']=$this->module->update_meta_tag($meta_id,$data);
				redirect("main/meta_tag");
			}
		$this->load->view("edit_meta_tag",$data);
	}
	public function add_meta_tag()
	{
		
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
			
		 $meta_title=$this->input->post('meta_title');
		 $page_name=$this->input->post('page_name');
		 $meta_tag=$this->input->post('meta_tag');
		 $meta_status=$this->input->post('meta_status');
		
		
		$data=array(	 
							 		'meta_title'=>$meta_title,
									'page_name'=>$page_name,
									'meta_tag'=>$meta_tag,
									'meta_status'=>$meta_status	
					);
		//echo "<pre>";
		//print_r($data);
		//die;
		$data['details']=$this->module->add_meta_tag($data);
				redirect("main/meta_tag");
			}
		$this->load->view("edit_meta_tag",$data);
	}
	public function delete_meta_tag()
	{
		$meta_id=$this->uri->segment('3');
	
		$delete=$this->module->delete_meta_tag($meta_id);
		$data['details'] = $this->module->get_all_meta_tag();
		$this->load->view("meta_tag",$data);
		redirect('main/meta_tag');
	}
	
	//-------------------------------------end meta tag----------------------------------------------------------------
	
	//----------------------------------------artist start----------------------------------------------------------
	
	public function artist_list_video()
	{
		$artist_id=$this->uri->segment('3');
		
		$this->load->model('module');
		$this->load->library('session');
		
		
		
			
	$this->load->model('module');
			/*$this->load->library('Pagination');
			
		$config['per_page'] =20;
		$config['base_url'] = base_url().'artist_list_video/'.$artist_id;
		//$config['prefix'] = '/'.$sub_cat_id.'/';
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 9;
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['uri_segment'] = 3;
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
	    $page = $this->uri->segment(3);
		$limit_end = ($page * $config['per_page']) - $config['per_page'];
		if ($limit_end < 0){
			$limit_end = 0;
		}
		
		
		
	$config['details'] = count($this->module->get_artist_all_video($artist_id,"",""));
			  $data['details'] = $this->module->get_artist_all_video($artist_id,$config['per_page'],$limit_end);
			 // echo "<pre>";print_r($data['category_list']);die;
			  $config['total_rows'] = $config['details'];
		$this->pagination->initialize($config); 
					*/
		//$data['details'] = $this->module->get_artist_all_video($artist_id);
		//echo "<pre>";print_r($data);die;
		 $data['details'] = $this->module->get_artist_all_video($artist_id);
		$this->load->view("artist_video_list",$data);
	}
	
	
	
	
	function artist_add_video()
	{
		$artist_id=$this->uri->segment('3');
		$this->load->model('module');
		$data['detail']=$this->module->get_artist_name($artist_id);
		
	
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				   $video_name=$this->input->post('video_name');
				   $video_title=$this->input->post('video_title');
				    $artist_name=$this->input->post('artist_name');
				   $video_status=$this->input->post('video_status');
				  
				
			
				 	$time=time();
		            if($_FILES['video_name']['name']!='')
					{
						if(!is_dir('../uploads/arists_video/'))
							{
								umask(0);
								mkdir('../uploads/arists_video/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/arists_video/';
							$config['allowed_types'] = 'wmv|mp4|3gp|flv';
							$config['file_name'] = $time.$_FILES['video_name']['name'];
							
						
							$video_name=$config['file_name'];
							$this->load->library('upload', $config);
           						 $this->upload->initialize($config);
							
						
							if ( !$this->upload->do_upload('video_name'))
							{
								echo 'error';
							}
							
				   
					}
					else
					{
						$video_name="";
					}
					
					
					
						
					$data=array(	 
							 		'video_title'=>$video_title,
									'artist_id'=>$artist_id,
									'video_name'=>$video_name,
									'video_status'=>$video_status
						);
				
				
				
			
				
			
				
				$check=$this->module->artist_upload_video($data);
				if($check!=NULL)
				{
					redirect('main/artist_list_video/'.$artist_id);
				}
				
			}
	
		
			
		
		$this->load->view("add_artist_video",$data);
		
	}
	
	public function delete_artist_video_list()
	{
		$artist_id=$this->uri->segment('3');
		$video_id=$this->uri->segment('4');
		$delete=$this->module->delete_artist_video($artist_id,$video_id);
		$data['details'] = $this->module->get_artist_all_video($artist_id);
		$this->load->view("artist_video_list",$data);
		redirect('main/artist_list_video/'.$artist_id);
	}
	
	
	
	
	//---------------------------image---------------------------------------------------------------------------------
	
	
	/*public function artist_list_image()
	{
		$artist_id=$this->uri->segment('3');
		
		$this->load->model('module');
		$this->load->library('session');
		
		$data['details'] = $this->module->get_artist_all_image($artist_id);
		//echo "<pre>";print_r($data);die;
		$this->load->view("artist_image_list",$data);
	}*/
	public function artist_list_image()
	{
		$artist_id=$this->uri->segment('3');
		
		$this->load->model('module');
		$this->load->library('session');
		
		$data['details'] = $this->module->get_artist_all_image($artist_id);
		//echo "<pre>";print_r($data);die;
		$this->load->view("artist_image_list",$data);
	}
	
	
	
	
	
	
	
	/*function artist_add_image()
	{
		$artist_id=$this->uri->segment('3');
		$this->load->model('module');
		$data['detail']=$this->module->get_artist_name($artist_id);
		
	
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				   $image_name=$this->input->post('image_name');
				   $image=$this->input->post('image');
				   
				
			
				 	$time=time();
		            if($_FILES['image']['name']!='')
					{
						if(!is_dir('../uploads/user_photo/'))
							{
								umask(0);
								mkdir('../uploads/user_photo/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/user_photo/';
							$config['allowed_types'] = 'gif|jpg|png|jpeg';
							$config['file_name'] = $time.$_FILES['image']['name'];
							$config["max_width"] = 800;
        					$config["max_height"] = 550;
						
							$image=$config['file_name'];
							
							$this->load->library('upload', $config);
           						 $this->upload->initialize($config);
							
						
							if ( !$this->upload->do_upload('image'))
							{
								echo 'error';
							}
							
				   
					}
					else
					{
						$image="";
					}
					
					
					
					//$brand_color=$this->input->post('brand_color');			
					$data=array(	 
							 		'image_name'=>$image_name,
									'artist_id'=>$artist_id,
									'image'=>$image
						);
				
				
				
			
				
			
				
				$check=$this->module->artist_upload_image($data);
				if($check!=NULL)
				{
					redirect('main/artist_list_image/'.$artist_id);
				}				
				
			}
	
		
			
		
		$this->load->view("add_artist_image",$data);
		
	}*/
	public function delete_artist_image_list()
	{
		$artist_id=$this->uri->segment('3');
		$image_id=$this->uri->segment('4');
		$delete=$this->module->delete_artist_image($artist_id,$image_id);
		$data['details'] = $this->module->get_artist_all_image($artist_id);
		$this->load->view("artist_image_list",$data);
		redirect('main/artist_list_image/'.$artist_id);
	}
	
	
	
	
	function artist_add_image()
	{
		$artist_id=$this->uri->segment('3');
		$this->load->model('module');
		$data['detail']=$this->module->get_artist_name($artist_id);
		
	
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				   $image_names=$this->input->post('image_name');
				 	$time=time();
					if($_FILES['image']['name']!='')
		{
			
	
		if(!is_dir('../uploads/user_photo/'))
			{
			umask(0);
			mkdir('../uploads/user_photo/',0777);
			}
			
		if(!is_dir('../uploads/user_photo/thumb'))
			{
			umask(0);
			mkdir('../uploads/user_photo/thumb',0777);
			}
			
		$config['upload_path'] = '../uploads/user_photo';
		$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
		$config['overwrite'] = TRUE;
		/*$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';*/
		$time=time();
	
		$image_name=$time."_".$_FILES['image']['name'];
		$config['file_name'] = str_replace(" ","_",$image_name);
		
		$UploadFile=$config['file_name'];
		$data['img'] = "";
		
		$this->load->library('upload',$config);
		
		
		if (!$this->upload->do_upload('image'))
			{
				$data['error'] = strip_tags($this->upload->display_errors());
				
			}
		else
			{
				
				$this->upload->initialize($config);
				$data['img'] = $config['file_name'];
				$source_image=realpath('../uploads/user_photo/'.$config['file_name']);
				
				$config = array(
							'image_library' => 'gd2',
							'source_image' => $source_image,
							//'create_thumb' => TRUE,
							'maintain_ratio' => FALSE,
							'width' => 800,
							'height' =>550,
							'new_image' => '../uploads/user_photo/'.$config['file_name'],
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
					$source_image=realpath('../uploads/user_photo/'.$UploadFile);
				$config1 = array(
							'image_library' => 'gd2',
							'source_image' => $source_image,
							//'create_thumb' => TRUE,
							'maintain_ratio' => FALSE,
							'width' => 400,
							'height' =>400,
							'new_image' => '../uploads/user_photo/thumb/'.$UploadFile,
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
				  
				   $ount = explode('.', $_FILES['image']['name']);
					$des=substr($ount[0],0,15);
							$length = strlen($ount[0]);
							
							if($length>15){
								$moss=$des."..";
								
								}else{
									$moss=$des;
									}
									
									
						
									
				$data=array(	 
							 		'image_name'=>$image_names,
									'artist_id'=>$artist_id,
									'image'=>$UploadFile
						);
				
				
				
			
				
			
				
				$check=$this->module->artist_upload_image($data);
		}
				if($check!=NULL)
				{
					redirect('main/artist_list_image/'.$artist_id);
				}				
				
			
	
		
			
		
		
		
	}	
	$this->load->view("add_artist_image",$data);
	}				
									
//----------------recorded video------------------------------------------------------------------
public function artist_list_r_video()
	{
		$artist_id=$this->uri->segment('3');
		
		$this->load->model('module');
		$this->load->library('session');
		
		$data['details'] = $this->module->get_artist_all_r_video($artist_id);
		//echo "<pre>";print_r($data);die;
		$this->load->view("artist_r_video_list",$data);
	}
	
		function artist_add_r_video()
	{
		$artist_id=$this->uri->segment('3');
		$this->load->model('module');
		$data['detail']=$this->module->get_artist_name($artist_id);
		
	
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				   $recorded_video_name=$this->input->post('recorded_video_name');
				   $recorded_v_title=$this->input->post('recorded_v_title');
				    $artist_name=$this->input->post('artist_name');
				   $recorded_v_status=$this->input->post('recorded_v_status');
				   $recorded_v_overview=$this->input->post('recorded_v_overview');
				   $price=$this->input->post('price');
				
			
				 	$time=time();
		            if($_FILES['recorded_video_name']['name']!='')
					{
						if(!is_dir('../uploads/recorded_video/'))
							{
								umask(0);
								mkdir('../uploads/recorded_video/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/recorded_video/';
							$config['allowed_types'] = 'wmv|mp4|3gp|flv';
							$config['file_name'] = $time.$_FILES['recorded_video_name']['name'];
							
						
							$recorded_video_name=$config['file_name'];
							$this->load->library('upload', $config);
           						 $this->upload->initialize($config);
							
						
							if ( !$this->upload->do_upload('recorded_video_name'))
							{
								echo 'error';
							}
							
				   
					}
					else
					{
						$recorded_video_name="";
					}
					
					
					
						
					$data=array(	 
							 		'recorded_v_title'=>$recorded_v_title,
									'artist_id'=>$artist_id,
									'recorded_video_name'=>$recorded_video_name,
									'recorded_v_status'=>$recorded_v_status,
									'recorded_v_overview'=>$recorded_v_overview,
									'price'=>$price
						);
				
				
				
			
				
			
				
				$check=$this->module->artist_upload_r_video($data);
				if($check!=NULL)
				{
					redirect('main/artist_list_r_video/'.$artist_id);
				}				
				
			}
	
		
			
		
		$this->load->view("add_artist_r_video",$data);
		
	}
	
	public function delete_artist_r_video_list()
	{
		$artist_id=$this->uri->segment('3');
		$recorded_v_id=$this->uri->segment('4');
		$delete=$this->module->delete_artist_r_video($artist_id,$recorded_v_id);
		$data['details'] = $this->module->get_artist_all_r_video($artist_id);
		$this->load->view("artist_r_video_list",$data);
		redirect('main/artist_list_r_video/'.$artist_id);
	}
	
	
	
	//----------------------------------------end artist list------------------------------------------------------------
	//--------------------------admin sinup------------------------------------------------------------------------------
	public function create_account()
	{
		 if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
			
		$admin_user_name=$this->input->post('admin_user_name');
		$admin_name=$this->input->post('admin_name');
		$admin_password=base64_encode($this->input->post('admin_password'));
		$admin_email=$this->input->post('admin_email');
		$admin_contactno=$this->input->post('admin_contactno');
		$admin_image=$this->input->post('admin_image');
		$admin_status=$this->input->post('admin_status');
		
		if($_FILES['admin_image']['name']!='')
	        {
		   $image_name='admin_image';
		   $path='admin_image';
		 
		 
		 		
	$admin_image=imageupload_with_crop($image_name,$path,203,305);
	
		
		
	}
	
		else{
			$admin_image=$this->input->post('hid_admin_image');
			}
			if($this->module->check_email_id($admin_email)==true){
				$data['email_flash_message'] = TRUE; 
				
				}else{	
				$data=array(	 
							 		'admin_user_name'=>$admin_user_name,
									'admin_name'=>$admin_name,
									'admin_password'=>$admin_password,
									'admin_email'=>$admin_email,
									'admin_contactno'=>$admin_contactno,
									'admin_image'=>$admin_image,
									'admin_status'=>$admin_status
									
						);
				/*print_r($data);
				die;*/
				
				$data['details']=$this->module->create_account($data);
				//redirect("main/home");
			$data['email_flash_message'] = FALSE; 
			
				
				
				
				/********************************email to user ****************************************/
				
			$emailto = $this->module->get_email_id();
		
			$emailto = $emailto[0]['setting_value'];
			
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
                   <td class="mcnImageContent" style="mso-line-height-rule: exactly; padding-bottom: 0; padding-left: 9px; padding-right: 9px; padding-top: 0; text-align: center;" valign="top"><img align="center" alt="" class="mcnImage" src="'.base_url().'img/streams.png" style="border: 0; display: inline !important; height: auto; max-width: 235px; outline: none; padding-bottom: 0; text-decoration: none; vertical-align: bottom;" width="235" /></td>
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
			<td colspan="2">Dear '.$admin_name.',</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			
			
			<tr>
			<td colspan="2" height="10px;"></td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>User Name:</strong> '.$admin_user_name.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Full Name: </strong>'.$admin_name.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Email:</strong> '.$admin_email.'</td>
			</tr>
			<tr>
			<td colspan="2" height="10px;"><strong>Contact Number:</strong> '.$admin_contactno.'</td>
			</tr>
			
	
			<tr>
			<td colspan="2" height="10px;"></td>
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
                   <td class="mcnTextContent" style="color: #cccccc; font-family: Helvetica; font-size: 12px; line-height: 150%; mso-line-height-rule: exactly; padding-bottom: 9px; padding-left: 18px; padding-right: 18px; padding-top: 9px; text-align: center; word-break: break-word;" valign="top"><em>Copyright &copy; '.date('Y').' &nbsp;streams , All rights reserved.</em></td>
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
			
			
		//	echo $body;die;
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
			
				
			//$this->email->initialize($config);
			$this->email->initialize($config);
			$this->email->from($emailto);
			//$this->email->from("tanay@webhawkstechnology.com", 'Where To Park Team');
			$this->email->to($admin_email);
			//$this->email->to("ddn12525@gmail.com"); 
			$this->email->subject('Streams Site Sign Up');
			
			$this->email->message($body);
			
			
			$this->email->send();
			//echo $this->email->print_debugger(); die;

				
				/*******************************************end*************************************/
			
			
			
		}
							
			}
		$this->load->view("create_account",$data);
	}
	
	/****************************/
	 public function edit_account($admin_id='')
{
		
		
		//$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		//$data["session_admin_id"]=$this->session->userdata('admin_id');
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$admin_user_name=$this->input->post('admin_user_name');
		        $admin_name=$this->input->post('admin_name');
		        $admin_password=base64_encode($this->input->post('admin_password'));
		        $admin_email=$this->input->post('admin_email');
		        $admin_contactno=$this->input->post('admin_contactno');
		        $admin_image=$this->input->post('admin_image');
		        $admin_status=$this->input->post('admin_status');
			/*/-----start image upload--------*/
			
			
	if($_FILES['admin_image']['name']!='')
	{
		
		$image_name='admin_image';
		$path='admin_image';
 	//$slider_image=imageupload_with_crop($image_name,$path,800,356);
	$admin_image=imageupload_with_crop($image_name,$path,203,305);
	//$thumb_image='thumb_'.$slider_image;
	
	
	
	/*$thumb_image=imageupload_with_crop($slider_image,$thumb_path,72,72);*/
	$hid_admin_image=$this->input->post('hid_admin_image');
			unlink('../uploads/admin_image/'.$hid_admin_image);
		}
		
		else{
			$admin_image=$this->input->post('hid_admin_image');
			//$thumb_image='thumb'.$this->input->post('hid_slider_image');
			
			
			}
			
				$data=array(		
									'admin_user_name'=>$admin_user_name,
									'admin_name'=>$admin_name,
									'admin_password'=>$admin_password,
									'admin_email'=>$admin_email,
									'admin_contactno'=>$admin_contactno,
									'admin_image'=>$admin_image,
									'admin_status'=>$admin_status
						);
				
				
			
				$this->module->update_account($admin_id,$data);
				redirect('main/account_list');
				
				
				}
		
		
		$data['details'] = $this->module->get_admin_detail($admin_id);
		$data['admin_id']=$admin_id;
		
		$this->load->view("edit_account",$data);
	
	
}
public function delete_account($id='')
	{
		$delete=$this->module->delete_account($id);
	
	redirect('main/account_list');
		
		}	
//------------------------------Santanu------------------------------------------------------------------------------------
function artist_list_schedule()
	{
		$artist_id=$this->uri->segment('3');
		$data['details'] = $this->module->get_artist_all_schedule($artist_id);
		$this->load->view("artist_schedule_list",$data);
	
	}

	function payment_detatils()
	{
		$this->load->model('module');
		$data['details'] = $this->module->get_all_payment_list();
		//echo '<pre>';print_r($data['details']);die;
		$this->load->view("payment_list",$data);

	
	}
	function search_payment_list()
	{
		$this->load->model('module');
		if($this->input->server('REQUEST_METHOD')==='POST')
		{
			
		 	$from_date=date("Y-m-d",strtotime($this->input->post('search_start_date')));
		
			$to_date=date("Y-m-d",strtotime($this->input->post('search_end_date')));
				//print_r($from_date);die;
				//print_r($to_date);die;
			$payment_type=$this->input->post('payment_type');
		
			if($from_date=='1969-12-31' && $to_date=='1969-12-31'&& $payment_type!='')
			{
				$data['details'] = $this->module->search_all_payment_list_by_type($payment_type);
			}
			else if($from_date!='1969-12-31' && $to_date!='1969-12-31'&& $payment_type=='')
			{
				$data['details'] = $this->module->search_all_payment_list_by_date($from_date,$to_date);
				//print_r($data['details']);die;
			}
			else if($from_date!='1969-12-31' && $to_date!='1969-12-31'&& $payment_type!='')
			{
				$data['details'] = $this->module->search_all_payment_list_by_all($from_date,$to_date,$payment_type);
			}
			else if($from_date=='1969-12-31' && $to_date=='1969-12-31'&& $payment_type=='')
			{
				redirect("main/payment_detatils");
			}
			
		}
		$this->load->view("payment_list",$data);
	}
	//----------------------------------------overview-------------------------------------------------------------
	
	function overview_normal_video()
	{
		$video_id = $_GET['video_id'];
		//$recorded_v_id=$this->uri->segment('2');
		
		$this->load->model('module');
		$data['detailss'] = $this->module->get_overview_normal_video($video_id);
		//echo "<pre>";print_r($data);die;
		$this->load->view("overview_video",$data);
	}
	function overview_recorded_video()
	{
		$recorded_v_id = $_GET['recorded_v_id'];
		//$recorded_v_id=$this->uri->segment('2');
		
		$this->load->model('module');
		$data['details'] = $this->module->get_overview_r_video($recorded_v_id);
		//echo "<pre>";print_r($data);die;
		$this->load->view("overview_video",$data);
	}
//-----------------------------------edit video info-------------------------------------------------------------------
function edit_normal_video()
{	
		$video_id = $_GET['video_id'];
		$data['artist_id'] = $_GET['artist_id'];
		
		$this->load->model('module');
		$data['details'] = $this->module->get_details_normal_video($video_id);
		//echo "<pre>";print_r($data['details']);die;
		$this->load->view('edit_video_info',$data);
}
function update_normal_video_info()
{	
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				   $name=$this->input->post('name');
				   $overview=$this->input->post('overview');
				    $category=$this->input->post('category');
				   $tag=$this->input->post('tag');
				   $status=$this->input->post('status');
				   $video_id=$this->input->post('video_id');
				   $artist_id=$this->input->post('artist_id');
				   $data=array(
							   'video_title'=>$name,
							   'video_overview'=>$overview,
							   'category_type'=>$category,
							   'video_tags'=>$tag,
							   'video_status'=>$status
							   );
				   //print_r($data);die;
		$this->load->model('module');
		$data['details'] = $this->module->update_normal_video($video_id,$data);
		redirect("main/successfully_msg");
}

}
	//-------------------------------------------edit recorded video-------------------------------------------------------
	function edit_r_video()
{	
		$video_id = $_GET['video_id'];
		$data['artist_id'] = $_GET['artist_id'];
		
		$this->load->model('module');
		$data['details'] = $this->module->get_details_r_video($video_id);
		//echo "<pre>";print_r($data['details']);die;
		$this->load->view('edit_r_video_info',$data);
}
function update_r_video_info()
{	
		
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				   $name=$this->input->post('name');
				   $overview=$this->input->post('overview');
				    $category=$this->input->post('category');
				   $tag=$this->input->post('tag');
				   $status=$this->input->post('status');
				   $video_id=$this->input->post('video_id');
				   $artist_id=$this->input->post('artist_id');
				   $data=array(
							   'recorded_v_title'=>$name,
							   'recorded_v_overview'=>$overview,
							   'category_type'=>$category,
							   'video_tags'=>$tag,
							   'recorded_v_status'=>$status
							   );
				   //print_r($data);die;
		$this->load->model('module');
		$data['details'] = $this->module->update_r_video($video_id,$data);
		redirect("main/successfully_msg");
}

}
function successfully_msg()
{
	$this->load->view('successfully_msg');
}
	
//----------------------------end santanu-----------------------------------------------------------------------------------


public function artist_earnings()
{

 $artist_id=$this->uri->segment('3');
$data['details']=$this->module->get_artist_income($artist_id);
$data['total_amount']=$this->module->total_amount($artist_id);
$data['artist_name']=$this->module->artist_name($artist_id);
$data['recorded']=$this->module->total_amount_recorded($artist_id);
$data['stream']=$this->module->total_amount_streaming($artist_id);
//print_r($total);
//die;
$this->load->view("artist_earnings",$data);
//print_r($details);
}


public function user_purchase()
{

 $user_id=$this->uri->segment('3');
$data['details']=$this->module->get_user_purchase_list($user_id);


//print_r($details);
$this->load->view("user_purchase_list",$data);
//print_r($details);
}


/*****************************************3.8.2017************************************************************************/

public function message_list()
{

 $message_id=$this->uri->segment('3');
 //echo $message_id;
 //die;
$data['details']=$this->module->get_message_list($message_id);


//print_r($details);
$this->load->view("message_list",$data);
//print_r($details);
}

public function delete_message()
	{
		$message_id=$this->uri->segment('3');
	
		$delete=$this->module->delete_message_video($message_id);
		//$data['details'] = $this->module->get_all_meta_tag();
	$video_id=$this->module->get_message_by_id($message_id);
	
	
	redirect('main/message_list');
	}


public function edit_message()
	{
		
	//echo "dddd"; die;
		$this->load->model('module');
		$this->load->library('session');
		//echo "dddd"; die;
		$admin_id=$this->session->userdata('admin_id');
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$message_id=$this->uri->segment('3');
		//echo "dddd"; die;
			
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
			
			
			    $message=$this->input->post('message');
				 $status=$this->input->post('status');
				//echo $page_title; die;
				
				
				$data_to_store = array(
					'message' => $message,
					'message_status' => $status,
					
			        );
				
				//echo "<pre>"; print_r($data_to_store);die;
				
				
				   $id=$this->module->update_message($message_id,$data_to_store);
				   redirect("main/message_list");
			
				
				
			}
		
		
		$data['details'] = $this->module->get_message_by_id($message_id);
		
		//echo "<pre>"; print_r($data['details']);die;
	
		
		$data['message_id']=$message_id;
		
	
		
		$this->load->view("edit_message",$data);
	}
	
/**************************************************************************************************************************************/
public function admin_add_video($check="")
	{
		$this->load->model('module');
		$this->load->library('session');
		$admin_id=$this->session->userdata('admin_id');
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name[1]);
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
				
				
		
				$time=time();
		            if($_FILES['video_name']['name']!='')
					{
						if(!is_dir('../uploads/admin_video/'))
							{
								umask(0);
								mkdir('../uploads/admin_video/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/admin_video/';
							$config['allowed_types'] = 'wmv|mp4|3gp|flv';
							$config['file_name'] = $time.$_FILES['video_name']['name'];
							
						
							$video_name=$config['file_name'];
							$this->load->library('upload', $config);
           						 $this->upload->initialize($config);
							
						
							if ( !$this->upload->do_upload('video_name'))
							{
								echo 'error';
							}
							
				   
					}
					else
					{
						$video_name="";
					}
				
				
				
		
				 	
			    $title=$this->input->post('title');
				$overview=$this->input->post('overview');
				$status=$this->input->post('status');
			$data_to_store = array(
					'title' => $title,
					'overview' => $overview,
					'video' => $video_name,
					
					'status' => $status
			        );
				
				
				//print_r($data_to_store);
				$page_id=$this->module->insert_admin_video($data_to_store);
				
				
				redirect("main/admin_video_list");
			
		   /* else
			{
				redirect("main/edit_pagecontent/exist");
			}*/
		
	}	
		
		
		
		
		$this->load->view("admin_add_video",$data);
	}

public function admin_video_list()
{
	
	$data['details']=$this->module->get_admin_video_list();


//print_r($details);
$this->load->view("admin_video_list",$data);
}

public function delete_admin_video($id='')
{
	$delete=$this->module->delete_admin_video($id);
	
	redirect('main/admin_video_list/'.$id);

}

/**************************************************************************************************************************************/
  public function update_admin_video($page_id)
	{
		
	//echo "dddd"; die;
		$this->load->model('module');
		$this->load->library('session');
		//echo "dddd"; die;
		$admin_id=$this->session->userdata('admin_id');
		//echo $admin_id; die;
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		//$page_name=explode("_",$this->uri->segment(2));
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name[1]);
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		//echo "dddd"; die;
			
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				//echo "fff"; die;
				
			
			
		$time=time();
		            if($_FILES['video_name']['name']!='')
					{
						if(!is_dir('../uploads/admin_video/'))
							{
								umask(0);
								mkdir('../uploads/admin_video/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/admin_video/';
							$config['allowed_types'] = 'wmv|mp4|3gp|flv';
							$config['file_name'] = $time.$_FILES['video_name']['name'];
							
						
							$video_name=$config['file_name'];
							$this->load->library('upload', $config);
           						 $this->upload->initialize($config);
							
						
							if ( !$this->upload->do_upload('video_name'))
							{
								echo 'error';
							}
							
				   
					}
					else
					{
						$video_name=$this->input->post('hid_image');
					}
				
			
			
			
				
			
				$title=$this->input->post('title');
				$overview=$this->input->post('overview');
				$status=$this->input->post('status');
			$data_to_store = array(
					'title' => $title,
					'overview' => $overview,
					'video' => $video_name,
					
					'status' => $status
			        );
			
			
				   $id=$this->module->update_video($page_id,$data_to_store);
				   redirect("main/admin_video_list");
			
			
			
			
			
				
			}
		
		
		$data['details'] = $this->module->get_video_details_by_id($page_id);
		
		//echo "<pre>"; print_r($data['details']);die;
	
		
		$data['page_id']=$page_id;
		
	
		
		$this->load->view("admin_add_video",$data);
	}
	
/**********************************************************************************************************************************************************/
public function artist_followers()
{

 $artist_id=$this->uri->segment('3');
$data['details']=$this->module->get_all_artist_followers($artist_id);
$data['total']=count($this->module->total_followers($artist_id));

$data['artist_name']=$this->module->artist_name($artist_id);

//print_r($total);
//die;
$this->load->view("artist_followers",$data);
//print_r($details);
}


public function user_following()
{

 $user_id=$this->uri->segment('3');
$data['details']=$this->module->get_all_user_following($user_id);
$data['total']=count($this->module->total_following($user_id));



//print_r($total);
//die;
$this->load->view("user_following",$data);
//print_r($details);
}

/***************************************************************Account List**********************************************/
public function account_list()
	{
		
		$this->load->model('module');
		$this->load->library('session');
		
		$data['account_list'] = $this->module->get_all_account_list();
		$this->load->view("account_list",$data);
	}

/*****************************************************************************************************/
public function emoji_list()
	{
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->get_emoji();
		
		$this->load->view("emoji_list",$data);
	
	
	}
	
	public function add_emoji()
	{
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		
	   if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$emoji_text=$this->input->post('emoji_text');
			
				//$slider_overview=$this->input->post('slider_overview');
				//$slider_link=$this->input->post('slider_link');
				$emoji_status=$this->input->post('emoji_status');
				

			
			/*/-----start image upload--------*/
			
	if($_FILES['emoji_image']['name']!='')
	{
		$image_name='emoji_image';
		$path='emoji_image';

 //$slider_image=imageupload_with_crop($image_name,$path,800,356);
	$emoji_image=imageupload_with_crop($image_name,$path,19,19);
	
		}
		
		else{
			$emoji_image=$this->input->post('hid_emoji_image');
			
			}
			
				$data=array(	 	
									'emoji_text'=>$emoji_text,
									'emoji_image'=>$emoji_image,
									'emoji_status'=>$emoji_status
						);
				
				
				$this->module->add_emoji($data);
				redirect('main/emoji_list');
				}	
		
	
		
		$this->load->view("edit_emoji",$data);
		
	}	
	public function edit_emoji($emoji_id="")
	  {	
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				
			$emoji_text=$this->input->post('emoji_text');
			
				//$slider_overview=$this->input->post('slider_overview');
				//$slider_link=$this->input->post('slider_link');
				$emoji_status=$this->input->post('emoji_status');
			
		
				/*$slider_name=$this->input->post('slider_name');
				$slider_image=$this->input->post('slider_image');
				$slider_overview=$this->input->post('slider_overview');
				$slider_link=$this->input->post('slider_link');
				$slider_status=$this->input->post('slider_status');*/
			/*/-----start image upload--------*/
			
			
	if($_FILES['emoji_image']['name']!='')
	{
		$image_name='emoji_image';
		$path='emoji_image';
		
		
		
 //$slider_image=imageupload_with_crop($image_name,$path,800,356);
	$emoji_image=imageupload_with_crop($image_name,$path,19,19);
	
		}
		
		else{
			$emoji_image=$this->input->post('hid_emoji_image');
			
			}
			
				$data=array(	 	
									'emoji_text'=>$emoji_text,
									'emoji_image'=>$emoji_image,
									'emoji_status'=>$emoji_status
						);
				
				
			
				$this->module->update_emoji($emoji_id,$data);
				redirect('main/emoji_list');
				
				
				}
		
		
		$data['details'] = $this->module->get_emoji_detail($emoji_id);
		$data['emoji_id']=$emoji_id;
		
		$this->load->view("edit_emoji",$data);
	}
	
	public function delete_emoji($emoji_id="")
	{
		$data['details'] = $this->module->delete_emoji($emoji_id);
	
		redirect("main/emoji_list");
		
	}

/*********************************************************************************************************/
public function view_all_photos()
{
	$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->view_all_photos();
		
		$this->load->view("view_photo_list",$data);
	
}

public function delete_photo_album($id="")
	{
		$data['details'] = $this->module->delete_photo_album($id);
	
		redirect("main/view_all_photos");
		
	}


public function view_all_normal_videos()
{
	$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->view_all_normal_videos();
		
		$this->load->view("view_normal_video_list",$data);
	
}



public function delete_video_album($id="")
	{
		$data['details'] = $this->module->delete_video_album($id);
	
		redirect("main/view_all_normal_videos");
		
	}
	
	
	
	public function view_all_recorded_videos()
{
	$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->view_all_recorded_videos();
		
		$this->load->view("view_recorded_video_list",$data);
	
}



public function delete_recorded_album($id="")
	{
		$data['details'] = $this->module->delete_recorded_video_album($id);
	
		redirect("main/view_all_normal_videos");
		
	}

/***********************************************************************************************/
public function add_price_setting()
	{
		$this->load->model('module');
		$this->load->library('session');
		
		$admin_id=$this->session->userdata('admin_id');
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		$page_name=$this->uri->segment(2);
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name);
		
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		$data['details'] = $this->module->get_add_price_setting();
		$this->load->view("add_setting_list",$data);
	}



public function edit_add_price_setting_old($setting_id='')
	{
		
		$admin_id=$this->session->userdata('admin_id');
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		//$page_name=explode("_",$this->uri->segment(2));
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name[1]);
		
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		$data['details'] = $this->module->get_add_price_detail($setting_id);
		
		
		$data['setting_id']=$setting_id;
		$this->load->view("edit_add_setting",$data);
	}


function edit_add_price_setting($setting_id)
	{
		//echo $setting_id;die;
		$this->load->model('module');
		$this->load->library('session');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{				
				
				
				$setting_value=$this->input->post('setting_value');
				$setting_size=$this->input->post('setting_size');
				
			
			
			$data_to_store = array(
				
					'price' => $setting_value,
					'size' => $setting_size
					);
				
				
				    $setting_id=$this->module->update_add_price_detail($setting_id,$data_to_store);
					echo "<script type='text/javascript'>window.location='".site_base_url()."admin/main/add_price_setting'</script>";
			}	
			
			
		 $data['details'] = $this->module->get_add_price_detail($setting_id);
		
		 $data['setting_id']=$setting_id;
		 
		 	//redirect("main/setting");
			
			
		$this->load->view("edit_add_setting",$data);
	}	
	
/**************************************09.09.17********************/

function get_price()
    {
		$id=$_GET['price1'];
		$select_price=$this->module->get_price($id);
		
		?><div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Price<span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-2">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="" id="price" placeholder=""  value="<?=$select_price[0]['price'];?>" required readonly="readonly">
                    </div>
                    </div>  
                    </div>
                    
                    
					<?php
					if($select_price[0]['size']!='')
					{
					?>
                    <div class="form-group">
                    <label class="col-md-4 control-label"><font color="red">The Image should be <?=$select_price[0]['size'];?>
                    </font></label>
                    <?php
					}
					?>
                      
                      
                      
                    </div>
           <?     
		
		}

/***********************************************************12.09.17*************************************/
public function advertisement_video_list()
{
	$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
	$data['details']=$this->module->get_advertisement_video_list();


//print_r($details);
$this->load->view("advertisement_video_list",$data);
}



public function advertisement_add_video($check="")
	{
		$this->load->model('module');
		$this->load->library('session');
		$admin_id=$this->session->userdata('admin_id');
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$time=time();
		            if($_FILES['video']['name']!='')
					{
						if(!is_dir('../uploads/advertisement_video/'))
							{
								umask(0);
								mkdir('../uploads/advertisement_video/',0777);
							}
		                    unset($config);
						    $config['upload_path'] = '../uploads/advertisement_video/';
							$config['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
							$configVideo['overwrite'] = FALSE;
							$configVideo['remove_spaces'] = TRUE;
							$config['file_name'] = $time.$_FILES['video']['name'];
							
						
							$video=$config['file_name'];
							$this->load->library('upload', $config);
           						 $this->upload->initialize($config);
							
						
							if ( !$this->upload->do_upload('video'))
							{
								echo 'error';
							}
							
				   
					}
					else
					{
						$video="";
					}
				
				
				
		
				 	
			    $video_title=$this->input->post('video_title');
				$video_status=$this->input->post('video_status');
			$data_to_store = array(
					'video_title' => $video_title,
					'video' => $video,
					'video_status' => $video_status
			        );
				
				
				//print_r($data_to_store);die;
				$page_id=$this->module->insert_advertistment_video($data_to_store);
				
				
				redirect("main/advertisement_video_list");
			
		   /* else
			{
				redirect("main/edit_pagecontent/exist");
			}*/
		
	}	
		
		
		
		
		$this->load->view("advertisement_add_video",$data);
	}
	
public function update_advertisement_video($page_id)
	{
		
	//echo "dddd"; die;
		$this->load->model('module');
		$this->load->library('session');
		//echo "dddd"; die;
		$admin_id=$this->session->userdata('admin_id');
		//echo $admin_id; die;
		//$data['admin_type']=$this->module->get_admin_type($admin_id);
		//$page_name=explode("_",$this->uri->segment(2));
		//$data['list_permission']=$this->module->get_permission($admin_id,$page_name[1]);
		$data["session_admin_user_name"]=$this->session->userdata('admin_user_name');
		$data["session_admin_id"]=$this->session->userdata('admin_id');
		
		//echo "dddd"; die;
			
			if ($this->input->server('REQUEST_METHOD') === 'POST')
			{
				//echo "fff"; die;
				
			
			
		$time=time();
		            if($_FILES['video']['name']!='')
					{
						if(!is_dir('../uploads/advertisement_video/'))
							{
								umask(0);
								mkdir('../uploads/advertisement_video/',0777);
							}
		                    
						    $config['upload_path'] = '../uploads/advertisement_video/';
							$config['allowed_types'] = 'wmv|mp4|3gp|flv';
							$config['file_name'] = $time.$_FILES['video']['name'];
							
						
							$video=$config['file_name'];
							$this->load->library('upload', $config);
           						 $this->upload->initialize($config);
							
						
							if ( !$this->upload->do_upload('video'))
							{
								echo 'error';
							}
							
				   
					}
					else
					{
						$video=$this->input->post('hid_image');
					}
				
			
			
			
				
			
				$video_title=$this->input->post('video_title');
			
				$video_status=$this->input->post('video_status');
			$data_to_store = array(
					'video_title' => $video_title,
					'video' => $video,
					'video_status' => $video_status
			        );
			
			
				   $id=$this->module->update_advertisement_video($page_id,$data_to_store);
				   redirect("main/advertisement_video_list");
			
			}
		
		
		$data['details'] = $this->module->get_advideo_details_by_id($page_id);
		
		//echo "<pre>"; print_r($data['details']);die;
	
		
		$data['page_id']=$page_id;
		
	
		
		$this->load->view("advertisement_add_video",$data);
	}


public function delete_advertisement_video($id='')
{
	$delete=$this->module->delete_advertisement_video($id);
	
	redirect('main/advertisement_video_list/'.$id);

}

/**************************************************************************************************************************************/
  



}
?>