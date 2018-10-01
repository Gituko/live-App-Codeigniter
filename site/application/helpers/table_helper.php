<?php
/*
Gets the html table to manage people.
*/
function get_people_manage_table($people,$controller)
{
	$CI =& get_instance();
	$table='<table class="tablesorter" id="sortable_table">';
	
	$controller_name=strtolower(get_class($CI));

		$headers = array('<input type="checkbox" id="select_all" />', 
		lang('common_last_name'),
		lang('common_first_name'),
		lang('common_email'),
		lang('common_phone_number'),
		'&nbsp');
	
	$table.='<thead><tr>';
	
	$count = 0;
	foreach($headers as $header)
	{
		$count++;
		
		if ($count == 1)
		{
			$table.="<th class='leftmost'>$header</th>";
		}
		elseif ($count == count($headers))
		{
			$table.="<th class='rightmost'>$header</th>";
		}
		else
		{
			$table.="<th>$header</th>";		
		}
	}
	$table.='</tr></thead><tbody>';
	$table.=get_people_manage_table_data_rows($people,$controller);
	$table.='</tbody></table>';
	return $table;
}

/*
Gets the html data rows for the people.
*/
function get_people_manage_table_data_rows($people,$controller)
{
	$CI =& get_instance();
	$table_data_rows='';
	
	foreach($people->result() as $person)
	{
		$table_data_rows.=get_person_data_row($person,$controller);
	}
	
	if($people->num_rows()==0)
	{
		$table_data_rows.="<tr><td colspan='7'><div class='warning_message' style='padding:7px;'>".lang('common_no_persons_to_display')."</div></tr></tr>";
	}
	
	return $table_data_rows;
}

function get_person_data_row($person,$controller)
{
	$CI =& get_instance();
	$controller_name=strtolower(get_class($CI));
	$width = $controller->get_form_width();
	
	$start_of_time =  date('Y-m-d', 0);
	$today = date('Y-m-d').' 23:59:59';	
	$link = site_url('reports/specific_'.($controller_name == 'customers' ? 'customer' : 'employee').'/'.$start_of_time.'/'.$today.'/'.$person->person_id.'/all/0');
	$table_data_row='<tr>';	
	$table_data_row.="<td width='5%'><input type='checkbox' id='person_$person->person_id' value='".$person->person_id."'/></td>";
	$table_data_row.='<td width="20%"><a href="'.$link.'" class="underline">'.$person->last_name.'</a></td>';
	$table_data_row.='<td width="20%"><a href="'.$link.'" class="underline">'.$person->first_name.'</a></td>';
	$table_data_row.='<td width="30%">'.mailto($person->email,$person->email, array('class' => 'underline')).'</td>';
	$table_data_row.='<td width="15%">'.$person->phone_number.'</td>';	
	$table_data_row.='<td width="5%" class="rightmost">'.anchor($controller_name."/view/$person->person_id/width~$width", lang('common_edit'),array('class'=>'thickbox','title'=>lang($controller_name.'_update'))).'</td>';
	$table_data_row.='</tr>';
	
	return $table_data_row;
}

/*
Gets the html table to manage suppliers.
*/
function get_supplier_manage_table($suppliers,$controller)
{
	$CI =& get_instance();
	$table='<table class="tablesorter" id="sortable_table">';	
	$headers = array('<input type="checkbox" id="select_all" />',
	lang('suppliers_company_name'),
	lang('common_last_name'),
	lang('common_first_name'),
	lang('common_email'),
	lang('common_phone_number'),
	'&nbsp');
	$table.='<thead><tr>';
	$count = 0;
	foreach($headers as $header)
	{
		$count++;
		
		if ($count == 1)
		{
			$table.="<th class='leftmost'>$header</th>";
		}
		elseif ($count == count($headers))
		{
			$table.="<th class='rightmost'>$header</th>";
		}
		else
		{
			$table.="<th>$header</th>";		
		}
	}
	
	$table.='</tr></thead><tbody>';
	$table.=get_supplier_manage_table_data_rows($suppliers,$controller);
	$table.='</tbody></table>';
	return $table;
}

/*
Gets the html data rows for the supplier.
*/
function get_supplier_manage_table_data_rows($suppliers,$controller)
{
	$CI =& get_instance();
	$table_data_rows='';
	
	foreach($suppliers->result() as $supplier)
	{
		$table_data_rows.=get_supplier_data_row($supplier,$controller);
	}
	
	if($suppliers->num_rows()==0)
	{
		$table_data_rows.="<tr><td colspan='8'><div class='warning_message' style='padding:7px;'>".lang('common_no_persons_to_display')."</div></tr></tr>";
	}
	
	return $table_data_rows;
}

