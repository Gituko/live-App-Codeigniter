<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Index</title>
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
     <script>
function signup() {
var user_name = document.getElementById("user_name").value;	
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var repassword = document.getElementById("repassword").value;


  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
	if(user_name==''){
		  $('#error_user_name').html("Please Enter User Name must be required.");

	}else{
		$('#error_user_name').hide();
		}
	if(name==''){
		 $('#error_name').html("Please Enter Name must be required.");
	}else{
		$('#error_name').hide();
		}
	if(email==''){
		$('#error_email').html("Please Enter Name must be required.");
	
	
	}else{
		if(!filter.test(email)){
	
		$('#error_email').html("Please provide a valid email address.");
		//alert('Please provide a valid email address');
	
			}else{
				$('#error_email').hide();
				}
		}
		//alert(password);
	if(password==''){
		$('#error_password').html("Please Enter Password.");
	//alert("Please Enter Password");
	
	}else{
				$('#error_password').hide();
				}
	if(repassword==''){
		$('#error_re_password').html("Please Enter Re password.");
	//alert("Please Enter Re password");

	}else{
		if(repassword!=password){
		$('#error_re_password').html("Re-Type Password Must Be Same");
	//alert("Please Enter Re password");
	
	}else{
		$('#error_re_password').hide();
		}
		
		}
	
	if (document.getElementById('Viewers').checked) {
  role = document.getElementById('Viewers').value;
}
if (document.getElementById('Stremers').checked) {
  role = document.getElementById('Stremers').value;
}

	
	if(user_name!='' && name!='' && password!='' && repassword!='' && repassword==password && role!='')	
	{
		
		
		if(filter.test(email)){
		$.ajax({
		type: "POST",
		
	url: "<?php echo site_base_url();?>signup?user_name="+user_name+"&name="+name+"&email="+email+"&password="+password+"&role="+role,
		success:function(response){
			//$("")
		 alert(response);
		 if(response="success"){
		 $('#error_success').html("Your Registration! is successfully done Confirmation Email has send to your email id.");
		 
		  document.getElementById("name").value='';  
		  document.getElementById("user_name").value='';	
         
           document.getElementById("email").value='';
       document.getElementById("password").value='';
       document.getElementById("repassword").value='';
	   document.getElementById("role").value='';
 
		 }
		 if(response=="invalid"){
			 $('#error_success').html("Your Enter Email Id Was Already Registrated.Please Enter Another Email Id.");
			 }
		 
			}
		//data: dataString,
		//cache: false,
		});
		
		}
	}
		
}
</script>   
</head>
<body>

<!-- login -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<script>
function login() {

var email = document.getElementById("email_id").value;
var password = document.getElementById("password1").value;

var role = document.getElementById("role1").value;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
	
	
	if(email==''){
		$('#error_login_email').html("Please Enter Name must be required.");
	
	
	}else{
		if(!filter.test(email)){
	
		$('#error_login_email').html("Please provide a valid email address.");
		//alert('Please provide a valid email address');
	
			}else{
				$('#error_login_email').hide();
				}
		}
		//alert(password);
	if(password==''){
		$('#error_login_password').html("Please Enter Password.");
	//alert("Please Enter Password");
	
	}else{
				$('#error_login_password').hide();
				}

	
	
	if(email!='' && password!='' && role!='')	
	{
		
		
		if(filter.test(email)){
		$.ajax({
		type: "POST",
		
	url: "<?php echo site_base_url();?>login?email="+email+"&password="+password+"&role="+role,
		success:function(response){
			//$("")
		 //alert(response);
		  	
         
           document.getElementById("email_id").value='';
       document.getElementById("password1").value='';
       
	   document.getElementById("role1").value='';
 
			
			}
		//data: dataString,
		//cache: false,
		});
		
		}
	}
		
}
</script>
    <!-- login Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div class="login_logo">
        	<img src="<?php echo base_url(); ?>img/logo.png" alt="">
        </div>
          <form>
         <div class="form-group">
  			<input type="text" class="form-control login_input" name="email" id="email_id" required>
            <label class="ani" for="usr">Email_id:</label>
             <p style="color:#F00" id="error_login_email"></p>
		</div>
		<div class="form-group">
  			<input type="password" class="form-control login_input" name="password" id="password1" required>
            <label class="ani" for="pwd">Password:</label>
            <p style="color:#F00" id="error_login_password"></p>
		</div>
         <div class="form-group">
         
  			 <div class="form-group">
        	<label class="role" for="pwd">Role:</label>
            
       <input type="radio"  name="role" id="role1" value="Stremers"> Stremers
       <input type="radio" name="role" id="role1" value="Viewers">Viewers
  		 <p style="color:#F00" id="error_role"></p>
           <!-- 
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>-->
		</div>
		</div>
        <div class="checkbox2">
			<label>
			<input value="" checked="" type="checkbox"><span class="gapp"></span> Remember me
            </label>
       </div>
       <div class="checkbox2">
			<label><a href="#">Forgot Your Password?</a></label>
       </div>
       <button class="btn btn-default btn-success btn-block login_btn" type="submit" onClick="return login();">Login</button>
      
      </div>
      </form>
      <div class="modal-footer">
        <p>Don't have an account? <a href="#">Sign up</a></p>
      </div>
    </div>

  </div>
