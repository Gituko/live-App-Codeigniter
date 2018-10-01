<?php
$details;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$page_name='payment_list';
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


 <script src="http://code.jquery.com/jquery-1.7.2.js">  </script>
             <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
       <script type="text/javascript">
               $(document).ready(function(){
                     $("#start").datepicker();
				
               });
       </script>


<script src="http://code.jquery.com/jquery-1.7.2.js">  </script>
             <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
       <script type="text/javascript">
               $(document).ready(function(){
                     $("#end").datepicker();
				
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
				Payment Details <small></small>
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php  echo base_url()  ?>main/home">Home</a> 
							<i class="fa fa-angle-right"></i>Payment List
						</li>
						
						
					</ul>
					
				</div>
				
                  <?php 
				
					  
					   $form_action="main/artist_earnings";
				  ?>
			   <form class="form-horizontal form-row-seperated" id="form_sample_product" name="form_sample_product"   method="get" action="<?=base_url();?><?=$form_action?>">  
                    
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
									</div>
								
							</div>
                            
	
                            
                            
							<div class="portlet-body">
                            
                            
								
								<table class="table table-striped table-hover table-bordered " id="sample_editable_1">
								<thead>
                                
                                  
       
       
       
                                
                                
                                      
        
        
        
        
      
        
        
        
 <style>
 .border_btm{
	 border-bottom:1px solid #dedede;
	 
	 
 }
 </style>
 
        
                              <div class="form-group">
                              
                              
                    <label class="col-md-2 control-label">From Date :<span class="required">
                     </span>
                    </label>
                    
                    <div class="col-md-2">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control datepicker-here" name="from_date" id="start" placeholder=""  value="" >
                 
                    </div>
                    
                    </div>
                      <label class="col-md-1 control-label">To Date :<span class="required">
                   </span>
                    </label>
                    <div class="col-md-2">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control datepicker-here" name="to_date" id="end" placeholder=""  value="" >
                    </div>
                    </div>
                    
                    <!-- <label class="col-md-1 control-label">Payment Type: <span class="required">
                   </span>
                    </label>
                    <div class="col-md-2">
                    <select class="table-group-action-input form-control input-low" name="payment_type" id="payment_type" >
                    <option value="">Select...</option>
                    <option value="Feature"   >Feature</option>                   
                    <option value="Streaming Video"  >Streaming Video </option>     
                    <option value="Recorded video" >Recorded Video</option>
                    
                    </select>
                    </div>-->
                   
								<div class="col-md-2">
                      <div class="btn-set mid_action" >
										
                                        <button class="btn green-haze btn-circle"><i class="fa fa-check"></i> Search</button>
                                     
										
									</div>
                      
                      </div>
                      
                     
                      
                    </div>
                    
                    
                    
                     
                      
                      
                      
                      
                      
                      <!--<div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="submit" class="form-control input-small input-inline" name="submit" id="start" placeholder=""  value="Submit" >
                    </div>
                    </div>--> 
                                
                                
                           </form>     
                              <div class="table-toolbar border_btm">
									
								</div>  
                                
                                
								<tr>
                                   <th style="visibility:hidden;display:none;"></th>
									<th>
										Purchase Date
									</th>
									<th>
										Video Title
									</th>
									<th>
										User Name
									</th>
									<th>
										Amount
									</th>
                                    <!--<th>
										Payment Type
									</th>
                                    <th>
										Date
									</th>
                                    <th>
										Payment
									</th>-->
								</tr>
								</thead>
								<tbody>
                                <?
								
										//$total_amount='';	
								 $total=0;
								//echo "<pre>"; print_r($details); die;
								 for($i=0;$i<count($details);$i++)
								 
								 {		
								 		$date=stripslashes($details[$i]['date']);
								 		$recorded_v_title=stripslashes($details[$i]['recorded_v_title']);
										$name=stripslashes($details[$i]['name']);
									    $artist_charge=stripslashes($details[$i]['artist_charge']);
										 $total=$total+$artist_charge;
										//$payment_type=stripslashes($details[$i]['payment_type']);
										//$date=stripslashes($details[$i]['date']);
										//$payment=stripslashes($details[$i]['payment']);
										
										
									 
								?>
                                
								<tr>
                               
                                     <td style="visibility:hidden;display:none;"><?=$artist_id?></td>
									<td>
										 <?=$date?>
									</td>
                                 
                                    <td>
										 <?=$recorded_v_title?>
									</td>
                                    
                                    <td>
										 <?=$name?>
									</td>
                                    
                                 <td>
                                	 <?=$artist_charge?>
                                 </td>
										 
									<?php /*?><td>
                                	 <?=$payment_type?>
                                 </td><?php */?>
										
                                      	<?php /*?><td>
                                 		<?=$date?>
                                 </td>  <?php */?>
                                     <?php /*?> <td>
                                         <?=$payment?>
									
									</td><?php */?>
                              
								</tr>
                                
								<?
								
								 }
								 //echo "Total Amount= ".$total_amount;
								 
							
							/*<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
						<a class="dashboard-stat dashboard-stat-light blue-soft" href="<?=base_url();?>main/category_list">
						<div class="visual">
							<i class=""></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Total Amount<br> <center> <font size="10"><?=$total_amount?></font></center>
							</div>
						</div>
						</a>
					</div>*/
							
							
							
							
							
							
							
								 
								 ?>
                                 
								 <div class="col-md-2"><font size="3" color="black">Total Amount :</font></div><div class="col-md-2"><font size="3" color="red"><?=$total?></font></div>
                                 <?php /*?> <div class="col-md-2"><font size="3" color="black">Total Admin Charge:</font></div><div class="col-md-2"><font size="3" color="red"><?=$total_admin_charge?></font></div>
                                  
                                  <div class="col-md-2"><font size="3" color="black">Total Artist Charge:</font></div><div class="col-md-2"><font size="3" color="red"><?=$total_artist_charge?></font></div><?php */?>
                                   
                                
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
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
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


<style>
.col-md-6 {
    width: 50%;
    margin-top: 16px;
}
</style>






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