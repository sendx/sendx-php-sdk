# sendx\ContactApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContact()**](ContactApi.md#createContact) | **POST** /contact | Create a contact |
| [**deleteContact()**](ContactApi.md#deleteContact) | **DELETE** /contact/{identifier} | Delete Contact |
| [**getAllContacts()**](ContactApi.md#getAllContacts) | **GET** /contact | Get All Contacts |
| [**getContactById()**](ContactApi.md#getContactById) | **GET** /contact/{identifier} | Get Contact by Identifier |
| [**unsubscribeContact()**](ContactApi.md#unsubscribeContact) | **POST** /contact/unsubscribe/{identifier} | Unsubscribe Contact |
| [**updateContact()**](ContactApi.md#updateContact) | **PUT** /contact/{identifier} | Update Contact |


## `createContact()`

```php
createContact($contact_request): \sendx\model\Response
```

Create a contact

Create Contact with given data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_request = new \sendx\model\ContactRequest(); // \sendx\model\ContactRequest

try {
    $result = $apiInstance->createContact($contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_request** | [**\sendx\model\ContactRequest**](../Model/ContactRequest.md)|  | |

### Return type

[**\sendx\model\Response**](../Model/Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($identifier): \sendx\model\Response
```

Delete Contact

Deletes Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | The Contact ID/ Email to delete

try {
    $result = $apiInstance->deleteContact($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The Contact ID/ Email to delete | |

### Return type

[**\sendx\model\Response**](../Model/Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllContacts()`

```php
getAllContacts($offset, $limit, $contact_type, $search): \sendx\model\Contact[]
```

Get All Contacts

Find all contacts with optional filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Offset for pagination
$limit = 10; // int | Limit for pagination
$contact_type = 'contact_type_example'; // string | Filter contacts by type
$search = 'search_example'; // string | Search term to filter contacts

try {
    $result = $apiInstance->getAllContacts($offset, $limit, $contact_type, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getAllContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset for pagination | [optional] [default to 0] |
| **limit** | **int**| Limit for pagination | [optional] [default to 10] |
| **contact_type** | **string**| Filter contacts by type | [optional] |
| **search** | **string**| Search term to filter contacts | [optional] |

### Return type

[**\sendx\model\Contact[]**](../Model/Contact.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactById()`

```php
getContactById($identifier): \sendx\model\Contact
```

Get Contact by Identifier

Retrieve a specific contact by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = john@doe.com; // string | The ID or Email of the contact to retrieve.

try {
    $result = $apiInstance->getContactById($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The ID or Email of the contact to retrieve. | |

### Return type

[**\sendx\model\Contact**](../Model/Contact.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsubscribeContact()`

```php
unsubscribeContact($identifier): \sendx\model\Response
```

Unsubscribe Contact

Unsubscribe a globally existing contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = sendx123; // string | The Contact ID or email to unsubscribe

try {
    $result = $apiInstance->unsubscribeContact($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->unsubscribeContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The Contact ID or email to unsubscribe | |

### Return type

[**\sendx\model\Response**](../Model/Response.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($contact_request, $identifier): \sendx\model\Contact
```

Update Contact

Update Contact with given data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_request = new \sendx\model\ContactRequest(); // \sendx\model\ContactRequest
$identifier = sendxid123; // string | The ID or email of the Contact to update

try {
    $result = $apiInstance->updateContact($contact_request, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_request** | [**\sendx\model\ContactRequest**](../Model/ContactRequest.md)|  | |
| **identifier** | **string**| The ID or email of the Contact to update | |

### Return type

[**\sendx\model\Contact**](../Model/Contact.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