</div>
<!-- login -->

<!------------------------------------------- Signup ------------------------------------------------>


<div id="myModal_signup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- signup Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div class="login_logo">
        	<img src="<?php echo base_url(); ?>img/logo.png" alt="">
           
        </div>
          <p style="color:#F00" id="error_success"></p>
  			<div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="user_name" required>
            <label class="ani" for="usr">User Name:</label>
              <p style="color:#F00" id="error_user_name"></p>
			</div>
  			<div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="name" required>
            <label class="ani" for="usr">Full Name:</label>
            <p style="color:#F00" id="error_name"></p>
			</div>
            <div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="email" required>
            <label class="ani" for="usr">Email:</label>
             <p style="color:#F00" id="error_email"></p>
              
			</div>
			<div class="form-group">
  			<input type="password" class="form-control login_input" name="user" id="password" required>
            <label class="ani" for="pwd">Password:</label>
             <p style="color:#F00" id="error_password"></p>
			</div>
            <div class="form-group">
  			<input type="password" class="form-control login_input" name="user" id="repassword" required>
            <label class="ani" for="pwd">Re-Type Password:</label>
             <p style="color:#F00" id="error_re_password"></p>
			</div>
        <div class="form-group">
        	<label class="role" for="pwd" id="role">Role:</label>
            
       <input type="radio"  name="role"  id= "Stremers" value="Stremers" checked> Stremers
       <input type="radio" name="role"  id= "Viewers" value="Viewers">Viewers
  		 <p style="color:#F00" id="error_role"></p>
           <!-- 
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>-->
		</div>
        <div class="checkbox">
			<label>
			<input value="" checked="" type="checkbox">Remember me
            </label>
       </div>
       <button class="btn btn-default btn-success btn-block login_btn" onClick="signup();">Sign up</button>
      </div>
      <div class="modal-footer">
        <p>Already have an account? <a href="#">Log in</a></p>
      </div>
    </div>

  </div>
