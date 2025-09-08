# SendX PHP SDK

## 🚀 Introduction

The SendX API is organized around REST principles. Our API has predictable resource-oriented URLs, accepts JSON-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs.

**Key Features:**
- 🔒 **Security**: Team-based authentication with optional member-level access
- 🎯 **Resource-Oriented**: RESTful design with clear resource boundaries
- 📊 **Rich Data Models**: Three-layer model system (Input/Output/Internal)
- 🔗 **Relationships**: Automatic prefix handling for resource relationships
- 📈 **Scalable**: Built for high-volume email marketing operations

## 🏗️ Architecture Overview

SendX uses a three-layer model architecture:

1. **Input Models** (`RestE*`): For API requests
2. **Output Models** (`RestR*`): For API responses with prefixed IDs
3. **Internal Models**: Core business logic (not exposed in API)

## 🔐 Security & Authentication

SendX uses API key authentication:

### Team API Key
```http
X-Team-ApiKey: YOUR_TEAM_API_KEY
```
- **Required for all requests**
- Team-level access to resources
- Available in SendX Settings → Team API Key

## 🆔 Encrypted ID System

SendX uses encrypted IDs for security and better developer experience:

- **Internal IDs**: Sequential integers (not exposed)
- **Encrypted IDs**: 22-character alphanumeric strings
- **Prefixed IDs**: Resource-type prefixes in API responses (`contact_<22-char-id>`)

### ID Format

**All resource IDs follow this pattern:**
```
<resource_prefix>_<22_character_alphanumeric_string>
```

**Example:**
```json
{
  "id": "contact_BnKjkbBBS500CoBCP0oChQ",
  "lists": ["list_OcuxJHdiAvujmwQVJfd3ss", "list_0tOFLp5RgV7s3LNiHrjGYs"],
  "tags": ["tag_UhsDkjL772Qbj5lWtT62VK", "tag_fL7t9lsnZ9swvx2HrtQ9wM"]
}
```

## 📚 Resource Prefixes

| Resource | Prefix | Example |
|----------|--------|---------|
| Contact | `contact_` | `contact_BnKjkbBBS500CoBCP0oChQ` |
| Campaign | `campaign_` | `campaign_LUE9BTxmksSmqHWbh96zsn` |
| List | `list_` | `list_OcuxJHdiAvujmwQVJfd3ss` |
| Tag | `tag_` | `tag_UhsDkjL772Qbj5lWtT62VK` |
| Sender | `sender_` | `sender_4vK3WFhMgvOwUNyaL4QxCD` |
| Template | `template_` | `template_f3lJvTEhSjKGVb5Lwc5SWS` |
| Custom Field | `field_` | `field_MnuqBAG2NPLm7PZMWbjQxt` |
| Webhook | `webhook_` | `webhook_9l154iiXlZoPo7vngmamee` |
| Post | `post_` | `post_XyZ123aBc456DeF789GhI` |
| Post Category | `post_category_` | `post_category_YzS1wOU20yw87UUHKxMzwn` |
| Post Tag | `post_tag_` | `post_tag_123XyZ456AbC` |
| Member | `member_` | `member_JkL012MnO345PqR678` |

## 🎯 Best Practices

### Error Handling
- **Always check status codes**: 2xx = success, 4xx = client error, 5xx = server error
- **Read error messages**: Descriptive messages help debug issues
- **Handle rate limits**: Respect API rate limits for optimal performance

### Data Validation
- **Email format**: Must be valid email addresses
- **Required fields**: Check documentation for mandatory fields
- **Field lengths**: Respect maximum length constraints

### Performance
- **Pagination**: Use offset/limit for large datasets
- **Batch operations**: Process multiple items when supported
- **Caching**: Cache responses when appropriate

## 🛠️ SDKs & Integration

