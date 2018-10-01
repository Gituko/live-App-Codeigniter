<?php
$type = $this->session->userdata('type');
if ($type == "User") {

    $user_id = $this->session->userdata('user_id');
    $detail = $this->module->get_user_detail($user_id);
} else {

    $user_id = $this->session->userdata('artist_id');
    $detail = $this->module->get_artist_detail($user_id);
}
?>
<div class="panel_holder2">
        <div class="myaccount_titlename">
        <h3>My Account</h3>
    </div>
            <div class="myaccount_images">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 myac_image">
                                	<div class="myac_user">

                                		  <?php if($detail[0]['image']!=''){

	 ?>
                                		 <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" id="file_preview_1">
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png" id="file_preview_1">
       <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 myac_details">
                                	<h6><?php echo $detail[0]['name']; ?></h6>
                                    <div style="clear:both"></div>
                                    <div class="selectfile">

                                         <form action="" method="post" enctype="multipart/form-data" id="myForm1">

    								<div id="yourBtn" onClick="document.getElementById('file_1').click(); return false;">click to upload a file</div>
        							<input type="file" name="file" id="file_1" accept="image" style="visibility: hidden;" >

                                    <input type="hidden" name="imag_name" id="imag_name" value="<?=$detail[0]['image']?>">
 									 </form>


                                    </div>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                             <?php
									$id2=$this->uri->segment(2);

						?>
                            <ul class="nav nav-tabs leftli">
                              <!--  <li><a href="myaccount(step1).html"><i class="fa fa-dashboard myicon blue"></i>Dashboard</a></li>-->

                                <? if($type=="User"){ }else{ ?>

                           <li <?php if($id2=='go_live'){ ?> class='active'<?php }?>><a class="go_live"  href="<?=site_base_url()?>go_live"><i class="fa fa-video-camera myicon blue"></i>Go Live</a></li>


                                <!--<li <?php if($id2=='artist_video'){ ?> class='active'<?php }?>><a href="<?=site_base_url()?>artist_video"><i class="fa fa-video-camera myicon blue"></i>Videos</a></li>-->
                                <li <?php if($id2=='recorded_video'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/recorded_video/index"><i class="fa fa-video-camera myicon blue"></i>Recorded Video</a></li>

                              <li <?php if($id2=='photos'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/photos/index"><i class="fa fa-music myicon blue"></i>Photos</a></li>

                              <!--  <li><a href="myaccount(step4).html"><i class="fa fa-level-up myicon blue"></i>My Profile</a></li>
                                <li><a href="myaccount(step5).html"><i class="fa fa-home myicon blue"></i>Edit Profile</a></li>-->
                                <!--<li><a href="myaccount(step6).html"><i class="fa fa-desktop myicon blue"></i>My Portfolio</a></li>-->
                               <?php /*?>  <li <?php if($id2=='myportfolio'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>myportfolio"><i class="fa fa-user myicon blue"></i>My Portfolio</a></li><?php */?>
                                <!--<li><a href="myaccount(step7).html"><i class="fa fa-laptop myicon blue"></i>Edit Portfolio</a></li>-->
                                <?php /*?><li <?php if($id2=='edit_portfolio'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>edit_portfolio"><i class="fa fa-list-alt myicon blue"></i>Edit Portfolio</a></li><?php */?>


                        <li <?php if($id2=='payment_setting'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/payment_setting"><i class="fa fa-lock myicon blue"></i>Payment Setting</a></li>
                        <li <?php if($id2=='payments'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/payments"><i class="fa fa-lock myicon blue"></i>Payments</a></li>
                        <li <?php if($id2=='store'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/store"><i class="fa fa-lock myicon blue"></i>Store</a></li>
                               <li <?php if($id2=='schedule_time'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/schedule_time"><i class="fa fa-lock myicon blue"></i>Schedule Time</a></li>




                                <? } ?>
                                <!--<li><a href="myaccount(step8).html"><i class="fa fa-user myicon blue"></i>My Profile</a></li>-->
                                <li <?php if($id2=='myprofile'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/myprofile"><i class="fa fa-user myicon blue"></i>My Profile</a></li>
                                <!--<li><a href="myaccount(step9).html"><i class="fa fa-list-alt myicon blue"></i>Edit Profile</a></li>-->
                               <li <?php if($id2=='edit_profile'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/edit_profile"><i class="fa fa-list-alt myicon blue"></i>Edit Profile</a></li>
                               <!--<li <?php if($id2=='setting'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>setting"><i class="fa fa-lock myicon blue"></i>Setting</a></li>-->
                                <!--<li><a data-toggle="tab" href="#menu1"><i class="fa fa-heart myicon blue"></i>Save Properties</a></li>-->
                                <!--<li><a data-toggle="tab" href="#menu4"><i class="fa fa-bell myicon blue"></i>Messages Alert</a></li>-->
                                <li <?php if($id2=='changepassword'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/password_change"><i class="fa fa-lock myicon blue"></i>Change Password</a></li>


                               <?php
							 if($type=="User")
							 {
							   ?>


                             <li <?php if($id2=='user_upgrade'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/user_upgrade"><i class="fa fa-lock myicon blue"></i>Upgrade </a></li>



                              <li <?php if($id2=='user_purchase'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/user_purchase"><i class="fa fa-lock myicon blue"></i>My Purchase</a></li>
                              <li <?php if($id2=='user_private_message'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/store"><i class="fa fa-lock myicon blue"></i>Store</a></li>
                              <li <?php if($id2=='payments'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/payments"><i class="fa fa-lock myicon blue"></i>Payments</a></li>
                               <li <?php if($id2=='user_following'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/user_following_streamer"><i class="fa fa-lock myicon blue"></i>My Following Streamers</a></li>


                               <li <?php if($id2=='user_private_message'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/user_private_message"><i class="fa fa-lock myicon blue"></i>My Personal Messages</a></li>



                              <?php
							 }else{
							  ?>

                     <li <?php if($id2=='stremer_message'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/stremer_message"><i class="fa fa-lock myicon blue"></i>Messages</a></li>




                      <li <?php if($id2=='artist_income'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/artist_income"><i class="fa fa-lock myicon blue"></i>My Income</a></li>

                      <li <?php if($id2=='artist_private_message'){ ?> class='active'<?php }?>><a href="<?php echo site_base_url()?>panel/artist_private_message"><i class="fa fa-lock myicon blue"></i>My Personal Messages</a></li>




                      <?php
							 }
							 ?>


                                <!--<li><a data-toggle="tab" href="#menu8"><i class="fa  fa-gbp myicon blue"></i>Investment Details</a></li>-->
                               <!-- <li><a href="myaccount(step11).html"><i class="fa fa-gears myicon blue"></i>Settings</a></li>-->
                                <!--<li><a data-toggle="tab" href="#menu7"><i class="fa fa-sign-out myicon blue"></i>Login</a></li>-->
                            </ul>

                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <script type="text/javascript" >

	$(document).ready(function(){


					;

						$("#file_1").change(function(){


										 uploadImage1();
													 });



							   });

function uploadImage1() {



    if (typeof FormData !== 'undefined') {


        // send the formData
        var formData = new FormData( $("#myForm1")[0] );


        $.ajax({
            url : '<?php echo site_base_url(); ?>add_user_img',  // Controller URL
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            success : function(data) {
				//alert(data);

				var image="<?=site_base_url()?>uploads/user_image/thumb/"+data.trim();
              $("#file_preview_1").attr('src',image);
			  $("#header_img_1").attr('src',image);
			   $("#header_img_2").attr('src',image);
			 // location.reload();
            }
        });

    } else {
       message("Your Browser Don't support FormData API! Use IE 10 or Above!");
    }
}
		</script>
        <script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
      <link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		<script>
			$(document).ready(function(){

				$(".go_live").colorbox({iframe:true, width:"60%", height:"98%"});

			});
		</script>



