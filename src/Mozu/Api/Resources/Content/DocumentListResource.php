<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Content\DocumentListClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the document lists resource to organize your site's documents into a hierarchy. Document lists can contain documents, folders, and complete hierarchies of folders, which contain documents with unique names.
*/
class DocumentListResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a collection of document lists.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param int $startIndex 
	* @return DocumentListCollection 
	*/
	public function getDocumentLists($dataViewMode, $pageSize =  null, $startIndex =  null)
	{
		$mozuClient = DocumentListClient::getDocumentListsClient($dataViewMode, $pageSize, $startIndex);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve the details of a document list by providing the list name.
	*
	* @param string $documentListName The name of the document list.
	* @return DocumentList 
	*/
	public function getDocumentList($dataViewMode, $documentListName)
	{
		$mozuClient = DocumentListClient::getDocumentListClient($dataViewMode, $documentListName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>
