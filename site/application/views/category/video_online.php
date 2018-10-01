<style>
    div#videoContainer{
        padding-right: 0px;
        padding-left: 0px;
        height: 91vh;
        background: black;
    }
    div#banerTop{
        height: 18.2vh;        
    }
    div#chatc{
        padding-right: 0px;
        padding-left: 0px;
        background: blue;        
        height: 72.8vh;
        overflow: hidden;
    }
    
</style>

<link rel="stylesheet" href="<?php echo base_url(); ?>libreriasJS/video_player/css/style.css">
<?php
$this->load->helper("Emoji");
$emoji=new Emoji();
$user_type = $this->session->userdata('type');
$emoji_details=$this->module->geting_emoji();
	 foreach($emoji_details as $row){ 	
	 $key=$row['emoji_text'];
                              
		$my_smilies_data[$key]='<img src="'.site_base_url().'uploads/emoji_image/thumb/thumb_'.$row['emoji_image'].'" />';
			 }
$user_type = $this->session->userdata('type');
?>
<input type="hidden" name="user_type" id="user_type" value="<?php echo $user_type;?>">
<div class="container-fluid">
    <div class="row" >
        <div class="col-lg-8 divVideo" id="advertisementVideo" style="display: none;" >
            <!--width: 100%; height: 91vh; z-index: 10; position:absolute; top:0px-->
<!--            <video   id="video_baner" style="width: 100%;"  controlsList="nodownload">
                         
		        <source src="<?php echo site_base_url(); ?>site/libreriasJS/video_player/video/video.mp4" type="video/mp4"> 
		        
		        <p>
		          Your browser doesn't support HTML5 video.
		          <a href="video/video.mp4">Download</a> the video instead.
		        </p>
            </video>
            <div class="skip_video_advertisement"  style="">Skip video >></div>-->
        </div>
        <div class="col-md-8" style="padding-left: 0px; padding-right: 0px;">
            
            <div class="col-md-12" id="videoContainer"> 
                 <link href="http://vjs.zencdn.net/6.2.5/video-js.css" rel="stylesheet">
  <!-- If need to support IE8 -->
                        <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
                        <script src="http://vjs.zencdn.net/6.2.5/video.js"></script>
                        <script src="https://unpkg.com/videojs-flash/dist/videojs-flash.js"></script>
                        <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
                <video  playsinline iphone-inline-video webkit-playsinline webkit-playsinline="true" playsinline="true" style="width: 100%; height: 91vh" autoplay id="live-m3u8-01" width="100%" height="500" style="width: 100%;"  poster="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo  $custom_video[0]['image']; ?>" class="video-js vjs-default-skin vjs-big-play-centered " 
                                        preload="auto" controls  controls controlsList="nodownload">
                                          <source
                                             src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/videos/live/<?php echo $custom_video[0]['video_key'];?>/index.m3u8"
                                             type="application/x-mpegURL">
                                         </video> 
                <script> var player = videojs('live-m3u8-01'); player.play(); </script>
                
                
<!--                <video autoplay id="video" style="width: 100%; height: auto">
                         
		        <source src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $custom_video[0]['video_key'].".mp4";?>" type="video/mp4"> 
		        
		        <p>
		          Your browser doesn't support HTML5 video.
		          <a href="video/video.mp4">Download</a> the video instead.
		        </p>
		      </video>-->

		    <!-- Video Controls -->
