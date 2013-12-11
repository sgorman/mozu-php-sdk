<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\DocumentListUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the document lists resource to organize your site's documents into a hierarchy. Document lists can contain documents, folders, and complete hierarchies of folders, which contain documents with unique names.
*/
class DocumentListClient {

	/**
	* Retrieves a collection of document lists.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sort 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getDocumentListsClient($dataViewMode, $pageSize =  null, $sort =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentListUrl::getDocumentListsUrl($pageSize, $sort, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieve the details of a document list by providing the list name.
	*
	* @param string $documentListName The name of the document list.
	* @return MozuClient
	*/
	public static function getDocumentListClient($dataViewMode,  $documentListName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentListUrl::getDocumentListUrl($documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

