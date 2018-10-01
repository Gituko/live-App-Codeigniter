<?php
 function imageupload_with_crop($image_name,$path,$crop_width,$crop_height)
	{
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
							$config['file_name'] = $time."_".$_FILES[$image_name]['name'];
							$config['allowed_types'] = 'gif|jpg|png|jpeg';
							$config['overwrite'] = FALSE;
							$config['encrypt_name'] = FALSE;
							$config['remove_spaces'] = TRUE;
							
							$this->load->library('upload', $config);
							
							if ( ! $this->upload->do_upload($image_name))
							{
								echo 'error';
							}
							else
							{
								
						
								$this->upload->initialize($config);
								
								$source_image=realpath('../uploads/'.$path.'/'.$time."_".$_FILES[$image_name]['name']);
								if(!is_dir('../uploads/'.$path.'/thumb'))
							{
								umask(0);
								mkdir('../uploads/'.$path.'/thumb',0777);
							}
								
								$config = array(
								'image_library' => 'gd2',
								'source_image' => $source_image,//$_FILES[$image_name]['name'],
								'create_thumb' => TRUE,
								'maintain_ratio' => TRUE,
								//'maintain_ratio' => FALSE,
								'width' => $crop_width,
								'height' =>$crop_height,
								'new_image' => '../uploads/'.$path.'/thumb/thumb_'.$time."_".$_FILES[$image_name]['name']
								);
								$this->load->library('image_lib',$config);
								$this->image_lib->initialize($config );
								$this->image_lib->resize();
								$this->load->library('image_lib',$config);
								$this->image_lib->clear();
								
								
								if(!is_dir('../uploads/'.$path.'/thumb1'))
							{
								umask(0);
								mkdir('../uploads/'.$path.'/thumb1',0777);
							}
								
								$config = array(
								'image_library' => 'gd2',
								'source_image' => $source_image,//$_FILES[$image_name]['name'],
								'create_thumb' => TRUE,
								'maintain_ratio' => TRUE,
								//'maintain_ratio' => FALSE,
								'width' => $crop_width,
								'height' =>$crop_height,
								'new_image' => '../uploads/'.$path.'/thumb1/thumb1_'.$time."_".$_FILES[$image_name]['name']
								);
								
								$this->load->library('image_lib',$config);
								$this->image_lib->initialize($config );
								$this->image_lib->crop();
								$this->load->library('image_lib',$config);
								$this->image_lib->clear();
								
								
								
								$config = array(
					'image_library' => 'gd2',
					'source_image' => $_FILES[$image_name]['name'],
					'create_thumb' => FALSE,
					//'maintain_ratio' => TRUE,
					'maintain_ratio' => FALSE,
					'width' => $crop_width,
					'height' =>$crop_height,
					'new_image' => '../uploads/'.$path.'/'.$time."_".$_FILES[$image_name]['name']
					
					
					);
					
				
				$this->image_lib->initialize($config);
				if ( ! $this->image_lib->crop())
				{
				$data['error'] = strip_tags($this->image_lib->display_errors());
				}
							
				$this->image_lib->clear();
								
								
					       }
						   
							$image_name_string=$time."_".$_FILES[$image_name]['name'];
							//image_name_stringunlink($image_name_string);
					 
					}
		
							
							
		return $image_name_string;
		}

?>