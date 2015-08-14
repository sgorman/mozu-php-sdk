<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content\Documentlists;

use Mozu\Api\ApiContext;
use Mozu\Api\Clients\Content\Documentlists\ViewClient;


/**
* Properties and content for views within a site/tenant. Views provide the schema, formatting, and associated content and entities for displaying content within a site/tenant.
*/
class ViewResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a collection of documents associated with a view.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The amount is divided and displayed on the `pageCount `amount of pages. The default is 20 and maximum value is 200 per page.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a `pageSize `of 25, to get the 51st through the 75th items, use `startIndex=3`.
	* @param string $viewName The name for a view. Views are used to render data in Mozu, such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
	* @return DocumentCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getViewDocuments($documentListName, $viewName, $filter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = ViewClient::getViewDocumentsClient($documentListName, $viewName, $filter, $sortBy, $pageSize, $startIndex, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of documents associated with a view.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The amount is divided and displayed on the `pageCount `amount of pages. The default is 20 and maximum value is 200 per page.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a `pageSize `of 25, to get the 51st through the 75th items, use `startIndex=3`.
	* @param string $viewName The name for a view. Views are used to render data in Mozu, such as document and entity lists. Each view includes a schema, format, name, ID, and associated data types to render.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getViewDocumentsAsync($documentListName, $viewName, $filter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = ViewClient::getViewDocumentsClient($documentListName, $viewName, $filter, $sortBy, $pageSize, $startIndex, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
