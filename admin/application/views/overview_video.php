<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>streaming:overview recorded video</title>
</head>

<?php
 $recorded_v_title=stripslashes($details[0]['recorded_v_title']);
 $recorded_v_overview=stripslashes($details[0]['recorded_v_overview']);
 $video_tags=stripslashes($details[0]['video_tags']);
 $category_id=stripslashes($details[0]['category_type']);
 $category_name=$this->module->get_category_name($category_id);
 //print_r($category_name);die;
 
 //---------------For normal video-----------------------
 
  $video_title=stripslashes($detailss[0]['video_title']);
 $video_overview=stripslashes($detailss[0]['video_overview']);
 $normal_video_tags=stripslashes($detailss[0]['video_tags']);
 $normal_category_id=stripslashes($detailss[0]['category_type']);
 $normal_category_name=$this->module->get_category_name($normal_category_id);
 
?>
<div >
<?php
if($video_title=='')
{?>
<div style="text-align:left;margin:10px; background-color:#F0FFFF">
<font color="#00BFFF" ><h4>Title:</h4> </font>
<font size="4"><?=$recorded_v_title; ?></font>

</div>
<div style="text-align:left;margin:10px; background-color:#F0FFFF">
<font color="#00BFFF"><h4>Overview:</h4></font>
<font size="4"><?=$recorded_v_overview; ?></font>
</div>
<div style="text-align:left;margin:10px; background-color:#F0FFFF">
<font color="#00BFFF"><h4>Video Tag:</h4></font>
<font size="4"><?=$video_tags; ?></font>
</div>
<div style="text-align:left;margin:10px; background-color:#F0FFFF">
<font color="#00BFFF"><h4>Category Type:</h4></font>
<font size="4"><?=$category_name[0]['category_name']; ?></font>
</div>

<? } else{?>

<div style="text-align:left;margin:10px; background-color:#F0FFFF">
<font color="#00BFFF" ><h4>Title:</h4> </font>
<font size="4"><?=$video_title; ?></font>

</div>
<div style="text-align:left;margin:10px; background-color:#F0FFFF">
<font color="#00BFFF"><h4>Overview:</h4></font>
<font size="4"><?=$video_overview; ?></font>
</div>
<div style="text-align:left;margin:10px; background-color:#F0FFFF">
<font color="#00BFFF"><h4>Video Tag:</h4></font>
<font size="4"><?=$normal_video_tags; ?></font>
</div>
<div style="text-align:left;margin:10px; background-color:#F0FFFF">
<font color="#00BFFF"><h4>Category Type:</h4></font>
<font size="4"><?=$normal_category_name[0]['category_name']; ?></font>
</div>

<? }?>
</div>
<body>
</body>
</html>