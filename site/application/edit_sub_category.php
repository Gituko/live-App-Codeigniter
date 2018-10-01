	<? 
	//session_start();
	include("../includes/applicationtop.php");
	require_once("../includes/authcheck_admin.php");
	
	//$mainimagewidth=600;//684
	//$mainimageheight=500;
	$mainimagewidth=336;
	$mainimageheight=300;
	$thumbimagewidth=307;
	$thumbimageheight=219;


	
	if(isset($_REQUEST['Add']))
	{
		
 if($_FILES['category_image']['name']!='')
	 {
	 	
	  if($_FILES['category_image']['size'] > 0)
			{
				
				
						if(!is_dir('../uploads/category_image/'))
							{
								
							umask(0);
							mkdir('../uploads/category_image/',0777);
							}
						$gallary_name=time()."_".$_FILES['category_image']['name']; 
						$gallaryimage_source=$_FILES['category_image']['tmp_name'];
						$gallaryimage_destination="../uploads/category_image/".$gallary_name;
							
						if(is_uploaded_file($_FILES['category_image']['tmp_name']))
						  {
						   move_uploaded_file($gallaryimage_source,$gallaryimage_destination);
						  }

						  $prefix=time();
						  $srcFile='../uploads/category_image/'.$gallary_name;
						  $handle = @imagecreatefromjpeg($srcFile);
						  $srcWidth = @imagesx($handle);	
						  $srcHeight = @imagesy($handle);
						  $item_pic=$gallary_name;
						  $rev_name=strrev($item_pic);
						  $ext=substr($rev_name,0,3);
						  $rev_file=substr($rev_name,4,strlen($rev_name)-4);
						  $file=strrev($rev_file);
						  
						
						
						 
						if($ext=="jpg" || $ext=="GPJ" || $ext=="FIG" || $ext=="fig"  || $ext=="gnp"  || $ext=="GNP")
						 {
							  
						            $extn=strrev($ext);
						 
									$img_check=$file.".".$extn."";   
								 	$img_path="../uploads/category_image/".$img_check; 
									
									
									//$thumb_check="thumb_".$file.".".$extn."";   
								 	//$thumb_path="../uploads/category_image/"."thumb_".$file;  
									
									 list($srcWidth,$srcHeight) =  getimagesize("../uploads/category_image/".$gallary_name);
									 $info = getimagesize("../uploads/category_image/".$gallary_name);
                                     $mime_type= image_type_to_mime_type($info[2]);
									 
									 
									
									if($srcHeight < $srcWidth)
									{
										
										$ratio=$srcHeight/$srcWidth;
										$dst_height=$mainimagewidth*$ratio;
										////echo $gallary_name."------".$mime_type."------".$extn."-------".$mainimagewidth."--------".$dst_height."--------".$img_path;
										
										
										
									  forceConstraints('../uploads/category_image/'.$gallary_name, $mime_type, $extn, $mainimagewidth, $mainimageheight, $file);
				
				 //echo "kkkk"; exit;
				                       // $ratio_thumb=$srcHeight/$srcWidth;
										//$dst_height_thumb=$thumbimagewidth*$ratio;
									 // forceConstraints('../uploads/category_image/'.$gallary_name, $mime_type, $extn, $thumbimagewidth, $dst_height_thumb, $thumb_path);
									}
									else
									{
										 //echo "mmm"; exit;
										$ratio=$srcWidth/$srcHeight;
										$dst_width=$mainimageheight*$ratio;
										forceConstraints('../uploads/category_image/'.$gallary_name, $mime_type, $extn, $mainimagewidth, $mainimageheight, $file);
										
										//$ratio_thumb=$srcWidth/$srcHeight;
										//$dst_width_thumb=$thumbimageheight*$ratio;
										//forceConstraints('../uploads/category_image/'.$gallary_name, $mime_type, $extn, $dst_width_thumb, $thumbimageheight,$thumb_path); 
										
									}								
									
						   }
				
	             }
  
	 }
		
		
		//$subject_id=addslashes($_REQUEST["subject_id"]);
		$category_name=addslashes($_REQUEST['sub_category_name']);
		$category_detail=addslashes($_REQUEST['category_detail']);
		$meta_url=addslashes($_REQUEST['meta_url']);
		$meta_tag=addslashes($_REQUEST['meta_tag']);
		$meta_title=addslashes($_REQUEST['meta_title']);
		$parent_id=addslashes($_REQUEST['parent_id']); 
		
		
		$sql_array=array(
						  'parent_id' => $parent_id,
						 'category_name' => $category_name,
						 'category_detail'=> $category_detail, 
						 'meta_url'=> $meta_url, 
						 'meta_tag'=> $meta_tag, 
						 'meta_title'=> $meta_title, 
						 'category_image'=>$gallary_name,   
						 'category_status' => 'Active'
						 );
		
		/*echo "<pre>";
		print_r($sql_array);exit;*/
	
		$objDB = new myDB();					
		$objDB->db_add(TABLE_FURNITURE_CATEGORY,$sql_array);
												
				//echo "aaa"; exit;
		header("location:sub_category_list.php");
	}
	
	if(isset($_REQUEST['Update']))
	{
		
	$hid_id=$_REQUEST['hid_id'];
	$hid_image=$_REQUEST['hid_image'];
	
	
		 
	 if($_FILES['category_image_edit']['name']!='')
	 {
	 	
	  if($_FILES['category_image_edit']['size'] > 0)
			{
						if(!is_dir('../uploads/category_image/'))
							{
							umask(0);
							mkdir('../uploads/category_image/',0777);
							}
						$gallary_name=time()."_".$_FILES['category_image_edit']['name']; 
						
						$gallaryimage_source=$_FILES['category_image_edit']['tmp_name'];
						$gallaryimage_destination="../uploads/category_image/".$gallary_name;
							
						if(is_uploaded_file($_FILES['category_image_edit']['tmp_name']))
						  {
						   move_uploaded_file($gallaryimage_source,$gallaryimage_destination);
						  }

						  $prefix=time();
						  $srcFile='../uploads/category_image/'.$gallary_name;  // subject_image
						  $handle = @imagecreatefromjpeg($srcFile);
						  $srcWidth = @imagesx($handle);	
						  $srcHeight = @imagesy($handle);
						  $item_pic=$gallary_name;
						  $rev_name=strrev($item_pic);
						  $ext=substr($rev_name,0,3);
						  $rev_file=substr($rev_name,4,strlen($rev_name)-4);
						  $file=strrev($rev_file);
						  
						//echo $ext;exit;
						
						 
						if($ext=="gpj" || $ext=="GPJ" || $ext=="FIG" || $ext=="fig"  || $ext=="gnp"  || $ext=="GNP"|| $ext=="png")
						 {
							  
						            $extn=strrev($ext);
						 
									$img_check=$file.".".$extn."";   
								 	$img_path="../uploads/category_image/".$img_check; 
									
									
									
									
									//$thumb_check="thumb_".$file.".".$extn."";   
								 	//$thumb_path="../uploads/category_image/thumb/"."thumb_".$file;  
									
									 list($srcWidth,$srcHeight) =  getimagesize("../uploads/category_image/".$gallary_name);
									 $info = getimagesize("../uploads/category_image/".$gallary_name);
                                     $mime_type= image_type_to_mime_type($info[2]);
									 
									 
									
									if($srcHeight < $srcWidth)
									{
										
										
										$ratio=$srcHeight/$srcWidth;
										$dst_height=$mainimagewidth*$ratio;
										////echo $gallary_name."------".$mime_type."------".$extn."-------".$mainimagewidth."--------".$dst_height."--------".$img_path;
										
										
										//echo '../uploads/category_image/'.$gallary_name;echo "<br>";
										//echo '../uploads/category_image/'.$file;exit;
									  forceConstraints('../uploads/category_image/'.$gallary_name, $mime_type, $extn, $mainimagewidth, $mainimageheight,'../uploads/category_image/'.$file);
				
			//	echo $img_path; exit;
				 //echo "kkkk"; exit;
				                       // $ratio_thumb=$srcHeight/$srcWidth;
										//$dst_height_thumb=$thumbimagewidth*$ratio;
									 // forceConstraints('../uploads/category_image/thumb/'.$gallary_name, $mime_type, $extn, $thumbimagewidth, $dst_height_thumb, $thumb_path);
									}
									else
									{
										 //echo "mmm"; exit;
										$ratio=$srcWidth/$srcHeight;
										$dst_width=$mainimageheight*$ratio;
										forceConstraints('../uploads/category_image/'.$gallary_name, $mime_type, $extn, $mainimagewidth, $mainimageheight, $file);
										
										//$ratio_thumb=$srcWidth/$srcHeight;
										//$dst_width_thumb=$thumbimageheight*$ratio;
										//forceConstraints('../uploads/category_image/thumb/'.$gallary_name, $mime_type, $extn, $dst_width_thumb, $thumbimageheight,$thumb_path); 
										
									}								
									
						   }
				
	             }
				 $path="../uploads/category_image/".$_REQUEST['hid_image'];
				 //$path_thump="../uploads/category_image/thumb/"."thumb_".$_REQUEST['hid_image'];
										if(file_exists($path))
										{
											@unlink($path);
											@unlink($path_thump);
										}	
										
										//echo $path_thump; exit;
										
				$sql_array=array('category_image'=> $gallary_name);
				$objDB = new myDB();
				$objDB->db_update(TABLE_FURNITURE_CATEGORY,$sql_array,"category_id='".$hid_id."'");
  
	 }
	 else
	 {
		 	$gallary_name=$_REQUEST['hid_image'];
	 }
	

		//$subject_id=addslashes($_REQUEST["subject_id"]);
		$category_name=addslashes($_REQUEST['sub_category_name']);
		//$title=addslashes($_REQUEST['title']);
		//$metatag=addslashes($_REQUEST['metatag']);
		$category_detail=addslashes($_REQUEST['category_detail']);
		$meta_url=addslashes($_REQUEST['meta_url']);
		$meta_tag=addslashes($_REQUEST['meta_tag']);
		$meta_title=addslashes($_REQUEST['meta_title']);
		
	
	//
	    $sql_array=array(
						 'category_name' => $category_name,
						 'category_detail'=> $category_detail, 
						 'meta_url'=> $meta_url, 
						 'meta_tag'=> $meta_tag,
						 'meta_title'=> $meta_title,
						 'category_image'=>$gallary_name,
						 'category_status' => 'Active'
						 );
		
	
		$objDB = new myDB();
		$objDB->db_update(TABLE_FURNITURE_CATEGORY,$sql_array,"category_id='".$hid_id."'");
		
			//echo "kkk"; exit;
			
		header("location:sub_category_list.php");
	}
	
	 
	$category_id=$_REQUEST['edit'];
	
	if($category_id!='')
	{
	/*$parent_list=getRecord(TABLE_FURNITURE_CATEGORY,$category_id,"parent_id","*","","","","","")
	//$parent_id=$parent_list[0]['parent_id'];
	$parent_name=$parent_list[0]['category_name'];*/
	
	$cat_list=getRecord(TABLE_FURNITURE_CATEGORY,$category_id,"category_id","*","","","","","");
	$category_id=$cat_list[0]['category_id'];
	$parent_id=$cat_list[0]['parent_id'];
	$category_name=$cat_list[0]['category_name'];
	$meta_url=$cat_list[0]['meta_url'];
	$meta_tag=$cat_list[0]['meta_tag'];
	$meta_title=$cat_list[0]['meta_title'];
	$category_image=$cat_list[0]['category_image'];
	$category_detail=$cat_list[0]['category_detail'];
	
																																												
	}
	
	//$food_type_list=getRecord(TABLE_SUBJECT,"","","*","1=1 and subject_status='Active'","","","","");parent_id
	
			
	?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="all">

