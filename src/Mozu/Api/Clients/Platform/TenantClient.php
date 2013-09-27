<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\TenantUrl;

/**
* Use the tenants resource to manage information about a Mozu tenant.
*/
class TenantClient {

	/**
	* Retrieve details about a specific tenant by providing the tenant ID.
	*
	* @param int $tenantId Unique identifier of the Mozu tenant.
	* @return MozuClient
	*/
	public static function getTenantClient($tenantId)
	{
		$url = TenantUrl::getTenantUrl($tenantId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
