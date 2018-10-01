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
			
			//$(".sorting_1").attr( "style", "display:none;visibility:hidden;" );
			
			$('#sample_editable_1 tr td:first').attr( "style", "display:none;visibility:hidden;" );
			
			
			//alert(aData[0]);
			
            var jqTds = $('>td', nRow);
			//alert(jqTds[0]);
			
			jqTds[0].innerHTML = aData[0];
			
			
			
			
            jqTds[1].innerHTML = '<input type="text" class="form-control input-small buisness_type" name="buisness_type" id="buisness_type" value="' + aData[1] + '">';
			
			
			var select_box='<select class="form-control" name="status" id="status" ><option value="Active" ';
			if(aData[2]=='Active'){ select_box+='selected'; }else{select_box+='';}
			select_box+='>Active</option><option value="Inactive"';
			if(aData[2]=='Inactive'){ select_box+='selected'; }else{select_box+='';}
			select_box+='>Inactive</option></select>';
			
			
			
            jqTds[2].innerHTML = select_box;
			<!--<input type="text" class="form-control input-small status" name="status" id="status" value="' + aData[1] + '">-->
            jqTds[3].innerHTML = '<a class="edit" href="">Save</a>';
            jqTds[4].innerHTML = '<a class="cancel" href="">Cancel</a>';
			
        }

        function saveRow(oTable, nRow,id) {
			
            var jqInputs = $('input', nRow);
			var jqSelects = $('select', nRow);
			
			if(jqSelects[0].options[jqSelects[0].selectedIndex].value=='Active')
			{
				var css='success';
			}
			else
			{
				var css='warning';
			}
			
			var selecte_val='<span class="label label-sm label-'+css+'">'+jqSelects[0].options[jqSelects[0].selectedIndex].value+'</span>';
			
			
			//alert(jqInputs[0].value);
			//alert(jqSelects[0].options[jqSelects[0].selectedIndex].value);
			oTable.fnUpdate(id, nRow, 0, false);
            oTable.fnUpdate(jqInputs[0].value, nRow, 1, false);
            oTable.fnUpdate(selecte_val, nRow, 2, false);
            oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 3, false);
            oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 4, false);
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
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
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
		    var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
			//alert(aiNew[0]);
            var nRow = oTable.fnGetNodes(aiNew[0]);
			//alert(nRow);
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
			//alert(""+site_base_url+"delete_sub_section&id="+id);
			//alert('kkkkk');
			
			$.ajax({
			type: "POST",
			url: ""+site_base_url+"delete_sub_section",
			data: "&id="+id, 
			cache: false,
			success: function(html) {
				//alert(html);
				//alert('');
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
			
			
			
			
			
			

            if (nEditing !== null && nEditing != nRow) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow);
                nEditing = nRow;
				
				
				
            }
			else if (nEditing == nRow && this.innerHTML == "Save") {
				
				//alert("toko");
			 var aData = oTable.fnGetData(nRow);	
			/******************************Ajax add Start*******************************************/
			var buisness_type=$('#buisness_type').val();
			var status=$('#status').val();
			var site_base_url=$('#site_base_url').val();
			var id=aData[0];
			
			//alert("buisness_type="+buisness_type+"&status="+status+"&id="+id);
			
			if(buisness_type=='')
				{
					//window.location.href=site_base_url+"businesstype/exist";
					$('.alert-danger').show();
					return false;
				}
			
			$.ajax({
			type: "POST",
			url: ""+site_base_url+"add_buisnesstype",
			data: "buisness_type="+buisness_type+"&status="+status+"&id="+id, 
			cache: false,
			success: function(html) {
				
				//alert(html);
				
				if(html=='exist')
				{
					//window.location.href=site_base_url+"businesstype/exist";
					$('.alert-exist').show();
					return false;
				}
				
				
				var id=html;
				  /* Editing this row and want to save it */
                saveRow(oTable, nEditing,id);
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