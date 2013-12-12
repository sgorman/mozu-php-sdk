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
use Mozu\Api\Clients\Commerce\Orders\FulfillmentActionClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Fulfillment resource to manage shipments or pickups of collections of packages for an order.
*/
class FulfillmentActionResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Sets the fulfillment action to "Ship" or "PickUp". To ship an order or prepare it for in-store pickup, the order must have a customer name, the "Open" or "OpenAndProcessing" status. To ship the order, it must also have the full shipping address and shipping method. Shipping all packages or picking up all pickups for an order will complete a paid order.
	*
	* @param string $orderId Unique identifier of the order for which to perform the fulfillment action.
	* @param FulfillmentAction $action The action to perform for the order fulfillment.
	* @return Order 
	*/
	public function performFulfillmentAction($action,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = FulfillmentActionClient::performFulfillmentActionClient($action,  $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

