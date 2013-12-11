<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Commerce;



/**
*	Properties of an ad-hoc price adjustment for an order.
*/
class Adjustment
{
	/**
	*The amount of the order-level adjustment, which can be a positive or negative amount.
	*/
	public $amount;

	/**
	*The shopper-facing description of the order-level adjustment.
	*/
	public $description;

	/**
	*Administrator notes associated with the order adjustment. These comments are not shopper facing.
	*/
	public $internalComment;

}

?>
