<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class AttributeUrl  {

	/**
		* Get Resource Url for GetAttributes
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAttributesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAttribute
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getAttributeUrl($attributeFQN, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAttribute
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addAttributeUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAttribute
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateAttributeUrl($attributeFQN, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAttribute
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @return string Resource Url
	*/
	public static function deleteAttributeUrl($attributeFQN)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		return $mozuUrl;
	}
	
}

?>

