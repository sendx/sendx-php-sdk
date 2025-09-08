# sendx\WebhookApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhook()**](WebhookApi.md#createWebhook) | **POST** /webhook | Create webhook |
| [**deleteWebhook()**](WebhookApi.md#deleteWebhook) | **DELETE** /webhook/{identifier} | Delete webhook |
| [**getAllWebhooks()**](WebhookApi.md#getAllWebhooks) | **GET** /webhook | Get all webhooks |
| [**getWebhook()**](WebhookApi.md#getWebhook) | **GET** /webhook/{identifier} | Get webhook by ID |
| [**updateWebhook()**](WebhookApi.md#updateWebhook) | **PUT** /webhook/{identifier} | Update webhook |


## `createWebhook()`

```php
createWebhook($rest_e_webhook): \sendx\model\RestRWebhook
```

Create webhook

Creates a new webhook for event notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_webhook = {"enabled":true,"url":"https://api.example.com/webhooks/sendx","unsubscribed":true,"dropped":true,"bounced":true,"markedSpam":true,"clicked":true,"opened":true,"contactCreated":true}; // \sendx\model\RestEWebhook

try {
    $result = $apiInstance->createWebhook($rest_e_webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_webhook** | [**\sendx\model\RestEWebhook**](../Model/RestEWebhook.md)|  | |

### Return type

[**\sendx\model\RestRWebhook**](../Model/RestRWebhook.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($identifier): \sendx\model\DeleteResponse
```

Delete webhook

Deletes a webhook configuration.  **🎯 Key Features:** - Remove webhooks - Stop event delivery - Clean up endpoints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Webhook identifier to update

try {
    $result = $apiInstance->deleteWebhook($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| Webhook identifier to update | |

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

## `getAllWebhooks()`

```php
getAllWebhooks(): \sendx\model\RestRWebhook[]
```

Get all webhooks

Retrieves all configured webhooks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getAllWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\sendx\model\RestRWebhook[]**](../Model/RestRWebhook.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($identifier): \sendx\model\RestRWebhook
```

Get webhook by ID

Retrieves details about a specific webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Webhook identifier to retrieve

try {
    $result = $apiInstance->getWebhook($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| Webhook identifier to retrieve | |

### Return type

[**\sendx\model\RestRWebhook**](../Model/RestRWebhook.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($rest_e_webhook, $identifier): \sendx\model\RestRWebhook
```

Update webhook

Updates webhook configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_webhook = new \sendx\model\RestEWebhook(); // \sendx\model\RestEWebhook
$identifier = 'identifier_example'; // string | Webhook identifier to update

try {
    $result = $apiInstance->updateWebhook($rest_e_webhook, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_webhook** | [**\sendx\model\RestEWebhook**](../Model/RestEWebhook.md)|  | |
| **identifier** | **string**| Webhook identifier to update | |

### Return type

[**\sendx\model\RestRWebhook**](../Model/RestRWebhook.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
