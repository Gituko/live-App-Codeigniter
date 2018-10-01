<?php
        $my_smilies = array(
        ':aln' => '<img src="'.base_url().'chat_images/alien1.png" alt="" />',
		':thk' => '<img src="'.base_url().'chat_images/annoyed.png" alt="" />',
		':ang' => '<img src="'.base_url().'chat_images/angel.png" alt="" />',
		':slp<' => '<img src="'.base_url().'chat_images/zzz.png" alt="" />',
		':blnk' => '<img src="'.base_url().'chat_images/blanco.png" alt="" />',
		':zip' => '<img src="'.base_url().'chat_images/zip_it.png" alt="" />',
		':bor' => '<img src="'.base_url().'chat_images/boring.png" alt="" />',
		':brb' => '<img src="'.base_url().'chat_images/brb.png" alt="" />',
		':bsy' => '<img src="'.base_url().'chat_images/busy.png" alt="" />',
		':cell' => '<img src="'.base_url().'chat_images/cellphone.png" alt="" />',
		':tp' => '<img src="'.base_url().'chat_images/clock.png" alt="" />',
		':cool' => '<img src="'.base_url().'chat_images/cool.png" alt="" />',
		':czy' => '<img src="'.base_url().'chat_images/crazy.png" alt="" />',
		':cry' => '<img src="'.base_url().'chat_images/cry.png" alt="" />',
		':dvl' => '<img src="'.base_url().'chat_images/devil.png" alt="" />',
		':blush' => '<img src="'.base_url().'chat_images/blush.png" alt="" />',
		':stop' => '<img src="'.base_url().'chat_images/dnd.png" alt="" />',
		':flwr' => '<img src="'.base_url().'chat_images/flower.png" alt="" />',
		':heart' => '<img src="'.base_url().'chat_images/heart.png" alt="" />',
		':geek' => '<img src="'.base_url().'chat_images/geek.png" alt="" />',
		':gift' => '<img src="'.base_url().'chat_images/gift.png" alt="" />',
		':ill' => '<img src="'.base_url().'chat_images/ill.png" alt="" />',
		':love' => '<img src="'.base_url().'chat_images/in_love.png" alt="" />',
		':file' => '<img src="'.base_url().'chat_images/text_file.png" alt="" />',
		':kiss' => '<img src="'.base_url().'chat_images/kissy.png" alt="" />',
		':laugh' => '<img src="'.base_url().'chat_images/laugh.png" alt="" />',
		':mail' => '<img src="'.base_url().'chat_images/mail.png" alt="" />',
		':music' => '<img src="'.base_url().'chat_images/music2.png" alt="" />',
		':whst' => '<img src="'.base_url().'chat_images/not_guilty.png" alt="" />',
		':please' => '<img src="'.base_url().'chat_images/please.png" alt="" />',
		':info' => '<img src="'.base_url().'chat_images/info.png" alt="" />',
		':sad' => '<img src="'.base_url().'chat_images/sad.png" alt="" />',
		':silly' => '<img src="'.base_url().'chat_images/silly.png" alt="" />',
		':lol' => '<img src="'.base_url().'chat_images/oh.png" alt="" />',
		':slps' => '<img src="'.base_url().'chat_images/speechless.png" alt="" />',
		':srpd' => '<img src="'.base_url().'chat_images/surprised.png" alt="" />',
		':tease' => '<img src="'.base_url().'chat_images/tease.png" alt="" />',
		':wink' => '<img src="'.base_url().'chat_images/wink.png" alt="" />',
		':grin' => '<img src="'.base_url().'chat_images/xd.png" alt="" />'
    );
	
	$emoji_details=$this->module->geting_emoji();
	 foreach($emoji_details as $row){ 	
	 $key=$row['emoji_text'];
                              
		$my_smilies_data[$key]='<img src='.site_base_url().'uploads/emoji_image/thumb/thumb_'.$row['emoji_image'].' alt="" />';
			 }

$segement=$this->uri->segment(4);

		 	
			
$category = explode('_',$segement);
$v_id= $category[(count($category)-1)];

