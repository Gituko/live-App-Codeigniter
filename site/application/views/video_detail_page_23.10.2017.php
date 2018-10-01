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
 <style>
#dropchat {
     display: block; 
}
</style>   
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
<?php

 $user_id = $this->session->userdata('user_id');
 $user_type = $this->session->userdata('type');
 
 $user_information=$this->module->user_information_get($user_id);

  $subscription=$user_information[0]['subscription'];


?>
<input type="hidden" name="user_type" id="user_type" value="<?=$user_type?>">

	<!-- login -->

<!-- login -->

<!-- Signup -->

<!-- signup -->
<!--<div class="ajax_loader" id="ajax_loader" style="display:none;">
    	<img src="<?=base_url()?>img/loading.gif" />
        </div>-->




	<?php $this->load->view("header.php"); ?>
    
        <?  
		
		
		
		
		
		
	$main_array = array(); //Your array that you want to push the value into

		$emoji_details=$this->module->geting_emoji();
	 foreach($emoji_details as $row){ 	
	 $key=$row['emoji_text'];
         if($row['emoji_type']=='FREE'){
			$my_smilies_data1[$key]='<img src='.site_base_url().'uploads/emoji_image/thumb/thumb_'.$row['emoji_image'].' alt="" />'; 
			 }                     
		$my_smilies_data[$key]='<img src='.site_base_url().'uploads/emoji_image/thumb/thumb_'.$row['emoji_image'].' alt="" />';
			 }
			 
			
			
 

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
                            	<a href="<?php echo site_base_url(); ?>artist_detail/<?=$atrist_details[0]['name'];?>_<?=$atrist_details[0]['artist_id'];?>"> <?php if($atrist_details[0]['image']!=''){
	 
	 ?>
                                		 <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $atrist_details[0]['image']; ?>" >
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png" >
       <?php } ?></a>
                            </div>
                            
                            
                            <input type="hidden" name="name" id="artist_id" value="<?=$atrist_details[0]['artist_id'];?>">
                            <input type="hidden" name="artist_id" id="recorded_v_id" value="<?=$custom_video[0]['recorded_v_id']?>">
                            
                            <div class="video_sername">
                            	<h4><?=$atrist_details[0]['name'];?></h4>
                            </div>
                           <?php 
						   
							$user_id=$this->session->userdata('user_id');
						
							$artist_follow=$this->module->get_artist_follow($atrist_details[0]['artist_id'],$user_id);
							
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
                                
                                <div id="unfollow" <? if($class!=''){?> class="<?=$class?>" <? }?>> <a onClick="unfollow_artist()" style="cursor:pointer;width: 34%;"><i class="fa fa-heart"></i><span class="gapp"></span> UnFollow</a></div>
                                 <div >
                             <a  class="iframe_review" href="<?=site_base_url()?>tip_form?artist_id=<?php echo $atrist_details[0]['artist_id'];?>"><span class="gapp"></span><i class="fa fa-money" aria-hidden="true"></i> Tips</a>
                               
                                </div>
                                
                                
                                
                               <?php /*?>  <a onClick="follow_artist()" style="cursor:pointer"><span class="gapp"></span> Tips</a><?php */?>
                            </div>
                            
                            <?php } ?>
                            
                            
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
                                    <p>Overview:<span class="gapp"></span> <a><?php echo $custom_video[0]['recorded_v_overview'];?></a></p>
                                      <?php $tag = explode(',',$custom_video[0]['video_tags']); ?>
                                    <p>Tag Words:<span class="gapp"></span>  <? 
							  $i=1;
							 foreach($tag as $row1){ 
							
							 ?>
							 <a href="<?=site_base_url()?>video_category?tag=<?=$row1?>" class="tag" title="<?=$row1?>">
							 <?=$row1?><? if($i<count($tag)){ echo " , "; } ?>
                             </a>
                            <?
							 $i=$i+1;
							} ?> </p>
                                    
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
                            
          <!-------------------------------------------------------------->
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
                        
                                
                            
                            
                  <!---------------------------------------------------------------->          
                        </div>
                        
                        
                      
                    </div>
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
									if($user_type=='User' && $this->session->userdata("is_logged_in")=="TRUE")
									{
									if($subscription!='Free' )
									{
									
									?>
                                    <button id="chatbttn2" data-toggle="tooltip" data-placement="top" title="Chat Icons" class="chaticon"></button>
                                    <?php
									}else{
										
									$my_smilies_data= $my_smilies_data1;	
									?>
                                       <button id="chatbttn2" data-toggle="tooltip" data-placement="top" title="Chat Icons" class="chaticon"></button>
                                    <? } 
									
									}
									?>
                                    
                                    <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message()"><i class="fa fa-location-arrow"></i></button>
                                
                                </div>
                                
                                <div id="dropchat2" class="chat_icons">
                                <?php
                                foreach($my_smilies_data as $key=>$data) {
									?>
                                    <div class="chat_ico" onClick="emoji('<?=$key?>')"><?php echo $data ?> </div>
								 
								   <?php
								  }
								  ?>
                                	
                                </div>
                                <div id="dropchat" class="chat_textbox" >
                                	<textarea class="form-control chatinputarea content" onClick="check_login_fun('Chat')"  rows="1" onKeyDown="if (event.keyCode == 13) { return send_message(); }"  id="text_message" placeholder="Your text here..." ></textarea>
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
	
function check_login_fun(id){
	 var user_type = document.getElementById('user_type').value;
	<?php
				if($this->session->userdata("is_logged_in")!="TRUE" ){
				
				
				?>
		 alert('User Please Login To '+id);
		 
		 <? } else{?>
		 
		 
		 
		 if(user_type!='User')
		 {
			 
			 alert('Only a user can comment '+id);
			 
		 }
		 
		 <? } ?>
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

<!--************************************************************-->

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












   


    
    
 <script type="text/javascript">
       
$(document)
  .ajaxStart(function () {
	//alert('ajaxstart');	
	//$("#loading").html("Uploading....");
document.getElementById('ajax_loader').style.display='block';
  })
  .ajaxStop(function () {
//$("#loading").html("");
					//  alert('ajaxstop');	
 $(".ajax_loader").hide();		
  });

       


    </script>
        
        
        
       


<!--*************************************************************************-->
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