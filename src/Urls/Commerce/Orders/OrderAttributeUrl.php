<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class OrderAttributeUrl  {

	/**
		* Get Resource Url for GetOrderAttributes
		* @param string $orderId Unique identifier of the order.
		* @return string Resource Url
	*/
	public static function getOrderAttributesUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/attributes";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateOrderAttributes
		* @param string $orderId Unique identifier of the order.
		* @return string Resource Url
	*/
	public static function createOrderAttributesUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/attributes";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateOrderAttributes
		* @param string $orderId Unique identifier of the order.
		* @param bool $removeMissing If true, the operation removes missing properties so that the updated order attributes will not show properties with a null value.
		* @return string Resource Url
	*/
	public static function updateOrderAttributesUrl($orderId, $removeMissing)
	{
		$url = "/api/commerce/orders/{orderId}/attributes?removeMissing={removeMissing}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("removeMissing", $removeMissing);
		return $mozuUrl;
	}
	
}

?>

