<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">

<?php
$url='payment_setting';
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
              $("#signup_name").validate({
                rules: {
					live_video: {
                        required: true,
						 number: true
						
                    },
					recorded_video: {
                        required: true,
						 number: true
						
                    },
					live_recorded_video: {
                        required: true,
						number: true
						
                    },
					
					
				
                 
					
					
					},
                messages: {
					
					
					live_video: {
                        required: "Please Enter your  amount for Live Video"
                    },
					recorded_video: {
                        required: "Please Enter your  amount for Recorded Video"
                    },
						live_recorded_video: {
                        required: "Please Enter your amount Live and Recorded"
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datetimepicker" ).datepicker({
								  dateFormat: 'yy-mm-dd',
								   changeMonth: true,
                                   changeYear: true
								  });
  } );
  </script>
      
       
     
    
</head>
<body>
	<?php $this->load->view("header"); ?><!-- /#Header-->

<section id="myaccount_service">
	<div class="myaccountdiv">
		<div class="container-full">
			<div class="container">
            	
				 <div class="myaccount_holder">
                 	<div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	<?php $this->load->view("left_pannel"); ?>
                        <div style="clear:both"></div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                    
   						<div class="myaccount_top_text tab-content">
                        	<!--<div class="myaccount_search">
                            	<input type="text" class="form-control newmcsearch" name="" value="" placeholder="Advance Search">
                            </div>-->
                           
                           <div id="menu3" class="allcourses">
                           		<div class="useraccount">
                        			<h5><i class="fa fa-list-alt myicon"></i> Payment Setting</h5>
                            	</div>
 								 
                                 <div class="col-md-12 as_info">
                                    	<div class="gn_info">
                                        	<div class="col-md-6 gn_title">
                                            	<h5><strong>General Information</strong></h5>
                                            </div>
                                            
                                            <div style="clear:both"></div>
                                        </div><!---end gn_info---->
  <?php
 $artist_id = $this->session->userdata('artist_id');
 $details=$this->module->get_artist_payment($artist_id);
  
  ?>
                      <!---------------------------GI tab 2--------------------------->                       
                                        <div id="bill2" class="gn_body hide2">
                          <form action="<?php echo site_base_url(); ?>payment_setting" method="post" name="signup_name" id="signup_name">
                                            
                                                <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Paypal Email Id<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<input type="text" class="form-control edit_gi_box" name="paypal_id" value="<?php echo $details[0]['paypal_id'];?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                        	<div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Live Video<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<!--<input type="text" class="form-control edit_gi_box" name="" value="Partha"/>-->
                                 <input type="text" class="form-control edit_gi_box" name="live_video" value="<?=$details[0]['live_video']?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Recorded Video<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<!--<input type="text" class="form-control edit_gi_box" name="" value="Partha"/>-->
                                 <input type="text" class="form-control edit_gi_box" name="recorded_video" value="<?=$details[0]['recorded_video']?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Live+Recorded Video<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<!--<input type="text" class="form-control edit_gi_box" name="" value="Partha"/>-->
                                 <input type="text" class="form-control edit_gi_box" name="live_recorded_video" value="<?=$details[0]['live&recorded_video']?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            
                                            
                                     <!----end gn_row-->
                                            
                                           <!-- <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Age<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<input type="text" class="form-control edit_gi_box" name="" value="Biswas"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>--><!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            
                                           <!-- <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Mobile number :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<input type="text" class="form-control edit_gi_box" name="" value="000-111-222"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>--><!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            <!---end gn_row---->
                                            <!---end gn_row---->
                                            <!---end gn_row---->
                                            
                                            
                                            <div style="clear:both"></div>
                                           
                                            
                                            <div style="clear:both"></div>
                                            <div class="save_btn">
                                           <!-- 	<a href="#">Save Changes</a>-->
                                                <input type="submit" class="save_btn" value="Save Changes">
                                            </div>
                                            </form>
                                        </div><!----end gn_body---->

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
<style>
.interest{
	margin:5px !important;
	
	
	}
</style>
<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<?php $this->load->view("footer");?><!-- /.footer -->


	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
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


<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"50%", height:"100%"});
				
			});
		</script>  










<style>
.save_btn  {
    display: block;
    float: left;
    text-align: center;
    color: #fff;
    font-weight: 400;
    font-size: 16px;
    border-radius: 3px;
    border: none;
    background: #0095e5;
    padding: 2px 11px 6px;
	margin-top: 5px;
}
</style>
</body>
</html>