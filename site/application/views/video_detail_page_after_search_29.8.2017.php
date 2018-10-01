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
	<!-- login -->


<!-- Signup -->

<!-- signup -->

	<? $this->load->view("header");?>
    
    
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
                            	
                               <?php if($artist_details[0]['image']!=''){
	 
	 ?>
                          <a href="<?php echo site_base_url(); ?>artist_detail/<?=urlencode(str_replace(" ","_",$artist_details[0]['name']))._.$artist_details[0]['artist_id']?>">   <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $artist_details[0]['image']; ?>" ></a>
                                          <?php } else { ?>
 <a href="<?php echo site_base_url(); ?>video_details_page/<?=urlencode(str_replace(" ","_",$artist_details[0]['name']))._.$artist_details[0]['artist_id']?>"><img src="<?php echo base_url(); ?>img/myimage2.png" ></a>
       <?php } ?> 
                                
                                
                                
                            </div>
                            <div class="video_sername">
                            	<h4><?=$artist_details[0]['name'];?></h4>
                                 <input type="hidden" name="artist_id" id="artist_id" value="<?=$artist_details[0]['artist_id']?>">
                                 <input type="hidden" name="artist_id" id="recorded_v_id" value="<?=$custom_video[0]['recorded_v_id']?>">
                                 
                                 
                            </div>
                            <?php 
							$user_id=$this->session->userdata('user_id');
							$artist_follow=$this->module->get_artist_follow($artist_details[0]['artist_id'],$user_id);
							if(!empty($artist_follow)){
								$class='';
								$class1="hide_follow";
								}else{
									
									$class1='';
								$class="hide_follow";
									}
							
							
							?>
                            
<style>
.hide_follow{
	display:none;
	}
</style>
                            <div class="follow_sec">
                            	 <div id="follow" <? if($class1!=''){?>  class="<?=$class1?>" <? }?>>
                                <a onClick="follow_artist()" style="cursor:pointer"><i class="fa fa-heart"></i><span class="gapp"></span> Follow</a>
                                </div>
                                <div id="unfollow" <? if($class!=''){?> class="<?=$class?>" <? }?>> <a onClick="unfollow_artist()" style="cursor:pointer;width: 34%;"><i class="fa fa-heart"></i><span class="gapp"></span> UnFollow</a></div>
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
                                
                              <div class="vscroller" >
                        		<div class="vscroller-content" id="message_scroll">
                                <div id="chat_sms">
                                
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
                            
                           
                          <div class="chat_inputbox">
                           <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message()"><i class="fa fa-location-arrow"></i></button>
                                	<textarea class="form-control chatinputarea content"  rows="1"  id="text_message" placeholder="Your text here..." ></textarea>
                                </div>
                            
                           
                        </div>
                        
       <script>
function follow_artist(){
	
	  var artist_id = document.getElementById('artist_id').value;
	  	   $.ajax({                              
		type: 'POST',
			url: "<?php echo site_base_url();?>main/follow_artist?artist_id="+artist_id,
		success:function(response){
			
			$('#follow').hide();
			$('#unfollow').show();
			
			
      }
 	 });
	
	
	}
	
	function unfollow_artist(){
	
	  var artist_id = document.getElementById('artist_id').value;
	  	   $.ajax({                              
		type: 'POST',
			url: "<?php echo site_base_url();?>main/unfollow_artist?artist_id="+artist_id,
		success:function(response){
			
			$('#follow').show();
			$('#unfollow').hide();
			
			
      }
 	 });
	
	
	}
</script>                 
                       
                        
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
                    	<div class="addsec">
                        	<img src="<?php echo base_url(); ?>img/googleadd4.png">
                        </div>
                        <div class="addsec">
                        	<img src="<?php echo base_url(); ?>img/googleadd4.png">
                        </div>
                        
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

<? $this->load->view("footer");?>

    <script>
	function send_message()
	{
	  //alert($("#mydiv")[0].scrollHeight);
	   var message = document.getElementById('text_message').value;
	     var artist_id = document.getElementById('artist_id').value;
		  var recorded_v_id = document.getElementById('recorded_v_id').value;
		 
		 if(message!=''){
		 
 //alert(recorded_v_id);
	   $.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/message_chat?message="+message+"&artist_id="+artist_id+"&recorded_v_id="+recorded_v_id,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#chat_sms").append('<div class="message_col"><div class="msg_thumb"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="message_top"><span class="msg_username">'+response[0]+'</span><span class="sendtime">'+response[2]+'</span><span class="sendddmmyy">'+response[3]+'</span></div><div class="<?php echo base_url(); ?>msg_body"><p>'+response[4]+'</p></div></div>');
	    document.getElementById('text_message').value='';
		
		
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type = "text/javascript">
        $(function () {
            $('#scrollToBottom').bind("click", function () {
                $('html, body').animate({ scrollTop: $(document).height() }, 1200);
                return false;
            });
            $('#scrollToTop').bind("click", function () {
                $('html, body').animate({ scrollTop: 0 }, 1200);
                return false;
            });
        });
    </script>
</body>
</html>