Official SDKs available for:
- [Golang](https://github.com/sendx/sendx-go-sdk)
- [Python](https://github.com/sendx/sendx-python-sdk)
- [Ruby](https://github.com/sendx/sendx-ruby-sdk)
- [Java](https://github.com/sendx/sendx-java-sdk)
- [PHP](https://github.com/sendx/sendx-php-sdk)
- [JavaScript](https://github.com/sendx/sendx-javascript-sdk)

## 📞 Support

Need help? Contact us:
- 💬 **Website Chat**: Available on sendx.io
- 📧 **Email**: hello@sendx.io
- 📚 **Documentation**: Full guides at help.sendx.io

---

**API Endpoint:** `https://api.sendx.io/api/v1/rest`

For more information, please visit [https://sendx.io](https://sendx.io).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via Composer, use the following command on the command line:
```
 composer require sendx/sendx-php-sdk
```

Or, add the following to `composer.json`:

```json
{
  "require": {
    "sendx/sendx-php-sdk": "^2.0.0"
  }
}
```

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


// Configure API key authorization: TeamApiKey
$config = sendx\Configuration::getDefaultConfiguration()->setApiKey('X-Team-ApiKey', 'YOUR_API_KEY');

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
*CampaignApi* | [**createCampaign**](docs/Api/CampaignApi.md#createcampaign) | **POST** /campaign | Create campaign
*CampaignApi* | [**deleteCampaign**](docs/Api/CampaignApi.md#deletecampaign) | **DELETE** /campaign/{identifier} | Delete campaign
*CampaignApi* | [**getAllCampaigns**](docs/Api/CampaignApi.md#getallcampaigns) | **GET** /campaign | Get all campaigns
*CampaignApi* | [**getCampaign**](docs/Api/CampaignApi.md#getcampaign) | **GET** /campaign/{identifier} | Get campaign by ID
*ContactApi* | [**createContact**](docs/Api/ContactApi.md#createcontact) | **POST** /contact | Create a new contact
*ContactApi* | [**deleteContact**](docs/Api/ContactApi.md#deletecontact) | **DELETE** /contact/{identifier} | Delete contact
*ContactApi* | [**getAllContacts**](docs/Api/ContactApi.md#getallcontacts) | **GET** /contact | Get all contacts
*ContactApi* | [**getContact**](docs/Api/ContactApi.md#getcontact) | **GET** /contact/{identifier} | Get contact by ID
*ContactApi* | [**unsubscribeContact**](docs/Api/ContactApi.md#unsubscribecontact) | **POST** /contact/unsubscribe/{identifier} | Unsubscribe contact
*ContactApi* | [**updateContact**](docs/Api/ContactApi.md#updatecontact) | **PUT** /contact/{identifier} | Update contact
*CustomFieldApi* | [**createCustomField**](docs/Api/CustomFieldApi.md#createcustomfield) | **POST** /customfield | Create custom field
*CustomFieldApi* | [**deleteCustomField**](docs/Api/CustomFieldApi.md#deletecustomfield) | **DELETE** /customfield/{identifier} | Delete custom field
*CustomFieldApi* | [**getAllCustomFields**](docs/Api/CustomFieldApi.md#getallcustomfields) | **GET** /customfield | Get all custom fields
*CustomFieldApi* | [**getCustomField**](docs/Api/CustomFieldApi.md#getcustomfield) | **GET** /customfield/{identifier} | Get custom field by ID
*CustomFieldApi* | [**updateCustomField**](docs/Api/CustomFieldApi.md#updatecustomfield) | **PUT** /customfield/{identifier} | Update custom field
*EmailSendingApi* | [**sendEmail**](docs/Api/EmailSendingApi.md#sendemail) | **POST** /send/email | Send transactional email
*EmailSendingApi* | [**sendEmailWithTemplate**](docs/Api/EmailSendingApi.md#sendemailwithtemplate) | **POST** /send/template | Send email using template
*EventApi* | [**eventsCustomPostbackGet**](docs/Api/EventApi.md#eventscustompostbackget) | **GET** /events/custom/postback | Custom Event Postback URL
*EventApi* | [**eventsRevenuePostbackGet**](docs/Api/EventApi.md#eventsrevenuepostbackget) | **GET** /events/revenue/postback | Revenue Event Postback URL
*EventsApi* | [**trackCustomEvent**](docs/Api/EventsApi.md#trackcustomevent) | **POST** /events/custom | Track custom event
*EventsApi* | [**trackRevenueEvent**](docs/Api/EventsApi.md#trackrevenueevent) | **POST** /events/revenue | Track revenue event
*ListApi* | [**createList**](docs/Api/ListApi.md#createlist) | **POST** /list | Create list
*ListApi* | [**deleteList**](docs/Api/ListApi.md#deletelist) | **DELETE** /list/{identifier} | Delete list
*ListApi* | [**getAllLists**](docs/Api/ListApi.md#getalllists) | **GET** /list | Get all lists
*ListApi* | [**getList**](docs/Api/ListApi.md#getlist) | **GET** /list/{identifier} | Get list by ID
*ListApi* | [**updateList**](docs/Api/ListApi.md#updatelist) | **PUT** /list/{identifier} | Update list
*PostApi* | [**createPost**](docs/Api/PostApi.md#createpost) | **POST** /post | Create blog post
*PostApi* | [**deletePost**](docs/Api/PostApi.md#deletepost) | **DELETE** /post/{identifier} | Delete post
*PostApi* | [**getAllPosts**](docs/Api/PostApi.md#getallposts) | **GET** /post | Get all posts
*PostApi* | [**getPost**](docs/Api/PostApi.md#getpost) | **GET** /post/{identifier} | Get post by ID
*PostApi* | [**updatePost**](docs/Api/PostApi.md#updatepost) | **PUT** /post/{identifier} | Update post
*PostCategoryApi* | [**createPostCategory**](docs/Api/PostCategoryApi.md#createpostcategory) | **POST** /post/category | Create post category
*PostCategoryApi* | [**deletePostCategory**](docs/Api/PostCategoryApi.md#deletepostcategory) | **DELETE** /post/category/{identifier} | Delete post category
*PostCategoryApi* | [**getAllPostCategories**](docs/Api/PostCategoryApi.md#getallpostcategories) | **GET** /post/category | Get all post categories
*PostCategoryApi* | [**getPostCategory**](docs/Api/PostCategoryApi.md#getpostcategory) | **GET** /post/category/{identifier} | Get post category by ID
*PostCategoryApi* | [**updatePostCategory**](docs/Api/PostCategoryApi.md#updatepostcategory) | **PUT** /post/category/{identifier} | Update post category
*PostTagApi* | [**createPostTag**](docs/Api/PostTagApi.md#createposttag) | **POST** /post/tag | Create post tag
*PostTagApi* | [**deletePostTag**](docs/Api/PostTagApi.md#deleteposttag) | **DELETE** /post/tag/{identifier} | Delete post tag
*PostTagApi* | [**getAllPostTags**](docs/Api/PostTagApi.md#getallposttags) | **GET** /post/tag | Get all post tags
*PostTagApi* | [**getPostTag**](docs/Api/PostTagApi.md#getposttag) | **GET** /post/tag/{identifier} | Get post tag by ID
*PostTagApi* | [**updatePostTag**](docs/Api/PostTagApi.md#updateposttag) | **PUT** /post/tag/{identifier} | Update post tag
*ReportApi* | [**getCampaignReport**](docs/Api/ReportApi.md#getcampaignreport) | **GET** /report/campaign/{identifier} | Get campaign report
*SenderApi* | [**createSender**](docs/Api/SenderApi.md#createsender) | **POST** /sender | Create sender
*SenderApi* | [**getAllSenders**](docs/Api/SenderApi.md#getallsenders) | **GET** /sender | Get all senders
*TagApi* | [**createTag**](docs/Api/TagApi.md#createtag) | **POST** /tag | Create tag
*TagApi* | [**deleteTag**](docs/Api/TagApi.md#deletetag) | **DELETE** /tag/{identifier} | Delete tag
*TagApi* | [**getAllTags**](docs/Api/TagApi.md#getalltags) | **GET** /tag | Get all tags
*TagApi* | [**getTag**](docs/Api/TagApi.md#gettag) | **GET** /tag/{identifier} | Get tag by ID
*TagApi* | [**updateTag**](docs/Api/TagApi.md#updatetag) | **PUT** /tag/{identifier} | Update tag
*TeamMemberApi* | [**getAllTeamMembers**](docs/Api/TeamMemberApi.md#getallteammembers) | **GET** /team/member | Get all team members
*TeamMemberApi* | [**getTeamMember**](docs/Api/TeamMemberApi.md#getteammember) | **GET** /team/member/{identifier} | Get a team member by ID
*TemplateApi* | [**createEmailTemplate**](docs/Api/TemplateApi.md#createemailtemplate) | **POST** /template/email | Create email template
*TemplateApi* | [**deleteEmailTemplate**](docs/Api/TemplateApi.md#deleteemailtemplate) | **DELETE** /template/email/{identifier} | Delete template
*TemplateApi* | [**getAllEmailTemplates**](docs/Api/TemplateApi.md#getallemailtemplates) | **GET** /template/email | Get all templates
*TemplateApi* | [**getEmailTemplate**](docs/Api/TemplateApi.md#getemailtemplate) | **GET** /template/email/{identifier} | Get template by ID
*TemplateApi* | [**updateEmailTemplate**](docs/Api/TemplateApi.md#updateemailtemplate) | **PUT** /template/email/{identifier} | Update template
*TrackingApi* | [**identifyContact**](docs/Api/TrackingApi.md#identifycontact) | **POST** /contact/identify | Identify contact
*TrackingApi* | [**trackContact**](docs/Api/TrackingApi.md#trackcontact) | **POST** /contact/track | Track contact
*WebhookApi* | [**createWebhook**](docs/Api/WebhookApi.md#createwebhook) | **POST** /webhook | Create webhook
*WebhookApi* | [**deleteWebhook**](docs/Api/WebhookApi.md#deletewebhook) | **DELETE** /webhook/{identifier} | Delete webhook
*WebhookApi* | [**getAllWebhooks**](docs/Api/WebhookApi.md#getallwebhooks) | **GET** /webhook | Get all webhooks
*WebhookApi* | [**getWebhook**](docs/Api/WebhookApi.md#getwebhook) | **GET** /webhook/{identifier} | Get webhook by ID
*WebhookApi* | [**updateWebhook**](docs/Api/WebhookApi.md#updatewebhook) | **PUT** /webhook/{identifier} | Update webhook

## Models

- [CustomEventRequest](docs/Model/CustomEventRequest.md)
- [DeleteResponse](docs/Model/DeleteResponse.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [EventResponse](docs/Model/EventResponse.md)
- [EventsRevenuePostbackGet200Response](docs/Model/EventsRevenuePostbackGet200Response.md)
- [EventsRevenuePostbackGet400Response](docs/Model/EventsRevenuePostbackGet400Response.md)
- [EventsRevenuePostbackGet500Response](docs/Model/EventsRevenuePostbackGet500Response.md)
- [IdentifyRequest](docs/Model/IdentifyRequest.md)
- [IdentifyResponse](docs/Model/IdentifyResponse.md)
- [LinkStat](docs/Model/LinkStat.md)
- [MessageResponse](docs/Model/MessageResponse.md)
- [PostbackResponse](docs/Model/PostbackResponse.md)
- [RestECampaign](docs/Model/RestECampaign.md)
- [RestEContact](docs/Model/RestEContact.md)
- [RestECustomField](docs/Model/RestECustomField.md)
- [RestEList](docs/Model/RestEList.md)
- [RestEPost](docs/Model/RestEPost.md)
- [RestEPostCategory](docs/Model/RestEPostCategory.md)
- [RestEPostTag](docs/Model/RestEPostTag.md)
- [RestESender](docs/Model/RestESender.md)
- [RestETag](docs/Model/RestETag.md)
- [RestETemplate](docs/Model/RestETemplate.md)
- [RestEWebhook](docs/Model/RestEWebhook.md)
- [RestRCampaign](docs/Model/RestRCampaign.md)
- [RestRContact](docs/Model/RestRContact.md)
- [RestRCustomField](docs/Model/RestRCustomField.md)
- [RestRList](docs/Model/RestRList.md)
- [RestRMember](docs/Model/RestRMember.md)
- [RestRPost](docs/Model/RestRPost.md)
- [RestRPostCategory](docs/Model/RestRPostCategory.md)
- [RestRPostTag](docs/Model/RestRPostTag.md)
- [RestRSender](docs/Model/RestRSender.md)
- [RestRTag](docs/Model/RestRTag.md)
- [RestRTemplate](docs/Model/RestRTemplate.md)
- [RestRWebhook](docs/Model/RestRWebhook.md)
- [RestReportData](docs/Model/RestReportData.md)
- [RevenueEventRequest](docs/Model/RevenueEventRequest.md)
- [TemplateEmailMessage](docs/Model/TemplateEmailMessage.md)
- [TrackRequest](docs/Model/TrackRequest.md)
- [TrackResponse](docs/Model/TrackResponse.md)
- [WebhookObject](docs/Model/WebhookObject.md)
- [XAttachment](docs/Model/XAttachment.md)
- [XEmailMessage](docs/Model/XEmailMessage.md)
- [XEmailResponse](docs/Model/XEmailResponse.md)
- [XFrom](docs/Model/XFrom.md)
- [XReplyTo](docs/Model/XReplyTo.md)
- [XTo](docs/Model/XTo.md)

## Authorization

Authentication schemes defined for the API:
### TeamApiKey

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

hello@sendx.io
