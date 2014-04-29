<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Carts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Carts\AppliedDiscountUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class AppliedDiscountClient {

	/**
	* 
	*
	* @param string $cartId 
	* @param string $couponCode 
	* @return MozuClient
	*/
	public static function applyCouponClient($cartId, $couponCode)
	{
		$url = AppliedDiscountUrl::applyCouponUrl($cartId, $couponCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $cartId 
	* @return MozuClient
	*/
	public static function removeCouponsClient($cartId)
	{
		$url = AppliedDiscountUrl::removeCouponsUrl($cartId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $cartId 
	* @param string $couponCode 
	* @return MozuClient
	*/
	public static function removeCouponClient($cartId, $couponCode)
	{
		$url = AppliedDiscountUrl::removeCouponUrl($cartId, $couponCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
