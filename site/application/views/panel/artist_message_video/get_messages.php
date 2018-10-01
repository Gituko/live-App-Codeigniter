<?php
$this->load->helper("Emoji");
$emoji=new Emoji();
                                 foreach($mensajes as $k)
								 {
									 
									 $datetime=explode(' ',$k->message_time);
									 $date=$datetime[0];
									 $time=$datetime[1];
									  if($k->sender_type=='User'){
										 $detail = $this->module->get_detail_user_img($k->user_id);
										 
										 
										 }else{
												 $detail = $this->module->get_detail_artist_img($k->artist_id); 
											 
											 }
									 
									 
									 
									$checking_ban=$this->module->checking_banned_user($k->user_id,$k->artist_id);
									
									
							 ?>
                             
                            
                             
                           
                                <div class="message_col">
                                
                                <button type="button" class="close close3" onClick="return delete_message(<?php echo $k->message_id; ?>);" id="">&times;</button>
                             
                              
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
                                    	<span class="msg_username"><?=$detail[0]['name'];?></span><span class="sendtime"><?=$time;?></span><span class="sendddmmyy"><?=$date;?></span>&nbsp;&nbsp;<?php  if($k->sender_type=='User') {?>
                                        <?php
										if(empty($checking_ban))
										 
										{
											
											?>
                                      <a href="" onClick="return ban_message('<?php echo $k->message_id; ?>')">Ban</a>
										<?php } else {?>
                                        
                                       
                                           <a href="" onClick="return un_banned('<?php echo $checking_ban[0]['ban_id']; ?>');">Unban</a>
                                        <?php
										}
										}
										?>
										
                                    </div>
                                    <div class="msg_body">
                                        <p><?=$emoji->parseString($k->message);?></p>
                                    </div>
                              
                  
                            </div>
               
               <?php
								 }
							 
								 ?>
                            
                                
                                
                                                                       
                                
   