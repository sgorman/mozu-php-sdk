<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Applications;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\Applications\AuthTicketClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use this resource to manage authentication tickets for your applications.
*/
class AuthTicketResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Generate an authentication ticket for an application.
	*
	* @param AppAuthInfo $appAuthInfo Authentication information required to generate an authentication ticket includes the application id and the shared secret.
	* @return AuthTicket 
	*/
	public function authenticateApp($appAuthInfo)
	{
		$mozuClient = AuthTicketClient::authenticateAppClient($appAuthInfo);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,FALSE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Refreshes the application's authentication ticket and generates a new access token by providing the refresh token string.
	*
	* @param AuthTicketRequest $authTicketRequest The refresh token string required to update the application authentication ticket.
	* @return AuthTicket 
	*/
	public function refreshAppAuthTicket($authTicketRequest)
	{
		$mozuClient = AuthTicketClient::refreshAppAuthTicketClient($authTicketRequest);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,FALSE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes an authentication for an application based on the specified refresh token.
	*
	* @param string $refreshToken The refresh token string from the application's authentication ticket.
	*/
	public function deleteAppAuthTicket($refreshToken)
	{
		$mozuClient = AuthTicketClient::deleteAppAuthTicketClient($refreshToken);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,FALSE);
		$mozuClient->execute();

	}
	
	
}

?>
