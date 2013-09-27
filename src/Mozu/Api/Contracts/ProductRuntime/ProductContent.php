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
*	Content associated with a product definition that can be localized.
*/
class ProductContent
{
	/**
	*Description defined for the metadata used to internally manage information about the product.
	*/
	public $MetaTagDescription;
	public function getMetaTagDescription() {
		return $this->MetaTagDescription;
	}
	
	public function setMetaTagDescription($metaTagDescription) {
		$this->MetaTagDescription = $metaTagDescription;
		return $this;
	}

	/**
	*Keywords defined for the metadata used to internally manage information about the product.
	*/
	public $MetaTagKeywords;
	public function getMetaTagKeywords() {
		return $this->MetaTagKeywords;
	}
	
	public function setMetaTagKeywords($metaTagKeywords) {
		$this->MetaTagKeywords = $metaTagKeywords;
		return $this;
	}

	/**
	*Title defined for the metadata used to internally manage information about the product.
	*/
	public $MetaTagTitle;
	public function getMetaTagTitle() {
		return $this->MetaTagTitle;
	}
	
	public function setMetaTagTitle($metaTagTitle) {
		$this->MetaTagTitle = $metaTagTitle;
		return $this;
	}

	/**
	*Full description of the product, which typically appears on the product details page.
	*/
	public $ProductFullDescription;
	public function getProductFullDescription() {
		return $this->ProductFullDescription;
	}
	
	public function setProductFullDescription($productFullDescription) {
		$this->ProductFullDescription = $productFullDescription;
		return $this;
	}

	/**
	*The descriptive brief product name.
	*/
	public $ProductName;
	public function getProductName() {
		return $this->ProductName;
	}
	
	public function setProductName($productName) {
		$this->ProductName = $productName;
		return $this;
	}

	/**
	*Brief description of the product typically used when the product is displayed in a list or in search results.
	*/
	public $ProductShortDescription;
	public function getProductShortDescription() {
		return $this->ProductShortDescription;
	}
	
	public function setProductShortDescription($productShortDescription) {
		$this->ProductShortDescription = $productShortDescription;
		return $this;
	}

	/**
	*Product URL defined for search engine optimization.
	*/
	public $SEOFriendlyUrl;
	public function getSEOFriendlyUrl() {
		return $this->SEOFriendlyUrl;
	}
	
	public function setSEOFriendlyUrl($sEOFriendlyUrl) {
		$this->SEOFriendlyUrl = $sEOFriendlyUrl;
		return $this;
	}

	/**
	*List of image files associated with the product.
	*/
	public $ProductImages;
	public function getProductImages() {
		return $this->ProductImages;
	}
	
	public function setProductImages($productImages) {
		$this->ProductImages = $productImages;
		return $this;
	}

}

?>