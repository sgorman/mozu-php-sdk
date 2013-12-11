<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\ReferenceDataClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* The Reference resource retrieves collections of standards the Mozu system currently supports. This includes content locales, top-level domains, units of measure, countries, currencies, time zones, and shipping or billing address schemas.
*/
class ReferenceDataResource {

	/**
	* Retrieves a specific address schema based on the country code provided. This operation allows the creation of custom shipping and billing address fields.
	*
	* @param string $countryCode The 2-letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
	* @return AddressSchema 
	*/
	public function getAddressSchema($countryCode =  null)
	{
		$mozuClient = ReferenceDataClient::getAddressSchemaClient($countryCode);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the entire list of address schemas that the system supports.
	*
	* @return AddressSchemaCollection 
	*/
	public function getAddressSchemas()
	{
		$mozuClient = ReferenceDataClient::getAddressSchemasClient();
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* ***Always private and should not be published.***
	*
	* @param int $behaviorId ***Always private and should not be published.***
	* @return Behavior 
	*/
	public function getBehavior( $behaviorId)
	{
		$mozuClient = ReferenceDataClient::getBehaviorClient( $behaviorId);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* ***Always private and should not be published.***
	*
	* @return BehaviorCategoryCollection 
	*/
	public function getBehaviorCategories()
	{
		$mozuClient = ReferenceDataClient::getBehaviorCategoriesClient();
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* ***Always private and should not be published.***
	*
	* @param int $categoryId ***Always private and should not be published.***
	* @return BehaviorCategory 
	*/
	public function getBehaviorCategory( $categoryId)
	{
		$mozuClient = ReferenceDataClient::getBehaviorCategoryClient( $categoryId);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* ***Always private and should not be published.***
	*
	* @param string $userType 
	* @return BehaviorCollection 
	*/
	public function getBehaviors($userType =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorsClient($userType);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the list of content locales the system supports. Content locales indicate the language used and the country where the language is used.
	*
	* @return ContentLocaleCollection 
	*/
	public function getContentLocales()
	{
		$mozuClient = ReferenceDataClient::getContentLocalesClient();
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the entire list of countries that the system supports.
	*
	* @return CountryCollection 
	*/
	public function getCountries()
	{
		$mozuClient = ReferenceDataClient::getCountriesClient();
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the entire list of currencies that the system supports.
	*
	* @return CurrencyCollection 
	*/
	public function getCurrencies()
	{
		$mozuClient = ReferenceDataClient::getCurrenciesClient();
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the entire list of time zones that the system supports.
	*
	* @return TimeZoneCollection 
	*/
	public function getTimeZones()
	{
		$mozuClient = ReferenceDataClient::getTimeZonesClient();
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the entire list of top-level internet domains that the system supports.
	*
	* @return TopLevelDomainCollection 
	*/
	public function getTopLevelDomains()
	{
		$mozuClient = ReferenceDataClient::getTopLevelDomainsClient();
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves an array list of all units of measure the system supports.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @return UnitOfMeasureCollection 
	*/
	public function getUnitsOfMeasure($filter =  null)
	{
		$mozuClient = ReferenceDataClient::getUnitsOfMeasureClient($filter);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

