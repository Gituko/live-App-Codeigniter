
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <!-- END STYLE CUSTOMIZER -->
                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                    Packages list</h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">


                        <li>
                            <i class="fa fa-home"></i>
                            <a href="" onclick="return false;">Payment Details</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>paquete_credito/index">Credit packages</a>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN DASHBOARD STATS -->
                <div class="row">
                    <div class="col-lg-12">
                        <form id="frm">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Icon</label>
                                    <input type="file" name="icon" class="form-control-file">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control validate[required]"  placeholder="Name"> 
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <label>Equals note</label>                                    
                                    <input type="text" name="equals_note" class="form-control validate[required,custom[integer]]"  placeholder="Equals note">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label >Sale price (dls)</label>
                                    <input type="text" name="sale_price"  class="form-control validate[required,custom[number]]" placeholder="Sale price (dls)" >
                                </div>                                
                            </div>
                            <div class="col-lg-12">
                                <input type="hidden" name="action" value="json">
                                <button type="button" class="btn btn-primary" onclick="save(); return false;" >Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!---------------------------------------------new row--------------------------------------------------->
                <div class="row">


                    <style>
                        .btn_link
                        {
                            background-color:#1a67d0;
                            color:#FFF;
                            font-size:15px;
                            width: 150px;
                            padding:5px;
                            border-radius:3px;
                            text-decoration:none;
                            text-align:center;
                            border: 5px solid red;
                            border:1px solid #184a8e;

                        }

                    </style>



                </div>

    <script>
        $(document).ready(function () {

        });


        function save() {
            if (!$("#frm").validationEngine('validate',{scroll:false})) {
                return false;
            }
            var $enviar = Object.create(enviar);
            $enviar.url = "add";
            $enviar.formdata({form:"#frm"}).onreadystatechange=function(){
                 var that=this; 
                 
               if (that.readyState == 4 && that.status == 200) {
                   
                    var msg= JSON.parse(that.responseText);
                    
                    $.notify({message: msg.mensaje},{type: msg.tipo});
                    if(msg.tipo=="success"){
                        setTimeout(function(){
                            window.location.reload();
                        },3000);                        
                    }
                }
            };
        }
    </script>

