# # Contact

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier for the contact. | [optional]
**first_name** | **string** | The first name of the contact. | [optional]
**last_name** | **string** | The last name of the contact. | [optional]
**email** | **string** | The email address of the contact. | [optional]
**company** | **string** | The company of the contact. | [optional]
**custom_fields** | **array<string,string>** | Custom fields and their values | [optional]
**unsubscribed** | **bool** | Indicates if the contact has unsubscribed from emails. | [optional]
**bounced** | **bool** | Indicates if the contact&#39;s email has bounced. | [optional]
**spam** | **bool** | Indicates if the contact marked the email as spam. | [optional]
**created** | **\DateTime** | The date and time when the contact was created. | [optional]
**updated** | **\DateTime** | The date and time when the contact was last updated. | [optional]
**blocked** | **bool** | Indicates if the contact is blocked from receiving emails. | [optional]
**dropped** | **bool** | Indicates if emails to this contact were dropped. | [optional]
**ltv** | **int** | Lifetime value (LTV) of the contact in currency units. | [optional]
**contact_source** | **int** | The source from which the contact was added. Possible values: | [optional]
**last_tracked_ip** | **string** | The last known IP address tracked for the contact. | [optional]
**lists** | **string[]** | A list of &#x60;lists&#x60; ids the contact is subscribed to. | [optional]
**tags** | **string[]** | &#x60;Tag&#x60; ids associated with the contact for segmentation or categorization. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
