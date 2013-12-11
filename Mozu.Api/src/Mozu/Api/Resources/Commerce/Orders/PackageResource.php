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
use Mozu\Api\Clients\Commerce\Orders\PackageClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the packages subresource to manage the physical packages to ship for an order.
*/
class PackageResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the details of a package of order items.
	*
	* @param string $orderId Unique identifier of the order associated with the package to retrieve.
	* @param string $packageId Unique identifier of the package to retrieve.
	* @return Package 
	*/
	public function getPackage( $orderId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PackageClient::getPackageClient( $orderId,  $packageId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of the actions available to perform for a package associated with order fulfillment.
	*
	* @param string $orderId Unique identifier of the order associated with the package fulfillment.
	* @param string $packageId Unique identifier of the package associated with the fulfillment actions to retrieve.
	* @return array|string 
	*/
	public function getAvailablePackageFulfillmentActions( $orderId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PackageClient::getAvailablePackageFulfillmentActionsClient( $orderId,  $packageId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the package label image supplied by the carrier.
	*
	* @param string $orderId Unique identifier of the order associated with the package label to retrieve.
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @return Stream 
	*/
	public function getPackageLabel( $orderId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PackageClient::getPackageLabelClient( $orderId,  $packageId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new physical package of order items.
	*
	* @param string $orderId Unique identifier of the order associated with this package.
	* @param Package $package Properties of the physical package of order items.
	* @return Package 
	*/
	public function createPackage($pkg,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PackageClient::createPackageClient($pkg,  $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a physical package of order items.
	*
	* @param string $orderId Unique identifier of the order associated with the package to update.
	* @param string $packageId Unique identifier of the package of order items to update.
	* @param Package $package Wrapper of properties for the package of order items to update.
	* @return Package 
	*/
	public function updatePackage($pkg,  $orderId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PackageClient::updatePackageClient($pkg,  $orderId,  $packageId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a physical package of items from the specified order.
	*
	* @param string $orderId Unique identifier of the order associated with the package to delete.
	* @param string $packageId Unique identifier of the package to delete.
	*/
	public function deletePackage( $orderId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PackageClient::deletePackageClient( $orderId,  $packageId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

