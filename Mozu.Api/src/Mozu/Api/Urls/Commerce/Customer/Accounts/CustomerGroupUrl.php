<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer\Accounts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomerGroupUrl  {

	/**
		* Get Resource Url for GetAccountGroups
		* @param int $accountId Unique identifier of the customer account.
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAccountGroupsUrl($accountId, $filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/groups/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAccountGroup
		* @param int $accountId Unique identifier of the customer account.
		* @param int $groupId Unique identifier of the customer group.
		* @return string Resource Url
	*/
	public static function getAccountGroupUrl($accountId, $groupId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/groups/{groupId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("groupId", $groupId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccountGroup
		* @param int $accountId Unique identifier of the customer account to add to a group.
		* @param int $groupId Unique identifier of the customer group to add the customer to.
		* @return string Resource Url
	*/
	public static function addAccountGroupUrl($accountId, $groupId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/groups/{groupId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("groupId", $groupId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAccountGroup
		* @param int $accountId Unique identifier of the customer account to remove from the group.
		* @param int $groupId Unique identifier of the customer group.
		* @return string Resource Url
	*/
	public static function deleteAccountGroupUrl($accountId, $groupId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/groups/{groupId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("groupId", $groupId);
		return $mozuUrl;
	}
	
}

?>