<!--                    <div id="videoControls" >
				<input type="range" id="progressBar" value="0">
				<span id="progress"></span>	
					<div id="buttonControls">	
                                            <button id="play"><img id="playImg" src="<?php echo base_url(); ?>libreriasJS/video_player/icons/play-icon.png" alt="The play icon"></button>
					    <span id="duration">00:00 / 01:00</span> 
					    <button id="fastFwd">1x Speed</button>						    			    
                                            <button id="fullScreen"><img id="fullScreenImg" src="<?php echo base_url() ?>libreriasJS/video_player/icons/fullscreen-icon.png" alt="The fullscreen icon"></button>
					    <input type="range" id="volumeSlider" min="0" max="1" step="0.01" value="1">  
                                            <button id="mute"><img id="muteImg" src="<?php echo base_url(); ?>libreriasJS/video_player/icons/volume-on-icon.png" alt="The mute icon"></button>				    
					</div>   	
			</div>-->
  

            </div>
            <div class="col-md-12" style=" padding-left: 0px; padding-right: 0px;">
              <div id="foo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 video_detaile_left_body" style="padding-right: 0px; padding-left: 0px;">
                	<div class="details_body">
                        <div class="details_video">
                            <div class="video_user_detail">
                        	<div class="userimage">
                            	
                               <?php if($artist_details[0]['image']!=''){
	 
	 ?>
                          <a href="<?php echo site_base_url(); ?>artist_detail/index/<?=urlencode(str_replace(" ","_",$artist_details[0]['name']))._.$artist_details[0]['artist_id']?>">   <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $artist_details[0]['image']; ?>" ></a>
                                          <?php } else { ?>
 <a href="<?php echo site_base_url(); ?>artist_detail/<?=urlencode(str_replace(" ","_",$artist_details[0]['name']))._.$artist_details[0]['artist_id']?>"><img src="<?php echo base_url(); ?>img/myimage2.png" ></a>
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
                     <?php if($user_type=="User"){ ?>
<!--                            <div class="follow_sec">
                                	
                            	 <div id="follow" <? if($class1!=''){?>  class="<?=$class1?>" <? }?>>
                                <a onClick="follow_artist()" style="cursor:pointer"><i class="fa fa-heart"></i><span class="gapp"></span> Follow</a>
                                 
                                </div>
                                
                                <div id="unfollow" <? if($class!=''){?> class="<?=$class?>" <? }?>> <a onClick="unfollow_artist()" style="cursor:pointer;width: 25%;"><i class="fa fa-heart"></i><span class="gapp"></span> UnFollow</a></div>
                                 <div >
                             <a  class="iframe_review" href="<?=site_base_url()?>tip_form?artist_id=<?php echo $atrist_details[0]['artist_id'];?>"><span class="gapp"></span><i class="fa fa-money" aria-hidden="true"></i> Tips</a>
                               
                               
                         <a   data-toggle="modal" data-target="#myModal_message" onclick="clear_validation_message()"><span class="gapp"></span>Message</a>  
                               
                               
                               
                               
                               
                               
                                </div>
                                
                                
                                
                              
                            </div>-->
                            
                            <?php } ?>
                        </div>
                            
                            
                            <div class="vd_bottom">
                            	<div class="thumb_usr">
                                	<img src="<?php echo base_url(); ?>img/user2.png" alt="">
                                </div>
                                <div class="vb_usrdetail">
                                	<h4><?php echo $custom_video[0]['recorded_v_title'];?></h4>
                                    <p>Overview:<span class="gapp"></span> <a ><?php echo $custom_video[0]['recorded_v_overview'];?></a></p>
                                     <?php $tag = explode(',',$custom_video[0]['video_tags']); ?>
                                    <p>Tag Words:<span class="gapp"></span>  <? 
							  $i=1;
							 foreach($tag as $row1){ 
							
							 ?>
							 <a href="<?=site_base_url()?>category/video?/1=1&tag=<?=$row1?>" class="tag" title="<?=$row1?>">
							 <?=$row1?><? if($i<count($tag)){ echo " , "; } ?>
                             </a>
                            <?
							 $i=$i+1;
							} ?> </p>
                                </div>
                                
                                
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
                                 
                                  <div class="view" ><span class="gapp"></span> <a style="cursor:pointer;" onClick="un_like(<?php echo $checking_like[0]['id'];?>)"><strong>Unlike</strong></a></div>
                                 
                                  <?php
								}
								else{
								?>
                                    <div class="view"  ><span class="gapp"></span> <a style="cursor:pointer;" onClick="like_video(<?php echo $custom_video[0]['recorded_v_id'];?>,<?php echo $custom_video[0]['artist_id'];?>)"><strong>like</strong></a></div>
                                 <?php
								}
								?>
                                
                                
                                
                                
                                
                                
                                
                            </div>
                            <!--***************************artist profile***********************************-->
                            
                      <div id="result"></div>
                      <style>
                          .user_details_tab li{
                                  color: #555;
                                    cursor: default;
                                    background-color: #ccc;
                                    border: 1px solid #ddd;
                                    border-bottom-color: transparent;
                                    padding: 5px;
                          }
                      </style>
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
                               
                                <div id="menu1" class="tab-pane usertabs fade in active show">
                                    
				<div class="userareas">
                                    <div class="row">
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
                                    </div>
                                    <div class="userareas">
                                        <div class="row">
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
                                    </div>
