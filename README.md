# SendX PHP SDK

## Introduction 

SendX is an email marketing product. It helps you convert website visitors to customers, send them promotional emails, engage with them using drip sequences and craft custom journeys using powerful but simple automations. 

The SendX API is organized around REST. Our API has predictable resource-oriented URLs, accepts form-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.
The SendX Rest API doesn’t support bulk updates. You can work on only one object per request. <br>



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/sendx/sendx-php-sdk.git"
    }
  ],
  "require": {
    "sendx/sendx-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/sendx/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyAuth
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sendx\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Team-ApiKey', 'Bearer');


$apiInstance = new sendx\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_request = new \sendx\model\ContactRequest(); // \sendx\model\ContactRequest
$contact_request->setEmail("john@doe.com"); // Required: Set email
$contact_request->setFirstName("John"); // Optional: Set first name
$contact_request->setLastName("Doe"); // Optional: Set last name
$contact_request->setCompany("SendX"); // Optional: Set company
$contact_request->setLastTrackedIp("192.168.1.1"); // Optional: Set last tracked IP
$contact_request->setCustomFields(["sendf13kn2k3kjm2d" => "Developer", "ckjsnck234nm2kn42" => "Engineering"]); // Optional: Set custom fields
$contact_request->setLists(["list_id_1", "list_id_2"]); // Optional: Subscribe to lists

try {
    $result = $apiInstance->createContact($contact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sendx.io/api/v1/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CampaignApi* | [**createCampaign**](docs/Api/CampaignApi.md#createcampaign) | **POST** /campaign | Create Campaign
*CampaignApi* | [**deleteCampaign**](docs/Api/CampaignApi.md#deletecampaign) | **DELETE** /campaign/{campaignId} | Delete Campaign
*CampaignApi* | [**editCampaign**](docs/Api/CampaignApi.md#editcampaign) | **PUT** /campaign/{campaignId} | Edit Campaign
*CampaignApi* | [**getAllCampaigns**](docs/Api/CampaignApi.md#getallcampaigns) | **GET** /campaign | Get All Campaigns
*CampaignApi* | [**getCampaignById**](docs/Api/CampaignApi.md#getcampaignbyid) | **GET** /campaign/{campaignId} | Get Campaign By Id
*ContactApi* | [**createContact**](docs/Api/ContactApi.md#createcontact) | **POST** /contact | Create a contact
*ContactApi* | [**deleteContact**](docs/Api/ContactApi.md#deletecontact) | **DELETE** /contact/{contactId} | Delete Contact
*ContactApi* | [**getAllContacts**](docs/Api/ContactApi.md#getallcontacts) | **GET** /contact | Get All Contacts
*ContactApi* | [**getContactById**](docs/Api/ContactApi.md#getcontactbyid) | **GET** /contact/{contactId} | Get Contact by ID
*ContactApi* | [**unsubscribeContact**](docs/Api/ContactApi.md#unsubscribecontact) | **POST** /contact/unsubscribe/{contactId} | Unsubscribe Contact
*ContactApi* | [**updateContact**](docs/Api/ContactApi.md#updatecontact) | **PUT** /contact/{contactId} | Update Contact
*ListApi* | [**createList**](docs/Api/ListApi.md#createlist) | **POST** /list | Create List
*ListApi* | [**deleteList**](docs/Api/ListApi.md#deletelist) | **DELETE** /list/{listId} | Delete List
*ListApi* | [**getAllLists**](docs/Api/ListApi.md#getalllists) | **GET** /list | Get All Lists
*ListApi* | [**getListById**](docs/Api/ListApi.md#getlistbyid) | **GET** /list/{listId} | Get List
*ListApi* | [**updateList**](docs/Api/ListApi.md#updatelist) | **PUT** /list/{listId} | Update List
*ReportsApi* | [**getCampaignReport**](docs/Api/ReportsApi.md#getcampaignreport) | **GET** /report/campaign/{campaignId} | Get CampaignReport Data
*SenderApi* | [**createSender**](docs/Api/SenderApi.md#createsender) | **POST** /sender | Create Sender
*SenderApi* | [**getAllSenders**](docs/Api/SenderApi.md#getallsenders) | **GET** /sender | Get All Senders
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /tag | Create a Tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /tag/{tagId} | Delete a Tag
*TagsApi* | [**getAllTags**](docs/Api/TagsApi.md#getalltags) | **GET** /tag | Get All Tags
*TagsApi* | [**getTagById**](docs/Api/TagsApi.md#gettagbyid) | **GET** /tag/{tagId} | Get a Tag by ID
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /tag/{tagId} | Update a Tag

## Models

- [Campaign](docs/Model/Campaign.md)
- [CampaignDashboardData](docs/Model/CampaignDashboardData.md)
- [CampaignRequest](docs/Model/CampaignRequest.md)
- [Contact](docs/Model/Contact.md)
- [ContactRequest](docs/Model/ContactRequest.md)
- [CreateResponse](docs/Model/CreateResponse.md)
- [DashboardStats](docs/Model/DashboardStats.md)
- [DeleteCampaign200Response](docs/Model/DeleteCampaign200Response.md)
- [DeleteRequest](docs/Model/DeleteRequest.md)
- [DeleteResponse](docs/Model/DeleteResponse.md)
- [LastSentCampaignStat](docs/Model/LastSentCampaignStat.md)
- [ListModel](docs/Model/ListModel.md)
- [ListRequest](docs/Model/ListRequest.md)
- [ReportData](docs/Model/ReportData.md)
- [Response](docs/Model/Response.md)
- [Sender](docs/Model/Sender.md)
- [SenderRequest](docs/Model/SenderRequest.md)
- [SenderResponse](docs/Model/SenderResponse.md)
- [Tag](docs/Model/Tag.md)
- [TagRequest](docs/Model/TagRequest.md)

## Authorization

Authentication schemes defined for the API:
### apiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Team-ApiKey
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@sendx.io

