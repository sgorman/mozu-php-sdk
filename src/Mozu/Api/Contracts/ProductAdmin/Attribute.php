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
*	Details of an attribute used to describe individual aspects of a product.
*/
class Attribute
{
	/**
	*The administrative name of the product attribute as it appears in Mozu Admin.
	*/
	public $adminName;

	/**
	*Merchant-defined identifier of the product attribute used to generate the attribute's fully qualified name.
	*/
	public $attributeCode;

	/**
	*Generated sequence that increments for each attribute and data type combination created. This value is system-supplied and read-only.
	*/
	public $attributeDataTypeSequence;

	/**
	*The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public $attributeFQN;

	/**
	*Generated sequence that increments for each product attribute created. This value is system-supplied and read-only.
	*/
	public $attributeSequence;

	/**
	*The data type of the product attribute, which is a Bool, DateTime, Number, or String. The attribute's data type cannot be changed.
	*/
	public $dataType;

	/**
	*The storefront interface input type for the product attribute, which is a Date, DateTime, List, TextArea, TextBox, or YesNo. The attribute's input type cannot be changed.
	*/
	public $inputType;

	/**
	*If true, the product attribute is an add-on configuration made by the shopper that does not represent a product variation, such as a monogram.
	*/
	public $isExtra;

	/**
	*If true, the product attribute is a merchant- or shopper-configurable option, such as size or color, that represents a product variation.
	*/
	public $isOption;

	/**
	*If true, the product attribute describes aspects of the product that do not represent an option configurable by the shopper, such as screen resolution or brand.
	*/
	public $isProperty;

		public $masterCatalogId;

	/**
	*If applicable, the registered namespace associated with the product attribute, used to generate the fully qualified name. If no namespace is defined, the namespace associated with the tenant is automatically assigned.
	*/
	public $namespace;

	/**
	*The type of value associated with the product attribute, which is ShopperEntered (the shopper selects or enters an attribute value during checkout), Predefined (the merchant sets the attribute value from a list during product attribute definition), or AdminEntered (the merchant selects or enters a value during product definition). The attribute value type cannot be changed.
	*/
	public $valueType;

	/**
	*List of key-value pairs that store metadata associated with the product attribute.
	*/
	public $attributeMetadata;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Complex type that contains content for a language specified by LocaleCode.
	*/
	public $content;

	/**
	*Properties of the validation of a product attribute, which contains rules that dictate what values are valid entries for product attributes.
	*/
	public $validation;

	/**
	*Array list of the defined vocabulary values for the specified product attribute. For example, for a Color attribute, vocabulary values might include black, white, and purple.
	*/
	public $vocabularyValues;

}

?>
