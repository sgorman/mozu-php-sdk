<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Content\Documentlists\FolderClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the folders subresource to organize content into folders.
*/
class FolderResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the properties of an existing folder.
	*
	* @param string $documentListName The name of the document list associated with the folder to retrieve.
	* @param string $folderId The unique identifier of the folder to retrieve.
	* @return Folder 
	*/
	public function getFolder($dataViewMode,  $documentListName,  $folderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = FolderClient::getFolderClient($dataViewMode,  $documentListName,  $folderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve a list of content folders according to any filter and sort criteria.
	*
	* @param string $documentListName The name of the document list that contains this folder.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sort The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return FolderCollection 
	*/
	public function getFolders($dataViewMode,  $documentListName,  $filter, $pageSize =  null, $sort =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = FolderClient::getFoldersClient($dataViewMode,  $documentListName,  $filter, $pageSize, $sort, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new folder.
	*
	* @param string $documentListName The name of the document list for which to create a new folder.
	* @param Folder $folder The name of the newly created folder.
	* @return Folder 
	*/
	public function createFolder($dataViewMode, $folder,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = FolderClient::createFolderClient($dataViewMode, $folder,  $documentListName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates an existing content folder in a document list.
	*
	* @param string $documentListName The name of the document list that contains this folder.
	* @param string $folderId Unique identifier of the folder.
	* @param Folder $folder Properties of the folder to update.
	* @return Folder 
	*/
	public function updateFolder($dataViewMode, $folder,  $documentListName,  $folderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = FolderClient::updateFolderClient($dataViewMode, $folder,  $documentListName,  $folderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a folder of documents from the specified document list.
	*
	* @param string $documentListName The name of the document list associated with the folder to delete.
	* @param string $folderId The unique identifier of the folder to delete.
	*/
	public function deleteFolder($dataViewMode,  $documentListName,  $folderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = FolderClient::deleteFolderClient($dataViewMode,  $documentListName,  $folderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

