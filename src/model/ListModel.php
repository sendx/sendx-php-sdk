<?php
/**
 * ListModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  sendx
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SendX REST API
 *
 * # Introduction SendX is an email marketing product. It helps you convert website visitors to customers, send them promotional emails, engage with them using drip sequences and craft custom journeys using powerful but simple automations. The SendX API is organized around REST. Our API has predictable resource-oriented URLs, accepts form-encoded request bodies, returns JSON-encoded responses, and uses standard HTTP response codes, authentication, and verbs. The SendX Rest API doesn’t support bulk updates. You can work on only one object per request. <br>
 *
 * The version of the OpenAPI document: 1.0.1
 * Contact: support@sendx.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
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
        'confirm_sender' => true
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

    public const TYPE_0 = 0;
    public const TYPE_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_0,
            self::TYPE_1,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
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
            array_push($this->openAPINullablesSetToNull, 'confirm_sender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('confirm_sender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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


