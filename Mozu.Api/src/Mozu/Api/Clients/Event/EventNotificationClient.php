<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Event;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Event\EventNotificationUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the events resource to retrieve events, which are notifications about a create, read, update, or delete operation.
*/
class EventNotificationClient {

	/**
	* Retrieves a list of events.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getEventsClient($filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = EventNotificationUrl::getEventsUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves an event by providing the event ID.
	*
	* @param string $eventId The unique identifier of the event being retrieved. An event is a notification about a create, read, update, or delete on an order, product, discount or category.
	* @return MozuClient
	*/
	public static function getEventClient( $eventId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = EventNotificationUrl::getEventUrl($eventId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

