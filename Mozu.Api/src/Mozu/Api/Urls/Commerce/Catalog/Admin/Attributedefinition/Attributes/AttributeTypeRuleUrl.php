<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\Urls\BaseUrl;

class AttributeTypeRuleUrl extends BaseUrl {

	/**
		* Get Resource Url for GetAttributeTypeRules
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAttributeTypeRulesUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/typerules/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = parent::formatUrl($url, "filter", $filter);
		$url = parent::formatUrl($url, "pageSize", $pageSize);
		$url = parent::formatUrl($url, "sortBy", $sortBy);
		$url = parent::formatUrl($url, "startIndex", $startIndex);
		return $url;
	}
	
}

?>
