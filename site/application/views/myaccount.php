<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Myaccount</title>
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
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bg_slider.css">

<!-- Include in <head> to load fonts from Google -->
<link href='<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Oswald:500' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Oswald:600' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
	<!-- /#Header-->
<? $this->load->view("header");?>
<section id="myaccount_service">
	<div class="myaccountdiv">
		<div class="container-full">
			<div class="container">
            	
				 <div class="myaccount_holder">
                 	<div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	<div class="panel_holder2">
                        	<div class="myaccount_titlename">
                            	<h3>My Account</h3>
                            </div>
                        	<div class="myaccount_images">
                            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 myac_image">
                                	<div class="myac_user">
                                		<img src="<?php echo base_url(); ?>img/myimage.png">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 myac_details">
                                	<h6>User Name</h6>
                                    <div style="clear:both"></div>
                                    <div class="selectfile">
                                    	<form action="#type your action here" method="POST" enctype="multipart/form-data" name="myForm">
                                            <div id="yourBtn" onClick="getFile()">click to upload a file</div>
                                            <!-- this is your file input tag, so i hide it!-->
                                            <!-- i used the onchange event to fire the form submission-->
                                            <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" type="file" value="upload" onChange="sub(this)"/></div>
                                            <!-- here you can have file submit button or you can write a simple script to upload the file automatically-->
                                            <!-- <input type="submit" value='submit' > -->
										</form>
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                            <ul class="nav nav-tabs leftli">
                                <li><a href="myaccount(step1).html"><i class="fa fa-dashboard myicon blue"></i>Dashboard</a></li>
                                <li><a href="myaccount(step2).html"><i class="fa fa-video-camera myicon blue"></i>Videos</a></li>
                                <li><a href="myaccount(step3).html"><i class="fa fa-music myicon blue"></i>Music</a></li>
                                <li><a href="myaccount(step4).html"><i class="fa fa-level-up myicon blue"></i>Sport</a></li>
                                <li><a href="myaccount(step5).html"><i class="fa fa-home myicon blue"></i>House</a></li>
                                <li><a href="myaccount(step6).html"><i class="fa fa-desktop myicon blue"></i>Live</a></li>
                                <li><a href="myaccount(step7).html"><i class="fa fa-laptop myicon blue"></i>My Channels</a></li>
                                <li><a href="myaccount(step8).html"><i class="fa fa-user myicon blue"></i>My Profile</a></li>
                                <li><a href="myaccount(step9).html"><i class="fa fa-list-alt myicon blue"></i>Edit Profile</a></li>
                                <!--<li><a data-toggle="tab" href="#menu1"><i class="fa fa-heart myicon blue"></i>Save Properties</a></li>-->
                                <!--<li><a data-toggle="tab" href="#menu4"><i class="fa fa-bell myicon blue"></i>Messages Alert</a></li>-->
                                <li><a href="myaccount(step10).html"><i class="fa fa-lock myicon blue"></i>Change Password</a></li>
                                <!--<li><a data-toggle="tab" href="#menu8"><i class="fa  fa-gbp myicon blue"></i>Investment Details</a></li>-->
                                <li><a href="myaccount(step11).html"><i class="fa fa-gears myicon blue"></i>Settings</a></li>
                                <!--<li><a data-toggle="tab" href="#menu7"><i class="fa fa-sign-out myicon blue"></i>Login</a></li>-->
                            </ul>

                        </div>
                        <div style="clear:both"></div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                    
   						<div class="myaccount_top_text tab-content">
                        	<div class="myaccount_search">
                            	<input type="text" class="form-control newmcsearch" name="" value="" placeholder="Advance Search">
                            </div>
                            
                            
                             <div id="home" class="allcourses">
                             	<div class="useraccount">
									<h5><i class="fa fa-dashboard myicon"></i>Dashboard</h5>
								</div>
                                
                                <!--<div class="dashboard_cont ns2">
                           		<div class="col-md-12 gn_title">
									<h5 class="pc_title"><strong>User Report</strong></h5>
								</div>
                                <div class="popular_course">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 dash_pbuy">
                                    	<div class="dash_pbuy_holder">
                                        	<h4>Total <strong>Buy</strong> :</h4>
                                            <h3>12 <span class="">Flats</span></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 dash_pbuy">
                                    	<div class="dash_pbuy_holder gcolor">
                                        	<h4>Total <strong>Rent</strong> :</h4>
                                            <h3>10 <span class="">Flats</span></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 dash_pbuy">
                                    	<div class="dash_pbuy_holder pcolor">
                                        	<h4>Total <strong>Earn</strong> :</h4>
                                            <h3>&pound; <span class="">2000.00</span></h3>
                                        </div>
                                    </div>
                                <div style="clear:both"></div>
                                </div>
                                <div style="clear:both"></div>
                                </div>-->
                                <div style="clear:both"></div>
                                
                                <div class="dashboard_cont">
                           		<div class="col-md-12 gn_title">
									<h5><strong>User Info</strong></h5>
								</div>
                                <div class="student_info">
                                	<div style="display:block;" id="bill1" class="gn_body hide2">
                                        
                                        	<div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>First Name :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>Partha</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Middle Name :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>Sarathi</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Last Name :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>Biswas</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Birthday :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>20/10/1980</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Mailing Address :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>12213 5h Ave St.</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Mailing Address :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>Kolkata</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>State :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>West Bengal</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>ZIP Code :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>700001</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Mobile number :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>000-111-222</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Alternate Phone :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>555-555-555</h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Email :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>partho@webhawkstechnology.com [Verified] </h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                             <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Password :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>********** <span class="cp"><a href="#">Change Password</a></span></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            <div style="clear:both"></div>

                                        </div>
                                </div>
                                <div style="clear:both"></div>
                                </div>
                                <div style="clear:both"></div>
                                
                                <div class="dashboard_cont ns">
                           		<div class="col-md-12 gn_title">
									<h5 class="pc_title"><strong>Notifications</strong></h5>
								</div>
                                <div class="popular_course">
                                
                              		<div class="noti_row">
                                    	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        	<div class="noti_icon">
                                            	<p><i class="fa fa-comment blue"></i></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
                                        <p class="noti_comment"><strong>Service Request Comment :<span class="gapp"></span></strong> has invite you to like </p>
                                        </div>
                                        
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        	<div class="noti_icon">
                                            	<a href="#"><i class="fa fa-times close_small blue"></i></a>
                                            </div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    
                                    <div class="noti_row">
                                    	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        	<div class="noti_icon">
                                            	<p><i class="fa fa-comment blue"></i></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
                                        <p class="noti_comment"><strong>Service Request Comment :<span class="gapp"></span></strong> has invite you to like </p>
                                        </div>
                                        
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        	<div class="noti_icon">
                                            	<a href="#"><i class="fa fa-times close_small blue"></i></a>
                                            </div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    
                                    <div class="noti_row">
                                    	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        	<div class="noti_icon">
                                            	<p><i class="fa fa-comment blue"></i></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
                                        <p class="noti_comment"><strong>Service Request Comment :<span class="gapp"></span></strong> has invite you to like </p>
                                        </div>
                                        
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        	<div class="noti_icon">
                                            	<a href="#"><i class="fa fa-times close_small blue"></i></a>
                                            </div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    
                                <div style="clear:both"></div>
                                </div>
                                <div style="clear:both"></div>
                                </div>
                                <div style="clear:both"></div>

                           </div>
                           
                       
                           
                            <div style="clear:both"></div>
						</div>
                    </div>
                    <div style="clear:both"></div>
                 </div>
			</div><!-- /.container -->
		</div><!-- /.container-full -->
	</div> <!-- /.servicediv -->
</section><!-- /#Service -->

<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->
<? $this->load->view("footer");?>
<!-- /.footer -->


	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="<?php echo base_url(); ?>http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/script.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-v1.11.0.js"></script> 
    <!---------select file-------->

<script type="text/javascript">
//<![CDATA[
 function getFile(){
   document.getElementById("upfile").click();
 }
 function sub(obj){
    var file = obj.value;
    var fileName = file.split("\\");
    document.getElementById("yourBtn").innerHTML = fileName[fileName.length-1];
    document.myForm.submit();
    event.preventDefault();
  }
  //]]> 
</script>
<!-----------end----------->
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
<script type="text/javascript">
 //<![CDATA[
$(function() {
$("#btnright4").click(function() {
$('#slidediv2').toggle('slide', { direction: 'left' }, 700);
});
$("#btnright3").click(function() {
$('#slidediv2').toggle('slide', { direction: 'left' }, 700);
});
$("#filterbtn").click(function() {
$('#slideleftpanel').toggle('slide', { direction: 'left' }, 700);
});
});
//]]> 
</script>
</body>
</html>