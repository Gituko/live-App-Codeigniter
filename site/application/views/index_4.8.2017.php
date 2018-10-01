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
    </head>
<body>

<!-- signup -->
<?php
$user_type = $this->session->userdata('type');
?>
	<?php $this->load->view("header.php"); ?><!-- /#Header-->
<?php 

$slide_image=$this->module->slide_image();
//print_r($slide_image);die;
?>


	<section id="slider">
		<div class="container-full">
			<div class="slider">
            	<div class="slider_holder">			
                     <div id="slideshow">
                     <?php
					 foreach($slide_image as $row)
					 {
					 ?>
                        <img src="<?php echo site_base_url();?>uploads/slider_image/<?php echo $row['slider_image']; ?>" class="active" />
                       <?php
					 }
					 ?>
                       
                       
                     </div>
                     
                     <div class="index_search_holder">
                     	<div class="container_index">
                        	<div class="search_tab">
                            	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 topvideo">

                                        <div class="video-container">
                                            <div class="media-wrapper">
                                                <video onclick="myFunction6()" id="myVideo6" class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/videoimg2.png">
                                                    <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/mp4">
                                                    <source src="<?php echo base_url(); ?>videos/big_buck_bunny.ogg" type="video/ogg">
                                                    <source src="<?php echo base_url(); ?>videos/big_buck_bunny.webm" type="video/webm">
                                                    <object data="videos/big_buck_bunny.mp4" width="470" height="255">
                                                    <embed src="<?php echo base_url(); ?>videos/big_buck_bunny.swf" width="470" height="255">
                                                    </object>
                                                </video>
                                            </div>
                                        </div>

                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 video_description">
                                	<div class="vid_des_holder">
                                    	<div class="top_stremer">
                                        	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            	<div class="ts_img">
                                                	<img src="<?php echo base_url(); ?>img/thumb.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ts_container">
                                            	<div class="ts_details">
                                                	<h4>Bob</h4>
                                                    <p><span class="white">streaming</span SpongeBob SquarePants: Battle..></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottom_streamer">
                                        	<h3>STREAMS PARTHNER SPOTLIGHT</h3>
                                            <p>There are some amazing smaller broadcasters on Twitch, and we want these rising stars to have an opportunity to showcase what they're all about. That's where the Twitch Partner Spotlight comes in. Every week we choose an up-and-coming broadcaster for some guaranteed front page and social media exposure and help them share their talents with a wider audience.</p>
                                            <a href="#">Viewe more and watch more..</a>
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




	<div class="worksection ">
		<div class="container-full">
			<div class="container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title_holder">
                	<div class="f_title">
                    	<h2>Top Videos</h2>
                    </div>
                    
                </div>
                
               <?php foreach($top_video as $row1){ 
								
								$des=substr($row1['video_title'],0,20);
							$length = strlen($row1['video_title']);
							
							if($length>20){
								$moss=$des."..";
								
								}else{
									$moss=$des." ";
									}
								?> 
                
                
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image_index">
                            
                     
                                    <video class="fancybox fancybox.iframe" href="<?php echo site_base_url();?>video_view/<?php echo $row1['video_id'];?>"  poster="<?php echo base_url(); ?>img/img66.png" width="100%" height="100%" style="max-width:100%;">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $row1['video_name'];?>" type="video/mp4">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $row1['video_name'];?>" type="video/ogg">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $row1['video_name'];?>" type="video/webm">
                                    <object data="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $row1['video_name'];?>" width="470" height="255">
                                        <embed src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo $row1['video_name'];?>" width="470" height="255"></embed>
                                        </object> 
                                        </video>
                                      
                                        </video>        
                            
                            
         
                            
                            
                        </div>
                        <div class="f_video_bottom">
                        	<h5><?=$moss?></h5>
                            <p><?=$row1['total']?> viewer</p>
                        </div>
                	</div>
                </div>
                
                <?php
				
			   }
			   
			   ?>
                
          
                
                
                
			</div> <!--/.container-->
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
   
</section><!-- /#somework -->

<section id="aboveportfolio">
	<div class="container-full">
		<div class="shadow">
			<div class="container">

				<h2 class="text-center">Follow The Latest Streams News</h2>
				<div>
					<ul>
						<li class="btn"><a href="#" class="btn left"><i class="fa fa-facebook"></i></a></li>
						<li class="btn"><a href="#" class="btn right"><i class="fa fa-twitter"></i></a></li>
                        <li class="btn"><a href="#" class="btn right"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>	

			</div> <!-- /.container -->
		</div> <!-- /.shadow -->
	</div> <!-- /.container-full -->
</section><!-- /#aboveportfolio -->

<section id="somework">
	<div class="worksection">
		<div class="container-full">
			<div class="container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title_holder">
                	<div class="f_title">
                    <? $topperform = $this->module->get_artist_top_performer();?>
                    	<h2>Top Performers</h2>
                    </div>
                </div>
                <?php
				foreach($topperform as $row)
				{
					?>
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                        
                                
                          <?php
                                             if(($this->session->userdata('is_logged_in')=='1') && ($user_type=="User"))
						{
							
                        ?>
                        
                            <a href="<?=site_base_url();?>artist_detail/<?=urlencode(str_replace(" ","_",$row['name']))._.$row['artist_id']?>"><img src="<?php echo site_base_url(); ?>uploads/user_image/<?php echo $row['image'];?>" alt=""></a>
                            
                            
                           
						<?php
						}
						
						else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist_top()"><img src="<?php echo site_base_url(); ?>uploads/user_image/<?php echo $row['image'];?>" alt=""></a> 
                 <?
				}
						else{


			?>
							
							
						<a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo site_base_url(); ?>uploads/user_image/<?php echo $row['image'];?>" alt=""></a>
                        
                        
                        <?php
			}
			?>     
							?>
                            
                            
                        </div>
                        <div class="f_video_bottom">
                        	<h5><?php echo $row['name'];?></h5>
                            <p><?php echo $row['total'];?> viewer<span class="name_performer"><a href="#"><?php echo $row['user_name'];?></a></span></p>
                        </div>
                	</div>
                </div>
                
                
                
                
                
                <?php
				}
				?>
             
			</div> <!--/.container-->
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
</section><!-- /#somework -->


