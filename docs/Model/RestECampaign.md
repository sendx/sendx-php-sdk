# # RestECampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Campaign name for internal organization |
**subject** | **string** | Email subject line with personalization support.  **Features:** - Supports template variables ({{contact.firstName}}) - Emoji support for better engagement - A/B testing variations supported |
**sender** | **string** | Sender identifier.  **Note:** Sender must be verified before use |
**html_code** | **string** | HTML content of the email campaign |
**preview_text** | **string** | Preview text shown in email clients | [optional]
**plain_text** | **string** | Plain text version for better deliverability | [optional]
**schedule_type** | **int** | Campaign scheduling type.  **Values:** - &#x60;0&#x60; - Schedule for specific date/time - &#x60;1&#x60; - Send immediately | [optional]
**schedule_condition** | **string** | datetime for scheduled campaigns (required if scheduleType&#x3D;0) | [optional]
**time_condition** | **string** | Time condition for scheduled campaigns in HH:MM PM/AM format | [optional]
**timezone** | **string** | Timezone for scheduled campaigns (IANA format) | [optional]
**preferred_timezone** | **string** | Preferred timezone for smart send optimization (required for smartSend and sendInContactsTimezone) | [optional]
**preferred_time_condition** | **string** | Preferred time optimization setting (required for smartSend and sendInContactsTimezone) | [optional]
**send_in_contacts_timezone** | **bool** | Send at specified time in each contact&#39;s timezone | [optional]
**smart_send** | **bool** | Enable AI-powered send time optimization | [optional]
**included_segments** | **string[]** | Segment IDs to include | [optional]
**included_lists** | **string[]** | List IDs to include | [optional]
**included_tags** | **string[]** | Tag IDs to include | [optional]
**excluded_segments** | **string[]** | Segment IDs to exclude | [optional]
**excluded_lists** | **string[]** | List IDs to exclude | [optional]
**excluded_tags** | **string[]** | Tag IDs to exclude (prefix automatically stripped) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
