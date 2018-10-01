<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="index" >
	<meta name="keywords" content="CodexCoder,HTML5,CSS3,bootstrap,JavaScript">
	<meta name="author" content="CodexCoder">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="images/favicon" href="img/favicon.ico" rel="shortcut icon" />
	<title>mystatus</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/responsive.css">
	
    <!-- Google fonts - which you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!----------------------------------------------------------------------->
    

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<!--*--------------------------------------------------php full calculation--------------------------------------------------------->

 <!--================start rating====================-->
  <!-- <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    

    


<!--=========================end rating=====================-->




<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/validation-jquery.css">
<script type="text/javascript">
 
 
    (function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
              $("#review").validate({
                rules: {
                   video_title: {
                        required: true,
                    },
					
					video_tags: {
                        required: true,
                    },
			
				category_type: {
                        required: true,
                    },
				
				
					video_status: {
                        required: true,
						//minlength: 10
                    }
					
					
					},
                messages: {
					video_title: {
                        required: "Please Enter Video Title"
                    },
					video_tags: {
                        required: "Please Enter Video tags"
                    }
					
					category_type: {
                        required: "Please Select Category Type"
                    }
					
					
					video_status: {
                        required: "Please Enter Video Status"
                    }
					
					
					
					
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
<style>
.left_headbox h2{
	font-family:"Lato";
	font-weight:bold;
	font-size:20px;
}
.linebox h2{
	font-family:"Lato";
	font-weight:normal;
	font-size:16px;
	margin:5px 0;
}
</style>

<?php
                
					$video_id=$_GET['recorded_v_id'];
				$details=$this->module->get_artist_id_video($video_id);
				//echo $recorded_id; die; 
			 
                  //$data['p_id']=$this->module->get_giver_name($id);
				  //print_r($p_id);die;
               ?>


<!--************************************************************************************************************************************-->



                    <div class="col-md-9 myaccount_right_panel inner_div">
                    
                    <div class="filter_btn2">
                        	<a id="btnleft" href="#"></a>
                    	</div><!----end filter_btn---->
                    <div id="Divbox" class="dash_right">
                    
                    <div id="Div1" class="dashboard">
                    	<div class="m_right_panel_holder">
                        	<div class="pnel_title">
                            	<h5></h5>
                            </div>
                            <div style="clear:both"></div>
                            
                            <div class="col-md-12 profile_body">
                            	<div class="col-md-12 as_info">
                                    	<div class="gn_info">
                                        	<div class="left_headbox">
                                        		<h2><span class="blues"><center><?php echo $details[0]['recorded_v_title'];?></center></span></h2>
                                        	</div>
                                            <div style="clear:both;"></div>
                                        </div><!---end gn_info---->
                                        
                                                    <!---------------------------GI tab 1--------------------------->                            
                                        
                      <!---------------------------GI tab 2---------------------------> 
                      
                      
                                            
                                        <div id="bill2" class="gn_body">
                                        	<div class="left_detailbox">
                                           
                                             
                                              
                                             
                                             
                                             
                                             
                                             <div class="linebox">
                                           
                                             
                                             
                                                <div class="form-group">
                    <label class="col-md-2 control-label"> Overview:
                    </label>
                    
                    <div class="col-md-10">
                  <div class="left_detailbox">
                    <i class="fa"></i>
                    <?php echo $details[0]['recorded_v_overview'];?>
                    <?php /*?><textarea name="video_overview" class="form-control" rows="5" cols="40"><?php echo $details[0]['recorded_v_overview'];?></textarea><?php */?>
                   
                    </div>
                    </div> 
                    </div>
                                            
                     
                     
           
                           
                                             
                                             
                                             </div>
                                             
                                             
                                          <div style="clear:both;"></div>
                                          </div>
                                            <div style="clear:both;"></div>
                                        </div><!----end gn_body---->

                                        <div style="clear:both;"></div>
                                    </div><!------end col-md-12 as_info----->
                                <div style="clear:both"></div>
                            </div><!----end col-md-12 profile_body----->
                            <div style="clear:both;"></div>
                        </div><!----end m_right_panel_holder----->
                        <div style="clear:both;"></div>
                        
                        </div><!----------tab1----------->
                        </div><!----Divbox---->
                    </div>
                    
                   
</body>
</html>