<section id="portfolio">
	<div class="container-full">
		<div class="container">
        <?php
		foreach($home_add as $row1)
		{
		?>
        
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 googleadd">
            	<div class="addholder">
                <? if($row1['advertisment_type']=='image') {?>
                <a href="<?=$row1['advertisement_link']?>"><img src="<?=site_base_url()."uploads/advertisement_image/thumb/thumb_".$row1['advertisement_image'];?>"/></a>
                <? } else {
	   echo stripslashes($row1['advertisement_code']);
	   //echo 1;
	  // break;
	   }?>
                </div>
            </div>
         <?
		 
		}
		?>
           
		</div> <!-- /.container -->
	</div> <!-- /.container-full -->
</section><!-- #portfolio -->


<section id="rentprop">
	<div class="container-full">
    	<div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title_holder">
                	<div class="f_title">
                    	<h2>Popular Shows</h2>
                    </div>
                </div>
                
                <?php
                
              $popular=$this->module->get_popular_recorded_video();
			  
			  //print_r($popular_shows);
			  ?>
        <div class="rent_prop_row">
        	<div class="popularshows">
            <?php
			if(!empty($popular)){
			?>
            	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
                      <?php   
					$i=1;
					$m=0;
					$length = count($popular);
				//	echo $length;
					//$value = $length/6;
					//echo floor($value);die;
					
				
						if($length>3){
							
							$length1=4;
							}else{
								
							$length1=$length;	
								}
						
					?>       
                            
                            
                            
								<div class="item active">	
                               
                               
                               <?php 
							for($h=0; $h <$length1 ; $h++){
								 
//	echo strlen($popular[$h]['furniture_name']);
	if(strlen($popular[$h]['recorded_v_title'])>30){
									$more_pop = "....";
								}else{
									$more_pop = "";
								} 
								
								
			if(strlen($popular[$h]['recorded_v_overview'])>30){
									$more_ovr = "....";
								}else{
									$more_ovr = "";
								} 					
								
								
								
								 ?>
                               
                               
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                               
                          <?php
                                             if(($this->session->userdata('is_logged_in')=='1') && ($user_type=="User"))
						{
							
                        ?>
                                                <a href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$popular[$h]['recorded_v_title']))._.$popular[$h]['recorded_v_id']?>"><img src="<?php echo base_url(); ?>img/img15.png" alt=""></a>
                                                
                                                
                                    <?php
						}
						
						else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist()"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a> 
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
                                                <h5><?php echo substr($popular[$h]['recorded_v_title'],0,20) .$more_pop;?></h5>
                                                <p>Overview-<?php echo substr($popular[$h]['recorded_v_overview'],0,30) .$more_ovr;?></p>
                                                 <p>Price-$<?php echo $popular[$h]['recorded_video'] ?> </p>
                                                <p><?php echo $popular[$h]['total'] ?> viewer</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                <?php } ?>     
                                    
                                    
                                    
								</div>
                                
                                <? if($length>4){
                                
                                $u= 4;
                                $length1 = $length;
                                 }else{
									 $u = 0;  
									  $length1 = $length;
									  } ?>
								<div class="item">	
                                <?php 
								
								
							for($h =$u; $h < $length1 ; $h++){
								if(strlen($popular[$h]['recorded_v_title'])>30){
									$more_pop = "....";
								}else{
									$more_pop = "";
								} 
								 ?>
									
                                    
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                            <?php
                                             if(($this->session->userdata('is_logged_in')=='1') && ($user_type=="User"))
						{
							
                        ?>
                                                <a href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$popular[$h]['recorded_v_title']))._.$popular[$h]['recorded_v_id']?>"><img src="<?php echo base_url(); ?>img/img15.png" alt=""></a>
                                                
                                                
                                    <?php
						}
						
						else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist()"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a> 
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
                                               <h5><?php echo substr($popular[$h]['recorded_v_title'],0,10) .$more_pop;?></h5>
                                               <p>Overview-<?php echo substr($popular[$h]['recorded_v_overview'],0,30) .$more_ovr;?></p>
                                             
                                                <p>Price-$<?php echo $popular[$h]['recorded_video'] ?> </p>
                                                <p><?php echo $popular[$h]['total'] ?> viewer</p>
                                            </div>
                                        </div>
                                    </div>
                                    
									 <?php } ?>
                                    
                                    
								</div>
                             
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa  fa-angle-double-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa  fa-angle-double-right"></i>
							  </a>			
						</div>
                        <?php
			}
						?>
                        <div style="clear:both"></div>
            </div>
        </div>
    </div><!--  -->
   </div>
</section><!--   -->

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
    setInterval( "slideSwitch()", 5000 );
});
//]]> 
</script>
<script type="text/javascript">
//<![CDATA[
function myFunction6() {
    document.getElementById("myVideo6").controls = true;
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