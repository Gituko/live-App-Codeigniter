<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Video_details</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="demo content">
<meta name="keywords" content="demo">
<meta name="author" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo0.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
<link href="<?php echo base_url(); ?>css/jquery.vscroller.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/scroll_style.css" rel="stylesheet" type="text/css" />
		
<!-- Include in <head> to load fonts from Google -->
<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:600' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

<?php

 $user_id = $this->session->userdata('user_id');
 $user_information=$this->module->user_information_get($user_id);

  $subscription=$user_information[0]['subscription'];


?>

	<!-- login -->

<!-- login -->

<!-- Signup -->

<!-- signup -->

	<?php $this->load->view("header.php"); ?>
    
        <?
                                  $my_smilies = array(
        ':aln' => '<img src="'.base_url().'chat_images/alien1.png" alt="" />',
		':thk' => '<img src="'.base_url().'chat_images/annoyed.png" alt="" />',
		':ang' => '<img src="'.base_url().'chat_images/angel.png" alt="" />',
		':slp<' => '<img src="'.base_url().'chat_images/zzz.png" alt="" />',
		':blnk' => '<img src="'.base_url().'chat_images/blanco.png" alt="" />',
		':zip' => '<img src="'.base_url().'chat_images/zip_it.png" alt="" />',
		':bor' => '<img src="'.base_url().'chat_images/boring.png" alt="" />',
		':brb' => '<img src="'.base_url().'chat_images/brb.png" alt="" />',
		':bsy' => '<img src="'.base_url().'chat_images/busy.png" alt="" />',
		':cell' => '<img src="'.base_url().'chat_images/cellphone.png" alt="" />',
		':tp' => '<img src="'.base_url().'chat_images/clock.png" alt="" />',
		':cool' => '<img src="'.base_url().'chat_images/cool.png" alt="" />',
		':czy' => '<img src="'.base_url().'chat_images/crazy.png" alt="" />',
		':cry' => '<img src="'.base_url().'chat_images/cry.png" alt="" />',
		':dvl' => '<img src="'.base_url().'chat_images/devil.png" alt="" />',
		':blush' => '<img src="'.base_url().'chat_images/blush.png" alt="" />',
		':stop' => '<img src="'.base_url().'chat_images/dnd.png" alt="" />',
		':flwr' => '<img src="'.base_url().'chat_images/flower.png" alt="" />',
		':heart' => '<img src="'.base_url().'chat_images/heart.png" alt="" />',
		':geek' => '<img src="'.base_url().'chat_images/geek.png" alt="" />',
		':gift' => '<img src="'.base_url().'chat_images/gift.png" alt="" />',
		':ill' => '<img src="'.base_url().'chat_images/ill.png" alt="" />',
		':love' => '<img src="'.base_url().'chat_images/in_love.png" alt="" />',
		':file' => '<img src="'.base_url().'chat_images/text_file.png" alt="" />',
		':kiss' => '<img src="'.base_url().'chat_images/kissy.png" alt="" />',
		':laugh' => '<img src="'.base_url().'chat_images/laugh.png" alt="" />',
		':mail' => '<img src="'.base_url().'chat_images/mail.png" alt="" />',
		':music' => '<img src="'.base_url().'chat_images/music2.png" alt="" />',
		':whst' => '<img src="'.base_url().'chat_images/not_guilty.png" alt="" />',
		':please' => '<img src="'.base_url().'chat_images/please.png" alt="" />',
		':info' => '<img src="'.base_url().'chat_images/info.png" alt="" />',
		':sad' => '<img src="'.base_url().'chat_images/sad.png" alt="" />',
		':silly' => '<img src="'.base_url().'chat_images/silly.png" alt="" />',
		':lol' => '<img src="'.base_url().'chat_images/oh.png" alt="" />',
		':slps' => '<img src="'.base_url().'chat_images/speechless.png" alt="" />',
		':srpd' => '<img src="'.base_url().'chat_images/surprised.png" alt="" />',
		':tease' => '<img src="'.base_url().'chat_images/tease.png" alt="" />',
		':wink' => '<img src="'.base_url().'chat_images/wink.png" alt="" />',
		':grin' => '<img src="'.base_url().'chat_images/xd.png" alt="" />'
    );
	

	?>

