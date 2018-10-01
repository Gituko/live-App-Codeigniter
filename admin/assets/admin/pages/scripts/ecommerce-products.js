var EcommerceProducts = function () {

    var initPickers = function () {
        //init date pickers
        $('.date-picker').datepicker({
            rtl: Metronic.isRTL(),
            autoclose: true
        });
    }

    var handleProducts = function() {
        var grid = new Datatable();
		var site_base_url=$('#site_base_url').val();
		
		//alert(site_base_url);
		
		
		
			
		
		
		
		
		
		

        grid.init({
            src: $("#datatable_products"),
            onSuccess: function (grid) {
                // execute some code after table records loaded
            },
            onError: function (grid) {
                // execute some code on network or other general error  
            },
            loadingMessage: 'Loading...',
            dataTable: { // here you can define a typical datatable settings from http://datatables.net/usage/options 
                "lengthMenu": [
                    [10, 20, 50, 100, 150],
                    [10, 20, 50, 100, 150] // change per page values here 
                ],
                "pageLength": 10, // default record count per page
                "ajax": {
                    /*"url": "demo/ecommerce_products.php", // ajax source*/
					"url": ""+site_base_url+"product_list", // ajax source
                },
                "order": [
                    [1, "asc"]
                ] // set first column as a default sort by asc
            }
        });

         // handle group actionsubmit button click
        grid.getTableWrapper().on('click', '.table-group-action-submit', function (e) {
            e.preventDefault();
            var action = $(".table-group-action-input", grid.getTableWrapper());
            if (action.val() != "" && grid.getSelectedRowsCount() > 0) {
				 alert("koko");
				//alert(action.val());
				//alert(grid.getSelectedRows());
				
                grid.setAjaxParam("customActionType", "group_action");
                grid.setAjaxParam("customActionName", action.val());
                grid.setAjaxParam("id", grid.getSelectedRows());
				
				//alert("&id="+grid.getSelectedRows()+"&status="+action.val());
				
				
				
			
				
				
				
				
				
				
				
				
				
			$.ajax({
			type: "POST",
			url: ""+site_base_url+"action_product",
			data: "&id="+grid.getSelectedRows()+"&status="+action.val(), 
			cache: false,
			success: function(html) {
				
				//alert(html);
				   var id=html;
				  /* Editing this row and want to save it */
				  grid.getDataTable().ajax.reload();
                  grid.clearAjaxParams();
					
			  }
			});
				
			
			
            } else if (action.val() == "") {
                Metronic.alert({
                    type: 'danger',
                    icon: 'warning',
                    message: 'Please select an action',
                    container: grid.getTableWrapper(),
                    place: 'prepend'
                });
            } else if (grid.getSelectedRowsCount() === 0) {
                Metronic.alert({
                    type: 'danger',
                    icon: 'warning',
                    message: 'No record selected',
                    container: grid.getTableWrapper(),
                    place: 'prepend'
                });
            }
        });
		
		
		/*$("#large_"+id).html("<img src="+ image +" alt='Large Image' /><br/>"+image);
					
					$("#large_"+id).css("top",(e.pageY+5)+"px")
									 .css("left",(e.pageX+5)+"px")					
									 .html("<img src="+ image +" alt='Large Image' /><br/>"+image)
									 .fadeIn("slow");
					}, function(){
						$("#large_"+id).fadeOut("fast");*/
		
		
		
		
		         // handle group actionsubmit button click
      /*  grid.getTableWrapper().on('hover', '.thumb_image_show', function (e) {
																				   
					//alert($(this).attr("id"));
					var arr=$(this).attr("id").split("@@@@");
					var id=arr[0];
					var image=arr[1];
					
					//alert(id);
					//alert(image);
					//alert("#large_"+id);
					$("#large").css("top",(e.pageY-450)+"px").css("left",(e.pageX-890)+"px").html("<img src="+ image +" alt='Large Image' />").fadeIn("slow");
					
																			   
				 });
		
		grid.getTableWrapper().on('mouseout', '.thumb_image_show', function (e) {
																				   
					$("#large").fadeOut("fast");
																			   
				 });*/
		

		
		
		
		
		
		
		
		
    }

    return {

        //main function to initiate the module
        init: function () {
			
			

            handleProducts();
			
            initPickers();
			
			
			
            
        }
		
		
		
		
		
		
		
		
		

    };

}();