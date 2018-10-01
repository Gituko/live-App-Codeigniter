<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">


<?php
$url='category';
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

<?php
$user_type = $this->session->userdata('type');
?>


<? $this->load->view("header");?>




<?	

if(isset($_GET['search'])){
		$name='Search Result';
		 }

else{
$segement=$this->uri->segment(2);
				$cat_id = explode('_',$segement);
				 $category_id= $cat_id[(count($cat_id)-1)]; 
				$category_name=$this->module->get_category_name($category_id);
				$name=$category_name[0]['category_name'];
}
				?>
	

<section id="somework">
	<div class="worksection">
		<div class="container-full">
			<div class="container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title_holder">
                	<div class="f_title">
                    	<h2><?php echo $name;?></h2>
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
					 $ovr=substr($row['recorded_v_overview'],0,45);
					$length_ovr = strlen($row['recorded_v_overview']);
					
					if($length_ovr>40){
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
					
                        if(($this->session->userdata('is_logged_in')=='1') && ($user_type=="User"))
						{
							
							
				
				
                        ?>
                            <a href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$row['recorded_v_title']))._.$row['recorded_v_id']?>"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a>
                            
						<?php
			}else if($user_type=="Artist"){
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
                        	
							
							
							<?php
						}
						
	/**********************************************************************************************************************************************************/					
						
						
						
						if($type=='Streaming')
						{
							
					/****************************************************/		
							
					 if(($this->session->userdata('is_logged_in')=='1') && ($user_type=="User"))
					{
						
				
                        ?>		
							
			<span class="active_live_video">Live<span class="gapp"></span><i class="fa fa-circle"></i></span>
                            
                          <a href="<?=site_base_url();?>video_details_page/<?=urlencode(str_replace(" ","_",$row['recorded_v_title']))._.$row['recorded_v_id']?>"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a> 
                          
                <?php
			}else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist()"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a> 
                 <?
				}
			
			else{
	
			?>
              <span class="active_live_video">Live<span class="gapp"></span><i class="fa fa-circle"></i></span>
                  <a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a>       
                          
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
                             
                             
                       <?php
						if($type=='Recorded')
						{
						?>
                             <p title="Price"><b>Price</b>-$<?=$row['recorded_video']?></p>
                            <?php
						}else{
						?>
                              <p title="Price"><b>Price</b>-$<?=$row['live_video']?></p>
                         
                            
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
                
                <div class="pagination_area">
										 
							 <div class="pagination_right">
										<? echo $this->pagination->create_links(); ?>
									</div>
								 
									<div class="spacer"></div>
							   
								</div>
        
			</div> <!--/.container-->
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
</section><!-- /#somework -->
<script>
function artist(){
	alert("This feature is for only Viewers,not for Streamers")
	}
</script>
<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<?php  $this->load->view("footer");?>


<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/script.js"></script>
	<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
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

 <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"60%", height:"40%"});
				
			});
		</script> 





</body>
</html>