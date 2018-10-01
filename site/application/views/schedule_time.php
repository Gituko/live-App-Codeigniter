<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">

<?php
$url='schedule_time';
$meta_details=$this->module->geting_meta_tags($url);
//print_r($meta_details);die;
$meta_tag=stripslashes($meta_details[0]['meta_tag']);
$meta_title=stripslashes($meta_details[0]['meta_title']);
?>


<title><?=$meta_title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$meta_tag ?>">
<meta name="keywords" content="<?=$meta_tag ?>">
<meta name="author" content="<?=$meta_tag ?>">





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

<!-- Include in <head> to load fonts from Google -->
<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:600' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
  
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/script.js"></script>

<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="jquery-validation-demo/bootstrap.css">-->

<script type="text/javascript" src="<?php echo base_url();?>timepicker/src/wickedpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>timepicker/dist/wickedpicker.min.js"></script>

<link href="<?php echo base_url();?>timepicker/dist/wickedpicker.min.css" rel="stylesheet" type="text/css"/>         





 <link type="text/css" href="<?php echo base_url();?>datetimepicker-master/jquery.simple-dtpicker.css" rel="stylesheet" />
 <script src="<?php echo base_url();?>datetimepicker-master/jquery.simple-dtpicker.js"></script>




<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/validation-jquery.css">
<script type="text/javascript">
 
 
    (function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
              $("#signup_name").validate({
                rules: {
					name: {
                        required: true,
						
                    },
					birth_date: {
                        required: true,
						
                    },
					sex: {
                        required: true,
						
                    },
					
					
				
                 	interested_in: {
                        required: true,
						
                    },
					
					location: {
                        required: true,
						
                    },
					
					
					last_broadcast: {
                        required: true,
						
                    },
					
					
					language_known: {
                        required: true,
						
                    },
					body_type: {
                        required: true,
						
                    },
					
					about_me: {
                        required: true,
						
                    },
					
					orientation: {
                        required: true,
						
                    },
					
					haircolor: {
                        required: true,
						
                    },
					
					eyecolor: {
                        required: true,
						
                    },
					
					ethnicity: {
                        required: true,
						
                    },
					
					
					
					},
                messages: {
					
					
					name: {
                        required: "Please Enter your  Name"
                    },
					birth_date: {
                        required: "Please Enter your  birth date"
                    },
						sex: {
                        required: "Please Enter your  sex"
                    },
					
						interested_in: {
                        required: "Please Enter your  interestin"
                    },
					
						location: {
                        required: "Please Enter your  location"
                    },
					
						last_broadcast: {
                        required: "Please Enter your  last broadcast"
                    },
					
						language_known: {
                        required: "Please Enter your  known  language"
                    },
					
					body_type: {
                        required: "Please Enter your  known  body type"
                    },
					
						about_me: {
                        required: "Please Enter your  about details"
                    },
					
						orientation: {
                        required: "Please Enter your  Orientation"
                    },
					
						haircolor: {
                        required: "Please Enter your  Haircolor"
                    },
					
						eyecolor: {
                        required: "Please select your  Eyecolor"
                    },
					
						ethnicity: {
                        required: "Please Enter your  ethnicity"
                    },
					
					
					
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>    
    
      
       
     
    
</head>
<body>
	<?php $this->load->view("header"); ?><!-- /#Header-->

<section id="myaccount_service">
	<div class="myaccountdiv">
		<div class="container-full">
			<div class="container">
            	
				 <div class="myaccount_holder">
                 	<div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	<?php $this->load->view("left_pannel"); ?>
                        <div style="clear:both"></div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                    
   						<div class="myaccount_top_text tab-content">
                        	<!--<div class="myaccount_search">
                            	<input type="text" class="form-control newmcsearch" name="" value="" placeholder="Advance Search">
                            </div>-->
                           
                           <div id="menu3" class="allcourses">
                           		<div class="useraccount">
                        			<h5><i class="fa fa-list-alt myicon"></i> Schedule Time</h5>
                                  
                            	</div>
 								 
                                 <div class="col-md-12 as_info">
                                    	<div class="gn_info">
                                        	<div class="col-md-6 gn_title">
                                            	<h5><strong>General Information</strong></h5>
                                            </div>
                                            <div class="col-md-6 gn_title">
                                            	<a onClick="return add_row()" >Add </a>
                                            </div>

                                            
                                            <div style="clear:both"></div>
                                        </div><!---end gn_info---->
 
                      <!---------------------------GI tab 2--------------------------->                       
                                      
                                      
                                      
                                      <?php
									  
									 $artist_id=$this->session->userdata('artist_id');
									 $details=$this->module->get_schedule_details($artist_id);
									 $i=1;
									 foreach($details as $row)
									 {
									  ?>
                                      
                                      
                                       <div id="sch_<?=$i?>">
                                      <div class="gn_row" id="shc_<?=$i?>">
                                      
                                      	<div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div">
                                        <div id="date<?=$i?>">
                                        <?=$row['date'];?>
                                        </div>
                                        <div id="edit_date<?=$i?>" style="display:none">
                                        	<input type="text" class="form-control edit_gi_box datepicker" name="date_<?=$i?>" id="date_<?=$i?>" value="<?=$row['date'];?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div">
                                         <div id="time<?=$i?>">
                                        <?=$row['time'];?>
                                         </div>
                                            <div id="edit_time<?=$i?>" style="display:none">
                                        	<input type="text" class="form-control edit_gi_box datetimepicker"  name="time_<?=$i?>"  id="time_<?=$i?>"value="<?=$row['time'];?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 new_div">
                                         <div id="duration<?=$i?>">
                                        <?=$row['duration'];?>
                                        </div>
                                            <div id="edit_duration<?=$i?>" style="display:none">
                                        	<input type="number" class="form-control edit_gi_box" name="duration_<?=$i?>"  id="duration_<?=$i?>"  value="<?=$row['duration'];?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 new_div">
                                        <div id="intro_text<?=$i?>">
                                        <?=$row['intro_text'];?>
                                        </div>
                                            <div id="edit_intro_text<?=$i?>" style="display:none">
                                        	<input type="text" class="form-control edit_gi_box" name="intro_text_<?=$i?>" id="intro_text_<?=$i?>"  value="<?=$row['intro_text'];?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div" id="button<?=$i?>">
                                        	
                                        	<button class="btn btn-success" onClick="edit_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Edit</button>
                                            <button class="btn btn-danger" onClick="delete_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Delete</button>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div" id="edit_buttion_<?=$i?>" style="display:none">
                                        	
                                        	
                                            <button class="btn btn-success" onClick="save_button('<?=$i?>','<?=$row['schedule_id']?>')">Save</button>
                                            <button class="btn btn-danger" onClick="delete_schedule('<?=$i?>','<?=$row['schedule_id']?>')">Delete</button>
                                        </div>
                                        <div style="clear:both"></div>
                                      </div>
                                      </div>
                                      
                                      <?
									  $i++;
									 }
									 
									 ?>
                                      
                                      
                                      <div id="result"></div>
                                      
                                      <div id="add_schedule_div"></div>
                                      
                                      
                                      <div style="clear:both"></div>
                                            <!--<div class="save_btn">
                                          
                                                <input type="submit" class="save_btn" value="Save Changes">
                                            </div>-->

                                      
                                      <!-- </form>-->
                                      
                                      
                                        <!----end gn_body---->
<input type="hidden" id="sch" value="<?=$i?>" />
                                        <div style="clear:both"></div>
                                    </div>
                                <div style="clear:both"></div>
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
<style>
.interest{
	margin:5px !important;
	
	
	}
</style>
<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<?php $this->load->view("footer");?><!-- /.footer -->


	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    <!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->
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






<script>

function add_schedule(id)
{
	
var date= document.getElementById('date_'+id).value;

var time= document.getElementById('time_'+id).value;
var duration= document.getElementById('duration_'+id).value;
var intro_text= document.getElementById('intro_text_'+id).value;
		
		$.ajax({
			   url:"<?=site_base_url()?>add_scheduled_time?id="+id+"&date="+date+"&time="+time+"&duration="+duration+"&intro_text="+intro_text,
									  success:function(result){
										
										  document.getElementById('sch_'+id).remove();
										  
										  $('#result').append(result);
					
			
				
			
				
				}});
	
	
}



</script>



<script>
function delete_schedule(id,schedule)
{


$.ajax({url:"<?=site_base_url()?>delete_scheduled_artist?schedule="+schedule,
									  success:function(result){
				
			
				
				$("#shc_"+id).hide();
				
				//return false;
				
				}});
		
		
}

</script>



<script>

function save_button(id,schedule_id)
{
	
var date= document.getElementById('date_'+id).value;
var time= document.getElementById('time_'+id).value;
var duration= document.getElementById('duration_'+id).value;
var intro_text= document.getElementById('intro_text_'+id).value;
		
	$.ajax({
			   url:"<?=site_base_url()?>edit_scheduled_time?schedule_id="+schedule_id+"&date="+date+"&time="+time+"&duration="+duration+"&intro_text="+intro_text+"&id="+id,
									  success:function(result){
										  
										    //alert(result);
										  document.getElementById('shc_'+id).remove();
										
										//  document.getElementById('sch_'+id).remove();
										 document.getElementById('sch_'+id).innerHTML=result;
					
			
				
			
				
				}});
	
	
	
	
	
	
	
	
	
}



</script>








<script>

function edit_schedule(id,schedule)
{
	$("#date"+id).hide();
	$("#edit_date"+id).show();
	
	$("#time"+id).hide();
	$("#edit_time"+id).show();
	
	$("#duration"+id).hide();
	$("#edit_duration"+id).show();
	
	$("#intro_text"+id).hide();
	$("#edit_intro_text"+id).show();
	$("#button"+id).hide();
	$("#edit_buttion_"+id).show();
	
	
	
}






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
<style>
.save_btn  {
    display: block;
    float: left;
    text-align: center;
    color: #fff;
    font-weight: 400;
    font-size: 16px;
    border-radius: 3px;
    border: none;
    background: #0095e5;
    padding: 2px 11px 6px;
	margin-top: 5px;
}
</style>




<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"50%", height:"100%"});
				
			});
		</script>  



