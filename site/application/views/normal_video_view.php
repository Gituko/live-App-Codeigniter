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



<style>
.ajax_loader{
	background: rgba(0,0,0,0.7);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    padding: 24%;
    margin: auto;
    text-align: center;
    z-index: 999999999;
    height: 100%;
}
.ajax_loader img{
	width: 10%;
    margin: auto;
    text-align: center;
}
</style>
	<!-- login -->


<!-- Signup -->

<!-- signup -->
<?php
$user_type = $this->session->userdata('type');
?>


<div id="myModal_message" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- signup Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	
         <h4>Message To <?=$atrist_details[0]['name'];?>  </h4>
         
         
  			<div class="strm_form_sec">
                                    	
                                         <textarea cols="2" rows="5" class="form-control strm_input" name="private_text" id="private_text" ></textarea>
                                  <p style="color:#F00" id="private_message_error"></p>    
                                     
                                    </div>
  			
            
		
      
      
     
      <button class="btn btn-info startbtn" onClick="private_message();"  >Send</button>
      
      
      </div>
       
    </div>

  </div>
</div>




	<? $this->load->view("header");?>
    
   <!-- <div class="ajax_loader" id="ajax_loader" style="display:none;">
    	<img src="<?=base_url()?>img/loading.gif" />
        </div>-->
    
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
               <a href="<?=$row2['advertisement_link']?>" target="_blank"> <img src="<?=site_base_url()."uploads/advertisement_image/".$picture[array_rand($picture)];?>"/></a>
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
                     <?php if($user_type=="User"){ ?>
                            <div class="follow_sec">
                                	
                            	 <div id="follow" <? if($class1!=''){?>  class="<?=$class1?>" <? }?>>
                                <a onClick="follow_artist()" style="cursor:pointer"><i class="fa fa-heart"></i><span class="gapp"></span> Follow</a>
                                 
                                </div>
                                
                                <div id="unfollow" <? if($class!=''){?> class="<?=$class?>" <? }?>> <a onClick="unfollow_artist()" style="cursor:pointer;width: 25%;"><i class="fa fa-heart"></i><span class="gapp"></span> UnFollow</a></div>
                                 <div >
                             <a  class="iframe_review" href="<?=site_base_url()?>tip_form?artist_id=<?php echo $atrist_details[0]['artist_id'];?>"><span class="gapp"></span><i class="fa fa-money" aria-hidden="true"></i> Tips</a>
                               
                               
                        <a   data-toggle="modal" data-target="#myModal_message" onclick="clear_validation_message()"><span class="gapp"></span>Message</a>
                               
                               
                               
                               
                                </div>
                                
                                
                                
                               <?php /*?>  <a onClick="follow_artist()" style="cursor:pointer"><span class="gapp"></span> Tips</a><?php */?>
                            </div>
                            
                            <?php } ?>
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
                            
                            
                            
                            
                            
                            <!--***************************artist profile***********************************-->
                            
                      <div id="result"></div>
               
                        <div class="user_details_tab">
                        	<ul class="nav nav-tabs">
                               <!-- <li ><a data-toggle="tab" href="#home">Custome Video</a></li>-->
                                <li class="active"><a data-toggle="tab" href="#menu1">User Info</a></li>
                                <li><a data-toggle="tab" href="#menu2"  onClick="return video_tab();">Videos</a></li>
                                <li><a data-toggle="tab" href="#menu3" onClick="return photo_tab();">Photos</a></li>
                                <select id="order_by"  class="order_by"  name="order">
                    <option value="">Sort By</option>
                      <option value="atoz_<?=$atrist_details[0]['artist_id'];?>" >A to Z</option>
                      <option value="ztoa_<?=$atrist_details[0]['artist_id'];?>" >Z to A</option>
                    <option value="newtoold_<?=$atrist_details[0]['artist_id'];?>" >New To Old</option>
                      <option value="oldtonew_<?=$atrist_details[0]['artist_id'];?>">Old To New </option>
                  
                    </select>
                    
                    <select id="photo_order"  class="order_by_image"  name="order">
                    <option value="">Sort By</option>
                      <option value="atoz_<?=$atrist_details[0]['artist_id'];?>" >A to Z</option>
                      <option value="ztoa_<?=$atrist_details[0]['artist_id'];?>" >Z to A</option>
                    <option value="newtoold_<?=$atrist_details[0]['artist_id'];?>" >New To Old</option>
                      <option value="oldtonew_<?=$atrist_details[0]['artist_id'];?>">Old To New </option>
                  
                    </select>
                            </ul>
                            
                            <div class="tab-content usertabcont">
                                <?php /*?><div id="home" class="tab-pane usertabs fade">
									<div class="media-wrapper">
                                <video class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/vd_image.png" preload="yes" controls="controls">
                                    <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $artist_video[0]['video_name'];?>" type="video/mp4">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $artist_video[0]['video_name'];?>" type="video/ogg">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $artist_video[0]['video_name'];?>" type="video/webm">
                                    <object data="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $artist_video[0]['video_name'];?>" width="470" height="255">
                                        <embed src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $artist_video[0]['video_name'];?>" width="470" height="255"></embed>
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
                            
                                </div><?php */?>
                                <div id="menu1" class="tab-pane usertabs fade in active">
									<div class="userareas">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 userinfo_left">
                                        	<h5>Name:</h5>
                                            <p style=" text-transform: capitalize;"><?=$atrist_details[0]['name'];?></p>
                                        </div>
                                     <?    $diff = (date('Y') - date('Y',strtotime($atrist_details[0]['birth_date'])));
   
	?>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>User age:</h5>
                                            <p><?= $diff;?></p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>User Gender:</h5>
                                            <p><?=$atrist_details[0]['sex'];?></p>
                                        </div>
                                    </div>
                                    <div class="userareas">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 userinfo_left">
                                        	<h5>Email:</h5>
                                            <p><?=$atrist_details[0]['email'];?></p>
                                        	
                                        </div>
                                    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                       	 	<h5>City:</h5>
                                            <p style=" text-transform: capitalize;"><?=$atrist_details[0]['city'];?></p>
                                        	
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                      		 <h5>State:</h5>
                                           	<p style=" text-transform: capitalize;"><?=$atrist_details[0]['state'];?></p>
                                        	
                                        </div>
                                    </div>
                                    <div class="userareas">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 userinfo_left">
                                        	<h5>Video Tags</h5>
                                            <p><?=$atrist_details[0]['artist_tag'];?></p>
                                        </div>
                                    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>Gender:</h5>
                                            <p><?=$atrist_details[0]['sex'];?></p>
                                        </div>
                                        <?php /*?><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>Category Type:</h5>
                                            <?php
													$category=$atrist_details[0]['category_type'];
													$category_name=$this->module->get_category_name($category);
													?>
                                            
                                            
                                            <p><?php echo $category_name[0]['category_name'];?></p>
                                        </div><?php */?>
                                    </div>
                                    
                                    <div class="userareas">
                                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userinfo_left">
                                        	<h5>About Me:</h5>
                                            <p><?=$atrist_details[0]['about_me'];?></p>
                                        </div>
                                   
                                       
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane usertabs fade">
                                
                                <div class="f_order">
                    
                  
                    
                    </div>
                                
                                
                                
                                
                                
                                
                                   <div class="vscroller vscroller4">
                                     <div class="vscroller-content">
                                     
                                     
                                     <div id="artist_video">
                                     
                                     
                                     
									<div class="userareas" id="result_video">
                                
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
                            
                            <?
							$j++;
							
							}
