<?php
$details;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$page_name='add_advertisement';
$page_title =$this->module->page_title($page_name); 
$meta_tag=$page_title[0]['meta_tag'];
$meta_title=$page_title[0]['meta_title'];
?>

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
				Advertisement Edit <small> Advertisement Brand</small>
			  </h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>main/home">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>main/advertisement">Advertisement List</a>
							<i class="fa fa-angle-right"></i>
						</li>
						
					</ul>
					
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">

					<div class="col-md-12">
                    <?php
					if(!empty($details) && $advertisement_id!='')
			          {
						  $form_action="main/edit_advertisement/".$advertisement_id;
					  }
					  else
					  {
						  $form_action="main/add_advertisement";
					  }
					?>
					<form class="form-horizontal form-row-seperated" id="form_sample_product" name="form_sample_product"  enctype="multipart/form-data" method="post" action="<?=base_url();?><?=$form_action?>">
                       
										
							<div class="portlet light">
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-basket font-green-sharp"></i>
										<span class="caption-subject font-green-sharp bold uppercase">
										Edit  Advertisement</span>
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
			
			
			   if(!empty($details) && $advertisement_id!='')
			   {
				   
					$advertisement_id=stripslashes($details[0]['advertisement_id']);
					$advertisement_name=stripslashes($details[0]['advertisement_name']);
					//$advertiser_name=stripslashes($details[0]['advertiser_name']);
					
					$advertisement_image=stripslashes($details[0]['advertisement_image']);
					$advertisement_link=stripslashes($details[0]['advertisement_link']);
					$advertisement_start_date=stripslashes($details[0]['advertisement_start_date']);
//					$advertisement_end_date1=stripslashes($details[0]['advertisement_end_date']);
					$advertisement_page=stripslashes($details[0]['page']);
					$advertisement_end_date=stripslashes($details[0]['advertisement_end_date']);	
					$advertisement_code=stripslashes($details[0]['advertisement_code']);
					$advertisement_status=stripslashes($details[0]['advertisement_status']);
					$advertisment_type=stripslashes($details[0]['advertisment_type']);
                    $total_price=stripslashes($details[0]['total_price']);

				}
			   else
			   {
				  $advertisement_name='';
				  // $advertiser_name='';
				  $advertisement_location='';
				  $advertisement_image='';
				  $advertisement_link='';
				  $advertisement_start_date='';
				  $advertisement_end_date1='';
				  $advertisement_status='';
				  $advertisement_page='';
				  $advertisement_place='';
				  $advertisement_code='';
				  $advertisment_type='';
				  $total_price='';
			   }
			  
			
			?>
            
                    <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Name<span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="advertisement_name" id="advertisement_name" placeholder=""  value="<?=$advertisement_name;?>" required>
                    </div>
                    </div>  
                    </div>
                
                    
                    
                    
                    
                    <?php
					
					
					//$page_list=$this->module->get_add_page_postion();
					
					?>
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Page & Position: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="page" id="page"  onChange="place()" >
                    <option value="">Select...</option>
                   
                    <option value="home_top" <? if($advertisement_page=='home_top') { ?> selected <? } ?>>Home Top</option>
                   
                    <option value="home_bottom" <? if($advertisement_page=='home_bottom') { ?> selected <? } ?>>Home Bottom</option>     
                    <option value="video_detail_top" <? if($advertisement_page=='video_detail_top') { ?> selected <? } ?>>Video Detail Top</option>
                     <option value="video_detail_bottom" <? if($advertisement_page=='video_detail_bottom') { ?> selected <? } ?>>Video Detail Bottom</option>
                      <option value="video_detail_right_top" <? if($advertisement_page=='video_detail_right_top') { ?> selected <? } ?>>Video Detail Right Top</option>
                      <option value="video_detail_right_bottom" <? if($advertisement_page=='video_detail_right_bottom') { ?> selected <? } ?>>Video Detail Right Bottom</option>
                       <option value="artist_details_top" <? if($advertisement_page=='artist_details_top') { ?> selected <? } ?>>Video Detail Bottom</option>
                        <option value="artist_details_right" <? if($advertisement_page=='artist_details_right') { ?> selected <? } ?>>Artist Detail Right</option>
                        <option value="artist_details_bottom" <? if($advertisement_page=='artist_details_bottom') { ?> selected <? } ?>>Artist Detail Bottom</option>
                         <option value="category_list_bottom" <? if($advertisement_page=='category_list_bottom') { ?> selected <? } ?>>Category list Bottom</option>
                    
            
                    </select>
                    <p style="color:#F00" id="error_msg"></p>
                    </div>
                    </div>
                    
                    
                    
                    
                  <?php /*?>  <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Place: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="ad_place" id="ad_place" onChange="place()">
                    <option value="">Select...</option>
                    <option value="Top" <? if($advertisement_place=='Top') { ?> selected <? } ?>>Top</option>                   
                    <option value="Left" <? if($advertisement_place=='Left') { ?> selected <? } ?>>Left</option>     
                    <option value="Right" <? if($advertisement_place=='Right') { ?> selected <? } ?>>Right</option>
                    <option value="Bottom" <? if($advertisement_place=='Bottom') { ?> selected <? } ?>>Bottom</option>
                    </select>
                    </div>
                    </div><?php */?>
                                        
                    
                    
                    
                    
                    <script>
