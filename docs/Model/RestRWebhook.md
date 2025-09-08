# # RestRWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**url** | **string** | Webhook endpoint URL | [optional]
**enabled** | **bool** | Whether webhook is enabled | [optional] [default to true]
**unsubscribed** | **bool** | Trigger webhook when a contact unsubscribes | [optional] [default to false]
**dropped** | **bool** | Trigger webhook when an email is dropped | [optional] [default to false]
**bounced** | **bool** | Trigger webhook when an email bounces | [optional] [default to false]
**marked_spam** | **bool** | Trigger webhook when an email is marked as spam | [optional] [default to false]
**clicked** | **bool** | Trigger webhook when a link in the email is clicked | [optional] [default to false]
**opened** | **bool** | Trigger webhook when an email is opened | [optional] [default to false]
**contact_created** | **bool** | Trigger webhook when a new contact is created | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
