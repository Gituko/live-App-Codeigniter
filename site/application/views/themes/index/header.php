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
    <title>Observum</title>
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/componentes/estilos.css">
	
	
	<!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css'>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/styleCarousel.css">
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>libreriasJS/boceto/css/modern-business.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>libreriasJS/boceto/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $_SERVER['server_name'];  ?>/admin/assets/fnsGenerales.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
    
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1991649164552838",
    enable_page_level_ads: true
  });
</script>
<!--<script>
    jQuery(document).ready(function($) {
         $('video').click(function() {
        this.paused ? this.play() : this.pause();
        });
    });
</script>-->

    
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



var package='';
/*
if (document.getElementById('free').checked) {
  package = document.getElementById('free').value;
}
if (document.getElementById('feature').checked) {
  package = document.getElementById('feature').value;
}
*/

	if(user_name!='' && name!='' && password!='' && repassword!='' && repassword==password && role!='')	
	{
		
	
		if(filter.test(email)){
		$.ajax({
		type: "POST",
		
	url: "/main/signup?user_name="+user_name+"&name="+name+"&email="+email+"&password="+password+"&role="+role+"&package="+package,
		success:function(response){
			//$("")
		//alert(response);
		  //$('#mail').html(response);
		  response=response.trim();
                  
                  console.log(response);
		  
		  
		   if(response=="present")
		 {
			  $('#error_success').html("Your Enter Email Id Was Already Registrated.Please Enter Another Email Id.");
			  
			  
			  document.getElementById("name").value='';  
		  document.getElementById("user_name").value='';	
         
           document.getElementById("email").value='';
       document.getElementById("password").value='';
       document.getElementById("repassword").value='';
	   document.getElementById("role").value='';
	    document.getElementById("package").value='';
			  
			 
		 }
		  
		  
		  
		  
		  
		  
		 if(response=="success"){
		
		  $('#error_success').html("Your Registration! is successfully done Confirmation Email has send to your email id.");
		  document.getElementById("name").value='';  
		  document.getElementById("user_name").value='';	
         
           document.getElementById("email").value='';
       document.getElementById("password").value='';
       document.getElementById("repassword").value='';
	   document.getElementById("role").value='';
	    document.getElementById("package").value='';
 
		 }
		 
		 if(response=="successfeature")
		 {
			 location.href="/payment_package";
			 
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
        #navbarSupportedContent{
            width:100%;
        }
        #navbarSupportedContent ul{
            width:100%;
            display:flex;
            justify-content: space-evenly;
        }
        #navbarSupportedContent ul li{
		    height: 50px;
		margin: 0px;
/*                border: 1px solid white;*/
        }
        .videoFullScreen{
           
           width: 100%;
             height: auto;
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
    
    <nav    class="navbar fixed-top navbar-expand-lg navbar-dark  navbar-fixed-top" style="margin-bottom:0px; background:#141414; ">
<!--        #259925-->
        
        
<div class="d-lg-none d-md-block d-sm-block d-xs-block d-block col" style=" float: left">
    <div class="">
        <div class="col-md-2 col-xs-4 col-sm-4 col-3" style="">
            <a  href="<?php echo site_base_url(); ?>home/index">
            <img class="img-responsive" src="<?php echo base_url(); ?>img/logo3.png">
        </a>
        </div>
        
     

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="
    position: relative;
	top:15px;
    float: right;">
          <span class="navbar-toggler-icon"></span>
        </button>
   
    </div>
</div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
        <li class="nav-item  col-sm-12 col-xs-12 d-block d-sm-block d-xs-block d-md-none d-lg-none d-xl-none" style="margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px;">
     

      <form class="form-inline " action="<?=site_base_url();?>category/video?" name="search_form" method="get">
        <?php if(isset($_GET['search'])){
            $search=$_GET['search']; 
            $url=site_base_url()."category/video?1=1&search=".$search.'&';
            }else{
            $search=''; 
            $url=site_base_url()."category/video?/1=1&";
            }?>
          
          <input type="hidden" name="1" value="1">
          <input  name="search" value="<?php echo $search; ?>" id="search" class="form-control col-lg-11 col-md-11 col-sm-11 col-xs-11" style="width:88%;" type="search" placeholder="Search" aria-label="Search here">
          <style>
              #btnSearch,#btnSearch:active, #btnSearch:focus{
                  background: black; border-color: black; width: 12%;
              }  
          </style>
          <button  id="btnSearch" class="btn  col-lg-1 col-md-1 col-sm-1 col-xs-1" type="submit" style="">
            <img class="img img-responsive" src="<?php echo base_url(); ?>img/searchbtn.png" alt="">
        </button>
        
    </form>
      </li>
        <li class="nav-item d-xl-block d-lg-block d-md-block d-sm-none d-xs-none d-none">
		<a href="<?php echo site_base_url(); ?>home/index" >
            <img style="max-width:50px; max-height:50px;" class="img-responsive" src="<?php echo base_url(); ?>img/logo_main.png">
        </a></li>
      <li class="nav-item dropdown">
          <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <?php $cat_list = $this->module->get_cat_list($user_id); ?>             
            <?php foreach ($cat_list as $row){ ?>
              <a class="dropdown-item" style="z-index: 10000000000" href="<?php echo site_base_url(); ?>category/index/<?php echo $row['category_name']."_".$row['category_id']; ?>"><?php echo $row['category_name']; ?></a>          
            <?php }?>
        </div>
      </li>
<!--   
   <li class="nav-item">
          <a class="nav-link" href="<?php echo site_base_url() ?>category/video?1=1&type=Streaming"><img class="img-responsive" style="width: 81px;" src="<?php echo base_url();  ?>img/ON_AIR.jpg" alt=""></a>
      </li>
 -->     <li class="nav-item col-lg-3 col-md-5 col-sm-12 col-xs-12 d-none d-sm-none d-xs-none d-md-block d-lg-block d-xl-block" style="margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px;">
     

      <form class="form-inline " action="<?=site_base_url();?>category/video?" name="search_form" method="get">
        <?php if(isset($_GET['search'])){
            $search=$_GET['search']; 
            $url=site_base_url()."category/video?1=1&search=".$search.'&';
            }else{
            $search=''; 
            $url=site_base_url()."category/video?/1=1&";
            }?>
          
          <input type="hidden" name="1" value="1">
          <input  name="search" value="<?php echo $search; ?>" id="search" class="form-control col-lg-9 col-md-11 col-sm-11 col-xs-11" style="width:88%;" type="search" placeholder="Search" aria-label="Search here">
          <style>
              #btnSearch,#btnSearch:active, #btnSearch:focus{
                  background: black; border-color: black; width: 12%;
              }  
          </style>
          <button  id="btnSearch" class="btn  col-lg-1 col-md-1 col-sm-1 col-xs-1" type="submit" style="padding:9px">
            <img class="img img-responsive" src="<?php echo base_url(); ?>img/searchbtn.png" alt="">
        </button>
        
    </form>
      </li>
      

      <li class="nav-item dropdown">              
            <a style="color: white;" class="nav-link dropdown-toggle" href="<?php echo $url; ?>type=All" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              All
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a   class="dropdown-item" href="<?php echo $url ?>type=All">All</a>
              <a class="dropdown-item" href="<?php echo $url ?>type=Streaming">Streaming</a>
              <a class="dropdown-item" href="<?php echo $url ?>type=Recorded">Recorded</a>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>online_schedule">Online Schedule</a>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>top_video/index">Top video</a>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>top_performer/index">Top performer</a>
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>latest_shows/index">Lates shows</a>
            </div>
          </li>
          <?php
			 if($this->session->userdata('is_logged_in')=='1'){
				 
			
	$type = $this->session->userdata('type');
			if($type=="User"){
				
				$user_id = $this->session->userdata('user_id');
				$detail= $this->module->get_user_detail($user_id);
				}else{
					
					$user_id = $this->session->userdata('artist_id');
					$detail= $this->module->get_artist_detail($user_id);
					}
					
				
			?>
          <li class="nav-item dropdown">              
            <a class="nav-link dropdown-toggle" href="<?php echo $url; ?>type=All" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <div style="float: left; margin-right: 5px;">
                    <?php if($detail[0]['image']!=''){ ?>
                                <img class="img img-responsive" style="width: 24px; height: 24px;" src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" id="header_img_2">
                                          <?php } else { ?>
                                <img class="img img-responsive" style="width: 24px; height: 24px;" src="<?php echo base_url(); ?>img/myimage2.png" id="header_img_2">
       <?php } ?>
                
                </div>
                <div style="float: left; color: white"><?php  echo $detail[0]['name'];  ?></div>
                
                
                
<!--                <div class="row">
                <div class="col-lg-4">
                 <?php if($detail[0]['image']!=''){ ?>
                                <img class="img img-responsive" style="width: 24px; height: 24px;" src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" id="header_img_2">
                                          <?php } else { ?>
                                <img class="img img-responsive" style="width: 24px; height: 24px;" src="<?php echo base_url(); ?>img/myimage2.png" id="header_img_2">
       <?php } ?>
                </div>
                <div class="col-lg-8"><?php echo  $detail[0]['name']; ?></div>
                </div>-->
             
                               
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_base_url(); ?>logout"><i class="fa fa-sign-out myicon blue"></i>Log Out</a>              
              <a class="dropdown-item" href="<?php echo site_base_url() ?>panel/myprofile"><i class="fa fa-user myicon blue"></i>My Profile</a>
              
              <?php 
              $user_id=$_SESSION['type']=="User"?$_SESSION['user_id']:$_SESSION['artist_id'];
            $userType=$_SESSION['type']=="User"?"2":"1";
            
                $totalNotes =$this->stream->createQueryBuilder("t")
                            ->select("count(t.id)")
                            ->from("stream\\view_notes_by_user", "t")
                            ->where("t.id_user='" .$user_id. "' and "
                                      . "t.type_user=".$userType)
                            ->getQuery()->getResult();
              ?>
              <a class="dropdown-item" href="<?php echo site_base_url() ?>panel/payments"><i class="fa fa-money myicon blue"></i>Total: <?php echo  $totalNotes[0][1]; ?> </a>
              
            </div>
          </li>
<!--          <div class="col-lg-6 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea2">
                    	
                        <div class="accountname">
                        	<div class="account_imgthumb">
                            	 <?php if($detail[0]['image']!=''){ ?>
                                <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" id="header_img_2">
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png" id="header_img_2">
       <?php } ?>
                            </div>
                            <div class="accname">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_base_url(); ?>myprofile"><?=$detail[0]['name']?><span class="drop"><img src="<?php echo base_url(); ?>img/drop.png"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Log out</a><a href="<?php echo site_base_url(); ?>logout"><i class="fa fa-sign-out myicon blue"></i>Log Out</a></li>
                                     <li><a href="<?php echo site_base_url(); ?>myprofile"><i class="fa fa-user myicon blue"></i>My Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->
                         <?php }else{?>
          
          <li class="nav-item">
              <a style="color:white;" class="nav-link" data-toggle="modal" data-target="#myModal" href="#" onclick="clear_validation()">Log in</a>
          
          </li> 
          <li class="nav-item">
              <a style="color: white;" class="nav-link"  data-toggle="modal" data-target="#myModal_signup" onclick="clear_validation()"  href="#">Sign up</a>              
          </li>
          <?php }?>
          <?php 
            $fb_link=$this->module->setting_value('facebook link')[0]['setting_value'];
            $twitter_link=$this->module->setting_value('twitter_link')[0]['setting_value'];
            $linkedin_link=$this->module->setting_value('linkedin_link')[0]['setting_value'];
          ?>
          
          <li class="nav-item"><a class="nav-link" href="<?php echo $fb_link; ?>"><i class="fa fa-facebook " style="color: white;"></i></a></li>  
          <li class="nav-item"><a class="nav-link" href="<?php echo $twitter_link; ?>"><i class="fa fa-twitter" style="color: white;"></i></a></li>  
          <li class="nav-item"><a class="nav-link" href="<?php echo $linkedin_link; ?>" ><i class="fa fa-linkedin " style="color: white;"></i></a></li>
          
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
				
				
					
				
		
         	window.location.href="<?php echo site_base_url()?>panel/myprofile";
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
        <style>
            .login_logo{
                  
    
    padding: 11px 20px 5px 20px;
    width: 100%;
            
    .login_logo img{
        width: 40%;
    }
            
        </style>
      <div class="modal-body" style="margin: auto;">
          <div class="login_logo" >
              <img style="max-width:100px;" src="<?php echo base_url(); ?>img/logo3.png" alt="">
                <!--/site//img/logo3.png-->
        </div>
          <p style="color:#F00" id="error_login_success"></p>
         <div class="form-group">
  			<input type="text" class="form-control login_input" name="email_id" id="email_id" onKeyDown="if (event.keyCode == 13) { return login(); }" value="<?php if(isset($_COOKIE["email_id"])) { echo $_COOKIE["email_id"]; } ?>" required>
            <label class="ani" for="usr">Email</label>
             <p style="color:#F00" id="error_login_email"></p>
		</div>
		<div class="form-group">
  			<input type="password" class="form-control login_input" name="password1" id="password1" onKeyDown="if (event.keyCode == 13) { return login(); }" value="<?php if(isset($_COOKIE["password1"])) { echo $_COOKIE["password1"]; } ?>" required>
            <label class="ani" for="pwd">Password</label>
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
       <button class="col-lg-3 btn btn-default btn-success btn-block login_btn" style="float:right;" onClick="login();">Login</button>
      
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
            <img style="max-width: 100px" src="<?php echo base_url(); ?>img/logo3.png" alt="">
           
        </div>
          <p style="color:#F00" id="error_success"></p>
  			<div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="user_name" required>
            <label class="ani" for="usr">User Name</label>
              <p style="color:#F00" id="error_user_name"></p>
			</div>
  			<div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="name" required>
            <label class="ani" for="usr">Full Name</label>
            <p style="color:#F00" id="error_name"></p>
			</div>
            <div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="email" required>
            <label class="ani" for="usr">Email</label>
             <p style="color:#F00" id="error_email"></p>
              
			</div>
			<div class="form-group">
  			<input type="password" class="form-control login_input" name="user" id="password" required>
            <label class="ani" for="pwd">Password</label>
             <p style="color:#F00" id="error_password"></p>
			</div>
            <div class="form-group">
  			<input type="password" class="form-control login_input" name="user" id="repassword" required>
            <label class="ani" for="pwd">Re-Type Password</label>
             <p style="color:#F00" id="error_re_password"></p>
			</div>
        <div class="form-group">
        	<label class="role" for="pwd" id="role">Role</label>
            
       
       <input type="radio" style="padding:5px;" name="role"  onclick="package()" id= "Viewers" value="Viewers" checked> Viewers
       <input type="radio"   name="role" onclick="package()" id= "Stremers" value="Stremers" > Stremers
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
      
      
      
       <button style="float:right;" class="col-lg-3 btn btn-default btn-success btn-block login_btn" onClick="signup();">Sign up</button>
      </div>
      <div class="modal-footer">
       <!-- <p>Already have an account? <a href="#" onClick="login_fuction()" data-toggle="modal" data-target="#myModal" >Log in</a></p>-->
      </div> 
    </div>

  </div>
</div>
    
    
