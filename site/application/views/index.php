<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">

<?php
$url='home';
$meta_details=$this->module->geting_meta_tags($url);
//print_r($meta_details);die;
$meta_tag=stripslashes($meta_details[0]['meta_tag']);
$meta_title=stripslashes($meta_details[0]['meta_title']);
?>


<title><?=$meta_title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$meta_tag ?>">
<meta name="keywords" content="<?=$meta_tag ?>">
<meta name="author" content="<?=$meta_tag ?>">



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo0.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-theme">

    
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bg_slider.css">

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
    body,html{
        width: 100%;
        height: 100%;
    }
    
</style>
    </head>
    <body >

<!-- signup -->
<?php
$user_type = $this->session->userdata('type');
?>
<?php $this->load->view("header.php"); ?><!-- /#Header-->
<?php 
$slide_image=$this->module->slide_image();
?>


        <section id="slider" style="width: 100%; height: 40%;  margin: 0 auto;">
            <div class="container-full" style=" height: 100%; ">
                <div class="slider" style="height: 100%">
                            <div class="slider_holder" style="height: 100%">			
                    <div id="slideshow" style=" height: 100%">
                     <?php
					 foreach($slide_image as $row)
					 {
					 ?>
                        <img src="<?php echo site_base_url();?>uploads/slider_image/<?php echo $row['slider_image']; ?>" class="active" />
                       <?php
					 }
					 ?>
                       
                       
                     </div>
                     
                    <div class="index_search_holder" style="top:0px; height: 100%" >
                     	<div class="container_index" style=" height: 100% ;  min-width: 100%; padding: 0px; margin: 0px;">
                            <div class="search_tab" style="width: 100%; height: 100%">
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 topvideo" style="height: 100%;">

                                    <div class="video-container"  style="height: 100%;">
                                        <div class="media-wrapper" style="height: 100%">
                                                <video style="" onclick="myFunction6(this)" id="myVideo6" class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/videoimg2.png" preload="yes" controls controlsList="nodownload"> 
                                                    <source src="<?php echo site_base_url(); ?>uploads/admin_video/<?php echo $video_admin[0]['video'];?>" type="video/mp4">
                                                    <source src="<?php echo site_base_url(); ?>uploads/admin_video/<?php echo $video_admin[0]['video'];?>" type="video/ogg">
                                                    <source src="<?php echo site_base_url(); ?>uploads/admin_video/<?php echo $video_admin[0]['video'];?>" type="video/webm">
                                                   <?php /*?> <object data="<?php echo site_base_url(); ?>uploads/admin_video/<?php echo $video_admin[0]['video'];?>" width="470" height="255">
                                                    <embed src="<?php echo site_base_url(); ?>uploads/admin_video/<?php echo $video_admin[0]['video'];?>" width="470" height="255">
                                                    </object><?php */?>
                                                </video>
                                            </div>
                                        </div>

                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 video_description" style="height: 100%; overflow: scroll;" >
                                	<div class="vid_des_holder">
                                    	<div class="top_stremer">
                                        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            	<!--<div class="ts_img">
                                                	<img src="<?php echo base_url(); ?>img/thumb.png" alt="">
                                                </div>-->
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ts_container">
                                            	<?php /*?><div class="ts_details">
                                                	<h4>Bob</h4>
                                                    <p><span class="white">streaming</span SpongeBob SquarePants: Battle..></span>
                                                </div><?php */?>
                                            </div>
                                        </div>
                                        
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottom_streamer" >
                                                <h3 ><?php echo $video_admin[0]['title'];?></h3>
                                            <p ><?php echo $video_admin[0]['overview'];?></p>
                                            <!--<a href="#">Viewe more and watch more..</a>-->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
			</div> <!-- /.slider -->
		</div> <!-- /.container-full -->
	</section><!-- /#Slider -->
        
        <section id="somework">
            <div class="worksection" style="padding:0px;">
		<div class="container-full">
                    <div class="container" style="padding:0px; min-width:100%; margin: 0px; ">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title_holder">
                	<div class="f_title">
                    	<h2><?php echo $name;?> </h2>
                    </div>
                    <div class="f_order">
                    
                    <?php if(isset($_GET['type']) && isset($_GET['search'])){ 
					
					$url = site_base_url()."video_category?search=".$_GET['search']."&type=".$_GET['type']."&order_by=";
					}else if(isset($_GET['type'])){
					$url = site_base_url()."video_category?type=".$_GET['type']."&order_by=";	
						}else if(isset($_GET['search'])){
					$url = site_base_url()."video_category?search=".$_GET['search']."&order_by=";	
						}else{
							
							$url = "?order_by=";
							}
				 ?>
                    <select id="order_by"  class="order_by order_by1"  onChange="window.location='<?=$url?>'+this.value;">
                    <option value="">Sort By</option>
                      <option value="atoz" <? if($order_by=='atoz'){?> selected <? } ?>>A to Z</option>
                      <option value="ztoa" <? if($order_by=='ztoa'){?> selected <? } ?>>Z to A</option>
                    <option value="newtoold" <? if($order_by=='newtoold'){?> selected <? } ?>>New To Old</option>
                      <option value="oldtonew" <? if($order_by=='oldtonew'){?> selected <? } ?>>Old To New </option>
                  
                    </select>
                    </div>
                    <!--<div class="viewallvdo">
                    	<a href="#">View All Videos</a>
                    </div>-->
                </div>
                <?php
				if(!empty($video_list))
				{
				foreach($video_list as $row)
				{
					 $ovr=substr($row['recorded_v_overview'],0,30);
					$length_ovr = strlen($row['recorded_v_overview']);
					
					if($length_ovr>30){
								$overview=$ovr."..";
								
								}else{
									$overview=$ovr." ";
									}
					
					
					$type=$row['video_type'];
				?>
                
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                       
                        
                        <?php
						if($type=='Recorded')
						{
					
	/************************************************************************************************************/				
					
                        if((($this->session->userdata('is_logged_in')=='1') && ($user_type=="User")) || ($row['recorded_video']=="0"))
						{
							
							
				
						
                        ?>
                            <a href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$row['recorded_v_title']))._.$row['recorded_v_id']?>"><img style="width: 100%; height: 192px" src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image'] ?>" alt=""></a>
                            
						<?php
			}else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist()"><img style="width: 100%; height: 192px" src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image'] ?>" alt=""></a> 
                 <?
				}
			
			else{
				
				
			?>
							
							
						<a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image']; ?>" alt=""></a>
                        
                        
                        <?php
			}
			?>
                        	
							
							
							<?php
						}
						
	/**********************************************************************************************************************************************************/					
						
						
						
						if($type=='Streaming')
						{
							
					/****************************************************/		
							
					 if((($this->session->userdata('is_logged_in')=='1') && ($user_type=="User")) || ($row['live_video']=="0"))
					{
						
				
                        ?>		
							
			<span class="active_live_video">Live<span class="gapp"></span><i class="fa fa-circle"></i></span>
                            
                        <a href="<?=site_base_url();?>video_details_page/<?=urlencode(str_replace(" ","_",$row['recorded_v_title']))._.$row['recorded_v_id']?>"><img style="width: 100%; height: 192px" src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image']; ?>" alt=""></a> 
                          
                <?php
			}else if($user_type=="Artist"){
				?>
                          <a href="#" onClick="artist()"><img  src="<?php echo base_url(); ?>img/img1.png" alt=""></a> 
                 <?
				}
			
			else{
	
			?>
              <span class="active_live_video">Live<span class="gapp"></span><i class="fa fa-circle"></i></span>
                          
                  <a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image']; ?>" alt=""></a>       
                          
                  <?php
			}
			/***********************************************************************************************************/
			?>
                            
                            
                            <?php
						}
						?>
                        </div>
                        <div class="f_video_bottom">
                        	<h5><?=$row['recorded_v_title']?></h5>
                             <p title="<?=$row['recorded_v_overview']?>">Overview-<?=$overview?> </p>
                             <?php $tag = explode(',',$row['video_tags']); ?>
                             <p>Tags:-
							 <? 
							  $i=1;
							 foreach($tag as $row1){ 
							
							 ?>
							 <a href="<?=site_base_url()?>video_category?tag=<?=$row1?>" class="tag" title="<?=$row1?>">
							 <?=$row1?><? if($i<count($tag)){ echo " , "; } ?>
                             </a>
                            <?
							 $i=$i+1;
							} ?> 
                            </p>
                            
                             

                       <?php
						if($type=='Recorded')
						{
							
						?>
                             <p title="Price">
                             
                             <?php
							 if($row['recorded_video']!='0'){
							 ?>
                             
                             <b>Price</b>-$<?=$row['recorded_video']?>
                             <?php
							 }else{
								 
							 ?>
                             <b>Free</b>
                             <?php
							 }
							 ?>
                             
                             </p>
                            <?php
						}else{
						?>
                            <p title="Price">
                             
                             <?php
							 if($row['live_video']!='0'){
							 ?>
                             
                             <b>Price</b>-$<?=$row['live_video']?>
                             <?php
							 }else{
								 
							 ?>
                             <b>Free</b>
                             <?php
							 }
							 ?>
                             
                             </p>
                           
                           
                           
                           
                           
                           
                           
                           
                           
                         
                            
                            <?php
						}
						?>      
                             
                  
                           
                             <div class="vdodetel_bottom">
                                        	<span class="vdodetel_vew"><p><?=$row['total']?> viewer</p></span>
                                        	<!--<span class="vdodetel_vew_link"><a  href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$row1['recorded_v_title']))._.$row1['recorded_v_id']?>">View</a></span>-->
                                        </div>
                             
                           
                        </div>
                	</div>
                </div>
                
                <?php
				}}
				else{
				?>
      
           
                There is no Video Available
                <?php
				}
				//print_r($this->session->userdata('path'));die;
				?>
                
