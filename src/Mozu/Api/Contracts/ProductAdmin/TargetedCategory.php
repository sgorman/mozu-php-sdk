<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties of a product category targeted for a defined discount.
*/
class TargetedCategory
{
	/**
	*Identifier of the product category associated with the targeted discount.
	*/
	public $Id;
	public function getId() {
		return $this->Id;
	}
	
	public function setId($id) {
		$this->Id = $id;
		return $this;
	}

	/**
	*Name of the product category associated with the targeted discount.
	*/
	public $Name;
	public function getName() {
		return $this->Name;
	}
	
	public function setName($name) {
		$this->Name = $name;
		return $this;
	}

}

?>