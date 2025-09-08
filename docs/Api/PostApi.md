# sendx\PostApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPost()**](PostApi.md#createPost) | **POST** /post | Create blog post |
| [**deletePost()**](PostApi.md#deletePost) | **DELETE** /post/{identifier} | Delete post |
| [**getAllPosts()**](PostApi.md#getAllPosts) | **GET** /post | Get all posts |
| [**getPost()**](PostApi.md#getPost) | **GET** /post/{identifier} | Get post by ID |
| [**updatePost()**](PostApi.md#updatePost) | **PUT** /post/{identifier} | Update post |


## `createPost()`

```php
createPost($rest_e_post): \sendx\model\RestRPost
```

Create blog post

Creates a new blog post.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_post = {"name":"launch_draft_2025","postTitle":"Upcoming Product Launch"}; // \sendx\model\RestEPost

try {
    $result = $apiInstance->createPost($rest_e_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->createPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_post** | [**\sendx\model\RestEPost**](../Model/RestEPost.md)|  | |

### Return type

[**\sendx\model\RestRPost**](../Model/RestRPost.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePost()`

```php
deletePost($identifier): \sendx\model\MessageResponse
```

Delete post

Soft deletes a blog post.  **🎯 Key Features:** - Soft delete - Preserve data - Remove from listings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = contact_BnKjkbBBS500CoBCP0oChQ; // string | Resource identifier with prefix (e.g., `contact_BnKjkbBBS500CoBCP0oChQ`)  **Format:** `<prefix>_<22-character-id>`

try {
    $result = $apiInstance->deletePost($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->deletePost: ', $e->getMessage(), PHP_EOL;
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

## `getAllPosts()`

```php
getAllPosts($offset, $limit): \sendx\model\RestRPost[]
```

Get all posts

Retrieves all blog posts with pagination.  **🎯 Key Features:** - Filter by status - Search functionality - Sort options - Include metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Number of posts to skip
$limit = 10; // int | Maximum number of posts to return

try {
    $result = $apiInstance->getAllPosts($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getAllPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Number of posts to skip | [optional] [default to 0] |
| **limit** | **int**| Maximum number of posts to return | [optional] [default to 10] |

### Return type

[**\sendx\model\RestRPost[]**](../Model/RestRPost.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPost()`

```php
getPost($identifier): \sendx\model\RestRPost
```

Get post by ID

Retrieves a specific blog post.  **🎯 Key Features:** - Full post content - SEO metadata - Related posts - Engagement metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = contact_BnKjkbBBS500CoBCP0oChQ; // string | Resource identifier with prefix (e.g., `contact_BnKjkbBBS500CoBCP0oChQ`)  **Format:** `<prefix>_<22-character-id>`

try {
    $result = $apiInstance->getPost($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->getPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| Resource identifier with prefix (e.g., &#x60;contact_BnKjkbBBS500CoBCP0oChQ&#x60;)  **Format:** &#x60;&lt;prefix&gt;_&lt;22-character-id&gt;&#x60; | |

### Return type

[**\sendx\model\RestRPost**](../Model/RestRPost.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePost()`

```php
updatePost($rest_e_post, $identifier): \sendx\model\RestRPost
```

Update post

Updates an existing blog post.  **🎯 Key Features:** - Edit content - Update metadata - Change status - Modify tags/categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\PostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rest_e_post = new \sendx\model\RestEPost(); // \sendx\model\RestEPost
$identifier = contact_BnKjkbBBS500CoBCP0oChQ; // string | Resource identifier with prefix (e.g., `contact_BnKjkbBBS500CoBCP0oChQ`)  **Format:** `<prefix>_<22-character-id>`

try {
    $result = $apiInstance->updatePost($rest_e_post, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostApi->updatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rest_e_post** | [**\sendx\model\RestEPost**](../Model/RestEPost.md)|  | |
| **identifier** | **string**| Resource identifier with prefix (e.g., &#x60;contact_BnKjkbBBS500CoBCP0oChQ&#x60;)  **Format:** &#x60;&lt;prefix&gt;_&lt;22-character-id&gt;&#x60; | |

### Return type

[**\sendx\model\RestRPost**](../Model/RestRPost.md)

### Authorization

[TeamApiKey](../../README.md#TeamApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
