
<section id="myaccount_service">
	<div class="myaccountdiv">
		<div class="container-full">
			<div class="container">
            	
				 <div class="myaccount_holder">
                                     <div class="row">
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                     
                    
   						<div class="myaccount_top_text tab-content">
                        	<!--<div class="myaccount_search">
                            	<input type="text" class="form-control newmcsearch" name="" value="" placeholder="Advance Search">
                            </div>-->

                           
                           <div id="menu2" class="allcourses">
                           		<div class="useraccount">
                        			<h5><i class="fa fa-user myicon"></i> Online Schedule List Of stremers</h5>
                            	</div>
 								 
                                 <div class="col-md-12 as_info">
                                    	<div class="gn_info">
                                            
                                        	<div class="col-md-6 gn_title">
                                            	<?php /*?><h5><strong>General Information</strong></h5><?php */?>
                                            </div>
                                            <div class="col-md-6 gn_title">
                                            	
                                                <?php /*?><a href="<?php echo site_base_url(); ?>edit_profile">Edit</a><?php */?>
                                            </div>
                                            <div style="clear:both"></div>
                                        </div><!---end gn_info---->
                                        
                            
                            
                                                    <!---------------------------GI tab 1--------------------------->                            <?php
													//print_r($schedule_stremers);
													//die;
													foreach($schedule_stremers as $row)
													{
													?>
                                                    
                                        <div style="display:block;" id="bill1" class="gn_body hide2">
                                        
                                        	<div class="row gn_row">
                                            <div class="col-md-1 ">
                                            <div class="follow_streamers">
                                                	 <?php if($row['image']!=''){
	 
	 ?>
                                		 <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $row['image']; ?>" >
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png" >
       <?php } ?>
                                                </div>
                                                </div>
                                            	<div class="col-md-7 gi_title">
                                                	<h6><?=$row['name']?></h6>
                                                    <p><strong>Date:<strong>&nbsp<?php echo date("j F, Y",strtotime($row['date'])); ?> </p>
                                                    <p><strong>Time:</strong>&nbsp<?php echo $row['time']; ?></p>
                                                     <p><strong>Subject:</strong>&nbsp<?php echo $row['intro_text']; ?></p>
                                                    <p><strong>Duration :</strong>&nbsp<?php echo $row['duration']." min"; ?></p>
                                                    
                                                </div>
                                               
                                                
                                                <div class="col-md-4 gn_title">
                                                	    <a href="<?php echo site_base_url(); ?>artist_detail/index/<?=urlencode(str_replace(" ","_",$row['name']))._.$row['artist_id']?>">View</a>
                                                </div>
                                                <div style="clear:both"></div>
                                            </div><!---end gn_row---->
                                            
                                           
                                            
                                            <!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                         
                                            
                                            <!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            
                                            <!---end gn_row---->
                                            
                                           
                                            
                                            <!---end gn_row---->
                                            
                                        
                                            
                                            
                                             <!---end gn_row---->
                                            <div style="clear:both"></div>

                                        </div><!----end gn_body---->



<?php
													}
?>
                                        <div style="clear:both"></div>
                                    </div>
                                    
                                    <div class="pagination_area">
										 
							 <div class="pagination_right">
										<? echo $this->pagination->create_links(); ?>
									</div>
								 
									<div class="spacer"></div>
							   
								</div>
                                    
                                <div style="clear:both"></div>
                           </div>

                            <div style="clear:both"></div>
						</div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 video_detaile_rightpanel">
                    	  <div class="addsec">
                         
                              <?php
						            $image_right=$this->module->get_advertisement_videodetail('video_detail_right');
									if(!empty($image_right))
									{
	                            	foreach($image_right as $row3)
	                            	{
	                	
                                     $picture1[] = $row3['advertisement_image'];
									}
					          ?>
                           <a href="<?=$row3['advertisement_link']?>" target="_blank"> <img src="<?=site_base_url()."uploads/advertisement_image/".$picture1[array_rand($picture1)];?>"/></a>
                             <? 
									}
                             //  print_r($picture1);
				              ?>
                        	<!--<img src="<?php echo base_url(); ?>img/googleadd4.png">-->
                        </div>
                          
                          
                           <?php if(!empty($image_right)) { ?>
                        <div class="addsec">
                        	 <a href="<?=$row3['advertisement_link']?>" target="_blank"><img src="<?=site_base_url()."uploads/advertisement_image/".$picture1[array_rand($picture1)];?>"/></a>
                        </div>
                        <?php } ?>
                          
                          
                          
                          
                        <div style="clear:both"></div>
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