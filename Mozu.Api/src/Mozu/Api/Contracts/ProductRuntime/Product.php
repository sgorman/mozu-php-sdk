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
*	Properties of the product that appears on a designated storefront.
*/
class Product
{
	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $createDate;

	/**
	*If true, the product is marked as available for sale. Setting a product to IsActive = false will prevent it from being shown on the customer facing storefront.
	*/
	public $isActive;

		public $isPackagedStandAlone;

	/**
	*If true, the product can be purchased or fulfilled at regular intervals such as a monthly billing cycle or a digital or physical subscription.
	*/
	public $isRecurring;

	/**
	*If true, the entity is subject to tax based on the relevant tax rate.
	*/
	public $isTaxable;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*Integer that represents the sequential order of the product.
	*/
	public $productSequence;

	/**
	*A product type is like a product template that can be reused.
	*/
	public $productType;

		public $productUsage;

	/**
	*The publishing state of the product definition in the master catalog, which is "New", "Draft", or "Live".
	*/
	public $publishState;

	/**
	*The universal product code (UPC code) of the product.
	*/
	public $upc;

	/**
	*Product code that represents the product variation selected based on the option values the shopper entered.
	*/
	public $variationProductCode;

	/**
	*List of shipping discounts that can be applied to the product.
	*/
	public $availableShippingDiscounts;

		public $bundledProducts;

	/**
	*List of categories associated with the product.
	*/
	public $categories;

	/**
	*Complex type that contains content for a language specified by LocaleCode.
	*/
	public $content;

	/**
	*Array of active inventory level information associated with the product.
	*/
	public $inventoryInfo;

	/**
	*Dimensions of the packaged product.
	*/
	public $measurements;

	/**
	*The list of options set up in product admin.
	*/
	public $options;

	/**
	*Price that the merchant intends to sell the product which is not necessarily the list price. This is the price the merchant intends to sell the product if no sale price is present.
	*/
	public $price;

	/**
	*For products with options that vary the cost of the product, the range between lowest and highest possible price of the product based on the current selection of options.
	*/
	public $priceRange;

	/**
	*The list of product properties set up in product admin.
	*/
	public $properties;

	/**
	*The current state of the configured product determines whether or not the product is eligible for purchase. Products with options are only purchasable if the shopper has selected all required options. If the product is not ready for purchase, a message lists missing options that are required.
	*/
	public $purchasableState;

}

?>
