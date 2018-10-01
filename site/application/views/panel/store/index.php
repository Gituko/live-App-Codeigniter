<section id="myaccount_service">
	<div class="myaccountdiv">
		<div class="container-full">
			<div class="container-fluid">
            	
				 <div class="myaccount_holder">
                                     <div class="row">
                 	<div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	  <?php $this->load->view("panel/left_pannel");?>
                        <div style="clear:both"></div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                    
                    
   						<div class="myaccount_top_text tab-content">

                           
                           <div id="menu2" class="allcourses">
                           		<div class="useraccount">
                        			<h5>Choose package</h5>
                            	</div>
                                 <div class="col-md-12 ">
                                     <style>
                                         #option_packages{
                                             /*background: red;*/                                              
                                         }
                                         #option_packages a,#option_packages a:hover{
                                             color: black;
                                         }
                                     </style>
                                     <div class="row" id="option_packages">
                                         <?php foreach ($paquetes as $k){ ?>
                                         
                                         <div class="col-lg-3">
                                             <a href="<?php base_url() ?>store/buy/<?php echo $k->id; ?>">
                                             <div class="row">
                                                 <div class="col-lg-12">
                                                     <img src="<?php echo site_base_url() ?>uploads/coin_image/<?php echo $k->icon; ?>"  alt="" class="img-thumbnail">                                                     
                                                 </div>
                                                 <div class="col-lg-12">
                                                     <?php echo $k->name; ?>
                                                 </div>
                                                 <div class="col-lg-12">
                                                     <?php echo $k->equals_note; ?> Note
                                                 </div>
                                                 <div class="col-lg-12">
                                                     Buy for: <?php echo number_format($k->sale_price, 2); ?> dls
                                                 </div>                                                 
                                             </div>
                                                 </a>
                                         </div>
                                             
                                         <?php } ?>
                                     </div>
                                    </div>
                                <div style="clear:both"></div>
                           </div>

                            <div style="clear:both"></div>
						</div>
                    </div>
                    
                   
                    
                    <div style="clear:both"></div>
                 </div>
                                     </div>
			</div><!-- /.container -->
		</div><!-- /.container-full -->
	</div> <!-- /.servicediv -->
</section><!-- /#Service -->

<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->


