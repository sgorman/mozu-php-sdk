<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform\Adminuser;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\Adminuser\AdminUserUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Displays the user accounts and account details associated with a developer or Mozu tenant administrator. Email addresses uniquely identify admin user accounts.
*/
class AdminUserClient {

	/**
	* Retrieves the details of the specified administrator user account.
	*
	* @param string $userId Unique identifier of the administrator account to retrieve.
	* @return MozuClient
	*/
	public static function getUserClient( $userId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AdminUserUrl::getUserUrl($userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of the Mozu tenants or development stores for which the specified user has an assigned role.
	*
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return MozuClient
	*/
	public static function getTenantScopesForUserClient( $userId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AdminUserUrl::getTenantScopesForUserUrl($userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

