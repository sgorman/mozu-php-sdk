<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Tenant;



/**
*	Properties of a tenant, which the logical grouping of all a company's sites and catalogs.
*/
class Tenant
{
	/**
	*The domain associated with the site and/or tenant.
	*/
	public $domain;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $id;

	/**
	*Indicates if the tenant is a development tenant. If true, the tenant represents a collection of master catalogs and catalogs for a development tenant, used by a developer account to test applications and themes.
	*/
	public $isDevTenant;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*Collection of master catalogs associated with the tenant.
	*/
	public $masterCatalogs;

	/**
	*Collection of sites associated with the tenant.
	*/
	public $sites;

}

?>
