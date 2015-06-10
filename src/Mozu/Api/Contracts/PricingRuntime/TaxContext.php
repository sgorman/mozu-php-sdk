<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PricingRuntime;



/**
*	The tax properties associated with the order.
*/
class TaxContext
{
	/**
	*Unique identifier of the customer in Mozu, used to associate customers with data, orders, returns, and in-store credit.
	*/
	public $customerId;

	/**
	*Unique identifier of the tax context.
	*/
	public $taxContextId;

	/**
	*If the order is exempt from sales tax, the unique identifier of the tax exempt entity.
	*/
	public $taxExemptId;

	/**
	*The physical address orders are sent to as a shipping destination. This address may contain multiple lines, city, state/province, country, and zip/postal code. The destination is used to calculate shipping costs.
	*/
	public $destinationAddress;

	/**
	*The physical address from which the order or shipment will ship.
	*/
	public $originAddress;

}

?>
