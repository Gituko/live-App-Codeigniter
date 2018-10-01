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
<input type="hidden" name="user_type" id="user_type" value="<?=$user_type?>">

	<!-- login -->

<!-- login -->

<!-- Signup -->

<!-- signup -->

	<?php $this->load->view("header.php"); ?>
    
        <?  
		
	$main_array = array(); //Your array that you want to push the value into

		$emoji_details=$this->module->geting_emoji();
	 foreach($emoji_details as $row){ 	
	 $key=$row['emoji_text'];
                              
		$my_smilies[$key]='<img src='.site_base_url().'uploads/emoji_image/thumb/thumb_'.$row['emoji_image'].' alt="" />';
			 }
			 
			//print_r($my_smilies ) ;
 

$segement=$this->uri->segment(2);

		 	
			
$category = explode('_',$segement);
$v_id= $category[(count($category)-1)];

	?>
    <input type="hidden" id="v_id" value="<?=$v_id?>"/>
    <input type="hidden" id="limit" value=""/>
     <input type="hidden" id="limit1" value=""/>
      <input type="hidden" id="m_id" value=""/>
    

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
                                
                                 <div >
                             <a  class="iframe_review" href="<?=site_base_url()?>tip_form?artist_id=<?php echo $atrist_details[0]['artist_id'];?>"><span class="gapp"></span><i class="fa fa-money" aria-hidden="true"></i> Tips</a>
                               
                                </div>
                                
                                
                                <div id="unfollow" <? if($class!=''){?> class="<?=$class?>" <? }?>> <a onClick="unfollow_artist()" style="cursor:pointer;width: 34%;"><i class="fa fa-heart"></i><span class="gapp"></span> UnFollow</a></div>
                               <?php /*?>  <a onClick="follow_artist()" style="cursor:pointer"><span class="gapp"></span> Tips</a><?php */?>
                            </div>
                            
                            
                            
                            
                        </div>
                        
                        <div class="details_video">
                        	<div class="media-wrapper">
                                <video class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/vd_image.png" preload="yes" controls controlsList="nodownload">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/mp4">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/ogg">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" type="video/webm">
                                    <?php /*?><object data="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" width="470" height="255">
                                    <embed src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['recorded_video_name'];?>" width="470" height="255">
                                    </object><?php */?>
                                </video>
                            </div>
                            <div class="vd_bottom">
                            	<div class="thumb_usr">
                                	<img src="<?php echo base_url(); ?>img/user2.png" alt="">
                                </div>
                                <div class="vb_usrdetail">
                                	<h4><?php echo $custom_video[0]['recorded_v_title'];?></h4>
                                    <p>Overview:<span class="gapp"></span> <a href="#"><?php echo $custom_video[0]['recorded_v_overview'];?></a></p>
                                     <p>Tag Words:<span class="gapp"></span> <a href="#"><?php echo $custom_video[0]['video_tags'];?></a></p>
                                </div>
                               <!-- <div class="viewshare_link">
                                	<div class="share"><a href="#"><i class="fa fa-share"></i></a></div>
                                </div>-->
                            <?php
							$count_video=count($this->module->count_view_videos($custom_video[0]['recorded_v_id']));
							$count_likes=count($this->module->count_like_videos($custom_video[0]['recorded_v_id']));
							?>
                            
                            
                                <div class="view"><i class="fa fa-eye"></i><span class="gapp"></span> <a href="#"><?php echo $count_video;?></a></div>
                                
                                 <div class="view"><span class="gapp"></span> <a href="#"><?php echo $count_likes;?></a>&nbsp;<i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
                                
                               <?php
								$user_id = $this->session->userdata('user_id');
								$like_video= $custom_video[0]['recorded_v_id'];
								$checking_like=$this->module->check_like_video($user_id,$like_video);
								//print_r($checking_like);
								//die;
								if(!empty($checking_like))
								{
								?>
                                 
                                  <div class="view" ><span class="gapp"></span> <a href="#" onClick="un_like(<?php echo $checking_like[0]['id'];?>)"><strong>Unlike</strong></a></div>
                                 
                                  <?php
								}
								else{
								?>
                                    <div class="view"  ><span class="gapp"></span> <a href="#" onClick="like_video(<?php echo $custom_video[0]['recorded_v_id'];?>,<?php echo $custom_video[0]['artist_id'];?>)"><strong>like</strong></a></div>
                                 <?php
								}
								?>
                                
                            </div>
                            
                            <div class="messagearea">
                           		<h3>Messages</h3>
                                <? $messages_chat1= $this->module->get_messages_chat_lmt($v_id,count($messages_chat));?>
                                <input type="hidden" value="<?=count($messages_chat)-50;?>" id="old_message"/>
                              <div class="vscroller">
                        		<div class="vscroller-content" id="message_scroll">
                                <? if(count($messages_chat)>50){ ?>
                                 <a id="old_message_chat_hide"  onClick="get_old_message_chat()">See more message</a>
                                 <? }?>
                                  <div class="old_message1" id="account_table1">
                                  </div>
                                <div id="message_chat">

                                
                                 <?php
								// print_r($messages_chat);
							 if($messages_chat1!='')
							 {
								 foreach($messages_chat1 as $row)
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
                                
                                <?
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
<script>
function follow_artist(){
	
	  var artist_id = document.getElementById('artist_id').value;
	  	   $.ajax({                              
		type: 'POST',
			url: "<?php echo site_base_url();?>main/follow_artist?artist_id="+artist_id,
		success:function(response){
			$('#follow').hide();
			$('#unfollow').hide();
			
			
      }
 	 });
	
	
	}
</script>
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
                             <a id="old_chat_hide" style="cursor:pointer; display:none" onClick="get_old_message()">See more message</a>
                             <div class="old" id="account_table">
                             </div>
                              <div id="chat_sms">
                             	
                            
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
                                	<textarea class="form-control chatinputarea content"  rows="1" onKeyDown="if (event.keyCode == 13) { return send_message(); }"  id="text_message" placeholder="Your text here..." ></textarea>
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
		  var user_type = document.getElementById('user_type').value;
		 
		 if(message!=''){
			 
			 
		<?php
				if($this->session->userdata("is_logged_in")!="TRUE" ){
				
				
				?>
		 alert('User Please Login To Comment');
		   document.getElementById('text_message1').value='';
		 <? } else{?>
		 
		 
		 
		 if(user_type!='User')
		 {
			 
			 alert('Only a user can comment');
			   document.getElementById('text_message1').value='';
		 }
		 
		 else{	 
			 
			 
			 
			 
			 
			 
			 
			 
		 
 //alert(recorded_v_id);
	   $.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/message_chat?message="+message+"&artist_id="+artist_id+"&recorded_v_id="+recorded_v_id,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#message_chat").append('<div class="message_col"><div class="msg_thumb"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="message_top"><span class="msg_username">'+response[0]+'</span><span class="sendtime">'+response[2]+'</span><span class="sendddmmyy">'+response[3]+'</span></div><div class="<?php echo base_url(); ?>msg_body"><p>'+response[4]+'</p></div></div>');
	    document.getElementById('text_message1').value='';
		
		
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
	  }
	 <? } ?>
	 
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
function like_video(video_id,artist_id)
{
	//alert(favourite_id);
	<?php
				if($this->session->userdata("is_logged_in")!="TRUE"){
				
				
				?>
				//alert("Please login to add this product in your wishlist!!!");
				alert("Please login to like this video!!!");
				<? } else{?>
	
	
	
	
	
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/like_video?video_id="+video_id+"&artist_id="+artist_id,
		success:function(response){
	    // $('#like').hide();
			//$('#unlike').show();
		 location.reload();
	
      }
 	 });
	
			<? } ?>
}
</script>

   
   
   
    <script>
