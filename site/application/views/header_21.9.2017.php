
<?  $path = mysql_real_escape_string($_SERVER['REQUEST_URI']);
	$cat = explode('/',$path);
	if($cat[2] =='category_page'){
		
		$uri= $path;
		}else{
			
			$uri = site_base_url()."search_page";
			}

?>
<header id="header">
		<section id="headnev" class="navbar topnavbar" >
        <?php
		$page = $this->uri->segment(1);
		if($this->session->userdata("is_logged_in")=="TRUE" && ($page=='myprofile' || $page=='edit_profile' || $page=='password_change' || $page=='recorded_video' || $page=='artist_video' || $page=='photos' || $page=='payment_setting' || $page=='schedule_time'))
		{
			?>
        <a id="filterbtn" href="#" class="filter"><i class="fa fa-filter"></i></a>	
		
		<?php
		}
		?>
        
			<div class="container">
				<div class="navbar-header">
					<!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>-->
					<a href="<?=site_base_url()?>"><img src="<?php echo base_url(); ?>img/logo.png"></a>
				</div> <!-- /.navbar-header -->

				<div class="navbar-collapse">
					<div id='cssmenu'>
                        <ul>
                        <li><a href='<?php echo site_base_url();?>'>Home</a></li>
                        <li class='active'><a href='#'>Category</a>
                        <?php $cat_list = $this->module->get_cat_list($user_id); ?>
                          <ul>
                          <?php foreach($cat_list as $row){ ?>
                             <li><a href='<?php echo site_base_url()?>video_category/<?=$row['category_name'].'_'.$row['category_id']?>'><?=$row['category_name']?></a></li>
                             
                             <?php } ?>
                           
                          </ul>
                        </li>
                        <li><a href='#'>Live</a></li>
                        </ul>
                    </div>
				</div> <!-- /.collapse /.navbar-collapse -->
                
                <div id="dropserch" class="collapse serch_mobile">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mobsearch">
                	<div class="search_box">
                    	<form action="<?=site_base_url();?>video_category" name="search_form" method="get">
                      <?php if(isset($_GET['search'])){
						$search=$_GET['search']; 
						$url=site_base_url()."video_category?search=".$search.'&';
						}else{
						$search=''; 
						$url=site_base_url()."video_category?";
						}?>
                    	<input type="text" class="form-control searchinput" name="search" value="<?=$search?>" id="search" placeholder="Search here">
                        <?php if(isset($_GET['type'])){
						$type1=$_GET['type']; 
						}else{
						$type1='All'; 
						}?>
                        <input type="hidden" class="form-control searchinput" name="type" value="<?=$type1?>">
                        <input type="submit" class="sear_btn"  value=""  onclick="return validation();"> 
                       
                        </form>
                    </div>
                </div>
             <?php
		
			 
			 if($this->session->userdata('is_logged_in')=='1'){
				 
			
	$type = $this->session->userdata('type');
			if($type=="User"){
				
				$user_id = $this->session->userdata('user_id');
				$detail= $this->module->get_user_detail($user_id);
				}else{
					
					$user_id = $this->session->userdata('artist_id');
					$detail= $this->module->get_artist_detail($user_id);
					}
					
				
				 ?>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea2">
                    	<div class="accname">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$type1?><span class="drop"><img src="<?php echo base_url(); ?>img/drop.png"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="<?=$url;?>type=All">All</a></li>
                                     <li><a href="<?=$url;?>type=Streaming">Streaming</a></li>
                                      <li><a href="<?=$url;?>type=Recorded">Recorded</a></li>
                                      <li><a href="<?php echo site_base_url(); ?>online_schedule">Online Schedule</a></li>
                                    
                                </ul>
                            </div>
                        <div class="accountname">
                        	<div class="account_imgthumb">
                            	 <?php if($detail[0]['image']!=''){
	 
	 ?>
                                		 <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" id="header_img_2">
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png" id="header_img_2">
       <?php } ?>
                            </div>
                            <div class="accname">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_base_url(); ?>myprofile"><?=$detail[0]['name']?><span class="drop"><img src="<?php echo base_url(); ?>img/drop.png"></span></a>
                                <ul class="dropdown-menu">
                                    <li><!--<a href="#">Log out</a>--><a href="<?php echo site_base_url(); ?>logout"><i class="fa fa-sign-out myicon blue"></i>Log Out</a></li>
                                     <li><a href="<?php echo site_base_url(); ?>myprofile"><i class="fa fa-user myicon blue"></i>My Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <? }else{ ?>
                
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea">
                    <div class="accname">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$type1?><span class="drop"><img src="<?php echo base_url(); ?>img/drop.png"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="<?=$url;?>type=All">All</a></li>
                                     <li><a href="<?=$url;?>type=Streaming">Streaming</a></li>
                                      <li><a href="<?=$url;?>type=Recorded">Recorded</a></li>
                                    <li><a href="<?php echo site_base_url(); ?>online_schedule">Online Schedule</a></li>
                                </ul>
                            </div>
                    	<a data-toggle="modal" data-target="#myModal" href="#">Log in</a>
                        <a data-toggle="modal" data-target="#myModal_signup" href="#">Sign up</a>
                    </div>
                </div>
                
                <? } ?>
                <div class="spacer"></div>
                </div>
               
               <script>
