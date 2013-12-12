<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductTypeVariationUrl  {

	/**
		* Get Resource Url for GenerateProductVariations
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $productCode 
		* @param int $productTypeId Unique identifier of the product type.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function generateProductVariationsUrl($filter, $pageSize, $productCode, $productTypeId, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/variations?productCode={productCode}&startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("productTypeId", $productTypeId);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
}

?>