?>
    <input type="hidden" id="v_id" value="<?=$v_id?>"/>
    <input type="hidden" id="limit" value=""/>
     <input type="hidden" id="limit1" value=""/>
      <input type="hidden" id="m_id" value=""/>

<section id="videodetail">
	<div class="worksection">
		<div class="container-full">
        	<div class="container-fluid">
                    <div class="row">
        		<div id="foo" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 video_detaile_left_body2">
                
                
                	<div class="details_body">
                            <div class="row">
                    	<div id="slideleftpanel" class="col-lg-4 col-md-4 col-sm-12 col-xs-12 myaccount_leftpanel">
                    	  <?php $this->load->view("panel/left_pannel");?>
                        <div style="clear:both"></div>
                    </div>
                        
                     
                        
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 details_video2">
                        	<div class="media-wrapper">
                                    <video autoplay class="videoimages" width="100%" height="100%" style="max-width:100%;"  preload="yes" controls controlsList="nodownload">
                                     <source src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $custom_video[0]['video_key'];?>.mp4" type="video/mp4">                                    
                                </video>
                            </div>
                            <div class="vd_bottom">
                            	<div class="thumb_usr">
                                	<img src="<?php echo base_url(); ?>img/user2.png" alt="">
                                </div>
                                <div class="vb_usrdetail">
                                	<h4><?php echo $custom_video[0]['recorded_v_title'];?></h4>
                                    <p>Overview:<span class="gapp"></span> <a href="#"><?php echo $custom_video[0]['recorded_v_overview'];?></a></p>
                                     <p>Tag Words:<span class="gapp"></span> <a href="#"><?php echo $custom_video[0]['video_tags'];?></a></p>
                                     <input type="hidden" name="artist_id" id="recorded_v_id" value="<?=$custom_video[0]['recorded_v_id']?>">  
                                </div>
                                  <?php
							$count_video=count($this->module->count_view_videos($custom_video[0]['recorded_v_id']));
							$count_likes=count($this->module->count_like_videos($custom_video[0]['recorded_v_id']));
							?>
                                
                                
                                
                                
                                <div class="view"><i class="fa fa-eye"></i><span class="gapp"></span> <a href="#"><?php echo $count_video;?></a></div>
                                 <div class="view"><span class="gapp"></span> <a href="#"><?php echo $count_likes;?></a>&nbsp;<i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
                                
                                
                            </div>
                            
                            <div class="messagearea">
                           		<h3>Messages</h3>
                                
                              <div class="vscroller vscroller6">
                        		
                                <? $messages_chat1= $this->module->get_messages_chat_lmt($v_id,count($messages_chat));?>
                                <input type="hidden" value="<?=count($messages_chat)-50;?>" id="old_message"/>
                                <div class="vscroller-content" id="message_scroll">
                                <? if(count($messages_chat)>50){ ?>
                                 <a id="old_message_chat_hide"  onClick="get_old_message_chat()">See more message</a>
                                 <? }?>
                                  <div class="old_message1" id="account_table1">
                                  </div>
                                <div id="message_chat">

                                
                                 <?php
								// print_r($messages_chat);
							 if($messages_chat1!='')
							 {
								 foreach($messages_chat1 as $row)
								 {
									 
									 $datetime=explode(' ',$row['message_time']);
									 $date=$datetime[0];
									 $time=$datetime[1];
									  if($row['sender_type']=='User'){
										 $detail = $this->module->get_detail_user_img($row['user_id']);
										 
										 
										 }else{
												 $detail = $this->module->get_detail_artist_img($row['artist_id']); 
											 
											 }
									 
									 
									 
									$checking_ban=$this->module->checking_banned_user($row['user_id'],$row['artist_id']);
									
									
							 ?>
                             
                            
                             
                           
                                <div class="message_col">
                                
                                <button type="button" class="close close3" onClick="return delete_message(<?php echo $row['message_id']; ?>);" id="">&times;</button>
                             
                              
                                	<div class="msg_thumb">
                            <?php if($detail[0]['image']!=''){
								?>
                            	<img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo  $detail[0]['image']; ?>" alt="">
                                
                                <?
							}else{
							?>
                           <img src="<?php echo base_url(); ?>img/myimage2.png" alt="">
                            
                            <?php
							}
							?>
                             </div>
                            
                            
                            
                            
                             <div class="message_top">
                                    	<span class="msg_username"><?=$detail[0]['name'];?></span><span class="sendtime"><?=$time;?></span><span class="sendddmmyy"><?=$date;?></span>&nbsp;&nbsp;<?php  if($row['sender_type']=='User') {?>
                                        <?php
										if(empty($checking_ban))
										 
										{
											
											?>
                                      <a href="" onClick="return ban_message('<?php echo $row['message_id']; ?>')">Ban</a>
										<?php } else {?>
                                        
                                       
                                           <a href="" onClick="return un_banned('<?php echo $checking_ban[0]['ban_id']; ?>');">Unban</a>
                                        <?php
										}
										}
										?>
										
                                    </div>
                                    <div class="msg_body">
                                    	<p><?=$row['message'];?></p>
                                    </div>
                              
                  
                            </div>
               
               <?php
								 }
							 }
								 ?>
                            
                                
                                
                                                                       
                                
                                 </div>
                                
                                 </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                 
                               </div>
                               
                               <div class="chat_inputbox">
                           <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message_chat()"><i class="fa fa-location-arrow"></i></button>
                                	<textarea class="form-control chatinputarea content"  rows="1"  id="text_message" placeholder="Your text here..." ></textarea>
                                </div> 
                               
                               
                            </div>
                        </div>
                        
                    
              
                    </div>
                            </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 video_detaile_rightpanel">
                	<div class="left_panel">
                    	<!--<div class="addsec">
                        	<img src="<?php echo base_url(); ?>img/googleadd4.png">
                        </div>
                        <div class="addsec">
                        	<img src="<?php echo base_url(); ?>img/googleadd4.png">
                        </div>-->
                        
                        <div class="chat_reply">
                        	<div class="chat_title"><h4>Chat Replay</h4></div>
                               <div class="vscroller vscroller7">
                        	 <div class="vscroller-content">  
                             <a id="old_chat_hide" style="cursor:pointer; display:none" onClick="get_old_message()">See more message</a>
                             <div class="old" id="account_table">
                             </div>
                              <div id="chat_sms">
                             	
                            
                            </div>
                            </div>
                            </div>
                            
                            <?php
							$video_type=$custom_video[0]['video_type'];
							
							if($video_type=='Streaming')
							{
							?>
                            <div class="chat_inputbox">
                            	<div class="chat_togle_btn">
                                	<button id="chatbttn" class="chat_togle_button" data-toggle="tooltip" data-placement="top" title="Chat on" ><i class="fa fa-comments"></i></button>
                                    
                                    <button id="chatbttn2" data-toggle="tooltip" data-placement="top" title="Chat Icons" class="chaticon"></button>
                                    
                                    
                                    <button class="sendicon chaticon" data-placement="top" title="Send"  onClick="return send_message()"><i class="fa fa-location-arrow"></i></button>
                                
                                </div>
                                
                                <div id="dropchat2" class="chat_icons">
                                <?php
								
                                foreach($my_smilies_data as $key=>$data) {
									?>
                                    <div class="chat_ico" onClick="emoji('<?=$key?>')"><?php echo $data ?> </div>
								 
								   <?php
								  }
								  ?>
                                	
                                </div>
                                <div id="dropchat" class="chat_textbox" >
                                	<textarea class="form-control chatinputarea content"  rows="1"  id="text_message1" placeholder="Your text here..." ></textarea>
                                </div>
                               
                            </div>
                            <?php
							}?>
                                                        
                            
                            
                        </div>
                    
                    </div>
                </div>
			</div><!--/.container-->
                        </div>
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
</section><!-- /#somework -->


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
    
	<!-- Required -->
	<script src="<?php echo base_url(); ?>js/jquery.min.js" type="text/javascript"></script>
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
	<script type="text/javascript">
		//<![CDATA[

		$(document).ready(function(){
		$("#chatbttn").click(function(){
			$("#dropchat").slideToggle("slow");
		});
		});

		//]]> 
    </script>
    <script>
