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
                    
                    <div class="col-lg-6">
                        <form id="frmMoneda">
                            <div class="form-group">
                                <label >Nombre de la moneda</label>
                                <input name="nombre" value="<?php echo $conversion->nombre_moneda; ?>" type="text" class="form-control validate[required]"  placeholder="Nombre de la moneda">
<!--                                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                            <div class="form-group">
                                <label >Valor</label>
                                <input type="text" value="<?php echo $conversion->valor; ?>" name="valor"  class="form-control validate[required,custom[integer]]"  placeholder="Valor">
                            </div>
                            <div class="form-group">
                                <label >Es equivalente a 1:</label>
                                <select class="form-control validate[required]" name="referencia">
                                    <option value="">Selecciona una opcion</option>
                                    <?php
                                    foreach ($moneda as $k) {
                                        echo '<option '.($k->id==$conversion->moneda_referencia?"selected":"").' value="' . $k->id . '">' . $k->moneda . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Valor</label>
                                <input type="file" id="file" name="imagen"  class="form-control">
                                
                            </div>
                            <input type="hidden" name="action" value="json">
                            <button type="button" class="btn btn-primary" onclick="grabarMoneda(); return false;" >Grabar</button>
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
        
        
        function grabarMoneda() {
            if (!$("#frmMoneda").validationEngine('validate')) {
                return false;
            }
            var $enviar=Object.create(enviar);
            $enviar.url="<?php echo base_url()."admin/edit_conversion_money/".$id_conversion; ?>";
            $enviar.formdata({form:"#frmMoneda"}).onreadystatechange=function(){
                 var that=this;
                 
               if (that.readyState == 4 && that.status == 200) {
                   
                    var msg= JSON.parse(that.responseText);
                    console.log(msg);
                    $.notify({message: msg.mensaje},{type: msg.tipo});
                    if(msg.tipo=="success"){
                        setTimeout(function(){
                            window.location.reload();
                        },3000);                        
                    }
                }
            };;
           
        }
    </script>