<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  
  $(function() {
  $( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
}); 
  
 
  </script>
  <link rel="stylesheet" 
      href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script 
      src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js">
</script>

<script>


  $(function() {
    $('.datetimepicker').timepicker({});
  });
</script>

 <script>
	function add_row()
	{
	   

			var sch= document.getElementById('sch').value;
	 
	   $("#add_schedule_div").append('<div class="gn_row" id="sch_'+sch+'"><div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div"><input type="text" class="form-control edit_gi_box datepicker" name="date"  id="date_'+sch+'" placeholder="Select Date"></div><div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div"><input type="text" class="form-control edit_gi_box datetimepicker" name="time" id="time_'+sch+'" placeholder="Select Time"></div><div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 new_div"><input type="number" class="form-control edit_gi_box" name="duration" id="duration_'+sch+'" placeholder="Enter Duration"></div><div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 new_div"><input type="text" class="form-control edit_gi_box" name="intro_text" id="intro_text_'+sch+'" placeholder="Enter Text"></div><div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 new_div"><button class="btn btn-success" onclick="return add_schedule('+sch+')">Save</button><button class="btn btn-danger">Delete</button></div><div style="clear:both"></div></div>');

sch=+sch + (+1);
$( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
  $('.datetimepicker').timepicker({});
document.getElementById('sch').value=sch;
	 // document.getElementById("myList").appendChild(node);
   
	   
	   
	
}
	
	</script>
    



</body>
</html>