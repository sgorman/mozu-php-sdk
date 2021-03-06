<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties of the facet used to retrieve documents.
*/
class Facet
{
	/**
	*Unique identifier for the storefront container used to organize products.
	*/
	public $categoryId;

	/**
	*Unique identifier of the facet.
	*/
	public $facetId;

	/**
	*The type of facet. Valid values are "range" (enables creation of a range of values) or "value" (populates the facet values based on the associated attribute or category).
	*/
	public $facetType;

	/**
	*Indicates if the object is hidden or breaks inheritance, primarily used by facets, products, and attribute vocabulary values. For example, if true, the attribute vocabulary value does not appear in the list when defining a value for an attribute.
	*/
	public $isHidden;

	/**
	*Integer that represents the sequence order of the attribute.
	*/
	public $order;

	/**
	*Indicates the specific facet inherited from a parent category that is overridden by this facet. System-supplied and read only.
	*/
	public $overrideFacetId;

	/**
	*Determines how the facet values will be sorted in the store. Must be a valid value for DataType defined in FacetValueSortTypeConst. Allowable values are: CountAscending, CountDescending, ValuesAscending, ValuesDescending. The default if no value is specified will be CountDescending.
	*/
	public $valueSortType;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*For range type facets, an array of ranges to use for the facet values. For example, a price facet might have range queries for $0-$25, $25-$50, and $50-$100.
	*/
	public $rangeQueries;

	/**
	*Source for an action or container for originating content. Source is used as an origin for validation and notification messages based on successful or failed actions. For originating content, source is used for the facet source information, including the category, price, or attribute properties.
	*/
	public $source;

	/**
	*System-supplied and read only indicator of whether a facet is currently valid and if not indicates the reason why. A facet may become invalid if the source data is changed in some ways (for example if the category tree structure is changed).
	*/
	public $validity;

}

?>
