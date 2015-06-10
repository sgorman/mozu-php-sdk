<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\SearchUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* The Search resource manages all settings and options for providing product search on your site.
*/
class SearchClient {

	/**
	* Get site search settings
	*
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @return MozuClient
	*/
	public static function getSettingsClient($responseFields =  null)
	{
		$url = SearchUrl::getSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds or Updates (Upsert) the Search Settings for a specific site
	*
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param SearchSettings $settings The settings to control product search and indexing behavior.
	* @return MozuClient
	*/
	public static function updateSettingsClient($settings, $responseFields =  null)
	{
		$url = SearchUrl::updateSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($settings);
		return $mozuClient;

	}
	
	
}

?>

