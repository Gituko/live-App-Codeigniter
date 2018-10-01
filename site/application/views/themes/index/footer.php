<?php
$page_content_status=$this->module->page_all_page_content();
//$array_content_status=array();
//foreach ($page_content_status as $k){
//    $array_content_status[$k['page_title']]=$k['status'];
//}
// $active="Active";
?>

<section id="footer">
	<footer class="container-full">
		<div class="container">
                    <div class="row">
                        <div class="col-1g-12">
                            <style>
                                .ir-arriba {
                                    display:none;
                                    padding:5px;
                                    background:#024959;
                                    font-size:20px;
                                    color:#fff;
                                    cursor:pointer;
                                    position: fixed;
                                    bottom:20px;
                                    right:20px;
                                    opacity: 0.5;
                                    filter: alpha(opacity=50); 
                                }
                            </style>
                            <span id="flechaAbajo" class="ir-arriba icon-arrow-up2">
                                <img src="<?php echo  base_url() ?>img/arrow-down-01-48.png">
                            </span>
                            <span id="flechaArriba" class="ir-arriba icon-arrow-up2"><img src="<?php echo base_url() ?>img/arrow-up-01-48.png"></span>
                        </div>
                        <div class="col-lg-12">
			<div class="footer_links">
                            <ul>
                                <?php foreach ($page_content_status as $k) {?>
                                <li><a href="<?php echo site_base_url()?>page_content/index/<?php echo str_replace(" ","_",$k['page_title']); ?>/<?php echo $k['page_id']; ?>"><?php echo $k['page_title']; ?></a></li>
                                <?php }?>
                            </ul>
<!--            	<ul>
                    <?php if($array_content_status['About Us']==$active){ ?><li><a href="<?php echo site_base_url(); ?>about_us/index">About us</a></li><?php } ?>
                    <?php if($array_content_status['Help']==$active){ ?><li><a href="<?php echo site_base_url(); ?>help/index">Help</a></li><?php }?>
                    <?php if($array_content_status['Terms and Condition']==$active){ ?><li><a href="<?php echo site_base_url(); ?>terms_and_condition/index">Terms &amp; Conditions</a></li><?php }?>
                    <?php if($array_content_status['Privacy']==$active){ ?><li><a href="<?php echo site_base_url(); ?>privacy_policy/index">Privacy Policy</a></li><?php } ?>
                    <?php if($array_content_status['Ad Choice']==$active){ ?><li><a href="<?php echo site_base_url(); ?>ad_choice/index">Ad Choice</a></li><?php } ?>
                </ul>-->
            </div>
          <?php 
          $fb_link=$this->module->setting_value('facebook link')[0]['setting_value'];
            $twitter_link=$this->module->setting_value('twitter_link')[0]['setting_value'];
            $linkedin_link=$this->module->setting_value('linkedin_link')[0]['setting_value'];
            
            ?>
            <div class="footer_social">
            	<ul>
                	<li><a href="<?php echo $fb_link; ?> " target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $linkedin_link; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            
            <div class="paypal">
            	<img src="<?php echo site_base_url()?>site/img/paypal.png" alt="">
            </div>
                        </div>
                        </div>
		</div> <!-- /.container -->

		<div class="clear-bottom copyright ff_bottom">
			<p class="foot_left" style="margin-bottom:0 !important;"> Copyright ©2018, All Rights Reserved.</p> <p class="foot_right">Designed and Developed by <a style="color:#fff !important;" href="http://webhawksindia.com" target="_blank">Webhawks Technology</a></p>
		</div> <!-- /.clear-bottom /.copyright -->

	</footer> <!-- /.container-full -->
</section>    

   

    <!-- Bootstrap core JavaScript -->
    <!--<script src="<?php ?>vendor/jquery/jquery.min.js"></script>-->
   
  </body>

</html>