<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Shipping;



/**
*	Properties of an action to perform for a shipment.
*/
class ShipmentAction
{
	/**
	*The name of the shipment action to perform, such as "Ship".
	*/
	public $ActionName;
	public function getActionName() {
		return $this->ActionName;
	}
	
	public function setActionName($actionName) {
		$this->ActionName = $actionName;
		return $this;
	}

	/**
	*A list of physical packages in a shipment.
	*/
	public $PackageIds;
	public function getPackageIds() {
		return $this->PackageIds;
	}
	
	public function setPackageIds($packageIds) {
		$this->PackageIds = $packageIds;
		return $this;
	}

}

?>