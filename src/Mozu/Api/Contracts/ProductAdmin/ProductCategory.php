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
*	The category to which a product belongs.
*/
class ProductCategory
{
	/**
	*Unique identifier for the storefront container used to organize products.
	*/
	public $CategoryId;
	public function getCategoryId() {
		return $this->CategoryId;
	}
	
	public function setCategoryId($categoryId) {
		$this->CategoryId = $categoryId;
		return $this;
	}

}

?>