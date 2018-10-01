var TableEditable = function () {

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
			
			
			
            var jqTds = $('>td', nRow);
			
			jqTds[0].innerHTML = aData[0] ;
			jqTds[1].innerHTML = aData[1] ;
			jqTds[2].innerHTML = aData[2] ;
			jqTds[3].innerHTML = aData[3] ;
			jqTds[4].innerHTML = aData[4] ;
			jqTds[5].innerHTML = '<input type="text" class="form-control input-small main_category" name="quantity" id="quantity" value="' + aData[5] + '">';
			jqTds[6].innerHTML = aData[6] ;
            jqTds[7].innerHTML = '<a class="edit" href="">Save</a>';
            jqTds[8].innerHTML = '<a class="cancel" href="">Cancel</a>';
			
			
			
        }

        function saveRow(oTable, nRow,str) {
			
            var jqInputs = $('input', nRow);
			
			var main_arr=str.split("@@@");
			
			var temp_str=main_arr[0];
			var temp_div=main_arr[1];
			
			
			
		   $('#show_subtotal_div').html(temp_div);
			
			var arr=temp_str.split("-");
			//alert(jqInputs[0].value);
			//alert(id);
			var id=arr[0];
			var quantity=arr[1];
			//alert(jqSelects[0].options[jqSelects[0].selectedIndex].value);
			
			oTable.fnUpdate(id, nRow, 0, false);
            oTable.fnUpdate(jqInputs[0].value, nRow, 5, false);
			oTable.fnUpdate(quantity, nRow, 6, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 7, false);
            oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 8, false);
			
            oTable.fnDraw();
        }

        function cancelEditRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
			oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 3, false);
            oTable.fnDraw();
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

        var table = $('#sample_editable_1');

        var oTable = table.dataTable({
            "lengthMenu": [
                [8, 15, 20, -1],
                [8, 15, 20, "All"] // change per page values here
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
                [0, "asc"]
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
		    var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
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
			var shop_temp_id=aData[0];
			var site_base_url=$('#site_base_url').val();
			//alert(""+site_base_url+"delete_maincategory");
			
			$.ajax({
			type: "POST",
			url: ""+site_base_url+"delete_shop_temp",
			data: "&shop_temp_id="+shop_temp_id, 
			cache: false,
			success: function(html) {
				//alert(html);
				
				var main_arr=html.split("@@@");
				
				var temp_str=main_arr[0];
				var temp_div=main_arr[1];
				
				$('#show_subtotal_div').html(temp_div);
				  
				  /* Editing this row and want to save it */
				  
			  oTable.fnDeleteRow(nRow);
			 //alert("Deleted! Do not forget to do some ajax to sync with backend :)");

					
			  }
			});
			/******************************Ajax add End*******************************************/



                
		

            

           
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
			
			
			
			
			
			

            if (nEditing !== null && nEditing != nRow) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow);
                nEditing = nRow;
				
				
				
            }
			else if (nEditing == nRow && this.innerHTML == "Save") {
				
				//alert("toko");
				
			/******************************Ajax add Start*******************************************/
			
			var quantity=$('#quantity').val();
			var site_base_url=$('#site_base_url').val();
			var aData = oTable.fnGetData(nRow);
			var shop_temp_id=aData[0];
			
			//alert("quantity="+quantity+"&shop_temp_id="+shop_temp_id);
			
			$.ajax({
			type: "POST",
			url: ""+site_base_url+"update_shop_quantity",
			data: "quantity="+quantity+"&shop_temp_id="+shop_temp_id, 
			cache: false,
			success: function(html) {
				alert(html);
				
				
				
				  /* Editing this row and want to save it */
                saveRow(oTable, nEditing,html);
                nEditing = null;
				
               // alert("Updated! Do not forget to do some ajax to sync with backend :)");
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