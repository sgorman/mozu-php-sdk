<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\ApiContext;
use Mozu\Api\Clients\Commerce\Orders\DigitalPackageClient;


/**
* A digital package is a package in a digital format.
*/
class DigitalPackageResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a collection of fulfillment options for digital packages. Options may include emailed files/links or provided links. 
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId Unique identifier of the order.
	* @return array|string 
	* @deprecated deprecated since version 1.17
	*/
	public function getAvailableDigitalPackageFulfillmentActions($orderId, $digitalPackageId)
	{
		$mozuClient = DigitalPackageClient::getAvailableDigitalPackageFulfillmentActionsClient($orderId, $digitalPackageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of fulfillment options for digital packages. Options may include emailed files/links or provided links. 
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId Unique identifier of the order.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAvailableDigitalPackageFulfillmentActionsAsync($orderId, $digitalPackageId)
	{
		$mozuClient = DigitalPackageClient::getAvailableDigitalPackageFulfillmentActionsClient($orderId, $digitalPackageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* This operation retreives a digital package within an order and it requires two parameters: orderId and digitalPackageId.
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return DigitalPackage 
	* @deprecated deprecated since version 1.17
	*/
	public function getDigitalPackage($orderId, $digitalPackageId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::getDigitalPackageClient($orderId, $digitalPackageId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* This operation retreives a digital package within an order and it requires two parameters: orderId and digitalPackageId.
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDigitalPackageAsync($orderId, $digitalPackageId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::getDigitalPackageClient($orderId, $digitalPackageId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Lets you apply a digital package to the order using the orderId and digitalPackage parameters.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DigitalPackage $digitalPackage Lets you manage an order's digital packages, by applying a digital package to the order.
	* @return DigitalPackage 
	* @deprecated deprecated since version 1.17
	*/
	public function createDigitalPackage($digitalPackage, $orderId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::createDigitalPackageClient($digitalPackage, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Lets you apply a digital package to the order using the orderId and digitalPackage parameters.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createDigitalPackageAsync($digitalPackage, $orderId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::createDigitalPackageClient($digitalPackage, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* This method operates on one digital package, specified by the id given. This method ensures that the digital package ID provided is in the order with the id given, and then updates the properties of that package with the properties of the one passed in using the ‘digitalpackage’ parameter.
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DigitalPackage $digitalPackage Lets you manage an order's digital packages, by applying a digital package to the order.
	* @return DigitalPackage 
	* @deprecated deprecated since version 1.17
	*/
	public function updateDigitalPackage($digitalPackage, $orderId, $digitalPackageId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::updateDigitalPackageClient($digitalPackage, $orderId, $digitalPackageId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* This method operates on one digital package, specified by the id given. This method ensures that the digital package ID provided is in the order with the id given, and then updates the properties of that package with the properties of the one passed in using the ‘digitalpackage’ parameter.
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateDigitalPackageAsync($digitalPackage, $orderId, $digitalPackageId, $responseFields =  null)
	{
		$mozuClient = DigitalPackageClient::updateDigitalPackageClient($digitalPackage, $orderId, $digitalPackageId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* This operation deletes a digital package from an order. This operation requires three parameters: orderId, digitalPackageId, and digitalPackage.
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId Unique identifier of the order.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteDigitalPackage($orderId, $digitalPackageId)
	{
		$mozuClient = DigitalPackageClient::deleteDigitalPackageClient($orderId, $digitalPackageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* This operation deletes a digital package from an order. This operation requires three parameters: orderId, digitalPackageId, and digitalPackage.
	*
	* @param string $digitalPackageId This parameter supplies package ID to get fulfillment actions for the digital package.
	* @param string $orderId Unique identifier of the order.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteDigitalPackageAsync($orderId, $digitalPackageId)
	{
		$mozuClient = DigitalPackageClient::deleteDigitalPackageClient($orderId, $digitalPackageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

