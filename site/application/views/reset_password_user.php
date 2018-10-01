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

 <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    
    
    
   
<script type="text/javascript" src="<?php echo base_url();?>jquery-validation-demo/jquery.validate.min.js"></script>

<!--<link rel="stylesheet" type="text/css" href="jquery-validation-demo/bootstrap.css">-->
<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
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
              $("#confirmuserform").validate({
                rules: {
                  
				
				
					new_password: {
                        required: true,
						//rangelength: [4, 32]
                    },
					confirm_password: {
						required: true,
						//minlength: 4, 
						equalTo: '[name="new_password"]'
					}
					},
                messages: {
					
					new_password: {
                        required: "Please Enter New Password",
                    },
					confirm_password: {
                        required: "Please Enter Confirm Password"
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
</script>
 
    
    </head>
    <body>

<!-- signup -->

	<?php $this->load->view("header.php"); ?><!-- /#Header-->



<?php
echo $id=$this->uri->segment(2);
	?>

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
        
           <?php
//echo $this->session->userdata('user_id');
      //echo $exist_message;
      if(isset($password_message_error)){
        if($password_message_error == FALSE)
        {
		?>
          <div class="alert alert-error">
            <strong>Oh oops!</strong> Password not changed.
          </div>
<? } } ?>
        <?php
        //flash messages
        if(isset($password_flash_message)){
        if($password_flash_message == TRUE)
        {
        ?>
        <div class="alert alert-success">
        <strong>Well done!</strong> Password Changed Successfully.
        </div>
        <? } } ?>     
                                        
          <p style="color:#F00" id="error_success"></p>
          <form   name="confirmuserform" id="confirmuserform"   action="<?=site_base_url()?>reset_password_user" method="POST" id="login_form">
                                                
                                                
                                                <div class="login_row">
                                                	<input type="password" class="form-control login_input" name="new_password" value="" placeholder="New Password">
                                                </div>
                                                <div class="login_row">
                                                	<input type="password" class="form-control login_input" name="confirm_password" value="" placeholder="Confirm Password">
                                                </div>
                                                 
                                               
                                                <div class="login_row">
                                                	<input class="btn btn-danger sq_btn log_btn" name="Submit Query" value="Submit" type="submit" >
                                                </div>
                                                <input type="hidden" name="hid_id" value="<?=$id?>">
                                                </form>
                                                </div>
      </div>
      <div class="modal-footer">
        <p>Already have an account? <a href="#" onClick="login_fuction()">Log in</a></p>
      </div>
    </div>

  </div>











<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<?php $this->load->view("footer.php"); ?> <!-- /.footer -->


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

</body></html>