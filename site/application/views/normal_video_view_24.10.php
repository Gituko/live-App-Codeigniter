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
   <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"50%", height:"100%"});
				
			});
		</script>  
</head>
<body>
	<!-- login -->


<!-- Signup -->

<!-- signup -->
<?php
$user_type = $this->session->userdata('type');
?>
	<? $this->load->view("header");?>
    <input type="hidden" name="user_type" id="user_type" value="<?=$user_type?>">
    
<section id="videodetail">
	<div class="worksection">
		<div class="container-full">
        	<div class="container">
        		<div id="foo" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 video_detaile_left_body">
                	<div class="details_body">
                    	<div class="google_add3">
                        
                        
                         <?php
						 $image=$this->module->get_advertisement_videodetail('video_detail_top');
						 if(!empty($image))
								   {
	                          	foreach($image as $row2)
	                            	{
	                	
                            $picture[] = $row2['advertisement_image'];
									}
					   ?>
               <a href="<?=$row2['advertisement_link']?>" target="_blank"><img src="<?=site_base_url()."uploads/advertisement_image/".$picture[array_rand($picture)];?>"/></a>
                         <? 
								   }
                       // print_r($picture);
				         ?>
                    
                        	
                        </div>
                        
                        <div class="video_user_detail">
                        	<div class="userimage">
                            	
                               <?php if($artist_details[0]['image']!=''){
	 
	 ?>
                          <a href="<?php echo site_base_url(); ?>artist_detail/<?=urlencode(str_replace(" ","_",$artist_details[0]['name']))._.$artist_details[0]['artist_id']?>">   <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $artist_details[0]['image']; ?>" ></a>
                                          <?php } else { ?>
 <a href="<?php echo site_base_url(); ?>artist_detail/<?=urlencode(str_replace(" ","_",$artist_details[0]['name']))._.$artist_details[0]['artist_id']?>"><img src="<?php echo base_url(); ?>img/myimage2.png" ></a>
       <?php } ?> 
                                
                                
                                
                            </div>
                            <div class="video_sername">
                            	<h4><?=$artist_details[0]['name'];?></h4>
                                 <input type="hidden" name="artist_id" id="artist_id" value="<?=$artist_details[0]['artist_id']?>">
                                 <input type="hidden" name="artist_id" id="recorded_v_id" value="<?=$custom_video[0]['video_id']?>">
                                 
                                 
                            </div>
                          <?php /*?>  <?php 
							$user_id=$this->session->userdata('user_id');
							$artist_follow=$this->module->get_artist_follow($artist_details[0]['artist_id'],$user_id);
							if(!empty($artist_follow)){
								$class='';
								$class1="hide_follow";
								}else{
									
									$class1='';
								$class="hide_follow";
									}
							
							
							?><?php */?>
                            
<style>
.hide_follow{
	display:none;
	}
