<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\MZDB;



/**
*	Properties for the list view that specifies what fields and content display per page load. All associated fields in the list view correspond with object data.
*/
class ListView
{
	/**
	*Sets the default sorting for content. Sort does not use AND in determining the order.
	*/
	public $defaultSort;

	/**
	*A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	*/
	public $filter;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*Indicates the security level for the document content as public, administrator, or owner.
	*/
	public $security;

	/**
	*List description of usages for content within a view and scope.
	*/
	public $usages;

	/**
	*The list of fields to display for a view or an associated schema. For example, the address schema would display fields for postal addresses.
	*/
	public $fields;

	/**
	*Metadata content for entities, used by document lists, document type lists, document type, views, entity lists, and list views.
	*/
	public $metaData;

}

?>
