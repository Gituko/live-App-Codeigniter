<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
    $url='home';
    $meta_details=$this->module->geting_meta_tags($url);
    //print_r($meta_details);die;
    $meta_tag=stripslashes($meta_details[0]['meta_tag']);
    $meta_title=stripslashes($meta_details[0]['meta_title']);
    ?>
    <title><?php echo $meta_title ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="<?php echo $meta_tag ?>">
    <meta name="keywords" content="<?php echo $meta_tag ?>">
    <meta name="author" content="<?php echo $meta_tag ?>">
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>libreriasJS/boceto/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic|Hind+Madurai|Lato" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>libreriasJS/boceto/css/modern-business.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>libreriasJS/boceto/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function myFunction6(that) {
   var vid =document.getElementById("myVideo6");
    vid.paused ? vid.play() : vid.pause();
   
   // document.getElementById("myVideo6").controls = true;
}
        $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
    
    </script>
    <style>
        li.nav-item {
    padding-left: 3.6em;
}
        
    </style>
  </head>

  <body>
      <div id="header"></div>
    <?php 
    //$this->load->model('module');            
           // $data['video_admin']=$this->module->get_video_admin();
          
    ?>

    <!-- Navigation -->
    
    <nav   class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top" style="background: #259925">
        <a class="navbar-brand" href="<?php echo site_base_url(); ?>home/index">
            <img class="img-responsive" src="<?php echo base_url(); ?>img/logo3.png">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php $cat_list = $this->module->get_cat_list($user_id); ?>             
            <?php foreach ($cat_list as $row){ ?>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>category/index/<?php echo $row['category_name']."_".$row['category_id']; ?>"><?php echo $row['category_name']; ?></a>          
            <?php }?>
        </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php site_base_url() ?>video_category?type=Streaming"><img class="img-responsive" style="width: 81px;" src="<?php echo base_url();  ?>img/ON_AIR.jpg" alt=""></a>
      </li>
      <li class="nav-item">
          
<!--  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>-->

      <form class="form-inline " action="<?=site_base_url();?>video_category" name="search_form" method="get">
        <?php if(isset($_GET['search'])){
            $search=$_GET['search']; 
            $url=site_base_url()."category/video?search=".$search.'&';
            }else{
            $search=''; 
            $url=site_base_url()."category/video?/1=1&";
            }?>
        <input name="search" value="<?php echo $search; ?>" id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search here">
        <button class="btn btn-outline-success my-2 my-sm-0 " type="submit" style="background: black;">
          <img src="<?php echo base_url(); ?>img/searchbtn.png" alt="">
      </button>
    </form>
      </li>
      <ul class="dropdown-menu">
        <li><a href="<?= $url; ?>type=All">All</a></li>
        <li><a href="<?= $url; ?>type=Streaming">Streaming</a></li>
        <li><a href="<?= $url; ?>type=Recorded">Recorded</a></li>
        <li><a href="<?php echo site_base_url(); ?>online_schedule">Online Schedule</a></li>
        <li><a href="<?php echo site_base_url(); ?>main/top_video">Top video</a></li>
        <li><a href="<?php echo site_base_url(); ?>main/top_performer">Top performer</a></li>
        <li><a href="<?php echo site_base_url(); ?>main/latest_shows">Latest shows</a></li>
        </ul>
      <li class="nav-item dropdown">              
            <a class="nav-link dropdown-toggle" href="<?php echo $url; ?>type=All" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              All
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $url ?>type=All">All</a>
              <a class="dropdown-item" href="<?php echo $url ?>type=Streaming">Streaming</a>
              <a class="dropdown-item" href="<?php echo $url ?>type=Recorded">Recorded</a>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>online_schedule">Online Schedule</a>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>top_video/index">Top video</a>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>top_performer/index">Top performer</a>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>latest_shows/index">Lates shows</a>
            </div>
          </li>
          <li class="nav-item">
              <a  class="nav-link" data-toggle="modal" data-target="#myModal" href="#" onclick="clear_validation()">Log in</a>
          
          </li> 
          <li class="nav-item">
              <a class="nav-link"  data-toggle="modal" data-target="#myModal_signup" onclick="clear_validation()"  href="#">Sign up</a>              
          </li>
          <?php 
            $fb_link=$this->module->setting_value('facebook link')[0]['setting_value'];
            $twitter_link=$this->module->setting_value('twitter_link')[0]['setting_value'];
            $linkedin_link=$this->module->setting_value('linkedin_link')[0]['setting_value'];
          ?>
          
          <li class="nav-item"><a class="nav-link" href="<?php echo $fb_link; ?>"><i class="fa fa-facebook " style="color: white;"></i></a></li>  
          <li class="nav-item"><a class="nav-link" href="<?php echo $twitter_link; ?>"><i class="fa fa-twitter" style="color: white;"></i></a></li>  
          <li class="nav-item"><a class="nav-link" href="<?php echo $linkedin_link; ?>" style="text-align: right;"><i class="fa fa-linkedin " style="color: white;"></i></a></li>
    </ul>
  </div>
        
