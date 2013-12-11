<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\AttributeUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Attribute Definition resource to manage the properties, options, and extras that uniquely describe products of a specific type. Attributes can be associated with a product type, assigned values by a merchant or shopper, and added as faceted search filters for a product category. Options are product attributes that describe unique configurations made by the shopper, such as size or color, and generate a new product variation (or unique SKU). Properties are product attributes that describe aspects of the product that do not represent an option configurable by the shopper, such as screen resolution or brand. Extras are product attributes that describe add-on configurations made by the shopper that do not represent a product variation, such as a monogram.
*/
class AttributeClient {

	/**
	* Retrieves a paged list of attributes according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAttributesClient($dataViewMode, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AttributeUrl::getAttributesUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the specified product attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return MozuClient
	*/
	public static function getAttributeClient($dataViewMode,  $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AttributeUrl::getAttributeUrl($attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new attribute to describe one aspect of a product such as color or size, based on its defined product type. The attribute name, attribute type, input type, and data type are required.
	*
	* @param Attribute $attribute Properties of the new product attribute to create.
	* @return MozuClient
	*/
	public static function addAttributeClient($dataViewMode, $attribute, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AttributeUrl::addAttributeUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates an existing attribute with attribute properties to set.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param Attribute $attribute Any properties of the attribute that to update.
	* @return MozuClient
	*/
	public static function updateAttributeClient($dataViewMode, $attribute,  $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AttributeUrl::updateAttributeUrl($attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes a defined product attribute. You cannot delete an attribute assigned a value for a product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public static function deleteAttributeClient($dataViewMode,  $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AttributeUrl::deleteAttributeUrl($attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

