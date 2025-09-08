# sendx\CampaignApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCampaign()**](CampaignApi.md#createCampaign) | **POST** /campaign | Create campaign |
| [**deleteCampaign()**](CampaignApi.md#deleteCampaign) | **DELETE** /campaign/{identifier} | Delete campaign |
| [**getAllCampaigns()**](CampaignApi.md#getAllCampaigns) | **GET** /campaign | Get all campaigns |
| [**getCampaign()**](CampaignApi.md#getCampaign) | **GET** /campaign/{identifier} | Get campaign by ID |


## `createCampaign()`

```php
createCampaign($rest_e_campaign): \sendx\model\RestRCampaign
```

Create campaign

Creates a new email campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_campaign = {"name":"Flash Sale Announcement","subject":"⚡ 24-Hour Flash Sale - {{contact.firstName}}, Save 50%!","sender":"sender_4vK3WFhMgvOwUNyaL4QxCD","previewText":"Limited time offer - Today only!","htmlCode":"<html><body><h1>Flash Sale!</h1><p>Hi {{contact.firstName}},</p><p>Don't miss our 24-hour flash sale!</p><a href='{{sale.url}}'>Shop Now</a></body></html>","plainText":"Flash Sale!\n\nHi {{contact.firstName}},\n\nDon't miss our 24-hour flash sale!\n\nShop now: {{sale.url}}","scheduleType":1,"includedLists":["list_0tOFLp5RgV7s3LNiHrjGYs","list_vUCjsUmrVXtSppS8rD0Ssq"],"excludedTags":["tag_unengaged"]}; // \sendx\model\RestECampaign

try {
    $result = $apiInstance->createCampaign($rest_e_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_campaign** | [**\sendx\model\RestECampaign**](../Model/RestECampaign.md)|  | |

### Return type

[**\sendx\model\RestRCampaign**](../Model/RestRCampaign.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampaign()`

```php
deleteCampaign($identifier): \sendx\model\DeleteResponse
```

Delete campaign

Deletes a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Campaign identifier to delete

try {
    $result = $apiInstance->deleteCampaign($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| Campaign identifier to delete | |

### Return type

[**\sendx\model\DeleteResponse**](../Model/DeleteResponse.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCampaigns()`

```php
getAllCampaigns($offset, $limit, $campaign_type): \sendx\model\RestRCampaign[]
```

Get all campaigns

Retrieves a paginated list of all campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Number of campaigns to skip
$limit = 10; // int | Maximum number of campaigns to return
$campaign_type = 'all'; // string | Filter by campaign type

try {
    $result = $apiInstance->getAllCampaigns($offset, $limit, $campaign_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAllCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Number of campaigns to skip | [optional] [default to 0] |
| **limit** | **int**| Maximum number of campaigns to return | [optional] [default to 10] |
| **campaign_type** | **string**| Filter by campaign type | [optional] [default to &#39;all&#39;] |

### Return type

[**\sendx\model\RestRCampaign[]**](../Model/RestRCampaign.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($identifier): \sendx\model\RestRCampaign
```

Get campaign by ID

Retrieves detailed information about a specific campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Campaign identifier - `campaign_IMBoxK2iB5sUdgiNOjqAMA`

try {
    $result = $apiInstance->getCampaign($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| Campaign identifier - &#x60;campaign_IMBoxK2iB5sUdgiNOjqAMA&#x60; | |

### Return type

[**\sendx\model\RestRCampaign**](../Model/RestRCampaign.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
