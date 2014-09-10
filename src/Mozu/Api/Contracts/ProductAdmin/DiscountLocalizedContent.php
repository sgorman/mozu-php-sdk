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
*	The container for the language-specific name of the discount. A container exists for each supported language (LocaleCode). This parameter enables you to display the discount name in multiple languages yet manage it as a single discount internally.
*/
class DiscountLocalizedContent
{
	/**
	*The localizable, shopper-facing description defined for the discount.
	*/
	public $friendlyDescription;

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*The localizable name of the discount.
	*/
	public $name;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>
