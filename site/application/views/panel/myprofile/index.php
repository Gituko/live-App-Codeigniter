
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

                           
                           <div id="menu2" class="allcourses">
                           		<div class="useraccount">
                        			<h5><i class="fa fa-user myicon"></i> My Profile</h5>
                            	</div>
 								 
                                 <div class="col-md-12 as_info">
                                    	<div class="gn_info">
                                        	<div class="col-md-6 gn_title">
                                            	<h5><strong>General Information</strong></h5>
                                            </div>
                                            <div class="col-md-6 gn_title">                                            	
                                                <a href="<?php echo site_base_url(); ?>panel/edit_profile">Edit</a>
                                            </div>
                                            <div style="clear:both"></div>
                                        </div><!---end gn_info---->
                                        
                                                    <!---------------------------GI tab 1--------------------------->                            
                                        <div style="display:block;" id="bill1" class="gn_body hide2">
                                        
                                        	<div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Name :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['name']; ?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                           
                                            
                                            <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Birthday :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['birth_date']; ?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            
                                            <?  $type = $this->session->userdata('type');
												if($type!="User"){ ?>
                                            
                                            
                                            <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Gender :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                              
												<h6><?php echo $detail[0]['sex']; ?></h6>
												
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            <?php
												}
												?>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                           
                                            
                                            
                                            
                                            
                                            <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Mailing Address :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['location']; ?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                         
                                            
                                            <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>State :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['state']; ?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>ZIP Code :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['zipcode']; ?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                            <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Mobile number :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['mobileno']; ?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                           
                                            
                                            <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Email :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                              <?  $type = $this->session->userdata('type');
												if($type=="User"){ ?>
												<h6><?php echo $detail[0]['user_email']; ?></h6>
												<? }else{ ?>
												<h6><?php echo $detail[0]['email']; ?></h6>
                                                    <? } ?>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                              <?  
											  $type = $this->session->userdata('type');
												if($type!="User"){ ?>
                                            
                                            
                                            <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>About Me:</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['about_me'];?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            
                                            
                                            <!--<div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Tags:</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['artist_tag'];?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>-->
                                            
                                            
                                            
                                             <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>PayPal Id:</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $detail[0]['paypal_id'];?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <?php /*?><div class="gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Category:</h6>
                                                    <?php
													$category=$detail[0]['category_type'];
													$category_name=$this->module->get_category_name($category);
													?>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6><?php echo $category_name[0]['category_name'];?></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><?php */?>
                                            
                                            <?php
												}
											?>
                                            
                                            
                                            
                                            
                                             <div class="row gn_row">
                                            	<div class="col-md-4 gi_title">
                                                	<h6>Password :</h6>
                                                </div>
                                                <div class="col-md-8 gi_title_right">
                                                	<h6>********** <span class="cp"><a href="<?php echo site_base_url();?>panel/password_change">Change Password</a></span></span></h6>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            <div style="clear:both"></div>

                                        </div><!----end gn_body---->

                                        <div style="clear:both"></div>
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





<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"50%", height:"100%"});
				
			});
		</script>  
</body>
</html>