<?php require_once "phpuploader/include_phpuploader.php" ?>
<?php

$uploader=new PhpUploader();

$guidarray=explode("/",$_POST["guidlist"]);


if(!is_dir('uploads/arists_video'))
			{
			umask(0);
			mkdir('uploads/arists_video/',0777);
			}

//OUTPUT JSON


$count = $_GET['i'];

foreach($guidarray as $fileguid)
{
	 $mvcfile=$uploader->GetUploadedFile($fileguid);

	if(!$mvcfile)
		continue;
		
		$name =explode('.',$mvcfile->FileName);
        //Moves the uploaded file to a new location.   
         
 $mvcfile->MoveTo("uploads/arists_video"); 
	$data_store = array(
						
						 'video_title'=>$name[0],
						 'video_name'=>$mvcfile->FileName,
						 'artist_id' =>$this->session->userdata('artist_id'),
						 'video_status'=>'Show'
						 
						 );
	 
	 $this->module->insert_video($data_store);
	//process the file here , move to some where
	//rename(...)	
	
		$id=$this->db->insert_id();
	 

	?>
    
    <div class="col-lg-4 col-md-4 col-xs-4 col-xs-4 fv_container">
                                <div class="feature_video_holder">
                                
                                    <div class="media-wrapper">
                                        <video onclick="control_<?=$count?>()" id="myVideo<?=$count?>"  poster="<?php echo base_url(); ?>img/img22.png" width="100%" height="100%" style="max-width:100%;">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($mvcfile->FileName);?>" type="video/mp4">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($mvcfile->FileName);?>" type="video/ogg">
                                        <source src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($mvcfile->FileName);?>" type="video/webm">
                                        <object data="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($mvcfile->FileName);?>" width="470" height="255">
                                        <embed src="<?php echo site_base_url(); ?>uploads/arists_video/<?php echo($mvcfile->FileName);?>" width="470" height="255">
                                        </object>
                                        </video>
                                    
                                    </div>
                                    <div class="f_video_bottom">
                                        <h5><?=$name[0]?></h5>
                                     <a title="Delete" class="delete_btns" onClick="return delete_artist_video(<?php echo $id;?>);" href="#"><i class="fa fa-trash-o"></i></a>
                                        <a title="Edit" class="iframe_review" href="<?=site_base_url();?>edit_video_artist?video_id=<?php echo $id;?>" align="right"><i class="fa fa-pencil"></i></a>    
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            
                      
                      
                            <script>
							function control_<?=$count?>(){
								
								 document.getElementById("myVideo<?=$count?>").controls = true;
								
								}
							</script>
                            
                            
                            
                            
    <?
	
	
	
	
	$count++;
}


?>
<script src="<?php echo base_url(); ?>js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/colorbox.css" />
		
		<script src="<?php echo base_url(); ?>js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
			
				$(".iframe_review").colorbox({iframe:true, width:"50%", height:"50%"});
				
			});
		</script>    
 <script>