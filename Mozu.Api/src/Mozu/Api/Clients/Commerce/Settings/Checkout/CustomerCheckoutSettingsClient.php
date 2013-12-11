<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings\Checkout;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\Checkout\CustomerCheckoutSettingsUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Settings for the checkout login. Choose whether or not shoppers must first login before a purchase can be processed. Choose the option for guests to purchase without logging in, prompt guests to login, or require them to login before a purchase can be completed.
*/
class CustomerCheckoutSettingsClient {

	/**
	* Retrieves all checkout settings defined for the site: Payment settings, such as the payment gateway ID and credentials, supported credit cards, and more; Customer Checkout settings, such as whether login is required, and any custom attributes; and Order Processing settings, such as when payment is authorized and captured, and any custom attributes.
	*
	* @return MozuClient
	*/
	public static function getCustomerCheckoutSettingsClient(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerCheckoutSettingsUrl::getCustomerCheckoutSettingsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Modifies existing site checkout settings. Modify Payment, Customer Checkout, and Order Processing settings in one PUT.
	*
	* @param CustomerCheckoutSettings $customerCheckoutSettings All the properties to update in the checkout settings.
	* @return MozuClient
	*/
	public static function updateCustomerCheckoutSettingsClient($customerCheckoutSettings, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerCheckoutSettingsUrl::updateCustomerCheckoutSettingsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerCheckoutSettings);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

