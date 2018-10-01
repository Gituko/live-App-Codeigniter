<?php
 function imageupload_with_crop($image_name,$path,$crop_width,$crop_height)
	{
		
		$CI=&get_instance();
		//echo $image_name,$path,$crop_width,$crop_height;die;
		            if($image_name!='')
					{
						if(!is_dir('../uploads/'.$path.'/'))
							{
								umask(0);
								mkdir('../uploads/'.$path.'/',0777);
							}
		                    
							
							
							$image_source_name=$_FILES[$image_name]['name'];
							//echo $image_source_name;die;
							$time=time();
							
							
						    $config['upload_path'] = '../uploads/'.$path.'/';
							$config['file_name'] = $time."_".str_replace(" ","_",$_FILES[$image_name]['name']);
							$config['allowed_types'] = 'gif|jpg|png|jpeg';
							$config['overwrite'] = FALSE;
							$config['encrypt_name'] = FALSE;
							$config['remove_spaces'] = TRUE;
							
							$CI->load->library('upload', $config);
							
							if ( ! $CI->upload->do_upload($image_name))
							{
								echo 'error';
							}
							else
							{
								
						
								$CI->upload->initialize($config);
								
								$source_image=realpath('../uploads/'.$path.'/'.$time."_".str_replace(" ","_",$_FILES[$image_name]['name']));
								if(!is_dir('../uploads/'.$path.'/thumb'))
							{
								umask(0);
								mkdir('../uploads/'.$path.'/thumb',0777);
							}
								
								$config = array(
								'image_library' => 'gd2',
								'source_image' => $source_image,//$_FILES[$image_name]['name'],
								'create_thumb' => FALSE,
								'maintain_ratio' => FALSE,
								//'maintain_ratio' => FALSE,
								'width' => $crop_width,
								'height' =>$crop_height,
								'new_image' => '../uploads/'.$path.'/thumb/thumb_'.$time."_".str_replace(" ","_",$_FILES[$image_name]['name'])
								);
								$CI->load->library('image_lib',$config);
								$CI->image_lib->initialize($config );
								$CI->image_lib->resize();
								$CI->load->library('image_lib',$config);
								$CI->image_lib->clear();
								
								
								
								
								
								
								$config = array(
					'image_library' => 'gd2',
					'source_image' => $_FILES[$image_name]['name'],
					'create_thumb' => FALSE,
					//'maintain_ratio' => TRUE,
					'maintain_ratio' => FALSE,
					'width' => $crop_width,
					'height' =>$crop_height,
					'new_image' => '../uploads/'.$path.'/'.$time."_".str_replace(" ","_",$_FILES[$image_name]['name'])
					
					
					);
					
				
				$CI->image_lib->initialize($config);
				if ( ! $CI->image_lib->crop())
				{
				$data['error'] = strip_tags($CI->image_lib->display_errors());
				}
							
				$CI->image_lib->clear();
								
								
					       }
						   
							$image_name_string=$time."_".str_replace(" ","_",$_FILES[$image_name]['name']);
							//image_name_stringunlink($image_name_string);
					 
					}
		
							
							
		return $image_name_string;
		}
		
		
		
