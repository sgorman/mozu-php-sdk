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
*	Represents configurable options that a shopper can choose when ordering a product, such as a t-shirt color and size.
*/
class ProductOption
{
	/**
	*The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public $attributeFQN;

	/**
	*If true, the product attribute or option has multiple values.
	*/
	public $isMultiValue;

	/**
	*If true, the entity is required for the request to return a valid response.
	*/
	public $isRequired;

	/**
	*Details of the product option attribute.
	*/
	public $attributeDetail;

	/**
	*List of possible values for a product option attribute.
	*/
	public $values;

}

?>