</style>
                            <div class="follow_sec">
                            	
                            	 <div id="follow" <? if($class1!=''){?>  class="<?=$class1?>" <? }?>>
                                <a onClick="follow_artist()" style="cursor:pointer"><i class="fa fa-heart"></i><span class="gapp"></span> Follow</a>
                                 
                                </div>
                                
                                 
                                
                                
                                
                                
                                <!--<div id="unfollow" <? if($class!=''){?> class="<?=$class?>" <? }?>> <a onClick="unfollow_artist()" style="cursor:pointer;width: 34%;"><i class="fa fa-heart"></i><span class="gapp"></span> UnFollow</a></div>-->
                                <div>
                                <a  class="iframe_review" href="<?=site_base_url()?>tip_form?artist_id=<?php echo $artist_details[0]['artist_id'];?>"><span class="gapp"></span><i class="fa fa-money" aria-hidden="true"></i> Tips</a>
                                	
                                </div>
                                <div >
                               
                               
                                </div>
                                
                                
                                
                                
                            </div>
                        </div>
                        
                        <div class="details_video">
                        	<div class="media-wrapper">
                                <video class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/vd_image.png" preload="yes" controls controlsList="nodownload">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['video_name'];?>" type="video/mp4">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['video_name'];?>" type="video/ogg">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $custom_video[0]['video_name'];?>" type="video/webm">
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
                                	<h4><?php echo $custom_video[0]['video_title'];?></h4>
                                    <p>Overview:<span class="gapp"></span> <a href="#"><?php echo $custom_video[0]['video_overview'];?></a></p>
                                    <p>Tag Words:<span class="gapp"></span> <a href="#"><?php echo $custom_video[0]['video_tags'];?></a></p>
                                </div>
                                
                                
                                 <?php
							$count_video=count($this->module->count_view_videos_normal($custom_video[0]['video_id']));
							$count_likes=count($this->module->count_like_videos_normal($custom_video[0]['video_id']));
							?>
                                
                                
                                
                                
                                
                                
                                <div class="view"><i class="fa fa-eye"></i><span class="gapp"></span> <a href="#"><?php echo $count_video;?></a></div>
                                 <div class="view"><span class="gapp"></span> <a href="#"><?php echo $count_likes;?></a>&nbsp;<i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
                                
                                <?php
								$user_id = $this->session->userdata('user_id');
								$like_video= $custom_video[0]['video_id'];
								$checking_like=$this->module->check_like_video_normal($user_id,$like_video);
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
                                    <div class="view"  ><span class="gapp"></span> <a href="#" onClick="like_video(<?php echo $custom_video[0]['video_id'];?>,<?php echo $custom_video[0]['artist_id'];?>)"><strong>like</strong></a></div>
                                 <?php
								}
								?>
                                
                                
                                
                                
                                
                                
                                
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
                             
                               
                                           
                                		<a href="<?=site_base_url();?>normal_video_view/<?=urlencode(str_replace(" ","_",$related_video[$h]['video_title']))._.$related_video[$h]['video_id']?>"><img src="<?php echo base_url(); ?>img/img1.png" alt="" ></a>
                                         
                                            	
                                                
                            
                                                
                                                
                                            
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5><?=$related_video[$h]['video_title'];?></h5>
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
                         
                              <?php
						            $image_right=$this->module->get_advertisement_videodetail('video_detail_right');
									if(!empty($image_right))
									{
	                            	foreach($image_right as $row3)
	                            	{
	                	
                                     $picture1[] = $row3['advertisement_image'];
									}
					          ?>
                            <a href="<?=$row3['advertisement_link']?>" target="_blank"><img src="<?=site_base_url()."uploads/advertisement_image/".$picture1[array_rand($picture1)];?>"/></a>
                             <? 
									}
                             //  print_r($picture1);
				              ?>
                        	<!--<img src="<?php echo base_url(); ?>img/googleadd4.png">-->
                        </div>
                        <?php if(!empty($image_right)) { ?>
                        <div class="addsec">
                        	 <a href="<?=$row3['advertisement_link']?>" target="_blank"> <img src="<?=site_base_url()."uploads/advertisement_image/".$picture1[array_rand($picture1)];?>"/></a>
                        </div>
                        <?php } ?>
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
                                    	<!--<span class="rsd"><strong>Age:</strong><?=$diff?></span>--><span class="rsd"><strong>Viewer:</strong> <?=$row3['total']?></span> <span class="rsdbtn"><a href="<?=site_base_url();?>artist_detail/<?=urlencode(str_replace(" ","_",$row3['name']))._.$row3['artist_id']?>">View</a></span>
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
<div class="google_add_home">
                    <?php
						            $image_bottom=$this->module->get_advertisement_videodetail('video_detail_bottom');
									if(!empty($image_bottom)) {
	                            	foreach($image_bottom as $row3)
	                            	{
	                	
                                     $picture2[] = $row3['advertisement_image'];
									}
					          ?>
                             <a href="<?=$row3['advertisement_link']?>" target="_blank">  <img src="<?=site_base_url()."uploads/advertisement_image/".$picture2[array_rand($picture2)];?>"/></a>
                             <? 
									}
                             //  print_r($picture1);
				              ?>
                       </div>
                       
<style>
.google_add_home img {
    width: 100%;
    MARGIN-LEFT: 248PX;
    border: 1px solid #dedede;
}
.google_add_home {
    width: 70%;
    /* border: 1px solid #dedede; */
    /* padding-left: 181px; */
}
</style>
<? $this->load->view("footer");?>

    <script>
	function send_message()
	{
	  //alert($("#mydiv")[0].scrollHeight);
	   var message = document.getElementById('text_message').value;
	     var artist_id = document.getElementById('artist_id').value;
		  var recorded_v_id = document.getElementById('recorded_v_id').value;
		  
		    var user_type = document.getElementById('user_type').value;
		 
		 if(message!=''){
		 
		<?php
				if($this->session->userdata("is_logged_in")!="TRUE" ){
				
				
				?>
		 alert('User Please Login To Comment');
		   document.getElementById('text_message').value='';
		 <? } else{?>
		 
		 
		 
		 if(user_type!='User')
		 {
			 
			 alert('Only a user can comment');
			   document.getElementById('text_message').value='';
		 }
		 
		 else{
		 
		 
 //alert(recorded_v_id);
	   $.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/message_chat_normal_video?message="+message+"&artist_id="+artist_id+"&recorded_v_id="+recorded_v_id,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#chat_sms").append('<div class="message_col"><div class="msg_thumb"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="message_top"><span class="msg_username">'+response[0]+'</span><span class="sendtime">'+response[2]+'</span><span class="sendddmmyy">'+response[3]+'</span></div><div class="<?php echo base_url(); ?>msg_body"><p>'+response[4]+'</p></div></div>');
	    document.getElementById('text_message').value='';
		
		
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

  <script>
function artist_related(){
	alert("This feature is for only Viewers,not for Streamers")
	}
</script> 



 <script>
function like_video(video_id,artist_id)
{
	//alert(favourite_id);
	<?php
				if($this->session->userdata("is_logged_in")!="TRUE" ){
				
				
				?>
				//alert("Please login to add this product in your wishlist!!!");
				alert("Please login to like this video!!!");
				<? } else{?>
	
	
	
	
	
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/like_video_normal?video_id="+video_id+"&artist_id="+artist_id,
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
		url: "<?php echo site_base_url();?>main/unlike_video_normal?like_id="+like_id,
		success:function(response){
	    // $('#like').hide();
		//alert(response);
			//$('#unlike').show();
		 location.reload();
	
      }
 	 });
	
			
}
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
    
    <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"40%", height:"50%"});
				
			});
		</script>  
</body>
</html>