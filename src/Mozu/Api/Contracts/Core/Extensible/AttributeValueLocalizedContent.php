<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core\Extensible;



/**
*	The attribute value localized content are the content strings used to describe an attribute value in the localized language specified by the site's locale code. Extensible only for customer and order.
*/
class AttributeValueLocalizedContent
{
	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*Localized content for the extensible attribute value.
	*/
	public $value;

}

?>
