<html>
<head>
</head>
<center style="margin:22% 0;"><font size="6" padding-top: 9px;" valign="middle"><b>Your video key is <?=$video_key; ?></font></b><br><br><br><br>
<div id="message"></div>
<input type="submit" value="Finish Steaming" id="myDIV" onClick="return record('<?=$insert_id?>');"/>
</center>
</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
function record(id)
{

	
	$.ajax({
		     type:'GET',
			 url: "<?=site_base_url()?>main/update_add_live_form?id="+id,
			 success:function(response)
			 {
             document.getElementById("myDIV").style.display = "none";
             document.getElementById('message').innerHTML="Your Steaming is Successfully Recorded";
             
			 }
		   });
	

}

</script>

<style> 
#message {
    color: #ff0000;
}
</style>

</html>