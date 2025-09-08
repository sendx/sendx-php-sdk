# sendx\EventApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventsCustomPostbackGet()**](EventApi.md#eventsCustomPostbackGet) | **GET** /events/custom/postback | Custom Event Postback URL |
| [**eventsRevenuePostbackGet()**](EventApi.md#eventsRevenuePostbackGet) | **GET** /events/revenue/postback | Revenue Event Postback URL |


## `eventsCustomPostbackGet()`

```php
eventsCustomPostbackGet($team_id, $id, $event, $any_key): \sendx\model\EventsRevenuePostbackGet200Response
```

Custom Event Postback URL

Register a custom event for a specific team and event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 'team_id_example'; // string | The unique identifier for the team.
$id = 'id_example'; // string | The unique sendx identifier for the contact/customer.
$event = 'event_example'; // string | The custom event name.
$any_key = 24.43; // string | Arbitrary custom data as key-value pairs. Add custom parameters directly to the query string.  For example, `amount=24.43` or `currency=USD`.

try {
    $result = $apiInstance->eventsCustomPostbackGet($team_id, $id, $event, $any_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventsCustomPostbackGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| The unique identifier for the team. | |
| **id** | **string**| The unique sendx identifier for the contact/customer. | |
| **event** | **string**| The custom event name. | |
| **any_key** | **string**| Arbitrary custom data as key-value pairs. Add custom parameters directly to the query string.  For example, &#x60;amount&#x3D;24.43&#x60; or &#x60;currency&#x3D;USD&#x60;. | |

### Return type

[**\sendx\model\EventsRevenuePostbackGet200Response**](../Model/EventsRevenuePostbackGet200Response.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsRevenuePostbackGet()`

```php
eventsRevenuePostbackGet($team_id, $id, $amount, $campaign_id): \sendx\model\EventsRevenuePostbackGet200Response
```

Revenue Event Postback URL

Trigger a revenue postback for a specific team and event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\EventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 'team_id_example'; // string | The unique identifier for the team.
$id = 'id_example'; // string | The unique sendx identifier for the contact/customer.
$amount = 3.4; // float | The revenue amount to be posted back.
$campaign_id = 'campaign_id_example'; // string | The unique identifier for the campaign.

try {
    $result = $apiInstance->eventsRevenuePostbackGet($team_id, $id, $amount, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventApi->eventsRevenuePostbackGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| The unique identifier for the team. | |
| **id** | **string**| The unique sendx identifier for the contact/customer. | |
| **amount** | **float**| The revenue amount to be posted back. | |
| **campaign_id** | **string**| The unique identifier for the campaign. | |

### Return type

[**\sendx\model\EventsRevenuePostbackGet200Response**](../Model/EventsRevenuePostbackGet200Response.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