<section id="videodetail">
	<div class="worksection">
		<div class="container-full">
        	<div class="container">
        		<div id="foo" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 video_detaile_left_body">
                	<div class="details_body">
                    	<div class="google_add3">
                        	<img src="<?php echo base_url(); ?>img/googleadd3.png" alt="">
                        </div>
                        
                        <div class="video_user_detail">
                        	<div class="userimage">
                            	 <?php if($atrist_details[0]['image']!=''){
	 
	 ?>
                                		 <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $atrist_details[0]['image']; ?>" >
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png" >
       <?php } ?>
                            </div>
                            
                            
                            <input type="hidden" name="name" id="artist_id" value="<?=$atrist_details[0]['artist_id'];?>">
                            <input type="hidden" name="artist_id" id="recorded_v_id" value="<?=$custom_video[0]['recorded_v_id']?>">
                            
                            <div class="video_sername">
                            	<h4><?=$atrist_details[0]['name'];?></h4>
                            </div>
                            <div class="follow_sec">
                            	<select class="following">
                                	<option value="1" selected>Following</option>
                                    <option value="2">022</option>
                                    <option value="3">033</option>
                                </select>
                                <a href="#"><i class="fa fa-heart"></i><span class="gapp"></span> Follow</a>
                            </div>
                        </div>
                        
                        <div class="details_video">
                        	<div class="media-wrapper">
                                <video class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/vd_image.png" preload="yes" controls="controls">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/mp4">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/ogg">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/webm">
                                    <object data="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" width="470" height="255">
                                    <embed src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" width="470" height="255">
                                    </object>
                                </video>
                            </div>
                            <div class="vd_bottom">
                            	<div class="thumb_usr">
                                	<img src="<?php echo base_url(); ?>img/user2.png" alt="">
                                </div>
                                <div class="vb_usrdetail">
                                	<h4><?php echo $custom_video[0]['recorded_v_title'];?></h4>
                                    <p>Overview:<span class="gapp"></span> <a href="#"><?php echo $custom_video[0]['recorded_v_overview'];?></a></p>
                                </div>
                                <div class="viewshare_link">
                                	<div class="share"><a href="#"><i class="fa fa-share"></i></a></div>
                                </div>
                                <div class="view"><i class="fa fa-eye"></i><span class="gapp"></span> <a href="#">100</a></div>
                            </div>
                            
                            <div class="messagearea">
                           		<h3>Messages</h3>
                                
                              <div class="vscroller">
                        		<div class="vscroller-content" id="message_scroll">
                                <div id="message_chat">
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg1.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">Monalisa</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg1.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">Monalisa</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg1.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">Monalisa</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg1.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">Monalisa</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                 <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg1.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">Monalisa</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                 <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg1.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">Monalisa</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                 <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg1.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">Monalisa</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                <div class="message_col">
                                	<div class="msg_thumb">
                                    	<img src="<?php echo base_url(); ?>img/msg2.png" alt="">
                                    </div>
                                    <div class="message_top">
                                    	<span class="msg_username">ORION</span><span class="sendtime">17:20</span><span class="sendddmmyy">06/06/2017</span>
                                    </div>
                                    <div class="msg_body">
                                    	<p>I feel like the name of the stream is very realistic, I feel like the name of the stream is very realistic. cut the rope whilst the little brother is hanging, Josh_Temperton -> drezzdie is playing Brothers: A Tale of Two Sons, ...</p>
                                    </div>
                                </div>
                                
                                       
                                 <?php
								// print_r($messages_chat);
							 if($messages_chat!='')
							 {
								 foreach($messages_chat as $row)
								 {
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									 
							 ?>
                             
                            
                             
                           
                                <div class="message_col">
                                	<div class="msg_thumb">
                            <?php if($row['image']!=''){
								?>
                            	<img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $row['image']; ?>" alt="">
                                
                                <?
							}else{
							?>
                           <img src="<?php echo base_url(); ?>img/myimage2.png" alt="">
                            
                            <?php
							}
							?>
                             </div>
                             <div class="message_top">
                                    	<span class="msg_username"><?=$row['name'];?></span><span class="sendtime"><?=$time;?></span><span class="sendddmmyy"><?=$date;?></span>
                                    </div>
                                    <div class="msg_body">
                                    	<p><?=$row['message'];?></p>
                                    </div>
                              
                  
                            </div>
               
               <?php
								 }
							 }
								 ?>
                                 </div>
                                
                                 </div>
                               </div> 
                            </div>
                        </div>
                        <div class="chat_inputbox">
                           <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message_chat()"><i class="fa fa-location-arrow"></i></button>
                                	<textarea class="form-control chatinputarea content"  rows="1"  id="text_message1" placeholder="Your text here..." ></textarea>
                                </div>
                        
                        <?php /*?><div class="videodetails_slider">
                        	<div class="vd_title"><h3>Related Videos</h3></div>
                            
                            <div class="vb_slider">
                            <div class="rent_prop_row">
                                <div class="popularshows">
                                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="item active">	
                                	
									
                                    
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fv_container rp_btm_slider">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                            	<a href="#"><img src="<?php echo base_url(); ?>img/img6.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer<span class="name_performer">kevin Williams</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fv_container rp_btm_slider">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                            	<a href="#"><img src="<?php echo base_url(); ?>img/img5.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer<span class="name_performer">kevin Williams</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fv_container rp_btm_slider">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                            	<a href="#"><img src="<?php echo base_url(); ?>img/img4.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer<span class="name_performer">kevin Williams</span></p>
                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="item">	
                                
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fv_container rp_btm_slider">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                            	<a href="#"><img src="<?php echo base_url(); ?>img/img3.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer<span class="name_performer">kevin Williams</span></p>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fv_container rp_btm_slider">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                            	<a href="#"><img src="<?php echo base_url(); ?>img/img2.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer<span class="name_performer">kevin Williams</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fv_container rp_btm_slider">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                            	<a href="#"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer<span class="name_performer">kevin Williams</span></p>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa  fa-angle-double-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa  fa-angle-double-right"></i>
							  </a>			
						</div>
                        <div style="clear:both"></div>
                                </div>
                            </div>
                            </div>
                        </div><?php */?>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 video_detaile_rightpanel">
                	<div class="left_panel">
                    	<div class="addsec">
                        	<img src="<?php echo base_url(); ?>img/googleadd4.png">
                        </div>
                        <div class="addsec">
                        	<img src="<?php echo base_url(); ?>img/googleadd4.png">
                        </div>
                        <div class="chat_reply">
                        	<div class="chat_title"><h4>Chat Replay</h4></div>
                           <div class="vscroller vscroller2">
                        	 <div class="vscroller-content">  
                              <div id="chat_sms">
                             
                             <?php
							 
							  
							 if($messages!='')
							 {
								 foreach($messages as $row)
								 {
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									 
							 ?>
                             
                            
                             
                            <div class="chat_col">
                            <?php if($row['image']!=''){
								?>
                            	<div class="chat_img"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $row['image']; ?>" alt=""></div>
                                
                                <?
							}else{
							?>
                            <div class="chat_img"><img src="<?php echo base_url(); ?>img/myimage2.png" alt=""></div>
                            
                            <?php
							}
							?>
                                <div class="chat_body">
                                	<div class="chat_top"><span class="chat_name"><?=$row['name'];?></span><span class="chattime"><?=$time;?></span><span class="chatddmmyy"><?=$date;?></span></div>
                                    <div class="chat_details">
                                    	<p class="mess_img"><?=str_replace( array_keys($my_smilies), array_values($my_smilies),$row['message'])?></p>
                                    </div>
                                </div>
                            </div>
                            
                  
                            
               
               <?php
								 }
							 }
								 ?>
                            
                            </div>
                            </div>
                            </div>
                            <div class="chat_inputbox">
                            	<div class="chat_togle_btn">
                                	<button id="chatbttn" class="chat_togle_button" data-toggle="tooltip" data-placement="top" title="Chat on" ><i class="fa fa-comments"></i></button>
                                    <?php
									if($subscription!='Free')
									{
									
									?>
                                    <button id="chatbttn2" data-toggle="tooltip" data-placement="top" title="Chat Icons" class="chaticon"></button>
                                    <?php
									}
									?>
                                    
                                    <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message()"><i class="fa fa-location-arrow"></i></button>
                                
                                </div>
                                
                                <div id="dropchat2" class="chat_icons">
                                <?php
                                foreach($my_smilies as $key=>$data) {
									?>
                                    <div class="chat_ico" onClick="emoji('<?=$key?>')"><?php echo $data ?> </div>
								 
								   <?php
								  }
								  ?>
                                	
                                </div>
                                <div id="dropchat" class="chat_textbox" >
                                	<textarea class="form-control chatinputarea content"  rows="1"  id="text_message" placeholder="Your text here..." ></textarea>
                                </div>
                               
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
			</div><!--/.container-->
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
</section><!-- /#somework -->


