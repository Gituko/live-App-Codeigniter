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
                        
                            <a href="<?=site_base_url();?>artist_detail/<?=urlencode(str_replace(" ","_",$row['name']))._.$row['artist_id']?>"><img src="<?php echo site_base_url(); ?>uploads/user_image/<?php echo $row['image']; ?>" alt=""></a>
                            
                            
                           
						<?php
						}
						
						else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist_top()"><img src="<?php echo site_base_url(); ?>uploads/user_image/<?php echo $row['image']; ?>" alt=""></a> 
                 <?
				}
						else{


			?>
							
							
						<a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo site_base_url(); 
							?>uploads/user_image/<?php echo $row['image']; ?>" alt=""></a>
                        
                        
                        <?php
			}
			?>     
						
							
                            
                            
                        </div>
                        <div class="f_video_bottom">
                        	<h5><?php echo $row['name'];?></h5>
                            <p><?php echo $row['total'];?> viewer<span class="name_performer"><a href="#"><?php echo $row['user_name']; ?></a></span></p>
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
   // setInterval( "slideSwitch()", 5000 );
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