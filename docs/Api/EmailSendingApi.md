# sendx\EmailSendingApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendEmail()**](EmailSendingApi.md#sendEmail) | **POST** /send/email | Send transactional email |
| [**sendEmailWithTemplate()**](EmailSendingApi.md#sendEmailWithTemplate) | **POST** /send/template | Send email using template |


## `sendEmail()`

```php
sendEmail($x_email_message): \sendx\model\XEmailResponse[]
```

Send transactional email

Sends transactional emails to specified recipients with support for personalization, attachments, and tracking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\EmailSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_email_message = new \sendx\model\XEmailMessage(); // \sendx\model\XEmailMessage

try {
    $result = $apiInstance->sendEmail($x_email_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSendingApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_email_message** | [**\sendx\model\XEmailMessage**](../Model/XEmailMessage.md)|  | |

### Return type

[**\sendx\model\XEmailResponse[]**](../Model/XEmailResponse.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailWithTemplate()`

```php
sendEmailWithTemplate($x_email_message): \sendx\model\XEmailResponse[]
```

Send email using template

Sends emails using a pre-defined template with variable substitution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\EmailSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_email_message = new \sendx\model\XEmailMessage(); // \sendx\model\XEmailMessage

try {
    $result = $apiInstance->sendEmailWithTemplate($x_email_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSendingApi->sendEmailWithTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_email_message** | [**\sendx\model\XEmailMessage**](../Model/XEmailMessage.md)|  | |

### Return type

[**\sendx\model\XEmailResponse[]**](../Model/XEmailResponse.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
