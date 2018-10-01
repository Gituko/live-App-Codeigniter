<header id="header">
		<section id="headnev" class="navbar topnavbar" >
        <a id="filterbtn" href="#" class="filter"><i class="fa fa-filter"></i></a>		
			<div class="container">
				<div class="navbar-header">
					<!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>-->
					<a href="#header" class="navbar-brand header"><img src="<?php echo base_url(); ?>img/logo.png"></a>
				</div> <!-- /.navbar-header -->

				<div class="navbar-collapse">
					<div id='cssmenu'>
                        <ul>
                        <li><a href='<?php echo base_url(); ?>index.html'>Home</a></li>
                        <li class='active'><a href='#'>Videos</a>
                          <ul>
                             <li><a href='#'>Travel</a></li>
                             <li><a href='#'>Adventure</a></li>
                             <li><a href='#'>Sports</a></li>
                             <li><a href='#'>Sci-Fi</a></li>
                             <li><a href='#'>Horror</a></li>
                             <li><a href='#'>Accident</a></li>
                             <li><a href='#'>Deep Sea</a></li>
                             <li><a href='#'>Coral</a></li>
                             <li><a href='#'>Universe</a></li>
                             <li><a href='#'>Natural Beauty</a></li>
                             <li><a href='#'>Fitness</a></li>
                             <li><a href='#'>Health</a></li>
                             <li><a href='#'>Cinstraction</a></li>
                             <li><a href='#'>Auto-Machines</a></li>
                          </ul>
                        </li>
                        <li><a href='#'>Live</a></li>
                        </ul>
                    </div>
				</div> <!-- /.collapse /.navbar-collapse -->
                
                <div id="dropserch" class="collapse serch_mobile">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mobsearch">
                	<div class="search_box">
                    	<input type="text" class="form-control searchinput" name="" value="" placeholder="Search here">
                        <input type="submit" class="sear_btn" name="" value=""> 
                    </div>
                </div>
             <?php
		
			 
			 if($this->session->userdata('is_logged_in')=='1'){ ?>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea2">
                    	<div class="notification">
                        	<i class="fa fa-bell white"></i>
                            <span class="count">10</span>
                        </div>
                        <div class="accountname">
                        	<div class="account_imgthumb">
                            	<img src="<?php echo base_url(); ?>img/chat1.png" alt="">
                            </div>
                            <div class="accname">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Partha<span class="drop"><img src="<?php echo base_url(); ?>img/drop.png"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Log out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <? }else{ ?>
                
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea">
                    	<a data-toggle="modal" data-target="#myModal" href="#">Log in</a>
                        <a data-toggle="modal" data-target="#myModal_signup" href="#">Sign up</a>
                    </div>
                </div>
                
                <? } ?>
                <div class="spacer"></div>
                </div>
                
                <div class="non_serch_mobile">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mobsearch">
                	<div class="search_box">
                    	<input type="text" class="form-control searchinput" name="" value="" placeholder="Search here">
                        <input type="submit" class="sear_btn" name="" value=""> 
                    </div>
                </div>
                 <?php if($this->session->userdata('is_logged_in')=='1'){ ?>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea2">
                    	<div class="notification">
                        	<i class="fa fa-bell white"></i>
                            <span class="count">10</span>
                        </div>
                        <div class="accountname">
                        	<div class="account_imgthumb">
                            	<img src="<?php echo base_url(); ?>img/chat1.png" alt="">
                            </div>
                            <div class="accname">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Partha<span class="drop"><img src="<?php echo base_url(); ?>img/drop.png"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Log out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                  <? }else{ ?>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 mobaccount">
                	<div class="login_myaccountarea">
                    	<a data-toggle="modal" data-target="#myModal" href="#">Log in</a>
                        <a data-toggle="modal" data-target="#myModal_signup" href="#">Sign up</a>
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

	
	if(user_name!='' && name!='' && password!='' && repassword!='' && repassword==password && role!='')	
	{
		
		
		if(filter.test(email)){
		$.ajax({
		type: "POST",
		
	url: "<?php echo site_base_url();?>signup?user_name="+user_name+"&name="+name+"&email="+email+"&password="+password+"&role="+role,
		success:function(response){
			//$("")
		// alert(response);
		 
		 if(response=="success"){
		
		  $('#error_success').html("Your Registration! is successfully done Confirmation Email has send to your email id.");
		  document.getElementById("name").value='';  
		  document.getElementById("user_name").value='';	
         
           document.getElementById("email").value='';
       document.getElementById("password").value='';
       document.getElementById("repassword").value='';
	   document.getElementById("role").value='';
 
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
		
	url: "<?php echo site_base_url();?>login?email_id="+email_id+"&password1="+password1+"&role1="+role1,
		success:function(response){
			//$("")
		
	
	//	alert(response);
		
		if(response=="Success"){
		
         	window.location.href="<?php echo site_base_url()?>myprofile";
 
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
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div class="login_logo">
        	<img src="<?php echo base_url(); ?>img/logo.png" alt="">
        </div>
          <p style="color:#F00" id="error_login_success"></p>
         <div class="form-group">
  			<input type="text" class="form-control login_input" name="email_id" id="email_id" required>
            <label class="ani" for="usr">Email_id:</label>
             <p style="color:#F00" id="error_login_email"></p>
		</div>
		<div class="form-group">
  			<input type="password" class="form-control login_input" name="password1" id="password1" required>
            <label class="ani" for="pwd">Password:</label>
            <p style="color:#F00" id="error_login_password"></p>
		</div>
         <div class="form-group">
         
  			 <div class="form-group">
        	<label class="role" for="pwd">Role:</label>
            
       <input type="radio"  name="role1" id="Stremers1" value="Stremers" checked> Stremers
       <input type="radio" name="role1" id="Viewers1" value="Viewers">Viewers
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
			<input value="" checked="" type="checkbox"><span class="gapp"></span> Remember me
            </label>
       </div>
       <div class="checkbox2">
			<label><a href="#">Forgot Your Password?</a></label>
       </div>
       <button class="btn btn-default btn-success btn-block login_btn" onClick="login();">Login</button>
      
      </div>
      
      <div class="modal-footer">
        <p>Don't have an account? <a href="#">Sign up</a></p>
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
            
       <input type="radio"  name="role"  id= "Stremers" value="Stremers" checked> Stremers
       <input type="radio" name="role"  id= "Viewers" value="Viewers">Viewers
  		 <p style="color:#F00" id="error_role"></p>
           <!-- 
  			<select class="srem">
            	<option value="Stremers">Stremers</option>
                <option value="Viewers">Viewers</option>
            </select>-->
		</div>
      
       <button class="btn btn-default btn-success btn-block login_btn" onClick="signup();">Sign up</button>
      </div>
      <div class="modal-footer">
        <p>Already have an account? <a href="#" onClick="login_fuction()">Log in</a></p>
      </div>
    </div>

  </div>
</div>