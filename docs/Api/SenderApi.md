# sendx\SenderApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSender()**](SenderApi.md#createSender) | **POST** /sender | Create sender |
| [**getAllSenders()**](SenderApi.md#getAllSenders) | **GET** /sender | Get all senders |


## `createSender()`

```php
createSender($rest_e_sender): \sendx\model\RestRSender
```

Create sender

Adds a new sender email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_sender = new \sendx\model\RestESender(); // \sendx\model\RestESender

try {
    $result = $apiInstance->createSender($rest_e_sender);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->createSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_sender** | [**\sendx\model\RestESender**](../Model/RestESender.md)|  | |

### Return type

[**\sendx\model\RestRSender**](../Model/RestRSender.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllSenders()`

```php
getAllSenders(): \sendx\model\RestRSender[]
```

Get all senders

Retrieves all verified sender addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllSenders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->getAllSenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\sendx\model\RestRSender[]**](../Model/RestRSender.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
