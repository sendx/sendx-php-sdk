# sendx\TrackingApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**identifyContact()**](TrackingApi.md#identifyContact) | **POST** /contact/identify | Identify contact |
| [**trackContact()**](TrackingApi.md#trackContact) | **POST** /contact/track | Track contact |


## `identifyContact()`

```php
identifyContact($identify_request): \sendx\model\IdentifyResponse
```

Identify contact

Legacy endpoint for identifying contacts. Creates or updates a contact.   **🎯 Key Features:** - Creates contact if doesn't exist - Updates if email already exists - Supports custom fields and tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identify_request = {"email":"john.doe@example.com"}; // \sendx\model\IdentifyRequest

try {
    $result = $apiInstance->identifyContact($identify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->identifyContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identify_request** | [**\sendx\model\IdentifyRequest**](../Model/IdentifyRequest.md)|  | |

### Return type

[**\sendx\model\IdentifyResponse**](../Model/IdentifyResponse.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackContact()`

```php
trackContact($track_request): \sendx\model\TrackResponse
```

Track contact

Legacy endpoint for tracking contact behavior through tags.   **🎯 Key Features:** - Add or remove tags - Trigger automations - Track user behavior

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\TrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$track_request = {"email":"test@example.com","addTags":["new","cool"],"removeTags":["old","bad"]}; // \sendx\model\TrackRequest

try {
    $result = $apiInstance->trackContact($track_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->trackContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **track_request** | [**\sendx\model\TrackRequest**](../Model/TrackRequest.md)|  | |

### Return type

[**\sendx\model\TrackResponse**](../Model/TrackResponse.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
