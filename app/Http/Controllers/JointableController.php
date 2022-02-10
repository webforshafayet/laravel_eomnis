<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AdminShowOrderDetails;

class JointableController extends Controller
{
    function index()
    {
    	$data = AdminShowOrderDetails::join('shippings', 'shippings.id', '=', 'payments.id')
              		 
              		->get(['shippings.shipping_first_name', 'shippings.shipping_last_name',	'shippings.shipping_email',	'shippings.shipping_phone',	'shippings.address','shippings.state','shippings.producprice',	'shippings.postcode',	'shippings.product_qty','shippings.tittle',	'payments.payment_id',	'payments.payer_id','payments.payer_email',	'payments.amount',	'payments.currency','payments.payment_status']);

       	/*Above code will produce following query

        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`

        */

        return view('admin.buyer_order', compact('data'));
    }
}