?>
</div>

</div>
                                     </div>

                                    </div>
                                   
                                    
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                <div id="menu3" class="tab-pane usertabs fade">
                                
                                
                                
                                
                                
                                
                                
                                
                                   <div class="vscroller vscroller3">
                                     <div class="vscroller-content">
                                    
                                    <div id="sort_photo"> 
									<div class="userareas" id="result_photo">
                                 

                        		
                                       <?php foreach($artist_album as $row){ ?>	
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-xs-3 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                       <?php if($row['image']!=''){ 
									   
									   
									   
									   ?>
                                       
                                    
                        <a href="" ><img src="<?php echo site_base_url(); ?>uploads/user_photo/<?php echo $row['image']; ?>" width="100%" height="100%" style="max-width:100%;" alt=""></a>
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
                            
                           </div>
                            
                            </div>
                 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
            
                                 
                        
                        
                        
                        
                        
                        
                        <div class="details_video">
							
                            <div class="messagearea">
                           		<h3>Recorded Videos<select id="recorded_sort"  class="order_by_title"  name="order">
                    <option value="">Sort By</option>
                      <option value="atoz_<?=$atrist_details[0]['artist_id'];?>" >A to Z</option>
                      <option value="ztoa_<?=$atrist_details[0]['artist_id'];?>" >Z to A</option>
                    <option value="newtoold_<?=$atrist_details[0]['artist_id'];?>" >New To Old</option>
                      <option value="oldtonew_<?=$atrist_details[0]['artist_id'];?>">Old To New </option>
                  
                    </select>
                    </h3>
                                
                                
                                 <div class="f_order">
                    
                  
                    
                    </div>
                                
                                
                          
                              <div class="vscroller">
                        		<div class="vscroller-content">
                                <div id="record_video">
                                <div class="strm_holder" id="result_recorded">
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
                                       <? 
							  $i=1;
							 foreach($tag as $row2){ 
							
							 ?>
							 <a href="<?=site_base_url()?>video_category?tag=<?=$row2?>" class="tag" title="<?=$row2?>">
							 <?=$row2?><? if($i<count($tag)){ echo " , "; } ?>
                             </a>
                            <?
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
                            </div>
                                 </div>
                                 
                                  </div>
                         
						   
                            </div>
                        </div>
                        
                            
                          <!--********************************************************************--> 
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
       <script>
function follow_artist(){
	
		<?php
				if($this->session->userdata("is_logged_in")!="TRUE"  ){
				
				
				?>
				//alert("Please login to add this product in your wishlist!!!");
				alert("Please login to like this video!!!");
				<? } else{
					
					?>
	
	
	
	  var artist_id = document.getElementById('artist_id').value;
	  	   $.ajax({                              
		type: 'POST',
			url: "<?php echo site_base_url();?>main/follow_artist?artist_id="+artist_id,
		success:function(response){
			
			$('#follow').hide();
			$('#unfollow').show();
			
			
      }
 	 });
	
	<? } ?>
	
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
                              <?php
                                             if(($this->session->userdata('is_logged_in')=='1') && ($user_type=="User")  || ($related_video[$h]['recorded_video']=="0"))
						{
							
                        ?>   
                               
                                           
                                		<a href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$related_video[$h]['recorded_v_title']))._.$related_video[$h]['recorded_v_id']?>"><img src="<?php echo base_url(); ?>img/img1.png" alt="" ></a>
                                         
                                            	
                                                
                          <?php
						}
						
						else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist_related()"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a> 
                 <?
				}
						else{
				
				
			?>
							
							
						<a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a>
                        
                        
                        <?php
			}
			?>                         
                                                
                                                
                                            
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
                         
                              <?php
						            $image_right=$this->module->get_advertisement_videodetail('video_detail_right');
									if(!empty($image_right))
									{
	                            	foreach($image_right as $row3)
	                            	{
	                	
                                     $picture1[] = $row3['advertisement_image'];
									}
					          ?>
                             <a href="<?=$row3['advertisement_link']?>" target="_blank"> <img src="<?=site_base_url()."uploads/advertisement_image/".$picture1[array_rand($picture1)];?>"/></a>
                             <? 
									}
                             //  print_r($picture1);
				              ?>
                        	<!--<img src="<?php echo base_url(); ?>img/googleadd4.png">-->
                        </div>
                        <?php if(!empty($image_right)) { ?>
                        <div class="addsec">
                        	 <a href="<?=$row3['advertisement_link']?>" target="_blank"><img src="<?=site_base_url()."uploads/advertisement_image/".$picture1[array_rand($picture1)];?>"/></a>
                        </div>
                        <?php } ?>
                    
                    
           <!-------------------------------------------------------------------->         
                    
                     
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
                           
                         
                    
                    
                    
                    
                    
                    
                        
                        
                 <!---------------------------------------------------------------------------------->       
                        
                        
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
                             <a href="<?=$row3['advertisement_link']?>" target="_blank"> <img src="<?=site_base_url()."uploads/advertisement_image/".$picture2[array_rand($picture2)];?>"/></a>
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
function private_message()
	{ 
	 var artist_id = document.getElementById('artist_id').value;
    var message = document.getElementById('private_text').value;
    
	//alert(message);
	 if(message!=''){
	
	
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/add_private_message?artist_id="+artist_id+"&message="+message,
		success:function(response){
	    // $('#like').hide();
		//alert(response);
			//$('#unlike').show();
		 location.reload();
	
      }
 	 });
	
	 }
	 else
	 {
		$('#private_message_error').html("Please Enter Message."); 
	 }
	

	
	}
    </script>


