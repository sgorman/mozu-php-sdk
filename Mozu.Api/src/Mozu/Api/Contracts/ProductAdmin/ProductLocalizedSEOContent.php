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
*	The localized product search engine optimized content in the language specified by the LocaleCode.
*/
class ProductLocalizedSEOContent
{
	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $LocaleCode;
	public function getLocaleCode() {
		return $this->LocaleCode;
	}
	
	public function setLocaleCode($localeCode) {
		$this->LocaleCode = $localeCode;
		return $this;
	}

	/**
	*The description of the metatag used for the product SEO content set to the locale code language. The metadata description is used to manage information internally.
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
	*The metatag keywords for the product SEO content set in the locale code language. The metatag keywords are used to manage information internally.
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
	*The metatag title for the product SEO content set in the locale code language. The metatag title is used to manage information internally.
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
	*The search engine optimized human-readable portion of the URL in the language of the product's locale code.
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
	*Customizes the HTML title tag within the header section of the product details page for the specified product.
	*/
	public $TitleTagTitle;
	public function getTitleTagTitle() {
		return $this->TitleTagTitle;
	}
	
	public function setTitleTagTitle($titleTagTitle) {
		$this->TitleTagTitle = $titleTagTitle;
		return $this;
	}

}

?>