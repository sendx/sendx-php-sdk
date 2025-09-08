# # RestRTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique template identifier with template_ prefix | [optional]
**name** | **string** | Name of the template | [optional]
**subject** | **string** | Email subject line (if applicable) | [optional]
**html_code** | **string** | HTML content of the template | [optional]
**template_code** | **string** | Template code for visual editors (JSON structure) | [optional]
**type** | **int** | Template type.  **Values:** - &#x60;0&#x60; - Email template - &#x60;1&#x60; - Other types | [optional]
**thumbnail** | **string** | URL to template thumbnail image | [optional]
**editor_type** | **int** | Editor type used to create the template.  **Values:** - &#x60;0&#x60; - PlainText - &#x60;1&#x60; - DragDrop - &#x60;2&#x60; - SendxEditor | [optional]
**created** | **\DateTime** | Template creation timestamp | [optional]
**updated** | **\DateTime** | Template last update timestamp | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
