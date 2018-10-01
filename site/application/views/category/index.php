<div class="container" style="margin-top:5em;">
    <div class="row" style="padding-top:80px; padding-bottom: 20px;   ">
        <div class="col-md-4" style="padding-left: 0px;"><h3> <?php echo $category; ?> </h3></div>
        <div class="col-md-3">
            
                    <?php if(isset($_GET['type']) && isset($_GET['search'])){ 
					
					$url = site_base_url()."video_category?search=".$_GET['search']."&type=".$_GET['type']."&order_by=";
					}else if(isset($_GET['type'])){
					$url = site_base_url()."video_category?1=1&type=".$_GET['type']."&order_by=";	
						}else if(isset($_GET['search'])){
					$url = site_base_url()."video_category?1=1&search=".$_GET['search']."&order_by=";	
						}else{
							
							$url = "?1=1&order_by=";
							}
                                        $order_by=$_GET['order_by'];
				 ?>
            
					
					
					<select id="order_by" class="" onchange="window.location='<?=$url?>'+this.value;" style="width: 150px;margin: 25px;">
			
			
            <!--        <select  id="order_by"  class="form-control"  onChange="window.location='<?=$url?>'+this.value;">
                    -->
					
					
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
       // var_dump($video_list);
        foreach($video_list as $k){
            $artista=$this->stream->find("stream\stream_artist",$k['artist_id']);
            $imagen=($k['image']!="")?
                    site_base_url().'uploads/recorded_video/'.$k['image']:
                    site_base_url()."uploads/user_image/".$artista->image;
            $imagen=($imagen=="")?base_url()."img/logo3.png":$imagen;
            ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 itemCategory" >
            <?php $data['cuadro_video']=array(
                                    "imagen"=>$imagen,
                                    "imagen_enlace"=>site_base_url().'category/video_offline/'.urlencode(str_replace(" ", "_", $k['recorded_v_title'])) . _ . $k['recorded_v_id'],                                    
                                    "nombre"=>$k['recorded_v_title'],
                                    "artista"=>$k['name'],
                                    "views"=>$k['total'],
                                    "enlcace_user_profile"=>site_base_url()."artist_detail/index/".  str_replace(" ","_", $k['name'])."_".$k['artist_id']
                                );
                $this->load->view("componentes/cuadro_video",$data);
?>  
        </div>            
   
        <?php } ?>
    </div>    
</div>