<section id="somework">
	<div class="worksection">
		<div class="container-full">
			<div class="container">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title_holder">
                	<div class="f_title">
                    	<h2><?php echo $name;?></h2>
                    </div>
                    <div class="f_order">
                    
                    <? if(isset($_GET['type']) && isset($_GET['search'])){ 
					
					$url = site_base_url()."video_category?search=".$_GET['search']."&type=".$_GET['type']."&order_by=";
					}else if(isset($_GET['type'])){
					$url = site_base_url()."video_category?type=".$_GET['type']."&order_by=";	
						}else if(isset($_GET['search'])){
					$url = site_base_url()."video_category?search=".$_GET['search']."&order_by=";	
						}else{
							
							$url = "?order_by=";
							}
				 ?>
                    <select id="order_by"  class="order_by order_by1"  onChange="window.location='<?=$url?>'+this.value;">
                    <option value="">Sort By</option>
                      <option value="atoz" <? if($order_by=='atoz'){?> selected <? } ?>>A to Z</option>
                      <option value="ztoa" <? if($order_by=='ztoa'){?> selected <? } ?>>Z to A</option>
                    <option value="newtoold" <? if($order_by=='newtoold'){?> selected <? } ?>>New To Old</option>
                      <option value="oldtonew" <? if($order_by=='oldtonew'){?> selected <? } ?>>Old To New </option>
                  
                    </select>
                    </div>
                    <!--<div class="viewallvdo">
                    	<a href="#">View All Videos</a>
                    </div>-->
                </div>
                <?php
				if(!empty($video_list))
				{
				foreach($video_list as $row)
				{
					 $ovr=substr($row['recorded_v_overview'],0,30);
					$length_ovr = strlen($row['recorded_v_overview']);
					
					if($length_ovr>30){
								$overview=$ovr."..";
								
								}else{
									$overview=$ovr." ";
									}
					
					
					$type=$row['video_type'];
				?>
                
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 fv_container">
                	<div class="feature_video_holder">
                    	<div class="vdo_image">
                       
                        
                        <?php
						if($type=='Recorded')
						{
					
	/************************************************************************************************************/				
					
                        if((($this->session->userdata('is_logged_in')=='1') && ($user_type=="User")) || ($row['recorded_video']=="0"))
						{
							
							
				
						
                        ?>
                            <a href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$row['recorded_v_title']))._.$row['recorded_v_id']?>"><img style="width: 295px; height: 192px" src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image'] ?>" alt=""></a>
                            
						<?php
			}else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist()"><img style="width: 295px; height: 192px" src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image'] ?>" alt=""></a> 
                 <?
				}
			
			else{
				
				
			?>
							
							
						<a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image']; ?>" alt=""></a>
                        
                        
                        <?php
			}
			?>
                        	
							
							
							<?php
						}
						
	/**********************************************************************************************************************************************************/					
						
						
						
						if($type=='Streaming')
						{
							
					/****************************************************/		
							
					 if((($this->session->userdata('is_logged_in')=='1') && ($user_type=="User")) || ($row['live_video']=="0"))
					{
						
				
                        ?>		
							
			<span class="active_live_video">Live<span class="gapp"></span><i class="fa fa-circle"></i></span>
                            
                          <a href="<?=site_base_url();?>video_details_page/<?=urlencode(str_replace(" ","_",$row['recorded_v_title']))._.$row['recorded_v_id']?>"><img src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image']; ?>" alt=""></a> 
                          
                <?php
			}else if($user_type=="Artist"){
				?>
				 <a href="#" onClick="artist()"><img src="<?php echo base_url(); ?>img/img1.png" alt=""></a> 
                 <?
				}
			
			else{
	
			?>
              <span class="active_live_video">Live<span class="gapp"></span><i class="fa fa-circle"></i></span>
                          
                  <a data-toggle="modal" data-target="#myModal" href="#"><img src="<?php echo site_base_url(); ?>uploads/recorded_video/<?php echo $row['image']; ?>" alt=""></a>       
                          
                  <?php
			}
			/***********************************************************************************************************/
			?>
                            
                            
                            <?php
						}
						?>
                        </div>
                        <div class="f_video_bottom">
                        	<h5><?=$row['recorded_v_title']?></h5>
                             <p title="<?=$row['recorded_v_overview']?>">Overview-<?=$overview?> </p>
                             <?php $tag = explode(',',$row['video_tags']); ?>
                             <p>Tags:-
							 <? 
							  $i=1;
							 foreach($tag as $row1){ 
							
							 ?>
							 <a href="<?=site_base_url()?>video_category?tag=<?=$row1?>" class="tag" title="<?=$row1?>">
							 <?=$row1?><? if($i<count($tag)){ echo " , "; } ?>
                             </a>
                            <?
							 $i=$i+1;
							} ?> 
                            </p>
                            
                             

                       <?php
						if($type=='Recorded')
						{
							
						?>
                             <p title="Price">
                             
                             <?php
							 if($row['recorded_video']!='0'){
							 ?>
                             
                             <b>Price</b>-$<?=$row['recorded_video']?>
                             <?php
							 }else{
								 
							 ?>
                             <b>Free</b>
                             <?php
							 }
							 ?>
                             
                             </p>
                            <?php
						}else{
						?>
                            <p title="Price">
                             
                             <?php
							 if($row['live_video']!='0'){
							 ?>
                             
                             <b>Price</b>-$<?=$row['live_video']?>
                             <?php
							 }else{
								 
							 ?>
                             <b>Free</b>
                             <?php
							 }
							 ?>
                             
                             </p>
                           
                           
                           
                           
                           
                           
                           
                           
                           
                         
                            
                            <?php
						}
						?>      
                             
                  
                           
                             <div class="vdodetel_bottom">
                                        	<span class="vdodetel_vew"><p><?=$row['total']?> viewer</p></span>
                                        	<!--<span class="vdodetel_vew_link"><a  href="<?=site_base_url();?>video_offline/<?=urlencode(str_replace(" ","_",$row1['recorded_v_title']))._.$row1['recorded_v_id']?>">View</a></span>-->
                                        </div>
                             
                           
                        </div>
                	</div>
                </div>
                
                <?php
				}}
				else{
				?>
      
           
                There is no Video Available
                <?php
				}
				//print_r($this->session->userdata('path'));die;
				?>
                
                <div class="pagination_area">
										 
							 <div class="pagination_right">
										<? echo $this->pagination->create_links(); ?>
									</div>
								 
									<div class="spacer"></div>
							   
								</div>
        
			</div> <!--/.container-->
		</div> <!-- /.container-full -->
	</div> <!-- /.worksection -->
</section><!-- /#somework -->