function validation1()
{
	var search_product = document.getElementById('search1').value;
	
	if(search_product=='')
	{
		alert('Please enter a keyword to search');
		return false;
	}	
}
</script>

  
               <script>
function validation()
{
	var search_product = document.getElementById('search').value;
	
	if(search_product=='')
	{
		alert('Please enter a keyword to search');
		return false;
	}	
}
</script>


               
               
               
               
                
                <div class="non_serch_mobile">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 mobsearch">
                	<div class="search_box">
                   <form action="<?=site_base_url();?>video_category" name="search_form" method="get">
                      <?php if(isset($_GET['search'])){
						$search=$_GET['search']; 
						$url=site_base_url()."video_category?search=".$search.'&';
						}else{
						$search=''; 
						$url=site_base_url()."video_category?";
						}?>
                    	<input type="text" class="form-control searchinput" name="search" value="<?=$search?>" id="search1" placeholder="Search here">
                        <?php if(isset($_GET['type'])){
						$type1=$_GET['type']; 
						}else{
						$type1='All'; 
						}?>
                        <input type="hidden" class="form-control searchinput" name="type" value="<?=$type1?>">
                        <input type="submit" class="sear_btn"  value=""  onclick="return validation1();"> 
                       
                        </form>
                       

                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 mobaccount">
                	<div class="login_myaccountarea2">
                   
                        <div class="accountname accountname2">
                            <div class="accname">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$type1?><span class="drop"><img src="<?php echo base_url(); ?>img/drop.png"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="<?=$url;?>type=All">All</a></li>
                                     <li><a href="<?=$url;?>type=Streaming">Streaming</a></li>
                                      <li><a href="<?=$url;?>type=Recorded">Recorded</a></li>
                                       <li><a href="<?php echo site_base_url(); ?>online_schedule">Online Schedule</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
