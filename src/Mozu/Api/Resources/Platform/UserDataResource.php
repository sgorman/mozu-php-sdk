<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\UserDataClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the user data subresource to store user-level data required for a third-party application in the Mozu database.
*/
class UserDataResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the value of a record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return string 
	*/
	public function getDBValue($dbEntryQuery, $responseFields =  null)
	{
		$mozuClient = UserDataClient::getDBValueClient($dbEntryQuery, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public function createDBValue($value, $dbEntryQuery)
	{
		$mozuClient = UserDataClient::createDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Updates a record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public function updateDBValue($value, $dbEntryQuery)
	{
		$mozuClient = UserDataClient::updateDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Removes a previously defined record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	*/
	public function deleteDBValue($dbEntryQuery)
	{
		$mozuClient = UserDataClient::deleteDBValueClient($dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

