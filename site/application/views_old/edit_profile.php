<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Edit Profile</title>
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
					name: {
                        required: true,
						
                    },
					birth_date: {
                        required: true,
						
                    },
					location: {
                        required: true,
						
                    },
					
					
				
                 	city: {
                        required: true,
						
                    },
					
					state: {
                        required: true,
						
                    },
					
					
					<?php /*?>zipcode: {
                        required: true,
						
                    },
					
					
					mobileno: {
                        required: true,
						digits:true
						
                    },<?php */?>
					email: {
                        required: true,
						
                    },
					
					
					
					artist_tag: {
                        required: true,
						
						
                    },
					category: {
                        required: true,
						
                    },
					
					
					
					sex: {
                        required: true,
						
                    },
					
					
					
					},
                messages: {
					
					
					name: {
                        required: "Please Enter your  Name"
                    },
					birth_date: {
                        required: "Please Enter your  birth date"
                    },
						location: {
                        required: "Please Enter your  Address"
                    },
					
						city: {
                        required: "Please Enter your  City"
                    },
					
						state: {
                        required: "Please Enter your  location"
                    },
					
						<?php /*?>zipcode: {
                        required: "Please Enter your  Zipcode"
                    },<?php */?>
					
						<?php /*?>mobileno: {
                        required: "Please Enter your  Mobile Number"
                    },<?php */?>
					
					email: {
                        required: "Please Enter your  Email address"
                    },
					
					sex: {
                        required: "Please Select your Gender"
                    },
					
					
					
					
					category: {
                        required: " Please Select Category"
                    },
					
						artist_tag: {
                        required: "Please Enter Tags"
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
	<?php  $this->load->view("header");?><!-- /#Header-->

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
                        			<h5><i class="fa fa-list-alt myicon"></i> Edit Profile</h5>
                            	</div>
 								 
                                 <div class="col-md-12 as_info">
                                    	<div class="gn_info">
                                        	<div class="col-md-6 gn_title">
                                            	<h5><strong>General Information</strong></h5>
                                            </div>
                                            <div class="col-md-6 gn_title">
                                            
                                            </div>
                                            <div style="clear:both"></div>
                                        </div><!---end gn_info---->
                                        
                      <!---------------------------GI tab 2--------------------------->                       
                                        <div id="bill2" class="gn_body hide2">
                                        
                <form action="<?php echo site_base_url(); ?>general_profile_information_edit" method="post" name="sign_name" id="sign_name">
                                            
                                        	<div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Name<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	
                          <input type="text" class="form-control edit_gi_box" name="name" value="<?php echo $user_details[0]['name'];?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                         <!--   <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Middle Name :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<input type="text" class="form-control edit_gi_box" name="" value="Sarathi"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>--><!---end gn_row---->
                                            
                                            <!--<div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Last Name<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<input type="text" class="form-control edit_gi_box" name="" value="Biswas"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>--><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Birthday<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                            <!--  <input id="homedatepicker3" type="text" class="form-control edit_gi_box" name="" value="09/29/2016"/>-->
  <input type="text" class="form-control edit_gi_box" name="birth_date"  id="datetimepicker" value="<?php echo $user_details[0]['birth_date'];?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <?php
                                     $type = $this->session->userdata('type');    
                                            if($type!="User"){?>        
                                            
                                      <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Gender<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                
                                       <!-- <input type="text" class="form-control edit_gi_box" name="sex" value="<?php echo $user_details[0]['sex'];?>"/>-->
                                       
                                      <select name="sex" class="form-control edit_gi_box"> 
                                        
                                       <?php
									   $gender= $user_details[0]['sex'];
									   ?>
                                       
                                        <option  value="" >Select</option>
                                         <option  value="male" <? if($gender=='male') { ?> selected <? } ?>>Male</option>
                                          <option  value="female" <? if($gender=='female') { ?> selected <? } ?>>Female</option>
                                           <option  value="others" <? if($gender=='others') { ?> selected <? } ?>>Others</option>
 
                                                        </select>
                                       
                                       
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>      
                                            
                                            
                                            
                                            <?php
											}
											
											?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Mailing Address<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                     <input type="text" class="form-control edit_gi_box" name="location" value="<?php echo $user_details[0]['location'];?>"/>
                                                	<!--<input type="text" class="form-control edit_gi_box" name="" value=""/>-->
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>City<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                
                         <input type="text" class="form-control edit_gi_box" name="city" value="<?php echo $user_details[0]['city'];?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>State<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                       <input type="text" class="form-control edit_gi_box" name="state" value="<?php echo $user_details[0]['state'];?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>ZIP Code :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                            <input type="text" class="form-control edit_gi_box" name="zipcode" value="<?php echo $user_details[0]['zipcode'];?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Mobile number :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                     <input type="text" class="form-control edit_gi_box" name="mobileno" value="<?php echo $user_details[0]['mobileno'];?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                           <!-- <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Alternate Phone :</h6>
                                                </div>
                                                 <div class="col-md-6 gi_title_right">
                                                	<input type="text" class="form-control edit_gi_box" name="" value="555-555-555"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>--><!---end gn_row---->
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Email<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                  <?  $type = $this->session->userdata('type');
												if($type=="User"){ ?>
                                              <input type="text" class="form-control edit_gi_box" name="email" value="<?php echo $user_details[0]['user_email'];?>"/>   
                                                <? }else{ ?>
               							    <input type="text" class="form-control edit_gi_box" name="email" value="<?php echo $user_details[0]['email'];?>"/>
                							   <? } ?>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            
                                           
                                            
                                            
                                            
                                         <? 
										 
										 $type = $this->session->userdata('type');    
                                            if($type!="User"){?>
										
                                            
                                             <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>About Me:<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                 <textarea cols="2" rows="5" class="form-control logininput" name="about_me" ><?php echo $user_details[0]['about_me'];?></textarea>
                                 
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Edit Tags<sup class="red">*</sup> :</h6>
                                                </div>
                                                <div class="col-md-6 gi_title_right">
                                                	<input type="text" class="form-control edit_gi_box" name="artist_tag" value="<?php echo $user_details[0]['artist_tag'];?>"/>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            
                                            
                                            
                                            
                                        <div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Category<sup class="red">*</sup>:</h6>
                                                </div>
                                                 <div class="col-md-6 gi_title_right">
                                                	 <?php $cat_list = $this->module->get_cat_list(); ?>
										                      
								
                                                	<select name="category" class="form-control edit_gi_box">
                                                    <option value="">Select</option>
                                                    <?php foreach($cat_list as $row){ ?>
                                                  <option value="<?php echo $row['category_id']?>"<?php if($user_details[0]['category_type']==$row['category_id']){ $j=$j+1;?>selected<? } ?>><?=$row['category_name']?></option><? } ?>
 
                                                        </select>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                        
                                        
                                        
                                        <?php
										
											}
											
											?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <div style="clear:both"></div>
                                           
                                          
                                            <div style="clear:both"></div>
                                            <div class="save_btn">
                                            	<!--<a href="#">Save Changes</a>-->
                                              
                                                   <input type="submit" class="save_btn" value="Save Changes">
                                            </div>  </form>
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

<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<?php  $this->load->view("footer");?> <!-- /.footer -->


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