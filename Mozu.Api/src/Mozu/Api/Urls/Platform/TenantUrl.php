<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform;

use Mozu\Api\Urls\BaseUrl;

class TenantUrl extends BaseUrl {

	/**
		* Get Resource Url for GetTenant
		* @param int $tenantId Unique identifier of the Mozu tenant.
		* @return string Resource Url
	*/
	public static function getTenantUrl($tenantId)
	{
		$url = "/api/platform/tenants/{tenantId}";
		$url = parent::formatUrl($url, "tenantId", $tenantId);
		return $url;
	}
	
}

?>