<!--                                    <div class="userareas">
                                        <div class="row">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 userinfo_left">
                                        	<h5>Video Tags</h5>
                                            <p><?=$atrist_details[0]['artist_tag'];?></p>
                                        </div>
                                    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>Gender:</h5>
                                            <p><?=$atrist_details[0]['sex'];?></p>
                                        </div>
                                      
                                            </div>
                                    </div>-->
                                    
                                    <div class="userareas">
                                        <div class="row">
                                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 userinfo_left">
                                        	<h5>About Me:</h5>
                                            <p><?=$atrist_details[0]['about_me'];?></p>
                                        </div>
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
                                                                            <div class="row">
                                                                                
                                                                              <?php
                                                 // var_dump($video_list);
                                                 foreach ($recorded_video as $k) {
                                                     
                                                     
                                                     $artista=$this->stream->find("stream\stream_artist",$k['artist_id']);
            $imagen=($k['image']!="")?
                    site_base_url().'uploads/recorded_video/'.$k['image']:
                    site_base_url()."uploads/user_image/".$artista->image;
            $imagen=($imagen=="")?base_url()."img/logo3.png":$imagen;
           // $imagen
                                                     ?>              

                                                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 " >            

                                                         <?php
                                                         $data['cuadro_video'] = array(
                                                             "imagen" =>$imagen,
                                                             "imagen_enlace" => site_base_url() . 'category/video_offline/' . urlencode(str_replace(" ", "_", $k['recorded_v_title'])) . _ . $k['recorded_v_id'],
                                                             "nombre" => $k['recorded_v_title'],
                                                             "artista" => $atrist_details[0]['name'],
                                                             "views" => $k['total'],
                                                             "enlcace_user_profile" => site_base_url() . "artist_detail/index/" . str_replace(" ", "_", $k['name']) . "_" . $k['artist_id']
                                                         );
                                                         $this->load->view("componentes/cuadro_video", $data);
                                                         ?>  
                                                     </div>
                                                 <?php } ?>  
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                               
</div>
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
                                                                            <div class="row">
                                 

                        		
                                       <?php foreach($artist_album as $row){ ?>	
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-xs-3 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                       <?php if($row['image']!=''){ 
									   
									   
									   
									   ?>
                                       
                                    
                                        <a href="" ><img style="width: 210px; height: 158px" src="<?php echo site_base_url(); ?>uploads/user_photo/<?php echo $row['image']; ?>" width="100%" height="100%" style="max-width:100%;" alt=""></a>
                            <?php }else{ ?>
                        <img style="width: 210px; height: 158px" src="<?php echo base_url(); ?>img/myimage1.png" alt="">
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
                        </div>
                        
                        
                        
            
                                 
                        
                        
                        
                        
                        
                        
<!--                        <div class="details_video">
							
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
                                    
                                    <video   poster="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row1['image']; ?>" width="100%" height="100%" style="max-width:100%;">
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
                        </div>-->
                        
                            
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
                       
                        
<!--                  <div class="videodetails_slider">
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
                               
                                           
                                		<a href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$related_video[$h]['recorded_v_title']))._.$related_video[$h]['recorded_v_id']?>"><img src="<?php echo site_base_url(); ?>uploads/user_image/<?php echo $related_video[$h]['image']; ?>" alt="" ></a>
                                         
                                            	
                                                
                          <?php
						}
						
						else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist_related()"><img src="<?php echo base_url(); ?>uploads/user_image/<?php echo $related_video[$h]['image']; ?>" alt=""></a> 
                 <?
				}
						else{
				
				
			?>
							
							
						<a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo base_url(); ?>uploads/user_image/<?php echo $related_video[$h]['image']; ?>" alt=""></a>
                        
                        
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
                        -->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="chat_contenedor" class="col-md-4" style="padding-left: 0px; padding-right: 0px;">
            <div class="col-md-12" id="banerTop" style="padding: 0px">
              
<!--                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-format="fluid"
                 data-ad-layout-key="-8h+1u-dq+eb+ga"
                 data-ad-client="ca-pub-1991649164552838"
                 data-ad-slot="5796072610"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>-->
            </div>
           <div class="col-md-12" id="chatc">
                <div class="left_panel" style="padding-top: 0px; margin-top: -8px">
<!--                    	<div class="addsec">
                         
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
                        	<img src="<?php echo base_url(); ?>img/googleadd4.png">
                        </div>-->
                        <?php // if(!empty($image_right)) { ?>
<!--                        <div class="addsec">
                        	 <a href="<?=$row3['advertisement_link']?>" target="_blank"><img src="<?=site_base_url()."uploads/advertisement_image/".$picture1[array_rand($picture1)];?>"/></a>
                        </div>-->
                        <?php //  } ?>
                    
                    
           <!-------------------------------------------------------------------->         
                    
                    
                    
                    <div class="chat_reply">
                    
                   <?php // var_dump($_SESSION); 
                   
                   $subcribe=$this->stream->createQueryBuilder()
                                        ->select("t")
                                        ->from("stream\stream_payment_details","t")
                                        ->where("t.video_id=".$recorded_v_id);
                                if($_SESSION['type']=="User"){
                                    $subcribe=$subcribe->andWhere("t.user_id=".$_SESSION['user_id']);
                                }
                                if($_SESSION['type']=="Artist"){
                                    $subcribe=$subcribe->andWhere("t.artist_id=".$_SESSION['artist_id']); 
                                }
                                $subcribe=$subcribe->getQuery()->getResult();
//                                var_dump($subcribe);  
                                
                   ?>
                            
                            
                         <div class="chat_title" id="group_display"><h4><span></span></h4>
                            <a class="active" href="#" onclick="group_chat();"  id="group_chat">Group Chat</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php
				if($this->session->userdata("is_logged_in")=="TRUE"   ){
				
				 if($user_type=="User"){
				?>
                            <a class="chattab" href="#" onClick="private_chat();" id="private_chat">&nbsp;&nbsp;Private Chat</a>
                                 <?php }?>
                            <!--panel/paypal/subcribe-->
                            <?php if($_SESSION['type']=="Artist" && $atrist_details[0]['artist_id']==$_SESSION['artist_id']){ }else{?>
                            <a style="background: #0362ab; color: white; padding: 0px 10px 0px 10px;"  class="iframe_review" href="<?=site_base_url()?>tip/index/<?php echo $atrist_details[0]['artist_id'];?>/<?php echo $recorded_v_id; ?>"><span class="gapp"></span><i class="fa fa-money" aria-hidden="true"></i> Tips</a>
                            <?php
                            if(empty($subcribe)){
                            ?>
                             <a  style="background: #0362ab; color: white; padding: 0px 10px 0px 10px;" class="" href="<?=site_base_url()?>panel/paypal/subscribe/<?php echo $recorded_v_id; ?>/<?php echo $atrist_details[0]['artist_id'];?>"><span class="gapp"></span><i class="fa fa-money" aria-hidden="true"></i> Subscribe</a>
                            <?php } ?>
                             <a  style="background: #0362ab; color: white; padding: 0px 10px 0px 10px;" class="" href="<?=site_base_url()?>panel/store"><span class="gapp"></span><i class="fa fa-money" aria-hidden="true"></i> store</a>
                            <?php
                            }
                            }
                            ?>
                            
                            </div>
                            
                            
                            
                            
                             <div id="group_chat_display">
                    
                    
                     <div class="messagearea">
                           		<!--<h3>Messages</h3>-->
                                        <style>
                                            #message_scroll{
                                                height:  45vh;
                                                overflow: scroll;
                                            }
                                            
                                            .sendtime, .sendddmmyy{
                                                color: black;
                                            }
                                        </style>
                                        <script>
                                          function updateScroll(){
                                                var element = document.getElementById("message_scroll");
                                                element.scrollTop = element.scrollHeight;
                                            }
                                            $(document).ready(function(){
                                                updateScroll()
                                            });
                                        </script>
                                        <div class="vscroller" style="height: 58vh"  >
                                            <div class="vscroller-content" id="message_scroll" >
                                <div id="chat_sms">
                                
                                 <?php
								// print_r($messages_chat);
