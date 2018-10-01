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
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link href="<?php echo base_url();?>assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>assets/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<!--<script>
function best_product(product_id)
	{ 
				$.ajax({ 
					type: 'POST',
					url: "<?php echo base_url(); ?>main/update_best_product?product_id="+product_id,
					success:function(response){
						
					
				  }
			  });
				
		
	
	}
	
	
	</script>-->










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

<!--<body class="page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed-mobile page-footer-fixed1">-->
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
		
		<div class="page-content-wrapper">
			<div class="page-content">
				
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
						
					</div>
					
				</div>
				
				<h3 class="page-title">
				Meta tag list <small>editable meta tag samples</small>
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php  echo base_url()  ?>main/home">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>main/meta_tag">Meta tag list</a>							
                            <i class="fa fa-angle-right"></i>
						</li>
						
					</ul>
					
				</div>
				
                    
                    
                <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                You cant leave this empty. Please check below.
                </div>
                
                
                <div class="alert alert-exist display-hide">
                <button class="close" data-close="alert"></button>
                Already Exist.
                </div>
                
                <div class="alert alert-success display-hide">
                <button class="close" data-close="alert"></button>
                Your form validation is successful!
                </div>
              
				
				<div class="row">
					<div class="col-md-12">
						
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-edit"></i>Editable Product</div>
								
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
								<tr>
                                   <th style="visibility:hidden;display:none;"></th>
									<th>
										 Meta Title
									</th>
									<th>
										Page Name
									</th>
									<th>
										Status
									</th>
									<th>
										 Edit
									</th>
                                    <th>
										 Delete
									</th>
								</tr>
								</thead>
								<tbody>
                                <?
								
								   $status_list = array(
										"Active" => "success",
										"Inactive" => "info",
										
									  );
											
								
								//echo "<pre>"; print_r($details); die;
								 for($i=0;$i<count($details);$i++)
								 {		$meta_id=stripslashes($details[$i]['meta_id']);
									    $meta_title=stripslashes($details[$i]['meta_title']);
										 $page_name=stripslashes($details[$i]['page_name']);
										$meta_status=stripslashes($details[$i]['meta_status']);
										

								if($meta_status=='Active')
									 {
										 $label_type='success';
									 }
									 else
									 {
										 $label_type='warning';
									 }
									 
								?>
								<tr>
                                     <td style="visibility:hidden;display:none;"><?=$meta_id?></td>
									<td>
										 <?=$meta_title?>
									</td>
                                 
                                    <td>
										 <?=$page_name?>
									</td>
                                 
										 
									</td>
									<td>
                                         <span class="label label-sm label-<?=$status_list[$meta_status];?> "> 
										 
										 <?=$meta_status?> </span>
										 
									</td>
									<td>
										
                                        <a  href="<?php echo base_url();?>main/edit_meta_tag/<?=$meta_id?>">
										Edit </a>
                                       
									</td>
									<td>
										<a href="<?php echo base_url();?>main/delete_meta_tag/<?=$meta_id?>">
										Delete </a>
									</td>
                                    
								</tr>
                                
								<?
								
								 }
								 ?>
                                
								</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
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
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/table-editable-pagecontent.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   TableEditable.init();
});
</script>
</body>
<!-- END BODY -->
</html>