function place()		 
{   var page = document.getElementById('page').value;
	//var ad_place = document.getElementById('ad_place').value;
	
	//alert(category_id);
	
	var price=page;
	//alert(price);
	var price1 = price.toLowerCase();
	//alert(price1);
	if(page==''){
		
		 $('#error_msg').html("Please select Advertisement Page.");
		 document.getElementById('ad_place').value = "";
		}else{
	$.ajax({
		type: "POST",
		
	     url: "<?php echo base_url();?>main/get_price?price1="+price1,
		success:function(response){
			//alert(response);
			document.getElementById('price_info').innerHTML=response;
		}
		
		});
	}
}
					
					</script>
                     <div id="price_info">
                     
                    
                     
                     </div>
                     
                     
                     
                     
                     
                    <!--------------------------------------------------------------------------->
                       <script type="text/javascript">
			$(function(){
				$('#start').appendDtpicker({
					"closeOnSelected": true,								
					
					"dateOnly": true
					
				});
			});
		</script>
        <script type="text/javascript">
			$(function(){
				$('#end').appendDtpicker({
					"closeOnSelected": true,								
					
					"dateOnly": true
					
				});
			});
		</script>
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Start Date <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-3">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control datepicker-here" name="advertisement_start_date" id="start" placeholder=""  value="<?=$advertisement_start_date;?>" >
                    </div>
                    </div>  
                    </div>
        
                   <div class="form-group">
                    <label class="col-md-2 control-label">End Date: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-3">
                    <input type="text" class="form-control datepicker-here" name="advertisement_end_date" id="end" placeholder=""  value="<?=$advertisement_end_date;?>" >
<!--<select class="table-group-action-input form-control input-medium" name="advertisement_end_date" id="advertisement_end_date" onChange="total_prc()">
                    <option value="">Select...</option>
                    <option value="15" <? if($advertisement_end_date=='15') { ?> selected <? } ?>>15</option>                   
                    <option value="30" <? if($advertisement_end_date=='30') { ?> selected <? } ?>>30</option>     
                                        </select>-->
                    </div>
                    </div>
                    <!--------------------------------------------------------------------------->
                     <script>
//            function total_prc()
//            {  
//
//            var page = document.getElementById('page').value;
//            //alert(page);
//            var advertisement_end_date = document.getElementById('advertisement_end_date').value;
//
//              //alert(advertisement_end_date);
//              if(page==''){
//
//                             $('#error_msg').html("Please select Advertisement Page & Position.");
//                             document.getElementById('advertisement_end_date').value = "";
//                            }else{
//                                    var advertisement_start_date = document.getElementById('start').value;
//                                    //alert(advertisement_start_date);
//                                    var someDate = new Date(advertisement_start_date);
//                            //alert(someDate);
//                    someDate.setDate(someDate.getDate() + parseInt(advertisement_end_date)); //number  of days to add, e.x. 15 days
//            var dateFormated = someDate.toISOString().substr(0,10);
//            document.getElementById('advertisement_end_date1').value=dateFormated;
//            document.getElementById('exp_date').innerHTML=dateFormated;
//            //alert(dateFormated);
//                    var price = document.getElementById('price').value;
//                    //alert(price);
//                              // alert(advertisement_end_date);
//
//                    var price1=advertisement_end_date/15;
//                             //alert(price1);
//                    var price2 = price1*price;
//                    //alert(price2);
//
//                    document.getElementById('total_price').value=price2;
//                    $('#prc').show();
//                    $('#total_prc').hide();	
//                            }
//            }
					
					</script>
                 
                    <!---------------------------------------------------------------------------->
                  <?php
				  if($total_price!='')
				  {
				  ?>
                  
                  
                  <div class="form-group" id="total_prc">
                    <label class="col-md-2 control-label">Total Price<span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-2">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" placeholder=""  value="<?=$total_price?>" required readonly>
                    </div>
                    </div>  
                    
<!--                    <div class="col-md-6 sc_right_col2">
                   
                               <span  style="color:#F00;">End date:<?=$advertisement_end_date1?> </span>

                                            </div>-->
                    </div>
                  
                  
                  <?php
				  }
				  ?>
                  
                  
                  
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="form-group" id="prc" style="display:none">
                    <label class="col-md-2 control-label">Total Price<span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-2">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="text" class="form-control" name="total_price" id="total_price" placeholder=""  value="<?=$total_price?>" required readonly>
                    </div>
                    </div>  
                    <div class="col-md-6 sc_right_col2">
                   
                               <span id="ex_date" style="color:#F00;">End date <span id=exp_date></span></span>
                               
                           
                               
                               
                <input type="hidden" name = "advertisement_end_date1" id="advertisement_end_date1" value="<?=$advertisement_end_date1?>" />
                                            </div>
                    </div>
                
                    <!------------------------------------------------------------------------------>
                    
                    <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Type <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                   
                   
                  
 <label class="radio-inline">
 <input type="radio" name="advertisment_type" id="image_type" <?php if($advertisment_type=='image'){ ?>checked="true"<? }?>  value="image">Image
 </label>
					<label class="radio-inline"><input type="radio" value="code" name="advertisment_type" <?php if($advertisment_type=='code'){?> checked="true" <? }?>  id="code" >Code</label>
                    </div>
                    </div>  
                    </div>
           
                    
              <script>
