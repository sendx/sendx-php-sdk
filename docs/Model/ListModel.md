# # ListModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Encrypted ID of the list | [optional]
**name** | **string** | Name of the list | [optional]
**type** | **int** | Type of the list representing opt-in methods (1: Single Opt-In, 2: Double Opt-In) | [optional]
**send_thank_you_mail** | **bool** | Indicates if a thank-you email should be sent | [optional]
**thank_you_from_name** | **string** | Name displayed as the sender in the thank-you email | [optional]
**thank_you_from_email** | **string** | Email address from which the thank-you email is sent | [optional]
**thank_you_mail_subject** | **string** | Subject line of the thank-you email | [optional]
**thank_you_mail_message** | **string** | Plain text message body of the thank-you email | [optional]
**thank_you_sender** | **string** | Details of the sender of the thank-you email | [optional]
**confirm_from_name** | **string** | Name displayed as the sender in the confirmation email | [optional]
**confirm_from_email** | **string** | Email address from which the confirmation email is sent | [optional]
**confirm_mail_subject** | **string** | Subject line of the confirmation email | [optional]
**confirm_mail_message** | **string** | Plain text message body of the confirmation email | [optional]
**confirm_success_page** | **string** | URL of the success page after confirmation | [optional]
**created** | **\DateTime** | Date and time when the list was created | [optional]
**updated** | **\DateTime** | Date and time when the list was last updated | [optional]
**confirm_sender** | **string** | Details of the sender of the confirmation email | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