<script>
function clear_validation_message(){
	$('#private_message_error').html('');
	document.getElementById('private_text').value='';
		
	}







</script>
















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
			//alert(response);
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
    
   
        
        
   <!---------------------------------------------------------------------------------------------------------->     
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


 <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"40%", height:"50%"});
				
			});
		</script>  
        
        
        <script>
			$(document).ready(function(){
			
				$(".iframe_review123").colorbox({iframe:true, width:"40%", height:"50%"});
				
			});
		</script>  







 <script>
		   
		   
		  $("#order_by").change(function(){

//alert($(this).val());
//alert("<?=base_url()?>ssttate");
if($(this).val()!=''){
$.get("<?=site_base_url()?>main/sorting_videos",{sort_id:$(this).val()},function(result){


//alert(result);
$("#artist_video").html(result);
$("#result_video").hide();

})

}
});
			  
			   </script>  


<script>
		   
		   
		  $("#photo_order").change(function(){

//alert($(this).val());
//alert("<?=base_url()?>ssttate");
if($(this).val()!=''){
$.get("<?=site_base_url()?>main/sorting_photos",{sort_id:$(this).val()},function(result){


//alert(result);

$("#sort_photo").html(result);
$("#result_photo").hide();
//$("#artist_video").html(result);
//$("#result_video").hide();recorded_sort

})
}

});
			  
			   </script>

<script>
function video_tab()
{
	$(".order_by").show();
	$(".order_by_image").hide();
	
	
			
}
</script>


<script>
function photo_tab()
{
	$(".order_by_image").show();
	
	$(".order_by").hide();
			
}
</script>










<script>
		   
		   
		  $("#recorded_sort").change(function(){

//alert($(this).val());
//alert("<?=base_url()?>ssttate");
if($(this).val()!=''){

$.get("<?=site_base_url()?>main/sorting_recorded",{sort_id:$(this).val()},function(result){


//alert(result);

$("#record_video").html(result);
$("#result_recorded").hide();
//$("#artist_video").html(result);
//$("#result_video").hide();recorded_sort

})

}
});
			  
			   </script>



        
        
        
        
        
        
        
        
 <!--------------------------------------------------------------------------------------------------------------------->       
        
        
        
</body>
</html>