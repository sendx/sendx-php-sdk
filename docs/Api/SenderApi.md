# sendx\SenderApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSender()**](SenderApi.md#createSender) | **POST** /sender | Create Sender |
| [**getAllSenders()**](SenderApi.md#getAllSenders) | **GET** /sender | Get All Senders |


## `createSender()`

```php
createSender($sender_request): \sendx\model\Sender
```

Create Sender

Creates a new sender in the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_request = new \sendx\model\SenderRequest(); // \sendx\model\SenderRequest

try {
    $result = $apiInstance->createSender($sender_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->createSender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender_request** | [**\sendx\model\SenderRequest**](../Model/SenderRequest.md)|  | |

### Return type

[**\sendx\model\Sender**](../Model/Sender.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllSenders()`

```php
getAllSenders($offset, $limit, $search): \sendx\model\SenderResponse[]
```

Get All Senders

Retrieve all senders for the team, with optional filters like offset, limit, and search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Number of records to skip
$limit = 10; // int | Maximum number of records to return
$search = 'search_example'; // string | Search keyword to filter senders by name or email

try {
    $result = $apiInstance->getAllSenders($offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->getAllSenders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Number of records to skip | [optional] [default to 0] |
| **limit** | **int**| Maximum number of records to return | [optional] [default to 10] |
| **search** | **string**| Search keyword to filter senders by name or email | [optional] |

### Return type

[**\sendx\model\SenderResponse[]**](../Model/SenderResponse.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
