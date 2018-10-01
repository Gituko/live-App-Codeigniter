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

<!-- Include in <head> to load fonts from Google -->
<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:600' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
	<?php $this->load->view("header.php"); ?><!-- /#Header-->

<section id="myaccount_service">
	<div class="myaccountdiv">
		<div class="container-full">
			<div class="container">
            	
				 <div class="myaccount_holder">
                 	<div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	<?php $this->load->view("left_pannel.php"); ?>
                        <div style="clear:both"></div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                    
   						<div class="myaccount_top_text tab-content">
                        	<div class="myaccount_search">
                            	<form  name="search_frm" id="search_frm" enctype="multipart/form-data" method="get" action="<?=site_base_url();?>photos">
                            	<input type="text" class="form-control newmcsearch" name="search_photo" value="" placeholder="Search Your Photos">
                                </form>
                            </div>
                
                           <div id="menu10" class="allcourses">
                           		<div class="useraccount">
									<h5><i class="fa fa-picture-o myicon"></i>Photos</h5>
								</div>
                                
                                <div class="col_choose">
                 
            <form action="" method="post" enctype="multipart/form-data" id="myForm">
                
  		<div class="choose_file">	
 		 <input class="browsfile" type="file" onChange="uploadImage()" name="image_handicapper" id="image_handicapper" >
       
         <div style="clear:both"></div> 
         </div>
         </form>
         <div class="delete_sec">
         	
         
            <div style="clear:both"></div>
         </div>
         
       
         
 	</div>
    
                        <?php


$i =1;

if($image!='')
{
	
 
//echo $handicapper_image;	 ?>

 <div class="choose_images">
 	<div id="files" >
               
               <?php foreach($image as $row){ 
			   $des=substr($row['image_name'],0,15);
							$length = strlen($row['image_name']);
							
							if($length>15){
								$moss="..";
								
								}else{
									$moss=" ";
									}
			   
			   ?>
               <div id="show_thum_<?=$i?>" class="success">
               
               <img src="<?=site_base_url()?>uploads/user_photo/thumb/<?php echo $row['image']; ?>" alt="" height="100" width="150" id="alu_img_<?=$i?>">
               <div class="userimagename" id="name_<?=$i?>">
               <div class="user_names"><p id="igname_<?=$i?>"><?=$des.$moss?></p></div>
               <div class="edit"><a title="Edit Name" class="edita" onClick="imagenamechange(<?=$i?>)" ><i class="fa fa-pencil-square"></i></a></div>
               </div>
               <div class="userimagename2" id="edit_<?=$i?>" style="display:none">
               <input type="text" class="editimagename" name="image_name" id="image_name_<?=$i?>" value="<?=$row['image_name']?>" placeholder="Re-enter Image name">
               <button class="tick" onClick="imagenamesave(<?=$row['image_id']?>,<?=$i?>)"><i class="fa fa-check-square"></i></button>
               </div>
               <div class="edit_delet_btns">
                 <form class="newsize" action="" method="post" enctype="multipart/form-data" id="mypic_<?=$i?>">
      			 <a title="Edit Image" onClick="document.getElementById('image_file_<?=$i?>').click(); return false;" class="edit_images" ><i class="fa fa-pencil"></i></a>
    								
        							<input type="file" name="image_file_<?=$i?>" onChange="edit_pi(<?=$row['image_id']?>,<?=$i?>)" id="image_file_<?=$i?>" accept="image" style="visibility: hidden;"/ > 
                                    	<input type="hidden" name="image_name_<?=$i?>" id="image_name_<?=$i?>" value="<?=$row['image']?>" /> 
 									 </form>
              
               	<a title="Delete Image" onClick="delete_image(<?=$row['image_id']?>,<?=$i?>)" id="<?=$row['image_id']?>" class="delete_item_image" ><i class="fa fa-times"></i></a>
               </div>

               </div>
               <? 
			   $i = $i+1;
			   } ?>
               
               </div>
 </div>


 
 <?php

}
?>
                                 
 </div>		                                 
               
       <?php 
	   
	  
	
	 
	   
	   ?>
                              
 	<div style="clear:both"></div>
    
    
    
    <div class="ajax_loader" id="ajax_loader" style="display:none;">
    <img src="<?=base_url()?>img/loading.gif" />
    </div>
    
<!--    <script>
	$(document).ready(function(){
							   
		$(document).ajaxStart(function(){
						   
							$(".ajax_loader").show();		   
								   });
	$(document).ajaxSuccess(function(){
							$(".ajax_loader").hide();		
									});					   
							   
							   
							   
							   
							   });
	
	</script>-->
 
   
              <style>
			  
			  </style>
              
              <script>
				
			

                
                </script>
                
                      
    </form> 
    
      <div class="control-group botom_lightbox" id="show" style="display:none;">
            <label for="inputError" class="control-label lightbox_title">Copy This Link</label>
            <div class="controls">
              <input class="lightbox_link" type="text"  name="copy_url" id="copy_url" value="1" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div> 
          
            <input type="hidden" id="item_no" value="<?=$i?>" />     

   <!--<button class="btn green-haze btn-circle">Upload</button>-->
