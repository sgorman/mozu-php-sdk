<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Wishlists;



/**
*	Properties of a shopper wish list defined for a site, associated with a customer account.
*/
class Wishlist
{
	/**
	*Unique identifier of the channel associated with the wish list.
	*/
	public $channelCode;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Unique identifier of the customer account associated with the wish list.
	*/
	public $customerAccountId;

	/**
	*The interaction type the shopper uses to create the wish list, which is Website, Store, Call, or Unknown. This property is not used at this time and is reserved for future functionality.
	*/
	public $customerInteractionType;

	/**
	*The discounted subtotal of items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $discountedSubtotal;

	/**
	*The subtotal of the cart including any applied discount calculations. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $discountedTotal;

	/**
	*Estimated amount of discounts applied to all items in the wish list, which is system-supplied and read-only.   This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $discountTotal;

	/**
	*The date and time this wish list expires. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $expirationDate;

	/**
	*The identifier an external program uses to identify the Mozu wish list.
	*/
	public $externalId;

	/**
	*The fee total of items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $feeTotal;

	/**
	*The tax amount levied against the handling fee for items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $handlingTaxTotal;

	/**
	*Unique identifier of this shopper wish list. System-supplied and read only.
	*/
	public $id;

	/**
	*If this wish list was imported from an external program, the date and time the wish list was imported.
	*/
	public $importDate;

	/**
	*If true, this wish list was imported from an external program.
	*/
	public $isImport;

	/**
	*The total amount of tax for items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $itemTaxTotal;

	/**
	*The date and time the wish list was last validated against the product catalog.
	*/
	public $lastValidationDate;

	/**
	*The user-defined name of the shopper wish list. The name defined for a wish list does not have to be unique.
	*/
	public $name;

	/**
	*The type of privacy to apply to this wish list. Possible values are "Private" which makes the wish list viewable only to the shopper, "DirectShare" which makes the wish list viewable only to people with whom the shopper shares the wish list link, or "Public" which makes the wish list available to everyone. At this time, the system treats all shopper wish lists as "Public" regardless of the defined privacy type.
	*/
	public $privacyType;

	/**
	*The subtotaled shipping amount for items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $shippingSubTotal;

	/**
	*The total amount of tax levied against shipping charges for items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $shippingTaxTotal;

	/**
	*The total shipping costs for items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $shippingTotal;

	/**
	*Unique identifier of the site.
	*/
	public $siteId;

	/**
	*The integer that represents the sequential order of this wish list in the customer's collection of wish lists.
	*/
	public $sortOrder;

	/**
	*The subtotal of items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $subtotal;

	/**
	*The total tax amount for items in the wish list. This property value is not calculated at this time and is reserved for future functionality.
	*/
	public $taxTotal;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*The total amount of items in the wish list. This property value is not calculated at this time and is reserved for future functionality. If a site's structure distinguishes between wish list types, the site uses the value in this property to categorize the wish lists.
	*/
	public $total;

	/**
	*User-defined string that defines the type of wish list to define, such as wish list, baby registry, or Christmas list.
	*/
	public $typeTag;

	/**
	*System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	*/
	public $version;

	/**
	*Unique identifier of the customer visit in which the wish list was created or last modified. System-supplied and read only.
	*/
	public $visitId;

	/**
	*Unique identifier of the web session in which the wish list was created or last modified. System-supplied and read only.
	*/
	public $webSessionId;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Collection of change messages logged for each modification to a shopper wish list. System-supplied and read only.
	*/
	public $changeMessages;

	/**
	*Properties that determine how items in the wish list are fulfilled.
	*/
	public $fulfillmentInfo;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

	/**
	*Any order discounts that apply to items in the wish list. This property is not used at this time and is reserved for future functionality.
	*/
	public $orderDiscounts;

}

?>
