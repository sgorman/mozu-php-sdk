<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Discounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Discounts\DiscountTargetClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Retrieves and modifies the products, categories, and shipping methods eligible for discounts in the form of a fixed dollar amount, percentage off a product price, or free shipping.
*/
class DiscountTargetResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the discount target, that is which products, categories, or shipping methods are eligible for the discount.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @return DiscountTarget 
	*/
	public function getDiscountTarget($dataViewMode,  $discountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountTargetClient::getDiscountTargetClient($dataViewMode,  $discountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Modifies properties of the discount target, for example, the dollar amount, or precentage off the price.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read-only.
	* @param DiscountTarget $discountTarget Properties of the discount target to modify. Required properties: Target.Type. Any unspecified properties are set to null and boolean variables to false.
	* @return DiscountTarget 
	*/
	public function updateDiscountTarget($dataViewMode, $discountTarget,  $discountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountTargetClient::updateDiscountTargetClient($dataViewMode, $discountTarget,  $discountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>
