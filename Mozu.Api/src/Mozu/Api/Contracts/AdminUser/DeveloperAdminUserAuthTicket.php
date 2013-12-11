<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\AdminUser;



/**
*	Properties of the authentication ticket to be used in developer account claims with the Mozu API.
*/
class DeveloperAdminUserAuthTicket
{
	/**
	*Alphanumeric string used to authenticate the user in API request headers.
	*/
	public $accessToken;

	/**
	*The date and time the user access token expires.
	*/
	public $accessTokenExpiration;

	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $createdOn;

	/**
	*Collection of behaviors encrypted in the developer account authentication ticket. Behaviors are granted to users as part of the role assigned for the given developer account.
	*/
	public $grantedBehaviors;

	/**
	*Alphanumeric string used to generate a new developer account authentication ticket after the access token expires.
	*/
	public $refreshToken;

	/**
	*The date and time the developer account refresh token expires.
	*/
	public $refreshTokenExpiration;

	/**
	*Properties of the developer account for which the user authentication ticket grants access.
	*/
	public $account;

	/**
	*Collection of developer accounts for which the user authentication ticket grants access.
	*/
	public $availableAccounts;

	/**
	*User information associated with the authentication ticket.
	*/
	public $user;

}

?>