</div>
                 <?php if($this->session->userdata('is_logged_in')=='1'){ ?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 non_serch_mobile">
                	<div class="login_myaccountarea2">
                    	<!--<div class="notification">
                        	<i class="fa fa-bell white"></i>
                            <span class="count">10</span>
                        </div>-->
                        <div class="accountname">
                        	<div class="account_imgthumb">
                             <?php if($detail[0]['image']!=''){
	 
	 ?>
                                		 <img src="<?php echo site_base_url(); ?>uploads/user_image/thumb/<?php echo $detail[0]['image']; ?>" id="header_img_1">
                                          <?php } else { ?>
       <img src="<?php echo base_url(); ?>img/myimage2.png"  id="header_img_1" >
       <?php } ?>
                            </div>
                            <div class="accname">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_base_url(); ?>myprofile"><?=$detail[0]['name']?><span class="drop"><img src="<?php echo base_url(); ?>img/drop.png"></span></a>
                                <ul class="dropdown-menu">
                                    <li><!--<a href="#">Log out</a>--><a href="<?php echo site_base_url(); ?>logout"><i class="fa fa-sign-out myicon blue"></i>Log Out</a></li>
                                    <li><a href="<?php echo site_base_url(); ?>myprofile"><i class="fa fa-user myicon blue"></i>My Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                  <? }else{ ?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 non_serch_mobile">
                	<div class="login_myaccountarea">
                    	<a data-toggle="modal" data-target="#myModal" href="#" onclick="clear_validation()">Log in</a>
                        <a data-toggle="modal" data-target="#myModal_signup" onclick="clear_validation()"  href="#">Sign up</a>
                    </div>
                </div>
                <? } ?>
                </div>
                 <button data-toggle="collapse" data-target="#dropserch" type="button" class="searchicon">
						<i class="fa fa-search"></i>
					</button>
			</div> <!-- /.container -->	
		</section><!-- /#headnev -->
	</header>
    
         <script>
function signup() {
var user_name = document.getElementById("user_name").value;	
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var repassword = document.getElementById("repassword").value;


  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
	if(user_name==''){
		  $('#error_user_name').html("Please Enter User Name must be required.");

	}else{
		$('#error_user_name').hide();
		}
	if(name==''){
		 $('#error_name').html("Please Enter Name must be required.");
	}else{
		$('#error_name').hide();
		}
	if(email==''){
		$('#error_email').html("Please Enter Name must be required.");
	
	
	}else{
		if(!filter.test(email)){
	
		$('#error_email').html("Please provide a valid email address.");
		//alert('Please provide a valid email address');
	
			}else{
				$('#error_email').hide();
				}
		}
		//alert(password);
	if(password==''){
		$('#error_password').html("Please Enter Password.");
	//alert("Please Enter Password");
	
	}else{
				$('#error_password').hide();
				}
	if(repassword==''){
		$('#error_re_password').html("Please Enter Re password.");
	//alert("Please Enter Re password");

	}else{
		if(repassword!=password){
		$('#error_re_password').html("Re-Type Password Must Be Same");
	//alert("Please Enter Re password");
	
	}else{
		$('#error_re_password').hide();
		}
		
		}
	
	if (document.getElementById('Viewers').checked) {
  role = document.getElementById('Viewers').value;
}
if (document.getElementById('Stremers').checked) {
  role = document.getElementById('Stremers').value;
}



var package='';
/*
if (document.getElementById('free').checked) {
  package = document.getElementById('free').value;
}
if (document.getElementById('feature').checked) {
  package = document.getElementById('feature').value;
}
*/
	
	if(user_name!='' && name!='' && password!='' && repassword!='' && repassword==password && role!='')	
	{
		
	
		if(filter.test(email)){
		$.ajax({
		type: "POST",
		
	url: "<?php echo site_base_url();?>main/signup?user_name="+user_name+"&name="+name+"&email="+email+"&password="+password+"&role="+role+"&package="+package,
		success:function(response){
			//$("")
		//alert(response);
		  //$('#mail').html(response);
		 if(response=="success"){
		
		  $('#error_success').html("Your Registration! is successfully done Confirmation Email has send to your email id.");
		  document.getElementById("name").value='';  
		  document.getElementById("user_name").value='';	
         
           document.getElementById("email").value='';
       document.getElementById("password").value='';
       document.getElementById("repassword").value='';
	   document.getElementById("role").value='';
	    document.getElementById("package").value='';
 
		 }
		 
		 if(response=="successfeature")
		 {
			 location.href="<?php echo site_base_url();?>payment_package";
			 
		 }
		 
		 
		 if(response=="invalid"){
			 $('#error_success').html("Your Enter Email Id Was Already Registrated.Please Enter Another Email Id.");
			 }
		 
			}
		//data: dataString,
		//cache: false,
		});
		
		}
	}
		
}
</script> 
<script>
function login_fuction(){

$('#myModal_signup').modal('hide');  

$('#myModal').modal('show');
}
</script>


