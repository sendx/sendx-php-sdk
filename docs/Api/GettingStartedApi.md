# sendx\GettingStartedApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**identifyContact()**](GettingStartedApi.md#identifyContact) | **POST** /contact/identify | Identify contact |
| [**trackingContact()**](GettingStartedApi.md#trackingContact) | **POST** /contact/track | Add Tracking info |


## `identifyContact()`

```php
identifyContact($identify_request): \sendx\model\IdentifyResponse
```

Identify contact

Identify a contact by email address. If the contact already exists, it will be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\GettingStartedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identify_request = new \sendx\model\IdentifyRequest(); // \sendx\model\IdentifyRequest

try {
    $result = $apiInstance->identifyContact($identify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GettingStartedApi->identifyContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identify_request** | [**\sendx\model\IdentifyRequest**](../Model/IdentifyRequest.md)|  | |

### Return type

[**\sendx\model\IdentifyResponse**](../Model/IdentifyResponse.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackingContact()`

```php
trackingContact($track_request): \sendx\model\TrackResponse
```

Add Tracking info

Track a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\GettingStartedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$track_request = new \sendx\model\TrackRequest(); // \sendx\model\TrackRequest

try {
    $result = $apiInstance->trackingContact($track_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GettingStartedApi->trackingContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **track_request** | [**\sendx\model\TrackRequest**](../Model/TrackRequest.md)|  | |

### Return type

[**\sendx\model\TrackResponse**](../Model/TrackResponse.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
