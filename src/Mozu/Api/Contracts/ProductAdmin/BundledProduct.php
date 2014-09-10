<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties of a component product in a product bundle. A product bundle can represent either a collection of multiple products sold as a single entity, or a collection of the same product sold as a package. For example, a 10-pack of socks.
*/
class BundledProduct
{
	/**
	*Indicates the fulfillment types that the product supports.
	*/
	public $fulfillmentTypesSupported;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*The read-only name of the component in a bundled product.
	*/
	public $productName;

	/**
	*The quantity of an individual component product in a bundle. For example, if a product bundle represents a 10-pack of socks, the quantity value for the bundled product would be 10.
	*/
	public $quantity;

	/**
	*Height of the bundle package in imperial units of feet and inches.
	*/
	public $packageHeight;

	/**
	*Length of the bundle package in imperial units of feet and inches.
	*/
	public $packageLength;

	/**
	*Weight of the bundle package in imperial units of pounds and ounces.
	*/
	public $packageWeight;

	/**
	*Width of the bundle package in imperial units of feet and inches.
	*/
	public $packageWidth;

	/**
	*The price of the bundled product set for the tenant.
	*/
	public $price;

}

?>
