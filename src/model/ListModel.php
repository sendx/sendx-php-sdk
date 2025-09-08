<?php
/**
 * ListModel
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
 * ListModel Class Doc Comment
 *
 * @category Class
 * @package  sendx
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'type' => 'int',
        'send_thank_you_mail' => 'bool',
        'thank_you_from_name' => 'string',
        'thank_you_from_email' => 'string',
        'thank_you_mail_subject' => 'string',
        'thank_you_mail_message' => 'string',
        'thank_you_sender' => 'string',
        'confirm_from_name' => 'string',
        'confirm_from_email' => 'string',
        'confirm_mail_subject' => 'string',
        'confirm_mail_message' => 'string',
        'confirm_success_page' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'confirm_sender' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'send_thank_you_mail' => null,
        'thank_you_from_name' => null,
        'thank_you_from_email' => 'email',
        'thank_you_mail_subject' => null,
        'thank_you_mail_message' => null,
        'thank_you_sender' => null,
        'confirm_from_name' => null,
        'confirm_from_email' => 'email',
        'confirm_mail_subject' => null,
        'confirm_mail_message' => null,
        'confirm_success_page' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'confirm_sender' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'type' => false,
        'send_thank_you_mail' => false,
        'thank_you_from_name' => false,
        'thank_you_from_email' => false,
        'thank_you_mail_subject' => false,
        'thank_you_mail_message' => false,
        'thank_you_sender' => false,
        'confirm_from_name' => false,
        'confirm_from_email' => false,
        'confirm_mail_subject' => false,
        'confirm_mail_message' => false,
        'confirm_success_page' => false,
        'created' => false,
        'updated' => false,
        'confirm_sender' => false
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
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'send_thank_you_mail' => 'sendThankYouMail',
        'thank_you_from_name' => 'thankYouFromName',
        'thank_you_from_email' => 'thankYouFromEmail',
        'thank_you_mail_subject' => 'thankYouMailSubject',
        'thank_you_mail_message' => 'thankYouMailMessage',
        'thank_you_sender' => 'thankYouSender',
        'confirm_from_name' => 'confirmFromName',
        'confirm_from_email' => 'confirmFromEmail',
        'confirm_mail_subject' => 'confirmMailSubject',
        'confirm_mail_message' => 'confirmMailMessage',
        'confirm_success_page' => 'confirmSuccessPage',
        'created' => 'created',
        'updated' => 'updated',
        'confirm_sender' => 'confirmSender'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'send_thank_you_mail' => 'setSendThankYouMail',
        'thank_you_from_name' => 'setThankYouFromName',
        'thank_you_from_email' => 'setThankYouFromEmail',
        'thank_you_mail_subject' => 'setThankYouMailSubject',
        'thank_you_mail_message' => 'setThankYouMailMessage',
        'thank_you_sender' => 'setThankYouSender',
        'confirm_from_name' => 'setConfirmFromName',
        'confirm_from_email' => 'setConfirmFromEmail',
        'confirm_mail_subject' => 'setConfirmMailSubject',
        'confirm_mail_message' => 'setConfirmMailMessage',
        'confirm_success_page' => 'setConfirmSuccessPage',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'confirm_sender' => 'setConfirmSender'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'send_thank_you_mail' => 'getSendThankYouMail',
        'thank_you_from_name' => 'getThankYouFromName',
        'thank_you_from_email' => 'getThankYouFromEmail',
        'thank_you_mail_subject' => 'getThankYouMailSubject',
        'thank_you_mail_message' => 'getThankYouMailMessage',
        'thank_you_sender' => 'getThankYouSender',
        'confirm_from_name' => 'getConfirmFromName',
        'confirm_from_email' => 'getConfirmFromEmail',
        'confirm_mail_subject' => 'getConfirmMailSubject',
        'confirm_mail_message' => 'getConfirmMailMessage',
        'confirm_success_page' => 'getConfirmSuccessPage',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'confirm_sender' => 'getConfirmSender'
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

    public const TYPE_NUMBER_0 = 0;
    public const TYPE_NUMBER_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NUMBER_0,
            self::TYPE_NUMBER_1,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('send_thank_you_mail', $data ?? [], null);
        $this->setIfExists('thank_you_from_name', $data ?? [], null);
        $this->setIfExists('thank_you_from_email', $data ?? [], null);
        $this->setIfExists('thank_you_mail_subject', $data ?? [], null);
        $this->setIfExists('thank_you_mail_message', $data ?? [], null);
        $this->setIfExists('thank_you_sender', $data ?? [], null);
        $this->setIfExists('confirm_from_name', $data ?? [], null);
        $this->setIfExists('confirm_from_email', $data ?? [], null);
        $this->setIfExists('confirm_mail_subject', $data ?? [], null);
        $this->setIfExists('confirm_mail_message', $data ?? [], null);
        $this->setIfExists('confirm_success_page', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('confirm_sender', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Encrypted ID of the list
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the list
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type Type of the list representing opt-in methods (1: Single Opt-In, 2: Double Opt-In)
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets send_thank_you_mail
     *
     * @return bool|null
     */
    public function getSendThankYouMail()
    {
        return $this->container['send_thank_you_mail'];
    }

    /**
     * Sets send_thank_you_mail
     *
     * @param bool|null $send_thank_you_mail Indicates if a thank-you email should be sent
     *
     * @return self
     */
    public function setSendThankYouMail($send_thank_you_mail)
    {
        if (is_null($send_thank_you_mail)) {
            throw new \InvalidArgumentException('non-nullable send_thank_you_mail cannot be null');
        }
        $this->container['send_thank_you_mail'] = $send_thank_you_mail;

        return $this;
    }

    /**
     * Gets thank_you_from_name
     *
     * @return string|null
     */
    public function getThankYouFromName()
    {
        return $this->container['thank_you_from_name'];
    }

    /**
     * Sets thank_you_from_name
     *
     * @param string|null $thank_you_from_name Name displayed as the sender in the thank-you email
     *
     * @return self
     */
    public function setThankYouFromName($thank_you_from_name)
    {
        if (is_null($thank_you_from_name)) {
            throw new \InvalidArgumentException('non-nullable thank_you_from_name cannot be null');
        }
        $this->container['thank_you_from_name'] = $thank_you_from_name;

        return $this;
    }

    /**
     * Gets thank_you_from_email
     *
     * @return string|null
     */
    public function getThankYouFromEmail()
    {
        return $this->container['thank_you_from_email'];
    }

    /**
     * Sets thank_you_from_email
     *
     * @param string|null $thank_you_from_email Email address from which the thank-you email is sent
     *
     * @return self
     */
    public function setThankYouFromEmail($thank_you_from_email)
    {
        if (is_null($thank_you_from_email)) {
            throw new \InvalidArgumentException('non-nullable thank_you_from_email cannot be null');
        }
        $this->container['thank_you_from_email'] = $thank_you_from_email;

        return $this;
    }

    /**
     * Gets thank_you_mail_subject
     *
     * @return string|null
     */
    public function getThankYouMailSubject()
    {
        return $this->container['thank_you_mail_subject'];
    }

    /**
     * Sets thank_you_mail_subject
     *
     * @param string|null $thank_you_mail_subject Subject line of the thank-you email
     *
     * @return self
     */
    public function setThankYouMailSubject($thank_you_mail_subject)
    {
        if (is_null($thank_you_mail_subject)) {
            throw new \InvalidArgumentException('non-nullable thank_you_mail_subject cannot be null');
        }
        $this->container['thank_you_mail_subject'] = $thank_you_mail_subject;

        return $this;
    }

    /**
     * Gets thank_you_mail_message
     *
     * @return string|null
     */
    public function getThankYouMailMessage()
    {
        return $this->container['thank_you_mail_message'];
    }

    /**
     * Sets thank_you_mail_message
     *
     * @param string|null $thank_you_mail_message Plain text message body of the thank-you email
     *
     * @return self
     */
    public function setThankYouMailMessage($thank_you_mail_message)
    {
        if (is_null($thank_you_mail_message)) {
            throw new \InvalidArgumentException('non-nullable thank_you_mail_message cannot be null');
        }
        $this->container['thank_you_mail_message'] = $thank_you_mail_message;

        return $this;
    }

    /**
     * Gets thank_you_sender
     *
     * @return string|null
     */
    public function getThankYouSender()
    {
        return $this->container['thank_you_sender'];
    }

    /**
     * Sets thank_you_sender
     *
     * @param string|null $thank_you_sender Details of the sender of the thank-you email
     *
     * @return self
     */
    public function setThankYouSender($thank_you_sender)
    {
        if (is_null($thank_you_sender)) {
            throw new \InvalidArgumentException('non-nullable thank_you_sender cannot be null');
        }
        $this->container['thank_you_sender'] = $thank_you_sender;

        return $this;
    }

    /**
     * Gets confirm_from_name
     *
     * @return string|null
     */
    public function getConfirmFromName()
    {
        return $this->container['confirm_from_name'];
    }

    /**
     * Sets confirm_from_name
     *
     * @param string|null $confirm_from_name Name displayed as the sender in the confirmation email
     *
     * @return self
     */
    public function setConfirmFromName($confirm_from_name)
    {
        if (is_null($confirm_from_name)) {
            throw new \InvalidArgumentException('non-nullable confirm_from_name cannot be null');
        }
        $this->container['confirm_from_name'] = $confirm_from_name;

        return $this;
    }

    /**
     * Gets confirm_from_email
     *
     * @return string|null
     */
    public function getConfirmFromEmail()
    {
        return $this->container['confirm_from_email'];
    }

    /**
     * Sets confirm_from_email
     *
     * @param string|null $confirm_from_email Email address from which the confirmation email is sent
     *
     * @return self
     */
    public function setConfirmFromEmail($confirm_from_email)
    {
        if (is_null($confirm_from_email)) {
            throw new \InvalidArgumentException('non-nullable confirm_from_email cannot be null');
        }
        $this->container['confirm_from_email'] = $confirm_from_email;

        return $this;
    }

    /**
     * Gets confirm_mail_subject
     *
     * @return string|null
     */
    public function getConfirmMailSubject()
    {
        return $this->container['confirm_mail_subject'];
    }

    /**
     * Sets confirm_mail_subject
     *
     * @param string|null $confirm_mail_subject Subject line of the confirmation email
     *
     * @return self
     */
    public function setConfirmMailSubject($confirm_mail_subject)
    {
        if (is_null($confirm_mail_subject)) {
            throw new \InvalidArgumentException('non-nullable confirm_mail_subject cannot be null');
        }
        $this->container['confirm_mail_subject'] = $confirm_mail_subject;

        return $this;
    }

    /**
     * Gets confirm_mail_message
     *
     * @return string|null
     */
    public function getConfirmMailMessage()
    {
        return $this->container['confirm_mail_message'];
    }

    /**
     * Sets confirm_mail_message
     *
     * @param string|null $confirm_mail_message Plain text message body of the confirmation email
     *
     * @return self
     */
    public function setConfirmMailMessage($confirm_mail_message)
    {
        if (is_null($confirm_mail_message)) {
            throw new \InvalidArgumentException('non-nullable confirm_mail_message cannot be null');
        }
        $this->container['confirm_mail_message'] = $confirm_mail_message;

        return $this;
    }

    /**
     * Gets confirm_success_page
     *
     * @return string|null
     */
    public function getConfirmSuccessPage()
    {
        return $this->container['confirm_success_page'];
    }

    /**
     * Sets confirm_success_page
     *
     * @param string|null $confirm_success_page URL of the success page after confirmation
     *
     * @return self
     */
    public function setConfirmSuccessPage($confirm_success_page)
    {
        if (is_null($confirm_success_page)) {
            throw new \InvalidArgumentException('non-nullable confirm_success_page cannot be null');
        }
        $this->container['confirm_success_page'] = $confirm_success_page;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created Date and time when the list was created
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated Date and time when the list was last updated
     *
     * @return self
     */
    public function setUpdated($updated)
    {
        if (is_null($updated)) {
            throw new \InvalidArgumentException('non-nullable updated cannot be null');
        }
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets confirm_sender
     *
     * @return string|null
     */
    public function getConfirmSender()
    {
        return $this->container['confirm_sender'];
    }

    /**
     * Sets confirm_sender
     *
     * @param string|null $confirm_sender Details of the sender of the confirmation email
     *
     * @return self
     */
    public function setConfirmSender($confirm_sender)
    {
        if (is_null($confirm_sender)) {
            throw new \InvalidArgumentException('non-nullable confirm_sender cannot be null');
        }
        $this->container['confirm_sender'] = $confirm_sender;

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


