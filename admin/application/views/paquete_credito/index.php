
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


                    <div class="col-md-12">
                        <a href="<?php echo base_url() ?>paquete_credito/add" class="btn btn-info">Add package</a>
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-edit"></i>List of package</div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">

                                </div>
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                    <thead>
                                        <tr>                                            
                                            <th>
                                                Icon
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Equals note
                                            </th>
                                            <th>
                                                Sale price
                                            </th>
                                            <th>
                                                Edit
                                            </th>
                                            <th>
                                                Delete
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        foreach($paquete as $k)
                                        {
                                            
                                        ?>
                                        <tr>
                                            <td><img style="width: 16px; height: 16px;" src="<?php echo site_base_url(); ?>uploads/coin_image/<?php echo $k->icon; ?>" alt=""></td>
                                            <td><?php echo $k->name; ?></td>
                                            <td><?php echo $k->equals_note; ?></td>
                                            <td><?php echo number_format($k->sale_price,2); ?></td>                                            
                                            <td> <a href="<?php echo base_url(); ?>paquete_credito/edit/<?php echo $k->id; ?>" >Edit</a> </td>
                                            <td> <a href="" onclick="deleteMoneda(<?php echo $k->id; ?>); return false;">Delete</a> </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
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
        function deleteMoneda(id){
            var $enviar=Object.create(enviar);
            $enviar.url="delete";
            $enviar.post({"id":id}).done(function(data){
                if(data.tipo="success"){
                    setTimeout(function(){
                        window.location.reload();
                    });
                }
            });
        }
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

