<?php
if(@$admin_type=='1'){
$permission=$list_permission[0]['permission_edit'];
}
else{
$permission=1;
}
if($permission=='1'){
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<link type="images/favicon" href="<?php echo base_url();?>assets/admin/layout2/img/favicon.ico" rel="shortcut icon" /> 
<title> Admin</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo0.png" type="image/x-icon">
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
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>assets/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<script src="<?php echo base_url();?>validation/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>validation/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>validation/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?php echo base_url();?>validation/validationEngine.jquery.css" type="text/css"/>
<script>
jQuery(document).ready(function(){
jQuery("#formID").validationEngine();
});
</script>
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
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								 Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN STYLE CUSTOMIZER -->
				
				<!-- END STYLE CUSTOMIZER -->
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Setting Edit <small> edit Setting</small>
			  </h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>main/setting">Setting List</a>
							
						</li>
						
					</ul>
					
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
                 <?php
					if(!empty($details) && $setting_id!='')
			          {
						  $form_action="main/update_setting/".$setting_id;
					  }
					  
					?>
				<div class="row">
					<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" id="formID" name="form_sample_setting"  enctype="multipart/form-data" method="post" action="<?=base_url();?><?=$form_action?>">
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
										<i class="icon-basket font-green-sharp"></i>
										<span class="caption-subject font-green-sharp bold uppercase">
										Edit Setting </span>
										<span class="caption-helper"></span>
									</div>
									<div class="actions btn-set">
										
										<?php
                                        if(!empty($details) && $setting_id!='')
                                        {?>
                                         <input type="hidden" class="form-control" name="setting_key" id="setting_key" value="<?=stripslashes($details[0]['setting_key']);?>">
                                         <? } ?>
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
                                        
								<?php
                                if(!empty($details) && $setting_id!='')
                                {
                                $setting_key=stripslashes($details[0]['setting_key']);
                                $setting_value=stripslashes($details[0]['setting_value']);
                                
                                }
                                else
                                {
                                $setting_key='';
                                $setting_value='';
                                }
                                
                                ?>
    <div class="tab-content no-space">
        <div class="tab-pane active" id="tab_general">
            <div class="form-body">
            
            <? //stripslashes($details[0]['setting_value']);exit;?>
            <?php
			if($setting_key=='admin_email_content' || $setting_key=='customer_email_content' || $setting_key=='user_my_account_page' || $setting_key=='user_my_account_page_activity' || $setting_key=='Login Content')
			{
				
			?>
            
             <div class="form-group">
                    <label class="col-md-2 control-label"><?=ucfirst(str_replace("_"," ",stripslashes($details[0]['setting_key'])));?>: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    
                    <div class="input-icon right">
                     <i class="fa"></i>
                       <textarea class="ckeditor form-control" name="setting_value" id="setting_value" rows="6" data-error-container="#editor2_error"><?=stripslashes($details[0]['setting_value']);?></textarea>
						</div>
                      
                    </div>
                </div>
           <?php
			}
			
			else if($setting_key=='check_display_image' ||  $setting_key=='check_display_price')
			{
				
				 ?>
                <div class="form-group">
                    <label class="col-md-2 control-label"><?=ucfirst(str_replace("_"," ",$setting_key));?>: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    
                    
                     <div class="input-icon right">
                            <i class="fa"></i>
                     
                  <select class="table-group-action-input form-control input-medium" name="setting_value" id="setting_value" >
                    <option value="">Select...</option>
                    <option value="Yes" <?php if($setting_value=='Yes') { ?> selected <? } ?> >Yes</option>
                    <option value="No" <? if($setting_value=='No') { ?> selected <? } ?>  >No</option>
                        
					</select>
						</div>
                                   
                     
                    </div>
                </div>  
              
               
                <?
				
			}
			else if ( $setting_id==22)
			{
				$points_to_doller=explode("/",$setting_value);
				
				$points=$points_to_doller[0];
				$doller=$points_to_doller[1];
				 ?>
                 
                  <div class="form-group">
                    <label class="col-md-2 control-label">Points: <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control validate[required]" name="points" id="points" placeholder="" value="<?=$points?>" >
                    </div>
                    </div>  
                    </div>
                    
                     <div class="form-group">
                    <label class="col-md-2 control-label">Dollars($): <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control validate[required]" name="dollars" id="dollars" placeholder="" value="<?=$doller?>" >
                    </div>
                    </div>  
                    </div>
                    <?
					
			}
			
			
			else if ( $setting_id==44)
			{
				
				
				
				 $gretting_user_array=explode("@@.//.@@",$setting_value);
				 ?>
				<div class="form-group">
                    <label class="col-md-2 control-label">Gretting Content: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    
                    <div class="input-icon right">
                     <i class="fa"></i>
                       <textarea class="form-control" name="gretting_content" id="gretting_content" rows="6" ><?=stripslashes($gretting_user_array[0]);?></textarea>
						</div>
                      
                    </div>
                </div>
				
               <div class="form-group">
                    <label class="col-md-2 control-label">Gretting Sign: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    
                    <div class="input-icon right">
                     <i class="fa"></i>
       <input type="text" class="form-control validate[required]" name="greeting_sign" id="greeting_sign" value="<?=$gretting_user_array[1];?>" placeholder="">

						</div>
                    </div>
                </div> 
                
			<?
				
				
				}
			else 
			{
			
			 ?>
                <div class="form-group">
                    <label class="col-md-2 control-label"><?=ucfirst(str_replace("_"," ",$setting_key));?>: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                 
                     <div class="input-icon right">
                            <i class="fa"></i>
                      <input type="text" class="form-control validate[required]" name="setting_value" id="setting_value" value="<?=$setting_value;?>" placeholder="">
						</div>
                                   
                     
                    </div>
                </div>  
              
               
                <?
			     }
				?>
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





<!--<script src="<?php echo base_url();?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
--><!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
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
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/form-validation-product.js"></script>
<!-- END PAGE LEVEL STYLES -->
<script>
jQuery(document).ready(function() {   
		// initiate layout and plugins
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		FormValidation.init();
});
</script>
</body>
<!-- END BODY -->
</html>
<?php
}
else{
	redirect('main/home');
}
?>