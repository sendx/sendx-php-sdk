# sendx\TemplateApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmailTemplate()**](TemplateApi.md#createEmailTemplate) | **POST** /template/email | Create email template |
| [**deleteEmailTemplate()**](TemplateApi.md#deleteEmailTemplate) | **DELETE** /template/email/{identifier} | Delete template |
| [**getAllEmailTemplates()**](TemplateApi.md#getAllEmailTemplates) | **GET** /template/email | Get all templates |
| [**getEmailTemplate()**](TemplateApi.md#getEmailTemplate) | **GET** /template/email/{identifier} | Get template by ID |
| [**updateEmailTemplate()**](TemplateApi.md#updateEmailTemplate) | **PUT** /template/email/{identifier} | Update template |


## `createEmailTemplate()`

```php
createEmailTemplate($rest_e_template): \sendx\model\RestRTemplate
```

Create email template

Creates a new reusable email template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_template = {"name":"Weekly Newsletter Template","htmlCode":"<div class=\"newsletter\"><h1>{{company.name}} Weekly Update</h1><div class=\"content\">{{email.content}}</div></div>","templateCode":"{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"attrs\":{\"textAlign\":null,\"showIfKey\":null},\"content\":[{\"type\":\"text\",\"text\":\"This is a new template\"}]}]}","editorType":1}; // \sendx\model\RestETemplate

try {
    $result = $apiInstance->createEmailTemplate($rest_e_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->createEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_template** | [**\sendx\model\RestETemplate**](../Model/RestETemplate.md)|  | |

### Return type

[**\sendx\model\RestRTemplate**](../Model/RestRTemplate.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailTemplate()`

```php
deleteEmailTemplate($identifier): \sendx\model\DeleteResponse
```

Delete template

Deletes an email template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = template_f3lJvTEhSjKGVb5Lwc5SWS; // string | The unique template identifier to update.  - `template_f3lJvTEhSjKGVb5Lwc5SWS`

try {
    $result = $apiInstance->deleteEmailTemplate($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->deleteEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The unique template identifier to update.  - &#x60;template_f3lJvTEhSjKGVb5Lwc5SWS&#x60; | |

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

## `getAllEmailTemplates()`

```php
getAllEmailTemplates($offset, $limit, $search): \sendx\model\RestRTemplate[]
```

Get all templates

Retrieves all email templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Number of records to skip for pagination.  **Examples:** - `0` - First page (default) - `25` - Second page (with limit=25) - `50` - Third page (with limit=25)
$limit = 10; // int | Maximum number of templates to return per page.  **Guidelines:** - Default: 10 templates - Maximum: 100 templates - Recommended: 25-100 for optimal performance
$search = 'search_example'; // string | Search templates by name (case-insensitive partial matching).  **Examples:** - `newsletter` - Finds \"Weekly Newsletter\", \"Monthly Newsletter\" - `welcome` - Finds \"Welcome Email\", \"New User Welcome\" - `product` - Finds \"Product Launch\", \"Product Update\"

try {
    $result = $apiInstance->getAllEmailTemplates($offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getAllEmailTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Number of records to skip for pagination.  **Examples:** - &#x60;0&#x60; - First page (default) - &#x60;25&#x60; - Second page (with limit&#x3D;25) - &#x60;50&#x60; - Third page (with limit&#x3D;25) | [optional] [default to 0] |
| **limit** | **int**| Maximum number of templates to return per page.  **Guidelines:** - Default: 10 templates - Maximum: 100 templates - Recommended: 25-100 for optimal performance | [optional] [default to 10] |
| **search** | **string**| Search templates by name (case-insensitive partial matching).  **Examples:** - &#x60;newsletter&#x60; - Finds \&quot;Weekly Newsletter\&quot;, \&quot;Monthly Newsletter\&quot; - &#x60;welcome&#x60; - Finds \&quot;Welcome Email\&quot;, \&quot;New User Welcome\&quot; - &#x60;product&#x60; - Finds \&quot;Product Launch\&quot;, \&quot;Product Update\&quot; | [optional] |

### Return type

[**\sendx\model\RestRTemplate[]**](../Model/RestRTemplate.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplate()`

```php
getEmailTemplate($identifier): \sendx\model\RestRTemplate
```

Get template by ID

Retrieves a specific email template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = template_f3lJvTEhSjKGVb5Lwc5SWS; // string | The unique template identifier.  - `template_f3lJvTEhSjKGVb5Lwc5SWS` - Standard prefixed ID

try {
    $result = $apiInstance->getEmailTemplate($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The unique template identifier.  - &#x60;template_f3lJvTEhSjKGVb5Lwc5SWS&#x60; - Standard prefixed ID | |

### Return type

[**\sendx\model\RestRTemplate**](../Model/RestRTemplate.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailTemplate()`

```php
updateEmailTemplate($rest_e_template, $identifier): \sendx\model\RestRTemplate
```

Update template

Updates an existing email template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_template = new \sendx\model\RestETemplate(); // \sendx\model\RestETemplate
$identifier = template_f3lJvTEhSjKGVb5Lwc5SWS; // string | The unique template identifier to update.  - `template_f3lJvTEhSjKGVb5Lwc5SWS`

try {
    $result = $apiInstance->updateEmailTemplate($rest_e_template, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->updateEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_template** | [**\sendx\model\RestETemplate**](../Model/RestETemplate.md)|  | |
| **identifier** | **string**| The unique template identifier to update.  - &#x60;template_f3lJvTEhSjKGVb5Lwc5SWS&#x60; | |

### Return type

[**\sendx\model\RestRTemplate**](../Model/RestRTemplate.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
