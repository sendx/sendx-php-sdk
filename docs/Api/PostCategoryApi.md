# sendx\PostCategoryApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPostCategory()**](PostCategoryApi.md#createPostCategory) | **POST** /post/category | Create post category |
| [**deletePostCategory()**](PostCategoryApi.md#deletePostCategory) | **DELETE** /post/category/{identifier} | Delete post category |
| [**getAllPostCategories()**](PostCategoryApi.md#getAllPostCategories) | **GET** /post/category | Get all post categories |
| [**getPostCategory()**](PostCategoryApi.md#getPostCategory) | **GET** /post/category/{identifier} | Get post category by ID |
| [**updatePostCategory()**](PostCategoryApi.md#updatePostCategory) | **PUT** /post/category/{identifier} | Update post category |


## `createPostCategory()`

```php
createPostCategory($rest_e_post_category): \sendx\model\RestRPostCategory
```

Create post category

Creates a new category for organizing blog posts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_post_category = {"name":"Product Updates"}; // \sendx\model\RestEPostCategory

try {
    $result = $apiInstance->createPostCategory($rest_e_post_category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostCategoryApi->createPostCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_post_category** | [**\sendx\model\RestEPostCategory**](../Model/RestEPostCategory.md)|  | |

### Return type

[**\sendx\model\RestRPostCategory**](../Model/RestRPostCategory.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePostCategory()`

```php
deletePostCategory($identifier): \sendx\model\MessageResponse
```

Delete post category

Soft deletes a post category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = post_category_YzS1wOU20yw87UUHKxMzwn; // string | The unique post category identifier to retrieve. - `post_category_YzS1wOU20yw87UUHKxMzwn`

try {
    $result = $apiInstance->deletePostCategory($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostCategoryApi->deletePostCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The unique post category identifier to retrieve. - &#x60;post_category_YzS1wOU20yw87UUHKxMzwn&#x60; | |

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

## `getAllPostCategories()`

```php
getAllPostCategories(): \sendx\model\RestRPostCategory[]
```

Get all post categories

Retrieves all blog post categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllPostCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostCategoryApi->getAllPostCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\sendx\model\RestRPostCategory[]**](../Model/RestRPostCategory.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostCategory()`

```php
getPostCategory($identifier): \sendx\model\RestRPostCategory
```

Get post category by ID

Retrieves a specific post category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = post_category_YzS1wOU20yw87UUHKxMzwn; // string | The unique post category identifier to retrieve. - `post_category_YzS1wOU20yw87UUHKxMzwn`

try {
    $result = $apiInstance->getPostCategory($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostCategoryApi->getPostCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The unique post category identifier to retrieve. - &#x60;post_category_YzS1wOU20yw87UUHKxMzwn&#x60; | |

### Return type

[**\sendx\model\RestRPostCategory**](../Model/RestRPostCategory.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePostCategory()`

```php
updatePostCategory($rest_e_post_category, $identifier): \sendx\model\RestRPostCategory
```

Update post category

Updates a post category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_post_category = new \sendx\model\RestEPostCategory(); // \sendx\model\RestEPostCategory
$identifier = post_category_YzS1wOU20yw87UUHKxMzwn; // string | The unique post category identifier to retrieve. - `post_category_YzS1wOU20yw87UUHKxMzwn`

try {
    $result = $apiInstance->updatePostCategory($rest_e_post_category, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostCategoryApi->updatePostCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_post_category** | [**\sendx\model\RestEPostCategory**](../Model/RestEPostCategory.md)|  | |
| **identifier** | **string**| The unique post category identifier to retrieve. - &#x60;post_category_YzS1wOU20yw87UUHKxMzwn&#x60; | |

### Return type

[**\sendx\model\RestRPostCategory**](../Model/RestRPostCategory.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