<!-- login -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<script>
function login() {

var email_id = document.getElementById("email_id").value;
var password1 = document.getElementById("password1").value;

	if (document.getElementById('Viewers1').checked) {
 var role1 = document.getElementById('Viewers1').value;
}
if (document.getElementById('Stremers1').checked) {
  var role1 = document.getElementById('Stremers1').value;
}

  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(document.getElementById('remember_me').checked){
		var remember_me='1';
		
		}else{
			var remember_me='0';
			
			}
	
	
	
	if(email_id==''){
		$('#error_login_email').html("Please Enter Name must be required.");
	
	
	}else{
		if(!filter.test(email_id)){
	
		$('#error_login_email').html("Please provide a valid email address.");
		//alert('Please provide a valid email address');
	
			}else{
				$('#error_login_email').hide();
				}
		}
		//alert(role1);
	if(password1==''){
		$('#error_login_password').html("Please Enter Password.");
	//alert("Please Enter Password");
	
	}else{
				$('#error_login_password').hide();
				}

	
	
	if(email_id!='' && password1!='' && role1!='')	
	{
		
		
		if(filter.test(email_id)){
		$.ajax({
		type: "POST",
		
	url: "<?php echo site_base_url();?>main/login?email_id="+email_id+"&password1="+password1+"&role1="+role1+"&remember_me="+remember_me,
		success:function(response){
			//$("")
		
	
		//alert(response);
	
		if(response=="Success"){
				
			var path = window.top.location.href;
			
			if(path.includes('/video_category')) {
		
         	window.location.href=path;
		
			}else{
				
				
					
				
		
         	window.location.href="<?php echo site_base_url()?>myprofile";
				}
 
		 }
		 if(response=="Pending"){
			 $('#error_login_success').html("You have not activated your account. Kindly activate your account by going to your Email.");
			 }
			 
			  if(response=="not_succefull"){
			 $('#error_login_success').html("Worng Email Id and Password!.");
			 }
		 
			}
		//data: dataString,
		//cache: false,
		});
		
		}
	}
		
}
</script>
    <!-- login Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <?
     // print_r($_COOKIE);
	  ?>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div class="login_logo">
        	<img src="<?php echo base_url(); ?>img/logo.png" alt="">
        </div>
          <p style="color:#F00" id="error_login_success"></p>
         <div class="form-group">
  			<input type="text" class="form-control login_input" name="email_id" id="email_id" onKeyDown="if (event.keyCode == 13) { return login(); }" value="<?php if(isset($_COOKIE["email_id"])) { echo $_COOKIE["email_id"]; } ?>" required>
            <label class="ani" for="usr">Email id:</label>
             <p style="color:#F00" id="error_login_email"></p>
		</div>
		<div class="form-group">
  			<input type="password" class="form-control login_input" name="password1" id="password1" onKeyDown="if (event.keyCode == 13) { return login(); }" value="<?php if(isset($_COOKIE["password1"])) { echo $_COOKIE["password1"]; } ?>" required>
            <label class="ani" for="pwd">Password:</label>
            <p style="color:#F00" id="error_login_password"></p>
		</div>
         <div class="form-group">
         
  			 <div class="form-group">
        	<label class="role" for="pwd">Role:</label>
          <input type="radio" name="role1" id="Viewers1" value="Viewers" checked >Viewers    
       <input type="radio"  name="role1" id="Stremers1" value="Stremers" > Stremers
     
  		 <p style="color:#F00" id="error_role"></p>
           <!-- 
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>-->
		</div>
		</div>
        <div class="checkbox2">
			<label>
			<input id="remember_me" name="remember_me"  type="checkbox" <?php if(isset($_COOKIE["email_id"])) { ?> checked <?php } ?>><span class="gapp"></span> Remember me
            </label>
       </div>
      
       <div class="checkbox2">
			<label><!--<a href="#">Forgot Your Password?</a>-->
            <a href="<?=site_base_url()?>forget_password">Forgot your password ?</a></label>
       </div>
       <button class="btn btn-default btn-success btn-block login_btn" onClick="login();">Login</button>
      
      </div>
      
      <div class="modal-footer">
        <p>Don't have an account? <a data-toggle="modal" data-target="#myModal_signup" href="#">Sign up</a></p>
      </div>
    </div>

  </div>