//                                 echo "<pre>";
//                                 var_dump($messages_chat);
//                                 echo "<pre>";
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
                            
                           
                                 <div class="chat_inputbox" style="position: absolute; bottom: 0px; left: 0px;">
                                     <button id="chatbttn3" data-toggle="tooltip" data-placement="top" title="Chat Icons" class="chaticon"></button>
                           <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message()"><i class="fa fa-location-arrow"></i></button>
                                	<textarea onKeyDown="if (event.keyCode == 13) { return send_message(); }" class="form-control chatinputarea content"  rows="1"  id="text_message" placeholder="Your text here..." ></textarea>
                                </div>
                                 <div id="dropchat3" class="chat_icons" style="display: none" >
                                <?php
								
                                foreach($my_smilies_data as $key=>$data) {
									?>
                                    <div class="chat_ico" onClick="emoji('<?=$key?>','text_message')"><?php echo $data ?> </div>
								 
								   <?php
								  }
								  ?>
                                	
                                </div>
                    
                    
                    </div>
                    
                    
                    
                    
                    
                    
                    
             <div id="private_chat_display" style="display: none">
                            
                            <div class="vscroller vscroller2" style="height: 50vh; overflow: scroll;">
                                <div class="vscroller-content" id="artist_private_messages123">  
                             
                                    
                              
                         
                              
                            </div>
                            </div>
                            
                            
                            <div class="chat_inputbox">
                                <button id="chatbttn4" data-toggle="tooltip" data-placement="top" title="Chat Icons" class="chaticon"></button>
                           <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message_private()"><i class="fa fa-location-arrow"></i></button>
                                	<textarea class="form-control chatinputarea content"  rows="1"  id="text_message_private" placeholder="Your text here..." ></textarea>
                                </div>
                            <div id="dropchat4" class="chat_icons" style="display: none" >
                                <?php
								
                                foreach($my_smilies_data as $key=>$data) {
									?>
                                    <div class="chat_ico" onClick="emoji('<?=$key?>','text_message_private')"><?php echo $data ?> </div>
								 
								   <?php
								  }
								  ?>
                                	
                                </div>
                 
                            </div>       
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    
                        
                        
                 <!---------------------------------------------------------------------------------->       
                        
                        
                    </div>
            </div>
            <div class="col-lg-12" id="banerBottom" style="padding: 0px;">
