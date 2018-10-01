<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Video_details</title>
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
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/script.js"></script>

<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="jquery-validation-demo/bootstrap.css">-->


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/validation-jquery.css">
<script type="text/javascript">
 
 
    (function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
              $("#sign_name").validate({
                rules: {
					recorded_v_title: {
                        required: true,
						
                    },
                    recorded_v_overview: {
                        required: true,
						
                    },
                    video_tags: {
                        required: true,
						
                    },
					
					
				
                 	category_type: {
                        required: true,
						
                    },
					
					
					
				
					
					
					
					},
                messages: {
					
					
					recorded_v_title: {
                        required: "Please Enter Title"
                    },
					recorded_v_overview: {
                        required: "Write Some few words"
                    },
						video_tags: {
                        required: "Please Enter Video_tags"
                    },
					
						category_type: {
                        required: "Please Enter Category"
                    },
						
				
					
					
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>      
     
     
   
    
    
</head>
<body>
	
<!-- Signup -->

<!-- signup -->
	


<section id="videodetail">
	<div class="worksection">
		<div class="container-full">
        	<div class="container">
        		<div id="foo" class="streaming_section">
                
                
                	<div class="details_body">
                    	<?php /*?><div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	  <? $this->load->view("left_pannel");?>
                        <div style="clear:both"></div>
                    </div><?php */?>
                        
                     
                        
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 details_video2">
                        	<?php /*?><div class="media-wrapper">
                                <video class="videoimages" width="100%" height="100%" style="max-width:100%;" poster="<?php echo base_url(); ?>img/vd_image.png" preload="yes" controls="controls">
                                     <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/mp4">
                                    <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/ogg">
                                    <source src="<?php echo base_url(); ?>videos/big_buck_bunny.mp4" type="video/webm">
                                    <object data="" width="470" height="255">
                                    <embed src="<?php echo site_base_url(); ?>videos/big_buck_bunny.mp4" width="470" height="255">
                                    </object>
                                </video>
                            </div><?php */?>
                             <form class="form-horizontal" action="<?php echo site_base_url(); ?>add_live_form" enctype="multipart/form-data"  name="sign_name" id="sign_name" method="post" >
                            
                            <div class="form_section">
                            	<div class="col-lg-6 col-md-6 col-xs-6 col-sm-12 strm_frm_col_left">
                                
                                <h4>Enter Your Live Information</h4>
                                	<div class="strm_form_sec">
                                    	<p>Video Title:</p>
                                		<input type="text" class="form-control strm_input" name="recorded_v_title" value="">
                                    </div>
                                    <div class="strm_form_sec">
                                    	<p>Overview:</p>
                                        <textarea name="recorded_v_overview" class="form-control strm_input" cols="4" rows="3"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-12 strm_frm_col_left">
                                	<div class="strm_form_sec">
                                    	<p>Video Tags (Write video tags like toys,Newyork):</p>
                                        <textarea name="video_tags" class="form-control strm_input" cols="4" rows="3"></textarea>
                                    </div>
                                    
                                    <div class="strm_form_sec">
                                    	<p>Temporary Image</p>
                                       <input type="file" class="form-control " name="image" value="">
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="strm_form_sec">
                                    	<p>Category Type: </p>
                                        
                                        <?php $cat_list = $this->module->get_cat_list(); 
					
					?> 
                                        
                                        <select name="category_type" class="form-control strm_input">
                                        	
                                        	 <?php
					foreach($cat_list as $row)
					{
					?>
                      <option value="<?=$row['category_id']?>" ><?=$row['category_name']?></option>
                      <?php
					}
					?>
                                        </select>
                                       
                                    </div>
                                </div>
                                <div style="clear:both"></div>
                                
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 strm_frm_col_left">
                                	<button class="btn btn-info startbtn">Start</button>
                                </div>
                                
                            </div>
                            
                            </form>
                            
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

		$(document).ready(function(){
		$("#chatbttn").click(function(){
			$("#dropchat").slideToggle("slow");
		});
		});

		//]]> 
    </script>
 
     <script type="text/javascript">
		//<![CDATA[

		$(document).ready(function(){
		$("#chatbttn2").click(function(){
			$("#dropchat2").slideToggle("slow");
		});
		});

		//]]> 
    </script>
    
   <script>
   
   window.onload=function(){
	   //get_chats();
	   
   setInterval(function(){ get_chats(); }, 300);
   
   
    
   }
   </script> 
    
    
    
    
   <script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'none')
          e.style.display = 'block';
       else
          e.style.display = 'none';
    }
//-->
</script>



</body>
</html>