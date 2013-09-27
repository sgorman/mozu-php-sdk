<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\Shipping;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\Shipping\SiteShippingRegionClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use the site shipping regions subresource to manage the territories to which the site will ship products. Currently, only domestic shipping is supported.
*/
class SiteShippingRegionResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the shipping regions configured for the site.
	*
	* @return array|SiteShippingRegion 
	*/
	public function getShippingRegions()
	{
		$mozuClient = SiteShippingRegionClient::getShippingRegionsClient();
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the shipping regions configured for a site.
	*
	* @param array|SiteShippingRegion $siteShippingRegions Properties of the shipping region configured for this site.
	* @return array|SiteShippingRegion 
	*/
	public function updateShippingRegions($siteShippingRegions)
	{
		$mozuClient = SiteShippingRegionClient::updateShippingRegionsClient($siteShippingRegions);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the shipping regions configured for this site.
	*
	*/
	public function deleteShippingRegions()
	{
		$mozuClient = SiteShippingRegionClient::deleteShippingRegionsClient();
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>