function get_supplier_data_row($supplier,$controller)
{
	$CI =& get_instance();
	$controller_name=strtolower(get_class($CI));
	$width = $controller->get_form_width();

	$table_data_row='<tr>';
	$table_data_row.="<td width='5%'><input type='checkbox' id='person_$supplier->person_id' value='".$supplier->person_id."'/></td>";
	$table_data_row.='<td width="17%">'.$supplier->company_name.'</td>';
	$table_data_row.='<td width="17%">'.$supplier->last_name.'</td>';
	$table_data_row.='<td width="17%">'.$supplier->first_name.'</td>';
	$table_data_row.='<td width="22%">'.mailto($supplier->email,$supplier->email).'</td>';
	$table_data_row.='<td width="17%">'.$supplier->phone_number.'</td>';		
	$table_data_row.='<td width="5%" class="rightmost">'.anchor($controller_name."/view/$supplier->person_id/width~$width", lang('common_edit'),array('class'=>'thickbox','title'=>lang($controller_name.'_update'))).'</td>';				
	$table_data_row.='</tr>';
	return $table_data_row;
}

/*
Gets the html table to manage items.
*/
function get_items_manage_table($items,$controller)
{
	$CI =& get_instance();
	$has_cost_price_permission = $CI->Employee->has_module_action_permission('items','see_cost_price', $CI->Employee->get_logged_in_employee_info()->person_id);
	$table='<table class="tablesorter" id="sortable_table">';

	if ($has_cost_price_permission)
	{
		$headers = array('<input type="checkbox" id="select_all" />', 
		$CI->lang->line('items_item_id'),
		$CI->lang->line('items_item_number'),
		$CI->lang->line('items_name'),
		$CI->lang->line('items_category'),
		$CI->lang->line('items_cost_price'),
		$CI->lang->line('items_unit_price'),
		$CI->lang->line('items_quantity'),
		$CI->lang->line('items_inventory'),
		'&nbsp;'
		);
	}
	else 
	{
		$headers = array('<input type="checkbox" id="select_all" />', 
		$CI->lang->line('items_item_id'),
		$CI->lang->line('items_item_number'),
		$CI->lang->line('items_name'),
		$CI->lang->line('items_category'),
		$CI->lang->line('items_unit_price'),
		$CI->lang->line('items_quantity'),
		$CI->lang->line('items_inventory'),
		'&nbsp;'
		);
		
	}
	
	$table.='<thead><tr>';
	$count = 0;
	foreach($headers as $header)
	{
		$count++;
		
		if ($count == 1)
		{
			$table.="<th class='leftmost'>$header</th>";
		}
		elseif ($count == count($headers))
		{
			$table.="<th class='rightmost'>$header</th>";
		}
		else
		{
			$table.="<th>$header</th>";		
		}
	}
	$table.='</tr></thead><tbody>';
	$table.=get_items_manage_table_data_rows($items,$controller);
	$table.='</tbody></table>';
	return $table;
}

/*
Gets the html data rows for the items.
*/
function get_items_manage_table_data_rows($items,$controller)
{
	$CI =& get_instance();
	$table_data_rows='';
	
	foreach($items->result() as $item)
	{
		$table_data_rows.=get_item_data_row($item,$controller);
	}
	
	if($items->num_rows()==0)
	{
		$table_data_rows.="<tr><td colspan='11'><div class='warning_message' style='padding:7px;'>".lang('items_no_items_to_display')."</div></tr></tr>";
	}
	
	return $table_data_rows;
}

