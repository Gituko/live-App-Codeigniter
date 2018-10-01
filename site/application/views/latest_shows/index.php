<div class="container">
    <div class="row" style="padding-top:20px; padding-bottom: 20px;   ">
        <div class="col-md-12" style="padding-left: 0px;"><h3> Latest Shows</h3></div>
    </div>
    
    <div class="row" id="contenido-rows">
        
        <?php
       // var_dump($video_list);
        foreach($video_list as $k){?>              
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 itemCategory" >            
            
            <?php $data['cuadro_video']=array(
                                    "imagen"=>site_base_url().'uploads/recorded_video/'.($k['image']!=""?$k['image']:"myimage1.png"),
                                    "imagen_enlace"=>site_base_url().'category/video_offline/'.urlencode(str_replace(" ", "_", $k['recorded_v_title'])) . _ . $k['recorded_v_id'],                                    
                                    "nombre"=>$k['recorded_v_title'],
                                    "artista"=>$k['name'],
                                    "views"=>$k['total'],
                                    "enlcace_user_profile"=>site_base_url()."artist_detail/index/".  str_replace(" ","_", $k['name'])."_".$k['artist_id']
                                );
                                $this->load->view("componentes/cuadro_video",$data);
?>  
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divImg">
                <a href="<?php echo site_base_url();?>category/video_offline/<?php echo str_replace(" ", "_", $row['recorded_v_title'])."_".$row['recorded_v_id']; ?>">
                <img class="img img-responsive" style="width: 100%; height: 180px;"  src="<?php if($row['image']!=""){ echo  site_base_url(); ?>uploads/user_image/<?php echo $row['image'];}else{ echo "https://luxurylimosonline.com/wp-content/uploads/2017/04/2000px-No_image_available.svg_.png";} ?>" alt="">                
                </a>
            </div>-->
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                <div class="col-lg-12 f_video_bottom">
                    <h5><?php echo $row['name']; ?> </h5>
                </div>
                
                <div class="col-lg-12">
                    <?php echo  $row['total']; ?> Viewer
                </div>
                    </div>
                <div class="f_video_bottom">
                <h5><?php echo $row['recorded_v_title']; ?> </h5>
                
                <p title="Price">
                    <b><?php echo $row['recorded_video']!="0"?$row['recorded_video']:"Free" ?></b>
                </p>
                <div class="vdodetel_bottom">
                    <span class="vdodetel_vew"><p><?php echo  $row['total']; ?> viewer</p></span>
                    
                </div>
                </div>
            </div>-->
        </div>
        <?php } ?>
    </div>    
</div>