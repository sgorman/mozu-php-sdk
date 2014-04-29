<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Credits;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\Credits\CreditTransactionClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Customer Credit Transactions subresource to manage the individual transactions performed using a store credit or gift card.
*/
class CreditTransactionResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the transactions performed using a customer credit that update the balance of the credit.
	*
	* @param string $code User-defined code that identifies the customer credit.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return CreditTransactionCollection 
	*/
	public function getTransactions($code, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null)
	{
		$mozuClient = CreditTransactionClient::getTransactionsClient($code, $startIndex, $pageSize, $sortBy, $filter);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new transaction and updates the amount of a store credit or gift card.
	*
	* @param string $code User-defined code that identifies the customer credit to update.
	* @param CreditTransaction $creditTransaction Properties of the transaction to create for the customer credit.
	* @return CreditTransaction 
	*/
	public function addTransaction($creditTransaction, $code)
	{
		$mozuClient = CreditTransactionClient::addTransactionClient($creditTransaction, $code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

