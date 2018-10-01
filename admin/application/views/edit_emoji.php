<?php
$details;
?>
<!DOCTYPE html>

<html lang="en">


<head>

<meta charset="utf-8"/>
<title>STREAMS SITE ADMIN</title>
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

    
    
    

</head>


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
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				
			
				<h3 class="page-title">
				Emoji Edit 
			  </h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>main/home">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>main/emoji_list">Emoji List</a>
							
						</li>
						
					</ul>
					
				</div>
			
				<div class="row">

					<div class="col-md-12">
                    <?php
					if(!empty($details) && $emoji_id!='')
			          {
						  $form_action="main/edit_emoji/".$emoji_id;
					  }
					  else
					  {
						  $form_action="main/add_emoji";
					  }
					?>
					<form class="form-horizontal form-row-seperated" id="form_sample_product" name="form_sample_product"  enctype="multipart/form-data" method="post" action="<?=base_url();?><?=$form_action?>">
                        
										
							<div class="portlet light">
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-basket font-green-sharp"></i>
										<span class="caption-subject font-green-sharp bold uppercase">
										Edit  </span>
										<span class="caption-helper"></span>
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
												General </a>
											</li>
										</ul>
    <div class="tab-content no-space">
        <div class="tab-pane active" id="tab_general">
            <div class="form-body">
            <?php
			
			
			   if(!empty($details) && $emoji_id!='')
			   {
				   
					$emoji_id=stripslashes($details[0]['emoji_id']);
					$emoji_text	=stripslashes($details[0]['emoji_text']);
					$emoji_image=stripslashes($details[0]['emoji_image']);
					$emoji_status=stripslashes($details[0]['emoji_status']);
				
					$emoji_type=stripslashes($details[0]['emoji_type']);
			   
			   }
			   else
			   {
				   
				    $emoji_text='';
					$emoji_image='';
					$emoji_type='';
				
				
				
					
				
			   }
			  
			
			?>
            
                    <div class="form-group">
                    <label class="col-md-2 control-label">Emoji Code <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="emoji_text" id="emoji_text" placeholder=""  value="<?=$emoji_text;?>" >
                    </div>
                    </div>  
                    </div>
                    
               
                    
                    
                    <div class="tab-pane" id="tab_images">
                                            
                    <div class="form-group">
                    <label class="col-md-2 control-label"> Image: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="file" name="emoji_image" id="emoji_image" > 
                    <input type="hidden" class="form-control" name="hid_emoji_image" id="hid_emoji_image" placeholder=""  value="<?=$emoji_image; ?>" >
						<div class="col-md-4 small">
						<?php
                        if($emoji_image!='')
                        {
                        ?>
                       <img src="<?=site_base_url()."uploads/emoji_image/thumb/thumb_".$emoji_image;?>"> 
                       <?
                        }
                       ?>
                       </div>
                    </div>
                    
                    </div>  
                    </div>
                    </div>
                   
                    
                    </div>    
                    
                    </div>
                    </div>
                    
                    
                    
                   <div class="form-group">
                    <label class="col-md-2 control-label"> Emoji Type: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="emoji_type" id="emoji_type" >
                    
                    <option value="FREE" <? if($emoji_type=='FREE') { ?> selected <? } ?>>FREE</option>
                    <option value="PREMIUM" <? if($emoji_type=='PREMIUM') { ?> selected <? } ?>>PREMIUM</option>                  
                    </select>
                    </div>
                    </div>
                
                
                
                
                
                
                
                
                    <div class="form-group">
                    <label class="col-md-2 control-label"> Status: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="emoji_status" id="emoji_status" >
                    <option value="">Select...</option>
                    <option value="Active" <? if($emoji_status=='Active') { ?> selected <? } ?>>Active</option>
                    <option value="Inactive" <? if($emoji_status=='Inactive') { ?> selected <? } ?>>Inactive</option>                  
                    </select>
                    </div>
                    </div>
                    
                    
                                                    
												</div>
											</div>
                         		</div>
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