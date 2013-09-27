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
*	Properties of the authentication ticket to be used in user claims with the Mozu API.
*/
class TenantAdminUserAuthTicket
{
	/**
	*Alphanumeric string used to authenticate the user in API request headers.
	*/
	public $AccessToken;
	public function getAccessToken() {
		return $this->AccessToken;
	}
	
	public function setAccessToken($accessToken) {
		$this->AccessToken = $accessToken;
		return $this;
	}

	/**
	*The date and time the user access token expires.
	*/
	public $AccessTokenExpiration;
	public function getAccessTokenExpiration() {
		return $this->AccessTokenExpiration;
	}
	
	public function setAccessTokenExpiration($accessTokenExpiration) {
		$this->AccessTokenExpiration = $accessTokenExpiration;
		return $this;
	}

	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $CreatedOn;
	public function getCreatedOn() {
		return $this->CreatedOn;
	}
	
	public function setCreatedOn($createdOn) {
		$this->CreatedOn = $createdOn;
		return $this;
	}

	/**
	*Collection of behaviors encrypted in the user authentication ticket. Behaviors are granted to users as part of the role assigned for the given tenant or developer account.
	*/
	public $GrantedBehaviors;
	public function getGrantedBehaviors() {
		return $this->GrantedBehaviors;
	}
	
	public function setGrantedBehaviors($grantedBehaviors) {
		$this->GrantedBehaviors = $grantedBehaviors;
		return $this;
	}

	/**
	*Alphanumeric string used to generate a new user authentication ticket after the access token expires.
	*/
	public $RefreshToken;
	public function getRefreshToken() {
		return $this->RefreshToken;
	}
	
	public function setRefreshToken($refreshToken) {
		$this->RefreshToken = $refreshToken;
		return $this;
	}

	/**
	*The date and time the user refresh token expires.
	*/
	public $RefreshTokenExpiration;
	public function getRefreshTokenExpiration() {
		return $this->RefreshTokenExpiration;
	}
	
	public function setRefreshTokenExpiration($refreshTokenExpiration) {
		$this->RefreshTokenExpiration = $refreshTokenExpiration;
		return $this;
	}

	/**
	*Collection of tenants for which the user authentication ticket grants access.
	*/
	public $AvailableTenants;
	public function getAvailableTenants() {
		return $this->AvailableTenants;
	}
	
	public function setAvailableTenants($availableTenants) {
		$this->AvailableTenants = $availableTenants;
		return $this;
	}

	/**
	*Tenant information associated with the user authentication ticket.
	*/
	public $Tenant;
	public function getTenant() {
		return $this->Tenant;
	}
	
	public function setTenant($tenant) {
		$this->Tenant = $tenant;
		return $this;
	}

	/**
	*User information associated with the authentication ticket.
	*/
	public $User;
	public function getUser() {
		return $this->User;
	}
	
	public function setUser($user) {
		$this->User = $user;
		return $this;
	}

}

?>