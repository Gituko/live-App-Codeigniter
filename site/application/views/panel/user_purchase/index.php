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
                     <?php
						
						
						
	
	?>
                    
   						<div class="myaccount_top_text tab-content">
                        	<!--<div class="myaccount_search">
                            	<input type="text" class="form-control newmcsearch" name="" value="" placeholder="Advance Search">
                            </div>-->

                           
                           <div class="allcourses">
                                                    	<div class="col-md-12 as_info myfavourite_holder">
                                                        <div class="mol_row">
                                                    	<h4>MY PURCHASE LIST
                                                        <!--<div class="col-md-10 myparchase">
                                                        	<div class="col-md-5 new_search">
                                                            	<input type="text" class="form-control new_formcontrol" name="" value="" placeholder="Search here...">
                                                            </div>
                                                            <div class="col-md-5 new_search">
                                                            	<input type="text" class="form-control new_formcontrol" name="" value="" placeholder="Search here...">
                                                            </div>
                                                            <div class="col-md-2 new_search">
                                                            	<button class="btn btn-info newsearch">Search</button>
                                                            </div>
                                                        </div>-->
                                                        </h4>
                                                        </div>
                                                        <div class="myfavourite_container">
                                                        	<table class="table table-bordered">
                                                                <thead>
                                                                  <tr class="order_top">
                                                                    <th class="c_t">Purchase Date</th>
                                                                    <th class="c_t">Video Title</th>
                                                                    <th class="c_t">Artist Name</th>
                                                                    <th class="c_t"> Amount</th>
                                                                  <!--  <th class="c_t">View Details</th>-->
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                
                                                           <?php
														 foreach($purchase_list as $row)
														   {    
														      
															
														   ?>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                  <tr>
                                                                    <td class="c_t"><?=$row['date']?></td>
                                                                    <td class="c_t"><?=$row['recorded_v_title']?></td>
                                                                    <td class="c_t"><?=$row['name']?></td>
                                                                    <td class="c_t">$<?=$row['payment']?></td>
                                                                    
                                                                  </tr>
                                                                <?
																	
																
																	
																	}
														  
                                                          ?>
                                                                  
                                                                  
                                                           
                                                                </tbody>
                                                                </table>
                    <div class="addtofavourite_btn_area">
                    	
                    </div>
                                                        </div>
                                                    </div>
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


	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/script.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-v1.11.0.js"></script> 
    <!---------select file-------->

<script type="text/javascript">
//<![CDATA[
 function getFile(){
   document.getElementById("upfile").click();
 }
 function sub(obj){
    var file = obj.value;
    var fileName = file.split("\\");
    document.getElementById("yourBtn").innerHTML = fileName[fileName.length-1];
    document.myForm.submit();
    event.preventDefault();
  }
  //]]> 
</script>
<!-----------end----------->
<script type="text/javascript">
//<![CDATA[
function myFunction() {
    document.getElementById("myVideo1").controls = true;
}
function myFunction2() {
    document.getElementById("myVideo2").controls = true;
}
function myFunction3() {
    document.getElementById("myVideo3").controls = true;
}
function myFunction4() {
    document.getElementById("myVideo4").controls = true;
}
function myFunction5() {
    document.getElementById("myVideo5").controls = true;
}
function myFunction6() {
    document.getElementById("myVideo6").controls = true;
}
function myFunction7() {
    document.getElementById("myVideo7").controls = true;
}
function myFunction7() {
    document.getElementById("myVideo7").controls = true;
}
function myFunction8() {
    document.getElementById("myVideo8").controls = true;
}
function myFunction9() {
    document.getElementById("myVideo9").controls = true;
}
function myFunction10() {
    document.getElementById("myVideo10").controls = true;
}
function myFunction11() {
    document.getElementById("myVideo11").controls = true;
}
function myFunction12() {
    document.getElementById("myVideo12").controls = true;
}
function myFunction111() {
    document.getElementById("myVideo111").controls = true;
}
function myFunction222() {
    document.getElementById("myVideo222").controls = true;
}
function myFunction333() {
    document.getElementById("myVideo333").controls = true;
}
function myFunction444() {
    document.getElementById("myVideo444").controls = true;
}
function myFunction555() {
    document.getElementById("myVideo555").controls = true;
}
function myFunction666() {
    document.getElementById("myVideo666").controls = true;
}
function myFunction777() {
    document.getElementById("myVideo777").controls = true;
}
function myFunction888() {
    document.getElementById("myVideo888").controls = true;
}
function myFunction999() {
    document.getElementById("myVideo999").controls = true;
}
function myFunction1111() {
    document.getElementById("myVideo1111").controls = true;
}
function myFunction2222() {
    document.getElementById("myVideo2222").controls = true;
}
function myFunction3333() {
    document.getElementById("myVideo3333").controls = true;
}
function myFunction4444() {
    document.getElementById("myVideo4444").controls = true;
}
function myFunction5555() {
    document.getElementById("myVideo5555").controls = true;
}
function myFunction6666() {
    document.getElementById("myVideo6666").controls = true;
}
function myFunction1a() {
    document.getElementById("myVideo1a").controls = true;
}
function myFunction2a() {
    document.getElementById("myVideo2a").controls = true;
}
function myFunction3a() {
    document.getElementById("myVideo3a").controls = true;
}
function myFunction4a() {
    document.getElementById("myVideo4a").controls = true;
}
function myFunction5a() {
    document.getElementById("myVideo5a").controls = true;
}
function myFunction6a() {
    document.getElementById("myVideo6a").controls = true;
}
function myFunction1b() {
    document.getElementById("myVideo1b").controls = true;
}
function myFunction2b() {
    document.getElementById("myVideo2b").controls = true;
}
function myFunction3b() {
    document.getElementById("myVideo3b").controls = true;
}
function myFunction4b() {
    document.getElementById("myVideo4b").controls = true;
}
function myFunction5b() {
    document.getElementById("myVideo5b").controls = true;
}
function myFunction6b() {
    document.getElementById("myVideo6b").controls = true;
}
//]]>
</script>
<script type="text/javascript">
 //<![CDATA[
$(function() {
$("#btnright4").click(function() {
$('#slidediv2').toggle('slide', { direction: 'left' }, 700);
});
$("#btnright3").click(function() {
$('#slidediv2').toggle('slide', { direction: 'left' }, 700);
});
$("#filterbtn").click(function() {
$('#slideleftpanel').toggle('slide', { direction: 'left' }, 700);
});
});
//]]> 
</script>
</body>
</html>