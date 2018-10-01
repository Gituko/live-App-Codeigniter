
<?php
$left_image_add=$this->module->left_add();
foreach($left_image_add as $row)
{
?>



 <div class="add_sec">
                	<a href="#"><img alt="image1" src="<?php echo site_base_url(); ?>left_image/<?php echo $row['image']; ?>"></a>
                </div>
                
                <!-- <div class="add_sec">
                	<a href="#"><img alt="image1" src="<?php echo base_url(); ?>img/add.png"></a>
                </div>
                
                 <div class="add_sec">
                	<a href="#"><img alt="image1" src="<?php echo base_url(); ?>img/add.png"></a>
                </div>
                
                 <div class="add_sec">
                	<a href="#"><img alt="image1" src="<?php echo base_url(); ?>img/add.png"></a>
                </div>
                
                 <div class="add_sec">
                	<a href="#"><img alt="image1" src="<?php echo base_url(); ?>img/add.png"></a>
                </div>
                
                <div class="add_sec">
                	<a href="#"><img alt="image1" src="<?php echo base_url(); ?>img/add.png"></a>
                </div>-->
                
<?php
}
?>