function get_item_data_row($item,$controller)
{
	$CI =& get_instance();
	$has_cost_price_permission = $CI->Employee->has_module_action_permission('items','see_cost_price', $CI->Employee->get_logged_in_employee_info()->person_id);
	$item_tax_info=$CI->Item_taxes->get_info($item->item_id);
	$tax_percents = '';
	foreach($item_tax_info as $tax_info)
	{
		$tax_percents.=$tax_info['percent']. '%, ';
	}
	$tax_percents=substr($tax_percents, 0, -2);
	$controller_name=strtolower(get_class($CI));
	$width = $controller->get_form_width();

	$table_data_row='<tr>';
	$table_data_row.="<td width='3%'><input type='checkbox' id='item_$item->item_id' value='".$item->item_id."'/></td>";
	$table_data_row.='<td width="10%">'.$item->item_id.'</td>';
	$table_data_row.='<td width="15%">'.$item->item_number.'</td>';
	$table_data_row.='<td width="15%">'.$item->name.'</td>';
	$table_data_row.='<td width="11%">'.$item->category.'</td>';
	if($has_cost_price_permission)
	{
		$table_data_row.='<td width="11%" align="right">'.to_currency($item->cost_price).'</td>';
	}
	$table_data_row.='<td width="11%" align="right">'.to_currency($item->unit_price).'</td>';
	$table_data_row.='<td width="11%">'.to_quantity($item->quantity).'</td>';
	$table_data_row.='<td width="12%">'.anchor($controller_name."/inventory/$item->item_id/width~$width", lang('common_inv'),array('class'=>'thickbox','title'=>lang($controller_name.'_count'))).'&nbsp;&nbsp;&nbsp;&nbsp;'.anchor($controller_name."/count_details/$item->item_id/width~$width", lang('common_det'),array('class'=>'thickbox','title'=>lang($controller_name.'_details_count'))).'</td>';//inventory details	
	$table_data_row.='<td width="4%" class="rightmost">'.anchor($controller_name."/view/$item->item_id/width~$width", lang('common_edit'),array('class'=>'thickbox','title'=>lang($controller_name.'_update'))).'</td>';		
	
	$table_data_row.='</tr>';
	return $table_data_row;
}

/*
Gets the html table to manage giftcards.
*/
function get_giftcards_manage_table( $giftcards, $controller )
{
	$CI =& get_instance();
	
	$table='<table class="tablesorter" id="sortable_table">';
	
	$headers = array('<input type="checkbox" id="select_all" />', 
	lang('giftcards_giftcard_number'),
	lang('giftcards_card_value'),
	lang('giftcards_customer_name'),
	'&nbsp', 
	);
	
	$table.='<thead><tr>';
	$count = 0;
	foreach($headers as $header)
	{
		$count++;
		
		if ($count == 1)
		{
			$table.="<th class='leftmost'>$header</th>";
		}
		elseif ($count == count($headers))
		{
			$table.="<th class='rightmost'>$header</th>";
		}
		else
		{
			$table.="<th>$header</th>";		
		}
	}
	$table.='</tr></thead><tbody>';
	$table.=get_giftcards_manage_table_data_rows( $giftcards, $controller );
	$table.='</tbody></table>';
	return $table;
}

/*
Gets the html data rows for the giftcard.
*/
function get_giftcards_manage_table_data_rows( $giftcards, $controller )
{
	$CI =& get_instance();
	$table_data_rows='';
	
	foreach($giftcards->result() as $giftcard)
	{
		$table_data_rows.=get_giftcard_data_row( $giftcard, $controller );
	}
	
	if($giftcards->num_rows()==0)
	{
		$table_data_rows.="<tr><td colspan='11'><div class='warning_message' style='padding:7px;'>".lang('giftcards_no_giftcards_to_display')."</div></tr></tr>";
	}
	
	return $table_data_rows;
}

function get_giftcard_data_row($giftcard,$controller)
{
	$CI =& get_instance();
	$controller_name=strtolower(get_class($CI));
	$width = $controller->get_form_width();
	$link = site_url('reports/detailed_'.$controller_name.'/'.$giftcard->customer_id.'/0');
	$cust_info = $CI->Customer->get_info($giftcard->customer_id);
	
	$table_data_row='<tr>';
	$table_data_row.="<td width='3%'><input type='checkbox' id='giftcard_$giftcard->giftcard_id' value='".$giftcard->giftcard_id."'/></td>";
	$table_data_row.='<td width="15%">'.$giftcard->giftcard_number.'</td>';
	$table_data_row.='<td width="20%">'.to_currency($giftcard->value).'</td>';
	$table_data_row.='<td width="15%"><a class="underline" href="'.$link.'">'.$cust_info->first_name. ' '.$cust_info->last_name.'</a></td>';
	$table_data_row.='<td width="5%" class="rightmost">'.anchor($controller_name."/view/$giftcard->giftcard_id/width~$width", lang('common_edit'),array('class'=>'thickbox','title'=>lang($controller_name.'_update'))).'</td>';		
	
	$table_data_row.='</tr>';
	return $table_data_row;
}

