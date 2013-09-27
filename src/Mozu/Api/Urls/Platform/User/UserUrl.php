<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform\User;

use Mozu\Api\Urls\BaseUrl;

class UserUrl extends BaseUrl {

	/**
		* Get Resource Url for GetUserByEmail
		* @param string $emailAddress The email address of the specified user or the email address associated with the specified entity.
		* @return string Resource Url
	*/
	public static function getUserByEmailUrl($emailAddress)
	{
		$url = "/api/platform/user/accounts/?emailAddress={emailAddress}";
		$url = parent::formatUrl($url, "emailAddress", $emailAddress);
		return $url;
	}
	
	/**
		* Get Resource Url for GetUser
		* @param string $userId Unique identifier of the user.
		* @return string Resource Url
	*/
	public static function getUserUrl($userId)
	{
		$url = "/api/platform/user/accounts/{userId}";
		$url = parent::formatUrl($url, "userId", $userId);
		return $url;
	}
	
	/**
		* Get Resource Url for CreateUser
		* @return string Resource Url
	*/
	public static function createUserUrl()
	{
		$url = "/api/platform/user/accounts/";
		return $url;
	}
	
	/**
		* Get Resource Url for CreateUsers
		* @return string Resource Url
	*/
	public static function createUsersUrl()
	{
		$url = "/api/platform/user/accounts/Bulk";
		return $url;
	}
	
	/**
		* Get Resource Url for Login
		* @return string Resource Url
	*/
	public static function loginUrl()
	{
		$url = "/api/platform/user/accounts/Login";
		return $url;
	}
	
	/**
		* Get Resource Url for ResetPassword
		* @return string Resource Url
	*/
	public static function resetPasswordUrl()
	{
		$url = "/api/platform/user/accounts/resetpassword";
		return $url;
	}
	
}

?>
