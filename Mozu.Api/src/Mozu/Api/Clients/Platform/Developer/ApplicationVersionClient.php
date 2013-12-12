<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform\Developer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\Developer\ApplicationVersionUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Applications resource to manage the applications associated with a developer account.
*/
class ApplicationVersionClient {

	/**
	* Retrieves the list of applications associated with the developer account scoped to the user claim specified in the request.
	*
	* @return MozuClient
	*/
	public static function getAllApplicationsClient(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::getAllApplicationsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the application specified in the request. The application specified in the request must be associated with the developer account scoped to the user claim specified in the request header, otherwise the operation returns an error.
	*
	* @param int $applicationId Unique identifier of the application.
	* @return MozuClient
	*/
	public static function getApplicationClient($applicationId =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::getApplicationUrl($applicationId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a specific version of an application associated with the developer account scoped to the user claim specified in the request.
	*
	* @param int $applicationVersionId Unique identifier of the application version. Application version IDs are unique across all applications associated with a developer account.
	* @return MozuClient
	*/
	public static function getApplicationVersionClient( $applicationVersionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::getApplicationVersionUrl($applicationVersionId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of the package definitions created for an application version, including all development packages and release packages. The application must be associated with the developer account scoped to the user claim specified in the request.
	*
	* @param int $applicationVersionId Unique identifier of the application version. Application version IDs are unique across all applications associated with a developer account.
	* @return MozuClient
	*/
	public static function getPackagesClient( $applicationVersionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::getPackagesUrl($applicationVersionId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a package definition associated with an application version. The application ust be associated with the developer account scoped to the user claim specified in the request. 
	*
	* @param int $applicationVersionId Unique identifier of the application version associated with the package. Application version IDs are unique across all applications associated with the developer account.
	* @param int $packageId Unique identifier of the package to retrieve.
	* @return MozuClient
	*/
	public static function getPackageClient( $applicationVersionId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::getPackageUrl($applicationVersionId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the metadata for items in a package associated with an application version, including a list of all files and subfolders. The application must be associated with the developer account acoped to the user claim specified in the request.
	*
	* @param int $applicationVersionId Unique identifier of the application version. Application version IDs are unique across all applications associated with a developer account.
	* @param int $packageId Unique identifier of the package.
	* @return MozuClient
	*/
	public static function getPackageItemsMetadataClient( $applicationVersionId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::getPackageItemsMetadataUrl($applicationVersionId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the metadata of a file in a package for an application version. The application must be associated with the developer account scoped to the user claim specified in the request.
	*
	* @param int $applicationVersionId Unique identifier of the application version. Application version IDs are unique across all applications associated with a developer account.
	* @param string $itempath Complete file directory location and name of the item in the package to retrieve metadata.
	* @param int $packageId Unique identifier of the package.
	* @return MozuClient
	*/
	public static function getPackageItemMetadataClient( $applicationVersionId,  $itempath,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::getPackageItemMetadataUrl($applicationVersionId, $itempath, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param int $packageId 
	* @return MozuClient
	*/
	public static function getPackageFilesZipClient( $applicationVersionId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::getPackageFilesZipUrl($applicationVersionId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new development or release package for the application version specified in the request.
	*
	* @param int $applicationVersionId Unique identifier of the application version. Application version IDs are unique across all applications associated with the developer account.
	* @param Package $package Properties of the development or release package to define.
	* @return MozuClient
	*/
	public static function addPackageClient($pkg,  $applicationVersionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::addPackageUrl($applicationVersionId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pkg);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Uploads a file to a defined package for an application version in the file location specified in the request.
	*
	* @param int $applicationVersionId Unique identifier of the application version. Application version IDs are unique across all applications associated with a developer account.
	* @param string $filepath The file location to which to add the package file.
	* @param int $packageId Unique identifier of the package.
	* @param Stream $stream The contents of the package file to upload, which requires a content-type value of "application/octet-stream" in the request header.
	* @return MozuClient
	*/
	public static function addPackageFileClient($stream,  $applicationVersionId,  $filepath,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::addPackageFileUrl($applicationVersionId, $filepath, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withStreamBody($stream);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $applicationVersionId 
	* @param int $packageId 
	* @param RenameInfo $renameInfo 
	* @return MozuClient
	*/
	public static function changePackageFileNameOrPathClient($renameInfo,  $applicationVersionId,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::changePackageFileNameOrPathUrl($applicationVersionId, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($renameInfo);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a file in a package associated with an application version.
	*
	* @param int $applicationVersionId Unique identifier of the application version. Application version IDs are unique across all applications associated with a developer account.
	* @param string $filepath The location path and name that identifies the package file to update.
	* @param int $packageId The unique identifier of the package.
	* @param Stream $stream The contents of the package file to update, which requires a content-type value of "application/octet-stream" in the request header.
	* @return MozuClient
	*/
	public static function updatePackageFileClient($stream,  $applicationVersionId,  $filepath,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::updatePackageFileUrl($applicationVersionId, $filepath, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withStreamBody($stream);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the specified file from a package associated with an application version.
	*
	* @param int $applicationVersionId Unique identifier of the application version.
	* @param string $filepath The file path and name of the file location to delete from the package.
	* @param int $packageId Unique identifier of the package.
	*/
	public static function deletePackageFileClient( $applicationVersionId,  $filepath,  $packageId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ApplicationVersionUrl::deletePackageFileUrl($applicationVersionId, $filepath, $packageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

