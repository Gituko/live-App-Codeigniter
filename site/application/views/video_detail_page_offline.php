<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Video_details(off-line)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="demo content">
<meta name="keywords" content="demo">
<meta name="author" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/logo0.png" type="image/x-icon">
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

<!-- login -->

<!-- Signup -->

<!-- signup -->
<?php 
	
	$this->load->view("header"); ?>

	
<section id="videodetail">
	<div class="worksection">
		<div class="container-full">
        	<div class="container">
        		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 video_detaile_left_body">
                	<div class="details_body">
                    	<div class="google_add3">
                        	<img src="<?php echo base_url(); ?>img/googleadd3.png" alt="">
                        </div>
                        
                        <div class="video_user_detail">
                        	<div class="userimage">
                            	<img src="<?php echo base_url(); ?>img/videouserimage.png" alt="">
                            </div>
                            <div class="video_sername">
                            	<h4>Samantha Williams</h4>
                            </div>
                            <div class="follow_sec">
                            	<select class="following">
                                	<option value="1" selected>Following</option>
                                    <option value="2">022</option>
                                    <option value="3">033</option>
                                </select>
                                <a href="#"><i class="fa fa-heart"></i><span class="gapp"></span> Follow</a>
                            </div>
                        </div>
                        
                        <div class="user_details_tab">
                        	<ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Custome Video</a></li>
                                <li><a data-toggle="tab" href="#menu1">User Info</a></li>
                                <li><a data-toggle="tab" href="#menu2">Videos</a></li>
                                <li><a data-toggle="tab" href="#menu3">Collections</a></li>
                            </ul>
                            
                            <div class="tab-content usertabcont">
                                <div id="home" class="tab-pane usertabs fade in active">
									<div class="media-wrapper">
                                <video class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/vd_image.png" preload="yes" controls="controls">
                                    <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/mp4">
                                    <source src="<?php echo base_url(); ?>videos/big_buck_bunny.ogg" type="video/ogg">
                                    <source src="<?php echo base_url(); ?>videos/big_buck_bunny.webm" type="video/webm">
                                    <object data="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" width="470" height="255">
                                    <embed src="<?php echo base_url(); ?>videos/big_buck_bunny.swf" width="470" height="255">
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
                                <div class="view"><i class="fa fa-eye"></i><span class="gapp"></span> <a href="#">100</a></div>
                            </div>
                            
                                </div>
                                
         <!------------------------------------------------user info------------------------------------------------------------------------------------>                       
                                
                                <div id="menu1" class="tab-pane usertabs fade">
									<div class="userareas">
                                    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 userinfo_left">
                                        	<h5>User name:</h5>
                                            <p>Samantha Williams</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>User age:</h5>
                                            <p>24</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 userinfo_left">
                                        	<h5>User Gender:</h5>
                                            <p>Female</p>
                                        </div>
                                    </div>
                                </div>
                                <!---**********************end************************************-->
                                
      <!---------------------------------------------------------Videos------------------------------------------------------------------->                          
                                
                                
                                
                                <div id="menu2" class="tab-pane usertabs fade">
									<div class="userareas">
                                       	
                                        <div class="col-lg-4 col-md-4 col-xs-4 col-xs-4 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                        <video onclick="myFunction()" id="myVideo1"  poster="<?php echo base_url(); ?>img/img111.png" width="100%" height="100%" style="max-width:100%;">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/mp4">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.ogg" type="video/ogg">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.webm" type="video/webm">
                                        <object data="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" width="470" height="255">
                                        <embed src="<?php echo base_url(); ?>videos/big_buck_bunny.swf" width="470" height="255">
                                        </object>
                                        </video>
                                    
                                    </div>
                                    <div class="f_video_bottom vdodetel">
                                        <h5>The Forest</h5>
                                        <p>1024 viewer</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                        
                            
                            
                            
                            
                            
                            
                            
                            
                            

                                    </div>
                                </div>
                                
                                
 <!-- --------------------------------------------------------------------------------------------------------------------------------------------------------->                              
                                
                                
                                
                                
                                
                                <div id="menu3" class="tab-pane usertabs fade">
									<div class="userareas">
                                       	
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-xs-3 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                        <video onclick="myFunction111()" id="myVideo111"   poster="<?php echo base_url(); ?>img/videoimg.png" width="100%" height="100%" style="max-width:100%;">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/mp4">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.ogg" type="video/ogg">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.webm" type="video/webm">
                                        <object data="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" width="470" height="255">
                                        <embed src="<?php echo base_url(); ?>videos/big_buck_bunny.swf" width="470" height="255">
                                        </object>
                                        </video>
                                    
                                    </div>
                                    <div class="f_video_bottom vdodetel">
                                        <h5>The Forest</h5>
                                        <p>1024 viewer</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                       
                            
                            
                            
                            

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="details_video">

                            <div class="messagearea">
                           		<h3>Top Videos</h3>
                                
                              <div class="vscroller">
                        		<div class="vscroller-content">
                                
                                 <div class="col-lg-3 col-md-3 col-xs-3 col-xs-3 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                        <video onclick="myFunction1111()" id="myVideo1111" poster="<?php echo base_url(); ?>img/img66.png" width="100%" height="100%" style="max-width:100%;">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/mp4">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.ogg" type="video/ogg">
                                        <source src="<?php echo base_url(); ?>videos/big_buck_bunny.webm" type="video/webm">
                                        <object data="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" width="470" height="255">
                                        <embed src="<?php echo base_url(); ?>videos/big_buck_bunny.swf" width="470" height="255">
                                        </object>
                                        </video>
                                    </div>
                                    <div class="f_video_bottom vdodetel">
                                        <h5>Looper</h5>
                                        <p>1024 viewer</p>
                                    </div>
                                </div>
                            </div>
                            
                            
             
                                
                                 </div>
                               </div> 
                            </div>
                        </div>
                        
                        <div class="videodetails_slider">
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
                                            	<a href="#"><img src="img/img6.png" alt=""></a>
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
                                            	<a href="#"><img src="img/img5.png" alt=""></a>
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
                                            	<a href="#"><img src="img/img3.png" alt=""></a>
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
                                            	<a href="#"><img src="img/img1.png" alt=""></a>
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
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 video_detaile_rightpanel">
                	<div class="left_panel">
                    	<div class="addsec">
                        	<img src="img/googleadd4.png">
                        </div>
                        <div class="addsec">
                        	<img src="img/googleadd4.png">
                        </div>
                        <div class="chat_reply">
                        	<div class="chat_title"><h4>Related Streamer</h4></div>
                           <div class="vscroller vscroller2">
                        	 <div class="vscroller-content">
                               
                            <div class="relatedstrm_col">
                            	<div class="relatedstrm_img"><img src="img/related1.png" alt=""></div>
                                <div class="relatedstrm_body">
                                	<h5>Smita Brown</h5>
                                	<div class="relate_link">
                                    	<span class="rsd"><strong>Age:</strong> 16</span><span class="rsd"><strong>Viewer:</strong> 100</span> <span class="rsdbtn"><a href="#">View</a></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="relatedstrm_col">
                            	<div class="relatedstrm_img"><img src="img/related2.png" alt=""></div>
                                <div class="relatedstrm_body">
                                	<h5>Chery Blossom</h5>
                                	<div class="relate_link">
                                    	<span class="rsd"><strong>Age:</strong> 18</span><span class="rsd"><strong>Viewer:</strong> 200</span> <span class="rsdbtn"><a href="#">View</a></span>
                                    </div>
                                </div>
                            </div>
                            
                            
                         
                           
                            
                            
                            
                            
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
function myFunction() {
    document.getElementById("myVideo1").controls = true;
}
function myFunction2() {
    document.getElementById("myVideo2").controls = true;
}
function myFunction3() {
    document.getElementById("myVideo3").controls = true;
}
function myFunction4() {
    document.getElementById("myVideo4").controls = true;
}
function myFunction5() {
    document.getElementById("myVideo5").controls = true;
}
function myFunction6() {
    document.getElementById("myVideo6").controls = true;
}
function myFunction7() {
    document.getElementById("myVideo7").controls = true;
}
function myFunction7() {
    document.getElementById("myVideo7").controls = true;
}
function myFunction8() {
    document.getElementById("myVideo8").controls = true;
}
function myFunction9() {
    document.getElementById("myVideo9").controls = true;
}
function myFunction10() {
    document.getElementById("myVideo10").controls = true;
}
function myFunction11() {
    document.getElementById("myVideo11").controls = true;
}
function myFunction12() {
    document.getElementById("myVideo12").controls = true;
}
function myFunction111() {
    document.getElementById("myVideo111").controls = true;
}
function myFunction222() {
    document.getElementById("myVideo222").controls = true;
}
function myFunction333() {
    document.getElementById("myVideo333").controls = true;
}
function myFunction444() {
    document.getElementById("myVideo444").controls = true;
}
function myFunction555() {
    document.getElementById("myVideo555").controls = true;
}
function myFunction666() {
    document.getElementById("myVideo666").controls = true;
}
function myFunction777() {
    document.getElementById("myVideo777").controls = true;
}
function myFunction888() {
    document.getElementById("myVideo888").controls = true;
}
function myFunction999() {
    document.getElementById("myVideo999").controls = true;
}
function myFunction1111() {
    document.getElementById("myVideo1111").controls = true;
}
function myFunction2222() {
    document.getElementById("myVideo2222").controls = true;
}
function myFunction3333() {
    document.getElementById("myVideo3333").controls = true;
}
function myFunction4444() {
    document.getElementById("myVideo4444").controls = true;
}
function myFunction5555() {
    document.getElementById("myVideo5555").controls = true;
}
function myFunction6666() {
    document.getElementById("myVideo6666").controls = true;
}
function myFunction1a() {
    document.getElementById("myVideo1a").controls = true;
}
function myFunction2a() {
    document.getElementById("myVideo2a").controls = true;
}
function myFunction3a() {
    document.getElementById("myVideo3a").controls = true;
}
function myFunction4a() {
    document.getElementById("myVideo4a").controls = true;
}
function myFunction5a() {
    document.getElementById("myVideo5a").controls = true;
}
function myFunction6a() {
    document.getElementById("myVideo6a").controls = true;
}
function myFunction1b() {
    document.getElementById("myVideo1b").controls = true;
}
function myFunction2b() {
    document.getElementById("myVideo2b").controls = true;
}
function myFunction3b() {
    document.getElementById("myVideo3b").controls = true;
}
function myFunction4b() {
    document.getElementById("myVideo4b").controls = true;
}
function myFunction5b() {
    document.getElementById("myVideo5b").controls = true;
}
function myFunction6b() {
    document.getElementById("myVideo6b").controls = true;
}
//]]>
</script>
</body>
</html>