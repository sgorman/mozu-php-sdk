<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Tenant;



/**
*	Properties of an individual product catalog.
*/
class Catalog
{
	/**
	*The date time in UTC format set when the object was created. 
	*/
	public $createDate;

	/**
	*The default three-letter ISO currency code for monetary amounts. Currently, only "USD" is supported for U.S. Dollar.
	*/
	public $defaultCurrencyCode;

	/**
	*The two-letter default locale code for setting the localized text content. Currently, only "en-US" is supported for U.S. English.
	*/
	public $defaultLocaleCode;

	/**
	*The date and time the object was deleted. 
	*/
	public $deleteDate;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Indicates if the object is deleted. If true, the object has been deleted. This may affect associated child members and objects. For example, a deleted master catalog affects all associated catalogs. 
	*/
	public $isDeleted;

	/**
	*Unique identifier for the master catalog. 
	*/
	public $masterCatalogId;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*The current status of an object. This status is specific to the object including payment (New, Authorized, Captured, Declined, Failed, Voided, Credited, CheckRequested, or RolledBack), discount (Active, Scheduled, or Expired), returns (ReturnAuthorized), tenant, package (Fulfilled or NotFulfilled), application, master and product catalogs, orders (Pending, Submitted, Processing, Pending Review, Closed, or Canceled), and order validation results (Pass, Fail, Error, or Review).
	*/
	public $status;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*The date and time the object was updated most recently. The date is in UTC format.
	*/
	public $updateDate;

}

?>
