# sendx\ContactApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContact()**](ContactApi.md#createContact) | **POST** /contact | Create a new contact |
| [**deleteContact()**](ContactApi.md#deleteContact) | **DELETE** /contact/{identifier} | Delete contact |
| [**getAllContacts()**](ContactApi.md#getAllContacts) | **GET** /contact | Get all contacts |
| [**getContact()**](ContactApi.md#getContact) | **GET** /contact/{identifier} | Get contact by ID |
| [**unsubscribeContact()**](ContactApi.md#unsubscribeContact) | **POST** /contact/unsubscribe/{identifier} | Unsubscribe contact |
| [**updateContact()**](ContactApi.md#updateContact) | **PUT** /contact/{identifier} | Update contact |


## `createContact()`

```php
createContact($rest_e_contact): \sendx\model\RestRContact
```

Create a new contact

Creates a new contact in your SendX team with the provided information.  **🎯 Key Features:** - Email validation and duplicate detection - Automatic relationship building with lists and tags - Smart custom field handling  **📋 Business Rules:** - Email is mandatory and must be unique within the team - Last tracked IP is stored for analytics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_contact = {"email":"john.doe@example.com"}; // \sendx\model\RestEContact

try {
    $result = $apiInstance->createContact($rest_e_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_contact** | [**\sendx\model\RestEContact**](../Model/RestEContact.md)|  | |

### Return type

[**\sendx\model\RestRContact**](../Model/RestRContact.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($identifier): \sendx\model\DeleteResponse
```

Delete contact

Soft deletes a contact from your team.  **🎯 Key Features:** - Soft delete preserves data - Removes from all lists - Cancels pending campaigns - Maintains historical data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = contact_BnKjkbBBS500CoBCP0oChQ; // string | Resource identifier with prefix (e.g., `contact_BnKjkbBBS500CoBCP0oChQ`)  **Format:** `<prefix>_<22-character-id>`

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
| **identifier** | **string**| Resource identifier with prefix (e.g., &#x60;contact_BnKjkbBBS500CoBCP0oChQ&#x60;)  **Format:** &#x60;&lt;prefix&gt;_&lt;22-character-id&gt;&#x60; | |

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

## `getAllContacts()`

```php
getAllContacts($offset, $limit, $search): \sendx\model\RestRContact[]
```

Get all contacts

Retrieves a paginated list of all contacts in your team with optional filtering capabilities.  **🎯 Key Features:** - Pagination support with offset/limit - Search contacts by name or email - All relationships included (lists, tags, custom fields) - Prefixed IDs for easy integration  **📊 Pagination:** - Default limit: 10 contacts per page - Maximum limit: 100 contacts per page - Use offset for page navigation  **🔍 Search:** - Searches across firstName, lastName, and email fields - Case-insensitive partial matching - Combine with pagination for large datasets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Number of records to skip for pagination.  **Examples:** - `0` - First page (default) - `50` - Second page (with limit=50) - `100` - Third page (with limit=50)
$limit = 10; // int | Maximum number of records to return.  **Constraints:** - Minimum: 1 - Maximum: 100 - Default: 10
$search = john; // string | Search term to filter contacts by name or email.  **Search Behavior:** - Searches firstName, lastName, and email fields - Case-insensitive partial matching - Minimum 2 characters for search  **Examples:** - `john` - Finds \"John Doe\", \"johnson@example.com\" - `@company.com` - Finds all emails from company.com - `smith` - Finds \"John Smith\", \"smith@email.com\"

try {
    $result = $apiInstance->getAllContacts($offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getAllContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Number of records to skip for pagination.  **Examples:** - &#x60;0&#x60; - First page (default) - &#x60;50&#x60; - Second page (with limit&#x3D;50) - &#x60;100&#x60; - Third page (with limit&#x3D;50) | [optional] [default to 0] |
| **limit** | **int**| Maximum number of records to return.  **Constraints:** - Minimum: 1 - Maximum: 100 - Default: 10 | [optional] [default to 50] |
| **search** | **string**| Search term to filter contacts by name or email.  **Search Behavior:** - Searches firstName, lastName, and email fields - Case-insensitive partial matching - Minimum 2 characters for search  **Examples:** - &#x60;john&#x60; - Finds \&quot;John Doe\&quot;, \&quot;johnson@example.com\&quot; - &#x60;@company.com&#x60; - Finds all emails from company.com - &#x60;smith&#x60; - Finds \&quot;John Smith\&quot;, \&quot;smith@email.com\&quot; | [optional] |

### Return type

[**\sendx\model\RestRContact[]**](../Model/RestRContact.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContact()`

```php
getContact($identifier): \sendx\model\RestRContact
```

Get contact by ID

Retrieves detailed information about a specific contact.  **🎯 Key Features:** - Returns complete contact profile - Includes all lists and tags - Shows custom field values - Provides engagement metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = contact_BnKjkbBBS500CoBCP0oChQ; // string | Resource identifier with prefix (e.g., `contact_BnKjkbBBS500CoBCP0oChQ`)  **Format:** `<prefix>_<22-character-id>`

try {
    $result = $apiInstance->getContact($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| Resource identifier with prefix (e.g., &#x60;contact_BnKjkbBBS500CoBCP0oChQ&#x60;)  **Format:** &#x60;&lt;prefix&gt;_&lt;22-character-id&gt;&#x60; | |

### Return type

[**\sendx\model\RestRContact**](../Model/RestRContact.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unsubscribeContact()`

```php
unsubscribeContact($identifier): \sendx\model\MessageResponse
```

Unsubscribe contact

Unsubscribes a contact from all marketing communications.  **🎯 Key Features:** - Marks contact as unsubscribed - Removes from all active campaigns - Maintains unsubscribe history - Complies with anti-spam regulations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = contact_BnKjkbBBS500CoBCP0oChQ; // string | Resource identifier with prefix (e.g., `contact_BnKjkbBBS500CoBCP0oChQ`)  **Format:** `<prefix>_<22-character-id>`

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
| **identifier** | **string**| Resource identifier with prefix (e.g., &#x60;contact_BnKjkbBBS500CoBCP0oChQ&#x60;)  **Format:** &#x60;&lt;prefix&gt;_&lt;22-character-id&gt;&#x60; | |

### Return type

[**\sendx\model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($rest_e_contact, $identifier): \sendx\model\RestRContact
```

Update contact

Updates an existing contact's information.  **🎯 Key Features:** - Partial updates supported - Add/remove lists and tags - Update custom fields - Change email address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_contact = {"firstName":"Alexander","lastName":"Johnson-Smith","company":"New Enterprise Corp"}; // \sendx\model\RestEContact
$identifier = contact_BnKjkbBBS500CoBCP0oChQ; // string | Resource identifier with prefix (e.g., `contact_BnKjkbBBS500CoBCP0oChQ`)  **Format:** `<prefix>_<22-character-id>`

try {
    $result = $apiInstance->updateContact($rest_e_contact, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_contact** | [**\sendx\model\RestEContact**](../Model/RestEContact.md)|  | |
| **identifier** | **string**| Resource identifier with prefix (e.g., &#x60;contact_BnKjkbBBS500CoBCP0oChQ&#x60;)  **Format:** &#x60;&lt;prefix&gt;_&lt;22-character-id&gt;&#x60; | |

### Return type

[**\sendx\model\RestRContact**](../Model/RestRContact.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
