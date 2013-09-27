<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\CategoryUrl;

/**
* Use the Categories resource to organize products and control where they appear on the storefront. Create and maintain a hierarchy of categories and subcategories where the site will store properties.
*/
class CategoryClient {

	/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product category search results by any of its properties, including its position in the category hierarchy. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getCategoriesClient($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = CategoryUrl::getCategoriesUrl($filter, $pageSize, $sortBy, $startIndex);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a single category.
	*
	* @param int $categoryId Unique identifier of the category to retrieve.
	* @return MozuClient
	*/
	public static function getCategoryClient($categoryId)
	{
		$url = CategoryUrl::getCategoryUrl($categoryId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the subcategories of a category. This is a list of subcategories at the same level (siblings). Use a list of siblings, for example, to display the categories in a horizontal list.
	*
	* @param int $categoryId Unique identifier of the category whose subcategories are retrieved.
	* @return MozuClient
	*/
	public static function getChildCategoriesClient($categoryId)
	{
		$url = CategoryUrl::getChildCategoriesUrl($categoryId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a new category to the site's category hierarchy. Specify a ParentCategoryID to determine where to locate the category in the hierarchy. If a ParentCategoryID is not specified, the new category becomes a top-level category.
	*
	* @param Category $category Properties of the new category. Required properties: ParentCategoryID and Content.Name.
	* @return MozuClient
	*/
	public static function addCategoryClient($category)
	{
		$url = CategoryUrl::addCategoryUrl();
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($category);
		return $mozuClient;

	}
	
	/**
	* Modifies a category such as moving it to another location in the category tree, or changing whether it is visible on the storefront. This PUT replaces the existing resource, so be sure to include all the information to maintain for the category.
	*
	* @param bool $cascadeVisibility If true, when changing the display option for the category, change it for all subcategories also. Default: False.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param Category $category Properties of the category to modify.
	* @return MozuClient
	*/
	public static function updateCategoryClient($cascadeVisibility, $categoryId, $category)
	{
		$url = CategoryUrl::updateCategoryUrl($cascadeVisibility, $categoryId);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($category);
		return $mozuClient;

	}
	
	/**
	* Deletes the category specified by its category ID.
	*
	* @param bool $cascadeDelete If true, any subcategories of a category are deleted when this category is deleted. Default: False.
	* @param int $categoryId Unique identifier of the category to delete.
	*/
	public static function deleteCategoryByIdClient($cascadeDelete, $categoryId)
	{
		$url = CategoryUrl::deleteCategoryByIdUrl($cascadeDelete, $categoryId);
		$verb = "DELETE";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
