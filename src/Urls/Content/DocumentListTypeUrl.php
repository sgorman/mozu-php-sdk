<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Content;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class DocumentListTypeUrl  {

	/**
		* Get Resource Url for CreateDocumentListType
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createDocumentListTypeUrl($responseFields)
	{
		$url = "/api/content/documentlistTypes/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateDocumentListType
		* @param string $documentListTypeFQN 
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateDocumentListTypeUrl($documentListTypeFQN, $responseFields)
	{
		$url = "/api/content/documentlistTypes/{documentListTypeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("documentListTypeFQN", $documentListTypeFQN);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

