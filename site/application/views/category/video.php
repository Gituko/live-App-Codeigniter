<div class="container" style="margin-top:5em;">
    <div class="row" style="padding-top:20px; padding-bottom: 20px;">
        <?php if(isset($_GET['type'])){ ?>
        <div class="col-md-4" style="padding-left: 0px;"><h3>  <?php echo $_GET['type']; ?> </h3></div>
        <?php }else{ ?>
        <?php if(isset($_GET['tag'])){ ?>
        <div class="col-md-4" style="padding-left: 0px;"><h3> Tag: <?php echo $_GET['tag'] ?> </h3></div>
        <?php } ?>
        <?php if(isset($_GET['search'])){ ?>
        <div class="col-md-4" style="padding-left: 0px;"><h3> Search: <?php echo $_GET['search']; ?> </h3></div>
        <?php } }?>
        <div class="col-md-3">
            
                    <?php if(isset($_GET['type']) && isset($_GET['search'])){ 
					
					$url = site_base_url()."category/video?1=1&search=".$_GET['search']."&type=".$_GET['type']."&order_by=";
					}else if(isset($_GET['type'])){
					$url = site_base_url()."category/video?1=1&type=".$_GET['type']."&order_by=";	
						}else if(isset($_GET['search'])){
					$url = site_base_url()."category/video?1=1&search=".$_GET['search']."&order_by=";	
						}else{
							
							$url = "?1=1&order_by=";
							}
                                        $order_by=$_GET['order_by'];
				 ?>
            
                    <select  id="order_by"  class="form-control"  onChange="window.location='<?=$url?>'+this.value;">
                    <option value="">Sort By</option>
                      <option value="atoz" <? if($order_by=='atoz'){?> selected <? } ?>>A to Z</option>
                      <option value="ztoa" <? if($order_by=='ztoa'){?> selected <? } ?>>Z to A</option>
                    <option value="newtoold" <?php if($order_by=='newtoold'){?> selected <? } ?>>New To Old</option>
                      <option value="oldtonew" <? if($order_by=='oldtonew'){?> selected <? } ?>>Old To New </option>
                  
                    </select>
                    
        </div>
    </div>
    
    <div class="row" id="contenido-rows">
        <?php 
//        echo "<pre>";
//        var_dump($video_list);
//        echo "</pre>";
        
        //var_dump($artista);
        ?>
        <?php
        
        foreach($video_list as $k){?>              
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 itemCategory" >   
            
            <?php 
            $artista=$this->stream->find("stream\stream_artist",$k['artist_id']);
            $imagen=($k['image']!="")?
                    site_base_url().'uploads/recorded_video/'.$k['image']:
                    site_base_url()."uploads/user_image/".$artista->image;
            $imagen=($imagen=="")?base_url()."img/logo3.png":$imagen;
            
            $data['cuadro_video']=array(
                                    "imagen"=>$imagen,
                                    "imagen_enlace"=>site_base_url().'category/'.($k['video_type']=="Streaming"?"video_online":"video_offline").'/'.urlencode(str_replace(" ", "_", $k['recorded_v_title'])) . _ . $k['recorded_v_id'],                                    
                                    "nombre"=>$k['recorded_v_title'],
                                    "artista"=>$k['name'],
                                    "views"=>$k['total'],
                                    "enlcace_user_profile"=>site_base_url()."artist_detail/index/".  str_replace(" ","_", $k['name'])."_".$k['artist_id']
                                );
                                $this->load->view("componentes/cuadro_video",$data);
?>  
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divImg">
                <a href="<?php echo site_base_url();?>category/<?php echo $row['video_type']=="Streaming"?"video_online":"video_offline"; ?>/<?php echo str_replace(" ", "_", $row['recorded_v_title'])."_".$row['recorded_v_id']; ?>">
                <img class="img img-responsive" style="width: 100%; height: 180px;"  src="<?php echo  site_base_url(); ?>uploads/recorded_video/<?php echo $row['image'] ?>" alt="">                
                </a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                <div class="col-lg-12 f_video_bottom">
                    <h5><?php echo $row['recorded_v_title']; ?> </h5>
                </div>
                
                <div class="col-lg-12">
                    <?php echo  $row['total']; ?> Views
                </div>
                    </div>
            </div>-->
        </div>
        <?php } ?>
    </div>    
</div>