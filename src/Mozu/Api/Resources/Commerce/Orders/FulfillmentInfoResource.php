<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\FulfillmentInfoClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Fulfillment Information resource to manage shipping or pickup information for orders.
*/
class FulfillmentInfoResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the fulfillment information for the specified order.
	*
	* @param bool $draft If true, retrieve the draft version of the order's fulfillment information, which might include uncommitted changes.
	* @param string $orderId Unique identifier of the order.
	* @return FulfillmentInfo 
	*/
	public function getFulfillmentInfo($orderId, $draft =  null)
	{
		$mozuClient = FulfillmentInfoClient::getFulfillmentInfoClient($orderId, $draft);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of fulfillment information for the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to set the fulfillment information by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param FulfillmentInfo $fulfillmentInfo Array list of fulfillment information associated with an order.
	* @return FulfillmentInfo 
	*/
	public function setFulFillmentInfo($fulfillmentInfo, $orderId, $updateMode =  null, $version =  null)
	{
		$mozuClient = FulfillmentInfoClient::setFulFillmentInfoClient($fulfillmentInfo, $orderId, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