<!--                <div class="pagination_area">
										 
							 <div class="pagination_right">
										<? echo $this->pagination->create_links(); ?>
									</div>
								 
									<div class="spacer"></div>
							   
								</div>-->
        
			</div> <!--/.container-->
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
</section><!-- /#somework -->



    <div class="google_add_home">
    <?php
	$home_add1=$this->module->get_advertisement_home1('home_top');
		
		if(!empty($home_add1)) {
		foreach($home_add1 as $row2)
		{
		?>
       
                <? 
                $picture[] = $row2['advertisement_image'];
                ?>
              
            
				 <? }?> 
                 <a href="<?=$row2['advertisement_link']?>" target="_blank"><img src="<?=site_base_url()."uploads/advertisement_image/".$picture[array_rand($picture)];?>"/></a>
                <? 
		        }
               // print_r($picture);
				?>
                        	<!--<img src="<?php echo base_url(); ?>img/googleadd3.png" alt="">-->
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

    




 <?php /*?><div class="google_add_home">
  <?php
		foreach($home_add as $row1)
		{
		?>
          <? if($row1['advertisment_type']=='image') {?>
                <a href="<?=$row1['advertisement_link']?>"><img src="<?=site_base_url()."uploads/advertisement_image/thumb/thumb_".$row1['advertisement_image'];?>"/></a>
                <? } else {
	   echo stripslashes($row1['advertisement_code']);
	   //echo 1;
	  // break;
				}}?>
                        <!--	<img src="<?php echo base_url(); ?>img/googleadd3.png" alt="">-->
                        
     </div><?php */?>
     <div class="google_add_home">
    <?php
	
		$home_add=$this->module->get_advertisement_home1('home_bottom');
		if(!empty($home_add)) {
		foreach($home_add as $row1)
		{
		?>
       
                <? 
                $picture1[] = $row1['advertisement_image'];
                ?>
              
            
				 <? }?> 
                 <a href="<?=$row1['advertisement_link']?>" target="_blank"> <img src="<?=site_base_url()."uploads/advertisement_image/".$picture1[array_rand($picture)];?>"/></a>
                <? 
		}
                //print_r($picture1);
				?>
                        	<!--<img src="<?php echo base_url(); ?>img/googleadd3.png" alt="">-->
     </div>
<style>
.popular_img{
	    display: inline-block !important;
    width: 100% !important;
    cursor: -webkit-grab !important;
    cursor: -moz-grab !important;
    cursor: -o-grab !important;
    cursor: grab !important;
	height: 164px;
	}
</style>
<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<?php $this->load->view("footer.php"); ?> <!-- /.footer -->


<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/script.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.2.6.min.js"></script>
    
    
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
    
    
   <script>
function artist(){
	alert("This feature is for only Viewers,not for Streamers")
	}
</script> 


<script>
function artist_top(){
	alert("This feature is for only Viewers,not for Streamers")
	}
</script> 
    
    
    
    
<script type="text/javascript">
//<![CDATA[
function slideSwitch() {
    
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
///    setInterval( slideSwitch, 1000 );
//    setInterval( "slideSwitch()", 5000 );
});
//]]> 
</script>
<script type="text/javascript">
//<![CDATA[
function myFunction6(that) {
   var vid =document.getElementById("myVideo6");
    vid.paused ? vid.play() : vid.pause();
   
   // document.getElementById("myVideo6").controls = true;
}
//]]>
</script>
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

</body>
</html>