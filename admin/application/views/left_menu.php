<?php
$page_name=$this->uri->segment(2); 
?>
<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-auto-scroll="true" data-slide-speed="200">
					<li class="start <? if($page_name=='home' ) { ?> active open <? } ?>">
						<a href="<?php echo base_url(); ?>main/home">
						<i class="icon-home"></i>
						<span class="title">Dashboard</span>
                        <?
						if($page_name=='home' ) { 
						?>
                        <span class="selected"></span>
						<span class="arrow open"></span>
                        <?
						}
						?>
						</a>
					</li>
                  
 <!--------------------------------------------------------------------create admin account start------------------------------------------------>             
     
                    
                    <li class=" <? if($page_name=='create_account' || $page_name=='account_list' || $page_name=='edit_account') { ?> active <? } ?> ">
						<a href="javascript:;">
						<i class="fa fa-columns"></i>
						<span class="title">Admin Account</span>
						<? if($page_name=='account_list' || $page_name=='create_account') { ?>
                        <span class="selected"></span>
						<span class="arrow open"></span>
                        <? } ?>
						</a>
						<ul class="sub-menu">
                            <li>
								<a href="<?php echo base_url(); ?>main/account_list"><i class="fa fa-columns"></i> Account List</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/create_account"><i class="fa fa-plus-square"></i>Create an Account</a>
							</li>
							
						</ul>
					</li>   
  <!--------------------------------------------end----------create admin account----------------------------------------------------------------> 
<!--------------------------------------------------------------------category------------------------------------------------>             
     
                    
                    <li class=" <? if($page_name=='category_list' || $page_name=='add_category' || $page_name=='edit_category') { ?> active <? } ?> ">
						<a href="javascript:;">
						<i class="fa fa-columns"></i>
						<span class="title">Category</span>
						<? if($page_name=='category_list' || $page_name=='add_category') { ?>
                        <span class="selected"></span>
						<span class="arrow open"></span>
                        <? } ?>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?php echo base_url(); ?>main/category_list"><i class="fa fa-columns"></i>Category List</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/add_category"><i class="fa fa-plus-square"></i>Add Category</a>
							</li>
						</ul>
					</li>   
  
   
                        <li>
								<a href="javascript:;">
						<i class="fa fa-picture-o"></i>
						<span class="title">Slider</span>
                        <span class="selected"></span>
						</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>main/slider">
                                        <i class="fa fa-user"></i>
                                        Slider List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>main/edit_slider">
                                        <i class="fa fa-plus-square"></i>
                                        Add Slider </a>
                                </li>
                            </ul>
							</li>		
                            
 <!--------------------------------------------------------------------USER MEMBER------------------------------------------------>             
     
               <li  class="start <? if($page_name=='artist_list' || $page_name=='user_list') { ?> active <? } ?> ">
						<a href="javascript:;">
						<i class="fa fa-picture-o"></i>
						<span class="title">User Member</span>
                        <span class="selected"></span>
						</a>
						<ul class="sub-menu">
                    
                     <li  class="start <? if($page_name=='artist_list' || $page_name=='edit_artist') { ?> active <? } ?> ">
						<a href="javascript:;">
						<i class="fa fa-picture-o"></i>
						<span class="title">Artist</span>
						<!--<span class="arrow "></span>-->
                        <span class="selected"></span>
						</a>
						<ul class="sub-menu">
                                           
                            <li>
								<a href="<?php echo base_url(); ?>main/artist_list">
								<i class="fa fa-list"></i>
						Artist List</a>
							</li>
                            <li>
								<a href="<?php echo base_url(); ?>main/add_artist"><i class="fa fa-plus-square"></i>Add Artist</a>
							</li>
							                
						</ul>
					</li>
                    
                    <li  class="start <? if($page_name=='user_list' || $page_name=='edit_user') { ?> active <? } ?> ">
						<a href="javascript:;">
						<i class="fa fa-picture-o"></i>
						<span class="title">User</span>
						<!--<span class="arrow "></span>-->
                        <span class="selected"></span>
						</a>
						<ul class="sub-menu">
                                           
                            <li>
								<a href="<?php echo base_url(); ?>main/user_list">
								<i class="fa fa-list"></i>
						User List</a>
							</li>
                            <li>
								<a href="<?php echo base_url(); ?>main/add_user"><i class="fa fa-plus-square"></i>Add User</a>
							</li>
							                
						</ul>
					</li>
                  
                    </ul>
                    </li>
  <!--------------------------------------------end----------USER MEMBER----------------------------------------------------------------->
    <li>
								<a href="javascript:;">
						<i class="fa fa-picture-o"></i>
						<span class="title">Emoji</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
                
                            
                             <li>
								<a href="<?php echo base_url(); ?>main/emoji_list">
								<i class="fa fa-user"></i>
								Emoji List</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/add_emoji">
								<i class="fa fa-plus-square"></i>
								Add Emoji </a>
							</li>
                            
						</ul>
							</li>	
  
  
  
  
  
  
  
  <!--***********************************************start Miscellaneous**************************************************************************--->
  
  
  <li>
								<a href="javascript:;">
						<i class="fa fa-film"></i>
						<span class="title">Miscellaneous</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
                
                            
                            <li>
<!-- --------------------------------------------------------meta tag start-------------------------------------------------------------->
  
   <li>
								<a href="javascript:;">
						<i class="fa fa-film"></i>
						<span class="title">Meta tag</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
                
                            
                            <li>
								<a href="<?php echo base_url(); ?>main/meta_tag">
								<i class="fa fa-list"></i>
								Meta tag List</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/edit_meta_tag">
								<i class="fa fa-plus-square"></i>
								Add Meta tag </a>
							</li>
                            
						</ul>
	</li>	
  <!-- --------------------------------------------------------meta tag END-------------------------------------------------------------->
							</li>
							<li>
