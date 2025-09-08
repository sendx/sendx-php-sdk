# sendx\CustomFieldApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomField()**](CustomFieldApi.md#createCustomField) | **POST** /customfield | Create custom field |
| [**deleteCustomField()**](CustomFieldApi.md#deleteCustomField) | **DELETE** /customfield/{identifier} | Delete custom field |
| [**getAllCustomFields()**](CustomFieldApi.md#getAllCustomFields) | **GET** /customfield | Get all custom fields |
| [**getCustomField()**](CustomFieldApi.md#getCustomField) | **GET** /customfield/{identifier} | Get custom field by ID |
| [**updateCustomField()**](CustomFieldApi.md#updateCustomField) | **PUT** /customfield/{identifier} | Update custom field |


## `createCustomField()`

```php
createCustomField($rest_e_custom_field): \sendx\model\RestRCustomField
```

Create custom field

Creates a new custom field for storing contact data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_custom_field = new \sendx\model\RestECustomField(); // \sendx\model\RestECustomField

try {
    $result = $apiInstance->createCustomField($rest_e_custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->createCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_custom_field** | [**\sendx\model\RestECustomField**](../Model/RestECustomField.md)|  | |

### Return type

[**\sendx\model\RestRCustomField**](../Model/RestRCustomField.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomField()`

```php
deleteCustomField($identifier): \sendx\model\DeleteResponse
```

Delete custom field

Deletes a custom field (data is preserved).  **🎯 Key Features:** - Remove unused fields - Data remains on contacts - Clean up field list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Custom field identifier to update

try {
    $result = $apiInstance->deleteCustomField($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| Custom field identifier to update | |

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

## `getAllCustomFields()`

```php
getAllCustomFields($offset, $limit, $search): \sendx\model\RestRCustomField[]
```

Get all custom fields

Retrieves all custom fields defined for your team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Number of fields to skip for pagination
$limit = 10; // int | Maximum number of fields to return
$search = 'search_example'; // string | Search custom fields by name (case-insensitive partial matching).  **Examples:** - `points` - Finds \"Loyalty points\", \"Reward points\"

try {
    $result = $apiInstance->getAllCustomFields($offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->getAllCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Number of fields to skip for pagination | [optional] [default to 0] |
| **limit** | **int**| Maximum number of fields to return | [optional] [default to 10] |
| **search** | **string**| Search custom fields by name (case-insensitive partial matching).  **Examples:** - &#x60;points&#x60; - Finds \&quot;Loyalty points\&quot;, \&quot;Reward points\&quot; | [optional] |

### Return type

[**\sendx\model\RestRCustomField[]**](../Model/RestRCustomField.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomField()`

```php
getCustomField($identifier): \sendx\model\RestRCustomField
```

Get custom field by ID

Retrieves details about a specific custom field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | Custom field identifier to update

try {
    $result = $apiInstance->getCustomField($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->getCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| Custom field identifier to update | |

### Return type

[**\sendx\model\RestRCustomField**](../Model/RestRCustomField.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomField()`

```php
updateCustomField($rest_e_custom_field, $identifier): \sendx\model\RestRCustomField
```

Update custom field

Updates a custom field definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_custom_field = {"name":"Customer Tier","description":"Customer segmentation tier (Bronze/Silver/Gold)"}; // \sendx\model\RestECustomField
$identifier = 'identifier_example'; // string | Custom field identifier to update

try {
    $result = $apiInstance->updateCustomField($rest_e_custom_field, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_custom_field** | [**\sendx\model\RestECustomField**](../Model/RestECustomField.md)|  | |
| **identifier** | **string**| Custom field identifier to update | |

### Return type

[**\sendx\model\RestRCustomField**](../Model/RestRCustomField.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
