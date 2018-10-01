
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
			
				<!-- END STYLE CUSTOMIZER -->
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Dashboard</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo base_url(); ?>">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>">Dashboard</a>
						</li>
					</ul>
				
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft" href="<?=base_url();?>main/category_list">
						<div class="visual">
							<i class="fa fa-th-list"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Total Category<br> <center> <font size="20"><?=$total_no_category;?></font></center>
							</div>
						</div>
						</a>
					</div>
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft green" href="<?=base_url();?>main/user_list">
						<div class="visual">
							<i class="fa fa-user"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Total User<br> <center> <font size="20"><?=$total_no_user;?></font></center>
							</div>
						</div>
						</a>
					</div>
                    <!---------------------------------------------------------------------------------------------------->
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft purple" href="<?=base_url();?>main/artist_list">
						<div class="visual">
							<i class="fa fa-leaf"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Total Artist<br> <center> <font size="20"><?=$total_no_artist;?></font></center>
							</div>
						</div>
						</a>
					</div>
					
                   <!----------------------------------------------------------------------------------------------------->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft red" href="<?=base_url();?>main/view_all_photos">
						<div class="visual">
							<i class="fa fa-picture-o"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Total Photos<br> <center> <font size="20"><?=$total_no_images;?></font></center>
							</div>
						</div>
						</a>
					</div>
                    
                    
                    
                   
                   
                   
					
				</div>
                
                <!---------------------------------------------new row--------------------------------------------------->
                <div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft yellow" href="<?=base_url();?>main/view_all_normal_videos">
						<div class="visual">
							<i class="fa fa-video-camera"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Total Normal Videos<br> <center> <font size="20"><?=$total_no_normal_videos;?></font></center>
							</div>
						</div>
						</a>
					</div>
                    <!------------------------------------------------------------------------------------------------------>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue" href="<?=base_url();?>main/view_all_recorded_videos">
						<div class="visual">
							<i class="fa fa-video-camera"></i>
						</div>
						<div class="details">
							<div class="number">
								
							</div>
							<div class="desc">
								 Total Recorded Videos<br> <center> <font size="20"><?=$total_no_recorded_videos;?></font></center>
							</div>
						</div>
						</a>
					</div>
                  
                    <style>
					.btn_link
					{
					background-color:#1a67d0;
					color:#FFF;
					font-size:15px;
					width: 150px;
					padding:5px;
					border-radius:3px;
					 text-decoration:none;
					 text-align:center;
					border: 5px solid red;
					border:1px solid #184a8e;

					}
					
					</style>
					
                    
					
				</div>
                
				<!-- END DASHBOARD STATS -->
				<div class="clearfix">
				</div>
				
				<div class="clearfix">
				</div>
				
				<div class="clearfix">
				</div>
                
               
                
                
                
                
                
                
                
				
				
				<div class="clearfix">
				</div>