<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->
<script>
function emoji(code){
 var message = document.getElementById('text_message').value;
 var message1='';

 message1+=message+' '+code; 
 document.getElementById('text_message').value=message1;
}
</script>


<?php $this->load->view("footer.php"); ?>
<script>
	function send_message_chat()
	{
	  //alert($("#mydiv")[0].scrollHeight);
	   var message = document.getElementById('text_message1').value;
	     var artist_id = document.getElementById('artist_id').value;
		  var recorded_v_id = document.getElementById('recorded_v_id').value;
		 
		 if(message!=''){
		 
	// alert(message);
	   $.ajax({                              
		type: 'POST',
			url: "<?php echo site_base_url();?>main/message_chat?message="+message+"&artist_id="+artist_id+"&recorded_v_id="+recorded_v_id,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#message_chat").append('<div class="message_col"><div class="msg_thumb"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="message_top"><span class="msg_username">'+response[0]+'</span><span class="sendtime">'+response[2]+'</span><span class="sendddmmyy">'+response[3]+'</span></div><div class="<?php echo base_url(); ?>msg_body"><p>'+response[4]+'</p></div></div>');
	    document.getElementById('text_message1').value='';
	//$("#message_scroll").scrollTop($("#message_scroll")[0].scrollHeight);
		//$('#message_scroll').css('top', '-553px ');
		
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
		 }else{
			 alert("Please Enter The Message");
			 }
	   
	   
	   
	
}
	
	</script>


	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
    
	<!-- Required -->
	<script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.event.drag.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.vscroller.js" type="text/javascript"></script>
    <!-- Optional -->
    <script src="<?php echo base_url(); ?>js/jquery.easing.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	

	//<![CDATA[
            $('.vscroller').vscroller({
                easing: "easeOutExpo"
            });
	//]]> 
     </script>
	<script type="text/javascript">
		//<![CDATA[

		$(document).ready(function(){
		$("#chatbttn").click(function(){
			$("#dropchat").slideToggle("slow");
		});
		});

		//]]> 
    </script>
   
   <script>
   function parseString($string ) {
	$my_smilies = array(
        ':aln' => '<img src="<?php echo base_url(); ?>chat_images/alien1.png" alt="" />',
		':thk' => '<img src="<?php echo base_url(); ?>chat_images/annoyed.png" alt="" />',
		':ang' => '<img src="<?php echo base_url(); ?>chat_images/angel.png" alt="" />',
		':slp<' => '<img src="<?php echo base_url(); ?>chat_images/zzz.png" alt="" />',
		':blnk' => '<img src="<?php echo base_url(); ?>chat_images/blanco.png" alt="" />',
		':zip' => '<img src="<?php echo base_url(); ?>chat_images/zip_it.png" alt="" />',
		':bor' => '<img src="<?php echo base_url(); ?>chat_images/boring.png" alt="" />',
		':brb' => '<img src="<?php echo base_url(); ?>chat_images/brb.png" alt="" />',
		':bsy' => '<img src="<?php echo base_url(); ?>chat_images/busy.png" alt="" />',
		':cell' => '<img src="<?php echo base_url(); ?>chat_images/cellphone.png" alt="" />',
		':tp' => '<img src="<?php echo base_url(); ?>chat_images/clock.png" alt="" />',
		':cool' => '<img src="<?php echo base_url(); ?>chat_images/cool.png" alt="" />',
		':czy' => '<img src="<?php echo base_url(); ?>chat_images/crazy.png" alt="" />',
		':cry' => '<img src="<?php echo base_url(); ?>chat_images/cry.png" alt="" />',
		':dvl' => '<img src="<?php echo base_url(); ?>chat_images/devil.png" alt="" />',
		':blush' => '<img src="<?php echo base_url(); ?>chat_images/blush.png" alt="" />',
		':stop' => '<img src="<?php echo base_url(); ?>chat_images/dnd.png" alt="" />',
		':flwr' => '<img src="<?php echo base_url(); ?>chat_images/flower.png" alt="" />',
		':heart' => '<img src="<?php echo base_url(); ?>chat_images/heart.png" alt="" />',
		':geek' => '<img src="<?php echo base_url(); ?>chat_images/geek.png" alt="" />',
		':gift' => '<img src="<?php echo base_url(); ?>chat_images/gift.png" alt="" />',
		':ill' => '<img src="<?php echo base_url(); ?>chat_images/ill.png" alt="" />',
		':love' => '<img src="<?php echo base_url(); ?>chat_images/in_love.png" alt="" />',
		':file' => '<img src="<?php echo base_url(); ?>chat_images/text_file.png" alt="" />',
		':kiss' => '<img src="<?php echo base_url(); ?>chat_images/kissy.png" alt="" />',
		':laugh' => '<img src="<?php echo base_url(); ?>chat_images/laugh.png" alt="" />',
		':mail' => '<img src="<?php echo base_url(); ?>chat_images/mail.png" alt="" />',
		':music' => '<img src="<?php echo base_url(); ?>chat_images/music2.png" alt="" />',
		':whst' => '<img src="<?php echo base_url(); ?>chat_images/not_guilty.png" alt="" />',
		':please' => '<img src="<?php echo base_url(); ?>chat_images/please.png" alt="" />',
		':info' => '<img src="<?php echo base_url(); ?>chat_images/info.png" alt="" />',
		':sad' => '<img src="<?php echo base_url(); ?>chat_images/sad.png" alt="" />',
		':silly' => '<img src="<?php echo base_url(); ?>chat_images/silly.png" alt="" />',
		':lol' => '<img src="<?php echo base_url(); ?>chat_images/oh.png" alt="" />',
		':slps' => '<img src="<?php echo base_url(); ?>chat_images/speechless.png" alt="" />',
		':srpd' => '<img src="<?php echo base_url(); ?>chat_images/surprised.png" alt="" />',
		':tease' => '<img src="<?php echo base_url(); ?>chat_images/tease.png" alt="" />',
		':wink' => '<img src="<?php echo base_url(); ?>chat_images/wink.png" alt="" />',
		':grin' => '<img src="<?php echo base_url(); ?>chat_images/xd.png" alt="" />'
    );
	
	return str_replace( array_keys($my_smilies), array_values($my_smilies), $string);
}
   
   
   </script>
   
   
   
   
   
   
   
   
   
    
   
    
    
    
    
    <script>
	function send_message()
	{
	  //alert("ddd");
	   var message = document.getElementById('text_message').value;
	     var artist_id = document.getElementById('artist_id').value;
		 var recorded_v_id = document.getElementById('recorded_v_id').value;
		  if(message!=''){
	  // alert(artist_id);
	   $.ajax({                              
		type: 'POST',
		//url: "<?php echo site_base_url();?>main/send_chat?message="+message+"&artist_id="+artist_id,
		url: "<?php echo site_base_url();?>main/send_chat?message="+message+"&artist_id="+artist_id+"&recorded_v_id="+recorded_v_id,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#chat_sms").append('<div class="chat_col"><div class="chat_img"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="chat_body"><div class="chat_top"><span class="chat_name">'+response[0]+'</span><span class="chattime">'+response[2]+'</span><span class="chatddmmyy">'+response[3]+'</span></div><div class="chat_details"><p>'+response[4]+'</p></div></div></div>');
	   document.getElementById("chatbttn2").click();
	    document.getElementById('text_message').value='';
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
		  }
	   
	   
	   
	
}
	
	</script>
    
    
    
    
    
    
    
   <?php /*?> <?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $atrist_details[0]['image']; ?><?php */?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    
    
    
    
    
    
    
    
    
    <script type="text/javascript">
		//<![CDATA[

		$(document).ready(function(){
		$("#chatbttn2").click(function(){
			$("#dropchat2").slideToggle("slow");
		});
		});

		//]]> 
    </script>
    
    
    
    
    
   <script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'none')
          e.style.display = 'block';
       else
          e.style.display = 'none';
    }
//-->
</script>
<style>
.chat_details img{
	    
    display: inline-block !important;
    height: auto;
	}
</style>
</body>
</html>