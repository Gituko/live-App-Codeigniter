<div class="container">
    <div class="row" style="padding-top:20px; padding-bottom: 20px;   ">
        <div class="col-md-12" style="padding-left: 0px;"><h3> Top Performer</h3></div>
    </div>
    
    <div class="row" id="contenido-rows">
        
        <?php
       // var_dump($video_list);
        foreach($video_list as $k){?>              
            
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 itemCategory" >            
            
            <?php $data['cuadro_video']=array(
                                    "imagen"=>site_base_url().'uploads/user_image/'.($k['image']!=""?$k['image']:"myimage1.png"),
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