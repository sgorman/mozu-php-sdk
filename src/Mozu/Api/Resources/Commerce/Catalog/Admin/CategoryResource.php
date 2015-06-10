<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\CategoryClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Categories resource to organize products and control where they appear on the storefront. Create and maintain a hierarchy of categories and subcategories where the site will store properties.
*/
class CategoryResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query: eq=equals, ne=not equals, gt=greater than, lt = less than or equals, gt = greater than or equals, lt = less than or equals, sw = starts with, or cont = contains. Optional.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CategoryPagedCollection 
	*/
	public function getCategories($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoriesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the list of subcategories within a category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CategoryCollection 
	*/
	public function getChildCategories($categoryId, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getChildCategoriesClient($categoryId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a single category.
	*
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Category 
	*/
	public function getCategory($categoryId, $responseFields =  null)
	{
		$mozuClient = CategoryClient::getCategoryClient($categoryId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a new category to the site's category hierarchy. Specify a ParentCategoryID to determine where to place the category in the hierarchy. If no ParentCategoryID is specified, the new category is a top-level category.
	*
	* @param bool $incrementSequence If true, when adding a new product category, set the sequence number of the new category to an increment of one integer greater than the maximum available sequence number across all product categories. If false, set the sequence number to zero.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Category $category A descriptive container that groups products. A category is merchant defined with associated products and discounts as configured. GThe storefront displays products in a hierarchy of categories. As such, categories can include a nesting of sub-categories to organize products and product options per set guidelines such as color, brand, material, and size.
	* @return Category 
	*/
	public function addCategory($category, $incrementSequence =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::addCategoryClient($category, $incrementSequence, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the properties of a defined category or move it to another location in the category hierarchy. Because this operation replaces the defined resource,include all the information to maintain for the category in the request.
	*
	* @param bool $cascadeVisibility If true, when changing the display option for the category, change it for all subcategories also. Default: False.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Category $category A descriptive container that groups products. A category is merchant defined with associated products and discounts as configured. GThe storefront displays products in a hierarchy of categories. As such, categories can include a nesting of sub-categories to organize products and product options per set guidelines such as color, brand, material, and size.
	* @return Category 
	*/
	public function updateCategory($category, $categoryId, $cascadeVisibility =  null, $responseFields =  null)
	{
		$mozuClient = CategoryClient::updateCategoryClient($category, $categoryId, $cascadeVisibility, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the category specified by its category ID.
	*
	* @param bool $cascadeDelete If true, also delete all subcategories associated with the specified category.
	* @param int $categoryId Unique identifier of the category to modify.
	* @param bool $forceDelete 
	* @param bool $reassignToParent 
	*/
	public function deleteCategoryById($categoryId, $cascadeDelete =  null, $forceDelete =  null, $reassignToParent =  null)
	{
		$mozuClient = CategoryClient::deleteCategoryByIdClient($categoryId, $cascadeDelete, $forceDelete, $reassignToParent);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

