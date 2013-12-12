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
use Mozu\Api\Urls\Commerce\Catalog\Admin\LocationInventoryUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Location Inventory resource to manage the level of active product inventory maintained at each defined location, at the location level.
*/
class LocationInventoryClient {

	/**
	* Retrieves the details of a product's active inventory at the location specified in the request.
	*
	* @param string $locationCode User-defined code that uniquely identifies the location.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return MozuClient
	*/
	public static function getLocationInventoryClient($dataViewMode,  $locationCode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::getLocationInventoryUrl($locationCode, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of all product inventory definitions for the location code specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param string $locationCode User-defined code that uniquely identifies the location.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getLocationInventoriesClient($dataViewMode,  $locationCode, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::getLocationInventoriesUrl($filter, $locationCode, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates an array of product inventory definitions for the location specified in the request. When adding a new inventory definition, you must specify the productCode and stockOnHand value in each array you define. All other properties are system-supplied and read only.
	*
	* @param string $locationCode User-defined code that uniquely identifies the location.
	* @param array|LocationInventory $locationInventoryList Array list of product inventory definitions for all associated locations. For each location inventory in the list, define the productCode and stockOnHand values.
	* @return MozuClient
	*/
	public static function addLocationInventoryClient($dataViewMode, $locationInventoryList,  $locationCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::addLocationInventoryUrl($locationCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationInventoryList)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates the active stock on hand inventory of products for the location code specified in the request.
	*
	* @param string $locationCode User-defined code that uniquely identifies the location.
	* @param array|LocationInventoryAdjustment $locationInventoryAdjustments 
	* @return MozuClient
	*/
	public static function updateLocationInventoryClient($dataViewMode, $locationInventoryAdjustments,  $locationCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::updateLocationInventoryUrl($locationCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationInventoryAdjustments)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the product code inventory definition for the location specified in the request.
	*
	* @param string $locationCode User-defined code that uniquely identifies the location.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public static function deleteLocationInventoryClient($dataViewMode,  $locationCode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::deleteLocationInventoryUrl($locationCode, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

