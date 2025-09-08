# sendx\PostTagApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPostTag()**](PostTagApi.md#createPostTag) | **POST** /post/tag | Create post tag |
| [**deletePostTag()**](PostTagApi.md#deletePostTag) | **DELETE** /post/tag/{identifier} | Delete post tag |
| [**getAllPostTags()**](PostTagApi.md#getAllPostTags) | **GET** /post/tag | Get all post tags |
| [**getPostTag()**](PostTagApi.md#getPostTag) | **GET** /post/tag/{identifier} | Get post tag by ID |
| [**updatePostTag()**](PostTagApi.md#updatePostTag) | **PUT** /post/tag/{identifier} | Update post tag |


## `createPostTag()`

```php
createPostTag($rest_e_post_tag): \sendx\model\RestRPostTag
```

Create post tag

Creates a new tag for blog posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_post_tag = new \sendx\model\RestEPostTag(); // \sendx\model\RestEPostTag

try {
    $result = $apiInstance->createPostTag($rest_e_post_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostTagApi->createPostTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_post_tag** | [**\sendx\model\RestEPostTag**](../Model/RestEPostTag.md)|  | |

### Return type

[**\sendx\model\RestRPostTag**](../Model/RestRPostTag.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePostTag()`

```php
deletePostTag($identifier): \sendx\model\MessageResponse
```

Delete post tag

Soft deletes a post tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = post_tag_leBDiFdrUnRmRz4nfopSrv; // string | The unique post tag identifier to retrieve. - `post_tag_leBDiFdrUnRmRz4nfopSrv`

try {
    $result = $apiInstance->deletePostTag($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostTagApi->deletePostTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The unique post tag identifier to retrieve. - &#x60;post_tag_leBDiFdrUnRmRz4nfopSrv&#x60; | |

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

## `getAllPostTags()`

```php
getAllPostTags(): \sendx\model\RestRPostTag[]
```

Get all post tags

Retrieves all blog post tags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllPostTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostTagApi->getAllPostTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\sendx\model\RestRPostTag[]**](../Model/RestRPostTag.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostTag()`

```php
getPostTag($identifier): \sendx\model\RestRPostTag
```

Get post tag by ID

Retrieves a specific post tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = post_tag_leBDiFdrUnRmRz4nfopSrv; // string | The unique post tag identifier to retrieve. - `post_tag_leBDiFdrUnRmRz4nfopSrv`

try {
    $result = $apiInstance->getPostTag($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostTagApi->getPostTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The unique post tag identifier to retrieve. - &#x60;post_tag_leBDiFdrUnRmRz4nfopSrv&#x60; | |

### Return type

[**\sendx\model\RestRPostTag**](../Model/RestRPostTag.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePostTag()`

```php
updatePostTag($rest_e_post_tag, $identifier): \sendx\model\RestRPostTag
```

Update post tag

Updates a post tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostTagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_post_tag = new \sendx\model\RestEPostTag(); // \sendx\model\RestEPostTag
$identifier = post_tag_leBDiFdrUnRmRz4nfopSrv; // string | The unique post tag identifier to retrieve. - `post_tag_leBDiFdrUnRmRz4nfopSrv`

try {
    $result = $apiInstance->updatePostTag($rest_e_post_tag, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostTagApi->updatePostTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_post_tag** | [**\sendx\model\RestEPostTag**](../Model/RestEPostTag.md)|  | |
| **identifier** | **string**| The unique post tag identifier to retrieve. - &#x60;post_tag_leBDiFdrUnRmRz4nfopSrv&#x60; | |

### Return type

[**\sendx\model\RestRPostTag**](../Model/RestRPostTag.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