/*
Gets the html table to manage item kits.
*/
function get_item_kits_manage_table( $item_kits, $controller )
{
	$CI =& get_instance();
	
	$table='<table class="tablesorter" id="sortable_table">';
	
	$headers = array('<input type="checkbox" id="select_all" />', 
	lang('items_item_number'),
	lang('item_kits_name'),
	lang('item_kits_description'),
	lang('items_unit_price'),
	lang('items_tax_percents'),
	'&nbsp', 
	);
	
	$table.='<thead><tr>';
	$count = 0;
	foreach($headers as $header)
	{
		$count++;
		
		if ($count == 1)
		{
			$table.="<th class='leftmost'>$header</th>";
		}
		elseif ($count == count($headers))
		{
			$table.="<th class='rightmost'>$header</th>";
		}
		else
		{
			$table.="<th>$header</th>";		
		}
	}
	$table.='</tr></thead><tbody>';
	$table.=get_item_kits_manage_table_data_rows( $item_kits, $controller );
	$table.='</tbody></table>';
	return $table;
}

/*
Gets the html data rows for the item kits.
*/
function get_item_kits_manage_table_data_rows( $item_kits, $controller )
{
	$CI =& get_instance();
	$table_data_rows='';
	
	foreach($item_kits->result() as $item_kit)
	{
		$table_data_rows.=get_item_kit_data_row( $item_kit, $controller );
	}
	
	if($item_kits->num_rows()==0)
	{
		$table_data_rows.="<tr><td colspan='11'><div class='warning_message' style='padding:7px;'>".lang('item_kits_no_item_kits_to_display')."</div></tr></tr>";
	}
	
	return $table_data_rows;
}

function get_item_kit_data_row($item_kit,$controller)
{

	$CI =& get_instance();
	
	$item_kit_tax_info=$CI->Item_kit_taxes->get_info($item_kit->item_kit_id);
	$tax_percents = '';
	foreach($item_kit_tax_info as $tax_info)
	{
		$tax_percents.=$tax_info['percent']. '%, ';
	}
	$tax_percents=substr($tax_percents, 0, -2);

	$controller_name=strtolower(get_class($CI));
	$width = $controller->get_form_width();

	$table_data_row='<tr>';
	$table_data_row.="<td width='3%'><input type='checkbox' id='item_kit_$item_kit->item_kit_id' value='".$item_kit->item_kit_id."'/></td>";
	$table_data_row.='<td width="15%">'.$item_kit->item_kit_number.'</td>';
	$table_data_row.='<td width="15%">'.$item_kit->name.'</td>';
	$table_data_row.='<td width="20%">'.$item_kit->description.'</td>';
	$table_data_row.='<td width="20%" align="right">'.(!is_null($item_kit->unit_price) ? to_currency($item_kit->unit_price) : '').'</td>';
	$table_data_row.='<td width="20%">'.$tax_percents.'</td>';
	$table_data_row.='<td width="5%" class="rightmost">'.anchor($controller_name."/view/$item_kit->item_kit_id/width~$width", lang('common_edit'),array('class'=>'thickbox','title'=>lang($controller_name.'_update'))).'</td>';
	$table_data_row.='</tr>';
	return $table_data_row;
}

function get_quotations_manage_table($items,$controller)
{
	$CI =& get_instance();
	$table='<table class="tablesorter" id="sortable_table">';
	$headers = array('<input type="checkbox" id="select_all" />', 
	$CI->lang->line('qoutations_Date'),
	$CI->lang->line('qoutations_Company'),
	$CI->lang->line('qoutations_Subject'),
	$CI->lang->line('qoutations_Salesman'),
	$CI->lang->line('qoutations_Amount'),
	/*$CI->lang->line('quotation_to_Status'),*/
	$CI->lang->line('quotation_to_pdf'),
	//'&nbsp;'
	);
	$table.='<thead><tr>';
	$count = 0;
	foreach($headers as $header)
	{
		$count++;
		
		if ($count == 1)
		{
			$table.="<th class='leftmost'>$header</th>";
		}
		elseif ($count == count($headers))
		{
			$table.="<th class='rightmost'>$header</th>";
		}
		else
		{
			$table.="<th>$header</th>";		
		}
	}
	$table.='</tr></thead><tbody>';
	$table.=get_quotations_manage_table_data_rows($items,$controller);
	$table.='</tbody></table>';
	return $table;
}

