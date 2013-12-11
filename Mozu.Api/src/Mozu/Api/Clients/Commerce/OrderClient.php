<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\OrderUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Orders resource to manage all components of order processing, payment, and fulfillment.
*/
class OrderClient {

	/**
	* Retrieves a list of orders according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter an order's search results by any of its properties, including status, contact information, or total. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=Status+eq+Submitted"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of order search terms to use in the query when searching across order number and the name or email of the billing contact. Separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getOrdersClient($filter =  null, $pageSize =  null, $q =  null, $qLimit =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::getOrdersUrl($filter, $pageSize, $q, $qLimit, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves available order actions which depends on the status of the order. Actions are "CreateOrder," "SubmitOrder," "SetOrderAsProcessing," "CloseOrder," or "CancelOrder."
	*
	* @param string $orderId Unique identifier of the available order actions to get.
	* @return MozuClient
	*/
	public static function getAvailableActionsClient( $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::getAvailableActionsUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @return MozuClient
	*/
	public static function getTaxableOrdersClient( $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::getTaxableOrdersUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of an order specified by the order ID.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order details to get.
	* @return MozuClient
	*/
	public static function getOrderClient( $orderId, $draft =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::getOrderUrl($draft, $orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new order for no-cart quick-ordering scenarios.
	*
	* @param Order $order All properties of the order to place.
	* @return MozuClient
	*/
	public static function createOrderClient($order, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::createOrderUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($order);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new order from an existing cart when the customer chooses to proceed to checkout.
	*
	* @param string $cartId Unique identifier of the cart. This is the original cart ID expressed as a GUID.
	* @return MozuClient
	*/
	public static function createOrderFromCartClient( $cartId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::createOrderFromCartUrl($cartId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Perform the specified action for an order. Available actions depend on the current status of the order. When in doubt, first get a list of available order actions.
	*
	* @param string $orderId Unique identifier of the order.
	* @param OrderAction $action Action to perform, which can be "CreateOrder," "SubmitOrder," "SetOrderAsProcessing," "CloseOrder," or "CancelOrder."
	* @return MozuClient
	*/
	public static function performOrderActionClient($action,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::performOrderActionUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($action);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Update the properties of a discount applied to an order.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $orderId Unique identifier of the order discount. System-supplied and read only.
	* @param string $updateMode Specifies whether to modify the discount by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param AppliedDiscount $discount Properties of the order discount to update.
	* @return MozuClient
	*/
	public static function updateOrderDiscountClient($discount,  $discountId,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::updateOrderDiscountUrl($discountId, $orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($discount);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the current draft version of the order, which also deletes any uncommitted changes made to the order in draft mode.
	*
	* @param string $orderId Unique identifier of the order associated with the draft to delete.
	* @param string $version If applicable, the version of the order draft to delete.
	*/
	public static function deleteOrderDraftClient( $orderId, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::deleteOrderDraftUrl($orderId, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates the user ID of the shopper who placed the order to the current user.
	*
	* @param string $orderId Unique identifier of the order.
	* @return MozuClient
	*/
	public static function changeOrderUserIdClient( $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::changeOrderUserIdUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates the specified order when additional order information, such as shipping or billing information, is modified during the checkout process.
	*
	* @param string $orderId Unique identifier of the order to update.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param Order $order The properties of the order to update.
	* @return MozuClient
	*/
	public static function updateOrderClient($order,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = OrderUrl::updateOrderUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($order);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

