<?php
//modelo creado 
//$data["cuadro_video"]=array("imagen","nombre","artista","views","imagen_enlace","enlcace_user_profile");
$row=$cuadro_video;
?>
<div class="row cuadro_video">
    <div class="col-lg-12 text-center imagen">
        <a href="<?php echo $row['imagen_enlace']; ?>">
        <img class="img img-responsive" src="<?php echo $row['imagen'];?>">
        </a>
    </div>
    <div class="col-lg-12 text-left nombre"><?php echo $row['nombre']; ?></div>
    <div class="col-lg-12 text-left artista"><a href="<?php echo $row['enlcace_user_profile']; ?>"><?php echo $row['artista']; ?> </a></div>
    <div class="col-lg-12 text-left views "><?php echo $row['views']; ?> <span>Views</span></div>    
    <div class="col-lg-12">
        <div class="f_video_bottom">
                                        <h5><a href="<?=site_base_url();?>panel/recorded_video/artist_message_video/<?=urlencode(str_replace(" ","_",$row['recorded_v_title']))._.$row['recorded_v_id']?>"><?php echo substr($row['recorded_v_title'],0,20) .$more_pop;?></a>
                                         <a title="Delete" class="delete_btns" onClick="return delete_recorded_video(<?php echo $row['recorded_v_id'];?>);" href="#"><i class="fa fa-trash-o"></i></a>
                                        
                                        <a title="Edit" class="iframe_review" href="<?=site_base_url();?>edit_recorded_video?recorded_id=<?php echo $row['recorded_v_id'];?>" align="right"><i class="fa fa-pencil"></i></a>
                                        </h5>
                                    </div>
    </div>
</div>
