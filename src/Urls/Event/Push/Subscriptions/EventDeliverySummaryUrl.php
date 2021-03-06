<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Event\Push\Subscriptions;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class EventDeliverySummaryUrl  {

	/**
		* Get Resource Url for GetDeliveryAttemptSummary
		* @param int $id Unique identifier of the customer segment to retrieve.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $subscriptionId Unique identifier for a subscription, such as subscribing tenants for an event or to receive a notification.
		* @return string Resource Url
	*/
	public static function getDeliveryAttemptSummaryUrl($id, $responseFields, $subscriptionId)
	{
		$url = "/api/event/push/subscriptions/{subscriptionId}/deliveryattempts/{id}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("id", $id);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("subscriptionId", $subscriptionId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetDeliveryAttemptSummaries
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The amount is divided and displayed on the `pageCount `amount of pages. The default is 20 and maximum value is 200 per page.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a `pageSize `of 25, to get the 51st through the 75th items, use `startIndex=3`.
		* @param string $subscriptionId Unique identifier for a subscription, such as subscribing tenants for an event or to receive a notification.
		* @return string Resource Url
	*/
	public static function getDeliveryAttemptSummariesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex, $subscriptionId)
	{
		$url = "/api/event/push/subscriptions/{subscriptionId}/deliveryattempts?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		$url = $mozuUrl->formatUrl("subscriptionId", $subscriptionId);
		return $mozuUrl;
	}
	
}

?>

