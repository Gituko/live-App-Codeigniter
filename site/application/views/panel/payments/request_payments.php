<section id="myaccount_service">
    <div class="myaccountdiv">
        <div class="container-full">
            <div class="container-fluid">
                <div class="myaccount_holder">
                    <div class="row">
                        <div id="slideleftpanel" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 myaccount_leftpanel">
                            <?php $this->load->view("panel/left_pannel"); ?>
                            <div style="clear:both"></div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 normal_rightpanel">
                            <div class="myaccount_top_text tab-content">
                                <div id="menu2" class="allcourses">
                                    <div class="useraccount">
                                        <h5><i class="fa fa-user myicon"></i>Payments </h5>
                                    </div>

                                    <div class="col-md-12 as_info">
                                        <div class="gn_info">
                                            <div class="col-md-6 gn_title">
                                                <h5><strong>List request of payments </strong></h5>
                                                
                                            </div>                                            
                                            <div style="clear:both"></div>
                                            <div class="col-md-12 gn_title">
                                                <div class="row">
                                                    <div class="col-lg-1 text-right">
                                                        <input type="text" value="<?php echo $total_notes[0][1]; ?>" id="cantidad_notes" class="form-control" >
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <a style="float:left" href="" onclick="solicitarPago(); return false;">Add Request </a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div style="clear:both"></div>
                                            <div class="col-md-12" style="background: #a1abf3;
                                                padding: 10px 0px 11px 15px; display: none "></div>
                                        </div><!---end gn_info---->

                                        <!---------------------------GI tab 1--------------------------->                            
                                        <div class="col-lg-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Date(Y-m-d)</th>
                                                        <th>Amount(notes)</th>
                                                        <th>Amount(USD)</th>
                                                        <th>status</th>
                                                        <th>Admin coments</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i=1;
                                                    foreach($request_payments as $k) {?>
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <th scope="row"><?php echo date("Y-m-d",  strtotime($k->fecha)); ?></th>
                                                        <td><?php echo $k->total_notes ?></td>
                                                        <td><?php echo number_format($k->total_usd,2); ?></td>
                                                        <td><?php echo $k->estatus; ?></td>
                                                        <td><?php echo $k->notas ?></td>
                                                    </tr>                  
                                                    <?php $i++; } ?>
                                                </tbody>
                                            </table>

                                        </div>

                                        <div style="clear:both"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>

                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.container-full -->
    </div> <!-- /.servicediv -->
</section><!-- /#Service -->

<section id="scroller2">
    <div class="gotop">
        <a class="header" href="#header"><i class="fa fa-angle-double-up"></i></a>
    </div> <!-- /.gotop -->
</section> <!--   /#scroller2  -->
<script>
function solicitarPago(){
    var $cantidad=$("#cantidad_notes").val();
    if($cantidad==0){alert("You not have more notes"); return false;}
    $.post("<?php echo site_base_url(); ?>panel/payments/solicitar_pago",{"cantidad":$cantidad,action:"json"},function(data){
        alert(data.mensaje);        
        if(data.tipo=="success"){window.location.reload();}
    });
}
</script>