<!-- ------------------------------------------------------------Start pagecontent-------------------------------------------------------->
   <li>
								<a href="javascript:;">
						<i class="fa fa-film"></i>
						<span class="title">Pagecontent</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
                
                            
                            <li>
								<a href="<?php echo base_url(); ?>main/pagecontent">
								<i class="fa fa-list"></i>
								Pagecontent List</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/add_pagecontent">
								<i class="fa fa-plus-square"></i>
								Add Pagecontent </a>
							</li>
                            
						</ul>
	</li>	
  
  <!---------------------------------------------------------End pagecontent-------------------------------------------------------------------->
  
							</li>
                            <li>
                            
                            
                            
           <li>
								<a href="javascript:;">
						<i class="fa fa-film"></i>
						<span class="title">Admin Video</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
                
                            
                            <li>
								<a href="<?php echo base_url(); ?>main/admin_video_list">
								<i class="fa fa-list"></i>
								Admin Video List</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/admin_add_video">
								<i class="fa fa-plus-square"></i>
								Add Video </a>
							</li>
                            
						</ul>
	</li>	                 
                            
                            
                            
                            
                            
      <!-------------------------------------------------------------------------------------------------------->                      
                            
                            
                            
                            
                            
                 <li>
								<a href="javascript:;">
						<i class="fa fa-film"></i>
						<span class="title">Advertisement Price Setting</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
                
                            
                            <li>
								<a href="<?php echo base_url(); ?>main/add_price_setting">
								<i class="fa fa-list"></i>
								Add Price Setting List</a>
							</li>
							<?php /*?><li>
								<a href="<?php echo base_url(); ?>main/edit_advertisement">
								<i class="fa fa-plus-square"></i>
								Add Advertisement </a>
							</li><?php */?>
                            
						</ul>
	</li>	           
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
  <!-- --------------------------------------------------------advertisement start-------------------------------------------------------------->
  
   <li>
								<a href="javascript:;">
						<i class="fa fa-film"></i>
						<span class="title">Advertisement</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
                
                            
                            <li>
								<a href="<?php echo base_url(); ?>main/advertisement">
								<i class="fa fa-list"></i>
								Advertisement List</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/edit_advertisement">
								<i class="fa fa-plus-square"></i>
								Add Advertisement </a>
							</li>
                            
						</ul>
	</li>	
  <!-- --------------------------------------------------------advertisement END---------------------------------------->
 <!-----------------------------------------------------------advertisement video-------------------------------------->
 <li>
								<a href="javascript:;">
						<i class="fa fa-film"></i>
						<span class="title">Advertisement Video</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
                
                            
                            <li>
								<a href="<?php echo base_url(); ?>main/advertisement_video_list">
								<i class="fa fa-list"></i>
								Advertisement Video List</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>main/advertisement_add_video">
								<i class="fa fa-plus-square"></i>
								Add Video </a>
							</li>
                            
						</ul>
	</li>
 <!--------------------------------------------------------------------------------------------------------------------->
                            
                            </li>
						</ul>
							</li>	
 <!-- ***********************************************End Miscellaneous************************************************************************-->
  
  
  
  
  <!-- --------------------------------------------------------Payment Details start-------------------------------------------------------------->
  
   <li>
								<a href="javascript:;">
						<i class="fa fa-film"></i>
						<span class="title">Payment Details</span>
                        <span class="selected"></span>
						</a>
                        <ul class="sub-menu">
                        
<!--                            <li>
                                <a href="" onclick="return false;">
                                    <i class="fa fa-list"></i>
                                    Tabla de conversiones </a>
                                <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/conversions_table_list">
                                        <i class="fa fa-user"></i>
                                         Lista de conversiones</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/add_conversions_money">
                                        <i class="fa fa-plus-square"></i>
                                        Agregar moneda de conversion </a>
                                </li>
                                </ul>
                            </li>-->
                            <li>
                                <a href="" onclick="return false;">
                                    <i class="fa fa-list"></i>
                                    Packages </a>
                                <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>paquete_credito/index">
                                        <i class="fa fa-user"></i>
                                         List of packages</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>paquete_credito/add">
                                        <i class="fa fa-plus-square"></i>
                                        Add packages </a>
                                </li>
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a href="<?php echo base_url(); ?>payment_request">
                                    <i class="fa fa-list"></i>
                                    Payment Request</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>main/payment_detatils">
                                    <i class="fa fa-list"></i>
                                    Payment List</a>
                            </li>
                                                        
							
						</ul>
							</li>	
  <!-- --------------------------------------------------------Payment Details END-------------------------------------------------------------->
  
  
  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------->                   
                    
                     <li class=" <? if($page_name=='setting' || $page_name=='edit_setting') { ?> active <? } ?> ">
						<a href="javascript:;">
						<i class="fa icon-settings"></i>
						<span class="title">Setting</span>
						<?php
						if($page_name=='setting' || $page_name=='edit_setting') { 
						?>
                        <span class="selected"></span>
						<span class="arrow open"></span>
                        <?
						}
						?>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="<?php echo base_url(); ?>main/setting">
								<i class="fa icon-settings"></i>
								Setting List</a>
							</li>
						</ul>
					</li> 
                    
                   
                    
                    
                    
                    
          
                    
				<!----------------------------------------------------------------------------------------------------->	
                    </ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>