<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\ApiContext;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\AttributeClient;


/**
* Use the Attribute Definition resource to manage the properties, options, and extras that uniquely describe products of a specific type. Attributes can be associated with a product type, assigned values by a client or shopper, and added as faceted search filters for a product category. Options are product attributes that describe unique configurations made by the shopper, such as size or color, and generate a new product variation (or unique SKU). Properties are product attributes that describe aspects of the product that do not represent an option configurable by the shopper, such as screen resolution or brand. Extras are product attributes that describe add-on configurations made by the shopper that do not represent a product variation, such as a monogram.
*/
class AttributeResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a paged list of attributes according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return AttributeCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributes($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a paged list of attributes according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributesAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the specified product attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Attribute 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttribute($attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributeClient($attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the specified product attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributeAsync($attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributeClient($attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new attribute to describe one aspect of a product such as color or size, based on its defined product type. The attribute name, attribute type, input type, and data type are required.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Attribute $attribute Properties of an attribute used to describe customers or orders.
	* @return Attribute 
	* @deprecated deprecated since version 1.17
	*/
	public function addAttribute($attribute, $responseFields =  null)
	{
		$mozuClient = AttributeClient::addAttributeClient($attribute, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new attribute to describe one aspect of a product such as color or size, based on its defined product type. The attribute name, attribute type, input type, and data type are required.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addAttributeAsync($attribute, $responseFields =  null)
	{
		$mozuClient = AttributeClient::addAttributeClient($attribute, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates an existing attribute with attribute properties to set.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Attribute $attribute Properties of an attribute used to describe customers or orders.
	* @return Attribute 
	* @deprecated deprecated since version 1.17
	*/
	public function updateAttribute($attribute, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::updateAttributeClient($attribute, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates an existing attribute with attribute properties to set.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateAttributeAsync($attribute, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::updateAttributeClient($attribute, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a defined product attribute. You cannot delete an attribute assigned a value for a product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteAttribute($attributeFQN)
	{
		$mozuClient = AttributeClient::deleteAttributeClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a defined product attribute. You cannot delete an attribute assigned a value for a product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteAttributeAsync($attributeFQN)
	{
		$mozuClient = AttributeClient::deleteAttributeClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

