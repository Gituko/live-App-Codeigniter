<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php
  $f_n=$furniture_detail[0]['furniture_name'];
 //die;


$url='category_details.php';
$meta_details=$this->module->get_meta_details($url);
//print_r($meta_details);die;
$meta_tag=stripslashes($meta_details[0]['meta_tag']);
$meta_title=stripslashes($meta_details[0]['meta_title']);
?>




<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">
<title><?=$meta_title ?>:<?=$f_n ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
echo $meta_tag;
?>




<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo0.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/multizoom.css" type="text/css">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<?php $this->load->view("header");?>

<?php 
//$furniture_id=$this->uri->segment('2');
$fur=$this->module->furniture_img($furniture_id);?>
	<div id="top_main_body">  	    
		<div class="container">
			<div class="main_body">			
				 <div class="cl_holder">
                	<div class="breadcrumb2">
                    	<ul>
                         <?php $cat_par_name = $this->module->get_cat_name($furniture_detail[0]['category_id']);
						 		$cat_sub_name = $this->module->get_cat_name($furniture_detail[0]['sub_category_id']);
						 
						 ?>
                        	<li><a href="<?php echo site_base_url(); ?>">Home</a> <span class="gapp"></span><i class="fa fa-angle-right"></i></li>
                            <li><a href="<?php echo site_base_url();?>category_listing/<?php echo urlencode(str_replace(" ","_",$cat_par_name[0]['category_name'])).'_'.$cat_par_name[0]['category_id'];?>"><?php echo $cat_par_name[0]['category_name'];?></a> <span class="gapp"></span><i class="fa fa-angle-right"></i></li>
                            <li><a href="<?php echo site_base_url(); ?>product_listing/<?php echo urlencode(str_replace(" ","_",$cat_sub_name[0]['category_name'])).'_'.$cat_sub_name[0]['category_id']; ?>"><?php echo $cat_sub_name[0]['category_name']; ?></a> <span class="gapp"></span><i class="fa fa-angle-right"></i></li>
                            <li>Details</li>
                        </ul>
                    </div>
                    
                </div>
            
                <?
	                        
		$fileImage = "uploads/post_images/detail_images/".$fur[0]['img_path'];
		$img_src = "makeThumbnail.php?file=".$fileImage."&qt=100&w=478&h=290";
		$img_src_thumb = "makeThumbnail.php?file=".$fileImage."&qt=100&w=80&h=94";
		$img_src_large = "makeThumbnail.php?file=".$fileImage."&qt=100&w=1600&h=1200";
		
		
		$fileImage1 = "uploads/post_images/detail_images/".$fur[0]['img_path'];
		$img_src1 = "makeThumbnail.php?file=".$fileImage1."&qt=100&w=478&h=290";
		$img_src_thumb1 = "makeThumbnail.php?file=".$fileImage1."&qt=100&w=80&h=94";
		$img_src_large1 = "makeThumbnail.php?file=".$fileImage1."&qt=100&w=1600&h=1200";
		
		
		?>
                
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 zoom_content">
                    <?php
					if($fur[0]['img_path'] !=""){
					?>
                
                    	<div class="targetarea" style="border:1px solid #dedede;"><img id="multizoom1" alt="zoomable" title="" src="<?php echo $img_src1;?>"></div>
                          <?
					} else{
					?>
                        <div class="targetarea" style="border:1px solid #dedede;"><img id="multizoom1" alt="zoomable" title="" src="<?php echo $img_src;?>"></div>
                        <?
					}
					?>
                                <div class="multizoom1 thumbs">
                                
                                 <?php
			if($fur[0]['img_path'] !=""){
		?>
                                <a href="<?php echo $img_src1;?>" data-large="<?php echo $img_src_large1;?>" data-title="Milla Jojovitch"><img src="<?php echo $img_src_thumb1;?>" alt="Milla" title=""></a> 
                                <?php
			}?>
            
            
            
                                <a href="<?php echo base_url(); ?>img/saleensmall.jpg" data-lens="false" data-large="<?php echo base_url(); ?>img/saleen.jpg" data-title="Saleen S7 Twin Turbo"><img src="<?php echo base_url(); ?>img/saleen_tmb.jpg" alt="Saleen" title=""></a> 
                                 <a href="<?php echo base_url(); ?>img/millasmall.jpg" data-large="<?php echo base_url(); ?>img/milla.jpg" data-title="Milla Jojovitch"><img src="<?php echo base_url(); ?>img/milla_tmb.jpg" alt="Milla" title=""></a> 
                                <a href="<?php echo base_url(); ?>img/saleensmall.jpg" data-lens="false" data-large="<?php echo base_url(); ?>img/saleen.jpg" data-title="Saleen S7 Twin Turbo"><img src="<?php echo base_url(); ?>img/saleen_tmb.jpg" alt="Saleen" title=""></a> 
                                <a href="<?php echo base_url(); ?>img/millasmall.jpg" data-large="<?php echo base_url(); ?>img/milla.jpg" data-title="Milla Jojovitch"><img src="<?php echo base_url(); ?>img/milla_tmb.jpg" alt="Milla" title=""></a> 
                                </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 zoom_right_content">
                    	<div class="detail_right">
                        	<h3><?php echo $furniture_detail[0]['furniture_name'];?></h3>
                       
                            
                            <!--<p>Item ID: <span class="pro_id">0123456</span></p>-->
                            <div class="row_details">
                            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rtp">
                                	<p>Ratings:</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rtp">
                                	<ul>
                                    
                                     <?php  $review = $this->module->get_avg_review($furniture_detail[0]['furniture_id']);
				
