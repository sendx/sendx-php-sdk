# sendx\ReportsApi

All URIs are relative to https://api.sendx.io/api/v1/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCampaignReport()**](ReportsApi.md#getCampaignReport) | **GET** /report/campaign/{campaignId} | Get Campaign Report Data |


## `getCampaignReport()`

```php
getCampaignReport($campaign_id, $integration_type): \sendx\model\ReportData
```

Get Campaign Report Data

Retrieve the campaign report data based on the provided campaign id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The ID of the campaign to retrieve the report data for
$integration_type = 'integration_type_example'; // string | Type of integration for the report data (optional)

try {
    $result = $apiInstance->getCampaignReport($campaign_id, $integration_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getCampaignReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The ID of the campaign to retrieve the report data for | |
| **integration_type** | **string**| Type of integration for the report data (optional) | [optional] |

### Return type

[**\sendx\model\ReportData**](../Model/ReportData.md)

### Authorization

[apiKeyAuth](../../README.md#apiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
