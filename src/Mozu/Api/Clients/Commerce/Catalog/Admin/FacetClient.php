<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\FacetUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Facets resource to manage the facets shoppers use to filter product display results on a storefront. Facets can include categories, product attributes, or prices, and use either a range of values or discrete values.
*/
class FacetClient {

	/**
	* Retrieves a facet specified by its unique identifier and displays its properties.
	*
	* @param int $facetId Unique identifier of the facet to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param bool $validate Validates that the product category associated with a facet is active. System-supplied and read only.
	* @return MozuClient
	*/
	public static function getFacetClient($facetId, $validate =  null, $responseFields =  null)
	{
		$url = FacetUrl::getFacetUrl($facetId, $responseFields, $validate);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of the facets defined for the specified category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param bool $includeAvailable If true, returns a list of the attributes and categories associated with a product type that have not been defined as a facet for the category.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param bool $validate Validates that the product category associated with a facet is active. System-supplied and read only.
	* @return MozuClient
	*/
	public static function getFacetCategoryListClient($categoryId, $includeAvailable =  null, $validate =  null, $responseFields =  null)
	{
		$url = FacetUrl::getFacetCategoryListUrl($categoryId, $includeAvailable, $responseFields, $validate);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new category, price, or attribute facet. Define the category or attribute source to use for the facet values.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Facet $facet Properties of the facet used to retrieve documents.
	* @return MozuClient
	*/
	public static function addFacetClient($facet, $responseFields =  null)
	{
		$url = FacetUrl::addFacetUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($facet);
		return $mozuClient;

	}
	
	/**
	* Modifies one or more properties of a defined facet.
	*
	* @param int $facetId Unique identifier of the facet to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Facet $facet Properties of the facet used to retrieve documents.
	* @return MozuClient
	*/
	public static function updateFacetClient($facet, $facetId, $responseFields =  null)
	{
		$url = FacetUrl::updateFacetUrl($facetId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($facet);
		return $mozuClient;

	}
	
	/**
	* Deletes the facet specified by its unique identifier.
	*
	* @param int $facetId Unique identifier of the facet to retrieve.
	*/
	public static function deleteFacetByIdClient($facetId)
	{
		$url = FacetUrl::deleteFacetByIdUrl($facetId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

