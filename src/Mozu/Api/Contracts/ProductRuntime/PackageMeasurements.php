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
*	Dimensions of the packaged product.
*/
class PackageMeasurements
{
	/**
	*Height of the package in imperial units of feet and inches.
	*/
	public $PackageHeight;
	public function getPackageHeight() {
		return $this->PackageHeight;
	}
	
	public function setPackageHeight($packageHeight) {
		$this->PackageHeight = $packageHeight;
		return $this;
	}

	/**
	*Length of the package in imperial units of feet and inches.
	*/
	public $PackageLength;
	public function getPackageLength() {
		return $this->PackageLength;
	}
	
	public function setPackageLength($packageLength) {
		$this->PackageLength = $packageLength;
		return $this;
	}

	/**
	*Weight of the package in imperial units of pounds and ounces.
	*/
	public $PackageWeight;
	public function getPackageWeight() {
		return $this->PackageWeight;
	}
	
	public function setPackageWeight($packageWeight) {
		$this->PackageWeight = $packageWeight;
		return $this;
	}

	/**
	*Width of the package in imperial units of feet and inches.
	*/
	public $PackageWidth;
	public function getPackageWidth() {
		return $this->PackageWidth;
	}
	
	public function setPackageWidth($packageWidth) {
		$this->PackageWidth = $packageWidth;
		return $this;
	}

}

?>