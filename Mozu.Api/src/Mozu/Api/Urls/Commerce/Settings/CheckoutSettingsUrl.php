<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Settings;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CheckoutSettingsUrl  {

	/**
		* Get Resource Url for GetCheckoutSettings
		* @return string Resource Url
	*/
	public static function getCheckoutSettingsUrl()
	{
		$url = "/api/commerce/settings/checkout/";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		return $mozuUrl;
	}
	
}

?>

