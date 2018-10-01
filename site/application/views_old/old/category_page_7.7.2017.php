<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Myaccount</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="demo content">
<meta name="keywords" content="demo">
<meta name="author" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo0.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bg_slider.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>css/stylesheet-pure-css.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui-1.11.0.css">


<link href="<?php echo base_url(); ?>css/jquery.vscroller.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/scroll_style.css" rel="stylesheet" type="text/css" />
<!-- Include in <head> to load fonts from Google -->
<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:600' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript">
$(document).ready(function() {
						   
	$("#results" ).load( "<?=site_base_url()?>filter_list"); 
	
	$("#results").on( "click", ".pagination a", function (e){
														  
		e.preventDefault();
		$(".loading-div").show(); //show loading element
		var page = $(this).attr("data-page"); //get page number from link
		$("#results").load("filter_list",{"page":page}, function(){
																				
			$(".loading-div").hide(); //once done, hide loading element
		});
		
	});
});
</script>   
</head>
<body>
	<?php $this->load->view("header"); ?><!-- /#Header-->

<section id="myaccount_service">
	<div class="myaccountdiv">
		<div class="container-full">
			<div class="container">
            <?	$segement=$this->uri->segment(2);
				$cat_id = explode('_',$segement);
				$category_id= $cat_id[(count($cat_id)-1)]; ?>
				 <div class="myaccount_holder">
                 
                 	<div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	<a id="filterbtn_arrow" href="#" class="filter panel_arrow"><i class="fa fa-arrow-left"></i></a>
                    	<div class="panel_holder2">
                        	<div class="left_panel_pl">
                        	<h4>Filter Category</h4>
                        	
                         <div class="left_panel_holder">
							<div class="vscroller vscroller2">
                        	 <div class="vscroller-content">  
                             
                             <div class="filter_box">
                         	
							<div style="display:block; padding-top:0;" id="panel22" class="Panel-content">

                                <div style="border-top:none;" class="pb">
                                	
                                    <div class="example">
                                     
                                      <div>
                                        <input type="radio" name="online_status" id="online_status" onClick="filter_list(<?=$category_id?>)" value='Online' ><span class="dd">Online</span>
                                      
                                        <input type="radio" name="online_status" id="online_status" onClick="filter_list(<?=$category_id?>)" value='all' checked ><span class="dd">All</span>
                                      </div>
                                      
                                       
                                     <style>
									 .dd{
										 font-size: 16px;
										line-height: 1.2em;
										margin-right: 15px;
										margin-left: 5px;
									 }
									 </style>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                             
                            <div class="filter_box">
                         	<div id="flip22" class="Panel-heading"><i class="icon-angle-up"></i>Age</div>
							<div style="display:block; padding-top:0;" id="panel22" class="Panel-content">

                                <div style="border-top:none;" class="pb">
                                	
                                    <div class="example">
                                     
                                      <div>
                                        <input type="checkbox" name="age[]" onClick="filter_list(<?=$category_id?>)" value='16-20' ><label><span></span>16 to 20</label>
                                      </div>
                                      <div>
                                        <input type="checkbox" name="age[]" onClick="filter_list(<?=$category_id?>)" value='20-30' ><label><span></span>20 to 30</label>
                                      </div>
                                       <div>
                                        <input type="checkbox" name="age[]" onClick="filter_list(<?=$category_id?>)" value='30-40' ><label><span></span>30 to 40</label>
                                      </div>
                                      <div>
                                        <input type="checkbox" name="age[]" onClick="filter_list(<?=$category_id?>)" value='40-50' ><label><span></span>40 to 50</label>
                                      </div>
                                       <div>
                                        <input type="checkbox" name="age[]" onClick="filter_list(<?=$category_id?>)" value='50-60' ><label><span></span>50 to 60</label>
                                      </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            <input type="hidden" id="cat_id" value="<?=$category_id?>" />
                            <div class="filter_box">
                         	<div id="flip00" class="Panel-heading"><i class="icon-angle-up"></i>Interested in</div>
							<div style="display:block; padding-top:0;" id="panel00" class="Panel-content">

                                <div style="border-top:none;" class="pb">
                                	
                                    <div class="example">
                                     <?php 
												 
				             	$interest = $this->module->get_interestin();
				                  $ex_interest = $interest[0]['setting_value'];
				                 $int_ex = explode(",",$ex_interest);
								 //print_r($int_ex);die;
								 
								 
								 for($i=0;$i<count($int_ex);$i++){				                      
								 ?>
                                      
                                      <div>
                                        <input type="checkbox" onClick="filter_list(<?=$category_id?>)" value="<?=$int_ex[$i]?>" name="intertest_in[]"><label><span></span><?php echo $int_ex[$i]?></label>
                                      </div>
                                      <? } ?>
                                    
                                      
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            
                            <div class="filter_box">
                         	<div id="flip44" class="Panel-heading"><i class="icon-angle-up"></i>Body Type</div>
							<div style="display:block; padding-top:0;" id="panel44" class="Panel-content">

                                <div style="border-top:none;" class="pb">
                                	
                                    <div class="example">
                                      
                                      <?php 
												 
				             	$bodytype = $this->module->get_body();
				                  $ex_body = $bodytype[0]['setting_value'];
				                 $body_ex = explode(",",$ex_body);
								  
								 
								 for($i=0;$i<count($body_ex);$i++){				                      
								 ?>              	  
                                      <div>
                                        <input type="checkbox" name="body[]" onClick="filter_list(<?=$category_id?>)" value="<?=$body_ex[$i]?>" ><label><span></span><?php echo $body_ex[$i]?></label>
                                      </div>
                                      <? } ?>
                                      
                                       
                                      
                                      
                                     
                                    
                                     
                                     
                                   
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            
                             <div class="filter_box">
                         	<div id="flip55" class="Panel-heading"><i class="icon-angle-up"></i>Orientation</div>
							<div style="display:block; padding-top:0;" id="panel55" class="Panel-content">

                                <div style="border-top:none;" class="pb">
                                	
                                    <div class="example">
                                      <div style="clear:both"></div>
                                      <?php 
												 
				             	$orientation = $this->module->get_orientation();
				                  $ex_orientation = $orientation[0]['setting_value'];
				                 $ori_ex = explode(",",$ex_orientation);
								for($i=0;$i<count($ori_ex);$i++){	
								 ?>
                                      <div>
                                        <input type="checkbox" name="orientation[]" onClick="filter_list(<?=$category_id?>)" value="<?=$ori_ex[$i]?>" ><label><span></span><?php echo $ori_ex[$i]?></label>
                                      </div>
                                    <? } ?>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            
                            <div class="filter_box">
                         	<div id="flip66" class="Panel-heading"><i class="icon-angle-up"></i>Hair Colour</div>
							<div style="display:block; padding-top:0;" id="panel66" class="Panel-content">

                                <div style="border-top:none;" class="pb">
                                	
                                    <div class="example">
                                      <div style="clear:both"></div>
                                       <?php 
												 
				             	$hair = $this->module->get_hair();
				                  $ex_hair = $hair[0]['setting_value'];
				                 $hair_ex = explode(",",$ex_hair);
								  for($i=0;$i<count($hair_ex);$i++){
								 
								 ?>
                                      <div>
                                        <input type="checkbox" name="hair_color[]"  onClick="filter_list(<?=$category_id?>)" value="<?=$hair_ex[$i]?>"><label><span></span><?php echo $hair_ex[$i]?></label>
                                      </div>
                                   <? } ?>
                                      
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            
                            <div class="filter_box">
                         	<div id="flip77" class="Panel-heading"><i class="icon-angle-up"></i>Ethnicity</div>
							<div style="display:block; padding-top:0;" id="panel77" class="Panel-content">

                                <div style="border-top:none;" class="pb">
                                	
                                    <div class="example">
                                      <?php 
												 
				             	$ethnicity = $this->module->get_ethnicity();
				                  $ex_ethnicity = $ethnicity[0]['setting_value'];
				                 $ethnicity_ex = explode(",",$ex_ethnicity);
								 for($i=0;$i<count($ethnicity_ex);$i++){	
								 ?>
                                      
                                      <div>
                                        <input type="checkbox" name="ethnicity[]" onClick="filter_list(<?=$category_id?>)" value="<?=$ethnicity_ex[$i]?>"><label><span></span><?php echo $ethnicity_ex[$i]?></label>
                                      </div>
                                      <? } ?>
                                    </div>
                                </div>
                            </div>
                           
                            </div>
                            
                            <div class="filter_box">
                         	<div id="flip88" class="Panel-heading"><i class="icon-angle-up"></i>Eye Colour</div>
							<div style="display:block; padding-top:0;" id="panel88" class="Panel-content">

                                <div style="border-top:none;" class="pb">
                                	
                                    <div class="example">
                                      <div style="clear:both"></div>
                                      <?php	$eyecolor = $this->module->get_eye();
				                  $ex_eyecolor = $eyecolor[0]['setting_value'];
				                 $eyecolor_ex = explode(",",$ex_eyecolor);
								 for($i=0;$i<count($eyecolor_ex);$i++){
								 
								 ?>
                                      <div>
                                        <input type="checkbox" name="eye_color[]" onClick="filter_list(<?=$category_id?>)" value="<?=$eyecolor_ex[$i]?>" ><label><span></span><?php echo $eyecolor_ex[$i]?></label>
                                      </div>
                                    <? } ?>
                                      
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            </div>
                            
                            </div>
                            </div>
                            
                         </div>
                         
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                    
   						<div class="myaccount_top_text tab-content withfilter">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title_holder">
                	<div class="f_title">
                    	<h2>Travel</h2>
                    </div>
                    <div class="viewallvdo">
                    	
                    </div>
                </div>
                
     <div id="result_list"> 
     
     				<?php  foreach($category_detail as $row){ ?>
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                        <?php if($row['image']!=''){ ?>
                            <a href="<?=site_base_url();?>artist_detail/<?=urlencode(str_replace(" ","_",$row['name']))._.$row['artist_id']?>"><img src="<?php echo site_base_url(); ?>uploads/user_image/<?php echo $row['image']; ?>" alt=""></a>
                            <?php }else{ ?>
                                <a href="<?=site_base_url();?>artist_detail/<?=urlencode(str_replace(" ","_",$row['name']))._.$row['artist_id']?>"><img src="<?php echo base_url(); ?>img/myimage1.png" alt=""></a>
                            <?php } ?>
                            
                        </div>
                        <div class="f_video_bottom">
                        <h5><?php echo $row['name']; ?></h5>
                            <p><?php echo $row['total']; ?> viewer  <? if($row['online_status']=='Online'){?><i class="fa fa-circle online_status" ></i><? }else{?>
                            <i class="fa fa-circle offline_status" ></i><? } ?>
                            
                            </p>
                        </div>
                       
                        
                	</div>
                </div>
                     <? }
					 ?>
                     
                     
     
    
     
     <? 
							  $page = $this->pagination->create_links();
							  if(!empty($page)){
								  ?>
								
							  <div class="pagination_area">
										 
							 <div class="pagination_right">
										<? echo $this->pagination->create_links(); ?>
									</div>
								 
									<div class="spacer"></div>
							   
								</div>
								
								<? } ?> <!-- /.servicediv -->
                                
                               
                 </div>
                            <div style="clear:both"></div>
                            
						</div>
                          
                    </div>
                    
                    <div style="clear:both"></div>
                    
                 </div>
                 
			</div><!-- /.container -->
            
		</div><!-- /.container-full -->
	</div> <!-- /.servicediv -->
