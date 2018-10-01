<section id="footer">
	<footer class="container-full">
		<div class="container">
			<div class="footer_links">
            	<ul>
                	<li><a href="<?php echo site_base_url()?>aboutus">About us</a></li>
                    <!--<li><a href="#">Videos</a></li>
                    <li><a href="#">Musics</a></li>-->
                    <li><a href="<?php echo site_base_url()?>help">Help</a></li>
                    <li><a href="<?php echo site_base_url()?>termsandcondition">Terms & Conditions</a></li>
                    <li><a href="<?php echo site_base_url()?>privacypolicy">Privacy Policy</a></li>
                    <li><a href="<?php echo site_base_url()?>ad_choice">Ad Choice</a></li>
                </ul>
            </div>
          
<?php
$fb=$this->module->setting_value('facebook link'); 
$fb_link=$fb[0]['setting_value'];



$twitter=$this->module->setting_value('twitter_link'); 
$twitter_link=$twitter[0]['setting_value'];

$linkedin=$this->module->setting_value('linkedin_link'); 
$linkedin_link=$linkedin[0]['setting_value'];




?>
          
          
   
            <div class="footer_social">
            	<ul>
                	<li><a href="<?=$fb_link?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?=$twitter_link?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?=$linkedin_link?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            
            <div class="paypal">
            	<img src="<?php echo base_url(); ?>/site/img/paypal.png" alt="">
            </div>
		</div> <!-- /.container -->

		<div class="clear-bottom copyright ff_bottom">
			<p class="foot_left" style="margin-bottom:0 !important;"> Copyright &copy;<?php echo date("Y");  ?>, All Rights Reserved.</p> <p class="foot_right">Designed and Developed by <a style="color:#fff !important;" href="http://webhawksindia.com" target="_blank">Webhawks Technology</a></p>
		</div> <!-- /.clear-bottom /.copyright -->

	</footer> <!-- /.container-full -->
</section>