<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
require_once('paypal.class.php');
$p = new paypal_class; 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$this->load->model('module');
$SITE_URL=site_base_url();
//$member_id=$this->session->userdata('user_id');
//$session_id=$this->session->userdata('session_id');



////////////////////////////////////////////////////////////////////////////////Paypal Url/////////////////////////////////////////////////////////////////////////////////////////


$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
	//$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';  


/////////////////////////////////////////////////////////////////////Price To Go Paypal//////////////////////////////////////////////////////////////////////////////////////////

/*$total_price=$this->module->get_cart_total_item_and_price();
$total_price=number_format($total_price[0]['total_price'],2);
 $paypal_id=$this->module->setting_value('paypal_id');*/
 
///////////////////////////////////////////////////////////////////////////Marchent Id Go With Paypal////////////////////////////////////////////////// 
 

   
   
   
///////////////////////////////////////////////////////////////////////////Marchent Id Go With Paypal////////////////////////////////////////////////// 
   
   
   
   
///////////////////////////////////////////////////////////////////////////Order Id Go With Paypal////////////////////////////////////////////////// 
   
   
   
	 
	 
	// setup a variable for this script (ie: 'http://www.micahcarrick.com/paypal.php')
	$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	
	// if there is not action variable, set the default action of 'process'
	
	
	
	
	
	if (empty($_REQUEST['action'])) $_REQUEST['action'] = 'process';  
	
	
	
	
	switch ($_REQUEST['action']) {
		
		
	////////////////////////////////////////////////////////////////////////////////////PROCESS SECTION///////////////////////////////////////////////////////	
	
		
	   case 'process':     
	   
        
		
										/******************** Sending data to paypal *****************************/
		
		
		
										$p->add_field('cmd', '_xclick-subscriptions');
									//die;
										$p->add_field('business',$business_id);                
										$p->add_field('custom',$last_id);
										$p->add_field('item_name',$item_name);
										$p->add_field('no_note', '1');
										$p->add_field('item_number', '1');
										$p->add_field('quantity', '1');

										$p->add_field('currency_code', 'USD');
										$p->add_field('notify_url', $notify_url);

										$p->add_field('cancel_return',$cancel_return);
										$p->add_field('return', $return_url);
										$p->add_field('a3', $paypal_amount);
										$p->add_field('p3','1');
										$p->add_field('t3','M');
										$p->add_field('amount', $paypal_amount);
										$p->submit_paypal_post(); 
										
										/*
										Subscription duration. Specify an integer value in the allowable range for the units of duration that you specify with 
										
										*/
										
										
										/*
																						
																					Regular subscription units of duration.
												Allowable values are:
												
												D – for days; allowable range for p3 is 1 to 90
												W – for weeks; allowable range for p3 is 1 to 52
												M – for months; allowable range for p3 is 1 to 24
												Y – for years; allowable range for p3 is 1 to 5	
										*/
										
										//$p->add_field('t3',$period);
										
										//Recurring payments 0 – subscription payments do not recur 1 – subscription payments recur//
										//$p->add_field('src', '1');
										
/*Recurring times. Number of times that subscription payments recur. 
Specify an integer with a minimum value of 2 and a maximum value of 52. Valid only if you specify src="1".*/
										
										//$p->add_field('srt', '52');
										
										/*
			Reattempt on failure. If a recurring payment fails, PayPal attempts to collect the payment two more times before canceling the subscription.
Allowable values are:

						0 – do not reattempt failed recurring payments
						1 – reattempt failed recurring payments before canceling
						The default is 1.
										
										*/
										
										//$p->add_field('sra', '1');
										
										
										
										
										
										//$p->add_field('lc',$merchant_country);
										
									
								
		
		
								/******************* END:Sending data to paypal*************************/  
		
		
		
		
			   
		/************************* INSERT IN BOOKING TABLE*********************************/
		//$data=array(
//					'status'=>'Accept'
//					
//					);
//		$this->module->accept_job($shift_id,$apply_id);
//
//      $data_ammount=array(
//						  'shift_id'=>$shift_id,
//						  'apply_id'=>$apply_id,
//						  'type'=>'Owner',
//						  'date'=>date("Y-m-d"),
//						  'amount'=>$paypal_amount,
//						  'status'=>'Not-paid'
//						  );
//	//  print_r($data_amount);
//	 // die;
//	  $this->module->amount_paid($data_ammount);

		
	
		//$data_to_store=array(
//							'order_no'=>$order_gen_id,
//							'order_date'=>date('Y-m-d',time()),
//							'order_status'=>'Pending',
//							'subscription_expiry_date'=>$subscription_expiry_date,
//							'total_price'=>$plan_amount,
//							'user_id'=>$customer_id,
//							'payment_type'=>'Paypal',
//							'payment_status'=>'Not-Paid',
//							'order_type'=>'subscription'
//							 );
//		
//		$this->module->insert_to_table($data_to_store,'ripepicks_order');
//		
//		$data_to_store=array
//						(
//							'order_no'=>$order_gen_id,
//							'subscription_id'=>$subscription_package_id,
//							'subscription_name'=>$item_name,
//							'subscription_day'=>$subsscription_package_day,
//							'subscription_price	'=>$plan_amount,
//							'start_date'=>date('Y-m-d',time()),
//							'expiry_date'=>$subscription_expiry_date
//							 );
//	
//		$this->module->insert_to_table($data_to_store,'ripepicks_order_subscription_temporary');
//		
		
		
		/*-----------------------end of temp order----------------------------------------*/	
/**********************************inserting in success table******************/


		
		/*$user_id =$this->session->userdata('user_id');
			$data= array(
								'order_no'=>$order_gen_id,
								'pack_id'=>$pack_id,
								'pack_name'=>$item_name,
								'user_id'=>$user_id,
								'pack_cost'=>$product_price,
								'pack_month'=>$month,	
								'pack_state_date'=>date('Y-m-d'),
								'pack_expiry_date'=>''
								);
		
	
		$this->module->add_in_order($data);
		$data_to_store= array( 
							  'pack_id'=>$pack_id
								);
		
		$this->module->get_update_user($user_id,$data_to_store);*/
						
						
		
		
		
		/*------------------- retrieve temp order details  --------------------------------------------*/	


  break;
  
   case 'cancel':       
 		
         	echo "<html><head><title>Canceled</title></head><body><h3>The Payment was canceled.</h3>";
			echo "</body></html>";


	

        break;
      
   case 'ipn': 
   
   
		 
   
  /* if ($p->validate_ipn()) */
	//{
		foreach ($_REQUEST as $key  => $value) 
         //foreach ($p->ipn_data as $key => $value) 
		   { 
		   // $body .= "\n$key: $value"; 
			 $body = "\n".$key.":".$value; 
			
			 switch($key)
			  {
				 
			  
				case 'custom':
				 $last_id=mysql_real_escape_string($value);
				 //echo $order_gen_id;
				 
				break;
				case 'subscr_id':
				$subscr_id =mysql_real_escape_string($value);
				break;
				case 'txn_type':
				$txn_type=mysql_real_escape_string($value);
				break;
				case 'txn_id':
				$txn_id =mysql_real_escape_string($value);
				break;
				case 'ipn_track_id':
				$ipn_track_id=mysql_real_escape_string($value);
				break;
				case 'payment_status':
				/* $data_to_update = array(
                   
										'key_id' => '3',
										'value' => $value
                	                 );
		
		          $this->module->insert_paypal_test_value($data_to_update);*/
				  
				 $gr_payment=mysql_real_escape_string($value);
				break;
				case 'receiver_email':
				 $receiver_email=mysql_real_escape_string($value);
				break;
				case 'payer_email':
				 $payer_email=mysql_real_escape_string($value);
				break;
				case 'item_name':
				 $item_name=mysql_real_escape_string($value);
				break;
				case 'subscr_date':
				$payment_date=mysql_real_escape_string($value);
				break;
				case 'payer_status':
				 $payer_status  =mysql_real_escape_string($value);
				break;
				
				case 'period3':
				 $period3  =mysql_real_escape_string($value);
				break;
				
				//echo $gr_payment;
		  }
		 }
		if($gr_payment=="Completed" && $txn_type=='subscr_payment')
				{
					//echo 1;
					//die;
					//$payment_status="Paid";
					$payment_status="Paid";
					$order_status="Completed";
				  // $last_id =$this->session->userdata('last_id');
				//$user_id =$this->session->userdata('user_id');
				//$payment_type='Feature';
				//$order_detail=$this->module->retrieve_data_from_order($order_gen_id);
				
				$expiry_date=$this->module->check_expiry_user($last_id);
				$start_date = date('Y-m-d');
				
				if(!empty($expiry_date)){
					$ex_day = $expiry_date[0]['end_date'];
				if($ex_day>$start_date){
					
					$start_package_date = date("Y-m-d", strtotime($ex_day."+ 1 day"));
				
					
					}else{
						
						$start_package_date = date("Y-m-d");
						
						}
				}else{
					
					$start_package_date = date("Y-m-d");
					}
					
					
				$expired_date = date("Y-m-d", strtotime($start_package_date."+ 1 month"));
				if($txn_id==''){
					$txn_id='';
				}
				if($subscr_id==''){
					$subscr_id='';
				}
				
				$data_to_store= array(
								 'order_no'=>$order_gen_id,
								 'user_id'=>$last_id,
								 'admin_charge'=>$paypal_amount,
								'payment'=>$paypal_amount,
								'ipn_track_id'=>$ipn_track_id,
						        'date'=>$start_package_date,
						       'txn_id'=>$txn_id,
							   
							   'payment_type'=>'Feature',
							   'user_type'=>'User',
							   'end_date'=>$expired_date,
						        'payment_status'=>$payment_status
								
								
								
								);
					//print_r($data_to_store);die;
						
						$this->module->amount_paid($data_to_store);
						
						
						$data1=array(
								'subscription'=>'Featured' 
									  );
						
						$this->module->update_user($last_id,$data1);
						
						$this->session->unset_userdata("last_id");
						//$this->module->update_the_order($order_gen_id,$data);
					
					
					
					
					/*$start_date = date('d/m/Y',strtotime($start_package_date));
					$end_date = date('d/m/Y',strtotime($expired_date));
					$user_id = $order_detail[0]['user_id'];
					$user_details = $this->module->get_user_detail_email($user_id);
				
					$name = $user_details[0]['user_fname']." ". $user_details[0]['user_lname'];
					$email=  $user_details[0]['user_email'];
					$pack_name = $order_detail[0]['pack_name'];
					$price= $order_detail[0]['pack_cost'];
					$emailto = $this->module->get_email_detail();
			
			
			
					$emailto = $emailto[0]['setting_value'];*/
				
				
					
/*$message='<body style="background:#dedede">
	<div style="max-width:800px;margin:auto;background:#fff;" class="container">
    	<div class="container_box">
        	<div style="border-bottom:1px solid #3d91c1;padding:10px 0;text-align:center;background:#f2f2f2" class="top_logo"><img src="'.base_url().'img/logo.png">'.'</div>
            <div style="background:#fff; padding:0px;" class="main_body">
            	<h3 style="background:#3d91c1; padding:7px; text-align:center; color:#fff; font-weight:bold; font-family:Arial, Helvetica, sans-serif; margin:0; text-transform:uppercase;">Transaction Details</h3>
				
				     <div style="padding:10px 25px;"class="title_div">
                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Order Id<span style="float:right">:</span></p></div>
                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$order_gen_id.'</p></div>
                    <div style="clear:both"></div>
                </div>
               
                <div style="padding:10px 25px;"class="title_div">
                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Name<span style="float:right">:</span></p></div>
                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$name.'</p></div>
                    <div style="clear:both"></div>
                </div>
                
                <div style="padding:10px 25px;"class="title_div">
                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Email Id<span style="float:right">:</span></p></div>
                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$email.'</p></div>
                    <div style="clear:both"></div>
                </div>
                
                <div style="padding:10px 25px;"class="title_div">
                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Pack Name<span style="float:right">:</span></p></div>
                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$pack_name.'</p></div>
                    <div style="clear:both"></div>
                </div>
				
				           
                
        <div style="padding:10px 25px;"class="title_div">
                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Pack Start Date<span style="float:right">:</span></p></div>
                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$start_date.'</p></div>
                    <div style="clear:both"></div>
                </div>
				
				<div style="padding:10px 25px;"class="title_div">
                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Pack End Date<span style="float:right">:</span></p></div>
                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$end_date.'</p></div>
                    <div style="clear:both"></div>
                </div>
                
                <div style="padding:10px 25px;"class="title_div">
                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Pack Price<span style="float:right">:</span></p></div>
                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$price.'</p></div>
                    <div style="clear:both"></div>
                </div>
                
               
                <div style="background:#3d91c1; text-align:center; color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:5px 0;" class="bottom_footer">
                	<p>© '.date("Y").' Copyright.  All Rights Reserved</p>
                    <p><a style="color:#004272; text-decoration:none;" href="#" title="Contact us here">Contact us here</a> | <a style="color:#004272; text-decoration:none;" href="#" title="Update E-mail Preferences">Update E-mail Preferences</a></p>
                    <p>Design & Developed by <a style="color:#004272; text-decoration:none;" href="http://webhawksindia.com"  target="_blank" title="Webhawks Technololgy"> Webhawks Technololgy</a>
                </div>
                
            </div>
            <div style="clear:both"></div>
        </div>
    </div>
</body>';




			    
				$subject="property_booth.com::Transaction Detail:";
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = 'html';
				$this->email->initialize($config);
				
				
				$this->email->from($emailto,'property_booth.com');
				
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->message($message);
				$this->email->send();*/
		       //echo $message;
		
				
				
	
	}
				else
				{
					
					$payment_status="Not Paid";
					$reservation_status="Pending";
					
				}
				
				
				
	//}
		
    
break;

    
   case 'success': 
   
			
  
	
break;
	
	}
?>