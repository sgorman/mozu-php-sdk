<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\ProductClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use this resource to create products, view the attributes associated with existing products, and determine which sites feature a specific product.
*/
class ProductResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of products according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param bool $noCount If true, the operation does not return the TotalCount number of results.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of product search terms to use in the query when searching across product code and product name. Separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ProductCollection 
	*/
	public function getProducts($dataViewMode, $filter =  null, $noCount =  null, $pageSize =  null, $q =  null, $qLimit =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::getProductsClient($dataViewMode, $filter, $noCount, $pageSize, $q, $qLimit, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves an existing product.
	*
	* @param string $productCode Merchant-created code associated with the product such as a SKU. Max length: 30. Accepts a to z, A to Z, Ãƒâ€¹-ÃƒËœ, 0 to 9, #, semicolon, commas, apostrophes, and Spaces, but no punctuation or other characters.
	* @return Product 
	*/
	public function getProduct($dataViewMode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::getProductClient($dataViewMode,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a product that is associated with one or more specific catalogs.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return array|ProductInCatalogInfo 
	*/
	public function getProductInCatalogs($dataViewMode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::getProductInCatalogsClient($dataViewMode,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a product associated with a specific catalog.
	*
	* @param int $catalogId 
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return ProductInCatalogInfo 
	*/
	public function getProductInCatalog($dataViewMode,  $catalogId,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::getProductInCatalogClient($dataViewMode,  $catalogId,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new product definition in the specified master catalog.
	*
	* @param Product $product Properties of the new product. You must supply values for the product code, product name, and price.
	* @return Product 
	*/
	public function addProduct($dataViewMode, $product, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::addProductClient($dataViewMode, $product, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Associates a new product defined in the master catalog with a specific catalog.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param ProductInCatalogInfo $productInCatalogInfoIn Properties of the product to define for the specific catalog association.
	* @return ProductInCatalogInfo 
	*/
	public function addProductInCatalog($dataViewMode, $productInCatalogInfoIn,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::addProductInCatalogClient($dataViewMode, $productInCatalogInfoIn,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a product definition in a master catalog.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param Product $product Properties of the product definition to update in the master catalog.
	* @return Product 
	*/
	public function updateProduct($dataViewMode, $product,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::updateProductClient($dataViewMode, $product,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the properties of a product specific to each catalog associated with the product.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param array|ProductInCatalogInfo $productInCatalogsIn Properties of the product to update for each associated catalog.
	* @return array|ProductInCatalogInfo 
	*/
	public function updateProductInCatalogs($dataViewMode, $productInCatalogsIn,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::updateProductInCatalogsClient($dataViewMode, $productInCatalogsIn,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a product associated with a specific catalog.
	*
	* @param int $catalogId 
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param ProductInCatalogInfo $productInCatalogInfoIn Properties of the product associated with the catalog specified in the request.
	* @return ProductInCatalogInfo 
	*/
	public function updateProductInCatalog($dataViewMode, $productInCatalogInfoIn,  $catalogId,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::updateProductInCatalogClient($dataViewMode, $productInCatalogInfoIn,  $catalogId,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the specified product from a master catalog.
	*
	* @param string $productCode 
	*/
	public function deleteProduct($dataViewMode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::deleteProductClient($dataViewMode,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Removes the product association defined for a specific catalog.
	*
	* @param int $catalogId 
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public function deleteProductInCatalog($dataViewMode,  $catalogId,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductClient::deleteProductInCatalogClient($dataViewMode,  $catalogId,  $productCode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>
