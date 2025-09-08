<?php
/**
 * WebhookRequest
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  sendx
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SendX REST API
 *
 * # Introduction The SendX API is organized around REST. Our API has predictable resource-oriented URLs, accepts form-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs. The SendX Rest API doesn’t support bulk updates. You can work on only one object per request. <br> Our API endpoint looks like this:<br>   ``` https://api.sendx.io/api/v1/rest ```   [<img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\">](https://god.gw.postman.com/run-collection/33476323-44b198b0-5219-4619-a01f-cfc24d573885?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D33476323-44b198b0-5219-4619-a01f-cfc24d573885%26entityType%3Dcollection%26workspaceId%3D6b1e4f65-96a9-4136-9512-6266c852517e)         ## Authentication The SendX API uses API key to authenticate requests.<br> You can checkout your API key from your settings page https://app.sendx.io/setting under the section `Team Api Key`. SendX expects the API key to be included in all API requests to the server in a header that looks like the following:   ``` X-Team-ApiKey: AHEZEP8192SEGH ```   Your API keys carry many privileges, so be sure to keep them secure! Do not share your secret API keys in publicly accessible areas such as GitHub, client-side code, and so forth. All API requests must be made over HTTPS. Calls made over plain HTTP will fail. API requests without authentication will also fail. ## Errors SendX uses conventional HTTP response codes to indicate the success or failure of an API request. In general: Codes in the 2xx range indicate success. Codes in the 4xx range indicate an error that failed given the information provided (e.g., a required parameter was omitted, a failed resource search, etc.). Codes in the 5xx range indicate an error with SendX’s servers (drop us a mail at support@sendx.io in case that ever happens). Here's some error codes and what they mean: <table>   <tr>     <th>Status Code</th>     <th>Reason</th>     <th>Description</th>   </tr>   <tr>     <td>400</td>     <td>Bad Request</td>     <td>The request could not be understood by the server due to malformed syntax.</td>   </tr>   <tr>     <td>401</td>     <td>Unauthorized</td>     <td>The request requires user authentication, e.g., due to missing or invalid authentication token.</td>   </tr>   <tr>     <td>403</td>     <td>Forbidden</td>     <td>The request is understood, but it has been refused or access is not allowed.</td>   </tr>   <tr>     <td>404</td>     <td>Not Found</td>     <td>The requested resource could not be found.</td>   </tr>   <tr>     <td>406</td>     <td>Not Acceptable</td>     <td>The requested format is not supported by the requested method.</td>   </tr>   <tr>     <td>422</td>     <td>Unprocessable Entity</td>     <td>The server understood the request, but the request is semantically erroneous (e.g., a request may contain a malformed email address).</td>   </tr>   <tr>     <td>500</td>     <td>Internal Server Error</td>     <td>The server encountered an unexpected condition which prevented it from fulfilling the request.</td>   </tr> </table> <br>  ## API SDKs We have native SendX SDKs in the following programming languages. You can integrate with them or create your own SDK with our API specification. In case you need any assistance with respect to API then do reachout to our team from website chat or email us at hello@sendx.io <br> For checking language specific Clients:  -  [Golang](https://github.com/sendx/sendx-go-sdk) -  [Python](https://github.com/sendx/sendx-python-sdk) -  [Ruby](https://github.com/sendx/sendx-ruby-sdk) -  [Java](https://github.com/sendx/sendx-java-sdk)  -  [PHP](https://github.com/sendx/sendx-php-sdk) -  [JavaScript](https://github.com/sendx/sendx-javascript-sdk)   We also have a [Javascript API](http://help.sendx.io/knowledge_base/topics/javascript-api-1) for client side integrations.  --- ## Schemas The SendX API has resources related to all the major functionalities of SendX. ### Contact The Contact is a fundamental resource within SendX. It represents your customers, leads, or any person you wish to communicate with through your marketing campaigns. Once a contact is added to SendX, you can send personalized marketing campaigns, manage their details, and track their interaction with your marketing activities.  SendX provides several key attributes associated with each contact. Additionally, custom fields allow you to add any extra information that may not be covered by the default fields. You can also categorize contacts using tags, and group them into lists for easier targeting in specific campaigns. Below is a detailed overview of the Contact schema. <table>   <tr>     <th>Field</th>     <th>Type</th>     <th>Description</th>     <th>Example</th>   </tr>   <tr>     <td>Id</td>     <td>string</td>     <td>Identifier for the contact. This field is how you can reference the contact in your application.</td>     <td>ACNEFOF123R</td>   </tr>   <tr>     <td>FirstName</td>     <td>string</td>     <td>The first name of the contact.</td>     <td>Linus</td>   </tr>   <tr>     <td>LastName</td>     <td>string</td>     <td>The last name of the contact.</td>     <td>Torvalds</td>   </tr>   <tr>     <td>Email</td>     <td>string (email)</td>     <td>The email address of the contact. This is a mandatory field for the contact, no SendX contact can be created without an email address.</td>     <td>linus@example.com</td>   </tr>   <tr>     <td>Company</td>     <td>string</td>     <td>The company of the contact.</td>     <td>Linux Foundation.</td>   </tr>   <tr>     <td>CustomFields</td>     <td>object</td>     <td>Custom fields and their values. This can be used to store any additional information about the contact. In SendX, this is shown as a map of custom field Id to string. Users can create their own custom fields and associate values for them with the contact.</td>     <td>``` { \"124\": \"Developer/Creator\", \"223\": \"28 December 1969\" }```</td>   </tr>   <tr>     <td>Unsubscribed</td>     <td>boolean</td>     <td>Indicates if the contact has unsubscribed from emails.</td>     <td>false</td>   </tr>   <tr>     <td>Bounced</td>     <td>boolean</td>     <td>Indicates if the contact's email has bounced.</td>     <td>false</td>   </tr>   <tr>     <td>Spam</td>     <td>boolean</td>     <td>Indicates if the contact marked the email as spam.</td>     <td>false</td>   </tr>   <tr>     <td>Created</td>     <td>string (date-time)</td>     <td>The date and time when the contact was created. This is sent in Unix time format.</td>     <td>2024-10-08T09:30:00Z</td>   </tr>   <tr>     <td>Updated</td>     <td>string (date-time)</td>     <td>The date and time when the contact was last updated. This is sent in Unix time format.</td>     <td>2024-10-08T12:45:00Z</td>   </tr>   <tr>     <td>Blocked</td>     <td>boolean</td>     <td>Indicates if the contact is blocked from receiving emails.</td>     <td>false</td>   </tr>   <tr>     <td>Dropped</td>     <td>boolean</td>     <td>Indicates if emails to this contact were dropped.</td>     <td>false</td>   </tr>   <tr>     <td>LTV</td>     <td>integer</td>     <td>Lifetime value (LTV) of the contact in currency units.</td>     <td>5000</td>   </tr>   <tr>     <td>ContactSource</td>     <td>integer</td>     <td>The source from which the contact was added. Possible values include: <br>       <ol>           <li> ContactSourceUnknown</li>           <li> ContactSourceFileImport</li>           <li> ContactSourceJSAPI</li>           <li> ContactSourceRESTAPI</li>           <li> ContactSourceManualAddition</li>           <li> ContactSourcePopup</li>           <li> ContactSourceForm</li>           <li> ContactSourceLandingPage</li>           <li> ContactSourceInstaPage</li>           <li> ContactSourceSamCart</li>           <li> ContactSourceWooCommerce</li>           <li> ContactSourceStripe</li>           <li> ContactSourcePaypal</li>           <li> ContactSourceIntercom</li>           <li> ContactSourceShopify</li>           <li> ContactSourceWebPush</li>           <li> ContactSourceConvertBox</li>           <li> ContactSourceClickFunnel</li>           <li> ContactSourceTeachable</li>           <li> ContactSourceWoorise</li>       </ol>     </td>     <td>4</td>   </tr>   <tr>     <td>LastTrackedIp</td>     <td>string</td>     <td>The last known IP address tracked for the contact.</td>     <td>192.168.0.1</td>   </tr>   <tr>     <td>Lists</td>     <td>[string]</td>     <td>Array of List ids associated with the contact.</td>     <td>[\"sendxlist1\",\"sendxlist2\"]</td>   </tr>   <tr>     <td>Tags</td>     <td>[string]</td>     <td>Array of Tag ids associated with the contact.</td>     <td>[\"sendxtag1\",\"sendxtag2\"]</td>   </tr> </table>   SendX REST API allows users to perform operations on any contact based on it's identifier. Identifier can be either: - Contact ID of the contact - Email of the contact ### List A List in SendX is a collection of contacts, similar to organizing a guest list for an event. Depending on how the list is configured, there are two types of opt-in mechanisms:    - Single Opt-in: In this type, contacts are directly added to the list once they provide their email address, just like guests who confirm their attendance without any extra steps.   - Double Opt-in: In this type, contacts are sent a confirmation email and must verify their subscription before being fully added to the list. This is like sending a \"Save the Date\" invitation, where the guest needs to RSVP before they’re officially included.    These opt-in mechanisms help ensure that your contacts are either instantly subscribed (single opt-in) or confirmed (double opt-in) based on their preference. Lists allow you to group your contacts for targeted and personalized marketing campaigns.   <table>   <thead>     <tr>       <th>Field</th>       <th>Type</th>       <th>Description</th>       <th>Example</th>     </tr>   </thead>   <tbody>     <tr>       <td>Id</td>       <td>string</td>       <td>Encrypted identifier for the list.</td>       <td>a1b2c3d4e5</td>     </tr>     <tr>       <td>Name</td>       <td>string</td>       <td>Name of the list.</td>       <td>Customer List</td>     </tr>     <tr>       <td>Type</td>       <td>integer</td>       <td>Type of the list, which can have two values:<br/>0: SingleOptIn <br/>1: DoubleOptIn</td>       <td>0</td>     </tr>     <tr>       <td>SendThankYouMail</td>       <td>bool</td>       <td>Indicates if a thank-you email should be sent after subscription.</td>       <td>true</td>     </tr>     <tr>       <td>ThankYouFromName</td>       <td>string</td>       <td>The name shown as the sender for the thank-you email.</td>       <td>Support Team</td>     </tr>     <tr>       <td>ThankYouFromEmail</td>       <td>string</td>       <td>The email address from which the thank-you email is sent.</td>       <td>support@sendx.com</td>     </tr>     <tr>       <td>ThankYouMailSubject</td>       <td>string</td>       <td>Subject line of the thank-you email.</td>       <td>Welcome to our newsletter</td>     </tr>     <tr>       <td>ThankYouMailMessage</td>       <td>string</td>       <td>Content of the thank-you email.</td>       <td>Thank you for subscribing!</td>     </tr>     <tr>       <td>ThankYouSender</td>       <td>string</td>       <td>Sender id for the thank-you email, if applicable.</td>       <td>sender_123</td>     </tr>     <tr>       <td>ConfirmFromName</td>       <td>string</td>       <td>The name shown as the sender for the confirmation email.</td>       <td>Support Team</td>     </tr>     <tr>       <td>ConfirmFromEmail</td>       <td>string</td>       <td>The email address from which the confirmation email is sent.</td>       <td>confirm@company.com</td>     </tr>     <tr>       <td>ConfirmMailSubject</td>       <td>string</td>       <td>Subject line of the confirmation email.</td>       <td>Please confirm your subscription</td>     </tr>     <tr>       <td>ConfirmMailMessage</td>       <td>string</td>       <td>Content of the confirmation email.</td>       <td>Click here to confirm!</td>     </tr>     <tr>       <td>ConfirmSuccessPage</td>       <td>string</td>       <td>URL of the success page shown after email confirmation.</td>       <td>https://company.com/success</td>     </tr>     <tr>       <td>Created</td>       <td>string (Date-Time)</td>       <td>Timestamp when the list was created.</td>       <td>2024-10-08T09:30:00Z</td>     </tr>     <tr>       <td>Updated</td>       <td>string (Date-Time)</td>       <td>Timestamp when the list was last updated.</td>       <td>2024-10-08T12:45:00Z</td>     </tr>     <tr>       <td>ConfirmSender</td>       <td>string</td>       <td>Sender id for the confirmation email, if applicable.</td>       <td>sender_313</td>     </tr>     <tr>       <td>IsQuarantined</td>       <td>bool</td>       <td>Indicates if the list is quarantined. Contact support@sendx.io if you encounter this.</td>       <td>false</td>     </tr>   </tbody> </table>  ### Tag A Tag in SendX is a versatile tool that allows you to categorize and organize your contacts based on their behaviors, interests, or other attributes. By adding tags to contacts, you can create powerful filters and segments to target specific audiences in your campaigns.  Tags are essential for tracking and understanding your contacts’ journey through your application or business funnel. For instance, if a contact views a product, you can assign a tag like Product X Viewed. Later, you can filter all contacts with this tag to send them personalized follow-up emails or promotional offers. This ability to categorize contacts ensures that your marketing efforts are precise and relevant.  In the world of email marketing, tags are not just a tool—they are a key utility for creating personalized experiences, improving open rates, and driving higher engagement. By leveraging tags effectively, you can ensure that your contacts receive the right message at the right time.  <table>   <thead>     <tr>       <th>Field</th>       <th>Type</th>       <th>Description</th>       <th>Example</th>     </tr>   </thead>   <tbody>     <tr>       <td>Id</td>       <td>string</td>       <td>Identifier for the tag.</td>       <td>a1b2c3d4e5</td>     </tr>     <tr>       <td>Name</td>       <td>string</td>       <td>Name of the tag.</td>       <td>VIP Customers</td>     </tr>     <tr>       <td>Created</td>       <td>string (Date-Time)</td>       <td>Timestamp when the tag was created.</td>       <td>2024-10-08T09:30:00Z</td>     </tr>     <tr>       <td>Updated</td>       <td>string (Date-Time)</td>       <td>Timestamp when the tag was last updated.</td>       <td>2024-10-08T12:45:00Z</td>     </tr>   </tbody> </table>  ### Campaigns Campaign is one of the key resources in SendX as an email marketing platform. A campaign allows you to send targeted email messages to specific segments of your audience, helping to engage subscribers, promote products, or share important updates. Why is a Campaign Resource Important? Email campaigns are the cornerstone of email marketing strategies. They help you: - **Engage Customers:** Send relevant content that resonates with the audience.   - **Automate Communication:** Schedule and automate emails to reach the right people at the right time.  - **Track Performance:** Measure engagement, opens, clicks, and conversions to optimize future campaigns.  <br> For example you might create a campaign called \"Holiday Discounts\" where you target customers who have shown interest in your products over the last three months. The campaign could send personalized emails with special discounts for the holiday season, encouraging recipients to take action.  The Campaign resource in SendX provides you with a powerful toolset to not only communicate with your audience but also to enhance their experience through targeted, automated, and personalized email strategies.  <table>   <thead>     <tr>       <th>Property</th>       <th>Type</th>       <th>Description</th>       <th>Example</th>     </tr>   </thead>   <tbody>     <tr>       <td>Id</td>       <td>string</td>       <td> ID of the campaign</td>       <td>campaign123xyz</td>     </tr>     <tr>       <td>name</td>       <td>string</td>       <td>Name of the campaign</td>       <td>New Year Promotion</td>     </tr>     <tr>       <td>trackReply</td>       <td>boolean</td>       <td>Indicates if replies to the campaign should be tracked</td>       <td>false</td>     </tr>     <tr>       <td>status</td>       <td>integer</td>       <td>Current status of the campaign which can have these possible values: <br>0: Draft <br>1: Scheduled <br>2: Sending <br>3: Sent <br>4: Quarantined</td>       <td>Scheduled</td>     </tr>     <tr>       <td>scheduleType</td>       <td>integer</td>       <td>Type of schedule for the campaign <br>0: Schedule later <br>1: Send Now <br>2. Trigger via automation <br>3. Recurring </td>       <td>0</td>     </tr>     <tr>       <td>scheduleCondition</td>       <td>string</td>       <td>Condition for scheduling the campaign, in case of Send Now this field remains empty.In case of Schedule later, this field denotes the date at which the campaign will be sent in YYYY-MM-DD format</td>       <td>2024-12-30</td>     </tr>     <tr>       <td>timeCondition</td>       <td>string</td>       <td>Condition for scheduling the campaign, in case of Send Now this field remains empty.In case of Schedule later, this field denotes the time at which the campaign will be sent in HH:MM AM/PM format</td>       <td>9:00 AM</td>     </tr>     <tr>       <td>timezone</td>       <td>string</td>       <td>Timezone for the scheduled send. See `allowed timezones` for the list of allowed timezones</td>       <td>America/New_York</td>     </tr>     <tr>       <td>preferredTimeCondition</td>       <td>string</td>       <td>Preferred time condition for the campaign</td>       <td>Send during work hours</td>     </tr>     <tr>       <td>preferredTimezone</td>       <td>string</td>       <td>Preferred timezone for sending the campaign</td>       <td>America/Los_Angeles</td>     </tr>     <tr>       <td>strategy</td>       <td>string</td>       <td>Strategy for the campaign</td>       <td>Batch sending</td>     </tr>     <tr>       <td>sendInContactsTimezone</td>       <td>boolean</td>       <td>Indicates if the campaign should be sent in the recipient's timezone</td>       <td>true</td>     </tr>     <tr>       <td>smartSend</td>       <td>boolean</td>       <td>Indicates if smart sending should be used</td>       <td>false</td>     </tr>     <tr>       <td>isArchived</td>       <td>boolean</td>       <td>Indicates if the campaign is archived</td>       <td>false</td>     </tr>     <tr>       <td>sender</td>       <td>string</td>       <td>Unique identifier of the sender of the campaign</td>       <td>sender_123</td>     </tr>     <tr>       <td>campaignScreenshotUrl</td>       <td>string</td>       <td>URL of the campaign's screenshot</td>       <td>https://example.com/screenshot.png</td>     </tr>     <tr>         <td>includedSegments </td>         <td>array</td>         <td>List of segment IDs that are included in the campaign as receivers</td>         <td>[\"segment_123\", \"segment_456\"]</td>     </tr>     <tr>         <td>includedTags </td>         <td>array</td>         <td>List of tag IDs that are included in the campaign as receivers</td>         <td>[\"tag_123\", \"tag_456\"]</td>     </tr>     <tr>         <td>includedLists </td>         <td>array</td>         <td>List of list IDs that are included in the campaign as receivers</td>         <td>[\"list_123\", \"list_456\"]</td>     </tr>     <tr>         <td>excludedSegments </td>         <td>array</td>         <td>List of segment IDs that are excluded from the campaign as receivers</td>         <td>[\"segment_123\", \"segment_456\"]</td>     </tr>     <tr>         <td>excludedTags </td>         <td>array</td>         <td>List of tag IDs that are excluded from the campaign as receivers</td>         <td>[\"tag_123\", \"tag_456\"]</td>     </tr>     <tr>         <td>excludedLists </td>         <td>array</td>         <td>List of list IDs that are excluded from the campaign as receivers</td>         <td>[\"list_123\", \"list_456\"]</td>     </tr>   </tbody> </table>  Note: Here's a list of all the allowed timezones for the `timezone` field: # JavaScript API SendX Javascript API enables you to add contacts, associate tags with them and update custom fields. This guide details various functions associated with our Javascript API. - Installing Javascript Snippet - Sending API Requests - API Methods ## Installing Javascript Snippet To use SendX Javascript API you need to have SendX snippet installed on your website. Each SendX team account has a unique snippet that can be found under [Settings > Site Code](https://app.sendx.io/setting) Snippet  SendX Javascript snippet gets loaded asynchronously and hence it won't affect page load time of your website.   ## Sending API Requests All requests follow the same pattern. <br>   ```javascript   _scq.push([\"methodName\", { key: \"value\", ... }]); ```  API requests are executed asynchronously so you can safely place them anywhere on the page. The conventions are similar to what **google analytics** API follows. ## API Methods SendX Javascript API has two methods: - Identify - Track ## Identify API Method Identify API Method is used to attach data to a visitor. If a contact is not yet created then we will create the contact. In case contact already exists then we update it. ### Example Request: ```javascript   _scq.push([\"identify\", { email: \"john.doe@gmail.com\",   firstName: \"John\", lastName: \"Doe\", birthday: \"1989-03-03\", customFields: { \"Designation\": \"Software Engineer\", \"Age\": \"27\", \"Experience\": \"5\"},   tags: [\"Developer\", \"API Team\"],   }]); ``` Note that tags are an array of strings. In case they don't exist previously then API will create them and associate them with the contact.  Similarly if a custom field doesn't exist then it is first created and then associated with the contact along-with the corresponding value. In case custom field exists already then we simply update the value of it for the aforementioned contact.  Custom Fields are associated with data types and which be created and edited inside the app. If a custom field is not present inside the app and an API call is made containing it, a custom field with type 'string' is created and the value set. For custom fields with data type 'number', values can be added to or subtracted from existing values. This can be done by using \"++\" or \"--\" operator before the number(e.g. \"customField_name\": \"++34\" would increase the value of existing \"customField_name\" in SendX for the contact. If it doesn't already exist, the value '- 34' would be inserted for it).  We don't delete any of the properties based on identify call. What this means is that if for the same contact you did two API calls like: ### API Call A ```javascript   _scq.push([\"identify\", { email: \"john.doe@gmail.com\", firstName: \"John\", birthday: \"1989-03-03\", customFields: { \"Designation\": \"Software Engineer\"},   tags: [\"Developer\"],   success: function(){console.log(\"identify call successful\");},   failure: function(){console.log(\"identify failed\");},   }]); ``` ### API Call B ```javascript   _scq.push([\"identify\", {   email: \"john.doe@gmail.com\",   customFields: { \"Age\": \"29\"},   tags: [\"API Team\"],   success: function(){console.log(\"identify call successful\");},   failure: function(){console.log(\"identify failed\");},   }]); ``` The the final contact will have firstName as John, birthday as 1989-03-03 present. Also both tags Developer and API Team shall be present along with custom fields Designation and Age.  Properties:  - firstName: type string - lastName: type string - email: type string - newEmail: type string - company: type string - birthday: type string with format YYYY-MM-DD eg: 2016-11-21 - customFields: type map[string]string - tags: type array of string - success: Optional. Callback function which is executed on successful completion of request. - failure: Optional. Callback function which is executed when request fails or timeouts.  In case email of an already existing contact needs to be updated then specify current email under email property and updated email under newEmail property. ### Response ```json   { \"status\": \"200\", \"message\": \"OK\", \"data\":      { \"encryptedTeamId\": \"CLdh9Ig5GLIN1u8gTRvoja\", \"encryptedId\": \"c9QF63nrBenCaAXe660byz\",     \"tags\": [ \"API Team\", \"Tech\" ], \"firstName\": \"John\", \"lastName\": \"Doe\", \"email\": \"john.doe@gmail.com\",     \"company\": \"\", \"birthday\": \"1989-03-03\",     \"customFields\": { \"Age\": \"29\", \"Designation\": \"Software Engineer\" } } } ``` ## Track API Method Track API Method is used to track a contact. You can add or remove tags from a contact using this API.  Properties:  - addTags: Array of tags to be added to a contacts - removeTags: Array of tags to be removed from a contact - success: Optional. Callback function which is executed on successful completion of request. - failure: Optional. Callback function which is executed when request fails or timeouts. You can have automation rules based on tag addition as well as tag removal and they will get executed. For eg: - On user registration tag start on-boarding drip for him / her. - Account Upgrade tag start add user to paid user list and start account expansion drip. - On removal of trial user tag start up-sell trial completed users drip.  ### Example Request: ```javascript   _scq.push([\"track\", {   \"addTags\": [\"blogger\", \"female\"],   success: function(){console.log(\"track call successful\");},   failure: function(){console.log(\"track call failed\");},   }]);    _scq.push([\"track\", {   \"addTags\": [\"paid user\"], \"removeTags\": [\"trial user\"],   success: function(){console.log(\"track call successful\");},   failure: function(){console.log(\"track call failed\");},   }]); ``` ### Response ```json   { \"status\": \"200\", \"message\": \"OK\", \"data\": \"success\" } ```
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@sendx.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace sendx\model;

use \ArrayAccess;
use \sendx\ObjectSerializer;

/**
 * WebhookRequest Class Doc Comment
 *
 * @category Class
 * @package  sendx
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enabled' => 'bool',
        'url' => 'string',
        'unsubscribed' => 'bool',
        'dropped' => 'bool',
        'bounced' => 'bool',
        'marked_spam' => 'bool',
        'clicked' => 'bool',
        'opened' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enabled' => null,
        'url' => null,
        'unsubscribed' => null,
        'dropped' => null,
        'bounced' => null,
        'marked_spam' => null,
        'clicked' => null,
        'opened' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enabled' => false,
        'url' => false,
        'unsubscribed' => false,
        'dropped' => false,
        'bounced' => false,
        'marked_spam' => false,
        'clicked' => false,
        'opened' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'enabled' => 'enabled',
        'url' => 'url',
        'unsubscribed' => 'unsubscribed',
        'dropped' => 'dropped',
        'bounced' => 'bounced',
        'marked_spam' => 'markedSpam',
        'clicked' => 'clicked',
        'opened' => 'opened'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'url' => 'setUrl',
        'unsubscribed' => 'setUnsubscribed',
        'dropped' => 'setDropped',
        'bounced' => 'setBounced',
        'marked_spam' => 'setMarkedSpam',
        'clicked' => 'setClicked',
        'opened' => 'setOpened'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'url' => 'getUrl',
        'unsubscribed' => 'getUnsubscribed',
        'dropped' => 'getDropped',
        'bounced' => 'getBounced',
        'marked_spam' => 'getMarkedSpam',
        'clicked' => 'getClicked',
        'opened' => 'getOpened'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('unsubscribed', $data ?? [], null);
        $this->setIfExists('dropped', $data ?? [], null);
        $this->setIfExists('bounced', $data ?? [], null);
        $this->setIfExists('marked_spam', $data ?? [], null);
        $this->setIfExists('clicked', $data ?? [], null);
        $this->setIfExists('opened', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Indicates whether the webhook is enabled.
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The URL where webhook events will be sent.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets unsubscribed
     *
     * @return bool|null
     */
    public function getUnsubscribed()
    {
        return $this->container['unsubscribed'];
    }

    /**
     * Sets unsubscribed
     *
     * @param bool|null $unsubscribed Indicates if the webhook unsubscribes users.
     *
     * @return self
     */
    public function setUnsubscribed($unsubscribed)
    {
        if (is_null($unsubscribed)) {
            throw new \InvalidArgumentException('non-nullable unsubscribed cannot be null');
        }
        $this->container['unsubscribed'] = $unsubscribed;

        return $this;
    }

    /**
     * Gets dropped
     *
     * @return bool|null
     */
    public function getDropped()
    {
        return $this->container['dropped'];
    }

    /**
     * Sets dropped
     *
     * @param bool|null $dropped Indicates if the webhook processes dropped events.
     *
     * @return self
     */
    public function setDropped($dropped)
    {
        if (is_null($dropped)) {
            throw new \InvalidArgumentException('non-nullable dropped cannot be null');
        }
        $this->container['dropped'] = $dropped;

        return $this;
    }

    /**
     * Gets bounced
     *
     * @return bool|null
     */
    public function getBounced()
    {
        return $this->container['bounced'];
    }

    /**
     * Sets bounced
     *
     * @param bool|null $bounced Indicates if the webhook processes bounced events.
     *
     * @return self
     */
    public function setBounced($bounced)
    {
        if (is_null($bounced)) {
            throw new \InvalidArgumentException('non-nullable bounced cannot be null');
        }
        $this->container['bounced'] = $bounced;

        return $this;
    }

    /**
     * Gets marked_spam
     *
     * @return bool|null
     */
    public function getMarkedSpam()
    {
        return $this->container['marked_spam'];
    }

    /**
     * Sets marked_spam
     *
     * @param bool|null $marked_spam Indicates if the webhook processes marked-as-spam events.
     *
     * @return self
     */
    public function setMarkedSpam($marked_spam)
    {
        if (is_null($marked_spam)) {
            throw new \InvalidArgumentException('non-nullable marked_spam cannot be null');
        }
        $this->container['marked_spam'] = $marked_spam;

        return $this;
    }

    /**
     * Gets clicked
     *
     * @return bool|null
     */
    public function getClicked()
    {
        return $this->container['clicked'];
    }

    /**
     * Sets clicked
     *
     * @param bool|null $clicked Indicates if the webhook processes click events.
     *
     * @return self
     */
    public function setClicked($clicked)
    {
        if (is_null($clicked)) {
            throw new \InvalidArgumentException('non-nullable clicked cannot be null');
        }
        $this->container['clicked'] = $clicked;

        return $this;
    }

    /**
     * Gets opened
     *
     * @return bool|null
     */
    public function getOpened()
    {
        return $this->container['opened'];
    }

    /**
     * Sets opened
     *
     * @param bool|null $opened Indicates if the webhook processes open events.
     *
     * @return self
     */
    public function setOpened($opened)
    {
        if (is_null($opened)) {
            throw new \InvalidArgumentException('non-nullable opened cannot be null');
        }
        $this->container['opened'] = $opened;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


