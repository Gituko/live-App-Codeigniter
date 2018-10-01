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
              $("#review").validate({
                rules: {
					message: {
                        required: true,
						
						
                    },
					
					
			
					
					
					
					},
                messages: {
					
					
					message: {
                        required: "Please Enter Message"
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
	
<?php
                
					$artist_id=$_GET['artist_id'];
				$details=$this->module->get_artist_detail($artist_id);
				 $user_id = $this->session->userdata('user_id');
				
               ?>






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
                        
                        <form class="form-horizontal" action="<?php echo site_base_url(); ?>main/add_private_message" id="review" method="post"   enctype="multipart/form-data">
                        
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 details_video2">
                        
                            
                            <div class="form_section">
                            	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 strem_dev_hh">
                                	<h4>Message To <?=$details[0]['name']?>  </h4>
                                	<div class="strm_form_sec">
                                    	<!--<p>Name:<font color="#000000"><?=$details[0]['name']?></font></p>-->
                                		 <input type="hidden" class="form-control strm_input" name="artist_id" id="artist" value="<?=$details[0]['artist_id']?>">
                                  
                                   <input type="hidden" class="form-control strm_input" name="user_id" id="user_id" value="<?=$user_id?>">       
                                        
                                        
                                    </div>
                                    <div class="strm_form_sec">
                                    	
                                         <textarea cols="2" rows="5" class="form-control strm_input" name="message" id="message" ></textarea>
                                      
                                     
                                    </div>
                                       <p style="color:#F00" id="error_login_success"></p>
                                </div>
                                
                                
                                <div style="clear:both"></div>
                                
                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 strm_frm_col_left">
                                	<button class="btn btn-info startbtn"  >Send</button>
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
	
	<script>
	function tips_amount()
	{
		  
	
	  var amount_paid = document.getElementById('amount_paid').value;
	
		
		
		
		
	
			
			 if (isNaN(amount_paid) ) {
				 
			$('#error_login_success').html("please enter number ");
				document.getElementById('amount_paid').value='';
			return false;
			 }
			 
			 else if{
			
		$('#error_login_success').html("Please Enter amount");
				document.getElementById('amount_paid').value='';	
				return false;
		}
		
		
	}
	
	
	
	</script>
	
	
	
	
	
	
	
	
	
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



<script>
jQuery(document).ready(function () {
     jQuery(".form-horizontal").submit(function () {
        parent.jQuery.colorbox.close();
     });
});

</script>





</body>
</html>