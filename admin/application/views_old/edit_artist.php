<?php
echo $id = $this->uri->segment('3');
//die;
//$details;
//echo $id;
//die;
//echo "<pre>"; print_r($details); die;
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
<?php
$page_name='add_artist';
$page_title =$this->module->page_title($page_name); 
				$meta_tag=$page_title[0]['meta_tag'];
						$meta_title=$page_title[0]['meta_title'];
						?>

<meta charset="utf-8"/>
<title><?=$meta_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<?=$meta_tag;?>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
<link href="<?php echo base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->


<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/typeahead/typeahead.css">
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>assets/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<style type="text/css">
			*{ font-size:12px; font-family:verdana; }
			.ui-timepicker-div dl { text-align: left; }
			.ui-timepicker-div dl dt { height: 25px; margin-bottom: -25px; }
			.ui-timepicker-div dl dd { margin: 0 10px 10px 65px; }
			.ui-timepicker-div td { font-size: 90%; }
			.ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }
			
</style>
  <!--------------------------------------Start Validation----------------------------------------------------->
    <style>
div.error
{
	margin-right:160px;
	margin-left:25px;
	float:right;
	width: 266px;
}
</style>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>jquery-validation-demo/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>jquery-validation-demo/validation-jquery.css">

<script type="text/javascript">
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#add_form").validate({
									
									// alert("bbbb");
									 
									 
									 
									 ignore: [],
                rules: {
					name: {
                        required: true
                    },
					
						email: {
                        required: true
                    },
											
                 
					
					status : {
                        required: true
						
                    },
					
										
					},
					
                messages: {
					name: {
                        required: "Please Enter Name"
                    },
					
						email: {
                        required: "Please Enter your email_id"
                    },
					
                    		/*cat_banner_img: {
                        required: "Please Enter cat_banner_img"
                    },
					
					cat_thumb_img: {
                        required: "Please Enter  cat_thumb_img"
                    },*/
					
					status: {
                        required: "Select status"
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
      
<!-------------------------------------------------------End Validation---------------------------------------------------------------->

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo ">
<input type="hidden" name="site_base_url" id="site_base_url" value="<?=base_url();?>">

<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<?php $this->load->view("header");?> 
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
			<?php $this->load->view("left_menu");?> 
          <!-------stasr form---------->
           
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				
			
				<h3 class="page-title">
				Artist Edit <small> edit Artist</small>
			  </h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>main/artist_list">Artist List</a>
							<i class="fa fa-angle-right"></i>
						</li>
						
					</ul>
					
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
                    <?php
					
					
					if(!empty($details) && $id!='')
			          {
						 // echo 'dd';
						 // die;
						  $form_action="main/edit_artist/".$id;
					  }
					  else
					  {
						  //echo 'ee';
						 // die;
						  
						  $form_action="main/add_artist";
					  }
					?>
                     <?php echo validation_errors(); ?>
                     
                     
                    <? if(isset($image_valid)):?>
                    <span class="alert alert-danger">Please Selects Images</span>
                    <?php endif;?>
					<form class="form-horizontal form-row-seperated" id="add_form" name="form_sample_product"  enctype="multipart/form-data" method="post" action="<?=base_url();?><?=$form_action?>">
                        <div class="alert alert-danger display-hide">
											<button class="close" data-close="alert"></button>
											You have some form errors. Please check below.
										</div>
										<div class="alert alert-success display-hide">
											<button class="close" data-close="alert"></button>
											Your form validation is successful!
										</div>
							<div class="portlet light">
								<div class="portlet-title">
									<div class="caption">
										<!--<i class="icon-basket font-green-sharp"></i>
										<span class="caption-subject font-green-sharp bold uppercase">
										Edit  Sub Section </span>
										<span class="caption-helper"></span>-->
									</div>
									<div class="actions btn-set">
										
                                        <button class="btn green-haze btn-circle"><i class="fa fa-check"></i> Save</button>
                                     
									</div>
								</div>
								<div class="portlet-body">
									<div class="tabbable">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_general" data-toggle="tab">
												category</a>
											</li>
										
										</ul>
    <div class="tab-content no-space">
        <div class="tab-pane active" id="tab_general">
            <div class="form-body">
            <?php
			   if(!empty($details) && $id!='')
			   {
				   
				     
					 $name=stripslashes($details[0]['name']);
					$user_name=stripslashes($details[0]['user_name']);
					$email=stripslashes($details[0]['email']);
					$city=stripslashes($details[0]['city']);
					$state=stripslashes($details[0]['state']);
					$zipcode=stripslashes($details[0]['zipcode']);
					$mobileno=stripslashes($details[0]['mobileno']);
					$birth_date=stripslashes($details[0]['birth_date']);
					$status=stripslashes($details[0]['status']);
					$sex=stripslashes($details[0]['sex']);
					$interested_in=stripslashes($details[0]['interested_in']);
					$location=stripslashes($details[0]['location']);
					$language_known=stripslashes($details[0]['language_known']);
					$body_type=stripslashes($details[0]['body_type']);
					$about_me=stripslashes($details[0]['about_me']);
					$orientation=stripslashes($details[0]['orientation']);
					$haircolor=stripslashes($details[0]['haircolor']);
					$ethnicity=stripslashes($details[0]['ethnicity']);
					$eyecolor=stripslashes($details[0]['eyecolor']);
					$image=stripslashes($details[0]['image']);
				   
			   }
			   else
			   {
				   
				    $name='';
					$user_name='';
					$email='';
					$city='';
					$state='';
					$zipcode='';
					$mobileno='';
					$birth_date='';
					$status='';
					$sex='';
					$interested_in='';
					$location='';
					$language_known='';
					$body_type='';
					$about_me='';
					$orientation='';
					$haircolor='';
					$ethnicity='';
					$eyecolor='';
					$image='';
					
				  
			   }
			
			?>
                 
                 
               
                    <div class="form-group">
                    <label class="col-md-2 control-label"> Name: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="name" id="name" placeholder=""  value="<?=$name;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> user_name: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="user_name" id="user_name" placeholder=""  value="<?=$user_name;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> email: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="email" class="form-control" name="email" id="email" placeholder=""  value="<?=$email;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> city: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="city" id="city" placeholder=""  value="<?=$city;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> state: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="state" id="state" placeholder=""  value="<?=$state;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> zipcode: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder=""  value="<?=$zipcode;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> mobileno: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="mobileno" id="mobileno" placeholder=""  value="<?=$mobileno;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> birth_date: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="birth_date" id="datetimepicker" placeholder=""  value="<?=$birth_date;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> sex: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="sex" id="sex" placeholder=""  value="<?=$sex;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> interested In: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                 <?php 
												 
				             	$interest = $this->module->get_interestin();
				                  $ex_interest = $interest[0]['setting_value'];
				                 $int_ex = explode(",",$ex_interest);
								  $int_ex1 = explode(",",$interested_in);
								  $j=0;
								 
								 for($i=0;$i<count($int_ex);$i++){				                      
								 ?>
                                            
<input type="checkbox" name="interested_in[]" value="<?php echo $int_ex[$i]?>" <?php if($int_ex1[$j]==$int_ex[$i]){ $j=$j+1;?>checked<? } ?>><?php echo $int_ex[$i]?>
                                       <? } ?>
                    </div>
                    </div> 
                    </div>
                    
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> location: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="location" id="location" placeholder=""  value="<?=$location;?>" >
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> Language Known: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                   	<?php 
												 
				             	$interest = $this->module->get_language();
				                  $ex_language = $interest[0]['setting_value'];
				                 $lan_ex = explode(",",$ex_language);
								  $lan_ex1 = explode(",",$language_known);
								  $j=0;
								 
								 for($i=0;$i<count($lan_ex);$i++){				                      
								 ?>
                                            
                                         <input type="checkbox" name="language_known[]"  value="<?php echo $lan_ex[$i]?>"<?php if($lan_ex1[$j]==$lan_ex[$i]){ $j=$j+1;?>checked<? } ?>><?php echo $lan_ex[$i]?>
                                        
                                       <? } ?>
                  
                    </div>
                    </div> 
                    </div>
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label">Body Type: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <?php 
												 
				             	$bodytype = $this->module->get_body();
				                  $ex_body = $bodytype[0]['setting_value'];
				                 $body_ex = explode(",",$ex_body);
								   $body_ex1 = explode(",",$body_type);
								  $j=0;
								 
								 for($i=0;$i<count($body_ex);$i++){				                      
								 ?>              	
                                <input type="radio" name="body_type"  value="<?php echo $body_ex[$i]?>"<?php if($body_ex1[$j]==$body_ex[$i]){ $j=$j+1;?>checked<? } ?>><?php echo $body_ex[$i]?>
                                       <? } ?>
                    </div>
                    </div> 
                    </div>
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label"> about_me: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <textarea cols="2" rows="5"  class="form-control" name="about_me" id="about_me" placeholder=""><?=$about_me;?></textarea>
                    </div>
                    </div> 
                    </div>
                     <div class="form-group">
                    <label class="col-md-2 control-label"> orientation: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <?php 
												 
				             	$orientation_details = $this->module->get_orientation();
				                  $ex_orientation = $orientation_details[0]['setting_value'];
				                 $ori_ex = explode(",",$ex_orientation);
								 $ori_ex1 = explode(",",$orientation);
								  $j=0;
								 ?>
										                      
								
                                                	<select name="orientation" class="form-control">
                                                    <?Php for($i=0;$i<count($ori_ex);$i++){	?>	
                                                        <option  value="<?php echo $ori_ex[$i]?>"<?php if($ori_ex1[$j]==$ori_ex[$i]){ $j=$j+1;?>selected<? } ?>><?php echo $ori_ex[$i]?></option><? } ?>
 
                                                        </select>
                    </div>
                    </div> 
                    </div>
                     <div class="form-group">
                    <label class="col-md-2 control-label"> haircolor: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                     <?php 
												 
				             	$hair_details = $this->module->get_hair();
				                  $ex_hair = $hair_details[0]['setting_value'];
				                 $hair_ex = explode(",",$ex_hair);
								  $hair_ex1 = explode(",",$haircolor);
								  $j=0;
								 ?>
										                      
								
                                                	<select name="haircolor" class="form-control edit_gi_box">
                                                    <?Php for($i=0;$i<count($hair_ex);$i++){	?>	
                                                        <option value="<?php echo $hair_ex[$i]?>"<?php if($hair_ex1[$j]==$hair_ex[$i]){ $j=$j+1;?>selected<? } ?>><?php echo $hair_ex[$i]?></option><? } ?>
 
                                                        </select>
                    </div>
                    </div> 
                    </div>
                     <div class="form-group">
                    <label class="col-md-2 control-label"> ethnicity: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                  <?php 
												 
				             	$ethnicity_details = $this->module->get_ethnicity();
				                  $ex_ethnicity = $ethnicity_details[0]['setting_value'];
				                 $ethnicity_ex = explode(",",$ex_ethnicity);
								  $ethnicity_ex1 = explode(",",$ethnicity);
								  $j=0;
								 ?>
										                      
								
                                                	<select name="ethnicity" class="form-control">
                                                    <?Php for($i=0;$i<count($ethnicity_ex);$i++){	?>	
                                                  <option value="<?php echo $ethnicity_ex[$i]?>"<?php if($ethnicity_ex1[$j]==$ethnicity_ex[$i]){ $j=$j+1;?>selected<? } ?>><?php echo $ethnicity_ex[$i]?></option><? } ?>
 
                                                        </select>
                    </div>
                    </div> 
                    </div>
                     <div class="form-group">
                    <label class="col-md-2 control-label"> eyecolor: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                   <?php 
												 
				             	$eyecolor_details = $this->module->get_eye();
				                  $ex_eyecolor = $eyecolor_details[0]['setting_value'];
				                 $eyecolor_ex = explode(",",$ex_eyecolor);
								 $eyecolor_ex1 = explode(",",$eyecolor);
								  $j=0;
								 ?>
										                      
								
                                                	<select name="eyecolor" class="form-control">
                                                    <?Php for($i=0;$i<count($eyecolor_ex);$i++){	?>	
                                                  <option value="<?php echo $eyecolor_ex[$i]?>"<?php if($eyecolor_ex1[$j]==$eyecolor_ex[$i]){ $j=$j+1;?>selected<? } ?>><?php echo $eyecolor_ex[$i]?></option><? } ?>
 
                                                        </select>
                                                        
                                                        
                                                        
                                             
                    </div>
                    </div> 
                    </div>
                    
                   	
             <div class="form-group">
                    <label class="col-md-2 control-label"> Image Upload: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    
                    <input type="file"  class="form-control" name="image" id="image" value=""> 
                    
                    
                    <?php
                        if($image!='')
                        {
                        ?>
                    <input type="hidden" class="form-control" name="hid_artist_banner" id="hid_artist_banner" placeholder=""  value="<?=$image;?>" ><!--(  For best View Upload (720X480) size image )-->
						
                       <img src="<?=site_base_url()."uploads/user_image/".$image;?>" width='150' height='150'> 
                       <?
                        }
                       ?>
                    </div>
                   
                    </div>  
                    </div>       
                    
       <!-----------------------------------------------------album--------------------------------------------------------------->             
                 <?php /*?>   <div class="form-group">
                    <label class="col-md-2 control-label">Album Image Upload: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    
                    <input type="file"  class="form-control" name="cat_image" id="cat_image" value=""> 
                    
                    
                    <?php
                        if($image!='')
                        {
                        ?>
                    <input type="hidden" class="form-control" name="hid_artist_banner" id="hid_artist_banner" placeholder=""  value="<?=$image;?>" ><!--(  For best View Upload (720X480) size image )-->
						
                       <img src="<?=site_base_url()."uploads/user_image/".$image;?>" width='150' height='150'> 
                       <?
                        }
                       ?>
                    </div>
                   
                    </div>  
                    </div>       <?php */?>
            <!------------------------------------------------end-----album--------------------------------------------------------------->                   
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label">Status: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="status" id="status" >
                    <option value="">Select</option>
                    <option value="Active" <? if($status=='Active') { ?> selected <? } ?>>Active</option>
                    <option value="Inactive" <? if($status=='Inactive') { ?> selected <? } ?>>Inactive</option>                  
                    
                    </select>
                    </div>
                    </div>
                                                            
					</div>
                      
                     
											</div>
											<div class="tab-pane" id="tab_meta">
												
											</div>
											
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php $this->load->view("footer");?> 
	<!-- END FOOTER -->
</div>

 

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url();?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
 <script>
 $("#form_sample_product" ).submit(function( event ) 
											 {
			
  if ($("#menu_parent_id" ).val()=='' ) {
   
    return false;
  }
  });
				 </script>
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
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/ckeditor/ckeditor.js"></script>
Timepicker
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/Timepicker/ckeditor.js"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/ckeditor/ckeditor.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->






<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/components-form-tools.js"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/form-validation-step.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {   
		// initiate layout and plugins
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		FormValidation.init();
		ComponentsFormTools.init();
});
</script>
<!-- BEGIN GOOGLE RECAPTCHA -->

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>