/*
Gets the html data rows for the items.
*/
function get_quotations_manage_table_data_rows($items,$controller)
{
	$CI =& get_instance();
	$table_data_rows='';
	
	foreach($items->result() as $item)
	{
		$table_data_rows.=get_quotations_data_row($item,$controller);
	}
	
	if($items->num_rows()==0)
	{
		$table_data_rows.="<tr><td colspan='11'><div class='warning_message' style='padding:7px;'>".lang('quotations_no_quotations_to_display')."</div></tr></tr>";
	}
	
	return $table_data_rows;
}


function get_quotations_data_row($item,$controller)
{
	$CI =& get_instance();
	$table_data_row='<tr>';
	$table_data_row.="<td width='3%'><input type='checkbox' id='item_$item->quotation_id' value='".$item->quotation_id."'/></td>";
	$table_data_row.='<td width="10%">'.date('d/m/Y',strtotime($item->quote_start_date)).'</td>';
	/*$table_data_row.='<td width="15%">'.$item->company_quotation_name.'</td>';*/
	$table_data_row.='<td width="15%">'.anchor("quotations/view/$item->quotation_id/width~1200/TB_iframe~TRUE", $item->company_quotation_name,array('class'=>'thickbox','title'=>'update_quotations')).'</td>';
	$table_data_row.='<td width="13%">'.$item->quotation_subject.'</td>';
	$table_data_row.='<td width="11%">'.ucfirst($item->quotation_auth).'</td>';
    $table_data_row.='<td width="11%">'.to_currency($item->quotation_grand_total).'</td>';
	/*$table_data_row.='<td width="13%">'.$item->quotation_status.'</td>';*/
	/*$table_data_row.='<td width="5%" class="rightmost">'.anchor("quotations/view/$item->quotation_id/width~1200/TB_iframe~TRUE", lang('common_edit'),array('class'=>'thickbox','title'=>'update_quotations')).'</td>';*/	
	$table_data_row.='<td width="3%" class="tablesorter"><a href="'.base_url().'dompdf/www/quotation_pdf.php?quotation_id='.$item->quotation_id.'"><img src="'.base_url().'/images/pdf_icon.png" width="20"></a></td>';
	$table_data_row.='</tr>';
	return $table_data_row;
}

function get_joborders_manage_table($items,$controller)
{
	$CI =& get_instance();
	$table='<table class="tablesorter" id="sortable_table">';
	$headers = array('<input type="checkbox" id="select_all" />', 
	$CI->lang->line('order_create_Date'),
	$CI->lang->line('order_tracking_no'),
	$CI->lang->line('order_company'),
	$CI->lang->line('order_delivery_date'),
	//$CI->lang->line('order_total_quantity'),
	$CI->lang->line('order_file_upload'),
	$CI->lang->line('quotation_to_Edit'),
	//'&nbsp;'
	);
	$table.='<thead><tr>';
	$count = 0;
	foreach($headers as $header)
	{
		$count++;
		
		if ($count == 1)
		{
			$table.="<th class='leftmost'>$header</th>";
		}
		elseif ($count == count($headers))
		{
			$table.="<th class='rightmost'>$header</th>";
		}
		else
		{
			$table.="<th>$header</th>";		
		}
	}
	$table.='</tr></thead><tbody>';
	$table.=get_joborders_manage_table_data_rows($items,$controller);
	$table.='</tbody></table>';
	return $table;
}

/*
Gets the html data rows for the items.
*/
function get_joborders_manage_table_data_rows($items,$controller)
{
	$CI =& get_instance();
	$table_data_rows='';
	
	foreach($items->result() as $item)
	{
		$table_data_rows.=get_joborders_data_row($item,$controller);
	}
	
	if($items->num_rows()==0)
	{
		$table_data_rows.="<tr><td colspan='11'><div class='warning_message' style='padding:7px;'>".lang('quotations_no_quotations_to_display')."</div></tr></tr>";
	}
	
	return $table_data_rows;
}


