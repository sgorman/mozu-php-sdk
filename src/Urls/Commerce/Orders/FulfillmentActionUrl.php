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

class FulfillmentActionUrl  {

	/**
		* Get Resource Url for PerformFulfillmentAction
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @return string Resource Url
	*/
	public static function performFulfillmentActionUrl($orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/fulfillment/actions/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ResendPackageFulfillmentEmail
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
		* @return string Resource Url
	*/
	public static function resendPackageFulfillmentEmailUrl($orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/fulfillment/email/resend?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

