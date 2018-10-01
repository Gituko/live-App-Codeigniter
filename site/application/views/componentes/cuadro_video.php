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
</div>
