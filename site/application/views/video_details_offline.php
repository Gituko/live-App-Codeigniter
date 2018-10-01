<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Video_details(off-line)</title>
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
	<!-- login -->

<!-- login -->

<!-- Signup -->

<!-- signup -->

	<!-- /#Header-->
<?php 
	
	$this->load->view("header"); ?>
<?php /*?> echo $ip = $_SERVER['REMOTE_ADDR']; die; <?php */?>
<section id="videodetail">
	<div class="worksection">
		<div class="container-full">
        	<div class="container">
        		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 video_detaile_left_body">
                	<div class="details_body">
                    	<div class="google_add3">
                        	<img src="<?php echo base_url(); ?>img/googleadd3.png" alt="">
                        </div>
                      
                        <div class="video_user_detail">
                        	<div class="userimage">
                            	 <?php if($artist_details[0]['image']!=''){
	 
	 ?>
                                		 <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $artist_details[0]['image']; ?>" >
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png" >
       <?php } ?>
                            </div>
                            <div class="video_sername">
                            	<h4><?=$artist_details[0]['name'];?></h4>
                            </div>
                             <div class="video_sername">
                            	<h4><a href="<?php echo site_base_url(); ?>video_details_page/<?=urlencode(str_replace(" ","_",$artist_details[0]['name']))._.$artist_details[0]['artist_id']?>"> Live <span class="gapp"></span><i class="fa fa-circle green"></i></a></h4>
                            </div>
                            
                            
                            <?php
							$online_status=$artist_details[0]['online_status'];
							if($online_status=='Online')
							{
							?>
                            	
                                
                                
                       <?php
							}
					   ?>
                            
                            
                            
                            
                            
                            
                            <div class="follow_sec">
                            	<select class="following">
                                	<option value="1" selected>Following</option>
                                    <option value="2">022</option>
                                    <option value="3">033</option>
                                </select>
                                <a href="#"><i class="fa fa-heart"></i><span class="gapp"></span> Follow</a>
                                
                            </div>
                            
                            
                            
                            
                           
                            
                            
                        </div>
                      
               
                        <div class="user_details_tab">
                        	<ul class="nav nav-tabs">
                                <li ><a data-toggle="tab" href="#home">Custome Video</a></li>
                                <li class="active"><a data-toggle="tab" href="#menu1">User Info</a></li>
                                <li><a data-toggle="tab" href="#menu2">Videos</a></li>
                                <li><a data-toggle="tab" href="#menu3">Photos</a></li>
                            </ul>
                            
                            <div class="tab-content usertabcont">
                                <div id="home" class="tab-pane usertabs fade">
									<div class="media-wrapper">
                                <video class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/vd_image.png" preload="yes" controls="controls">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/mp4">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/ogg">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/webm">
                                    <object data="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" width="470" height="255">
                                        <embed src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" width="470" height="255"></embed>
                                        </object> 
                                     
                                </video>
                            </div>
                            <div class="vd_bottom">
                            	<div class="thumb_usr">
                                	<img src="<?php echo base_url(); ?>img/user2.png" alt="">
                                </div>
                                <div class="vb_usrdetail">
                                	<h4>Hopefully not too BibleThump</h4>
                                    <p>Brother:<span class="gapp"></span> <a href="#">A Tale of Two Sons</a></p>
                                </div>
                                <div class="viewshare_link">
                                	<div class="share"><a href="#"><i class="fa fa-share"></i></a></div>
                                </div>
                                <div class="view"><i class="fa fa-eye"></i><span class="gapp"></span> <a href="#"><?php echo $artist_video[0]['total'];?></a></div>
                            </div>
                            
                                </div>
                                <div id="menu1" class="tab-pane usertabs fade in active">
									<div class="userareas">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 userinfo_left">
                                        	<h5>Name:</h5>
                                            <p style=" text-transform: capitalize;"><?=$artist_details[0]['name'];?></p>
                                        </div>
                                     <?    $diff = (date('Y') - date('Y',strtotime($artist_details[0]['birth_date'])));
   
	?>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>User age:</h5>
                                            <p><?= $diff;?></p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>User Gender:</h5>
                                            <p><?=$artist_details[0]['sex'];?></p>
                                        </div>
                                    </div>
                                    <div class="userareas">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 userinfo_left">
                                        	<h5>Email:</h5>
                                            <p><?=$artist_details[0]['email'];?></p>
                                        	
                                        </div>
                                    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                       	 	<h5>City:</h5>
                                            <p style=" text-transform: capitalize;"><?=$artist_details[0]['city'];?></p>
                                        	
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                      		 <h5>State:</h5>
                                           	<p style=" text-transform: capitalize;"><?=$artist_details[0]['state'];?></p>
                                        	
                                        </div>
                                    </div>
                                    <div class="userareas">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 userinfo_left">
                                        	<h5>Category Type</h5>
                                             <?php
													$category=$artist_details[0]['category_type'];
													$category_name=$this->module->get_category_name($category);
													?>
                                            
                                            <p><?php echo $category_name[0]['category_name'];?></p>
                                        </div>
                                    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>Sex:</h5>
                                            <p><?=$artist_details[0]['sex'];?></p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>Video Tags:</h5>
                                            <p><?=$artist_details[0]['artist_tag'];?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="userareas">
                                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userinfo_left">
                                        	<h5>About Me:</h5>
                                            <p><?=$artist_details[0]['about_me'];?></p>
                                        </div>
                                   
                                       
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane usertabs fade">
                                   <div class="vscroller vscroller4">
                                     <div class="vscroller-content">
									<div class="userareas">
                                
                                  <?php
			$j = 1;
			
			foreach($artist_video as $row){
				
				$des1=substr($row['video_title'],0,30);
							$length1 = strlen($row['video_title']);
							
							if($length1>20){
								$moss1=$des1."..";
								
								}else{
									$moss1=$des1." ";
									}
				?>
                            
                            <div class="col-lg-4 col-md-4 col-xs-4 col-xs-4 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                  
                                       <!-- <video onclick="myFunction12()" id="myVideo12" poster="<?php echo base_url(); ?>img/img122.png" width="100%" height="100%" style="max-width:100%;">-->
                                          <video onclick="myFunction<?=j?>()" class="fancybox fancybox.iframe" href="<?php echo site_base_url();?>video_view/<?php echo $row['video_id'];?>"  poster="<?php echo base_url(); ?>img/img22.png" width="100%" height="100%" style="max-width:100%;">
                                      <!--  <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/mp4">-->
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" type="video/mp4">
                                       <!-- <source src="<?php echo base_url(); ?>videos/big_buck_bunny.ogg" type="video/ogg">-->
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" type="video/ogg">
                                     <!--   <source src="<?php echo base_url(); ?>videos/big_buck_bunny.webm" type="video/webm">-->
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" type="video/webm">
                                        
                                    <!--    <object data="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" width="470" height="255">-->
                                    <object data="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" width="470" height="255">
                                       <!-- <embed src="<?php echo base_url(); ?>videos/big_buck_bunny.swf" width="470" height="255">-->
                                        <embed src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" width="470" height="255">
                                        </object> 
                                        </video>
                                       
                                    </div>
                                    <div class="f_video_bottom vdodetel">
                                        <h5><?php echo $moss1 ;?></h5>
                                        <p><?=$row['total']?> viewer</p>
                                    </div>
                                </div>
                            </div>

<script>
							function myFunction<?=$j?>(){
								
								 document.getElementById("myVideo<?=$j?>").controls = true;
								 
								}
								
								
							
							</script>
                            
                            <?
							$j++;
							
							} ?>


