<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	A view can select which fields are returned from a document query.
*/
class View
{
	/**
	*The isVisibleInStorefront field indicates whether documents in the view can be accessed from the Mozu storefront application. If true, the storefront application and storefront client application (javascript tier) can GET documents from the view.
	*/
	public $isVisibleInStorefront;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

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
	public $metadata;

}

?>
