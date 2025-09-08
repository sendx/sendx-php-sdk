# sendx\ListApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createList()**](ListApi.md#createList) | **POST** /list | Create list |
| [**deleteList()**](ListApi.md#deleteList) | **DELETE** /list/{identifier} | Delete list |
| [**getAllLists()**](ListApi.md#getAllLists) | **GET** /list | Get all lists |
| [**getList()**](ListApi.md#getList) | **GET** /list/{identifier} | Get list by ID |
| [**updateList()**](ListApi.md#updateList) | **PUT** /list/{identifier} | Update list |


## `createList()`

```php
createList($rest_e_list): \sendx\model\RestRList
```

Create list

Creates a new contact list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_list = {"name":"Premium Members"}; // \sendx\model\RestEList

try {
    $result = $apiInstance->createList($rest_e_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->createList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_list** | [**\sendx\model\RestEList**](../Model/RestEList.md)|  | |

### Return type

[**\sendx\model\RestRList**](../Model/RestRList.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteList()`

```php
deleteList($identifier): \sendx\model\DeleteResponse
```

Delete list

Deletes a list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | List identifier to delete

try {
    $result = $apiInstance->deleteList($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->deleteList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| List identifier to delete | |

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

## `getAllLists()`

```php
getAllLists($offset, $limit, $search): \sendx\model\RestRList[]
```

Get all lists

Retrieves all contact lists in your team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Number of records to skip for pagination
$limit = 10; // int | Maximum number of lists to return (max: 500)
$search = 'search_example'; // string | Search lists by name

try {
    $result = $apiInstance->getAllLists($offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getAllLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Number of records to skip for pagination | [optional] [default to 0] |
| **limit** | **int**| Maximum number of lists to return (max: 500) | [optional] [default to 10] |
| **search** | **string**| Search lists by name | [optional] |

### Return type

[**\sendx\model\RestRList[]**](../Model/RestRList.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getList()`

```php
getList($identifier): \sendx\model\RestRList
```

Get list by ID

Retrieves detailed information about a specific list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | List identifier - `list_OcuxJHdiAvujmwQVJfd3ss`

try {
    $result = $apiInstance->getList($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| List identifier - &#x60;list_OcuxJHdiAvujmwQVJfd3ss&#x60; | |

### Return type

[**\sendx\model\RestRList**](../Model/RestRList.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateList()`

```php
updateList($rest_e_list, $identifier): \sendx\model\RestRList
```

Update list

Updates an existing list's settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_list = {"name":"2024 Newsletter Subscribers"}; // \sendx\model\RestEList
$identifier = 'identifier_example'; // string | List identifier to update

try {
    $result = $apiInstance->updateList($rest_e_list, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->updateList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_list** | [**\sendx\model\RestEList**](../Model/RestEList.md)|  | |
| **identifier** | **string**| List identifier to update | |

### Return type

[**\sendx\model\RestRList**](../Model/RestRList.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
