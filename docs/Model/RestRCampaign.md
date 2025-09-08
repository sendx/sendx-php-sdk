# # RestRCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Encrypted ID of the campaign | [optional]
**name** | **string** | Internal campaign name |
**subject** | **string** | Email subject line |
**preheader** | **string** | Email preview text | [optional]
**sender** | **string** | Sender id |
**html_content** | **string** | HTML email content | [optional]
**text_content** | **string** | Plain text email content | [optional]
**schedule_time** | **\DateTime** | When to send (if scheduled) |
**schedule_type** | **int** | Campaign scheduling type.  **Values:** - &#x60;0&#x60; - Schedule later - &#x60;1&#x60; - Send Now | [default to 0]
**schedule_condition** | **string** | datetime for scheduled campaigns (required if scheduleType&#x3D;1) |
**time_condition** | **string** | Time-related condition for the campaign | [optional]
**timezone** | **string** | Campaign timezone | [optional]
**smart_send** | **bool** | Timezone for the scheduled send | [optional]
**send_in_contacts_timezone** | **bool** | Send at specified time in each contact&#39;s timezone | [optional]
**preferred_time_condition** | **string** | Preferred time condition, in case of smartSend and sendInContactTimeZone | [optional]
**preferred_timezone** | **string** | Preferred timezone for smart send optimization | [optional]
**strategy** | **string** | Campaign delivery strategy | [optional]
**included_segments** | **string[]** | Included segment IDs | [optional]
**included_lists** | **string[]** | Included list IDs with prefix |
**included_tags** | **string[]** | Included tag IDs with prefix | [optional]
**excluded_segments** | **string[]** | Excluded segment IDs | [optional]
**excluded_lists** | **string[]** | Excluded list IDs with prefix |
**excluded_tags** | **string[]** | Excluded tag IDs with prefix | [optional]
**created** | **\DateTime** |  | [optional]
**updated** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
