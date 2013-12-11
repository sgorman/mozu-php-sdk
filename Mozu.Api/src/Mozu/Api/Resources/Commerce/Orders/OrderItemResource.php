<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\OrderItemClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use this subresource to retrieve details about items in an active order.
*/
class OrderItemResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the details of a single order item.
	*
	* @param bool $draft If true, retrieve the draft version of this order item, which might include uncommitted changes to the order item, the order, or other order components.
	* @param string $orderId Unique identifier of the order item to retrieve.
	* @param string $orderItemId Unique identifier of the order item details to retrieve.
	* @return OrderItem 
	*/
	public function getOrderItem( $orderId,  $orderItemId, $draft =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderItemClient::getOrderItemClient( $orderId,  $orderItemId, $draft, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of all items in an order.
	*
	* @param bool $draft If true, retrieve the draft version of the order's items, which might include uncommitted changes to one or more order items, the order itself, or other order components.
	* @param string $orderId Unique identifier of the order items to retrieve.
	* @return OrderItemCollection 
	*/
	public function getOrderItems( $orderId, $draft =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderItemClient::getOrderItemsClient( $orderId, $draft, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a new item to an existing order.
	*
	* @param string $orderId Unique identifier of the order for which to add the item.
	* @param bool $skipInventoryCheck 
	* @param string $updateMode Specifies whether to add the item by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param OrderItem $orderItem The properties of the item to create in the existing order.
	* @return Order 
	*/
	public function createOrderItem($orderItem,  $orderId, $skipInventoryCheck =  null, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderItemClient::createOrderItemClient($orderItem,  $orderId, $skipInventoryCheck, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the discount applied to an item in an order.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $orderId Unique identifier of the order associated with the item discount.
	* @param string $orderItemId Unique identifier of the item in the order.
	* @param string $updateMode Specifies whether to change the item discount by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param AppliedDiscount $discount Properties of the discount to modify for the order item.
	* @return Order 
	*/
	public function updateOrderItemDiscount($discount,  $discountId,  $orderId,  $orderItemId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderItemClient::updateOrderItemDiscountClient($discount,  $discountId,  $orderId,  $orderItemId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Override the price of an individual product on a line item in the specified order.
	*
	* @param string $orderId Unique identifier of the order containing the item to price override.
	* @param string $orderItemId Unique identifier of the item in the order to price override.
	* @param decimal $price The override price to specify for this item in the specified order.
	* @param string $updateMode Specifies whether to change the product price by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Order 
	*/
	public function updateItemProductPrice( $orderId,  $orderItemId,  $price, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderItemClient::updateItemProductPriceClient( $orderId,  $orderItemId,  $price, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the quantity of an item in an order.
	*
	* @param string $orderId Unique identifier of the order containing the item to update quantity.
	* @param string $orderItemId Unique identifier of the item in the order to update quantity.
	* @param int $quantity The quantity of the item in the order to update.
	* @param string $updateMode Specifies whether to change the item quantity by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Order 
	*/
	public function updateItemQuantity( $orderId,  $orderItemId,  $quantity, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderItemClient::updateItemQuantityClient( $orderId,  $orderItemId,  $quantity, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a previously added item from an existing order.
	*
	* @param string $orderId Unique identifier of the order with the item to remove.
	* @param string $orderItemId Unique identifier of the item to remove from the order.
	* @param string $updateMode Specifies whether to remove the item by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Order 
	*/
	public function deleteOrderItem( $orderId,  $orderItemId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderItemClient::deleteOrderItemClient( $orderId,  $orderItemId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