function emoji(code){
 var message = document.getElementById('text_message1').value;
 var message1='';

 message1+=message+' '+code; 
 document.getElementById('text_message1').value=message1;
}
</script>
    
    <script>
function delete_message(message_id)
{
	//alert(favourite_id);
	var result = confirm("Want to delete?");
    if (result) {
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/delete_message?message_id="+message_id,
		success:function(response){
	     
		 location.reload();
	
      }
 	 });
	}
}
</script>



 <script>
function ban_message(message_id)
{
	//alert(message_id);
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/ban_user?message_id="+message_id,
		success:function(response){
	     alert(response);
		 location.reload();
	
      }
 	 });
}
</script>



    
     <script>
function un_banned(id)
{
	//alert(id);
	
	
	
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/un_banned?id="+id,
		success:function(response){
	    // $('#like').hide();
		//alert(response);
			//$('#unlike').show();
		 location.reload();
	
      }
 	 });
	
			
}
</script>
    
    
    
    
    
    
    
    
   <script>
   function parseString($string ) {
	$my_smilies = array(
        ':aln' => '<img src="<?php echo base_url(); ?>chat_images/alien1.png" alt="" />',
		':thk' => '<img src="<?php echo base_url(); ?>chat_images/annoyed.png" alt="" />',
		':ang' => '<img src="<?php echo base_url(); ?>chat_images/angel.png" alt="" />',
		':slp<' => '<img src="<?php echo base_url(); ?>chat_images/zzz.png" alt="" />',
		':blnk' => '<img src="<?php echo base_url(); ?>chat_images/blanco.png" alt="" />',
		':zip' => '<img src="<?php echo base_url(); ?>chat_images/zip_it.png" alt="" />',
		':bor' => '<img src="<?php echo base_url(); ?>chat_images/boring.png" alt="" />',
		':brb' => '<img src="<?php echo base_url(); ?>chat_images/brb.png" alt="" />',
		':bsy' => '<img src="<?php echo base_url(); ?>chat_images/busy.png" alt="" />',
		':cell' => '<img src="<?php echo base_url(); ?>chat_images/cellphone.png" alt="" />',
		':tp' => '<img src="<?php echo base_url(); ?>chat_images/clock.png" alt="" />',
		':cool' => '<img src="<?php echo base_url(); ?>chat_images/cool.png" alt="" />',
		':czy' => '<img src="<?php echo base_url(); ?>chat_images/crazy.png" alt="" />',
		':cry' => '<img src="<?php echo base_url(); ?>chat_images/cry.png" alt="" />',
		':dvl' => '<img src="<?php echo base_url(); ?>chat_images/devil.png" alt="" />',
		':blush' => '<img src="<?php echo base_url(); ?>chat_images/blush.png" alt="" />',
		':stop' => '<img src="<?php echo base_url(); ?>chat_images/dnd.png" alt="" />',
		':flwr' => '<img src="<?php echo base_url(); ?>chat_images/flower.png" alt="" />',
		':heart' => '<img src="<?php echo base_url(); ?>chat_images/heart.png" alt="" />',
		':geek' => '<img src="<?php echo base_url(); ?>chat_images/geek.png" alt="" />',
		':gift' => '<img src="<?php echo base_url(); ?>chat_images/gift.png" alt="" />',
		':ill' => '<img src="<?php echo base_url(); ?>chat_images/ill.png" alt="" />',
		':love' => '<img src="<?php echo base_url(); ?>chat_images/in_love.png" alt="" />',
		':file' => '<img src="<?php echo base_url(); ?>chat_images/text_file.png" alt="" />',
		':kiss' => '<img src="<?php echo base_url(); ?>chat_images/kissy.png" alt="" />',
		':laugh' => '<img src="<?php echo base_url(); ?>chat_images/laugh.png" alt="" />',
		':mail' => '<img src="<?php echo base_url(); ?>chat_images/mail.png" alt="" />',
		':music' => '<img src="<?php echo base_url(); ?>chat_images/music2.png" alt="" />',
		':whst' => '<img src="<?php echo base_url(); ?>chat_images/not_guilty.png" alt="" />',
		':please' => '<img src="<?php echo base_url(); ?>chat_images/please.png" alt="" />',
		':info' => '<img src="<?php echo base_url(); ?>chat_images/info.png" alt="" />',
		':sad' => '<img src="<?php echo base_url(); ?>chat_images/sad.png" alt="" />',
		':silly' => '<img src="<?php echo base_url(); ?>chat_images/silly.png" alt="" />',
		':lol' => '<img src="<?php echo base_url(); ?>chat_images/oh.png" alt="" />',
		':slps' => '<img src="<?php echo base_url(); ?>chat_images/speechless.png" alt="" />',
		':srpd' => '<img src="<?php echo base_url(); ?>chat_images/surprised.png" alt="" />',
		':tease' => '<img src="<?php echo base_url(); ?>chat_images/tease.png" alt="" />',
		':wink' => '<img src="<?php echo base_url(); ?>chat_images/wink.png" alt="" />',
		':grin' => '<img src="<?php echo base_url(); ?>chat_images/xd.png" alt="" />'
    );
	
	return str_replace( array_keys($my_smilies), array_values($my_smilies), $string);
}
   
   
   </script> 
    
    
    
    
    
    
    
    
    
    
  <script>
	function send_message()
	{
	  //alert($("#mydiv")[0].scrollHeight);
	   var message = document.getElementById('text_message1').value;
	    
		  var recorded_v_id = document.getElementById('recorded_v_id').value;
		 
		 if(message!=''){
		 
 //alert(recorded_v_id);
	   $.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/message_chat_artist?message="+message+"&recorded_v_id="+recorded_v_id,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			  
	    if ($('#dropchat2').is(':visible')) {
            // some code when content is hidden
			
			document.getElementById("chatbttn2").click();
        }
	
		 document.getElementById('text_message1').value='';
		
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
		 }else{
			 alert("Please Enter The Message");
			 }
	   
	   
	   
	
}
	
	</script>
    
    
    
  <script>
	function send_message_chat()
	{
	  //alert($("#mydiv")[0].scrollHeight);
	   var message = document.getElementById('text_message').value;
	   
		  var recorded_v_id = document.getElementById('recorded_v_id').value;
		 
		 if(message!=''){
		 
 //alert(recorded_v_id);
	   $.ajax({                              
		type: 'POST',
	    url: "<?php echo site_base_url();?>main/comment_message_video?message="+message+"&recorded_v_id="+recorded_v_id,
		success:function(response){
			//location.href="<?php echo site_base_url();?>cart_product";
			
	  response = response.split(',');
	   $("#message_chat").append('<div class="message_col"><div class="msg_thumb"><img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/'+response[1]+'" alt=""></div><div class="message_top"><span class="msg_username">'+response[0]+'</span><span class="sendtime">'+response[2]+'</span><span class="sendddmmyy">'+response[3]+'</span></div><div class="<?php echo base_url(); ?>msg_body"><p>'+response[4]+'</p></div></div>');
	    document.getElementById('text_message').value='';
		
		
	 // document.getElementById("myList").appendChild(node);
      }
 	 });
		 }else{
			 alert("Please Enter The Message");
			 }
	   
	   
	   
	
}
	
	</script>  
    
    
    
    
    
    
    
    
    
    
    
     <script type="text/javascript">
   function get_old_message()
   {
	   var v_id = document.getElementById('v_id').value;
	    var limit = document.getElementById('limit1').value;
		if(limit==''){
			limit = document.getElementById('limit').value;
			}
	   alert(limit);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_old_message?v_id='+v_id+'&limit='+limit,
		   
		   success:function(response){
			    var data = response.split('&&');
			  
			   document.getElementById('limit1').value=data[1]
			 // alert(data[0]);
			   $(".old").prepend(data[0]);
			   if(data[1]==0){
				   $('#old_chat_hide').hide();
				   
				   }
			 //  document.getElementById('chat_sms').innerHTML=response;
			  
		   }
		   });

			
   }
						
   </script> 
    
    <script type="text/javascript">
   function get_chats()
   {
	   var v_id = document.getElementById('v_id').value;
	//  alert(v_id);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	    var e = document.getElementById("account_table");
	  if ( e.hasChildNodes() )
		{
			 document.getElementById('account_table').innerHTML='';
			  document.getElementById('limit1').value='';
		}
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_chats?v_id='+v_id,
		   
		   success:function(response){
			 //alert(response);
			  // $("#chat_sms").append(response);
			  var data = response.split('&&');
			   document.getElementById('chat_sms').innerHTML=data[0];
			   //alert(data[0]);
			   document.getElementById('limit').value=data[1];
			   if(data[1]>0){
				    $('#old_chat_hide').show(); 
				   
				   }
			    document.getElementById('m_id').value=data[2];
			   
			  
		   }
		   });

			
   }
   
    function get_chats_new()
   {
	   var v_id = document.getElementById('v_id').value;
	    var limit = document.getElementById('m_id').value;
	//  alert(v_id);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_chats_new?v_id='+v_id+'&limit='+limit,
		   
		   success:function(response){
			 //alert(response);
			  // $("#chat_sms").append(response);
			  var data = response.split('&&');
			   document.getElementById('chat_sms').innerHTML=data[0];
			   //alert(data[0]);
			 //  document.getElementById('limit').value=data[1]
			   
			  
		   }
		   });

			
   }
						
   </script>
    
    <script>
   
   window.onload=function(){
	   get_chats();
	   
   setInterval(function(){ get_chats_new(); }, 300);
    setInterval(function(){ get_chats(); }, 300000);
   // setInterval(function(){ get_messsage_chat(); }, 300);
   
   
    
   }
   </script>  
    
    
     <script type="text/javascript">
		//<![CDATA[

		$(document).ready(function(){
		$("#chatbttn2").click(function(){
			$("#dropchat2").slideToggle("slow");
		});
		});

		//]]> 
    </script>
    
   <script>
   
   window.onload=function(){
	   //get_chats();
	   
   setInterval(function(){ get_chats(); }, 300);
   
   
    
   }
   </script> 
    
    
    
    <script type="text/javascript">
   function get_old_message()
   {
	   var v_id = document.getElementById('v_id').value;
	    var limit = document.getElementById('limit1').value;
		if(limit==''){
			limit = document.getElementById('limit').value;
			}
	  // alert(limit);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_old_message?v_id='+v_id+'&limit='+limit,
		   
		   success:function(response){
			    var data = response.split('&&');
			  
			   document.getElementById('limit1').value=data[1]
			 // alert(data[0]);
			   $(".old").prepend(data[0]);
			   if(data[1]==0){
				   $('#old_chat_hide').hide();
				   
				   }
			 //  document.getElementById('chat_sms').innerHTML=response;
			  
		   }
		   });

			
   }
   
   
      function get_old_message_chat()
   {
	   var v_id = document.getElementById('v_id').value;
	    var limit = document.getElementById('old_message').value;
	
	  // alert(limit);//msg=message table msg id
	  // alert('<?php //echo site_base_url(); ?>get_chats?msg='+msg);
	   $.ajax({
		   type: 'POST',
		   url: '<?php echo site_base_url(); ?>main/get_messsage_chat?v_id='+v_id+'&limit='+limit,
		   
		   success:function(response){
			    var data = response.split('&&');
			  
			   document.getElementById('old_message').value=data[1]
			  alert(data[0]);
			   $(".old_message1").prepend(data[0]);
			   if(data[1]<50){
				   $('#old_message_chat_hide').hide();
				   
				   }
			 //  document.getElementById('chat_sms').innerHTML=response;
			  
		   }
		   });

			
   }
						
   </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   <script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'none')
          e.style.display = 'block';
       else
          e.style.display = 'none';
    }
//-->
</script>
<style>
.chat_details img{
	    
    display: inline-block !important;
    height: auto;
	}
	.chat_details_artist img{
	    
    display: inline-block !important;
    height: auto;
	}
</style>


</body>
</html>