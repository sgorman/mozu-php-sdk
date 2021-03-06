<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\ApiContext;
use Mozu\Api\Clients\Commerce\Catalog\Admin\PublishingScopeClient;

/**
* Use the Product Publishing resource to publish or discard pending changes to product definitions in the master catalog.
*/
class PublishingScopeResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Deletes the draft version of product changes for each product code specified in the request.
	*
	* @param PublishingScope $publishScope Describes the scope of the product publishing update, which can include individual product codes or all pending changes.
	* @deprecated deprecated since version 1.17
	*/
	public function discardDrafts($publishScope)
	{
		$mozuClient = PublishingScopeClient::discardDraftsClient($this->dataViewMode, $publishScope);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the draft version of product changes for each product code specified in the request.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function discardDraftsAsync($publishScope)
	{
		$mozuClient = PublishingScopeClient::discardDraftsClient($this->dataViewMode, $publishScope);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Publishes the draft version of product changes for each product code specified in the request, and changes the product publish state to "live".
	*
	* @param PublishingScope $publishScope Describes the scope of the product publishing update, which can include individual product codes or all pending changes.
	* @deprecated deprecated since version 1.17
	*/
	public function publishDrafts($publishScope)
	{
		$mozuClient = PublishingScopeClient::publishDraftsClient($this->dataViewMode, $publishScope);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Publishes the draft version of product changes for each product code specified in the request, and changes the product publish state to "live".
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function publishDraftsAsync($publishScope)
	{
		$mozuClient = PublishingScopeClient::publishDraftsClient($this->dataViewMode, $publishScope);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

