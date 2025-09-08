# sendx\EventsApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**trackCustomEvent()**](EventsApi.md#trackCustomEvent) | **POST** /events/custom | Track custom event |
| [**trackRevenueEvent()**](EventsApi.md#trackRevenueEvent) | **POST** /events/revenue | Track revenue event |


## `trackCustomEvent()`

```php
trackCustomEvent($custom_event_request): \sendx\model\EventResponse
```

Track custom event

Records custom events for advanced tracking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_event_request = {"identifier":"user@example.com","name":"video_watched","data":{"video_id":"12345","duration":"120","completed":"true"},"time":1669990400}; // \sendx\model\CustomEventRequest

try {
    $result = $apiInstance->trackCustomEvent($custom_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->trackCustomEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_event_request** | [**\sendx\model\CustomEventRequest**](../Model/CustomEventRequest.md)|  | |

### Return type

[**\sendx\model\EventResponse**](../Model/EventResponse.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackRevenueEvent()`

```php
trackRevenueEvent($revenue_event_request): \sendx\model\EventResponse
```

Track revenue event

Records revenue events for analytics and attribution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$revenue_event_request = new \sendx\model\RevenueEventRequest(); // \sendx\model\RevenueEventRequest

try {
    $result = $apiInstance->trackRevenueEvent($revenue_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->trackRevenueEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **revenue_event_request** | [**\sendx\model\RevenueEventRequest**](../Model/RevenueEventRequest.md)|  | |

### Return type

[**\sendx\model\EventResponse**](../Model/EventResponse.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