<!--                 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-format="fluid"
                 data-ad-layout-key="-8h+1u-dq+eb+ga"
                 data-ad-client="ca-pub-1991649164552838"
                 data-ad-slot="5796072610"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>-->
            </div>
            
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>libreriasJS/video_player/js/app.js"></script>

<script src="http://code.jquery.com/jquery-1.12.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>libreriasJS/video_player/js/app.js"></script>


 <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"60%", height:"100%"});
				
			});
                        $(document).ready(function(){

                                $(".iframe_review").colorbox({iframe:true, width:"60%", height:"100%"});
                                $("#chatbttn3").click(function(){
                                    $("#dropchat3").slideToggle("slow").css({top:"-180px",position:"relative","z-index":"10000","width":"100%"});
                                });
                                $("#chatbttn4").click(function(){
                                    $("#dropchat4").slideToggle("slow").css({top:"-220px",position:"relative","z-index":"10000","width":"100%"});
                                });
                        });

                        
function emoji(code,id_chat_input){
var message = document.getElementById(id_chat_input).value;
var message1='';
message1+=message+' '+code; 
document.getElementById(id_chat_input).value=message1;
document.getElementById(id_chat_input).focus();

}
		</script> 



<script>
function group_chat()
{
	 $('#group_chat').removeClass('chattab');
			$('#group_chat').addClass('active');
$('#private_chat').removeClass('active');
$('#private_chat').addClass('chattab');
$('#group_chat_display').show();
			$('#private_chat_display').hide();
}


