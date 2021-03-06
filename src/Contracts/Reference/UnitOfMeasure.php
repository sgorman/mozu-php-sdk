<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Reference;



/**
*	Properties to describe the unit of measure.
*/
class UnitOfMeasure
{
	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*The plural name of the unit of measure, such as "feet".
	*/
	public $pluralName;

	/**
	*The abbreviated symbol for the unit of measure, such as "ft".
	*/
	public $symbol;

	/**
	*The type of measurement, such as length or volume.
	*/
	public $unitOfMeasureType;

}

?>