</div></div>

                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                <div id="menu3" class="tab-pane usertabs fade">
                                
                                   <div class="vscroller vscroller3">
                                     <div class="vscroller-content">
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
							
							$des2=substr($row['image_name'],0,20);
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
                            </div>
                 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
            <?php /*?><div class="details_video">
							
                        
						
							
                            <div class="messagearea">
                           		<h3>Scheduled Time</h3>
                          
                          
                          <?php
						 
						  foreach($schedule_list_artist as $row)
						  {
						  ?>
                          
                          
                       
                            <div class="userareas">
                                    	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 userinfo_left">
                                        	<h5>Date:</h5>
                                            <p style=" text-transform: capitalize;"><?=$row['date']?></p>
                                        </div>
                                    
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 userinfo_left">
                                        	<h5>Time:</h5>
                                            <p><?=$row['time']?></p>
                                        </div>
                                       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 userinfo_left">
                                        	<h5>Duration:</h5>
                                            <p><?=$row['duration']?></p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>Introduction:</h5>
                                            <p><?=$row['intro_text']?></p>
                                        </div>
                                        
                                        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<?php
											$check_fav = $this->module->check_paid_not($row['schedule_id'],$user_id);
											 if(!empty($check_fav)){ 
											
											?>
                                            <h5><a href="<?php echo site_base_url();?>payment_scheduled_live/<?php echo $row['schedule_id'];?>">BUY</a></h5>
                                            <?php
											 }
											 else{
											?>
                                             <h5><a href="">Paid</a></h5>
                                             <?php
											 }
											 ?>
                                        </div>
                                            
                                        </div>
                                      <?php
						  }
						  ?>
                                        
                                        
                                        
                                    </div>  
                                
                                  
                            </div><?php */?>
                                 
                        
                        
                        
                        
                        
                        
                        <div class="details_video">
							
                            <?php //$recorded_video = $this->module->get_recorded_video();
							//print_r($recorded_video);
							//die;
						
							?>
                            <div class="messagearea">
                           		<h3>Recorded Videos</h3>
                           <?php 
						   if($recorded_video!='')
						   {
						   ?>
                              <div class="vscroller">
                        		<div class="vscroller-content">
                                <div class="strm_holder">
                                <?php foreach($recorded_video as $row1){ 
								
								$des=substr($row1['recorded_v_title'],0,20);
								 $ovr=substr($row1['recorded_v_overview'],0,60);
							$length = strlen($row1['recorded_v_title']);
							$length_ovr = strlen($row1['recorded_v_overview']);
							
							if($length>20){
								$moss=$des."..";
								
								}else{
									$moss=$des." ";
									}
									
									
									if($length_ovr>30){
								$overview=$ovr."..";
								
								}else{
									$overview=$ovr." ";
									}
									
									
									
									
								?>
                                 <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                    
                                    <video   poster="<?php echo base_url(); ?>img/img66.png" width="100%" height="100%" style="max-width:100%;">
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
                                        <div class="vdodetel_bottom">
                                        	<span class="vdodetel_vew"><p><?=$row1['total']?> viewer</p></span>
                                        	<span class="vdodetel_vew_link"><a  href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$row1['recorded_v_title']))._.$row1['recorded_v_id']?>">View</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php } ?>
                            
                            </div>
                            
                                 </div>
                                 
                                  </div>
                                <?php
						   }
						   ?>
                                  
                            </div>
                        </div>
                        
                        
                     
                    
                        
                        <div class="videodetails_slider">
                        	<div class="vd_title"><h3>Related Video</h3></div>
                            
                            <div class="vb_slider">
                            <div class="rent_prop_row">
                                <div class="popularshows">
                                 <?php if(!empty($related_video)){  ?>
                                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                 <?php   
					$i=1;
					$m=0;
					$length = count($related_video);
					//$value = $length/6;
					//echo floor($value);die;
					
					for ($j = 0; $j < $length/3; $j++) {
						if($i==1){
							$class='active';
						}
						else{
							$class='';
						}
						$i++;
						
						
					?>
                                                    <div class="item <?=$class;?>">	
                                	
									
                                    <?php 
							for($h=$m; $h < $m+3 ; $h++){
								?>
                                
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 fv_container rp_btm_slider">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                           
                                		<a href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$related_video[$h]['recorded_v_title']))._.$related_video[$h]['recorded_v_id']?>"><img src="<?php echo base_url(); ?>img/img1.png" alt="" ></a>
                                         
                                            	
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5><?=$related_video[$h]['recorded_v_title'];?></h5>
                                                <?php /*?><p><?=$related_video[$h]['total']?> viewer</p><?php */?>
                                            </div>
                                        </div>
                                    </div>
                                      <?php 
							}
							?>
									
                                   
								</div>
                                 <?php
							$m=$m+3;
							} ?>
								
							</div>
                            
                            
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa  fa-angle-double-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa  fa-angle-double-right"></i>
							  </a>			
						</div>
                        
                         <?php } ?>
                        <div style="clear:both"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 video_detaile_rightpanel">
                	<div class="left_panel">
                    <?php
					$add=$this->module->get_add_user_details('artist_details','Right');
					foreach($add as $row1)
					{
					?>
                    	<div class="addsec">
                        	 <? if($row1['advertisment_type']=='image') {?>
                <a href="<?=$row1['advertisement_link']?>"><img src="<?=site_base_url()."uploads/advertisement_image/thumb/thumb_".$row1['advertisement_image'];?>"/></a>
                <? } else {
	   echo stripslashes($row1['advertisement_code']);
	   //echo 1;
	  // break;
	   }?>
                        </div>
                    <?php
					}
					?>
                        
                        
                        <div class="chat_reply">
                        	<div class="chat_title"><h4>Related Streamer</h4></div>
                           <div class="vscroller vscroller2">
                        	 <div class="vscroller-content">
                               
                             <?php foreach($related_artist as $row3){ ?>  
                            <div class="relatedstrm_col">
                            	<div class="relatedstrm_img"><?php if($row3['image']!=''){
	 
	 ?>
                                		<img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $row3['image'];?>" alt="" >
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png" >
       <?php } ?></div>
       <?   
	   if($row3['birth_date']!='0000-00-00'){
	   $diff = (date('Y') - date('Y',strtotime($row3['birth_date'])));
	   }else{
		   $diff='';
		   }
	   
	?>
                                <div class="relatedstrm_body">
                                	<h5><?=$row3['name']?></h5>
                                	<div class="relate_link">
                                    	<span class="rsd"><strong>Age:</strong><?=$diff?></span><span class="rsd"><strong>Viewer:</strong> <?=$row3['total']?></span> <span class="rsdbtn"><a href="<?=site_base_url();?>artist_detail/<?=urlencode(str_replace(" ","_",$row3['name']))._.$row3['artist_id']?>">View</a></span>
                                    </div>
                                </div>
                            </div>
                            
                            <? } ?>
                          
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

