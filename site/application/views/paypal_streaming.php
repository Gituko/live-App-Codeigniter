<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
require_once('paypal.class.php');
$p = new paypal_class; 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$this->load->model('module');
$SITE_URL=site_base_url();
//$member_id=$this->session->userdata('user_id');
$session_id=$this->session->userdata('session_id');



////////////////////////////////////////////////////////////////////////////////Paypal Url/////////////////////////////////////////////////////////////////////////////////////////


$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
	/*$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';   */  


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
	
	
	
	
	
	if (empty($_GET['action'])) $_GET['action'] = 'process';  
	
	
	
	
	switch ($_GET['action']) {
		
		
	////////////////////////////////////////////////////////////////////////////////////PROCESS SECTION///////////////////////////////////////////////////////	
	
		
	   case 'process':     
	   
        
		
										/******************** Sending data to paypal *****************************/
		
		
		
										$p->add_field('cmd', '_xclick');
									//die;
										$p->add_field('business',$business_id);                
										$p->add_field('custom',$order_gen_id);
										$p->add_field('item_name',$item_name);
										$p->add_field('no_note', '1');
										$p->add_field('item_number', '1');
										$p->add_field('quantity', '1');

										$p->add_field('currency_code', 'USD');
										$p->add_field('notify_url', $notify_url);

										$p->add_field('cancel_return',$cancel_return);
										$p->add_field('return', $return_url);
										//$p->add_field('a3', $plan_amount);
										$p->add_field('amount', $paypal_amount);
										$p->submit_paypal_post(); 
										
										/*
										Subscription duration. Specify an integer value in the allowable range for the units of duration that you specify with 
										
										*/
										//$p->add_field('p3','1');
										
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
		
		$data_store=array
						(
		                     'order_no'=>$order_gen_id,
							 'user_id'=>$user_id,
							 'artist_id'=>$artist_id,
							 'video_id'=>$recorded_v_id,
							 'admin_charge'=>$admin_charge,
							 'artist_charge'=>$artist_charge,
							 'total_amount'=>$paypal_amount
		
		                   );
						
						$this->module->table_payment_temporary($data_store);
		
		
		
		
		/*------------------- retrieve temp order details  --------------------------------------------*/	
		



		
	   break;
	   case 'success':      
 		// Order was successful...
		//$sorry_target=$this_script."thanku_payment.php";
		 // Order was successful...
      // This is where you would probably want to thank the user for their order
      // or what have you.  The order information at this point is in POST 
      // variables.  However, you don't want to "process" the order until you
      // get validation from the IPN.  That's where you would have the code to
      // email an admin, update the database with payment status, activate a
      // membership, etc.  
      //$sorry_target=$this_script."thanku_payment.php";
		/*$data = array(
					'order_payment_status' => 'Paid',
					//'order_transaction_id' => $transaction_id,
					//'ipn_track_id' => $transaction_key
					);*/
		//$this->module->update_payment_status($order_gen_id,$data);
		echo "<html><head><title>Canceled</title></head><body><h3>The Payment was canceled.</h3>";
			echo "</body></html>";
		
		//header("location:".$SITE_URL."thankyou");
	   // You could also simply re-direct them to another page, or your own 
      // order status page which presents the user with the status of their
      // order based on a database (which can be modified with the IPN code 
      // below).
        break;
      
   case 'cancel':       
 		// Order was canceled...
		// The order was canceled before being completed.

         	echo "<html><head><title>Canceled</title></head><body><h3>The Payment was canceled.</h3>";
			echo "</body></html>";

//header("location:".$SITE_URL."sorry");
        break;
      
   case 'ipn': 
 // Paypal is calling page for IPN validation...
      // It's important to remember that paypal calling this script.  There
      // is no output here.  This is where you validate the IPN data and if it's
      // valid, update your database to signify that the user has payed.  If
      // you try and use an echo or printf function here it's not going to do you
      // a bit of good.  This is on the "backend".  That is why, by default, the
      // class logs all IPN data to a text file.
/*-----------------for local testing-------------------------------------------------------------------*/          //http://localhost/artists/site/index.php/paypal?action=ipn&custom=LK_1454064706&ipn_track_id=222&payment_status=Completed&txn_type=web_accept&txn_id=31J30454JH4363945
/*-----------------END:for local testing-------------------------------------------------------------------*/
     /*$data_to_update = array(
                   
										'key_id' => '1',
										'value' => 'abc'
                	                 );*/
		
		
		
		
		
 /* if ($p->validate_ipn()) 
	{*/
         // Payment has been recieved and IPN is verified.  This is where you
         // update your database to activate or process the order, or setup

         // the database with the user's order details, email an administrator,
         // etc.  You can access a slew of information via the ipn_data() array.
  
         // Check the paypal documentation for specifics on what information
         // is available in the IPN POST variables.  Basically, all the POST vars
         // which paypal sends, which we send back for validation, are now stored
         // in the ipn_data() array.
		 /*********************sandbox***************************/
		 //foreach ($_POST as $key => $value) // foreach ($_REQUEST as $key => $value)
		 /*********************live*********************************/
		//echo "<pre>";print_r($_REQUEST);exit;
		
		/*=================================Start Paypal_ipn_return_test===============================================*/
		
		     /*  $data_to_update = array(
                   
										'key_id' => '2',
										'value' => 'abc'
                	                 );
		
		$this->module->insert_paypal_test_value($data_to_update);*/
		/*==================================End Paypal_ipn_return_test==============================================*/
		
		
		
	/*	
		http://localhost/ripepicks/paypal?action=ipn&custom=RK_1456582231&ipn_track_id=5ecdc90112398&payment_status=Completed&txn_type=web_accept&txn_id=31J30454JH4363945&recurring_payment_id=I-M0555555RY*/
		
		
		
		
		
		foreach ($_REQUEST as $key  => $value) 
         //foreach ($p->ipn_data as $key => $value) 
		   { 
		   // $body .= "\n$key: $value"; 
			echo $body = "\n".$key.":".$value; 
			
			 switch($key)
			  {
				 
			  
				case 'custom':
				 $order_gen_id=mysql_real_escape_string($value); 
				 
				break;
				case 'txn_id':
				$transaction_id=mysql_real_escape_string($value);
				break;
				case 'txn_type':
				$txn_type=mysql_real_escape_string($value);
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
				  
				echo $gr_payment=mysql_real_escape_string($value);
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
				case 'payment_date':
				$payment_date=mysql_real_escape_string($value);
				break;
				case 'recurring_payment_id':
				 $recurring_payment_id =mysql_real_escape_string($value);
				break;
				
				//echo $gr_payment;
		  }
		 }
		//echo $gr_payment;
				if($gr_payment=="Completed")
				{
					///echo 1;
					//die;
					$payment_status="Paid";
					$order_status="Completed";
					
					$information=$this->module->retrieve_temp_data($order_gen_id);
					//print_r($information);
					//die;
					 $user_id=$information[0]['user_id'];
					 $artist_id=$information[0]['artist_id'];
					 $video_id=$information[0]['video_id'];
					 $admin_charge=$information[0]['admin_charge'];
					 $artist_charge=$information[0]['artist_charge'];
					 $total_amount=$information[0]['total_amount'];
				      
					
					
					
					$data_ammount=array(
						'order_no'=>$order_gen_id,
						'user_id'=>$user_id,
						'artist_id'=>$artist_id,
						'video_id'=>$video_id,
						'admin_charge'=>$admin_charge,
						'artist_charge'=>$artist_charge,
						'payment'=>$total_amount,
						
						'ipn_track_id'=>$ipn_track_id,
						'date'=>date("Y-m-d"),
						'txn_id'=>$transaction_id,
						'payment'=>$total_amount,
						'user_type'=>'User',
						'payment_type'=>'Streaming Video',
						'payment_status'=>$payment_status
					);
					
					
					
					
					
					
					//print_r($data_ammount);
					//die;
					$this->module->amount_paid($data_ammount);
					
					
					$this->module->delete_payment_from_temp($order_gen_id);
					
					
					
				}
				else
				{
					
					echo $payment_status="Not Paid";
					$reservation_status="Pending";
					
				}
				
				
				
				
/*-------------------- Updating payment staus,transaction id, order date from ipn -----------------------*/
			




/*********************************************************************************************************/


//
//$message='<body style="background:#dedede">
//	<div style="max-width:800px;margin:auto;background:#fff;" class="container">
//    	<div class="container_box">
//        	<div style="border-bottom:1px solid #3d91c1;padding:10px 0;text-align:center;background:#f2f2f2" class="top_logo"><img alt="whatarelief" src="logo.png" /></div>
//            <div style="background:#fff; padding:0px;" class="main_body">
//            	<h3 style="background:#3d91c1; padding:7px; text-align:center; color:#fff; font-weight:bold; font-family:Arial, Helvetica, sans-serif; margin:0; text-transform:uppercase;">Shift Details</h3>
//                
//                <div style="padding:10px 25px;"class="title_div">
//                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Shift Title<span style="float:right">:</span></p></div>
//                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$owner[0]['shift_title'].'</p></div>
//                    <div style="clear:both"></div>
//                </div>
//                
//                <div style="padding:10px 25px;"class="title_div">
//                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Shift Type<span style="float:right">:</span></p></div>
//                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$owner[0]['shift_type'].'</p></div>
//                    <div style="clear:both"></div>
//                </div>
//                
//                <div style="padding:10px 25px;"class="title_div">
//                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Pharmacist Charge<span style="float:right">:</span></p></div>
//                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$pharmacist_charge.'</p></div>
//                    <div style="clear:both"></div>
//                </div>
//                
//                <div style="padding:10px 25px;"class="title_div">
//                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Admin Commision<span style="float:right">:</span></p></div>
//                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$admin_commission.'</p></div>
//                    <div style="clear:both"></div>
//                </div>
//                
//                <div style="padding:10px 25px;"class="title_div">
//                	<div style="float:left; width:45%; text-align:left; font-weight:normal; color:#3d91c1; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">Payment gateway Charge<span style="float:right">:</span></p></div>
//                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p style="margin:2px 0; line-height: 0.7em;">'.$paypal_commission.'</p></div>
//                    <div style="clear:both"></div>
//                </div>
//                
//                <div style="padding:10px 25px; border-top:1px solid #dedede; border-bottom:1px solid #dedede;" class="title_div">
//                	<div style="float:left; width:45%; text-align:left; font-weight:bold; color:#ff1d25; padding:5px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p>Total<span style="float:right">:</span></p></div>
//                    <div style="float:left; width:45%; text-align:left; font-weight:normal; color:#333; padding:5px 10px; font-family:Arial, Helvetica, sans-serif;"class="left_title"><p>'.$total_amount.'</p></div>
//                    <div style="clear:both"></div>
//                </div>
//                
//                <div style="background:#3d91c1; text-align:center; color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:14px; padding:5px 0;" class="bottom_footer">
//                	<p>© '.date("Y").' Copyright.  All Rights Reserved</p>
//                    <p><a style="color:#004272; text-decoration:none;" href="#" title="Contact us here">Contact us here</a> | <a style="color:#004272; text-decoration:none;" href="#" title="Update E-mail Preferences">Update E-mail Preferences</a></p>
//                    <p>Design & Developed by <a style="color:#004272; text-decoration:none;" href="http://webhawksindia.com"  target="_blank" title="Webhawks Technololgy"> Webhawks Technololgy</a>
//                </div>
//                
//            </div>
//            <div style="clear:both"></div>
//        </div>
//    </div>
//</body>';
//
//
//
//
//			     $pharmacy_email=$user_details[0]['member_email'];
//				$subject="whatarelief.com::Shift Detail:".$order_gen_id;
//				$config['protocol'] = 'sendmail';
//				$config['mailpath'] = '/usr/sbin/sendmail';
//				$config['charset'] = 'iso-8859-1';
//				$config['wordwrap'] = TRUE;
//				$config['mailtype'] = 'html';
//				$this->email->initialize($config);
//				$admin_email=$this->module->get_admin_email('admin_email');
//				$this->email->from($admin_email, 'whatarelief.com');
//				$this->email->to($pharmacy_email);
//				$this->email->subject($subject);
//				$this->email->message($message);
//				$this->email->send();
//				echo $this->email->print_debugger();
				//redirect(site_base_url());
				
				
	//}
      break;
 	     
	}
?>