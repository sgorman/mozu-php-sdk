<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Products;

use Mozu\Api\Headers;
use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Products\ProductVariationUrl;

/**
* Use the product variations sub-resource to manage the variations of a product based on its attributes. For example, a t-shirt product could be offered in six variations: Small Black, Medium Black, Large Black, Small White, Medium White, and Large White.
*/
class ProductVariationClient {

	/**
	* Retrieves a collection of the localized delta price values for a product variation. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @return MozuClient
	*/
	public static function getProductVariationLocalizedDeltaPricesClient($dataViewMode, $productCode, $variationKey)
	{
		$url = ProductVariationUrl::getProductVariationLocalizedDeltaPricesUrl($productCode, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the localized delta price value for a product variation. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @return MozuClient
	*/
	public static function getProductVariationLocalizedDeltaPriceClient($dataViewMode, $productCode, $variationKey, $currencyCode, $responseFields =  null)
	{
		$url = ProductVariationUrl::getProductVariationLocalizedDeltaPriceUrl($currencyCode, $productCode, $responseFields, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a product variation based on the supplied product code and variation key.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @return MozuClient
	*/
	public static function getProductVariationClient($dataViewMode, $productCode, $variationKey, $responseFields =  null)
	{
		$url = ProductVariationUrl::getProductVariationUrl($productCode, $responseFields, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of the product variations configured for the specified product code.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getProductVariationsClient($dataViewMode, $productCode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = ProductVariationUrl::getProductVariationsUrl($filter, $pageSize, $productCode, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Adds the localized delta price value for a product variation. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @param ProductVariationDeltaPrice $localizedDeltaPrice The difference between the base price for the product and this variation of the product, which can be a positive or negative decimal value. For example, if the base price for a t-shirt product is $10, but the XL variation should cost $12, the DeltaPrice value should be "2". However, if the XS variation should only cost $8, the DeltaPrice value should be "-2".
	* @return MozuClient
	*/
	public static function addProductVariationLocalizedDeltaPriceClient($dataViewMode, $localizedDeltaPrice, $productCode, $variationKey, $responseFields =  null)
	{
		$url = ProductVariationUrl::addProductVariationLocalizedDeltaPriceUrl($productCode, $responseFields, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($localizedDeltaPrice)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates all localized delta price values for a product variation. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @param array|ProductVariationDeltaPrice $localizedDeltaPrice The difference between the base price for the product and this variation of the product, which can be a positive or negative decimal value. For example, if the base price for a t-shirt product is $10, but the XL variation should cost $12, the DeltaPrice value should be "2". However, if the XS variation should only cost $8, the DeltaPrice value should be "-2".
	* @return MozuClient
	*/
	public static function updateProductVariationLocalizedDeltaPricesClient($dataViewMode, $localizedDeltaPrice, $productCode, $variationKey)
	{
		$url = ProductVariationUrl::updateProductVariationLocalizedDeltaPricesUrl($productCode, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($localizedDeltaPrice)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updatesthe localized delta price value for a product variation. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @param ProductVariationDeltaPrice $localizedDeltaPrice The difference between the base price for the product and this variation of the product, which can be a positive or negative decimal value. For example, if the base price for a t-shirt product is $10, but the XL variation should cost $12, the DeltaPrice value should be "2". However, if the XS variation should only cost $8, the DeltaPrice value should be "-2".
	* @return MozuClient
	*/
	public static function updateProductVariationLocalizedDeltaPriceClient($dataViewMode, $localizedDeltaPrice, $productCode, $variationKey, $currencyCode, $responseFields =  null)
	{
		$url = ProductVariationUrl::updateProductVariationLocalizedDeltaPriceUrl($currencyCode, $productCode, $responseFields, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($localizedDeltaPrice)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Modifies the details of a variation, based on the supplied variation key, for the specified product code.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @param ProductVariation $productVariation Properties of a specific product variation.
	* @return MozuClient
	*/
	public static function updateProductVariationClient($dataViewMode, $productVariation, $productCode, $variationKey, $responseFields =  null)
	{
		$url = ProductVariationUrl::updateProductVariationUrl($productCode, $responseFields, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productVariation)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Modifies the collection of variations for the specified product code. Because this PUT replaces the existing resource, supply all information necessary to maintain for the product variation.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param ProductVariationCollection $productVariations Collection of variations configured for a product.
	* @return MozuClient
	*/
	public static function updateProductVariationsClient($dataViewMode, $productVariations, $productCode, $responseFields =  null)
	{
		$url = ProductVariationUrl::updateProductVariationsUrl($productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productVariations)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes a variation, based on the supplied variation key, for the specified product code.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	*/
	public static function deleteProductVariationClient($dataViewMode, $productCode, $variationKey)
	{
		$url = ProductVariationUrl::deleteProductVariationUrl($productCode, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes the localized delta price value for a product variation. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	*/
	public static function deleteProductVariationLocalizedDeltaPriceClient($dataViewMode, $productCode, $variationKey, $currencyCode)
	{
		$url = ProductVariationUrl::deleteProductVariationLocalizedDeltaPriceUrl($currencyCode, $productCode, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

