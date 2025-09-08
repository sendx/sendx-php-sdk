# # RestRContact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique contact identifier with contact_ prefix.  **Format:** &#x60;contact_&#x60; + 22 alphanumeric characters  **Usage:** - Use this ID for all subsequent API calls - Unique across the entire SendX platform - Never changes once created | [optional]
**first_name** | **string** | First name of the contact | [optional]
**last_name** | **string** | Last name of the contact | [optional]
**email** | **string** | Email address of the contact (unique within team) | [optional]
**company** | **string** | Company name of the contact | [optional]
**custom_fields** | **array<string,string>** | Custom fields with field_ prefixed keys.  **Format:** All keys have &#x60;field_&#x60; prefix in responses  **Example Structure:** &#x60;&#x60;&#x60;json {   \&quot;field_MnuqBAG2NPLm7PZMWbjQxt\&quot;: \&quot;Engineering\&quot;,   \&quot;field_QqfhckbdcvQinLPlduIbHq\&quot;: \&quot;Senior\&quot;,   \&quot;field_MnuqBAG2NPLm7PZMWbjQxt\&quot;: \&quot;$75000\&quot; } &#x60;&#x60;&#x60; | [optional]
**lists** | **string[]** | Associated lists with list_ prefixed identifiers.  **Format:** All IDs have &#x60;list_&#x60; prefix in responses | [optional]
**tags** | **string[]** | Associated tags with tag_ prefixed identifiers.  **Format:** All IDs have &#x60;tag_&#x60; prefix in responses | [optional]
**unsubscribed** | **bool** | Whether the contact has unsubscribed from emails | [optional]
**bounced** | **bool** | Whether emails to this contact have bounced | [optional]
**spam** | **bool** | Whether the contact has marked emails as spam | [optional]
**blocked** | **bool** | Whether the contact is blocked from receiving emails | [optional]
**dropped** | **bool** | Whether emails to this contact have been dropped | [optional]
**created** | **\DateTime** | Contact creation timestamp (ISO 8601 format) | [optional]
**updated** | **\DateTime** | Contact last update timestamp (ISO 8601 format) | [optional]
**track_data** | **string** | Email tracking data and UTM parameters.  **Contains:** - UTM parameters from campaigns - Attribution data - Custom tracking parameters | [optional]
**contact_source** | **int** | Source type of the contact creation.  **Values:** - &#x60;1&#x60; - API/Manual - &#x60;2&#x60; - Import - &#x60;3&#x60; - Form - &#x60;4&#x60; - Integration | [optional]
**page_source** | **string** | URL of the page where contact was created | [optional]
**last_tracked_ip** | **string** | Last tracked IP address of the contact | [optional]
**ltv** | **int** | Lifetime Value of the contact in cents.  **Example:** 7500 &#x3D; $75.00 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
