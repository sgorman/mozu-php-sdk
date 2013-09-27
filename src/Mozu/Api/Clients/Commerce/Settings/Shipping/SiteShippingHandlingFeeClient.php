<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings\Shipping;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\Shipping\SiteShippingHandlingFeeUrl;

/**
* Use the Order Handling Fee subresource to configure any shipping and handling fees to apply to orders for this site.
*/
class SiteShippingHandlingFeeClient {

	/**
	* Retrieves the details of the order handling fee configured for the site.
	*
	* @return MozuClient
	*/
	public static function getOrderHandlingFeeClient()
	{
		$url = SiteShippingHandlingFeeUrl::getOrderHandlingFeeUrl();
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new order handling fee for the site.
	*
	* @param SiteShippingHandlingFee $orderHandlingFee Properties of the order handling fee to assess for order shipment.
	* @return MozuClient
	*/
	public static function createOrderHandlingFeeClient($orderHandlingFee)
	{
		$url = SiteShippingHandlingFeeUrl::createOrderHandlingFeeUrl();
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($orderHandlingFee);
		return $mozuClient;

	}
	
	/**
	* Updates the order handling fee amount for the site.
	*
	* @param SiteShippingHandlingFee $orderHandlingFee The combined price for all items in the order, including all selected options but excluding any discounts.
	* @return MozuClient
	*/
	public static function updateOrderHandlingFeeClient($orderHandlingFee)
	{
		$url = SiteShippingHandlingFeeUrl::updateOrderHandlingFeeUrl();
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($orderHandlingFee);
		return $mozuClient;

	}
	
	
}

?>
