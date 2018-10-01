<?php  require_once "phpuploader/include_phpuploader.php" ?>
<?php 

	$type = $this->session->userdata('type');
			if($type=="User"){
				
				$user_id = $this->session->userdata('user_id');
				$detail= $this->module->get_user_detail($user_id);
				}else{
					
					$user_id = $this->session->userdata('artist_id');
					$detail= $this->module->get_artist_detail($user_id);
					}
					
					?>


<section id="myaccount_service">
	<div class="myaccountdiv">
		<div class="container-full">
			<div class="container-fluid">
            	
				 <div class="myaccount_holder">
                                     <div class="row">
                 	<div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	 	<?php $this->load->view("panel/left_pannel"); ?>
                        <div style="clear:both"></div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                    
   						<div class="myaccount_top_text tab-content">
                        	<div class="myaccount_search">
                            <form  name="search_frm" id="search_frm" enctype="multipart/form-data" method="get" action="<?=site_base_url();?>panel/recorded_video">
                                <input type="hidden" name="1" value="1">
                                <input type="text"  class="form-control newmcsearch" name="recorded_video" value="" placeholder="Search Your Recorded Video">
                                </form>
                            </div>
                            
                            
                             
                           
                           <div id="menu9" class="allcourses">
                           		<div class="useraccount">
									<h5><i class="fa fa-video-camera myicon"></i>Recorded Videos</h5>
								</div>
                                
              	
			                 
          
       
         <div style="clear:both"></div> 
         </div>
         </form>
         
         
         <div id="filelist">
			</div>	 
         <div class="col-lg-12">
         <div class="row">
             
              <?php
                                         //             var_dump($artist_video);
        foreach($artist_video as $k){
            
            
            $artista=$this->stream->find("stream\stream_artist",$k['artist_id']);
                                                        $imagen=($k['image']!="")?
                                                        site_base_url().'uploads/recorded_video/'.$k['image']:
                                                        site_base_url()."uploads/user_image/".$artista->image;
                                                        $imagen=($imagen=="")?base_url()."img/logo3.png":$imagen;
            ?>              
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 " >   
            
            <?php $data['cuadro_video']=array(
                                    "imagen"=>$imagen,
                                    "imagen_enlace"=>site_base_url().'category/'.($k['video_type']=="Streaming"?"video_online":"video_offline").'/'.urlencode(str_replace(" ", "_", $k['recorded_v_title'])) . _ . $k['recorded_v_id'],                                    
                                    "nombre"=>$k['recorded_v_title'],
                                    "artista"=>$detail[0]['name'],
                                    "views"=>$k['total'],
                                    "enlcace_user_profile"=>site_base_url()."artist_detail/index/".  str_replace(" ","_", $k['name'])."_".$k['artist_id']
                                );
                                $this->load->view("componentes/cuadro_video_user_login",$data);
            ?>  

        </div>
        <?php } ?>
           
                                                        </div>
                         
                            
                            
                           <div class="pagination_area">
										 
							 <div class="pagination_right">
										<? echo $this->pagination->create_links(); ?>
									</div>
								 
									<div class="spacer"></div>
							   
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

function delete_recorded_video(v_id)

{
	//alert(favourite_id);

	$.ajax({                              

		type: 'POST',

		url: "<?php echo site_base_url();?>main/delete_artist_recorded_video?v_id="+v_id,

		success:function(response){

			location.reload();

	
      }

 	 });

	

}

</script>   
