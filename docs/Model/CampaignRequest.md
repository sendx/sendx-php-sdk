# # CampaignRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the campaign. | [optional]
**html_code** | **string** | The HTML code of the campaign. | [optional]
**subject** | **string** | The subject of the campaign. | [optional]
**sender** | **string** | Sender unique identifier. | [optional]
**preview_text** | **string** | The preview text shown in email clients. | [optional]
**schedule_type** | **int** | The type of scheduling for the campaign - 0: Send Now - 1: Send Later | [optional]
**schedule_condition** | **string** | The condition for scheduling the campaign. | [optional]
**time_condition** | **string** | The specific time to send the campaign. | [optional]
**timezone** | **string** | The timezone for the campaign scheduling. | [optional]
**preferred_timezone** | **string** | Preferred timezone for scheduling. | [optional]
**preferred_time_condition** | **string** | Specific time preference for sending the campaign (mandatory for sendInContactsTimezone and smartSend). | [optional]
**send_in_contacts_timezone** | **bool** | Whether to send emails in each contact&#39;s timezone. | [optional]
**smart_send** | **bool** | Whether to enable smart send features (e.g., optimizing send time). | [optional]
**included_segments** | **string[]** | List of segment IDs to include. | [optional]
**included_lists** | **string[]** | List of list IDs to include. | [optional]
**included_tags** | **string[]** | List of tag IDs to include. | [optional]
**excluded_segments** | **string[]** | List of segment IDs to exclude. | [optional]
**excluded_lists** | **string[]** | List of list IDs to exclude. | [optional]
**excluded_tags** | **string[]** | List of tag IDs to exclude. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
