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
<script src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>




<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
<link href="<?php echo base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/typeahead/typeahead.css">

<link href="<?php echo base_url();?>assets/global/css/components.css" rel="stylesheet" type="text/css"/>

 
  
  
<!--<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>-->
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

	
	<script type="text/javascript">
    
    $(document).ready(function() {
    $("#cat_id").change(function() {
    var cat_id = $("#cat_id").val();
   // alert(cat_id);
    var dataString = 'cat_id=' + cat_id;
    $.ajax({
    type: "GET",
    url: "<?php echo base_url(); ?>main/show_brand",
    data: dataString,
    success: function(time) 
    {
		//alert(time);
    	$("#brand_id").html( time);
    }
    });
    }); 
    });
    
    </script>
    
    
    <!--<script type="text/javascript">
    
    $(document).ready(function() {
    $("#brand_id").change(function() {
    var brand_id = $("#brand_id").val();
    //alert(brand_id);
    var dataString = 'brand_id=' + brand_id;
    $.ajax({
    type: "GET",
    url: "<?php echo base_url(); ?>main/show_carrier",
    data: dataString,
    success: function(time) 
    {
		//alert(time);
		var time_arr = time.split('@');
    	$("#network_id").html( time_arr[0]);
		$("#series_id").html( time_arr[1]);
    }
    });
    }); 
    });
    
    </script>-->
    
    
    
    <script type="text/javascript">
    
    $(document).ready(function() {
    $("#series_id").change(function() {
    var series_id = $("#series_id").val();
    //alert(brand_id);
    var dataString = 'series_id=' + series_id;
    $.ajax({
    type: "GET",
    url: "<?php echo base_url(); ?>main/show_carrier_by_series",
    data: dataString,
    success: function(time) 
    {
		//alert(time);
		var time_arr = time.split('@');
		//alert(time_arr[0]);
		//alert(time_arr[1]);
    	$("#network_id").html( time_arr[0]);
		$("#tab_meta").html( time_arr[1]);
    }
    });
    }); 
    });
    
    </script>
     <link type="text/css" href="<?php echo base_url();?>datetimepicker-master/jquery.simple-dtpicker.css" rel="stylesheet" />
 <script src="<?php echo base_url();?>datetimepicker-master/jquery.simple-dtpicker.js"></script>
  
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
					meta_title: {
                        required: true
                    },
					
					page_name: {
                        required: true
                    },
											
                 
					
					meta_tag : {
                        required: true
						
                    },
					meta_status : {
                        required: true
						
                    },
						
					
						
					},
					
                messages: {
					meta_title: {
                        required: "Please Enter Meta Title"
                    },
					
					page_name: {
                        required: "Please Enter Page Name"
                    },
					
                    meta_tag: {
                        required: "Please Enter Meta Tag"
                    },
					
					meta_status: {
                        required: "Select Status"
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
				
			
				<h3 class="page-title">
				Meta tag Edit <small> Meta tag</small>
			  </h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>main/home">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>main/meta_tag">Meta tag List</a>
							<i class="fa fa-angle-right"></i>
						</li>
						
					</ul>
					
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">

					<div class="col-md-12">
                    <?php
					
					if(!empty($details) && $meta_id!='')
			          {
						  $form_action="main/edit_meta_tag/".$meta_id;
					  }
					  else
					  {
						  $form_action="main/add_meta_tag";
					  }
					?>
					
                <form class="form-horizontal form-row-seperated" id="add_form" name="form_sample_product"  enctype="multipart/form-data" method="post" action="<?=base_url();?><?=$form_action?>">       
										
							<div class="portlet light">
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-basket font-green-sharp"></i>
										<span class="caption-subject font-green-sharp bold uppercase">
										Edit  Meta tag</span>
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
			
			
			   if(!empty($details) && $meta_id!='')
			   {
				   
					$meta_id=stripslashes($details[0]['meta_id']);
					$page_name=stripslashes($details[0]['page_name']);
					$meta_title=stripslashes($details[0]['meta_title']);
					$meta_tag=stripslashes($details[0]['meta_tag']);
					$meta_status=stripslashes($details[0]['meta_status']);
					


				}
			   else
			   {
				  $page_name='';
				  $meta_title='';
				  $meta_tag='';
				  $meta_status='';
				 
			   }
			  
			
			?>
            
                    <div class="form-group">
                    <label class="col-md-2 control-label">Meta Title<span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder=""  value="<?=$meta_title;?>" >
                    </div>
                    </div>  
                    </div>
                    
                     <div class="form-group">
                    <label class="col-md-2 control-label">Page Name<span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="page_name" id="page_name" placeholder=""  value="<?=$page_name;?>" >
                    </div>
                    </div>  
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label">Meta tag: 
                    </label>
                    <div class="col-md-10">
                    
                    <div class="input-icon right">
                    <i class="fa"></i>
                    
                    <textarea rows="6" cols="80" name="meta_tag" id="meta_tag" ><?=$meta_tag;?>
                     </textarea>
                   
                    
                    </div>    
                    
                    </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                  
       
                    
                
                    <div class="form-group">
                    <label class="col-md-2 control-label">Meta Status: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="meta_status" id="meta_status" >
                    <option value="">Select...</option>
                    <option value="Active" <? if($meta_status=='Active') { ?> selected <? } ?>>Active</option>
                    <option value="Inactive" <? if($meta_status=='Inactive') { ?> selected <? } ?>>Inactive</option>                  
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
			
			</div>
		</div>
		
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php $this->load->view("footer");?> 
	<!-- END FOOTER -->
</div>


<script src="<?php echo base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<script src="<?php echo base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!--<script src="<?php echo base_url();?>assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
--><script src="<?php echo base_url();?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>



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
