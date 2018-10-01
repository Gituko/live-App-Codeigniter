<div class="container">
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <?php $this->load->view("left_menu"); ?> 
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                Widget settings form goes here
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn blue">Save changes</button>
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!-- END STYLE CUSTOMIZER -->
                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                    Lista de conversiones</h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">


                        <li>
                            <i class="fa fa-home"></i>
                            <a href="" onclick="return false;">Payment Details</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/conversions_table_list">Conversions list</a>
                        </li>
                    </ul>

                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN DASHBOARD STATS -->
                <div class="row">


                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-edit"></i>Tabla de conversiones</div>

                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">

                                </div>
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                    <thead>
                                        <tr>
                                            
                                            <th>
                                                Nombre moneda
                                            </th>

                                            <th>
                                                Valor
                                            </th>
                                            <th>
                                                Equivale a 1:
                                            </th>
                                            <th>
                                                image
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
                                        foreach($conversiones as $k)
                                        {
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $k->nombre_moneda; ?></td>
                                            <td><?php echo $k->valor; ?></td>
                                            <td><?php echo $k->referencia->moneda; ?></td>
                                            <td><img style="width: 16px; height: 16px;" src="<?php echo site_base_url(); ?>uploads/coin_image/<?php echo $k->imagen; ?>" alt=""></td>
                                            <td> <a href="<?php echo base_url(); ?>admin/edit_conversion_money/<?php echo $k->id; ?>" >Edit</a> </td>
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
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <!--Cooming Soon...-->
            <!-- END QUICK SIDEBAR -->
        </div>

        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
<?php $this->load->view("footer"); ?> 
        <!-- END FOOTER -->
        <script>
            $(document).ready(function () {

            });
            
            function deleteMoneda($id){
                if(confirm("Estas seguro de eliminarlo")){return false;}
               // alert("que pasa");
                var $enviar= Object.create(enviar);
                $enviar.url="<?php echo base_url(); ?>admin/delete_table_conversions_list";
                $enviar.post({id:$id,action:"json"}).done(function(data){
                    if(data.tipo=="success"){
                        setTimeout(function(){
                            window.location.reload();
                        },2000)
                    }
                });
            }
        </script>

