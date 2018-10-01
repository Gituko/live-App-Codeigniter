<?php
if($this->session->userdata('admin_id')=='')
{
	redirect("main/login");
}

$page_name=$this->uri->segment(1); 
$admin_id=$this->session->userdata('admin_id');
$admin_image=$this->module->get_admin_image($admin_id);
?>


<div class="page-header navbar navbar-fixed-top">


                
 
  

	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?php echo base_url();?>">
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN QUICK SIDEBAR TOGGLER -->
					<li class="dropdown dropdown-quick-sidebar-toggler hide">
						<a href="javascript:;" class="dropdown-toggle">
						<i class="icon-logout"></i>
						</a>
					</li>
					<!-- END QUICK SIDEBAR TOGGLER -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle hide1" src="<?php echo site_base_url();?>uploads/subadmin_image/<?=$admin_image?>"/>
						<span class="username username-hide-on-mobile">
						Admin </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							
                            <li>
								<a href="<?php echo base_url(); ?>main/change_password">
								<i></i> Change Password </a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/logout">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>