</section><!-- /#Service -->
 <? if(isset($_GET['search'])){?>
		<input type="hidden" name="search" id="search" value="<?=$_GET['search']?>">
		<? } ?>
<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<script>
function pagination(page){
	var id = document.getElementById('cat_id').value;
	 
	 filter_list(id,page);
	 
	 }

function filter_list(id,page){
	
	
	
			if (document.getElementById('online_status').checked){
				var online_status = document.getElementById('online_status').value;
			}
			if (document.getElementById('online_status').checked) {
			  var online_status = document.getElementById('online_status').value;
			}
		
	
	var intertest="";
		
		var elemArray = document.getElementsByName("intertest_in[]");
		//alert(elemArray);
		for(var i = 0; i < elemArray.length; i++){
			if(elemArray[i].checked==true)
			{
			var intertest_in=elemArray[i].value;
			intertest+=intertest_in+",";
			}
		}
		
		var body="";
		
		var elemArray = document.getElementsByName("body[]");
		//alert(elemArray);
		for(var i = 0; i < elemArray.length; i++){
			if(elemArray[i].checked==true)
			{
			var body_type=elemArray[i].value;
			body+=body_type+",";
			}
		}
		
		var orientation="";
		
		var elemArray = document.getElementsByName("orientation[]");
		//alert(elemArray);
		for(var i = 0; i < elemArray.length; i++){
			if(elemArray[i].checked==true)
			{
			var orientation_type=elemArray[i].value;
			orientation+=orientation_type+",";
			}
		}
		
		var hair_color="";
		
		var elemArray = document.getElementsByName("hair_color[]");
		//alert(elemArray);
		for(var i = 0; i < elemArray.length; i++){
			if(elemArray[i].checked==true)
			{
			var hair=elemArray[i].value;
			hair_color+=hair+",";
			}
		}
		var ethnicity="";
		
		var elemArray = document.getElementsByName("ethnicity[]");
		//alert(elemArray);
		for(var i = 0; i < elemArray.length; i++){
			if(elemArray[i].checked==true)
			{
			var ethnicity_type=elemArray[i].value;
			ethnicity+=ethnicity_type+",";
			}
		}
	var eye_color="";
		
		var elemArray = document.getElementsByName("eye_color[]");
		//alert(elemArray);
		for(var i = 0; i < elemArray.length; i++){
			if(elemArray[i].checked==true)
			{
			var eye=elemArray[i].value;
			eye_color+=eye+",";
			}
		}
		
			var age="";
		
		var elemArray = document.getElementsByName("age[]");
		for(var m = 0; m < elemArray.length; m++){
			if(elemArray[m].checked==true)
			{
			var age_value=elemArray[m].value;
			age+=age_value+",";
			}
		}
		
		var search_name= document.getElementById('search').value;
		alert(search_name);
		
		if(typeof page=='undefined'){
		page = 1;	
		}
		
		$.ajax({
			   
			   url:"<?=site_base_url()?>filtering_page?intertest="+intertest+"&body="+body+"&orientation="+orientation+"&hair_color="+hair_color+"&ethnicity="+ethnicity+"&eye_color="+eye_color+"&cat_id="+id+"&page="+page+"&age="+age+"&online_status="+online_status+"&search_name="+search_name,
									  success:function(result){
					document.getElementById("result_list").innerHTML=result;
				
			
				
				
				}});
	
	}