for($k=0;$k<5;$k++) {
if($k<$review[0]['avg(rate)'])
{

?>
<li><i class="fa fa-star"></i></li>

<?php } else { ?>
                   
                   <li><i class="fa fa-star-o"></i></li> <?php } }?> 
                                    
                                    
                                    
                                    
                                    
                                    
                                    <!--<li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>-->
                                 <!--   <li class="valu_rating">(4)</li>-->
                                    </ul>
                                </div>
                            </div>
                            
                            <!--<div class="row_details">
                            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rtp">
                                	<p>Check review on:</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rtp">
                                	<ul>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li class="valu_rating">(0)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rtp">
                                	<ul>
                                    <li class="valu_rating2">Review</li>
                                    </ul>
                                </div>
                            </div>-->
                            
                            <div class="rating_review_bottom">
                            	<p>Features:</p>
                                <div class="rrb_features">
                                	
                                	<ul>
                                    	<li class="cspp_color">Case Pieces</li>
                                        <?php
										
										
										$row=explode(",",$furniture_detail[0]['case_pieces']);
										for($i = 0; $i < count($row); $i++){
											?>
                                      <li><i class="fa fa-stop grey"></i><span class="gapp"></span><?php echo $row[$i]?> </li>
                                      <? } ?>
                                    	
                                    </ul>
                            
                                  
                                	<ul>
                                    <li class="cspp_color">Hardware</li>
                                     <?php
                                 	$row=explode(",",$furniture_detail[0]['hardware']);
										for($i = 0; $i < count($row); $i++){
											?>
                                    
                                    	<li><i class="fa fa-stop grey"></i><span class="gapp"></span><?php echo $row[$i]?> </li>
                                        <? } ?>
                                        <!--<li><i class="fa fa-stop grey"></i><span class="gapp"></span>Pendant pulls</li>
                                        <li><i class="fa fa-stop grey"></i><span class="gapp"></span>Backplates in gun metal with copper speckles</li>-->
                                    </ul>
                                    <ul>
                                    	<li class="cspp_color">Finish</li>
                                        <?php
                                 	$row=explode(",",$furniture_detail[0]['finish']);
										for($i = 0; $i < count($row); $i++){
											?>
                                    	<li><i class="fa fa-stop grey"></i><span class="gapp"></span><?php echo $row[$i]?></li>
                                         <? } ?>
                                       <!-- <li><i class="fa fa-stop grey"></i><span class="gapp"></span>3 step process with dry brushed shading</li>
                                        <li><i class="fa fa-stop grey"></i><span class="gapp"></span>rustic characteristics</li>-->
                                    </ul>
                                    <ul>
                                    	<li class="cspp_color">Constraction</li>
                                         <?php
                                 	$row=explode(",",$furniture_detail[0]['constraction']);
										for($i = 0; $i < count($row); $i++){
											?>
                                    	<li><i class="fa fa-stop grey"></i><span class="gapp"></span><?php echo $row[$i]?></li>
                                         <? } ?>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="row_details">
                            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 rtp">
                                	<h4>Best Price:</h4>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 rtp">
                                	<h4 class="total_value">$<?php echo $furniture_detail[0]['furniture_cost']; ?></h4>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 rtp">
                                	<div class="qty_box">
                                    	<input type="text" class="form-control qty" name="search" id="qty" value="1">
                                    </div>
                                	<div class="qty_box">
                                    	<h4>Qty:</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="addtoshop">
                            	<a class="viewcart" href="<?php echo site_base_url();?>confirm_shopping">View Cart</a>
                                <?php   
		  if($this->session->userdata('user_id')){
		$user_id=$this->session->userdata('user_id');
		 
		}else{
			//echo'aaaa';
		
			$user_id='0';
			 //$check_fav = '';
			}
			$check_fav = $this->module->check_fav($furniture_detail[0]['furniture_id'],$user_id);
		 
								//echo "<pre>"; print_r($check_fav); die;
										
										 if(!empty($check_fav)){ ?>
                                              <a onClick="return delete_favourite(<?php echo $check_fav[0]['fav_id'];?>);" class="addtofav2"><i class="fa fa-heart red_color"></i> REMOVE TO LIST</a>
										 <?php }else{ ?>
                                         <a onClick="return add_favourite(<?php echo $furniture_detail[0]['furniture_id'];?>,<?php echo $user_id; ?>);" class="addtofav2"><i class="fa fa-heart-o red_color"></i> ADD TO LIST</a>
                                         <? } ?>
                                        
                                         
                                
                                  
                            	<a class="addtocart" onClick="addtocart(<?php echo $furniture_detail[0]['furniture_id']; ?>,<?php echo $furniture_detail[0]['furniture_cost'];?>)">Add to Cart</a>
                            </div>
                            
                        </div>
                    </div>

			</div>
  <script>
