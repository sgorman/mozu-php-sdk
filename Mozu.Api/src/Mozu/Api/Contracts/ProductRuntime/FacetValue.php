<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	The value selected for a facet when indexing a product search.
*/
class FacetValue
{
	/**
	*The number of facet value selections in a product search result set.
	*/
	public $count;

	/**
	*Submits the selected facet value as a facet value filter.
	*/
	public $filterValue;

	/**
	*If true, the facet value is applied as a filter in the storefront product search.
	*/
	public $isApplied;

	/**
	*The descriptive label of the facet value.
	*/
	public $label;

	/**
	*If applicable, the values of any parent category facets in a hierarchy. Hierarchical facets only apply for product categories.
	*/
	public $parentFacetValue;

	/**
	*The maximum value selected or entered for the facet range query.
	*/
	public $rangeQueryValueEnd;

	/**
	*The minimum value selected or entered for the facet range query.
	*/
	public $rangeQueryValueStart;

	/**
	*String representation of the facet value selected for the product search.
	*/
	public $value;

	/**
	*If applicable, the values of any subcategory facets in a hierarchy. Hierarchical facets only apply for product categories.
	*/
	public $childrenFacetValues;

}

?>
