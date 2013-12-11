<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Products;



/**
*	An option attribute configured for a product on a storefront.
*/
class ProductOption
{
	/**
	*The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public $attributeFQN;

	/**
	*The data type, such as bool or string, used in this option attribute.
	*/
	public $dataType;

	/**
	*The name of the product option attribute in the language of the locale code specified for the storefront.
	*/
	public $name;

	/**
	*The value a shopper entered for an option attribute that requires additional input for the product on a storefront.
	*/
	public $shopperEnteredValue;

	/**
	*If the value is a string, the string entered for the value.
	*/
	public $stringValue;

	/**
	*If the value if an object, the value selected.
	*/
	public $value;

}

?>