</script>


<?php $this->load->view("footer"); ?> <!-- /.footer -->


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
<script type="text/javascript">
 //<![CDATA[
$(function() {
$("#btnright4").click(function() {
$('#slidediv2').toggle('slide', { direction: 'left' }, 700);
});
$("#btnright3").click(function() {
$('#slidediv2').toggle('slide', { direction: 'left' }, 700);
});
$("#filterbtn_arrow").click(function() {
$('#slideleftpanel').toggle('slide', { direction: 'left' }, 700);
});
});
//]]> 
</script>



<script type="text/javascript"> 
 //<![CDATA[
 $(function(){
		   
	$(".Panel-heading").click(function(){

$("i",this).toggleClass('icon-angle-up icon-angle-down');
$(this).siblings('.Panel-content').slideToggle("slow");

})

		   });
//]]>
 
</script>
<script type="text/javascript">
 //<![CDATA[
 $(function(){
		   
	$(".Panel-heading2").click(function(){

$("i",this).toggleClass('icon-angle-up2 icon-angle-down2');
$(this).siblings('.Panel-content2').slideToggle("slow");

})

		   });
//]]>
</script> 


<!-- Required -->
    <script src="<?php echo base_url(); ?>js/jquery.event.drag.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/jquery.vscroller.js" type="text/javascript"></script>
    <!-- Optional -->
    <script src="<?php echo base_url(); ?>js/jquery.easing.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	//<![CDATA[
            $('.vscroller').vscroller({
                easing: "easeOutExpo"
            });
	//]]> 
     </script>
     <style>
	.online_status{
		float:right;
		margin-right:2px;
		color:green;
		
		} 
	.offline_status{
		float:right;
		margin-right:2px;
		color:red;
		}
	 .pagination_area {
    padding: 12px 10px;
}
	 .pagination_right ul {
    text-align: right;
    margin-bottom: 0;
    padding-left: 0;
}
.pagination_right ul li.active {
    background: #dedede;
}

.pagination_right ul li {
    list-style: none;
    display: inline-block;
}

.pagination {
	float:right;
	
}
	 </style>
     
       
</body>
</html>