function add_favourite(product_id,user_id)
{
	//alert(product_id);
	//alert(user_id);
	 <?php
				if($this->session->userdata("is_logged_in")!="TRUE"){
				
				
				
				?>
				alert("Please loged in to add the list!!!");
				<?php  ?>
				
			<?php	} else{?>
				
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/add_favorite?product_id="+product_id+"&user_id="+user_id,
		success:function(response){
			location.reload();
			}
 	 });
	<?php } ?>
	
}
</script>
<script>
function delete_favourite(fav_id)
{
	//alert(favourite_id);
	$.ajax({                              
		type: 'POST',
		url: "<?php echo site_base_url();?>main/delete_favorite?fav_id="+fav_id,
		success:function(response){
	    if(response=='true'){
			 alert("Your List Will Be Successfully Delete");
			location.reload();
		 }else{
			 
			alert("Something Is Wrong.Please Try Again"); 
			 }
	
      }
 	 });
}
</script>       
     
<script>
function addtocart(furniture_id,furniture_cost){

	var qty = document.getElementById('qty').value;
	if(qty!='0'){
	 $.ajax({
		type: "POST",
		
		url: "<?php echo site_base_url();?>main/add_to_cart?furniture_id="+furniture_id+"&furniture_cost="+furniture_cost+"&qty="+qty,
		success:function(response){
			//$("")
		  if(response=='true'){
			  
			  window.location.href = '<?=site_base_url()?>shopping_cart';
			  
		  }else{
			  
			  alert("Something Is Worng.Please Try Again!!!");
			  
			  }
		 
			
			}
			
		//data: dataString,
		//cache: false,
		});
	}else{
		
		alert("PLease Enter THe Quantity To Buy")
		}
	
	}
</script>

<script>
function add_to_cart_sub(furniture_id,furniture_cost){

	var qty = document.getElementById('qty').value;
	if(qty!='0'){
	 $.ajax({
		type: "POST",
		
		url: "<?php echo site_base_url();?>main/add_to_cart_sub?furniture_id="+furniture_id+"&furniture_cost="+furniture_cost+"&qty="+qty,
		success:function(response){
			//$("")
		 if(response=='true'){
			  
			  window.location.href = '<?=site_base_url()?>shopping_cart';
			  
		  }else{
			  
			  alert("Something Is Worng.Please Try Again!!!");
			  
			  }
		 
			
			}
			
		//data: dataString,
		//cache: false,
		});
	}else{
		
		alert("PLease Enter THe Quantity To Buy")
		}
	
	}
