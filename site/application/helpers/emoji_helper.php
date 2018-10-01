<?php
class Emoji {
    /**
     * Define el tipo de mensaje mostrado
     * @var type error,success,information,warning
     */
    

    function parseString($string ) {
         $CI = get_instance();
         $CI->load->model('module');
	 $main_array = array(); //Your array that you want to push the value into
         $module=new Module();
         $emoji_details=$module->geting_emoji();
	 foreach($emoji_details as $row){ 	
	 $key=$row['emoji_text'];
	 $my_smilies[$key]='<img style="display:inline" src="'.site_base_url().'uploads/emoji_image/thumb/thumb_'.$row['emoji_image'].'" alt="" />';
			 }
	
	
	return str_replace( array_keys($my_smilies), array_values($my_smilies), $string);
    }

}
?>