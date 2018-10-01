<?php //echo $details;die; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$page_name='forgot_password';
$page_title =$this->module->page_title($page_name); 
				$meta_tag=$page_title[0]['meta_tag'];
						$meta_title=$page_title[0]['meta_title'];
						?>

<meta charset="utf-8"/>
<title><?=$meta_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<?=$meta_tag;?>
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo0.png" type="image/x-icon">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>assets/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>



<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/validation-jquery.css">
<!--<script type="text/javascript">
 
 
    (function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
              $("#create_form").validate({
                rules: {
					admin_user_name: {
                        required: true,
						
                    },
					
					admin_password: {
                        required: true,
					
                    },	
					
                   admin_email: {
                        required: true,
						admin_email:true
                    },
					admin_contactno: {
                        required: true,
						number: true
						
                    },
					admin_image: {
                        required: true,
						
                    }
					
					
					},
                messages: {
					admin_user_name: {
                        required: "Please Enter First Name"
                    },
					
					admin_password: {
                        required: "Please Enter password"
                    },
					
					admin_email: {
                        required: "Please Enter email"
                    },
					admin_contactno: {
                        required: "Please Enter your phone"
						
                    },
					admin_image: {
                        required: "Please upload your image"
						
                    }
					
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
</script>-->
<!--------------------------------------validation all field----------------------------------------------->
<script>
function validation()
{

	
	var admin_email = document.getElementById('admin_email').value;

	
	if(admin_email=='')
	{
		$('p#admin_user_name').html("");
		
		$('p#admin_contactno').html("");
		
		$('p#admin_email').html("Please Enter email id");
		return false;
	}
	if(admin_email!='')
	{
		var atpos = admin_email.indexOf("@");
    var dotpos = admin_email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=admin_email.length) 
	{
		$('p#admin_user_name').html("");
		
		$('p#admin_contactno').html("");
		
       $('p#admin_email').html("Please Enter valid email id");
        return false;
	}
	}
	
	
}
</script>
<!------------------------------------validation end------------------------------------------------------->
</head>


<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="<?php echo base_url();?>assets/admin/layout2/img/streams.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form name="create_form" method="post" class="login-form" enctype="multipart/form-data" action="<?php echo base_url(); ?>main/forgot_password" >
    <?
	if($check=='wrong')
	{
	?>
    <div class="alert alert-danger ">
    <button class="close" data-close="alert"></button>
   Wrong Username & password
    </div>
    <?
	}
	else if($check=="TRUE"){?>
	<div class="alert alert-success ">
    <button class="close" data-close="alert"></button>
  	Password send in your email id
    </div>	
	<?php }
	?>
    
		<h3 class="form-title">Forgot Password</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter All field is required. </span>
		</div>
        <?php  //$msg=$details[0]['admin_password'];
		
		?>
        
        <div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class=""><font color=red size=3><?=$details;?></font></label>
			
				
			
                
		
        
		<div class="form-group">
        
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			
			
            <p style="color:#F00" id="admin_user_name">
		</div>
        <div class="form-group">
			
			<div class="input-icon">
			<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Enter email Id" name="admin_email"  id="admin_email" />
			</div>
            <p style="color:#F00" id="admin_email">
		</div>
		
        
        
        
        
		<div class="form-actions">
			
            
            <input type="submit" name="input" class="btn green pull-right submit_bt" value="Submit" onclick="return validation();"><br />
             
	  </div>
		
	</form>
	<!-- END LOGIN FORM -->
	
	<!-- BEGIN REGISTRATION FORM -->
	
	
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 <?=date('Y')?> &copy; Straming Admin Dashboard.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url();?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url();?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/global/scripts/Metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/login-home.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init Metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
  Login.init();
  <?
  if($check=='exist' || $check=='success')
  {
  ?>
  jQuery('.login-form').hide();
  jQuery('.register-form').show();
  <? } ?>
});
</script>
<!-- END JAVASCRIPTS -->
</body>
</html>