function un_like(like_id)
{
	//alert(like_id);
	
	
	
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/unlike_video?like_id="+like_id,
		success:function(response){
	    // $('#like').hide();
		//alert(response);
			//$('#unlike').show();
		 location.reload();
	
      }
 	 });
	
			
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
			
	
	  
	    if ($('#dropchat2').is(':visible')) {
            // some code when content is hidden
			
			document.getElementById("chatbttn2").click();
        }
	 
	    document.getElementById('text_message').value='';
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
		  }
	   
	   
	   
	
}
	
	</script>
   <script type="text/javascript">
   function get_old_message()
   {
	   var v_id = document.getElementById('v_id').value;
	    var limit = document.getElementById('limit1').value;
		if(limit==''){
			limit = document.getElementById('limit').value;
			}
	  // alert(limit);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_old_message?v_id='+v_id+'&limit='+limit,
		   
		   success:function(response){
			    var data = response.split('&&');
			  
			   document.getElementById('limit1').value=data[1]
			 // alert(data[0]);
			   $(".old").prepend(data[0]);
			   if(data[1]==0){
				   $('#old_chat_hide').hide();
				   
				   }
			 //  document.getElementById('chat_sms').innerHTML=response;
			  
		   }
		   });

			
   }
   
   
      function get_old_message_chat()
   {
	   var v_id = document.getElementById('v_id').value;
	    var limit = document.getElementById('old_message').value;
	
	  // alert(limit);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_messsage_chat?v_id='+v_id+'&limit='+limit,
		   
		   success:function(response){
			    var data = response.split('&&');
			  
			   document.getElementById('old_message').value=data[1]
			  alert(data[0]);
			   $(".old_message1").prepend(data[0]);
			   if(data[1]<50){
				   $('#old_message_chat_hide').hide();
				   
				   }
			 //  document.getElementById('chat_sms').innerHTML=response;
			  
		   }
		   });

			
   }
						
   </script> 
    
    
    <script type="text/javascript">
   function get_messsage_chat()
   {
	   var v_id = document.getElementById('v_id').value;
	   
	   
	//   alert(v_id);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_messsage_chat?v_id='+v_id,
		   
		   success:function(response){
			 // alert(response);
			   document.getElementById('message_chat').innerHTML=response;
			  
		   }
		   });

			
   }
						
   </script>
    
     <script type="text/javascript">
   function get_chats()
   {
	   var v_id = document.getElementById('v_id').value;
	//  alert(v_id);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	    var e = document.getElementById("account_table");
	  if ( e.hasChildNodes() )
		{
			 document.getElementById('account_table').innerHTML='';
			  document.getElementById('limit1').value='';
		}
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_chats?v_id='+v_id,
		   
		   success:function(response){
			 //alert(response);
			  // $("#chat_sms").append(response);
			  var data = response.split('&&');
			   document.getElementById('chat_sms').innerHTML=data[0];
			   //alert(data[0]);
			   document.getElementById('limit').value=data[1];
			   if(data[1]>0){
				    $('#old_chat_hide').show(); 
				   
				   }
			    document.getElementById('m_id').value=data[2];
			   
			  
		   }
		   });

			
   }
   
    function get_chats_new()
   {
	   var v_id = document.getElementById('v_id').value;
	    var limit = document.getElementById('m_id').value;
	//  alert(v_id);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_chats_new?v_id='+v_id+'&limit='+limit,
		   
		   success:function(response){
			 //alert(response);
			  // $("#chat_sms").append(response);
			  var data = response.split('&&');
			   document.getElementById('chat_sms').innerHTML=data[0];
			   //alert(data[0]);
			 //  document.getElementById('limit').value=data[1]
			   
			  
		   }
		   });

			
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
    
   <script>
   
   window.onload=function(){
	   get_chats();
	   
   setInterval(function(){ get_chats_new(); }, 300);
    setInterval(function(){ get_chats(); }, 300000);
   // setInterval(function(){ get_messsage_chat(); }, 300);
   
   
    
   }
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


 <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"40%", height:"50%"});
				
			});
		</script>  




<style>
.chat_details img{
	    
    display: inline-block !important;
    height: auto;
	}
	.chat_details_artist img{
	    
    display: inline-block !important;
    height: auto;
	}
</style>
</body>
</html>