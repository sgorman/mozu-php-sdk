<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Shipping;



/**
*	Properties of the shipment signature requirements for the specified site.
*/
class SiteShippingSignatureRequirement
{
	/**
	*If true, this site requires signatures on shipments for orders that exceed the minimum value threshold.
	*/
	public $isSignatureRequired;

	/**
	*The minimum order amount that requires a signature on shipments. For example, if you want to require customer signatures on all orders over $5,000, the MinimumValueThreshold would be 5001.
	*/
	public $minimumValueThreshold;

}

?>
