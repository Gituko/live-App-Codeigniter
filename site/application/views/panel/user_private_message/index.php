<?php 
$this->load->helper("Emoji");
$emoji=new Emoji();
$user_type = $this->session->userdata('type');
$emoji_details=$this->module->geting_emoji();
	 foreach($emoji_details as $row){ 	
	 $key=$row['emoji_text'];
                              
		$my_smilies_data[$key]='<img src="'.site_base_url().'uploads/emoji_image/thumb/thumb_'.$row['emoji_image'].'" />';
			 }

?>
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
                 
                 
                 	
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 normal_rightpanel">
                    
                    <div class="scrollbarmacosx" id="scr" style="display: none">
                    
                    <div id="artist_private_messages123">
                    
                    </div>
                    
                    </div>
   						
                        <div class="chat_inputbox"  id="chat_inputbox" style="display: none">
                            <button id="chatbttn4" data-toggle="tooltip" data-placement="top" title="Chat Icons" class="chaticon"></button>
                           <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message()"><i class="fa fa-location-arrow"></i></button>
                           <textarea onkeyup=" if (event.which == 13 || event.keyCode == 13) {send_message()}" class="form-control chatinputarea content"  rows="1"  id="text_message" placeholder="Your text here..." ></textarea>
                                </div>
                        <div id="dropchat4" class="chat_icons" style="display: none" >
                                <?php
								
                                foreach($my_smilies_data as $key=>$data) {
									?>
                                    <div class="chat_ico" onClick="emoji('<?=$key?>','text_message')"><?php echo $data ?> </div>
								 
								   <?php
								  }
								  ?>
                                	
                                </div>
                        
                        
                        
                    </div>
                    
                    
                    <div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	
                        
              <div class="panel_holder2">
                        	<div class="myaccount_titlename">
                            	<h3>Chats</h3>
                            </div>
                        	
                            
                            <ul class="nav nav-tabs leftli">
                            <input type="hidden" id="id" value='' />
                              <!--  <li><a href="myaccount(step1).html"><i class="fa fa-dashboard myicon blue"></i>Dashboard</a></li>-->
                                
                               <?php
							   foreach($artist_messages as $row)
							   {
							   ?>
                                
                           <li ><a  onclick="return select_messages(<?php echo $row['artist_id']; ?>)"><?=$row['name']?></a></li>      
                                
                                
                              
                             <?php
							   }
							 ?>
                                
                             
                              
                            </ul>

                        </div>          
                        
                        
                    
                        
                        
                        
                        
                        
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

<?php  $this->load->view("footer");?> <!-- /.footer -->

  <script>
            function updateScroll2(){
                  var element = document.getElementById("scr");
                  element.scrollTop = element.scrollHeight;
              }
              
          </script>
<script>
    
    $(document).ready(function(){
       $("#chatbttn4").click(function(){
            $("#dropchat4").slideToggle("slow").css({top:"-220px",position:"relative","z-index":"10000","width":"100%"});
        }); 
    });
    
    function emoji(code,id_chat_input){
    var message = document.getElementById(id_chat_input).value;
    var message1='';
    message1+=message+' '+code; 
    document.getElementById(id_chat_input).value=message1;
    document.getElementById(id_chat_input).focus();

    }
	function send_message()
	{
	  //alert($("#mydiv")[0].scrollHeight);
	   var message = document.getElementById('text_message').value;
	     var artist_id123 = document.getElementById('artist_id123').value;
		//alert(user_id123);
		
		   
		 
		 if(message!=''){
		 
		
		 
		 
 //alert(recorded_v_id);
	   $.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/message_chat_private_user?message="+message+"&artist_id123="+artist_id123,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#chat_sms").append('<div class="message_col"><div class="msg_thumb"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="message_top"><span class="msg_username">'+response[0]+'</span><span class="sendtime">'+response[2]+'</span><span class="sendddmmyy">'+response[3]+'</span></div><div class="<?php echo base_url(); ?>msg_body"><p>'+response[4]+'</p></div></div>');
	    document.getElementById('text_message').value='';
            $("#dropchat4").hide();
		updateScroll2();
		
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
		 }
	 
		 else{
			 alert("Please Enter The Message");
			 }
	   
	   
	   
	
}
	
	</script>




<script>
   
   window.onload=function(){
	
	   //get_chats();
	   
   setInterval(function(){ select_messages1(); }, 300);
    //setInterval(function(){ get_chats(); }, 300000);
    //setInterval(function(){ send_message_private(); }, 300);
   
   }
   
   </script> 







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
<script>
function select_messages(id)
{
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/select_private_message_of_users?id="+id,
		success:function(response){
	     //alert(response);
		 $("#scr").html(response);
		 $('#chat_inputbox').show();
		  $('#scr').show();
		 document.getElementById('id').value=id;
                 updateScroll2();
		 //location.reload();
	
      }
 	 });
	
	
	
	
	
}
function select_messages1()
{
	var id = document.getElementById('id').value;
        select_messages(id)
//	$.ajax({                              
//		type: 'POST',
//		url: "<?php echo site_base_url();?>main/select_private_message_of_users?id="+id,
//		success:function(response){
//	     //alert(response);
//		 $("#artist_private_messages123").html(response);
//		 //$('#chat_inputbox').show();
//		// $('#scr').show();
//		 //location.reload();
//	
//      }
// 	 });
	
	
	
	
	
}

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

<!--<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>-->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"50%", height:"100%"});
				
			});
		</script>  



 <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datetimepicker" ).datepicker({
								 dateFormat: 'yy-mm-dd',
								  maxDate: '0', 
								   changeMonth: true,
                                   changeYear: true,
								   yearRange: "-110:+0"
								  });
  } );
  </script>-->
<style>
.scrollbarmacosx{
	overflow: scroll;
    height: 341px;
    overflow-y: scroll;
    overflow-x: hidden;
}
</style>


</body>
</html>