
<?php require_once "phpuploader/include_phpuploader.php" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title>Artist Video</title>
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
                        	<div class="myaccount_search">
                            <form  name="search_frm" id="search_frm" enctype="multipart/form-data" method="get" action="<?=site_base_url();?>artist_video">
                            	<input type="text" class="form-control newmcsearch" name="search_video" value="" placeholder="Search Your Video">
                                </form>
                            </div>
                            
                            
                             
                           
                           <div id="menu9" class="allcourses">
                           		<div class="useraccount">
									<h5><i class="fa fa-video-camera myicon"></i>Videos</h5>
								</div>
                                
              	<?php
				$uploader=new PhpUploader();
				$uploader->MaxSizeKB=10240;
				$uploader->Name="myuploader";
				$uploader->MultipleFilesUpload=true;
				$uploader->InsertText="Select multiple files (Max 10MB for each video)";
				$uploader->AllowedFileExtensions="*.mp4,*.ogg,*.web,*.avi";	
				$uploader->Render();
			?>    
            			
			                 
          
       
         <div style="clear:both"></div> 
         </div>
         </form>
         
         
         <div id="filelist">
			</div>	   
            
            <?php
			$j = 1;
			
			foreach($artist_video as $row){
				
				 if(strlen($row['video_title'])>20){
									$more_pop = "....";
								}else{
									$more_pop = "";
								}
				
				?>
                               
                            
                            <div class="col-lg-4 col-md-4 col-xs-4 col-xs-4 fv_container">
                                <div class="feature_video_holder">
                                    <div class="media-wrapper">
                                        <video onclick="myFunction<?=$j?>()" id="myVideo<?=$j?>" poster="<?php echo base_url(); ?>img/img22.png" width="100%" height="100%" style="max-width:100%;">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" type="video/mp4">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" type="video/ogg">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" type="video/webm">
                                        <object data="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" width="470" height="255">
                                        <embed src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($row['video_name']);?>" width="470" height="255">
                                        </object>
                                        </video>
                                    </div>
                                <div class="f_video_bottom">
                                        <h5><?php echo substr($row['video_title'],0,20) .$more_pop;?>
                                         <a title="Delete" class="delete_btns" onClick="return delete_artist_video(<?php echo $row['video_id'];?>);" href="#"><i class="fa fa-trash-o"></i></a>
                                        <a title="Edit" class="iframe_review" href="<?=site_base_url();?>edit_video_artist?video_id=<?php echo $row['video_id'];?>" align="right"><i class="fa fa-pencil"></i></a>
                                        </h5>
                                    </div>    
                                    
                                    
                                    
                                    
                                    
                                    <!--<div class="f_video_bottom">
                                        <h5><?php echo($row['video_title']);?></h5>
                                       
                                    </div>-->
                                </div>
                            </div>
                            
                            <script>
							function myFunction<?=$j?>(){
								
								 document.getElementById("myVideo<?=$j?>").controls = true;
								}
							</script>
                            
                            <?
							$j++;
							
							} ?>
                            <input type="hidden" value="<?=$j?>" id="video_id"?>
                                   
                              <div class="pagination_area">
										 
							 <div class="pagination_right">
										<? echo $this->pagination->create_links(); ?>
									</div>
								 
									<div class="spacer"></div>
							   
								</div>      
                                   
                                   
                                            
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

<?php $this->load->view("footer");?> <!-- /.footer -->


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

	
	</script>
	<script type="text/javascript">
	function CuteWebUI_AjaxUploader_OnPostback()
	{
		var uploader = document.getElementById("myuploader");
		var guidlist = uploader.value;
			var i = document.getElementById('video_id').value;
		var handlerurl='<?=site_base_url()?>main/ajax_multiplefiles_handler?i='+i;
		
		//Send Request
		var xh;
		if (window.XMLHttpRequest)
			xh = new window.XMLHttpRequest();
		else
			xh = new ActiveXObject("Microsoft.XMLHTTP");
		
		xh.open("POST", handlerurl, false, null, null);
		xh.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=utf-8");
		xh.send("guidlist=" + guidlist);
	

		//call uploader to clear the client state
		uploader.reset();

		if (xh.status != 200)
		{
			alert("Not Uploads");
			
		}
	
	$('<div id="show_thum_1"></div>').appendTo('#filelist').html(xh.responseText).addClass('success');
				i=+i+1;
				document.getElementById('video_id').value=i;
		//alert(list);	//get JSON objects
		//Process Result:
			
	}
	</script>
    
   <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"50%", height:"100%"});
				
			});
		</script> 
           
 <script>

function delete_artist_video(v_id)

{



	//alert(favourite_id);

	$.ajax({                              

		type: 'POST',

		url: "<?php echo site_base_url();?>main/delete_artist_video?v_id="+v_id,

		success:function(response){

	  
			location.reload();

		 

	

      }

 	 });

	

}

</script>  
    
    
</body>
</html>