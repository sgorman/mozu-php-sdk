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
*	The price of the product in the specified currency code (USD). This price can either be the sale price or the price for which the merchant intends to sell the product.
*/
class ProductPrice
{
	/**
	*The price the merchant intends to charge for the product.
	*/
	public $price;

	/**
	*The sale price defined for the product.
	*/
	public $salePrice;

	/**
	*The discount applied to the product price.
	*/
	public $discount;

}

?>