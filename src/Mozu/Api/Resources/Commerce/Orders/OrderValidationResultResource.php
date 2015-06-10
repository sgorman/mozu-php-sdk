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
use Mozu\Api\Clients\Commerce\Orders\OrderValidationResultClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Manage the results of order validation.
*/
class OrderValidationResultResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the validation results associated with the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @return array|OrderValidationResult 
	*/
	public function getValidationResults($orderId)
	{
		$mozuClient = OrderValidationResultClient::getValidationResultsClient($orderId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Add a new order validation result to a submitted order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param OrderValidationResult $validationResult Properties of the resulting order validation performed by an order validation capability.
	* @return OrderValidationResult 
	*/
	public function addValidationResult($validationResult, $orderId, $responseFields =  null)
	{
		$mozuClient = OrderValidationResultClient::addValidationResultClient($validationResult, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