function get_joborders_data_row($item,$controller)
{
	$CI =& get_instance();
	$table_data_row='<tr>';
	$table_data_row.="<td width='3%'><input type='checkbox' id='item_$item->order_id' value='".$item->order_id."'/></td>";
	$table_data_row.='<td width="10%">'.date('d/m/Y',strtotime($item->order_creation_date)).'</td>';
	$table_data_row.='<td width="15%">'.$item->order_id.'</td>';
	$table_data_row.='<td width="13%">'.$item->company_quotation_name.'</td>';
	$table_data_row.='<td width="11%">'.date('d/m/Y',strtotime($item->delivery_start_date)).'</td>';
   // $table_data_row.='<td width="11%">'.$item->ordr_total_quantity.'</td>';
	$table_data_row.='<td width="13%">'.anchor("joborders/view_upload/$item->order_id/width~500/TB_iframe~TRUE", lang('order_file_upload'),array('class'=>'thickbox','title'=>'Upload Document')).'</td>';
	$table_data_row.='<td width="5%" class="rightmost">'.anchor("joborders/view_item_convert_order/$item->orderes_product_id/$item->order_id/width~1200/TB_iframe~TRUE", lang('common_edit'),array('class'=>'thickbox','title'=>'Update Joborders')).'</td>';	
	$table_data_row.='</tr>';
	return $table_data_row;
}

function get_invoices_manage_table($items,$controller)
{
	$CI =& get_instance();
	$table='<table class="tablesorter" id="sortable_table">';
	$headers = array('<input type="checkbox" id="select_all" />', 
	$CI->lang->line('qoutations_Date'),
	$CI->lang->line('invoices_no'),
	$CI->lang->line('qoutations_Company'),
	$CI->lang->line('qoutations_Subject'),
	$CI->lang->line('qoutations_Salesman'),
	$CI->lang->line('qoutations_Amount'),
	$CI->lang->line('quotation_to_Status'),
	$CI->lang->line('quotation_to_pdf'),
	//'&nbsp;'
	);
	$table.='<thead><tr>';
	$count = 0;
	foreach($headers as $header)
	{
		$count++;
		
		if ($count == 1)
		{
			$table.="<th class='leftmost'>$header</th>";
		}
		elseif ($count == count($headers))
		{
			$table.="<th class='rightmost'>$header</th>";
		}
		else
		{
			$table.="<th>$header</th>";		
		}
	}
	$table.='</tr></thead><tbody>';
	$table.=get_invoices_manage_table_data_rows($items,$controller);
	$table.='</tbody></table>';
	return $table;
}

/*
Gets the html data rows for the items.
*/
function get_invoices_manage_table_data_rows($items,$controller)
{
	$CI =& get_instance();
	$table_data_rows='';
	
	foreach($items->result() as $item)
	{
		$table_data_rows.=get_invoices_data_row($item,$controller);
	}
	
	if($items->num_rows()==0)
	{
		$table_data_rows.="<tr><td colspan='11'><div class='warning_message' style='padding:7px;'>".lang('quotations_no_quotations_to_display')."</div></tr></tr>";
	}
	
	return $table_data_rows;
}


function get_invoices_data_row($item,$controller)
{
	$CI =& get_instance();
	$table_data_row='<tr>';
	$table_data_row.="<td width='3%'><input type='checkbox' id='item_$item->invoice_id' value='".$item->invoice_id."'/></td>";
	$table_data_row.='<td width="10%">'.date('d/m/Y',strtotime($item->quote_start_date)).'</td>';
	$table_data_row.='<td width="13%">'.$item->invoice_id.'</td>';
	/*$table_data_row.='<td width="15%">'.$item->company_quotation_name.'</td>';*/
	$table_data_row.='<td width="15%">'.anchor("invoices/view/$item->invoice_id/width~1200/TB_iframe~TRUE", $item->company_quotation_name,array('class'=>'thickbox','title'=>'Update Invoice')).'</td>';
	$table_data_row.='<td width="13%">'.$item->quotation_subject.'</td>';
	$table_data_row.='<td width="11%">'.ucfirst($item->quotation_auth).'</td>';
    $table_data_row.='<td width="11%">'.to_currency($item->quotation_grand_total).'</td>';
	$table_data_row.='<td width="13%">'.$item->quotation_status.'</td>';
	/*$table_data_row.='<td width="5%" class="rightmost">'.anchor("quotations/view/$item->quotation_id/width~1200/TB_iframe~TRUE", lang('common_edit'),array('class'=>'thickbox','title'=>'update_quotations')).'</td>';*/	
	$table_data_row.='<td width="5%" class="rightmost"><a href="'.base_url().'dompdf/www/my_test.php?invoice_id='.$item->invoice_id.'">PDF</a></td>';
	$table_data_row.='</tr>';
	return $table_data_row;
}

?>