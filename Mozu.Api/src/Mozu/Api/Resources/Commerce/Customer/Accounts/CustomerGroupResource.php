<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\Accounts\CustomerGroupClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Groups subresource to associate customer accounts with groups. A customer account can have associations with any number of groups. Customer groups are useful for organizing sets of customers and targeting special customer group discounts.
*/
class CustomerGroupResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieve a list of customer groups associated with the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CustomerGroupCollection 
	*/
	public function getAccountGroups( $accountId, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerGroupClient::getAccountGroupsClient( $accountId, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves details of a customer account in a group.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param int $groupId Unique identifier of the customer group.
	* @return CustomerGroup 
	*/
	public function getAccountGroup( $accountId,  $groupId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerGroupClient::getAccountGroupClient( $accountId,  $groupId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a customer account to a group.
	*
	* @param int $accountId Unique identifier of the customer account to add to a group.
	* @param int $groupId Unique identifier of the customer group to add the customer to.
	* @return CustomerGroup 
	*/
	public function addAccountGroup( $accountId,  $groupId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerGroupClient::addAccountGroupClient( $accountId,  $groupId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a customer account from a group.
	*
	* @param int $accountId Unique identifier of the customer account to remove from the group.
	* @param int $groupId Unique identifier of the customer group.
	*/
	public function deleteAccountGroup( $accountId,  $groupId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerGroupClient::deleteAccountGroupClient( $accountId,  $groupId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>
