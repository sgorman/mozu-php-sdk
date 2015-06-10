<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\WishlistClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Wish Lists resource to manage the shopper wish lists of products associated with a customer account. Although customer accounts are managed at the tenant level, the system stores shopper wish lists at the site level. This enables the same customer to have wish lists for each of a merchant's sites. Use the Wish List Items resource to manage items in a wish list.
*/
class WishlistResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of shopper wish lists according to any filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return WishlistCollection 
	*/
	public function getWishlists($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $q =  null, $qLimit =  null, $responseFields =  null)
	{
		$mozuClient = WishlistClient::getWishlistsClient($startIndex, $pageSize, $sortBy, $filter, $q, $qLimit, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of the shopper wish list specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistId Unique identifier of the wish list.
	* @return Wishlist 
	*/
	public function getWishlist($wishlistId, $responseFields =  null)
	{
		$mozuClient = WishlistClient::getWishlistClient($wishlistId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a wish list by supplying the wish list name.
	*
	* @param int $customerAccountId The unique identifier of the customer account for which to retrieve wish lists.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistName The name of the wish list to retrieve.
	* @return Wishlist 
	*/
	public function getWishlistByName($customerAccountId, $wishlistName, $responseFields =  null)
	{
		$mozuClient = WishlistClient::getWishlistByNameClient($customerAccountId, $wishlistName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new shopper wish list for the associated customer account. Although customer accounts are maintained at the tenant level, the system stores wish lists at the site level. Newly created wish lists do not have any items.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Wishlist $wishlist Properties of a shopper wish list defined for a site, associated with a customer account.
	* @return Wishlist 
	*/
	public function createWishlist($wishlist, $responseFields =  null)
	{
		$mozuClient = WishlistClient::createWishlistClient($wishlist, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a shopper wish list defined for a customer account.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $wishlistId Unique identifier of the wish list.
	* @param Wishlist $wishlist Properties of a shopper wish list defined for a site, associated with a customer account.
	* @return Wishlist 
	*/
	public function updateWishlist($wishlist, $wishlistId, $responseFields =  null)
	{
		$mozuClient = WishlistClient::updateWishlistClient($wishlist, $wishlistId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the shopper wish list specified in the request and all items associated with it.
	*
	* @param string $wishlistId Unique identifier of the wish list.
	*/
	public function deleteWishlist($wishlistId)
	{
		$mozuClient = WishlistClient::deleteWishlistClient($wishlistId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

