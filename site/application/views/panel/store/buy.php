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
                                     <h1> buy in processing...</h1>
                                     <pre>
                                     <?php
//                                        var_dump($paquete);
                                     ?>
                                     </pre>
                                     <form  name="paypalForm" action="../../paypal" method="post">                                        
                                        <input type="hidden" name="id" value="<?php echo $paquete->id; ?>" />
                                        <input type="hidden" name="description" value="Package <?php echo $paquete->name." '".$paquete->equals_note." Note(s)'"; ?>" />
                                        <input type="hidden" name="payment" value="<?php echo number_format($paquete->sale_price,2); ?>" />
                                        <input type="hidden" name="notes" value="<?php echo $paquete->equals_note ?>" />                                        
                                        <input type="hidden" name="type_payment" value="notes" />                                        
                                        <!--<input type="submit" name="paypal"  value="Payment via Paypal" />-->
                                    </form>
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


<!--// echo "<body onLoad=\"document.forms['paypal_form'].submit();\">\n";-->
    
    <script> 
        document.forms['paypalForm'].submit();
    
    </script>
        