<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Attributes\AttributeVocabularyValueClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\ProductAdmin\AttributeVocabularyValue;
use Mozu\Api\Contracts\ProductAdmin\AttributeVocabularyValueLocalizedContent;

/**
* Vocabulary values are predefined for an attribute.
*/
class AttributeVocabularyValueResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* Retrieves a list of vocabulary values defined for the attribute specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return array|AttributeVocabularyValue 
	*/
	public function getAttributeVocabularyValues($attributeFQN)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValuesClient($attributeFQN);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $value 
	* @return array|AttributeVocabularyValueLocalizedContent 
	*/
	public function getAttributeVocabularyValueLocalizedContents($attributeFQN, $value)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValueLocalizedContentsClient($attributeFQN, $value);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @return AttributeVocabularyValueLocalizedContent 
	*/
	public function getAttributeVocabularyValueLocalizedContent($attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValueLocalizedContentClient($attributeFQN, $value, $localeCode, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves the details of a vocabulary value defined for an attribute by providing the attribute's fully qualified name and the value to retrieve.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The actual unique value of the attribute vocabulary to retrieve. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	* @return AttributeVocabularyValue 
	*/
	public function getAttributeVocabularyValue($attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValueClient($attributeFQN, $value, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @param AttributeVocabularyValueLocalizedContent $localizedContent 
	* @return AttributeVocabularyValueLocalizedContent 
	*/
	public function addAttributeVocabularyValueLocalizedContent($localizedContent, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::addAttributeVocabularyValueLocalizedContentClient($localizedContent, $attributeFQN, $value, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Creates a vocabulary value for a defined product attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeVocabularyValue $attributeVocabularyValue The predefined vocabulary value to add to the attribute content.
	* @return AttributeVocabularyValue 
	*/
	public function addAttributeVocabularyValue($attributeVocabularyValue, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::addAttributeVocabularyValueClient($attributeVocabularyValue, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Update existing vocabulary values for an attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param array|AttributeVocabularyValue $vocabularyValues The actual vocabulary values for the attribute being updated.
	* @return array|AttributeVocabularyValue 
	*/
	public function updateAttributeVocabularyValues($vocabularyValues, $attributeFQN)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValuesClient($vocabularyValues, $attributeFQN);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $value 
	* @param array|AttributeVocabularyValueLocalizedContent $localizedContent 
	* @return array|AttributeVocabularyValueLocalizedContent 
	*/
	public function updateAttributeVocabularyValueLocalizedContents($localizedContent, $attributeFQN, $value)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValueLocalizedContentsClient($localizedContent, $attributeFQN, $value);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @param AttributeVocabularyValueLocalizedContent $localizedContent 
	* @return AttributeVocabularyValueLocalizedContent 
	*/
	public function updateAttributeVocabularyValueLocalizedContent($localizedContent, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValueLocalizedContentClient($localizedContent, $attributeFQN, $value, $localeCode, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates existing attribute vocabulary values.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The actual unique value of the attribute vocabulary value to update. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	* @param AttributeVocabularyValue $attributeVocabularyValue The predefined vocabulary value to add to the attribute content to update.
	* @return AttributeVocabularyValue 
	*/
	public function updateAttributeVocabularyValue($attributeVocabularyValue, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValueClient($attributeVocabularyValue, $attributeFQN, $value, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Deletes an attribute's vocabulary value.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $value The actual unique value of the attribute vocabulary to delete. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	* @return void
	*/
	public function deleteAttributeVocabularyValue($attributeFQN, $value)
	{
		$mozuClient = AttributeVocabularyValueClient::deleteAttributeVocabularyValueClient($attributeFQN, $value);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $value 
	* @return void
	*/
	public function deleteAttributeVocabularyValueLocalizedContent($attributeFQN, $value, $localeCode)
	{
		$mozuClient = AttributeVocabularyValueClient::deleteAttributeVocabularyValueLocalizedContentClient($attributeFQN, $value, $localeCode);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>

