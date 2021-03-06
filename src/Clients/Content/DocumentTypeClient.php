<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content;

use Mozu\Api\Headers;
use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\DocumentTypeUrl;

/**
* Use the Document Types resource to view the document types supplied by the Content API.
*/
class DocumentTypeClient {

	/**
	* Retrieves a paged list of the system-defined document types.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getDocumentTypesClient($dataViewMode, $pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$url = DocumentTypeUrl::getDocumentTypesUrl($pageSize, $responseFields, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves a system-defined document type.
	*
	* @param string $documentTypeName The name of the document type to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getDocumentTypeClient($dataViewMode, $documentTypeName, $responseFields =  null)
	{
		$url = DocumentTypeUrl::getDocumentTypeUrl($documentTypeName, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Creates a new DocumentType
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentType $documentType The type of documents used in the CMS such as "web_page" or "template" or "image_url".
	* @return MozuClient
	*/
	public static function createDocumentTypeClient($dataViewMode, $documentType, $responseFields =  null)
	{
		$url = DocumentTypeUrl::createDocumentTypeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($documentType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates a DocumentType
	*
	* @param string $documentTypeName The name of the document type to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentType $documentType The type of documents used in the CMS such as "web_page" or "template" or "image_url".
	* @return MozuClient
	*/
	public static function updateDocumentTypeClient($documentType, $documentTypeName, $responseFields =  null)
	{
		$url = DocumentTypeUrl::updateDocumentTypeUrl($documentTypeName, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($documentType);
		return $mozuClient;

	}
	
	
}

?>