<?php $this->load->view("footer"); ?> <!-- /.footer -->


	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/script.js"></script>
    
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
			 $('.vscroller3').vscroller({
                easing: "easeOutExpo"
            });
	//]]> 
     </script>
    
 <script type="text/javascript">
//<![CDATA[
function myFunction() {
    document.getElementById("myVideo1").controls = true;
}
function myFunction2() {
    document.getElementById("myVideo2").controls = true;
}
function myFunction3() {
    document.getElementById("myVideo3").controls = true;
}
function myFunction4() {
    document.getElementById("myVideo4").controls = true;
}
function myFunction5() {
    document.getElementById("myVideo5").controls = true;
}
function myFunction6() {
    document.getElementById("myVideo6").controls = true;
}
function myFunction7() {
    document.getElementById("myVideo7").controls = true;
}
function myFunction7() {
    document.getElementById("myVideo7").controls = true;
}
function myFunction8() {
    document.getElementById("myVideo8").controls = true;
}
function myFunction9() {
    document.getElementById("myVideo9").controls = true;
}
function myFunction10() {
    document.getElementById("myVideo10").controls = true;
}
function myFunction11() {
    document.getElementById("myVideo11").controls = true;
}
function myFunction12() {
    document.getElementById("myVideo12").controls = true;
}
function myFunction111() {
    document.getElementById("myVideo111").controls = true;
}
function myFunction222() {
    document.getElementById("myVideo222").controls = true;
}
function myFunction333() {
    document.getElementById("myVideo333").controls = true;
}
function myFunction444() {
    document.getElementById("myVideo444").controls = true;
}
function myFunction555() {
    document.getElementById("myVideo555").controls = true;
}
function myFunction666() {
    document.getElementById("myVideo666").controls = true;
}
function myFunction777() {
    document.getElementById("myVideo777").controls = true;
}
function myFunction888() {
    document.getElementById("myVideo888").controls = true;
}
function myFunction999() {
    document.getElementById("myVideo999").controls = true;
}
function myFunction1111() {
    document.getElementById("myVideo1111").controls = true;
}
function myFunction2222() {
    document.getElementById("myVideo2222").controls = true;
}
function myFunction3333() {
    document.getElementById("myVideo3333").controls = true;
}
function myFunction4444() {
    document.getElementById("myVideo4444").controls = true;
}
function myFunction5555() {
    document.getElementById("myVideo5555").controls = true;
}
function myFunction6666() {
    document.getElementById("myVideo6666").controls = true;
}
function myFunction1a() {
    document.getElementById("myVideo1a").controls = true;
}
function myFunction2a() {
    document.getElementById("myVideo2a").controls = true;
}
function myFunction3a() {
    document.getElementById("myVideo3a").controls = true;
}
function myFunction4a() {
    document.getElementById("myVideo4a").controls = true;
}
function myFunction5a() {
    document.getElementById("myVideo5a").controls = true;
}
function myFunction6a() {
    document.getElementById("myVideo6a").controls = true;
}
function myFunction1b() {
    document.getElementById("myVideo1b").controls = true;
}
function myFunction2b() {
    document.getElementById("myVideo2b").controls = true;
}
function myFunction3b() {
    document.getElementById("myVideo3b").controls = true;
}
function myFunction4b() {
    document.getElementById("myVideo4b").controls = true;
}
function myFunction5b() {
    document.getElementById("myVideo5b").controls = true;
}
function myFunction6b() {
    document.getElementById("myVideo6b").controls = true;
}
//]]>
</script>
	
<script type="text/javascript" src="<?php echo base_url(); ?>js/lib/jquery-1.10.2.min.js"></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.fancybox.css?v=2.1.5" media="screen" />
    	<script type="text/javascript">
		$(document).ready(function() {
			
		
			$('.fancybox').fancybox();
			
				$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
			
		});
		function close(){
			//alert('bittu');
		 $('.fancybox').fancybox.close();
			}
			
	
	</script>

    
    
 <script type="text/javascript">
       

       


    </script>  
</body>
</html>