<!-- jquery-ui Stylesheets -->
<link rel="stylesheet" href="assets/jui/css/jquery-ui.css" media="screen">
<link rel="stylesheet" href="assets/jui/jquery-ui.custom.css" media="screen">
<link rel="stylesheet" href="assets/jui/timepicker/jquery-ui-timepicker.css" media="screen">

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="plugins/uniform/css/uniform.default.css" media="screen">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- CLEditor -->
<link rel="stylesheet" href="plugins/cleditor/jquery.cleditor.css" media="screen">


<link rel="stylesheet" href="assets/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" href="assets/css/main-style.css" media="screen">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>MELNICK FURNITURE</title>   

</head>

<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="true">

    <!--<div id="customizer">
        <div id="showButton"><i class="icon-cogs"></i></div>
        <div id="layoutMode">
            <label class="checkbox"><input type="checkbox" class="uniform" name="layout-mode" value="boxed"> Boxed</label>
        </div>
    </div>-->
    
	 <!--<div id="style-changer"><a href="../creative/index.html"></a></div>-->

    <div id="wrapper">
    
      <?php include('header.php');?>
        
        <div id="content-wrap">
        	<div id="content">
            	<div id="content-outer">
                	<div id="content-inner">
               	    <?php include('left_menu.php');?>
           	      <div id="sidebar-separator"></div>
                        
                        <section id="main" class="clearfix">
                        	<div id="main-header" class="page-header">
                            	<ul class="breadcrumb">
                                <li><i class="icon-home"></i>Melnick Frame<span class="divider">&raquo;</span></li>
                                <li>Sub Category </li>
                                </ul>
                                

                                <h1 id="main-heading">
                            Add Sub Category<span>.....</span>
                                <span class="control-group">
                                
                                </span></h1>
                            </div>
                            
                            <div id="main-content">
							
								<div class="row-fluid">
								
									<div class="row-fluid">
                                	<div class="span12 widget">
                                        <div class="widget-header">
                                            <span class="title"><i class="icon-resize-horizontal"></i> Add Sub Category</span>
                                        </div>
                                        <div class="widget-content form-container">
                                           
                                            <form id="validate-Sub_Category" class="form-horizontal" method="post" name="cus_form" enctype="multipart/form-data" >  						
                                     
                                     
                                     
                                                
                                                <div class="control-group">
                                                    <label class="control-label" for="input01">Category Name</label>
                               <?
								$cat_list=getRecord(TABLE_FURNITURE_CATEGORY,1 ,"1","*","and parent_id='0'","","","","");
                                ?>
                                                    <div class="controls">
                                                         <select class="span12" name="parent_id" id="parent_id">
                                  <option value="">Select Category</option>
                                  <? foreach($cat_list as $key => $value)
                                                             {
                                                          ?>
                                  <option value="<?=$value['category_id']?>" <? if($value['category_id']==$parent_id){ echo "selected"; } ?> >
                                    <?=$value['category_name']?>
                                  </option>
                                  <? } ?>
                                </select>
                                                        <p class="help-block"></p>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                    <div class="control-group">
                                                    <label class="control-label" for="input01">Sub Category Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="span12" id="sub_category_name" name="sub_category_name" value="<?=stripslashes($category_name)?>">
                                                        <p class="help-block"></p>
                                                    </div>
                                                </div>    
                                                <div class="control-group">
                                                    <label class="control-label" for="input01">Sub Category URL</label>
                                                    <div class="controls">
                                                        <input type="text" class="span12" id="meta_url" name="meta_url" value="<?=$meta_url?>">
                                                        <p class="help-block"></p>
                                                    </div>
                                                </div>        
                                                
                                                
                                                   <div class="control-group">
                                                    <label class="control-label" for="input01">Meta Tag</label>
                                                    <div class="controls">
                                                        <textarea  name="meta_tag" style="width:97%"><?=stripslashes($meta_tag)?></textarea>
                                                        <p class="help-block"></p>
                                                    </div>
                                                </div>
												<div class="control-group">
                                                    <label class="control-label" for="input01">Meta Title</label>
                                                    <div class="controls">
                                                        <input type="text" class="span12" id="meta_title" name="meta_title" value="<?=$meta_title?>">
                                                        <p class="help-block"></p>
                                                    </div>
                                                </div>                   
                                                                                            
                                                 <? 
												if($_REQUEST['edit']!='' )
												{
												?>
                                          <div class="control-group">
                                                    <label class="control-label" for="input04">Sub Category Image</label>
                                                    <div class="controls">
                                                        <input class="input-file" id="category_image_edit" name="category_image_edit" type="file" data-provide="fileinput">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../uploads/category_image/<?=$category_image?>" width="150" border="10px;"><p class="help-block">For best view upload 600*500</p>
                                                    </div>
                                                </div>
                                                <? 
												}
												else
												{
												?>
                                                <div class="control-group">
                                                    <label class="control-label" for="input04">Sub Category Image</label>
                                                    <div class="controls">
                                                        <input class="input-file" id="category_image" name="category_image" type="file" data-provide="fileinput"><p class="help-block">For best view upload  600*500 </p>
                                                    </div>
                                                </div>
                                                <? 
												} 
												?>
                                                
                                                
                                                <div class="control-group">
                                              <label class="control-label" for="input05">Sub Category Details</label>
                                                    <div class="controls">
                                                      <textarea id="cleditor" name="category_detail"><?=stripslashes($category_detail)?>
                                                      </textarea>
                                                    </div>
                                          </div>
                                          
                                         <!-- <div class="control-group">
                                                    <label class="control-label" for="input01">Title</label>
                                                    <div class="controls">
                                                        <input type="text" class="span12" id="title" name="title" value="<?=stripslashes($title)?>">
                                                        <p class="help-block"></p>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="control-group">
                                                    <label class="control-label" for="input01">Metatag</label>
                                                    <div class="controls">
                                                       <textarea name="metatag" class="span12" ><?=stripslashes($metatag)?></textarea>
                                                        <p class="help-block"></p>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="control-group">
                                              <label class="control-label" for="input05">Category Overview</label>
                                                    <div class="controls">
                                                      <textarea id="cleditor" name="subject_desc"><?=stripslashes($subject_desc)?>
                                                      </textarea>
                                                    </div>
                                          </div>-->
                                                  <div class="form-actions">
                                          <? if($_REQUEST['edit']!='')
										  {?>
										  <button type="submit" name="Update" value="Submit" class="btn btn-primary">Update</button>
                                          <input type="hidden" name="hid_id" id="hid_id" value="<?=$category_id?>" >
                                           <input type="hidden" name="hid_image" id="hid_image" value="<?=$category_image?>" >
										  <? }
										  else
										  {?>
                                          <button type="submit" name="Add" value="Submit" class="btn btn-primary">Add</button>
                                          <? 
										  }
										  ?> 
                                                    
                                                </div>
                                            </form>
                                        </div>
    	                            </div>
                                </div>
								
								
								
								
								
								
								
								
								
								
								</div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
      <?php include('footer.php');?>
        
    </div>



	<!-- Core Scripts -->
	<script src="assets/js/libs/jquery-1.8.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/libs/jquery.placeholder.min.js"></script>
	<script src="assets/js/libs/jquery.mousewheel.min.js"></script>
    
    <!-- Template Script -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/setup.js"></script>

    <!-- Customizer, remove if not needed -->
    <script src="assets/js/customizer.js"></script>

    <!-- Uniform Script -->
    <script src="plugins/uniform/jquery.uniform.min.js"></script>

    <!-- jquery-ui Scripts -->
    <script src="assets/jui/js/jquery-ui-1.9.1.min.js"></script>
    <script src="assets/jui/jquery-ui.custom.min.js"></script>
    <script src="assets/jui/timepicker/jquery-ui-timepicker.min.js"></script>
	<script src="assets/jui/jquery.ui.touch-punch.min.js"></script>
    
    <!-- Plugin Scripts -->
     <!-- Plugin Scripts -->

    <!-- Bootstrap FileInput -->
    <script src="custom-plugins/bootstrap-fileinput.min.js"></script>

	<!-- Select2 -->
	<script src="plugins/select2/select2.min.js"></script>

	<!-- Validation -->
	<script src="plugins/validate/jquery.validate.min.js"></script>

    <!-- Demo Scripts -->
    <script src="assets/js/demo/form_validation.js"></script>
    <!-- CLEditor -->
    <script src="plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="plugins/cleditor/jquery.cleditor.icon.min.js"></script>
    <script src="plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>

    <!-- Demo Scripts -->
    <script src="assets/js/demo/wysiwyg.js"></script>

</body>

</html>
