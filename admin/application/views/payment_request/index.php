<div class="row">
    <form id="frm" onsubmit="return false;">
    <div class="col-md-12">                       
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i>List of request</div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">

                </div>
                
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                        <tr>                                            
                            <th>
                                Id
                            </th>
                            <th>
                                Fecha
                            </th>
                            <th>
                                Artist
                            </th>
                            <th>
                                Total Notes
                            </th>
                            <th>
                                Total USD
                            </th>                                            
                            <th>
                                Status
                            </th>
                            <th>

                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $i=1;
                        foreach($requests as $k)
                        {

                        ?>
                        <tr>
                            <td>
                                <?php echo $k->id; ?>
                            </td>
                            <td>
                                <?php echo date("Y-m-d H:i",  strtotime($k->fecha)); ?>
                            </td>
                            <td>
                                <?php echo $k->id_artist; ?>
                            </td>
                            <td>
                                <?php echo $k->total_notes;?>
                            </td>
                            <td>
                                <?php echo number_format($k->total_usd,2); ?>
                            </td>                                            
                            <td>
                                <?php echo  $k->estatus; ?>
                            </td>
                            <td>
                                <input type="checkbox" name="pay_stremer[]" value="<?php echo $k->id?>">
                            </td>                                            
                        </tr>
                        <?php $i++;} ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
    <div class="col-lg-12">
        <button class="btn green-haze btn-circle" onclick="pay_streamers();"><i class="fa fa-check"></i> Pay streamers</button>
        <!--<a href="#" class="btn" onclick="pay_streamers(); return false;">Pay streamers</a>-->
    </div>
    </form>
</div>

                <!---------------------------------------------new row--------------------------------------------------->
                

    <script>
        function pay_streamers(){
           var payStreamers= $("input[name='pay_stremer[]']");
           var itemsSelected=0;
           $(payStreamers).each(function(index,item){
               if($(item).is(":checked"))
               {
                   itemsSelected++;
               }
           });
           //alert(itemsSelected);
           //console.log($("input[name='pay_stremer[]'] :checked"));
           if(itemsSelected==0){
                alert("No item selected"); return false;
           }
           $.post("<?php echo site_base_url(); ?>admin/payment_request/pay_streamers",$("#frm").serialize(),function(data){
               
           });
           
        }
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

