<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings\General;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\General\IPBlockUrl;

/**
* General site setting subresource to define global settings for the site such as website name, shipping and email addresses, and logo images. Also, block undesirable IP addresses using this resource.
*/
class IPBlockClient {

	/**
	* Retrieves a list of IP blocks.
	*
	* @return MozuClient
	*/
	public static function getIPBlocksClient()
	{
		$url = IPBlockUrl::getIPBlocksUrl();
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieve the details of a single IP block by providing the IP block ID.
	*
	* @param int $ipBlockId Unique identifier of the IP block.
	* @return MozuClient
	*/
	public static function getIPBlockClient($ipBlockId)
	{
		$url = IPBlockUrl::getIPBlockUrl($ipBlockId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Create a new IP block to deny server access. Prevents undesirable connections such as brute force attacks. Block access to the storefront, admin area, or both.
	*
	* @param IPBlock $ipBlock Properties of the IP block.
	* @return MozuClient
	*/
	public static function createIPBlockClient($ipBlock)
	{
		$url = IPBlockUrl::createIPBlockUrl();
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($ipBlock);
		return $mozuClient;

	}
	
	/**
	* Modifies an IP block.
	*
	* @param int $ipBlockId Identifier of the IP block.
	* @param IPBlock $ipBlock Properties of the IP block.
	* @return MozuClient
	*/
	public static function updateIPBlockClient($ipBlockId, $ipBlock)
	{
		$url = IPBlockUrl::updateIPBlockUrl($ipBlockId);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($ipBlock);
		return $mozuClient;

	}
	
	/**
	* Delete the IP block specified by the IP block ID.
	*
	* @param int $ipBlockId Unique identifier of the IP block.
	*/
	public static function deleteIPBlockClient($ipBlockId)
	{
		$url = IPBlockUrl::deleteIPBlockUrl($ipBlockId);
		$verb = "DELETE";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