</script>



<script>
function private_chat()
{
	
	 var id = document.getElementById('artist_id').value;

   // alert(id);
	
$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/select_private_message_of_users_online?id="+id,
		success:function(response){
	     //alert(response);
		 
		 $("#artist_private_messages123").html(response);
		 $('#group_chat').removeClass('active');
			$('#group_chat').addClass('chattab');
$('#private_chat').removeClass('chattab');
$('#private_chat').addClass('active');
$('#group_chat_display').hide();
			$('#private_chat_display').show();
		 //location.reload();
	
      }
 	 });


}


</script>





<script>
	function send_message_private()
	{
	  //alert($("#mydiv")[0].scrollHeight);
	   var message = document.getElementById('text_message_private').value;
	     var artist_id123 = document.getElementById('artist_id').value;
		//alert(user_id123);
		
		   
		 
		 if(message!=''){
		 
		
		 
		 
 //alert(recorded_v_id);
	   $.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/message_chat_private_user?message="+message+"&artist_id123="+artist_id123,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#chat_sms_private").append('<div class="message_col"><div class="msg_thumb"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="message_top"><span class="msg_username">'+response[0]+'</span><span class="sendtime">'+response[2]+'</span><span class="sendddmmyy">'+response[3]+'</span></div><div class="<?php echo base_url(); ?>msg_body"><p>'+response[4]+'</p></div></div>');
	    document.getElementById('text_message_private').value='';
		
		
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
		 }
	 
		 else{
			 alert("Please Enter The Message");
			 }
	   
	   
	   
	
}
	
	</script>




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
	
	function check_function(){
			if(document.getElementById('private_chat').className=='active'){
			private_chat();
			}
			
			}	  
	
	
    </script>




 <script>
   
   $(document).ready(function(){
         get_advertisement()
	 get_chats()
         get_advertisement_video();
         setInterval(function(){ check_function(); }, 300);
         setInterval(function(){ get_chats(); }, 300);
   });
	
	
    //setInterval(function(){ send_message_private(); }, 300);
   
   
    
