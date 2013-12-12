<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Returns;



/**
*	Properties of a return of one or more previously fulfilled items.
*/
class MozuReturn
{
	/**
	*The actions a user can perform for the return at this time.
	*/
	public $availableActions;

	/**
	*The code that identifies the channel associated with the return, which is typically the same channel associated with the order.
	*/
	public $channelCode;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Unique identifier of the customer account associated with the return.
	*/
	public $customerAccountId;

	/**
	*String that describes the customer interaction used to return an item. Possible values are Website, Store, Call, and Unknown.
	*/
	public $customerInteractionType;

	/**
	*Unique identifier of the return.
	*/
	public $id;

	/**
	*The code that uniquely identifies the location where items were returned.
	*/
	public $locationCode;

	/**
	*The total value of the return to the merchant for accounting purposes. This total represents the combined product loss and shipping loss associated with the return.
	*/
	public $lossTotal;

	/**
	*If this return is associated with a previously completed order, the unique identifier of the original order.
	*/
	public $originalOrderId;

	/**
	*The total tax amount levied on the product loss amount.
	*/
	public $productLossTaxTotal;

	/**
	*The total value of the product returned to the merchant for accounting purposes, calculated by multiplying the cost of the item by its quantity returned.
	*/
	public $productLossTotal;

	/**
	*If a refund action was performed for this return, the total amount refunded to the shopper. The refund amount can differ from the sum of the price of the returned items.
	*/
	public $refundAmount;

	/**
	*A merchant-specific identifier used to sequentially order returns.
	*/
	public $returnNumber;

	/**
	*Unique identifier for the order created as a result of the return. If the return results in shipping a replacement item, the order includes shipment information for the replaced items. If the return results in a refund, the order includes payment transactions to credit the shopper.
	*/
	public $returnOrderId;

	/**
	*The type of return, which is "Refund" or "Replace".
	*/
	public $returnType;

	/**
	*The date by which a shopper must ship items associated with a return in an "awaiting items" state to the merchant.
	*/
	public $rmaDeadline;

	/**
	*The total tax amount levied on the shipping loss amount.
	*/
	public $shippingLossTaxTotal;

	/**
	*The total value of shipping the returned product to the merchant for accounting purposes, calculated by multiplying the shipping cost of the item by its quantity returned.
	*/
	public $shippingLossTotal;

	/**
	*Unique identifier of the site.
	*/
	public $siteId;

	/**
	*Current status of the return, such as "ReturnAuthorized".
	*/
	public $status;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*Unique identifier of the user responsible for the return. Read only and supplied by the original order.
	*/
	public $userId;

	/**
	*The unique identifier of the customer visit associated with the return transaction.
	*/
	public $visitId;

	/**
	*Unique identifier of the web session in which the return was created or last modified, which is system-supplied and read only.
	*/
	public $webSessionId;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

	/**
	*Collection of merchant-supplied notes entered for the return.
	*/
	public $notes;

	/**
	*List of packages associated with a replacement order for a return.
	*/
	public $packages;

	/**
	*Array list of payments associated with this return, if applicable.
	*/
	public $payments;

}

?>
