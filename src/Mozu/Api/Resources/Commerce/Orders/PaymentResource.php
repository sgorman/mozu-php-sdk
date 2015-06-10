<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\PaymentClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Payments subresource to manage payment transactions for orders. Each transaction performed for an order represents an individual payment. For example, if an order totals $75.00 but the shopper has a $50.00 gift certificate, both the gift certificate transaction and the credit card transaction for the remaining $25.00 are recorded as payments for the order.
*/
class PaymentResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves information about all payment transactions submitted for the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return PaymentCollection 
	*/
	public function getPayments($orderId, $responseFields =  null)
	{
		$mozuClient = PaymentClient::getPaymentsClient($orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the list of all available payment actions dependent on the order payment status by specifying the order ID.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @return array|string 
	*/
	public function getAvailablePaymentActions($orderId, $paymentId)
	{
		$mozuClient = PaymentClient::getAvailablePaymentActionsClient($orderId, $paymentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves information about a specific payment transaction submitted for the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Payment 
	*/
	public function getPayment($orderId, $paymentId, $responseFields =  null)
	{
		$mozuClient = PaymentClient::getPaymentClient($orderId, $paymentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Performs the specified action for an individual order payment transaction.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param PaymentAction $action Properties of the payment action performed for an order.
	* @return Order 
	*/
	public function performPaymentAction($action, $orderId, $paymentId, $responseFields =  null)
	{
		$mozuClient = PaymentClient::performPaymentActionClient($action, $orderId, $paymentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new payment transaction for the specified order and performs the specified action.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param PaymentAction $action Properties of the payment action performed for an order.
	* @return Order 
	*/
	public function createPaymentAction($action, $orderId, $responseFields =  null)
	{
		$mozuClient = PaymentClient::createPaymentActionClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