</div>
<!-- login -->

<!------------------------------------------- Signup ------------------------------------------------>


<div id="myModal_signup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- signup Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div class="login_logo">
        	<img src="<?php echo base_url(); ?>img/logo.png" alt="">
           
        </div>
          <p style="color:#F00" id="error_success"></p>
  			<div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="user_name" required>
            <label class="ani" for="usr">User Name:</label>
              <p style="color:#F00" id="error_user_name"></p>
			</div>
  			<div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="name" required>
            <label class="ani" for="usr">Full Name:</label>
            <p style="color:#F00" id="error_name"></p>
			</div>
            <div class="form-group">
  			<input type="text" class="form-control login_input" name="user" id="email" required>
            <label class="ani" for="usr">Email:</label>
             <p style="color:#F00" id="error_email"></p>
              
			</div>
			<div class="form-group">
  			<input type="password" class="form-control login_input" name="user" id="password" required>
            <label class="ani" for="pwd">Password:</label>
             <p style="color:#F00" id="error_password"></p>
			</div>
            <div class="form-group">
  			<input type="password" class="form-control login_input" name="user" id="repassword" required>
            <label class="ani" for="pwd">Re-Type Password:</label>
             <p style="color:#F00" id="error_re_password"></p>
			</div>
        <div class="form-group">
        	<label class="role" for="pwd" id="role">Role:</label>
            
       
       <input type="radio" name="role"  onclick="package()" id= "Viewers" value="Viewers" checked>Viewers
       <input type="radio"  name="role" onclick="package()" id= "Stremers" value="Stremers" > Stremers
  		 <p style="color:#F00" id="error_role"></p>
           <!-- 
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>-->
		</div>
      
      
     <!-- <div class="form-group" id="package_detail">
        	<label class="role" for="pwd" id="package">Subscription:</label>
            
       <input type="radio"  name="package"  id= "free" value="Free" checked> Free
       <input type="radio" name="package"  id= "feature" value="Feature">Feature
  		 <p style="color:#F00" id="error_package"></p>
           
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>		</div>-->
      
      
      
       <button class="btn btn-default btn-success btn-block login_btn" onClick="signup();">Sign up</button>
      </div>
      <div class="modal-footer">
       <!-- <p>Already have an account? <a href="#" onClick="login_fuction()" data-toggle="modal" data-target="#myModal" >Log in</a></p>-->
      </div> 
    </div>

  </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
function package(){
	if (document.getElementById('Viewers').checked) {
	$('#package_detail').show()
}
if (document.getElementById('Stremers').checked) {
	$('#package_detail').hide()
  
}
	
	}


    setInterval(function(){ 
		
        //code goes here that will be run every 5 seconds.    
       $.ajax({
            type: "POST",
            url: "<?=site_base_url()?>main/update_logout_time",
            success: function(result) {
                //alert(result);
            }
        });
    }, 300000);



function clear_validation(){
	$('#error_user_name').html('');
	$('#error_name').html('');
		$('#error_email').html('');
		$('#error_password').html('');
		$('#error_re_password').html("");
			$('#error_name').html('');
			$('#error_email').html('');
			$('#error_login_password').html('');
			$('#error_login_email').html('');
			$('#error_login_success').html('');
			$('#error_success').html('');
			
			
			document.getElementById('email_id').value='';
			document.getElementById('password1').value='';
			
	}









</script>