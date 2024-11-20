# sendx\EventApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRevenueEvent()**](EventApi.md#createRevenueEvent) | **POST** /events/revenue | Record a revenue event for a specific contact |
| [**pushCustomEvent()**](EventApi.md#pushCustomEvent) | **POST** /events/custom | Push a custom event associated with a contact |


## `createRevenueEvent()`

```php
createRevenueEvent($revenue_event_request): \sendx\model\EventResponse
```

Record a revenue event for a specific contact

Records a revenue event, which can be attributed to campaigns, drips, workflows, or other sources of user interaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$revenue_event_request = new \sendx\model\RevenueEventRequest(); // \sendx\model\RevenueEventRequest

try {
    $result = $apiInstance->createRevenueEvent($revenue_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->createRevenueEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **revenue_event_request** | [**\sendx\model\RevenueEventRequest**](../Model/RevenueEventRequest.md)|  | |

### Return type

[**\sendx\model\EventResponse**](../Model/EventResponse.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pushCustomEvent()`

```php
pushCustomEvent($custom_event_request): \sendx\model\EventResponse
```

Push a custom event associated with a contact

Pushes a custom event with properties and values for a specified contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_event_request = new \sendx\model\CustomEventRequest(); // \sendx\model\CustomEventRequest

try {
    $result = $apiInstance->pushCustomEvent($custom_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->pushCustomEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_event_request** | [**\sendx\model\CustomEventRequest**](../Model/CustomEventRequest.md)|  | |

### Return type

[**\sendx\model\EventResponse**](../Model/EventResponse.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