//   }
   
   function get_chats()
   {
       
	   var v_id = <?php echo $v_id;?>
	//  alert(v_id);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	    var e = document.getElementById("account_table");
//	  if ( e.hasChildNodes() )
//		{
//			 document.getElementById('account_table').innerHTML='';
//			  document.getElementById('limit1').value='';
//		}
        $.post('<?php echo site_base_url(); ?>category/get_messages',{"id_video":v_id},function(response){
            //alert(response);
			  // $("#chat_sms").append(response);
			  var data = response.split('&&');
			   document.getElementById('chat_sms').innerHTML=data[0];
			   //alert(data[0]);
			   //document.getElementById('limit').value=data[1];
//			   if(data[1]>0){
//				    $('#old_chat_hide').show(); 
//				   
//				   }
			   // document.getElementById('m_id').value=data[2];
        });
//	   $.ajax({
//		   type: 'POST',
//		   url: '<?php echo site_base_url(); ?>category/get_messages',
//                   {"id_video",v_id},
//		   success:function(response){
//			 
//			   
//			  
//		   }
//		   });

			
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
		   var recorded_v_id = document.getElementById('recorded_v_id').value;
		    var user_type = document.getElementById('user_type').value;
		 
		 if(message!=''){
		 
		<?php
				if($this->session->userdata("is_logged_in")!="TRUE" ){
				
				
				?>
		 alert('User Please Login To Comment');
		   document.getElementById('text_message').value='';
		 <? } else{?>
		 
		 
		 
		 if(user_type=='User' || user_type=='Artist')
		 {
                     
		 
		 
 //alert(recorded_v_id);
	   $.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/message_chat?message="+message+"&artist_id="+artist_id+"&recorded_v_id="+recorded_v_id,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#chat_sms").append('<div class="message_col"><div class="msg_thumb"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="message_top"><span class="msg_username">'+response[0]+'</span><span class="sendtime">'+response[2]+'</span><span class="sendddmmyy">'+response[3]+'</span></div><div class="msg_body"><p>'+response[4]+'</p></div></div>');
	    document.getElementById('text_message').value='';
            $("#dropchat3").hide();
		updateScroll();
		
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
			 
			
		 }
		 
		 else{
                  alert('Only a user can comment');
			   document.getElementById('text_message').value='';
		 }
	 <? } ?>
		 }else{
			 alert("Please Enter The Message");
			 }
	   
	   
	   
	
}
function get_advertisement()
{
    $.post("../../advertisement/index",{position:"top"},function(data){       
        if(data.advertisment_type=="image"){
            var $cad="<a target='_blank' href='"+data.advertisement_link+"'><img src='/uploads/advertisement_image/"+data.advertisement_image+"'></a>"
            $("#banerTop").html($cad)
        }
        if(data.advertisment_type=="code"){
            var $cad=data.advertisement_code
            $("#banerTop").html($cad)
        }
        
        
    });
    $.post("../../advertisement/index",{position:"bottom"},function(data){       
        if(data.advertisment_type=="image"){
            var $cad="<a target='_blank' href='"+data.advertisement_link+"'><img src='/uploads/advertisement_image/"+data.advertisement_image+"'></a>"
            $("#banerBottom").html($cad)
        }
        if(data.advertisment_type=="code"){
            var $cad=data.advertisement_code
            $("#banerBottom").html($cad);
        }
        
        
    });
}

function get_advertisement_video(){
    $.post("<?php echo site_base_url()?>advertisement/video_detail",{},function(data){
        $("#advertisementVideo").html(data);
         $("#advertisementVideo").show();
    //$('video').trigger('play');
    var videoAd=$("#video_baner");
    var video=$("#live-m3u8-01");
    videoAd.trigger("play");
    video.trigger("pause");
    $("#video_baner").on("click",function(){
        //alert("que pasa");
        videoAd.trigger("play");
    });
    $("#playImg").attr("src","http://173.255.192.230/site/libreriasJS/video_player/icons/play-icon.png")
    $("#videoControls").hide();
    videoAd.bind("ended", function() {
        $("#advertisementVideo").hide();
       videoAd.trigger("pause");
       video.trigger("play");
       $("#playImg").attr("src","http://173.255.192.230/site/libreriasJS/video_player/icons/pause-icon.png");
       $("#videoControls").show();
        });
    $(".skip_video_advertisement").on("click",function(){
       $("#advertisementVideo").hide();
       videoAd.trigger("pause");
       video.trigger("play");
       $("#playImg").attr("src","http://173.255.192.230/site/libreriasJS/video_player/icons/pause-icon.png");
       $("#videoControls").show();
    });
    });
   
}
</script>
        
        