</div>
<!-- signup -->

	<header id="header">
		<section id="headnev" class="navbar topnavbar" >		
			<div class="container">
				<div class="navbar-header">
					<!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>-->
					<a href="#header" class="navbar-brand header"><img src="<?php echo base_url(); ?>img/logo.png"></a>
				</div> <!-- /.navbar-header -->

				<div class="navbar-collapse">
					<div id='cssmenu'>
                        <ul>
                        <li><a href='<?php echo base_url(); ?>index.html'>Home</a></li>
                        <li class='active'><a href='#'>Videos</a>
                          <ul>
                             <li><a href='#'>Travel</a></li>
                             <li><a href='#'>Adventure</a></li>
                             <li><a href='#'>Sports</a></li>
                             <li><a href='#'>Sci-Fi</a></li>
                             <li><a href='#'>Horror</a></li>
                             <li><a href='#'>Accident</a></li>
                             <li><a href='#'>Deep Sea</a></li>
                             <li><a href='#'>Coral</a></li>
                             <li><a href='#'>Universe</a></li>
                             <li><a href='#'>Natural Beauty</a></li>
                             <li><a href='#'>Fitness</a></li>
                             <li><a href='#'>Health</a></li>
                             <li><a href='#'>Cinstraction</a></li>
                             <li><a href='#'>Auto-Machines</a></li>
                          </ul>
                        </li>
                        <li><a href='#'>Live</a></li>
                        </ul>
                    </div>
				</div> <!-- /.collapse /.navbar-collapse -->
                
                <div id="dropserch" class="collapse serch_mobile">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mobsearch">
                	<div class="search_box">
                    	<input type="text" class="form-control searchinput" name="" value="" placeholder="Search here">
                        <input type="submit" class="sear_btn" name="" value=""> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea">
                    	<a data-toggle="modal" data-target="#myModal" href="#">Log in</a>
                        <a data-toggle="modal" data-target="#myModal_signup" href="#">Sign up</a>
                    </div>
                </div>
                <div class="spacer"></div>
                </div>
                
                <div class="non_serch_mobile">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mobsearch">
                	<div class="search_box">
                    	<input type="text" class="form-control searchinput" name="" value="" placeholder="Search here">
                        <input type="submit" class="sear_btn" name="" value=""> 
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea">
                    	<a data-toggle="modal" data-target="#myModal" href="#">Log in</a>
                        <a data-toggle="modal" data-target="#myModal_signup" href="#">Sign up</a>
                    </div>
                </div>
                </div>
               
                <button data-toggle="collapse" data-target="#dropserch" type="button" class="searchicon">
						<i class="fa fa-search"></i>
					</button>
			</div> <!-- /.container -->	
		</section><!-- /#headnev -->
	</header><!-- /#Header-->


	<section id="slider">
		<div class="container-full">
			<div class="slider">
            	<div class="slider_holder">			
                     <div id="slideshow">
                        <img src="<?php echo base_url(); ?>img/image1.jpg" alt="Slideshow Image 1" class="active" />
                        <img src="<?php echo base_url(); ?>img/image2.jpg" alt="Slideshow Image 2" />
                        <img src="<?php echo base_url(); ?>img/image3.jpg" alt="Slideshow Image 3" />
                        <img src="<?php echo base_url(); ?>img/image4.jpg" alt="Slideshow Image 4" />
                        <img src="<?php echo base_url(); ?>img/image5.jpg" alt="Slideshow Image 5" />
                        <img src="<?php echo base_url(); ?>img/image6.jpg" alt="Slideshow Image 6" />
                        <img src="<?php echo base_url(); ?>img/image7.jpg" alt="Slideshow Image 7" />
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
                                                    <p><span class="white">streaming</span> SpongeBob SquarePants: Battle..</span>
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
	<div class="worksection">
		<div class="container-full">
			<div class="container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title_holder">
                	<div class="f_title">
                    	<h2>Featured Videos</h2>
                    </div>
                    <div class="viewallvdo">
                    	<a href="#">View All Videos</a>
                    </div>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a>
                        </div>
                        <div class="f_video_bottom">
                        	<h5>The Forest</h5>
                            <p>1024 viewer</p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img2.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>Pacific Rim</h5>
                            <p>1889 viewer</p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img3.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>Avengers</h5>
                            <p>1000 viewer</p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img4.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>Lord of The Rings</h5>
                            <p>2015 viewer</p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img5.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>Transformer</h5>
                            <p>1875 viewer</p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img6.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>Looper</h5>
                            <p>1302 viewer</p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img7.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>London has fallen</h5>
                            <p>1020 viewer</p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img8.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>Fantastic 4</h5>
                            <p>1820 viewer</p>
                        </div>
                	</div>
                </div>
                
                
                
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
                    	<h2>Top Performers</h2>
                    </div>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img5.png" alt=""></a>
                        </div>
                        <div class="f_video_bottom">
                        	<h5>Transformer</h5>
                            <p>500 viewer<span class="name_performer"><a href="#">kevin Williams</a></span></p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img9.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>Hobbit</h5>
                            <p>1889 viewer<span class="name_performer"><a href="#">Melancholi Foster</a></span></p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img10.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>Fifty Shades of Grey</h5>
                            <p>1000 viewer<span class="name_performer"><a href="#">Harshad Husen</a></span></p>
                        </div>
                	</div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                            <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img11.png" alt=""></a>
                        </div>
                    <div class="f_video_bottom">
                        	<h5>X-Men</h5>
                            <p>2015 viewer<span class="name_performer"><a href="#">kevin Williams</a></span></p>
                        </div>
                	</div>
                </div>
             
			</div> <!--/.container-->
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
</section><!-- /#somework -->