</nav>
    
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<script>
function login() {

var email_id = document.getElementById("email_id").value;
var password1 = document.getElementById("password1").value;

	//if (document.getElementById('Viewers1').checked) {
// var role1 = document.getElementById('Viewers1').value;
//}
//if (document.getElementById('Stremers1').checked) {
//  var role1 = document.getElementById('Stremers1').value;
//}

  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(document.getElementById('remember_me').checked){
		var remember_me='1';
		
		}else{
			var remember_me='0';
			
			}
	
	
	
	if(email_id==''){
		$('#error_login_email').html("Please Enter Name must be required.");
	
	
	}else{
		if(!filter.test(email_id)){
	
		$('#error_login_email').html("Please provide a valid email address.");
		//alert('Please provide a valid email address');
	
			}else{
				$('#error_login_email').hide();
				}
		}
		//alert(role1);
	if(password1==''){
		$('#error_login_password').html("Please Enter Password.");
	//alert("Please Enter Password");
	
	}else{
				$('#error_login_password').hide();
				}

	
	
	if(email_id!='' && password1!='')	
	{
		
		
		if(filter.test(email_id)){
		$.ajax({
		type: "POST",
		 
	url: "<?php echo site_base_url();?>main/login?email_id="+email_id+"&password1="+password1+"&remember_me="+remember_me,
		success:function(response){
                 response=response.trim();
		if(response.trim()=="Success"){
				
			var path = window.top.location.href;
			
			if(path.includes('/video_category')) {
		
         	window.location.href=path;
		
			}else{
				
				
					
				
		
         	window.location.href="<?php echo site_base_url()?>myprofile";
				}
 
		 }
		 if(response=="Pending"){
			 $('#error_login_success').html("You have not activated your account. Kindly activate your account by going to your Email.");
			 }
			 
			  if(response=="not_succefull"){
			 $('#error_login_success').html("Worng Email Id and Password!.");
			 }
		 
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
      <?
     // print_r($_COOKIE);
	  ?>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div class="login_logo">
        	<img src="<?php echo base_url(); ?>img/logo.png" alt="">
        </div>
          <p style="color:#F00" id="error_login_success"></p>
         <div class="form-group">
  			<input type="text" class="form-control login_input" name="email_id" id="email_id" onKeyDown="if (event.keyCode == 13) { return login(); }" value="<?php if(isset($_COOKIE["email_id"])) { echo $_COOKIE["email_id"]; } ?>" required>
            <label class="ani" for="usr">Email id:</label>
             <p style="color:#F00" id="error_login_email"></p>
		</div>
		<div class="form-group">
  			<input type="password" class="form-control login_input" name="password1" id="password1" onKeyDown="if (event.keyCode == 13) { return login(); }" value="<?php if(isset($_COOKIE["password1"])) { echo $_COOKIE["password1"]; } ?>" required>
            <label class="ani" for="pwd">Password:</label>
            <p style="color:#F00" id="error_login_password"></p>
		</div>
         <div class="form-group">
         
  			 <?php /*?><div class="form-group">
        	<label class="role" for="pwd">Role:</label>
          <input type="radio" name="role1" id="Viewers1" value="Viewers" checked >Viewers    
       <input type="radio"  name="role1" id="Stremers1" value="Stremers" > Stremers
     
  		 <p style="color:#F00" id="error_role"></p>
           <!-- 
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>-->
		</div><?php */?>
		</div>
        <div class="checkbox2">
			<label>
			<input id="remember_me" name="remember_me"  type="checkbox" <?php if(isset($_COOKIE["email_id"])) { ?> checked <?php } ?>><span class="gapp"></span> Remember me
            </label>
       </div>
      
       <div class="checkbox2">
			<label><!--<a href="#">Forgot Your Password?</a>-->
            <a href="<?=site_base_url()?>forget_password">Forgot your password ?</a></label>
       </div>
       <button class="btn btn-default btn-success btn-block login_btn" onClick="login();">Login</button>
      
      </div>
      
      <div class="modal-footer">
        <p>Don't have an account? <a data-toggle="modal" data-target="#myModal_signup" href="#">Sign up</a></p>
      </div>
    </div>

  </div>
</div>
    
    
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
            
       
       <input type="radio" name="role"  onclick="package()" id= "Viewers" value="Viewers" checked>Viewers
       <input type="radio"  name="role" onclick="package()" id= "Stremers" value="Stremers" > Stremers
  		 <p style="color:#F00" id="error_role"></p>
           <!-- 
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>-->
		</div>
      
      
     <!-- <div class="form-group" id="package_detail">
        	<label class="role" for="pwd" id="package">Subscription:</label>
            
       <input type="radio"  name="package"  id= "free" value="Free" checked> Free
       <input type="radio" name="package"  id= "feature" value="Feature">Feature
  		 <p style="color:#F00" id="error_package"></p>
           
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>		</div>-->
      
      
      
       <button class="btn btn-default btn-success btn-block login_btn" onClick="signup();">Sign up</button>
      </div>
      <div class="modal-footer">
       <!-- <p>Already have an account? <a href="#" onClick="login_fuction()" data-toggle="modal" data-target="#myModal" >Log in</a></p>-->
      </div> 
    </div>

  </div>
</div>
    
    
