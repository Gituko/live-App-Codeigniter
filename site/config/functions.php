<?php

require 'dbconfig.php';

class User {

    function checkUser($uid, $oauth_provider, $username,$email,$twitter_otoken,$twitter_otoken_secret) 
	{
        $query = mysql_query("SELECT * FROM `online_user` WHERE oauth_uid = '$uid' and oauth_provider = '$oauth_provider'") or die(mysql_error());
        $result = mysql_fetch_array($query);
        if (!empty($result)) {
            # User is already present
        } else {
            #user not present. Insert a new Record
            $query = mysql_query("INSERT INTO `online_user` (oauth_provider, oauth_uid, user_name,user_email) VALUES ('$oauth_provider', $uid, '$username','$email')") or die(mysql_error());
			//echo "INSERT INTO `online_user` (oauth_provider, oauth_uid, username,email,twitter_oauth_token,twitter_oauth_token_secret) VALUES ('$oauth_provider', $uid, '$username','$email','','')";
			//echo 1;
			//echo "SELECT * FROM `online_user` WHERE oauth_uid = '$uid' and oauth_provider = '$oauth_provider'";
            $query = mysql_query("SELECT * FROM `online_user` WHERE oauth_uid = '$uid' and oauth_provider = '$oauth_provider'");
            $result = mysql_fetch_array($query);
			//echo "<pre>";
		//print_r($result);
            return $result;
        }
        return $result;
    }

    

}

?>