<section id="portfolio">
	<div class="container-full">
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 googleadd">
            	<div class="addholder">
                	<a href="#"><img src="<?php echo base_url(); ?>img/googleadd1.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 googleadd">
            	<div class="addholder">
                	<a href="#"><img src="<?php echo base_url(); ?>img/googleadd2.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 googleadd">
            	<div class="addholder">
                	<a href="#"><img src="<?php echo base_url(); ?>img/googleadd1.png" alt=""></a>
                </div>
            </div>
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
        <div class="rent_prop_row">
        	<div class="popularshows">
            	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
                                	
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                                <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img12.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer</p>
                                            </div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                                <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img13.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer</p>
                                            </div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                                <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img14.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                                <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img15.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer</p>
                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="item">	
                                
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                                <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img12.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer</p>
                                            </div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                                <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img13.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer</p>
                                            </div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                                <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img14.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                                        <div class="feature_video_holder">
                                            <div class="vdo_image">
                                                <a href="video_detail_page(off-line).html"><img src="<?php echo base_url(); ?>img/img15.png" alt=""></a>
                                            </div>
                                        <div class="f_video_bottom">
                                                <h5>Fifty Shades of Grey</h5>
                                                <p>1000 viewer</p>
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
    </div><!--  -->
   </div>
</section><!--   -->

<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<section id="footer">
	<footer class="container-full">
		<div class="container">
			<div class="footer_links">
            	<ul>
                	<li><a href="<?php echo base_url(); ?>aboutus.html">About us</a></li>
                    <!--<li><a href="#">Videos</a></li>
                    <li><a href="#">Musics</a></li>-->
                    <li><a href="<?php echo base_url(); ?>help.html">Help</a></li>
                    <li><a href="<?php echo base_url(); ?>termsandcondition.html">Terms & Conditions</a></li>
                    <li><a href="<?php echo base_url(); ?>privacypolicy.html">Privacy Policy</a></li>
                    <li><a href="<?php echo base_url(); ?>ad_choice.html">Ad Choice</a></li>
                </ul>
            </div>
            
            <div class="footer_social">
            	<ul>
                	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            
            <div class="paypal">
            	<img src="<?php echo base_url(); ?>img/paypal.png" alt="">
            </div>
		</div> <!-- /.container -->

		<div class="clear-bottom copyright ff_bottom">
			<p class="foot_left" style="margin-bottom:0 !important;"> Copyright &copy; 2017, All Rights Reserved.</p> <p class="foot_right">Designed and Developed by <a style="color:#fff !important;" href="http://webhawksindia.com">Webhawks Technology</a></p>

		</div> <!-- /.clear-bottom /.copyright -->

	</footer> <!-- /.container-full -->
</section> <!-- /.footer -->


<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="<?php echo base_url(); ?>http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/script.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.2.6.min.js"></script>
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

</body>
</html>