<style>
.newsize{
	float:left;
	width:40%;
}
.choose_images{
	display:inline-block;
    height: 506px;
    overflow-y: scroll;
	  width: 100%;
}
.col_choose {
    padding: 10px 15px;
    background: #0095e5;
	height:10%;
	margin-bottom:10px;
}
.newlightbox {
    height: 316px;
    overflow-y: scroll;
	overflow-x: hidden;
    display: inline-block;
    width: 100%;
}
</style>
<style>
.tick{
	border: none;
    border-radius: 0;
    background: #fff;
    color: #0C0;
    text-align: center;
    font-size: 29px;
    float: right;
    padding: 0;
    line-height: 1em;
    margin-right: 3px;
    vertical-align: middle;
}
.tick:hover{
	color:#999;

}
.userimagename2{
	display:inline-block;
	width:100%;
	border:1px solid #dedede;
	margin-bottom:3px;
}

.editimagename{
	border:none;
	padding:5px 5px 5px 5px;
	height:30px;
	width:79%;
	background:#fff;
	color:#333;

}
.userimagename{
	display:inline-block;
	width:100%;
}
.edit a{
	text-align:right;
	padding:5px;
	color:#06F;
	font-size:14px;
}
.edit{
	float:right;
}
.user_names{
	float:left;
	width:auto;
}
	.edit_delet_btns{
		position:absolute;
		top:0;
		left:0;
		right:0;
		width:100%;
	}
.success {
		/*width:18%;
		height:30%;*/
		width:200px;
		height:100%;
		float:left;
		margin-right:15px;
		position:relative;
}
.success img{
	width:100%;
}
a.delete_item_image{
	font-size:17px;
	text-align:left;
	padding:0 5px;
	color:#F00000;
	float:right;
	cursor:pointer;
}
a.delete_item_image:hover{
	color:#fff;
}
a.edit_images{
	font-size:13px;
	text-align:left;
	padding:3px 5px;
	color:#fff;
	float:left;
	background:#0362ab;
	cursor:pointer;
}
.edita{
	cursor:pointer;
	}
	</style>
   <script>
				
				function check() {
					
                      
							   if($( "input:checked" ).length>0)
							   { 
							   if(confirm("Do you really want to these Images?")) 

						  		{
							   $( "input:checked" ).each(function(){
																 // alert($(this).val());
																  
																  $.ajax({                              
																type: 'POST',
																url: "<?php echo base_url('admin');?>/pagecontent/chose_file1?image_id="+$(this).val(),
																success:function(response){
																	//alert(response);
																		  }
																		 });
																  });  
							   alert('Selected Images has been successfully deleted');
							  
							   location.reload();
							   }
							  else
							  {
								  
								 location.reload();
								  
								  }
							   }
							   else
							   {
								   alert("You did not select any Image");
								    location.reload();
							   }
							   
					   
                          }

                
                </script>	
                
 <script type="text/javascript" >



function uploadImage() {
	
	var i = document.getElementById('item_no').value;

    if (typeof FormData !== 'undefined') {
		

        // send the formData
        var formData = new FormData( $("#myForm")[0] );
		
		
		   
								 

        $.ajax({
            url : '<?php echo site_base_url(); ?>add_photo?i='+i,  // Controller URL
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
				
            success : function(data) {
				
				if(data=="empty"){
					alert("Not Upload Empty Image");
				}else{
				
				
			
			$('<div id="show_thum_'+i+'"></div>').appendTo('#files').html(data).addClass('success');
				
				i=+i+1;
				document.getElementById('item_no').value=i;
				
				
				}
			 // location.reload();
            }
        });

    }  
}

	function delete_image(id,i){
		
		
		var r = confirm("Are You Sure To Delete!");

		if(r==true){
			
		$.ajax({url:"<?=site_base_url()?>delete_imagefile?id="+id,
									  success:function(result){
					//alert(result);
			
				
				$("#show_thum_"+i).hide();
				return false;
				
				}});
		
		}
		}
		</script>							 
 <script>
function imagenamechange(i){
	$('#name_'+i).hide();
	$('#edit_'+i).show();
	
	
	}
	function imagenamesave(id,i){
		var name = document.getElementById("image_name_"+i).value;
	
		$.ajax({url:"<?=site_base_url()?>imagenamesave?id="+id+"&name="+name,
									  success:function(result){
				
			
				$('#edit_'+i).hide();
				$('#name_'+i).show();
				document.getElementById("igname_"+i).innerHTML=result;
				
		
				return false;
				
				}});
		}
		
 </script>
 <script type="text/javascript">
 function select_image(src)
 {
	 	//alert(src);
		$('#show').show();
	    document.getElementById('copy_url').value = src;
		
	 
 }
 function edit_pi(id,i){
	 
	 if (typeof FormData !== 'undefined') {
		

        // send the formData
        var formData1 = new FormData( $("#mypic_"+i)[0] );
		
			
		   
						 

        $.ajax({
            url : '<?php echo site_base_url(); ?>edit_photo?i='+i+"&id="+id,  // Controller URL
            type : 'POST',
            data : formData1,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
				
            success : function(data) {
				//alert(data);
				if(data=="empty"){
					alert("Not Upload Empty Image");
				}else{
					var image="<?=site_base_url()?>/uploads/user_photo/thumb/"+data.trim();
				  $("#alu_img_"+i).attr('src',image)
				  document.getElementById('image_name_'+i).value=data;	
				  
				}
			 // location.reload();
            }
        });

    }  
	 }
 
 </script>
                            
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

<section id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->

<?php $this->load->view("footer.php");?> <!-- /.footer -->


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