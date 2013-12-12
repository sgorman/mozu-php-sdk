<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	A high level description of the document draft.
*/
class DocumentDraftSummary
{
		public $activeUpdateDate;

	/**
	*Name of the document list associated with the draft.
	*/
	public $documentListName;

		public $draftUpdateDate;

	/**
	*Identifier of document draft.
	*/
	public $id;

	/**
	*Name of the document draft.
	*/
	public $name;

	/**
	*Whether the draft has been published.
	*/
	public $publishType;

	/**
	*Unique identifier of the user who last modified the item. This value is system-supplied and read-only.
	*/
	public $updatedBy;

}

?>