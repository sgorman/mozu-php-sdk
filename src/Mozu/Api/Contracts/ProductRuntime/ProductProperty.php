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
*	Details of a property attribute defined for a product.
*/
class ProductProperty
{
	/**
	*The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public $AttributeFQN;
	public function getAttributeFQN() {
		return $this->AttributeFQN;
	}
	
	public function setAttributeFQN($attributeFQN) {
		$this->AttributeFQN = $attributeFQN;
		return $this;
	}

	/**
	*If true, the product property does not appear for the product in the storefront.
	*/
	public $IsHidden;
	public function getIsHidden() {
		return $this->IsHidden;
	}
	
	public function setIsHidden($isHidden) {
		$this->IsHidden = $isHidden;
		return $this;
	}

	/**
	*If true, the product property can have more than one selected value.
	*/
	public $IsMultiValue;
	public function getIsMultiValue() {
		return $this->IsMultiValue;
	}
	
	public function setIsMultiValue($isMultiValue) {
		$this->IsMultiValue = $isMultiValue;
		return $this;
	}

	/**
	*Details of the attribute defined as a product property.
	*/
	public $AttributeDetail;
	public function getAttributeDetail() {
		return $this->AttributeDetail;
	}
	
	public function setAttributeDetail($attributeDetail) {
		$this->AttributeDetail = $attributeDetail;
		return $this;
	}

	/**
	*List of values defined for the product property attribute.
	*/
	public $Values;
	public function getValues() {
		return $this->Values;
	}
	
	public function setValues($values) {
		$this->Values = $values;
		return $this;
	}

}

?>