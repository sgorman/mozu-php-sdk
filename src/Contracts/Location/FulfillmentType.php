<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Location;



/**
*	Properties of a method used to fulfill items for an order. Fulfillment types are system-supplied, and include direct ship (DS) or in-store pickup (SP) at this time.
*/
class FulfillmentType
{
	/**
	*The system-supplied code that identifies the fulfillment type, which is "DS" for direct ship or "SP" for in-store pickup.
	*/
	public $code;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

}

?>
