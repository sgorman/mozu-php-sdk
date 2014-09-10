<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



/**
*	Properties of an authentication ticket generated for a customer account.
*/
class CustomerAuthTicket
{
	/**
	*Access token string that enables authentication for the customer account.
	*/
	public $accessToken;

	/**
	*The date and time the access token expires.
	*/
	public $accessTokenExpiration;

	/**
	*Refresh token string used to generate a new access token after expiration for a customer account authentication ticket.
	*/
	public $refreshToken;

	/**
	*The date and time the refresh token expires.
	*/
	public $refreshTokenExpiration;

	/**
	*User ID associated with the customer account authentication ticket.
	*/
	public $userId;

	/**
	*Properties of the customer account associated with the authentication ticket.
	*/
	public $customerAccount;

}

?>
