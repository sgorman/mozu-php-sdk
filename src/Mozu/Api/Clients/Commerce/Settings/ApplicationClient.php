<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\ApplicationUrl;

/**
* Use the applications subresource to update site settings for installed applications.
*/
class ApplicationClient {

	/**
	* Initializes an application with the necessary configured settings.
	*
	* @param Application $application Properties of the application to update.
	* @return MozuClient
	*/
	public static function thirdPartyUpdateApplicationClient($application)
	{
		$url = ApplicationUrl::thirdPartyUpdateApplicationUrl();
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($application);
		return $mozuClient;

	}
	
	
}

?>
