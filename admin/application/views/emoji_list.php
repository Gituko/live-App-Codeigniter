<?php
$details;
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
		
		<div class="page-content-wrapper">
			<div class="page-content">
				
				
				
				<h3 class="page-title">
				Emoji list 
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php  echo base_url()  ?>main/home">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>main/emoji_list">Emoji list</a>							
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
									<i class="fa fa-edit"></i>Editable Emoji</div>
								
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
								<thead>
								<tr>
                                   <th style="visibility:hidden;display:none;"></th>
									<th>
										  Name
									</th>
									<th>
										  Image
									</th>
                                    
                                    <th>
										  Type
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
											
								
								
								 for($i=0;$i<count($details);$i++)
								 {
									    $emoji_text=stripslashes($details[$i]['emoji_text']);
										$emoji_image=stripslashes($details[$i]['emoji_image']);
										$emoji_status=stripslashes($details[$i]['emoji_status']);
										$emoji_type=stripslashes($details[$i]['emoji_type']);
										$emoji_id=stripslashes($details[$i]['emoji_id']);
										if($emoji_status=='Active')
									 {
										 $label_type='success';
									 }
									 else
									 {
										 $label_type='warning';
									 }
									 
								?>
								<tr>
                                     <td style="visibility:hidden;display:none;"><?=$emoji_id?></td>
									<td>
										 <?=$emoji_text?>
									</td>
                                   <td>
                                  <img src ='<?php echo site_base_url('uploads/emoji_image/'. $emoji_image); ?>' width='19' height='19'>
                                  </td>
                                  
                                  <td>
										 <?=$emoji_type?>
									</td>
                                  
                                  
                                  
                                  
                                  
									<td>
                                         <span class="label label-sm label-<?=$status_list[$emoji_status];?> "> 
										 
										 <?=$emoji_status?> </span>
										 
									</td>
									<td>
										
                                        <a  href="<?php echo base_url();?>main/edit_emoji/<?=$emoji_id?>">
										Edit </a>
                                       
									</td>
									<td>
										<a href="<?php echo base_url();?>main/delete_emoji/<?=$emoji_id?>">
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