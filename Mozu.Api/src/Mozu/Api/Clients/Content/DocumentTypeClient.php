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
use Mozu\Api\Urls\Content\DocumentTypeUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* The DocumentTypes resource is a part of the Content Service.
*/
class DocumentTypeClient {

	/**
	* Retrieves a paged list of DocumentTypes.
	*
	* @param int $pageSize 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function listClient($dataViewMode, $pageSize =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentTypeUrl::listUrl($pageSize, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves an existing DocumentType.
	*
	* @param string $documentTypeName The documentType name being retrieved.
	* @return MozuClient
	*/
	public static function getClient($dataViewMode,  $documentTypeName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentTypeUrl::getUrl($documentTypeName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>
