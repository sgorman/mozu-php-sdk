<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PaymentService;



class PreAuthorizeDefinition
{
	/**
	*Identifier of the entity.
	*/
	public $Id;
	public function getId() {
		return $this->Id;
	}
	
	public function setId($id) {
		$this->Id = $id;
		return $this;
	}

		public $PreAuthorizeProdUrl;
	public function getPreAuthorizeProdUrl() {
		return $this->PreAuthorizeProdUrl;
	}
	
	public function setPreAuthorizeProdUrl($preAuthorizeProdUrl) {
		$this->PreAuthorizeProdUrl = $preAuthorizeProdUrl;
		return $this;
	}

		public $PreAuthorizeTestUrl;
	public function getPreAuthorizeTestUrl() {
		return $this->PreAuthorizeTestUrl;
	}
	
	public function setPreAuthorizeTestUrl($preAuthorizeTestUrl) {
		$this->PreAuthorizeTestUrl = $preAuthorizeTestUrl;
		return $this;
	}

		public $Type;
	public function getType() {
		return $this->Type;
	}
	
	public function setType($type) {
		$this->Type = $type;
		return $this;
	}

}

?>