$( "input" ).on( "click", function() {
 
							 if($("input:checked" ).val()=='image'){
												
												$("#display_code").hide();
												$("#display_image").show();
												
												}
								if($("input:checked" ).val()=='code'){
												
												
												$("#display_image").hide();
												$("#display_code").show();
												
												}	
												
							
});
</script>        
                    
                    
 <!------------------------------------------------------------------- display image Section---------------------------------------------------------------------------->
                   <div id="display_image" >
                   
                   
                    <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Link <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <?php if($advertisement_link!=''){ ?>
                    <input type="text" class="form-control" name="advertisement_link"  placeholder=""  value="<?=$advertisement_link?>" >
                    <?php } else { ?>
                    <input type="text" class="form-control" name="advertisement_link"  placeholder=""  value="https://" >
                    <?php } ?>
                    </div>
                    </div>  
                    </div>

                    
                    <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Image: <span class="required">
                    * </span>
                    
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                    <input type="file" name="advertisement_image" id="advertisement_image" > 
                    <input type="hidden" class="form-control" name="hid_advertisement_image" id="hid_advertisement_image" placeholder=""  value="<?=$advertisement_image; ?>" >
						<div class="col-md-4 small">
						<?php
                        if($advertisement_image!='')
                        {
                        ?>
                       <img src="<?=site_base_url()."uploads/advertisement_image/".$advertisement_image;?>" width='100' height='80'> 
                       <?
                        }
                       ?>
                       </div>
                    </div>
                    </div>  
                    </div>
                    
                   
                   </div>
                   
 <!----------------------------------------------------end of display image Section---------------------------------------------------------------------------------------------->


<!------------------------------------------------------ display code Section------------------------------------------------------------------------->
                     <div id="display_code" >
                     
                     
                     <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement code <span class="required">
                    * </span>
                    </label>
                    
                    <div class="col-md-10">
                    <div class="input-icon right">
                    <i class="fa"></i>
                   <textarea class="form-control" name="advertisement_code" id="advertisement_code" rows="6" data-error-container="#editor2_error"><?=$advertisement_code;?></textarea>
                    </div>
                    </div>  
                    </div>
                     
                     
                   </div>
 <!-- --------------------------------------------end of display code Section------------------------------------------------------------------>
                     
                    <script>
		   (function(){
					 <?
					 if($advertisment_type=='image')
					 {
						?> $("#display_image").show();
						$("#display_code").hide();
						
						 <?
						 }
					 ?>
					 <?
					 if($advertisment_type=='code')
					 {
						?> $("#display_code").show();
						$("#display_image").hide();
						
						 <?
						 }
					 ?>
					 
					 })();
		   </script>
           
        
                   <!---->

                    
                    </div>
                    
                    </div>    
                    
                    </div>
                    </div>
                
                    <div class="form-group">
                    <label class="col-md-2 control-label">Advertisement Status: <span class="required">
                    * </span>
                    </label>
                    <div class="col-md-10">
                    <select class="table-group-action-input form-control input-medium" name="advertisement_status" id="advertisement_status" >
                    <option value="">Select...</option>
                    <option value="Active" <? if($advertisement_status=='Active') { ?> selected <? } ?>>Active</option>
                    <option value="Inactive" <? if($advertisement_status=='Inactive') { ?> selected <? } ?>>Inactive</option>                  
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