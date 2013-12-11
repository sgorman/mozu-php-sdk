<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	Details of a property attribute defined for a product.
*/
class ProductProperty
{
	/**
	*The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public $attributeFQN;

	/**
	*If true, the product property does not appear for the product in the storefront.
	*/
	public $isHidden;

	/**
	*If true, the product property can have more than one selected value.
	*/
	public $isMultiValue;

	/**
	*Details of the attribute defined as a product property.
	*/
	public $attributeDetail;

	/**
	*List of values defined for the product property attribute.
	*/
	public $values;

}

?>
