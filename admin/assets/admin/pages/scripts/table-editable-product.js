var TableEditable = function () {
//alert("popo");
    var handleTable = function () {

        function restoreRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);

            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                oTable.fnUpdate(aData[i], nRow, i, false);
            }

            oTable.fnDraw();
        }

        function editRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
			
			$('#sample_editable_1 tr td:first').attr( "style", "display:none;visibility:hidden;" );
			
            var jqTds = $('>td', nRow);
			
			
			
			var check_business_arr=aData[2].split(",");
			var buisnesstype_str=$('#buisnesstype_str').val();
			var arr=buisnesstype_str.split("@@@");
			
			
			
			
			var select_box_business='<select class="form-control" name="buisnesstype_id" id="buisnesstype_id" >';
			
			for(var p=0;p<arr.length;p++)
			{
				
				var all_str=arr[p];
				var all_arr=all_str.split("***");
				
				var buisnesstype_id=all_arr[0];
				var buisness_type=all_arr[1];
				
			// alert(maincat_id);
			 var idx = check_business_arr.indexOf(buisness_type);
			
			 select_box_business+='<option value="'+buisnesstype_id+'" >'+buisness_type+'</option>';
			 
			 
			}
			 
			 select_box_business+='</select>';
			
			
			
			
			
			
			//var check_maincat_arr=aData[2].split("@@@"); 
			var maincat_subcat_str=$('#main_sub_string').val();
			//alert(maincat_subcat_str);
			var maincat_arr=maincat_subcat_str.split("@@@");
			
			
			var maincat_select_box='<div class="form-control height-auto"><div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><div class="scroller" data-always-visible="1" style="overflow: scroll; width: auto; height: 275px;" data-initialized="1"><ul class="list-unstyled">';
										  
			for(var x=0;x<maincat_arr.length;x++)
			{
				                var all_str=maincat_arr[x];
								//alert(all_str);
								var all_arr=all_str.split("***");
				
								var maincat_all_str=all_arr[0];
								var maincat_all_arr=maincat_all_str.split("-");
								var maincat_id=maincat_all_arr[0];
								var main_catgeory=maincat_all_arr[1];
								
							    var subcat_all_str=all_arr[1].split(",");
								
								
			 maincat_select_box+='<li><label>'+main_catgeory+'</label><ul class="list-unstyled">';
                                                
                     for(var r=0;r<subcat_all_str.length;r++)
			                      {
									  var all_subcat_str=subcat_all_str[r];
								      var all_subcat_arr=all_subcat_str.split("-"); 
									  var subcat_id=all_subcat_arr[0];
								      var sub_catgeory=all_subcat_arr[1];
											
													
			 maincat_select_box+='<li><label><input type="checkbox" class="class_category'+maincat_id+'" name="sub_category[]"  value="'+maincat_id+'-'+subcat_id+'" >'+sub_catgeory+'</label></li>';
												
									}
			 maincat_select_box+='</ul></li>';
											
			 }
			 
			 maincat_select_box+='</ul></div></div></div>';
			  
			 
			 
			 
			 
			 
			 
			
			
			//alert(aData[0]);
			
			jqTds[0].innerHTML =  aData[0];
			
			jqTds[1].innerHTML = '<input type="text" class="form-control input-small sub_category" name="product_sku" id="product_sku" value="' + aData[1] + '">';
			
			jqTds[2].innerHTML = '<input type="text" class="form-control input-small sub_category" name="product_name" id="product_name" value="' + aData[2] + '">';
			
			jqTds[3].innerHTML = '<input type="text" class="form-control input-small sub_category" name="product_size" id="product_size" value="' + aData[3] + '">';
			
			jqTds[4].innerHTML = '<input type="text" class="form-control input-small sub_category" name="product_price" id="product_price" value="' + aData[4] + '">';
			
			
			//jqTds[5].innerHTML = select_box_business;
			
			jqTds[5].innerHTML = maincat_select_box;
			
			var select_box='<select class="form-control" name="status" id="status" ><option value="Active" ';
			if(aData[5]=='Active'){ select_box+='selected'; }else{select_box+='';}
			select_box+='>Active</option><option value="Inactive"';
			if(aData[5]=='Inactive'){ select_box+='selected'; }else{select_box+='';}
			select_box+='>Inactive</option></select>';
			
			
			
           jqTds[6].innerHTML = select_box;
		   jqTds[7].innerHTML = '<a class="edit" href="">Save</a>';
           jqTds[8].innerHTML = '<a class="cancel" href="">Cancel</a>';
			
        }

        function saveRow(oTable, nRow,id,maincat) {
			
            var jqInputs = $('input', nRow);
			var jqSelects = $('select', nRow);
			
			var site_base_url=$('#site_base_url').val();
			
			if(jqSelects[0].options[jqSelects[0].selectedIndex].value=='Active')
			{
				var css='success';
			}
			else if(jqSelects[0].options[jqSelects[0].selectedIndex].value=='Inctive')
			{
				var css='warning';
			}
			else
			{
				var css='danger';
			}
			
			var selecte_val='<span class="label label-sm label-'+css+'">'+jqSelects[0].options[jqSelects[0].selectedIndex].value+'</span>';
			
			//alert(jqInputs[0].value);
			//alert(jqSelects[0].options[jqSelects[0].selectedIndex].text);
			
			var product_name ='<a href="#" class="thumb_image_show" id="'+id+'@@@@'+site_base_url+'uploads/product_image/noImageAvailable.jpg">'+jqInputs[1].value+'</a>';
			
			oTable.fnUpdate(''+id+'', nRow, 0, false);
			oTable.fnUpdate(jqInputs[0].value, nRow, 1, false);
			oTable.fnUpdate(product_name, nRow, 2, false);
			oTable.fnUpdate(jqInputs[2].value, nRow, 3, false);
			oTable.fnUpdate(jqInputs[3].value, nRow, 4, false);
           // oTable.fnUpdate(jqSelects[0].options[jqSelects[0].selectedIndex].text, nRow, 5, false);
			oTable.fnUpdate(maincat, nRow, 5, false);
            oTable.fnUpdate(selecte_val, nRow, 6, false);
            oTable.fnUpdate('<a href="'+site_base_url+'edit_product/'+id+'" class="btn btn-xs default btn-editable"><i class="fa fa-pencil"></i> Edit</a>', nRow, 7, false);
            oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 8, false);
			
            oTable.fnDraw();
			




   
			
			
	/*		
			   $(".thumb_image_show").hover(function(e){
										 
										 
			//alert($(this).attr("id"));
					var arr=$(this).attr("id").split("@@@@");
					var id=arr[0];
					var image=arr[1];
					
					
					
					//alert(id);
					//alert(image);
					//alert("#large_"+id);
					$("#large").css("top",(e.pageY-400)+"px").css("left",(e.pageX-200)+"px").html("<img src="+ image +" alt='Large Image' />").fadeIn("slow");
												 
										 
										 
										 
										 
										 
			//alert($(this).attr("id"));
			//$("#large").css("top",(e.pageY+5)+"px").css("left",(e.pageX+5)+"px").html("<img src="+ $(this).attr("id") +" alt='Large Image' /><br/>"+$(this).attr("id")).fadeIn("slow");
			}, function(){
				$("#large").fadeOut("fast");
			});	
			*/
			
			
			
			
			
        }

        function cancelEditRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
			oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
			oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
			oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
			oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
			oTable.fnUpdate(jqInputs[4].value, nRow, 4, false);
            oTable.fnUpdate(jqInputs[5].value, nRow, 5, false);
            oTable.fnUpdate(jqInputs[6].value, nRow, 6, false);
			oTable.fnUpdate(jqInputs[7].value, nRow, 7, false);
			oTable.fnUpdate(jqInputs[8].value, nRow, 8, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 9, false);
            oTable.fnDraw();
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

        var table = $('#sample_editable_1');

        var oTable = table.dataTable({
            "lengthMenu": [
                [9, 15, 20, -1],
                [9, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "language": {
                "lengthMenu": " _MENU_ records"
            },
            "columnDefs": [{ // set default column settings
                'orderable': true,
                'targets': [0]
            }, {
                "searchable": true,
                "targets": [0]
            }],
            "order": [
                [1, "asc"]
            ] // set first column as a default sort by asc
        });
		
		

   
			
		

        var tableWrapper = $("#sample_editable_1_wrapper");

        tableWrapper.find(".dataTables_length select").select2({
            showSearchInput: false //hide search box with special css class
        }); // initialize select2 dropdown

        var nEditing = null;
        var nNew = false;

        $('#sample_editable_1_new').click(function (e) {
            e.preventDefault();

            if (nNew && nEditing) {
                if (confirm("Previose row not saved. Do you want to save it ?")) {
                    saveRow(oTable, nEditing,''); // save
                    $(nEditing).find("td:first").html("Untitled");
                    nEditing = null;
                    nNew = false;

                } else {
                    oTable.fnDeleteRow(nEditing); // cancel
                    nEditing = null;
                    nNew = false;
                    
                    return;
                }
            }

           // var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
		    var aiNew = oTable.fnAddData(['', '', '', '', '', '','','','','']);
			//alert(aiNew[0]);
            var nRow = oTable.fnGetNodes(aiNew[0]);
            editRow(oTable, nRow);
            nEditing = nRow;
            nNew = true;
			
			
			
        });

        table.on('click', '.delete', function (e) {
            e.preventDefault();

            if (confirm("Are you sure to delete this row ?") == false) {
                return;
            }
          var nRow = $(this).parents('tr')[0];


           /******************************Ajax add Start*******************************************/
		    
		    var aData = oTable.fnGetData(nRow);
			var id=aData[0];
			var site_base_url=$('#site_base_url').val();
			//alert(site_base_url+"delete_product&id="+id);
			
			$.ajax({
			type: "POST",
			url: ""+site_base_url+"delete_product",
			data: "&id="+id, 
			cache: false,
			success: function(html) {
				//alert(html);
				   var id=html;
				  /* Editing this row and want to save it */
					
			  }
			});
			/******************************Ajax add End*******************************************/



                
			oTable.fnDeleteRow(nRow);
			//alert("Deleted! Do not forget to do some ajax to sync with backend :)");


            

           
        });

        table.on('click', '.cancel', function (e) {
            e.preventDefault();

            if (nNew) {
                oTable.fnDeleteRow(nEditing);
                nNew = false;
            } else {
                restoreRow(oTable, nEditing);
                nEditing = null;
            }
        });

        table.on('click', '.edit', function (e) {
											// alert("popo");
            e.preventDefault();
			
			
			//alert("popo");
			

            /* Get the row as a parent of the link that was clicked on */
            var nRow = $(this).parents('tr')[0];
			
			var aData = oTable.fnGetData(nRow);
			
			
			
			

            if (nEditing !== null && nEditing != nRow) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow);
                nEditing = nRow;
				
				
				
            }
			else if (nEditing == nRow && this.innerHTML == "Save") {
				
				//alert("toko");
				
				var site_base_url=$('#site_base_url').val();
				
			/******************************Ajax add Start*******************************************/
			var id=aData[0];
			var product_sku=$('#product_sku').val();
			var product_name=$('#product_name').val();
			var product_size=$('#product_size').val();
			var product_price=$('#product_price').val();
			var buisnesstype_id=$('#buisnesstype_id').val();
			var status=$('#status').val();
			
			
			
			var sub_category = $('input[name="sub_category[]"]:checked').map(function(){return $(this).val();}).get();
			
			
			if(product_sku=='' || product_name==''  || product_size=='' || product_price=='' || buisnesstype_id=='' || sub_category=='')
				{
					//window.location.href=site_base_url+"businesstype/exist";
					$('.alert-danger').show();
					return false;
				}
			
			
			
			//alert(id);
			
			//alert("product_sku="+product_sku+"&product_name="+product_name+"&product_size="+product_size+"&product_price="+product_price+"&buisnesstype_id="+buisnesstype_id+"&sub_category="+sub_category+"&status="+status+"&id="+id);
			
			$.ajax({
			type: "POST",
			url: ""+site_base_url+"add_product_quick",
			data: "product_sku="+product_sku+"&product_name="+product_name+"&product_size="+product_size+"&product_price="+product_price+"&buisnesstype_id="+buisnesstype_id+"&sub_category="+sub_category+"&status="+status+"&id="+id, 
			cache: false,
			success: function(html) {
				
				//alert(html);
				if(html=='exist')
				{
					//window.location.href=site_base_url+"businesstype/exist";
					$('.alert-exist').show();
					return false;
				}
				
				
				arr=html.split("@@@@");
				var id=arr[0];
				var maincat=arr[1];
				  /* Editing this row and want to save it */
                saveRow(oTable, nEditing,id,maincat);
                nEditing = null;
				
                //alert("Updated! Do not forget to do some ajax to sync with backend :)");
			  }
			});
			/******************************Ajax add End*******************************************/
			
				
				
				
				
              
		
		 
		
		
	
		
		
		
		
            } else {
				//alert("yoko");
                /* No edit in progress - let's start one */
				//alert(nRow);
                editRow(oTable, nRow);
                nEditing = nRow;
            }
        });
    }

    return {

        //main function to initiate the module
        init: function () {
            handleTable();
        }

    };

}();