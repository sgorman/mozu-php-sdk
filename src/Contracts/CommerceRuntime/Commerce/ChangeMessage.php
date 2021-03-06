<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Commerce;



/**
*	Properties of a system message displayed when a change, such as a change in product price, occurs for a cart or order.
*/
class ChangeMessage
{
	/**
	*The order or item amount changed, if applicable.
	*/
	public $amount;

	/**
	*Unique identifier of an app available in your Mozu tenant or within Mozu Dev Center. This ID is unique across all apps installed, initialized, and enabled in the Mozu Admin and those in development through the Dev Center Console.
	*/
	public $appId;

	/**
	*App Key
	*/
	public $appKey;

	/**
	*App Name
	*/
	public $appName;

	/**
	*The unique identifier of the API request associated with the event action, which might contain multiple actions.
	*/
	public $correlationId;

	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $createDate;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Identifier for the object associated with the change message, which can represent a cart, cart item, or an order.
	*/
	public $identifier;

	/**
	*The text of the change message, such as "This product is no longer available." System-supplied and read-only.
	*/
	public $message;

	/**
	*Metadata content for entities, used by document lists, document type lists, document type, views, entity lists, and list views.
	*/
	public $metadata;

	/**
	*The new value of the object affected by the change, such as the new price of the product. System-supplied and read-only.
	*/
	public $newValue;

	/**
	*The prior value of the object affected by the change, such as the price of the product when it was added to the cart. System-supplied and read-only.
	*/
	public $oldValue;

	/**
	*The text that appears on the subject line of the message, such as "The product price has changed."
	*/
	public $subject;

	/**
	*Represents the type of object affected by the change, such as Cart Item or Product. System-supplied and read-only.
	*/
	public $subjectType;

	/**
	*If true, the change associated with the message executed successfully.
	*/
	public $success;

	/**
	*User First Name
	*/
	public $userFirstName;

	/**
	*Unique identifier of the customer account (shopper or system user). System-supplied and read-only. If the shopper user is anonymous, the user ID represents a system-generated user ID string.
	*/
	public $userId;

	/**
	*User Last Name
	*/
	public $userLastName;

	/**
	*User Type (e.g. Shopper, Admin, etc.)
	*/
	public $userScopeType;

	/**
	*The action associated with this message. For example, if the price of a product changes, the verb could be "Increased" or "Decreased". If the product is no longer available, the verb could be "Invalidated". System-supplied and read-only.
	*/
	public $verb;

}

?>