</script>
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottom_body_container">
                	<ul class="nav2 nav-tabs2">
  <li class="active"><a data-toggle="tab" href="#home">Collection Includes</a></li>
  <li><a data-toggle="tab" href="#menu1">Details</a></li>
   <li><a data-toggle="tab" href="#menu2">Reviews</a></li>
</ul>

<div class="tab-content tab-content2">
  <div id="home" class="tab-pane fade in active">
   <table class="table table-bordered">
    <thead>
      <tr>
        <th class="color">Item</th>
        <th class="color">Price</th>
        <th class="color">Details</th>
         <th class="color">cart</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($relation_id as $row){
	$sub_product_detail = $this->module->get_sub_product_detail($row['collection_id']);
		?>
     <tr>
        <td class="pro_image_holder">
        <?php if($sub_product_detail[0]['sub_product_image']!=''){?>
		<img class="proimages" src="<?php echo base_url(); ?>img/milla.jpg">
        <?php } ?>
		<p><?php echo $sub_product_detail[0]['sub_product_name'];?></p></td>
        <td class="para"><?php echo $sub_product_detail[0]['sub_product_cost']; ?></td>
        <td class="para"><?php echo $sub_product_detail[0]['sub_product_dimenssion'];?></td>
         <td><a class="tableaddtocart" onClick="add_to_cart_sub('<?php echo $sub_product_detail[0]['sub_product_id'];?>','<?php echo $sub_product_detail[0]['sub_product_cost'];?>')">Add to Cart</a></td>
      </tr>
      <?php }?>
      
      
      
    </tbody>
  </table>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h6>Key-Features :</h6>
    <p>
<?=$furniture_detail[0]['furniture_des']?></p>
  </div>
  
  <div id="menu2" class="tab-pane ">
    <h6>Reviews :</h6>
  <?php
	 $product_id=$furniture_detail[0]['furniture_id'];
	$reviews=$this->module->reviews_product($product_id);
	$counting=$this->module->reviews_product_count($product_id);
	 $more_review=count($counting);
	//die;
	if(!empty($reviews)){
	foreach($reviews as $row)
	{
	?>
    
    <li><span class="gapp"></span><?php echo $row['reviews'];?></li>
    <?php
	}
	}
	else{
	
	?>
    <p>There is no review given for this product. </p>
    
   <?php
	}
	if($more_review>10)
   {
   
   ?>
     <a  href="<?=site_base_url();?>reviews?product_id=<?php echo $product_id;?>">More.. </a>
     
     <?php
   }
   ?>
	
   
   
   
   
   
   

  </div>
  
  
</div>
                </div>
                
		</div>
	</div>
</div>

<?php $this->load->view('brand'); ?>

<div id="scroller2">
	<div class="gotop">
		<a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
	</div>
</div> 
 <div style="clear:both"></div>
 
<?php $this->load->view("footer");?>

	<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>js/custom.js"></script>
    

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/multizoom.js"></script>
<script type="text/javascript">
 //<![CDATA[
jQuery(document).ready(function($){

	$('#image1').addimagezoom({ // single image zoom
		zoomrange: [3, 10],
		magnifiersize: [600,600],
		magnifierpos: 'right',
		cursorshade: true,
		largeimage: 'hayden.jpg' //<-- No comma after last option!
	})


	$('#image2').addimagezoom() // single image zoom with default options
	
	$('#multizoom1').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
		descArea: '#description', // description selector (optional - but required if descriptions are used) - new
		speed: 1500, // duration of fade in for new zoomable images (in milliseconds, optional) - new
		descpos: true, // if set to true - description position follows image position at a set distance, defaults to false (optional) - new
		imagevertcenter: true, // zoomable image centers vertically in its container (optional) - new
		magvertcenter: true, // magnified area centers vertically in relation to the zoomable image (optional) - new
		zoomrange: [3, 10],
		magnifiersize: [700,700],
		magnifierpos: 'right',
		cursorshadecolor: '#fdffd5',
		cursorshade: true //<-- No comma after last option!
	});
	
	$('#multizoom2').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
		descArea: '#description2', // description selector (optional - but required if descriptions are used) - new
		disablewheel: true // even without variable zoom, mousewheel will not shift image position while mouse is over image (optional) - new
				//^-- No comma after last option!	
	});
	
})
//]]> 
</script>  
<script type="text/javascript">
//<![CDATA[
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'none')
          e.style.display = 'block';
       else
          e.style.display = 'none';
    }
//]]> 
</script>
</body>
</html>