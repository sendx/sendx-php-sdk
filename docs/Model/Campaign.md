# # Campaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Encrypted ID of the campaign | [optional]
**name** | **string** | Name of the campaign | [optional]
**track_reply** | **bool** | Indicates if replies to the campaign should be tracked | [optional]
**subject** | **string** | Subject of the campaign | [optional]
**status** | **int** | Campaign status: 0 (Draft), 1 (Scheduled), 2 (Sending), 3 (Sent), 4 (Quarantined) | [optional]
**schedule_type** | **int** | Schedule type: 0 (Schedule later), 1 (Send Now), 2 (Trigger via automation), 3 (Recurring) | [optional]
**schedule_condition** | **string** | Condition for scheduling the campaign, date at which the campaign should be sent | [optional]
**time_condition** | **string** | Time-related condition for the campaign | [optional]
**timezone** | **string** | Timezone for the scheduled send | [optional]
**preferred_time_condition** | **string** | Preferred time condition for the campaign | [optional]
**preferred_timezone** | **string** | Preferred timezone for sending the campaign | [optional]
**strategy** | **string** | Strategy for the campaign | [optional]
**send_in_contacts_timezone** | **bool** | Indicates if the campaign should be sent in the recipient&#39;s timezone | [optional]
**smart_send** | **bool** | Indicates if smart sending should be used | [optional]
**is_archived** | **bool** | Indicates if the campaign is archived | [optional]
**sender** | **string** | Information about the sender of the campaign | [optional]
**campaign_screenshot_url** | **string** | URL of the campaign&#39;s screenshot | [optional]
**included_segments** | **string[]** | Segments to be included in the campaign | [optional]
**included_lists** | **string[]** | Lists to be included in the campaign | [optional]
**included_tags** | **string[]** | Tags to be included in the campaign | [optional]
**excluded_segments** | **string[]** | Segments to be excluded from the campaign | [optional]
**excluded_lists** | **string[]** | Lists to be excluded from the campaign | [optional]
**excluded_tags** | **string[]** | Tags to be excluded from the campaign | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
