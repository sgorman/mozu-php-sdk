<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Carts;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Carts\CartItemClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the cart items subresource to manage a collection of items in an active shopping cart.
*/
class CartItemResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of cart items including the total number of items in the cart.
	*
	* @return CartItemCollection 
	*/
	public function getCartItems(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CartItemClient::getCartItemsClient($authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a particular cart item by providing the cart item ID.
	*
	* @param string $cartItemId Identifier of the cart item to retrieve.
	* @return CartItem 
	*/
	public function getCartItem( $cartItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CartItemClient::getCartItemClient( $cartItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a product to the current shopper's cart.
	*
	* @param CartItem $cartItem All properties of the new cart item. The product code is required.
	* @return CartItem 
	*/
	public function addItemToCart($cartItem, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CartItemClient::addItemToCartClient($cartItem, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the product or product quantity of an item in the current shopper's cart.
	*
	* @param string $cartItemId Identifier of the cart item to update.
	* @param CartItem $cartItem The properties of the cart item to update.
	* @return CartItem 
	*/
	public function updateCartItem($cartItem,  $cartItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CartItemClient::updateCartItemClient($cartItem,  $cartItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the quantity of an individual cart item in the cart of the current shopper.
	*
	* @param string $cartItemId Identifier of the cart item to update quantity.
	* @param int $quantity The number of cart items in the shopper's active cart.
	* @return CartItem 
	*/
	public function updateCartItemQuantity( $cartItemId,  $quantity, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CartItemClient::updateCartItemQuantityClient( $cartItemId,  $quantity, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes all items in the current shopper's active cart.
	*
	* @return Cart 
	*/
	public function removeAllCartItems(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CartItemClient::removeAllCartItemsClient($authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a specific cart item by providing the cart item ID.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	*/
	public function deleteCartItem( $cartItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CartItemClient::deleteCartItemClient( $cartItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

