<link rel="stylesheet" href="<?php echo base_url(); ?>libreriasJS/video_player/css/style.css">

<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
   <!--  <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol> 
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item">
			 <img src="<?php echo base_url(); ?>img/slider/3.jpg" alt="Los Angeles" style="width:100%;">
			  
		</div> 
		
		<div class="item">
			 <img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="Los Angeles" style="width:100%;">
		</div>
		
		<div class="item">
			 <img src="<?php echo base_url(); ?>img/slider/2.jpg" alt="Los Angeles" style="width:100%;">
		</div>
		
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
</div>




  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.js'></script>

  

  <script src="<?php echo base_url(); ?>js/jsCarousel.js"></script>
    <script  src="js/index.js"></script>




















 <!--

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="videoContainer" style="margin: 0px; padding: 0px;">
            
            <video preload="none" playsinline iphone-inline-video webkit-playsinline webkit-playsinline="true" playsinline="true"  autoplay id="video" style="width: 100%; height: auto" poster="<?php echo site_base_url() ?>site/img/videoPrincipal.png"  controlsList="nodownload" >
                <source src="<?php echo site_base_url(); ?>uploads/admin_video/<?php echo str_replace(" ","_",$video_admin[0]['video']);?>" type="video/mp4"> 

                <p>
                  Your browser doesn't support HTML5 video.
                  <a href="video/video.mp4">Download</a> the video instead.
                </p>
            </video>
           <div id="videoControls" style="position: absolute; top: 20px">
                <input type="range" id="progressBar" value="0">
                <span id="progress"></span>	
                <div id="buttonControls">	
                    <button id="play"><img id="playImg" src="<?php echo base_url(); ?>libreriasJS/video_player/icons/pause-icon.png" alt="The play icon"></button>
                    <span id="duration">00:00 / 00:00</span> 
                    <button id="fastFwd">1x Speed</button>						    			    
                    <button id="fullScreen"><img id="fullScreenImg" src="<?php echo base_url() ?>libreriasJS/video_player/icons/fullscreen-icon.png" alt="The fullscreen icon"></button>
                    <input type="range" id="volumeSlider" min="0" max="1" step="0.01" value="1">  
                    <button id="mute"><img id="muteImg" src="<?php echo base_url(); ?>libreriasJS/video_player/icons/volume-on-icon.png" alt="The mute icon"></button>				    
                </div>   	
            </div> -->
            <script>
            $(document).ready(function(){
                $("#video").on("click",function(){
                    var videoAd=$("#video");
                    videoAd.trigger("play");
                    //alert("asdfas");
                });
            });
            </script>

		    <!-- Video Controls -->
                    
  

            </div>
<!--       <div class="col-md-12" id="videoContainer"> 
    <div id="video"  class="col-lg-12 " style="padding-left: 0px; padding-right: 0px;">
        <video autoplay   controlsList="nodownload" poster="<?php echo base_url(); ?>img/videoPrincipal.png"    id="videoPromotion"  class="videoFullScreen"> 
            <source src="<?php echo site_base_url(); ?>uploads/admin_video/<?php echo str_replace(" ","_",$video_admin[0]['video']);?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
        <div id="videoControls" style="position:absolute;">
				<input type="range" id="progressBar" value="0">
				<span id="progress"></span>	
					<div id="buttonControls">	
                                            <button id="play"><img id="playImg" src="<?php echo base_url(); ?>libreriasJS/video_player/icons/pause-icon.png" alt="The play icon"></button>
					    <span id="duration">00:00 / 00:00</span> 
					    <button id="fastFwd">1x Speed</button>						    			    
                                            <button id="fullScreen"><img id="fullScreenImg" src="<?php echo base_url() ?>libreriasJS/video_player/icons/fullscreen-icon.png" alt="The fullscreen icon"></button>
					    <input type="range" id="volumeSlider" min="0" max="1" step="0.01" value="1">  
                                            <button id="mute"><img id="muteImg" src="<?php echo base_url(); ?>libreriasJS/video_player/icons/volume-on-icon.png" alt="The mute icon"></button>				    
					</div>   	
			</div>
       </div>-->
</div>
    <script> 
//    function verVideo(){
//       $("#divimgVideo").removeClass("d-xs-block").removeClass("d-sm-block").addClass("d-xs-none").addClass("d-sm-none").addClass("d-none");
//      // $("#videoPromotion").click();
//       $("#divvideoPrincipal").removeClass("d-none").removeClass("d-sm-none").removeClass("d-md-block")
//               .removeClass("d-lg-block").removeClass("d-xl-block");
//    }
    </script>
    <div class="row">
        
<!--        <pre>
            <?php //var_dump($videos_recorded); ?>
        </pre>-->
            
        <div class="MultiCarousel" data-items="1,2,4,4" data-slide="1" id="MultiCarousel"  data-interval="1000" style="padding-bottom: 0px;">
            <div class="MultiCarousel-inner">                
                <?php foreach ($videos_recorded as $k) {
                     $artista=$this->stream->find("stream\stream_artist",$k['artist_id']);
                    $imagen=($k['image']!="")?
                    site_base_url().'uploads/recorded_video/'.$k['image']:
                    site_base_url()."uploads/user_image/".$artista->image;
                    $imagen=($imagen=="")?base_url()."img/logo3.png":$imagen;
                    ?>   
                    <div class="item ">                        
                            
                                <?php
//                                $data["cuadro_video"]=array("imagen","nombre","artista","views");
                                $data['cuadro_video']=array(
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
            <button class="btn  leftLst" style="color: white;background: #393e3e;
    border: 0px;"><</button>
    <button class="btn  rightLst" style="color: white; background: #393e3e;
    border: 0px;">></button>
        </div>
    </div>
</div>


<script src="<?php echo base_url(); ?>libreriasJS/video_player/js/app.js"></script>
<script>
$(document).ready(function(){
        var windowHeight=$(window).height();
        var htmlHeigth=$("html").height();
        console.log(windowHeight);
        console.log(htmlHeigth);
        if(htmlHeigth>windowHeight){
            $("#flechaAbajo").css({"display":"inline"}); 
            console.log("ir arriva es show");
        }
	$('#flechaAbajo').click(function(){
		$('body, html').animate({
			scrollTop:htmlHeigth
		}, 300);
	});
	$('#flechaArriba').click(function(){
		$('body, html').animate({
			scrollTop:"0px"
		}, 300);
	});
        
        var htmlHeighMaxshow=htmlHeigth-750;
	$(window).scroll(function(){
		if( $(this).scrollTop() < htmlHeighMaxshow ){
			$('#flechaAbajo').show();
                        $('#flechaArriba').hide();
		} else {
			$('#flechaAbajo').hide();
			$('#flechaArriba').show();
		}
	});
 
});
</script>